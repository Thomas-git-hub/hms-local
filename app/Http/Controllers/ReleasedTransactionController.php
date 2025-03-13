<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ReleasedTransactionController extends Controller
{
    public function index()
    {
        return view('administration.released_transactions');
    }

    public function list(Request $request){

        if(Auth::user()->usertype->name !== 'Faculty'){
            $query = Transaction::with(['honorarium', 'createdBy'])->whereNull('deleted_at')
            ->whereIn('status', ['Released']);
        }else{
            $query = Transaction::with(['honorarium', 'createdBy'])
            ->whereNull('deleted_at')
            ->whereIn('status', ['Released'])
            ->where('employee_id', $request->user_id);
        }

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
                    // return $months[$data->month] ?? 'Unknown';
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
