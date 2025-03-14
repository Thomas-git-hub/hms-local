<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Acknowledgement;
use App\Models\Emailing;
use App\Models\ThesisTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;

class SentItemsController extends Controller
{
    public function sent_items(){

        $pendingMails = Emailing::where('status', 'Unread')->where('to_user', Auth::user()->employee_id);
        $EmailCount = $pendingMails->count();

        $TransactionCount = ThesisTransaction::whereNull('deleted_at')
        ->where('status', 'On Queue')
        ->where('updated_on', Auth::user()->office_id)
        ->count();

        return view('administration.sent_items', compact('EmailCount', 'TransactionCount'));
    }
    public function open_sent_items(Request $request){

        $id = $request->input('id');
        $ibu_dbcon = DB::connection('ors_pgsql');
        $data = Emailing::with(['employee', 'send_to_employee'])->where('id', $id)->first();

        $employeeDetails = $ibu_dbcon->table('employee')
        ->where('id', $data->to_user)
        ->first();

        $employee_user = $ibu_dbcon->table('employee_user')
        ->where('id', $data->to_user)
        ->first();

        if (!empty($employeeDetails->employee_fname)) {
            $to_user = ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
            $user_email = $employee_user->email;
            $to_user_id = $employee_user->id;
        }else{
            $to_user =  $data->send_to_employee->first_name . ' ' . $data->send_to_employee->last_name;
            $user_email = $data->send_to_employee->email;
            $to_user_id =  $data->send_to_employee->employee_id;
        }


        $pendingMails = Emailing::where('status', 'Unread')->where('to_user', Auth::user()->employee_id);
        $EmailCount = $pendingMails->count();

        $docuJson = json_decode($data->documentation);

        $TransactionCount = ThesisTransaction::whereNull('deleted_at')
        ->where('status', 'On Queue')
        ->where('updated_on', Auth::user()->office_id)
        ->count();

        return view('administration.open_sent_items', compact('data', 'docuJson', 'EmailCount', 'to_user', 'user_email', 'to_user_id', 'TransactionCount'));
    }

    public function send_reply(Request $request){
        $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'message' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false,'errors' => $validator->errors()], 422);
        }


        $ibu_dbcon = DB::connection('ors_pgsql');

        $employee = $ibu_dbcon->table('employee_user')
        ->where('id', $request->user_id)
        ->first();
        $employeedetails = $ibu_dbcon->table('employee')
                ->where('id', $request->user_id)
                ->first();


        if (!empty($employee->email)) {

            $emailData = [
                'user_id' => $request->user_id,
                'employee_fname' => $employeedetails->employee_fname,
                'subject' => $request->subject,
                'message' => $request->message,
                'sender_email' => Auth::user()->email, // Add sender email
            ];

            Mail::to($employee->email)->send(new SendEmail($emailData));
        }

        $email = new Emailing();
        $email->subject = $request->subject;
        $email->to_user = $request->user_id;
        $email->message = $request->message;
        $email->status = 'Unread';
        $email->created_by = Auth::user()->id;
        $email->save();

        return response()->json(['success' => true, 'message' => 'Email Sent Succesfully']);



    }

    public function getEmails(Request $request)
    {
        // Query to get transactions with status 'On-hold'
        $emails = Emailing::with(['employee', 'send_to_employee'])
        ->where('created_by', Auth::user()->id)
        ->where(function($query) {
            $query->whereNull('deleted_by')
                  ->orWhere('deleted_by', '!=', Auth::user()->employee_id); // Show only emails not deleted by the user
        })
        ->get();
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

        // Return DataTables response
        return DataTables::of($emails)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('name', function ($data) use($ibu_dbcon) {
                $employeeDetails = $ibu_dbcon->table('employee')
                ->where('id', $data->to_user)
                ->first();

                if (!empty($employeeDetails->employee_fname)) {
                    return ucfirst($employeeDetails->employee_fname) . ' ' . ucfirst($employeeDetails->employee_lname);
                }else{
                    return $data->send_to_employee->first_name . ' ' . $data->send_to_employee->last_name;
                }

            })
            ->addColumn('subject', function ($data) {
                return $data->subject;
            })
            ->addColumn('date', function ($data) {
                return $data->created_at ? $data->created_at->format('m-d-Y') : 'N/A';
            })

            ->make(true);
    }


}
