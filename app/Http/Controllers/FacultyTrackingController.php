<?php

namespace App\Http\Controllers;

use App\Models\Emailing;
use App\Models\Office;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class FacultyTrackingController extends Controller
{
    public function faculty_tracking(){

        if(Auth::user()->usertype->name === 'Faculty'){

            $pendingMails = Emailing::where('status', 'Unread')->where('to_user', Auth::user()->employee_id);
            $EmailCount = $pendingMails->count();

            $user = Auth::user();
            $collegeDetails = DB::connection('ors_pgsql')->table('college')
            ->where('id', $user->college_id)
            ->first();

            $bugs_office = Office::where('name', 'Administration')->first();
            $bugt_office = Office::where('name', 'Budget Office')->first();
            $dean_office = Office::where('name', 'Dean')->first();
            $Accounting_office = Office::where('name', 'Accounting')->first();
            $Cashiers = Office::where('name', 'Cashiers')->first();
            $faculty = Office::where('name', 'Faculty')->first();

            $adminCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('office', $bugs_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $budgtCount =  Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id', Auth::user()->employee_id)
            ->where('office', $bugt_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $deanCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id', Auth::user()->employee_id)
            ->where('office', $dean_office->id)
            ->where('from_office', $bugt_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $deanCountTwo = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id', Auth::user()->employee_id)
            ->where('office', $dean_office->id)
            ->where('from_office', $Accounting_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $acctCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id', Auth::user()->employee_id)
            ->where('office', $Accounting_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $cashCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id', Auth::user()->employee_id)
            ->where('office', $Cashiers->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $releaseCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id',Auth::user()->employee_id)
            ->whereIN('status', ['Complete', 'Released'])
            ->count();


            if(!empty($collegeDetails)){
                $college = $collegeDetails->college_name;
            }
            else{
                $college = 'No Assigned College';
            }

        }else{

            $pendingMails = Emailing::where('status', 'Unread')->where('to_user', Auth::user()->employee_id);
            $EmailCount = $pendingMails->count();

            $user = Auth::user();
            $collegeDetails = DB::connection('ors_pgsql')->table('college')
            ->where('id', $user->college_id)
            ->first();

            $bugs_office = Office::where('name', 'Administration')->first();
            $bugt_office = Office::where('name', 'Budget Office')->first();
            $dean_office = Office::where('name', 'Dean')->first();
            $Accounting_office = Office::where('name', 'Accounting')->first();
            $Cashiers = Office::where('name', 'Cashiers')->first();
            $faculty = Office::where('name', 'Faculty')->first();

            $adminCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('office', $bugs_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $budgtCount =  Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('office', $bugt_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $deanCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('office', $dean_office->id)
            ->where('from_office', $bugt_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $deanCountTwo = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('office', $dean_office->id)
            ->where('from_office', $Accounting_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $acctCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('office', $Accounting_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $cashCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('office', $Cashiers->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold'])
            ->count();

            $releaseCount = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->whereIN('status', ['Complete', 'Released'])
            ->count();


            if(!empty($collegeDetails)){
                $college = $collegeDetails->college_name;
            }
            else{
                $college = 'No Assigned College';
            }

        }

        return view('administration.faculty_tracking', compact('user', 'college', 'adminCount', 'budgtCount', 'deanCount', 'acctCount', 'cashCount', 'releaseCount', 'EmailCount', 'deanCountTwo'));
    }

    public function AdminList(Request $request)
    {

        $query = array();
        $bugs_office = Office::where('name', 'Administration')->first();

        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])
                ->whereNull('deleted_at')
                ->where('office', $bugs_office->id)
                ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);

        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id', $request->user_id)
            ->where('office', $bugs_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }

        // ->orWhere('status', 'On-hold');

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

            ->addColumn('faculty', function($data) use($ibu_dbcon) {
                $employeeDetails = $ibu_dbcon->table('employee')
                ->where('id', $data->employee_id)
                ->first();
                return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
            })

            ->addColumn('status', function($data) {
                return $data->status;
            })
            ->addColumn('batch_id', function($data) {
                return $data->batch_id ? $data->batch_id: 'No Batch ID Found';
            })

            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })
            ->addColumn('sem', function($data) {
                return $data->sem ? $data->sem : 'N/A';
            })

            ->addColumn('year', function($data) {
                return $data->year ? $data->year : 'N/A';
            })

            ->addColumn('date_received', function($data) {
                return $data->date_of_trans
                ? date('F j, Y', strtotime($data->date_of_trans))
                : 'N/A';
            })

            ->addColumn('transaction_date', function($data) {
                return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
            })
            ->addColumn('transaction_date', function($data) {
                return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
            })

            ->addColumn('month', function($data) use ($months) {
                // return $months[$data->month] ?? 'Unknown';
                return [
                    'month_number' => $data->month,
                    'month_name' => $months[$data->month] ?? 'Unknown'
                ];
            })

            ->make(true);
    }

    public function BudgetList(Request $request)
    {

        $query = array();
        $bugt_office = Office::where('name', 'Budget Office')->first();

        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])
                ->whereNull('deleted_at')
                ->where('office', $bugt_office->id)
                ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
                ->whereNull('deleted_at')
                ->where('employee_id', $request->user_id)
                ->where('office', $bugt_office->id)
                ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }


        // ->orWhere('status', 'On-hold');

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

            ->addColumn('faculty', function($data) use($ibu_dbcon) {
                $employeeDetails = $ibu_dbcon->table('employee')
                ->where('id', $data->employee_id)
                ->first();
                return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
            })

            ->addColumn('status', function($data) {
                return $data->status;
            })
            ->addColumn('batch_id', function($data) {
                return $data->batch_id ? $data->batch_id: 'No Batch ID Found';
            })

            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })
            ->addColumn('sem', function($data) {
                return $data->sem ? $data->sem : 'N/A';
            })

            ->addColumn('year', function($data) {
                return $data->year ? $data->year : 'N/A';
            })

            ->addColumn('date_received', function($data) {
                return $data->date_of_trans
                ? date('F j, Y', strtotime($data->date_of_trans))
                : 'N/A';
            })

            ->addColumn('transaction_date', function($data) {
                return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
            })

            ->addColumn('month', function($data) use ($months) {
                // return $months[$data->month] ?? 'Unknown';
                return [
                    'month_number' => $data->month,
                    'month_name' => $months[$data->month] ?? 'Unknown'
                ];
            })

            ->make(true);
    }

    public function DeanList(Request $request)
    {

        $query = array();
        $dean_office = Office::where('name', 'Dean')->first();
        $BO_office = Office::where('name', 'Budget Office')->first();

        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('office', $dean_office->id)
            ->where('from_office', $BO_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id', $request->user_id)
            ->where('office', $dean_office->id)
            ->where('from_office', $BO_office->id)
            ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }

        // ->orWhere('status', 'On-hold');

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

            ->addColumn('faculty', function($data) use($ibu_dbcon) {
                $employeeDetails = $ibu_dbcon->table('employee')
                ->where('id', $data->employee_id)
                ->first();
                return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
            })

            ->addColumn('status', function($data) {
                return $data->status;
            })
            ->addColumn('batch_id', function($data) {
                return $data->batch_id ? $data->batch_id: 'No Batch ID Found';
            })

            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })
            ->addColumn('sem', function($data) {
                return $data->sem ? $data->sem : 'N/A';
            })

            ->addColumn('year', function($data) {
                return $data->year ? $data->year : 'N/A';
            })

            ->addColumn('date_received', function($data) {
                return $data->date_of_trans
                ? date('F j, Y', strtotime($data->date_of_trans))
                : 'N/A';
            })

            ->addColumn('transaction_date', function($data) {
                return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
            })

            ->addColumn('month', function($data) use ($months) {
                // return $months[$data->month] ?? 'Unknown';
                return [
                    'month_number' => $data->month,
                    'month_name' => $months[$data->month] ?? 'Unknown'
                ];
            })

            ->make(true);
    }
    public function DeanListTwo(Request $request)
    {

        $query = array();
        $dean_office = Office::where('name', 'Dean')->first();
        $acct_office = Office::where('name', 'Accounting')->first();

        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('office', $dean_office->id)
                    ->where('from_office', $acct_office->id)
                    ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('employee_id', $request->user_id)
                    ->where('office', $dean_office->id)
                    ->where('from_office', $acct_office->id)
                    ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
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

            ->addColumn('faculty', function($data) use($ibu_dbcon) {
                $employeeDetails = $ibu_dbcon->table('employee')
                ->where('id', $data->employee_id)
                ->first();
                return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
            })

            ->addColumn('status', function($data) {
                return $data->status;
            })
            ->addColumn('batch_id', function($data) {
                return $data->batch_id ? $data->batch_id: 'No Batch ID Found';
            })

            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })
            ->addColumn('sem', function($data) {
                return $data->sem ? $data->sem : 'N/A';
            })

            ->addColumn('year', function($data) {
                return $data->year ? $data->year : 'N/A';
            })

            ->addColumn('date_received', function($data) {
                return $data->date_of_trans
                ? date('F j, Y', strtotime($data->date_of_trans))
                : 'N/A';
            })

            ->addColumn('transaction_date', function($data) {
                return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
            })

            ->addColumn('month', function($data) use ($months) {
                // return $months[$data->month] ?? 'Unknown';
                return [
                    'month_number' => $data->month,
                    'month_name' => $months[$data->month] ?? 'Unknown'
                ];
            })

            ->make(true);
    }

    public function AccountList(Request $request)
    {

        $query = array();
        $Accounting_office = Office::where('name', 'Accounting')->first();

        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('office', $Accounting_office->id)
                    ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('employee_id', $request->user_id)
                    ->where('office', $Accounting_office->id)
                    ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }
        // ->orWhere('status', 'On-hold');

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

            ->addColumn('faculty', function($data) use($ibu_dbcon) {
                $employeeDetails = $ibu_dbcon->table('employee')
                ->where('id', $data->employee_id)
                ->first();
                return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
            })

            ->addColumn('status', function($data) {
                return $data->status;
            })
            ->addColumn('batch_id', function($data) {
                return $data->batch_id ? $data->batch_id: 'No Batch ID Found';
            })

            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })
            ->addColumn('sem', function($data) {
                return $data->sem ? $data->sem : 'N/A';
            })

            ->addColumn('year', function($data) {
                return $data->year ? $data->year : 'N/A';
            })

            ->addColumn('date_received', function($data) {
                return $data->date_of_trans
                ? date('F j, Y', strtotime($data->date_of_trans))
                : 'N/A';
            })

            ->addColumn('transaction_date', function($data) {
                return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
            })

            ->addColumn('month', function($data) use ($months) {
                // return $months[$data->month] ?? 'Unknown';
                return [
                    'month_number' => $data->month,
                    'month_name' => $months[$data->month] ?? 'Unknown'
                ];
            })

            ->make(true);
    }

    public function CashierList(Request $request)
    {

        $query = array();
        $Cashiers = Office::where('name', 'Cashiers')->first();


        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('office', $Cashiers->id)
                    ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('employee_id', $request->user_id)
                    ->where('office', $Cashiers->id)
                    ->whereIn('status', ['Processing', 'On Queue', 'On-hold']);
        }
        // ->orWhere('status', 'On-hold');

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

            ->addColumn('faculty', function($data) use($ibu_dbcon) {
                $employeeDetails = $ibu_dbcon->table('employee')
                ->where('id', $data->employee_id)
                ->first();
                return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
            })

            ->addColumn('status', function($data) {
                return $data->status;
            })
            ->addColumn('batch_id', function($data) {
                return $data->batch_id ? $data->batch_id: 'No Batch ID Found';
            })

            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })
            ->addColumn('sem', function($data) {
                return $data->sem ? $data->sem : 'N/A';
            })

            ->addColumn('year', function($data) {
                return $data->year ? $data->year : 'N/A';
            })

            ->addColumn('date_received', function($data) {
                return $data->date_of_trans
                ? date('F j, Y', strtotime($data->date_of_trans))
                : 'N/A';
            })

            ->addColumn('transaction_date', function($data) {
                return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
            })

            ->addColumn('month', function($data) use ($months) {
                // return $months[$data->month] ?? 'Unknown';
                return [
                    'month_number' => $data->month,
                    'month_name' => $months[$data->month] ?? 'Unknown'
                ];
            })

            ->make(true);
    }

    public function honorarium_released(Request $request)
    {

        $query = array();
        $faculty = Office::where('name', 'Faculty')->first();
        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])
                ->whereNull('deleted_at')
                ->whereIN('status', ['Complete', 'Released']);
        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
                ->whereNull('deleted_at')
                ->where('employee_id', $request->user_id)
                ->whereIN('status', ['Complete', 'Released']);
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

            ->addColumn('faculty', function($data) use($ibu_dbcon) {
                $employeeDetails = $ibu_dbcon->table('employee')
                ->where('id', $data->employee_id)
                ->first();
                return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
            })

            ->addColumn('status', function($data) {
                return $data->status;
            })
            ->addColumn('batch_id', function($data) {
                return $data->batch_id ? $data->batch_id: 'No Batch ID Found';
            })

            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })
            ->addColumn('sem', function($data) {
                return $data->sem ? $data->sem : 'N/A';
            })

            ->addColumn('year', function($data) {
                return $data->year ? $data->year : 'N/A';
            })

            ->addColumn('date_received', function($data) {
                return $data->date_of_trans
                ? date('F j, Y', strtotime($data->date_of_trans))
                : 'N/A';
            })

            ->addColumn('transaction_date', function($data) {
                return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
            })

            ->addColumn('month', function($data) use ($months) {
                // return $months[$data->month] ?? 'Unknown';
                return [
                    'month_number' => $data->month,
                    'month_name' => $months[$data->month] ?? 'Unknown'
                ];
            })

            ->make(true);
    }

    public function getTransactionByID(Request $request){

        $transaction = Transaction::whereNull('deleted_at')
        ->where('id', $request->id)
        ->first();

        $date = $transaction->updated_at->format('m/d/Y');

        $updatedBy = User::where('id', $transaction->created_by)
        ->first();

        return response()->json([
            'transaction' => $transaction,
            'updatedBy' => $updatedBy,
            'date' => $date,
         ]);


    }

    public function deposited(Request $request){
        try {
            $transaction = Transaction::findOrFail(request()->id);
            $transaction->status = 'Released';
            $transaction->created_by = Auth::user()->id;
            $transaction->updated_at = now();
            $transaction->save();

            return response()->json([
                'success' => true,
                'message' => 'The trasaction has been released.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function compliance_list(Request $request)
    {

        $query = array();
        $faculty = Office::where('name', 'Faculty')->first();

        $query = Transaction::with(['honorarium', 'createdBy', 'email'])
            ->whereNull('deleted_at')
            ->where('employee_id', Auth::user()->employee_id)
            ->where('status', 'On-hold');


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

            ->addColumn('date', function($data) {
                return $data->email->created_at->format('F j, Y');
            })
            ->addColumn('from', function($data) {
                return $data->email->employee->first_name . ' ' . $data->email->employee->last_name;
            })

            ->addColumn('honorarium', function($data) {
                return $data->honorarium_id ? $data->honorarium->name : 'N/A';
            })
            ->addColumn('for_compliance', function($data) {
                return implode(', ', json_decode($data->email->documentation));
            })

            ->addColumn('days_passed', function($data) {
                $createdDate = Carbon::parse($data->created_at);
                $currentDate = Carbon::now();
                return (int) $createdDate->diffInDays($currentDate);
            })

            ->make(true);
    }

    public function filtered(Request $request){

        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])->whereNull('deleted_at');
        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->where('employee_id', $request->user_id);
        }

        $query = Transaction::with(['honorarium', 'createdBy'])->whereNull('deleted_at');

        if ($request->has('faculty_name') && !empty($request->faculty_name)) {
            $employeeDetails = DB::connection('ors_pgsql')->table('employee')
                ->where(DB::raw("LOWER(CONCAT(employee_fname, ' ', employee_lname))"), 'LIKE', '%' . strtolower($request->faculty_name) . '%')
                ->first();

            if ($employeeDetails) {
                $query->where('employee_id', $employeeDetails->id);
            } else {
                $query->whereRaw('1 = 0');
            }
        }

        if ($request->has('tracking_number') && !empty($request->tracking_number)) {
            $trackingNumber = str_replace(' ', '', $request->tracking_number);
            $query->where(DB::raw('REPLACE(batch_id, " ", "")'), 'LIKE', '%' . $trackingNumber . '%');
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

                ->addColumn('date_of_trans', function($data) {
                    return $data->date_of_trans ? Carbon::parse($data->date_of_trans)->format('F j, Y') : '';
                })

                ->addColumn('employee_id', function($data) {
                    return $data->employee_id;
                })
                ->addColumn('office', function($data) {
                    $office = Office::where('id', $data->office)->first();
                    return $office->name;
                })

                ->addColumn('status', function($data) {
                    return $data->status;
                })

                ->addColumn('faculty', function($data) use($ibu_dbcon) {
                    $employeeDetails = $ibu_dbcon->table('employee')
                    ->where('id', $data->employee_id)
                    ->first();
                    return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
                })

                ->addColumn('email', function($data) use($ibu_dbcon) {
                    $employeeDetails = $ibu_dbcon->table('employee_user')
                    ->where('id', $data->employee_id)
                    ->first();
                    return $employeeDetails ->email;
                })
                ->addColumn('id_number', function($data) use($ibu_dbcon) {
                    return $data->ee_number ? $data->ee_number : 0;
                })
                ->addColumn('academic_rank', function($data) use($ibu_dbcon) {
                    $employeeDetails = $ibu_dbcon->table('employee')
                    ->where('id', $data->employee_id)
                    ->first();
                    return ucfirst($employeeDetails->employee_academic_rank);
                })

                ->addColumn('college', function($data) use($ibu_dbcon) {
                    $employeeDetails = $ibu_dbcon->table('employee')
                    ->where('id', $data->employee_id)
                    ->first();

                    $collegeDetails = $ibu_dbcon->table('college')
                    ->where('id', $employeeDetails->college_id)
                    ->first();
                    return $collegeDetails->college_shortname ? $collegeDetails->college_shortname : 'No College Found';
                })

                ->addColumn('honorarium', function($data) {
                    return $data->honorarium_id ? $data->honorarium->name : 'N/A';
                })

                ->addColumn('month', function($data) use ($months) {
                    return [
                        'month_number' => $data->month,
                        'month_name' => $months[$data->month] ?? 'Unknown'
                    ];
                })

                ->addColumn('created_by', function($data) {
                    return $data->createdBy ? $data->createdBy->first_name  . ' ' . $data->createdBy->last_name: 'Unknown';
                })

                ->addColumn('updated_at', function ($data) {
                    return $data->updated_at ? $data->updated_at->format('m-d-Y') : 'N/A';
                })

                // newly added remarks column, added last oct 4, 2024
                ->addColumn('remarks', function($data) {
                   return '';
                })

                ->addColumn('remark', function($data) {
                   return $data->remarks ?? 'No remarks';
                })

                ->addColumn('action', function($data) {
                    $usertype = Auth::user()->usertype->name;
                    if ( $usertype === 'Admin' ||  $usertype === 'Accounting') {
                        $editButton = '<button type="button" class="btn btn-icon me-2 btn-label-success edit-btn"><span class="tf-icons bx bx-pencil bx-18px"></span></button>';

                    }else{
                        $editButton = '';
                    }

                    if ($usertype !== 'Superadmin') {
                        $on_holdButton = '<button type="button" class="btn btn-icon me-2 btn-label-danger on-hold-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd" id="sendEmailBtn"><span class="tf-icons bx bxs-hand bx-18px"></span></button>';
                    }else{
                        $on_holdButton = '';
                    }
                    // $editButton = '<button type="button" class="btn btn-icon me-2 btn-label-success edit-btn"><span class="tf-icons bx bx-pencil bx-18px"></span></button>';

                    return '<div class="d-flex flex-row" data-id="' . $data->id . '">' . $editButton . $on_holdButton . '</div>';
                    })

                ->make(true);

    }


}
