<?php

namespace App\Http\Controllers;

use App\Models\Emailing;
use App\Models\Member;
use App\Models\Office;
use App\Models\ThesisLogs;
use App\Models\ThesisTransaction;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ThesisAcknowledgementController extends Controller
{

    public function getThesisAcknowledgement(){

        $acknowledgementCount=  ThesisTransaction::whereNull('deleted_at')
        ->where('status', 'On Queue')
        ->where('updated_on', Auth::user()->office_id)
        ->count();

        return response()->json([
           'acknowledgementCount' => $acknowledgementCount
        ]);
    }

    public function thesis_acknowledgement(request $request)
    {
        if(Auth::user()->usertype->name !== 'Faculty'){
            $TransCountToday = ThesisTransaction::whereNull('deleted_at')
                                    ->where('status', 'On Queue')
                                    ->where('updated_on', Auth::user()->office_id)
                                    ->whereDate('created_at', Carbon::today())
                                    ->count();
            $yesterday = Carbon::yesterday()->format('Y-m-d');

            $TransCountYesterday = ThesisTransaction::whereNull('deleted_at')
                ->where('status', 'On Queue')
                ->where('updated_on', Auth::user()->office_id)
                ->whereDate('updated_at', $yesterday)
                ->count();

            $TransCountDaysAgo = ThesisTransaction::whereNull('deleted_at')
                ->where('status', 'On Queue')
                ->where('updated_on', Auth::user()->office_id)
                ->whereDate('updated_at', '<', now()->subDays(1))
                ->whereDate('updated_at', '>=', now()->subDays(7))
                ->count();

            $pendingMails = Emailing::where('status', 'Unread')->where('to_user', Auth::user()->employee_id);
            $EmailCount = $pendingMails->count();

            $TransactionCount = ThesisTransaction::whereNull('deleted_at')
            ->where('status', 'On Queue')
            ->where('updated_on', Auth::user()->office_id)
            ->count();

            return view('administration.thesis_acknowledgement', compact('TransCountToday', 'TransCountYesterday', 'TransCountDaysAgo', 'EmailCount', 'TransactionCount'));

        }else{
            abort(403, 'Unauthorized action.');
        }
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
            ->where('status', 'On Queue')
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
                ->where('status', 'On Queue')
                ->where('updated_on', Auth::user()->office_id)
                ->count();
            })
            ->addColumn('created_at', function ($data) {
                // return $data->created_at ? $data->created_at->format('m-d-Y') : 'N/A';
                return $data->created_at ? \Carbon\Carbon::parse($data->created_at)->format('F j, Y') : 'N/A';
            })
            ->make(true);
    }

    public function openThesisAcknowledgement(Request $request){
        $tracking_number = $request->input('id');

        $thesisLogs = ThesisLogs::with(['user', 'office', 'transaction'])
        ->where('tracking_number', $tracking_number)
        ->orderBy('id', 'desc')
        ->first();

        $TransCount = ThesisTransaction::with(['createdBy'])
        ->whereNull('deleted_at')
        ->where('updated_on', Auth::user()->office_id)
        ->where('status', 'On Queue')
        ->where('tracking_number', $tracking_number)
        ->count();

        $office = Office::where('id', $thesisLogs->from_office_id)
        ->first();

        $pendingMails = Emailing::where('status', 'Unread')->where('to_user', Auth::user()->employee_id);
        $EmailCount = $pendingMails->count();

        $TransactionCount = ThesisTransaction::with([ 'createdBy'])
        ->whereNull('deleted_at')
        ->where('status', 'On Queue')
        ->where('updated_on', Auth::user()->office_id)
        ->count();

        return view('administration.thesis_open_acknowledgement', compact('tracking_number', 'thesisLogs', 'office', 'TransCount', 'EmailCount', 'TransactionCount'));
    }


    public function open_list(Request $request){

        if(Auth::user()->usertype->name === 'Superadmin'){
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('status', 'On Queue')
            ->where('tracking_number', $request->tracking_number);
        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn'])
                    ->whereNull('deleted_at')
                    ->where('updated_on',  Auth::user()->office_id)
                    ->where('tracking_number', $request->tracking_number)
                    ->where('status', 'On Queue');
        }

        $transactions = $query->get();
        $ibu_dbcon = DB::connection('ors_pgsql');

        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];

        return DataTables::of($transactions)
            ->addColumn('id', function($data) {
                return $data->id;
            })

            ->addColumn('student', function($data) {
                return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
            })

            ->editColumn('defense_date', function($data) {
                // return $data->defense_date;
                return $data->defense_date ? \Carbon\Carbon::parse($data->defense_date)->format('F j, Y') : 'N/A';
            })
            ->editColumn('defense_time', function($data) {
                // return $data->defense_time;
                return \Carbon\Carbon::parse($data->defense_time)->format('h:i A');
            })

            ->addColumn('orNumber', function($data) {
                return $data->or_number;
            })

            ->addColumn('degree', function($data) {
                return $data->degree_id ? ucfirst($data->degree->name) : 'N/A';
            })

            ->addColumn('defense', function($data) {
                return $data->defense_id ? ucfirst($data->defense->name) : 'N/A';
            })

            ->addColumn('adviser', function($data) use($ibu_dbcon) {
                return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

            })

            ->addColumn('chairperson', function($data) use($ibu_dbcon) {
                return $data->chairperson_id ? ucfirst($data->chairperson->first_name) . ' ' . ucfirst($data->chairperson->last_name) : 'N/A';

            })


            ->addColumn('recorder', function($data) {
                return $data->recorder_id ? ucfirst($data->recorder->first_name) . ' ' . ucfirst($data->recorder->last_name) : 'N/A';
            })

            ->editColumn('created_by', function($data) {
                return $data->created_by ? ucfirst($data->createdBy->first_name) . ' ' . ucfirst($data->createdBy->last_name) : 'N/A';
            })

            ->editColumn('created_on', function($data) {
                return $data->created_on ? ucfirst($data->createdOn->name) : 'N/A';
            })

            ->editColumn('membersCount', function($data) {
                $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                    return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
                })->implode(', ');
                return $members;

            })

            ->editColumn('created_at', function ($data) {
                // return $data->created_at ? $data->created_at->format('m-d-Y') : 'N/A';
                return $data->created_at ? \Carbon\Carbon::parse($data->created_at)->format('F j, Y') : 'N/A';
            })
            ->make(true);

    }

    public function acknowledge(Request $request){

        $transactions = ThesisTransaction::with(['createdBy'])
                                ->whereNull('deleted_at')
                                ->where('updated_on', Auth::user()->office_id)
                                ->where('tracking_number', $request->tracking_number)
                                ->where('status', 'On Queue')
                                ->get();

        if ($transactions->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No transactions found with status Processing']);
        }

        $ThesisLogs = ThesisLogs::where('tracking_number', $request->tracking_number)
                        ->where('office_id', Auth::user()->office_id)
                        ->first();

        if($ThesisLogs){
            $ThesisLogs->received_by = Auth::user()->id;
            $ThesisLogs->save();
        }

        foreach ($transactions as $transaction) {
            ThesisTransaction::whereNull('deleted_at')
            ->where('status', 'On Queue')
            ->where('tracking_number', $transaction->tracking_number)
            ->where('updated_on', Auth::user()->office_id)
            ->update([
                'status' => 'processing',
                'updated_on' => Auth::user()->office_id,
                'updated_by' => Auth::user()->id,
                'updated_at' => now(),
            ]);

        }


        return response()->json(['success' => true, 'message' => 'Thesis Acknowledged Successfully.']);
    }


}
