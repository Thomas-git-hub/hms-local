<?php

namespace App\Http\Controllers;

use App\Mail\TempPasswordMail;
use App\Models\Acknowledgement;
use App\Models\Emailing;
use App\Models\Office;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class UserManagementController extends Controller
{

    protected $redirectTo = '/admin_dashboard';

    public function user_management(){
        if(Auth::user()->usertype->name === 'Administrator' || Auth::user()->usertype->name === 'Superadmin'){

            $pendingMails = Emailing::where('status', 'Unread')->where('to_user', Auth::user()->employee_id);
            $EmailCount = $pendingMails->count();
            return view('administration.user_management', compact('EmailCount'));
        }else{
            abort(403, 'Unauthorized action.');
        }
    }


    public function list(Request $request)
    {

        $ibu_dbcon = DB::connection('ors_pgsql');

        $users = User::with('office')->get();

        return DataTables::of($users)
            ->addColumn('id', function($user) {
                return $user->id;
            })
            ->addColumn('faculty', function($user) use($ibu_dbcon){
                return  $user->first_name . ' ' . $user->last_name;
            })

            ->addColumn('usertype', function($user) {
                return $user->usertype ? $user->usertype->name : 'N/A';
            })

            ->addColumn('email', function($user) {
                return $user->email;
            })

            ->addColumn('date', function($user) {
                return $user->created_at;
            })

            ->addColumn('status', function($user) {
                return $user->status;
            })

            ->addColumn('contact', function($user) {
                return $user->contact;
            })

            ->addColumn('position', function($user) {
                return $user->position ? $user->position : 'No Academic Rank';
            })

            ->addColumn('ee_number', function($user) {
                return $user->ee_number ? $user->ee_number : 'No Employee Number';
            })

            ->addColumn('office', function($user) {
                return $user->office->name ? $user->office->name : 'No Office';
            })

            ->editColumn('college', function($user) {
                if($user->college_id){
                    $collegeDetails = DB::connection('ors_pgsql')->table('college')
                    ->where('id', $user->college_id)
                    ->first();
                    return $collegeDetails->college_name;
                }
                else{
                    return 'No College Found';
                }

            })


            ->addColumn('action', function($data) {
                $proxy = '';
                $resetPassButton = '';

                $viewButton = '<button type="button" class="btn btn-icon me-2 btn-label-primary view-btn-user"><span class="tf-icons bx bx-show-alt bx-22px"></span></button>';

                if(Auth::user()->usertype->name === 'Superadmin'){
                    $proxy = '<button type="button" class="btn btn-icon me-2 btn-label-danger proxy-bstn"><span class="tf-icons bx bx-log-in-circle bx-18px"></span></button>';
                    $resetPassButton = '<button type="button" class="btn btn-icon me-2 btn-label-warning reset-btn-user"><span class="tf-icons bx bx-reset  bx-22px"></span></button>';
                }



                return '<div class="d-flex flex-row" data-id="' . $data->id . '">' . $viewButton  . $proxy . $resetPassButton .'</div>';
            })


            ->make(true);
    }


    public function store(Request $request){

        if($request->usertype === '1'){
            $usertype = UserType::where('name', 'Administrator')->first();
            $office = Office::where('name', 'Administration')->first();
        }elseif($request->usertype === '2'){
            $usertype = UserType::where('name', 'Dean')->first();
            $office = Office::where('name', 'Dean')->first();

        }elseif($request->usertype === '3'){
            $usertype = UserType::where('name', 'Budget Office')->first();
            $office = Office::where('name', 'Budget Office')->first();

        }elseif($request->usertype === '4'){
            $usertype = UserType::where('name', 'Accounting')->first();
            $office = Office::where('name', 'Accounting')->first();

        }elseif($request->usertype === '5'){
            $usertype = UserType::where('name', 'Cashiers')->first();
            $office = Office::where('name', 'Cashiers')->first();

        }elseif($request->usertype === '6'){
            $usertype = UserType::where('name', 'Faculty')->first();
            $office = Office::where('name', 'Faculty')->first();

        }

        $request->validate([
            'usertype' => ['required', 'in:1,2,3,4,5,6'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable','string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'ee_number' => ['required', 'regex:/^[A-Za-z0-9\-]+$/'],
            'contact_num' => ['nullable', 'regex:/^(09|\+639)[0-9]{9}$/', 'required_with:contact_num'],
            'user_email' => ['required', 'email'],
        ],[
            'middle_name.string' => 'The Middle Name must be a valid string.',
            'contact_num.regex' => 'The Contact Number must start with 09 or +639 and contain 9 digits.',
            'user_email.required' => 'The Email Address is required',
            'user_email.email' => 'Please provide a valid Email Address.',

        ]);

        $existingUser = User::where('email', $request->user_email)
        ->Where('first_name', $request->first_name)
        ->Where('last_name', $request->last_name)
        ->Where('contact', $request->contact_num)
        ->first();

        if ($existingUser) {
            return response()->json(['success' => 'false', 'message' => 'User already exists.'], 409);
        }

        User::create([
            'employee_id' => $request->employee_id ? $request->employee_id: 0,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'suffix' => $request->suffix,
            'ee_number' => $request->ee_number,
            'position' => $request->position ? $request->position : $request->academicRankValue ,
            'contact' => $request->contact_num,
            'email' => $request->user_email,
            'college_id' => $request->collge_NUM ? $request->collge_NUM: NULL,
            'usertype_id' => $usertype->id,
            'office_id' => $office->id,
            'password' => $request->last_name. '-' .$request->employee_id,

        ]);

        // $password = 'Bugs' . '-' . $request->last_name . '-' . rand(10, 99);

        // Mail::to($request->user_email)->send(new TempPasswordMail($password, $request->first_name));

        return response()->json(['success' => 'true', 'message'=> 'Account added successfully!']);

    }

    public function UserCount(){
        $activeUserCount = User::whereNull('deleted_at')->where('status', 'Active')->count();
        return response()->json(['active_user_count' => $activeUserCount]);
    }

    public function proxy(Request $request){

        $user = User::findOrFail($request->id);

        $randomString = Str::random(10);

        $user->proxy_password = Hash::make($randomString);

        Auth::login($user);

        return response()->json(['success' => true, 'redirect' => $this->redirectTo]);

    }

    public function reset(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed', // Ensures password matches password_confirmation
        ]);


        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $existingUser = DB::connection('mysql')->table('users')->where('email', $request->email)->first();

        if ($existingUser) {
            $password = $request->password;
            $user = User::where('email', $request->email)->first();
            $user->password = Hash::make($password);
            $user->save();

            Mail::to($user->email)->send(new TempPasswordMail($password, $user->first_name));

            return response()->json(['success' => true, 'data'=> $password,  'message' => 'Successfully reset password.']);
        }

        return response()->json(['success' => false, 'message' => 'User Not Found']);
    }

    public function checkAdminPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6',
        ]);

        $admin = Auth::user();

        if (Hash::check($request->password, $admin->password)) {
            return response()->json(['success'=> true, 'message' => 'Password is correct'], 200);
        } else {
            return response()->json(['success'=> false, 'error' => 'Incorrect password'], 401);
        }
    }
}
