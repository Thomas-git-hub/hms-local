<?php

namespace App\Http\Controllers;

use App\Models\Adviser;
use App\Models\Member;
use App\Models\Chairperson;
use App\Models\Emailing;
use App\Models\Office;
use App\Models\ThesisTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ThesisMonitorController extends Controller
{
    public function index(){
            $pendingMails = Emailing::where('status', 'Unread')->where('to_user', Auth::user()->employee_id);
            $EmailCount = $pendingMails->count();

            $user = Auth::user();
            $collegeDetails = DB::connection('ors_pgsql')->table('college')
            ->where('id', $user->college_id)
            ->first();

            // $searchAdviserID = '';
            // $searchChairpersonID = '';

            $bugs_office = Office::where('name', 'Administration')->first();
            $bugt_office = Office::where('name', 'Budget Office')->first();
            $dean_office = Office::where('name', 'Dean')->first();
            $Accounting_office = Office::where('name', 'Accounting')->first();
            $Cashiers = Office::where('name', 'Cashiers')->first();
            $faculty = Office::where('name', 'Faculty')->first();
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();


        if(Auth::user()->usertype->name === 'Faculty'){

            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){

                    $initialDeanCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('created_on', $dean_office->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->whereIn('status', ['processing'])
                    ->count();

                    $adminCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchChairpersonID->id)
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('updated_on', $bugs_office->id)
                    ->where('created_on', $dean_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $budgtCount =  ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchChairpersonID->id)
                    ->where('chairperson_id', $searchAdviserID->id)
                    ->where('updated_on', $bugt_office->id)
                    ->where('created_on', $bugs_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $deanCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('updated_on', $dean_office->id)
                    ->where('created_on', $bugt_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $deanCountTwo = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('updated_on', $dean_office->id)
                    ->where('created_on', $Accounting_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $acctCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('updated_on', $Accounting_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $cashCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('updated_on', $Cashiers->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $releaseCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('status', 'Complete')
                    ->count();

                }

            }elseif($searchAdviserID){
                $initialDeanCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('created_on', $dean_office->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->whereIn('status', ['processing'])
                    ->count();

                    $adminCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $bugs_office->id)
                    ->where('created_on', $dean_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $budgtCount =  ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $bugt_office->id)
                    ->where('created_on', $bugs_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $deanCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $dean_office->id)
                    ->where('created_on', $bugt_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $deanCountTwo = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $dean_office->id)
                    ->where('created_on', $Accounting_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $acctCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $Accounting_office->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $cashCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $Cashiers->id)
                    ->whereIn('status', ['processing', 'On Queue'])
                    ->count();

                    $releaseCount = ThesisTransaction::with([ 'createdBy'])
                    ->whereNull('deleted_at')
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('status', 'Complete')
                    ->count();




            }elseif($searchChairpersonID){
                $initialDeanCount = ThesisTransaction::with([ 'createdBy'])
                ->whereNull('deleted_at')
                ->where('created_on', $dean_office->id)
                ->where('chairperson_id', $searchChairpersonID->id)
                ->whereIn('status', ['processing'])
                ->count();

                $adminCount = ThesisTransaction::with([ 'createdBy'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $bugs_office->id)
                ->where('created_on', $dean_office->id)
                ->whereIn('status', ['processing', 'On Queue'])
                ->count();

                $budgtCount =  ThesisTransaction::with([ 'createdBy'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $bugt_office->id)
                ->where('created_on', $bugs_office->id)
                ->whereIn('status', ['processing', 'On Queue'])
                ->count();

                $deanCount = ThesisTransaction::with([ 'createdBy'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $dean_office->id)
                ->where('created_on', $bugt_office->id)
                ->whereIn('status', ['processing', 'On Queue'])
                ->count();

                $deanCountTwo = ThesisTransaction::with([ 'createdBy'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $dean_office->id)
                ->where('created_on', $Accounting_office->id)
                ->whereIn('status', ['processing', 'On Queue'])
                ->count();

                $acctCount = ThesisTransaction::with([ 'createdBy'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $Accounting_office->id)
                ->whereIn('status', ['processing', 'On Queue'])
                ->count();

                $cashCount = ThesisTransaction::with([ 'createdBy'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $Cashiers->id)
                ->whereIn('status', ['processing', 'On Queue'])
                ->count();

                $releaseCount = ThesisTransaction::with([ 'createdBy'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('status', 'Complete')
                ->count();

            }else{

                $initialDeanCount = 0;

                $adminCount = 0;

                $budgtCount = 0;

                $deanCount = 0;

                $deanCountTwo = 0;

                $acctCount = 0;

                $cashCount = 0;

                $releaseCount = 0;


                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);
            }

        }else{

            $initialDeanCount = ThesisTransaction::with([ 'createdBy'])
            ->whereNull('deleted_at')
            ->where('created_on', $dean_office->id)
            ->whereIn('status', ['processing'])
            ->count();

            $adminCount = ThesisTransaction::with([ 'createdBy'])
            ->whereNull('deleted_at')
            ->where('updated_on', $bugs_office->id)
            ->where('created_on', $dean_office->id)
            ->whereIn('status', ['processing', 'On Queue'])
            ->count();

            $budgtCount =  ThesisTransaction::with([ 'createdBy'])
            ->whereNull('deleted_at')
            ->where('updated_on', $bugt_office->id)
            ->where('created_on', $bugs_office->id)
            ->whereIn('status', ['processing', 'On Queue'])
            ->count();

            $deanCount = ThesisTransaction::with([ 'createdBy'])
            ->whereNull('deleted_at')
            ->where('updated_on', $dean_office->id)
            ->where('created_on', $bugt_office->id)
            ->whereIn('status', ['processing', 'On Queue'])
            ->count();

            $deanCountTwo = ThesisTransaction::with([ 'createdBy'])
            ->whereNull('deleted_at')
            ->where('updated_on', $dean_office->id)
            ->where('created_on', $Accounting_office->id)
            ->whereIn('status', ['processing', 'On Queue'])
            ->count();

            $acctCount = ThesisTransaction::with([ 'createdBy'])
            ->whereNull('deleted_at')
            ->where('updated_on', $Accounting_office->id)
            ->whereIn('status', ['processing', 'On Queue'])
            ->count();

            $cashCount = ThesisTransaction::with([ 'createdBy'])
            ->whereNull('deleted_at')
            ->where('updated_on', $Cashiers->id)
            ->whereIn('status', ['processing', 'On Queue'])
            ->count();

            $releaseCount = ThesisTransaction::with([ 'createdBy'])
            ->whereNull('deleted_at')
            ->where('status', 'Complete')
            ->count();


        }
        // else{
        //     abort(403, 'Unauthorized action.');

        // }


        return view('administration.thesis_track_monitor', compact('user', 'initialDeanCount', 'adminCount', 'budgtCount', 'deanCount', 'acctCount', 'cashCount', 'releaseCount', 'EmailCount', 'deanCountTwo'));
    }

    public function DeanListNewEntries(Request $request)
    {

        $query = array();
        $office = Office::where('name', 'Dean')->first();

        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();

            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('created_on', $office->id)
                    ->where('updated_on', $office->id)
                    ->whereIn('status', ['processing']);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id)
                ->where('created_on', $office->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing']);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('created_on', $office->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing']);

            }else{
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);

            }

        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('created_on', $office->id)
            ->where('updated_on', $office->id)
            ->whereIn('status', ['processing']);

        }

        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
            return $data->defense_date;
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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
            return $data->created_at ? $data->created_at->format('F j, Y') : 'N/A';
        })
        ->make(true);
    }

    public function AdminList(Request $request)
    {

        $query = array();
        $office = Office::where('name', 'Administration')->first();

        if(Auth::user()->usertype->name === 'Faculty'){

            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();

            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $office->id)
                    ->whereIn('status', ['processing', 'On Queue']);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }else{
        $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);
            }

        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('updated_on', $office->id)
            ->whereIn('status', ['processing', 'On Queue']);

        }


        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
            // return $data->defense_date;
            return $data->defense_date ? \Carbon\Carbon::parse($data->defense_date)->format('F j, Y') : '';
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('membersCount', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('created_at', function ($data) {
            return $data->created_at ? $data->created_at->format('F j, Y') : 'N/A';
        })
        ->make(true);
    }

    public function BudgetList(Request $request)
    {

        $query = array();
        $office = Office::where('name', 'Budget Office')->first();

        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();
            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $office->id)
                    ->whereIn('status', ['processing', 'On Queue']);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);
            }

        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('updated_on', $office->id)
            ->whereIn('status', ['processing', 'On Queue']);

        }
        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('membersCount', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('created_at', function ($data) {
            return $data->created_at ? $data->created_at->format('F j, Y') : 'N/A';
        })
        ->make(true);


    }

    public function DeanList(Request $request)
    {
        $query = array();
        $office = Office::where('name', 'Dean')->first();
        $from_office = Office::where('name', 'Budget Office')->first();

        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();

            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $office->id)
                    ->where('created_on', $from_office->id)
                    ->whereIn('status', ['processing', 'On Queue']);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id)
                ->where('updated_on', $office->id)
                ->where('created_on', $from_office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $office->id)
                ->where('created_on', $from_office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);
            }
        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('updated_on', $office->id)
            ->where('created_on', $from_office->id)
            ->whereIn('status', ['processing', 'On Queue']);

        }

        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('membersCount', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('created_at', function ($data) {
            return $data->created_at ? $data->created_at->format('F j, Y') : 'N/A';
        })
        ->make(true);

    }

    public function DeanListTwo(Request $request)
    {

        $query = array();
        $office = Office::where('name', 'Dean')->first();
        $from_office = Office::where('name', 'Accounting')->first();

        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();
            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $office->id)
                    ->where('created_on', $from_office->id)
                    ->whereIn('status', ['processing', 'On Queue']);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id)
                ->where('updated_on', $office->id)
                ->where('created_on', $from_office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $office->id)
                ->where('created_on', $from_office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);
            }
        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('updated_on', $office->id)
            ->where('created_on', $from_office->id)
            ->whereIn('status', ['processing', 'On Queue']);

        }


        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('membersCount', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('created_at', function ($data) {
            return $data->created_at ? $data->created_at->format('F j, Y') : 'N/A';
        })
        ->make(true);

    }

    public function AccountList(Request $request)
    {

        $query = array();
        $office = Office::where('name', 'Accounting')->first();
        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();
            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $office->id)
                    ->whereIn('status', ['processing', 'On Queue']);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);
            }

        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('updated_on', $office->id)
            ->whereIn('status', ['processing', 'On Queue']);

        }

        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('membersCount', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('created_at', function ($data) {
            return $data->created_at ? $data->created_at->format('F j, Y') : 'N/A';
        })
        ->make(true);


    }

    public function CashierList(Request $request)
    {

        $query = array();
        $office = Office::where('name', 'Cashiers')->first();

        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();
            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('updated_on', $office->id)
                    ->whereIn('status', ['processing', 'On Queue']);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('updated_on', $office->id)
                ->whereIn('status', ['processing', 'On Queue']);

            }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);
            }

        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('updated_on', $office->id)
            ->whereIn('status', ['processing', 'On Queue']);

        }

        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('membersCount', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('created_at', function ($data) {
            return $data->created_at ? $data->created_at->format('F j, Y') : 'N/A';
        })
        ->make(true);


    }

    public function honorarium_released(Request $request)
    {

        $query = array();

        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();

            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id)
                    ->where('status', 'Complete');
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id)
                ->where('status', 'Complete');

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id)
                ->where('status', 'Complete');

            }else{
        $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereIn('status', ['not exist']);
            }

        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('status', 'Complete');
        }

        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('membersCount', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('created_at', function ($data) {
            return $data->created_at ? $data->created_at->format('F j, Y') : 'N/A';
        })
        ->make(true);

    }

    public function Thesisdeposited(Request $request){
        try {
            $transaction = ThesisTransaction::findOrFail(request()->id);
            $transaction->status = 'Released';
            $transaction->created_by = Auth::user()->id;
            $transaction->updated_at = now();
            $transaction->save();

            return response()->json([
                'success' => true,
                'message' => 'The thesis trasaction has been released.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function released(Request $request)
    {

        $query = array();

        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();

            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('status', 'Released')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('status', 'Released')
                ->where('adviser_id', $searchAdviserID->id);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('status', 'Released')
                ->where('chairperson_id', $searchChairpersonID->id);
            }

        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('status', 'Released');
        }

        if ($request->has('faculty_name') && !empty($request->faculty_name)) {

            $chairperson = Chairperson::where(DB::raw("LOWER(CONCAT(first_name, ' ', last_name))"), 'LIKE', '%' . strtolower($request->faculty_name) . '%')
                ->first();

            $adviser = Adviser::where(DB::raw("LOWER(CONCAT(first_name, ' ', last_name))"), 'LIKE', '%' . strtolower($request->faculty_name) . '%')
                ->first();


            if ($chairperson) {
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('status', 'Released')
                ->where('chairperson_id', $chairperson->id);

            }

            if($adviser){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('status', 'Released')
                ->where('adviser_id', $adviser->id);
            }
            else {
                $query->whereRaw('1 = 0');
            }
        }

        if ($request->has('tracking_number') && !empty($request->tracking_number)) {
            $trackingNumber = str_replace(' ', '', $request->tracking_number);
            $query->where(DB::raw('REPLACE(tracking_number, " ", "")'), 'LIKE', '%' . $trackingNumber . '%');
        }


        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('members', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('updated_at', function ($data) {
            return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
        })
        ->make(true);

    }

    public function filtered(Request $request)
    {

        $query = array();

        $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
        ->whereNull('deleted_at');

        if(Auth::user()->usertype->name === 'Faculty'){
            $searchAdviserID = Adviser::where('employee_id', Auth::user()->employee_id)->first();
            $searchChairpersonID = Chairperson::where('employee_id', Auth::user()->employee_id)->first();

            if( $searchAdviserID && $searchChairpersonID){

                if($searchAdviserID->id === $searchChairpersonID->id){
                    $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                    ->whereNull('deleted_at')
                    ->where('chairperson_id', $searchChairpersonID->id)
                    ->where('adviser_id', $searchAdviserID->id);
                }

            }elseif($searchAdviserID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('adviser_id', $searchAdviserID->id);

            }elseif($searchChairpersonID){
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $searchChairpersonID->id);
            }

        }else{
            $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
            ->whereNull('deleted_at');
        }

        if ($request->has('faculty_name') && !empty($request->faculty_name)) {

            $chairperson = Chairperson::where(DB::raw("LOWER(CONCAT(first_name, ' ', last_name))"), 'LIKE', '%' . strtolower($request->faculty_name) . '%')
                ->first();

            $adviser = Adviser::where(DB::raw("LOWER(CONCAT(first_name, ' ', last_name))"), 'LIKE', '%' . strtolower($request->faculty_name) . '%')
                ->first();


            if ($chairperson && $adviser) {
                $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'adviser', 'chairperson'])
                ->whereNull('deleted_at')
                ->where('chairperson_id', $chairperson->id)
                ->orwhere('adviser_id', $adviser->id);

            }else {
                $query->whereRaw('1 = 0');
            }
        }

        if ($request->has('tracking_number') && !empty($request->tracking_number)) {
            $trackingNumber = str_replace(' ', '', $request->tracking_number);
            $query->where(DB::raw('REPLACE(tracking_number, " ", "")'), 'LIKE', '%' . $trackingNumber . '%');
        }


        $transactions = $query->get();


        return DataTables::of($transactions)
        ->addColumn('id', function($data) {
            return $data->id;
        })

        ->addColumn('tracking_number', function($data) {
            return $data->tracking_number;
        })

        ->addColumn('student', function($data) {
            return $data->student_id ? ucfirst($data->student->first_name) . ' ' . ucfirst($data->student->last_name) : 'N/A';
        })

        ->editColumn('defense_date', function($data) {
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

        ->addColumn('adviser', function($data) {
            return $data->adviser_id ? ucfirst($data->adviser->first_name) . ' ' . ucfirst($data->adviser->last_name) : 'N/A';

        })

        ->addColumn('chairperson', function($data) {
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

        // ->editColumn('membersCount', function($data) {
        //     return count(json_decode($data->member_ids));
        // })

        ->editColumn('members', function($data) {
            $members = Member::whereIn('id', json_decode($data->member_ids))->get()->map(function($member) {
                return ucfirst($member->first_name) . ' ' . ucfirst($member->last_name);
            })->implode(', ');
            return $members;

        })

        ->editColumn('updated_at', function ($data) {
            return $data->updated_at ? $data->updated_at->format('F j, Y') : 'N/A';
        })
        ->make(true);

    }

}
