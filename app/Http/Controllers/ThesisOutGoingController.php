<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\ThesisLogs;
use App\Models\ThesisTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Models\User;

class ThesisOutGoingController extends Controller
{
    public function showThesisOutGoing()
    {
        return view('administration.thesis_out_going');
    }

    public function getThesisOutgoing(){

        $outgoingCount=  ThesisTransaction::whereNull('deleted_at')
        ->where('status', 'processing')
        ->where('updated_on', Auth::user()->office_id)
        ->count();

        return response()->json([
           'outgoingCount' => $outgoingCount
        ]);
    }


    public function list(Request $request)
    {
        // Fetch data from the Acknowledgement table
        $acknowledgements = collect(); // Initialize an empty collection
        DB::statement("SET SQL_MODE=''");

        if ( Auth::user()->usertype->name === 'Administrator') {
            $office = Office::whereIn('name', ['Dean'])->pluck('id');
        }
        elseif (Auth::user()->usertype->name === 'Budget Office') {
            $office = Office::whereIn('name', ['Administration'])->pluck('id');

        } elseif (Auth::user()->usertype->name === 'Accounting' || Auth::user()->usertype->name === 'Cashiers') {
            $office = Office::whereIn('name', ['Dean'])->pluck('id');
        } elseif (Auth::user()->usertype->name === 'Dean') {
            $office = Office::whereIn('name', ['Accounting', 'Budget Office'])->pluck('id');
        }else{
            $office = [];
        }

        $ThesisLogs = ThesisLogs::with(['user', 'office', 'transaction'])
        ->where('office_id', Auth::user()->office_id)
        ->whereIn('from_office_id', $office)
        ->groupBy('tracking_number')
        ->get();

        $filteredThesisLogs = $ThesisLogs->filter(function ($ThesisLogs) {
            $countTran = ThesisTransaction::whereNull('deleted_at')
            ->where('tracking_number', $ThesisLogs->tracking_number)
            ->where('status', 'processing')
            ->where('updated_on', Auth::user()->office_id)
            ->count();
            return $countTran > 0; // Only keep ThesisLogs with a transaction count greater than 0
        });


        // Return data as JSON using DataTables
        return DataTables::of($filteredThesisLogs)
            ->addColumn('tracking_number', function ($data) {
                return $data->tracking_number;
            })
            ->addColumn('from', function ($data) {
                return $data->user->first_name . ' ' . $data->user->last_name . ' ' .
                '(' . $data->office->name . ')';
            })
            ->addColumn('trans_id', function ($data) {
                return ThesisTransaction::whereNull('deleted_at')
                ->where('tracking_number', $data->tracking_number)
                ->where('status', 'processing')
                ->where('updated_on', Auth::user()->office_id)
                ->count();
            })
            ->addColumn('created_at', function ($data) {
                return $data->created_at ? \Carbon\Carbon::parse($data->created_at)->format('F j, Y') : 'N/A';
            })
            ->make(true);
    }

    public function getItems(){

        $transactions = ThesisTransaction::whereNull('deleted_at')
        ->where('status', 'processing')
        ->where('updated_on', Auth::user()->office_id)
        ->where('updated_by', Auth::user()->id)
        ->count();

        return response()->json(['transactions' => $transactions]);
    }


}
