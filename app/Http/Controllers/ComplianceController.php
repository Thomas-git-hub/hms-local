<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ComplianceController extends Controller
{
    public function getComplianceList(Request $request)
    {
        // Query to get transactions with status 'On-hold'
        $transactions = Transaction::with(['createdBy'])
        ->whereNull('deleted_at')
        ->where('employee_id', Auth::user()->employee_id)
        ->where('batch_status', 'Batch On Hold')
        ->get();

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

        // Return DataTables response
        return DataTables::of($transactions)
            ->addColumn('id', function ($data) {
                return $data->id;
            })

            ->addColumn('date', function($data) {
                return $data->updated_at ? Carbon::parse($data->updated_at)->format('F j, Y') : '';
            })


            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })

            ->addColumn('month', function($data) use ($months) {
                // return $months[$data->month] ?? 'Unknown';
                return [
                    'month_number' => $data->month,
                    'month_name' => $months[$data->month] ?? 'Unknown'
                ];
            })

            ->addColumn('from', function($data) {
                return $data->createdBy ? $data->createdBy->first_name  . ' ' . $data->createdBy->middle_name. ' ' .$data->createdBy->last_name. ' ' .'('.$data->createdBy->office->name.')' : 'Unknown';
            })

            ->addColumn('days_passed', function($data) {
                return floor($data->updated_at->diffInDays(now())) . ' Days Ago';
            })

            ->addColumn('for_compliance', function($data) {

                $emailing = DB::table('emailing')
                    ->where('transaction_id', $data->id)
                    ->where('to_user', Auth::user()->employee_id)
                    ->where('created_by', $data->created_by)
                    ->first();

                    if ($emailing && $emailing->documentation) {
                        $documentationArray = json_decode($emailing->documentation, true);
                        return is_array($documentationArray) ? implode(', ', $documentationArray) : '';
                    }
            })

            ->make(true);
    }
}
