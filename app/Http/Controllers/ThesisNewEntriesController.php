<?php

namespace App\Http\Controllers;

use App\Models\Defense;
use App\Models\Degree;
use App\Models\Member;
use App\Models\Recorder;
use App\Models\Student;
use App\Models\ThesisLogs;
use App\Models\Office;
use App\Models\Emailing;
use App\Models\Chairperson;
use App\Models\Adviser;
use App\Models\ThesisTransaction ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use App\Mail\On_Hold_Email;
use App\Mail\On_Hold_Email_two;
use App\Mail\TransactionStatusChanged;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendTransactionEmailsJob;
use Illuminate\Support\Facades\Log;

class ThesisNewEntriesController extends Controller
{
    public function thesisNewEntries()
    {
        if(in_array(Auth::user()->usertype->name, ['Dean', 'Superadmin'])) {
            return view('administration.thesis_new_entries');
        }else{
            abort(403, 'Unauthorized action.');
        }
    }

    public function getStudent(Request $request){

        $searchTerm = $request->input('search'); // Capture search term

        $searchTerm = ucfirst($searchTerm);

        $data = Student::whereNull('deleted_at')
        ->where('status', 'Active')
        ->where(function($query) use ($searchTerm) {
            $query->where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'like', "%{$searchTerm}%")
                ->orWhere('first_name', 'like', "%{$searchTerm}%")
                ->orWhere('last_name', 'like', "%{$searchTerm}%");
        })->get();

        return response()->json($data);

    }

    public function getMembers(Request $request){
        $searchTerm = $request->input('search'); // Capture search term

        $searchTerm = ucfirst($searchTerm);

        $data = Member::whereNull('deleted_at')
        ->where('status', 'Active')
        ->where(function($query) use ($searchTerm) {
            $query->where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'like', "%{$searchTerm}%")
                ->orWhere('first_name', 'like', "%{$searchTerm}%")
                ->orWhere('last_name', 'like', "%{$searchTerm}%");
        })->get();

        return response()->json($data);

    }

    public function getDegrees(){
        $data = Degree::all();
        return response()->json($data);
    }

    public function getDefenseTypes(){
        $data = Defense::all();
        return response()->json($data);
    }

    public function getRecorder(Request $request){
        $searchTerm = $request->input('search'); // Capture search term

        $searchTerm = ucfirst($searchTerm);

        $data = Recorder::whereNull('deleted_at')
        ->where('status', 'Active')
        ->where(function($query) use ($searchTerm) {
            $query->where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'like', "%{$searchTerm}%")
                ->orWhere('first_name', 'like', "%{$searchTerm}%")
                ->orWhere('last_name', 'like', "%{$searchTerm}%");
        })->get();

        return response()->json($data);
    }

    public function getChairperson(Request $request){

        $searchTerm = $request->input('search'); // Capture search term

        $searchTerm = ucfirst($searchTerm);

        $data = Chairperson::whereNull('deleted_at')
        ->where('status', 'Active')
        ->where(function($query) use ($searchTerm) {
            $query->where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'like', "%{$searchTerm}%")
                ->orWhere('first_name', 'like', "%{$searchTerm}%")
                ->orWhere('last_name', 'like', "%{$searchTerm}%");
        })->get();

        return response()->json($data);

    }

    public function getAdviser(Request $request){

        $searchTerm = $request->input('search'); // Capture search term

        $searchTerm = ucfirst($searchTerm);

        $data = Adviser::whereNull('deleted_at')
        ->where('status', 'Active')
        ->where(function($query) use ($searchTerm) {
            $query->where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'like', "%{$searchTerm}%")
                ->orWhere('first_name', 'like', "%{$searchTerm}%")
                ->orWhere('last_name', 'like', "%{$searchTerm}%");
        })->get();

        return response()->json($data);

    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Handle Student
            $student_id = $request->student_id;
            if (!$student_id && $request->student_first_name) {
                // Check if the student already exists
                $existingStudent = Student::where('first_name', ucfirst($request->student_first_name))
                    ->where('last_name', ucfirst($request->student_last_name))
                    ->first();

                if ($existingStudent) {
                    // If the student exists, set the student_id
                    $student_id = $existingStudent->id;

                } else {
                    // Create new student
                    $student = Student::create([
                        'first_name' => ucfirst($request->student_first_name),
                        'middle_name' => ucfirst($request->student_middle_name),
                        'last_name' => ucfirst($request->student_last_name),
                        'suffix' => $request->student_suffix,
                        'status' => 'Active',
                        'created_by' => Auth::user()->id,
                        'updated_by' => Auth::user()->id,
                    ]);

                    $student_id = $student->id;
                }
            }

            $adviser_id = $request->adviser_id;
            if (!$adviser_id && $request->adviser_first_name) {
                $add_employee_id =  null;

                $existingAddEmployee = DB::connection('ors_pgsql')->table('employee_user')->where('email', $request->adviser_email)->first();
                if( $existingAddEmployee){
                    $add_employee_id = $existingAddEmployee->id ? $existingAddEmployee->id : null ;
                }

                // Check if the adviser already exists
                $existingAdviser = Adviser::where('email', $request->adviser_email)->first();

                if ($existingAdviser) {
                    // If the adviser exists, set the adviser_id
                    $adviser_id = $existingAdviser->id;
                } else {
                    // Create new adviser
                    $adviser = Adviser::create([
                        'employee_id' => $add_employee_id ? $add_employee_id : null,
                        'first_name' => ucfirst($request->adviser_first_name),
                        'middle_name' => ucfirst($request->adviser_middle_name),
                        'last_name' => ucfirst($request->adviser_last_name),
                        'email' => $request->adviser_email,
                        'suffix' => $request->adviser_suffix,
                        'status' => 'Active',
                        'created_by' => Auth::user()->id,
                        'updated_by' => Auth::user()->id,
                    ]);

                    $adviser_id = $adviser->id;
                }
            }


            $chairperson_id = $request->chairperson_id;
            if (!$chairperson_id && $request->chairperson_first_name) {
                $chair_employee_id = null;

                $existingChairEmployee = DB::connection('ors_pgsql')->table('employee_user')->where('email', $request->chairperson_email)->first();
               if($existingChairEmployee){
                    $chair_employee_id = $existingChairEmployee->id ? $existingChairEmployee->id : null;
               }

                $existingChairperson = Chairperson::where('email', $request->chairperson_email)->first();

                if ($existingChairperson) {
                    // If the chairperson exists, set the chairperson_id
                    $chairperson_id = $existingChairperson->id;
                } else {
                    // Create new chairperson
                    $chairperson = Chairperson::create([
                        'employee_id' => $chair_employee_id ? $chair_employee_id : null,
                        'first_name' => ucfirst($request->chairperson_first_name),
                        'middle_name' => ucfirst($request->chairperson_middle_name),
                        'last_name' => ucfirst($request->chairperson_last_name),
                        'email' => $request->chairperson_email,
                        'suffix' => $request->chairperson_suffix,
                        'status' => 'Active',
                        'created_by' => Auth::user()->id,
                        'updated_by' => Auth::user()->id,
                    ]);

                    $chairperson_id = $chairperson->id;
                }
            }

            // Handle Members
            $member_ids = [];
            for ($i = 1; $i <= 4; $i++) {
                $member_id = $request->input("member_{$i}_id");
                $first_name = ucfirst($request->input("member_{$i}_first_name"));
                $middle_name = ucfirst($request->input("member_{$i}_middle_name"));
                $last_name = ucfirst($request->input("member_{$i}_last_name"));
                $suffix = $request->input("member_{$i}_suffix");
                $member_type = $request->input("member_type_{$i}");

                if (!$member_id && $first_name) {
                    // Check if the member already exists
                    $existingMember = Member::where('first_name', $first_name)
                        ->where('middle_name', $middle_name)
                        ->where('last_name', $last_name)
                        ->where('suffix', $suffix)
                        ->first();

                    if ($existingMember) {
                        // If the member exists, set the member_id
                        $member_ids[] = $existingMember->id;
                    } else {
                        // Create new member
                        $member = Member::create([
                            'first_name' => $first_name,
                            'middle_name' => $middle_name,
                            'last_name' => $last_name,
                            'suffix' => $suffix,
                            'member_type' => $member_type,
                            'status' => 'Active',
                            'created_by' => Auth::user()->id,
                            'updated_by' => Auth::user()->id,
                        ]);
                        $member_ids[] = $member->id;
                    }
                } elseif ($member_id) {
                    $member_ids[] = $member_id;
                }
            }

            // Handle Recorder
            $recorder_id = $request->recorder_id;
            if (!$recorder_id && $request->recorder_first_name) {
                // Check if the recorder already exists
                $existingRecorder = Recorder::where('first_name', $request->recorder_first_name)
                ->where('middle_name', $request->recorder_middle_name)
                ->where('last_name', $request->recorder_last_name)
                ->where('suffix', $request->recorder_suffix)
                ->first();

                if ($existingRecorder) {
                    // If the recorder exists, set the recorder_id
                    $recorder_id = $existingRecorder->id;
                } else {
                    // Create new recorder
                    $recorder = Recorder::create([
                        'first_name' => ucfirst($request->recorder_first_name),
                        'middle_name' => ucfirst($request->recorder_middle_name),
                        'last_name' => ucfirst($request->recorder_last_name),
                        'suffix' => $request->recorder_suffix,
                        'status' => 'Active',
                        'created_by' => Auth::user()->id,
                        'updated_by' => Auth::user()->id,
                    ]);
                    $recorder_id = $recorder->id;
                }
            }

            // Create thesis transaction
            $thesis = new ThesisTransaction ();
            $thesis->student_id = $student_id;
            $thesis->degree_id = $request->degree_id;
            $thesis->defense_id = $request->defense_id;
            $thesis->adviser_id = $adviser_id;
            $thesis->chairperson_id = $chairperson_id;
            $thesis->member_ids = json_encode($member_ids);
            $thesis->recorder_id = $recorder_id;
            $thesis->or_number = $request->or_number;
            $thesis->defense_date = $request->defense_date;
            $thesis->defense_time = $request->defense_time;
            $thesis->created_by = Auth::user()->id;
            $thesis->created_on = Auth::user()->office_id;
            $thesis->updated_by = Auth::user()->id;
            $thesis->updated_on = Auth::user()->office_id;
            $thesis->status = 'processing';
            $thesis->save();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Thesis entry created successfully',
                'data' => $thesis
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            // Check if error is due to null column values
            if (strpos($e->getMessage(), 'cannot be null') !== false) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please fill up the form properly'
                ], 422);
            }

            return response()->json([
                'success' => false,
                'message' => 'Error creating thesis entry: ' . $e->getMessage()
            ], 500);
        }
    }

    public function list()
    {
        $query = ThesisTransaction::with(['student', 'degree', 'defense', 'recorder', 'createdBy', 'createdOn', 'chairperson', 'chairperson'])
            ->whereNull('deleted_at')
            ->where('status', 'processing')
            ->where('created_by', Auth::user()->id)
            ->where('updated_by', Auth::user()->id)
            ->get();

        $ibu_dbcon = DB::connection('ors_pgsql');


        return DataTables::of($query)
            ->addColumn('id', function($data) {
                return $data->id;
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

            ->editColumn('created_at', function($data) {
                return $data->created_at->format('m/d/Y');
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

            ->make(true);
    }

    public function checkData()
    {
        $DataIsZero = ThesisTransaction::where('status', 'processing')
        ->where('created_by', Auth::user()->id)
        ->count();
        return response()->json(['DataIsZero' => $DataIsZero]);
    }

    public function destroy($id)
    {
        try {
            $thesisEntry = ThesisTransaction::findOrFail($id);
            $thesisEntry->delete(); // Soft delete

            return response()->json([
                'success' => true,
                'message' => 'Thesis entry deleted successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting thesis entry: ' . $e->getMessage()
            ], 500);
        }
    }


    public function generateTrackingNum(Request $request){

        $transactions = ThesisTransaction::whereNull('deleted_at')
        ->where('status', 'processing')
        ->where('created_on', Auth::user()->office_id)
        // ->whereNull('tracking_number')
        ->where('created_by', Auth::user()->id)
        ->where('updated_by', Auth::user()->id)
        ->get();

        if ($transactions->isEmpty()) {
            // Find the last batch_id
            $lastBatch = ThesisTransaction::where('status', '<>', 'On Queue')
                ->whereNotNull('tracking_number')
                ->orderBy('tracking_number', 'desc')
                ->first();

            if ($lastBatch) {
                $lastBatchCreatedAt = $lastBatch->created_at->format('mdy');

                // Extract the number before the dash
                $batchParts = explode(' - ', $lastBatch->tracking_number);
                $lastNumber = preg_replace('/\D/', '', $batchParts[0]);

                //Increment the batch number
                $newNumber = $lastNumber + 1;

                // Generate the new tracking_number
                $newBatchId = "THS{$newNumber} - {$lastBatchCreatedAt}";

                foreach ($transactions as $transaction) {
                    $transaction->tracking_number = $newBatchId;
                    $transaction->save();
                }

                // Count transactions with the status 'processing' for the new batch_id
                $processingTransactions = ThesisTransaction::whereNull('deleted_at')
                ->where('tracking_number', $lastBatch->tracking_number)
                ->where('status', 'processing') // Adjust the 'status' value based on your actual column values
                ->count();


                return response()->json([
                    'success' => false,
                    'message' => 'No transactions found',
                    'last_batch_id' => $lastBatch->batch_id, // Return last generated batch_id
                    'processing_transactions' => $processingTransactions, // Count of processing transactions
                    'date' => $lastBatchCreatedAt // Count of processing transactions
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No transactions and no batch_id found'
                ]);
            }
        }

        // Find the last batch_id to increment the number part
        $lastBatch = ThesisTransaction::whereNull('deleted_at')
            ->whereNotNull('tracking_number')
            ->orderBy('tracking_number', 'desc')
            ->first();


        $lastNumber = 0;
        if ($lastBatch) {
            // Extract the number before the dash
            $batchParts = explode(' - ', $lastBatch->tracking_number);
            $lastNumber = preg_replace('/\D/', '', $batchParts[0]);
        }

        // Increment the batch number
        $newNumber = $lastNumber + 1;


        // Format the current date as 'mdy'
        $date = now()->format('mdy');

        // Generate the new tracking_number
        $newBatchId = "THS{$newNumber} - {$date}";

        foreach ($transactions as $transaction) {
            $transaction->tracking_number = $newBatchId;
            $transaction->save();
        }

        // Count total transactions for the new batch_id
        $totalTransactions = ThesisTransaction::whereNull('deleted_at')
                                ->where('tracking_number', $newBatchId)->count();

        // Count transactions with the status 'processing' for the new batch_id
        $processingTransactions = ThesisTransaction::whereNull('deleted_at')
            ->where('tracking_number', $newBatchId)
            ->where('status', 'processing') // Adjust the 'status' value based on your actual column values
            ->count();

            return response()->json([
                'success' => true,
                'message' => 'Tracking Number generated successfully',
                'batch_id' => $newBatchId,
                'total_transactions' => $totalTransactions, // Total transactions count
                'processing_transactions' => $processingTransactions, // Count of processing transactions
                'date' => $date, // Count of processing transactions
            ]);

    }

    public function getMembersByID(Request $request)
    {
        $id = $request->id;
        $thesisEntry = ThesisTransaction::where('id', $id)->first();
        $membersArray = json_decode($thesisEntry->member_ids);

        // Retrieve all needed columns
        $members = Member::whereIn('id', $membersArray)
            ->get(['first_name', 'last_name', 'member_type'])
            ->map(function ($member) {
                return [
                    'first_name' => $member->first_name,
                    'last_name' => $member->last_name,
                    'member_type' => $member->member_type,
                ];
            });


        return response()->json($members);
    }

    public function getTransactionByID(Request $request){
        $id = $request->id;

        $thesisEntry = ThesisTransaction::findOrFail($id);

        $student = Student::where('id',  $thesisEntry->student_id)->first();
        $defense = Defense::where('id',  $thesisEntry->defense_id)->first();
        $degree = Degree::where('id',  $thesisEntry->degree_id)->first();
        $recorder = Recorder::where('id',  $thesisEntry->recorder_id)->first();
        $adviser = Adviser::where('id',  $thesisEntry->adviser_id)->first();
        $chairperson = Chairperson::where('id',  $thesisEntry->chairperson_id)->first();


        $memberIds = json_decode($thesisEntry->member_ids);
        $members = Member::whereIn('id', $memberIds)->get();

         // Prepare member data
        $membersData = $members->map(function ($member) {
            return [
                'id' => $member->id,
                'first_name' => $member->first_name,
                'middle_name' => $member->middle_name,
                'last_name' => $member->last_name,
                'suffix' => $member->suffix,
                'member_type' => $member->member_type,
            ];
        });

        return response()->json([
            'thesisEntry' => $thesisEntry,
            'student' => $student,
            'defense' => $defense,
            'degree' => $degree,
            'recorder' => $recorder,
            'adviser' => $adviser,
            'chairperson' => $chairperson,
            'members' => $membersData,
        ]);
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $id = $request->thesis_id;

            // Find the thesis entry
            $thesisEntry = ThesisTransaction::findOrFail($id);

            // Update Student
            if ($request->student_id) {
                $student = Student::findOrFail($request->student_id);
                $student->update([
                    'first_name' => ucfirst($request->student_first_name),
                    'middle_name' => ucfirst($request->student_middle_name),
                    'last_name' => ucfirst($request->student_last_name),
                    'suffix' => $request->student_suffix,
                    'updated_by' => Auth::user()->id,
                ]);
            }

            // Update Members
            $member_ids = [];
            for ($i = 1; $i <= 4; $i++) {
                $first_name = ucfirst($request->input("member_first_name_{$i}"));
                if (empty($first_name)) {
                    continue; // Skip if the first name is empty
                }
                $member_id = $request->input("member_id_{$i}");
                $member_data = [
                    'first_name' => ucfirst($request->input("member_first_name_{$i}")),
                    'middle_name' => ucfirst($request->input("member_middle_name_{$i}")),
                    'last_name' => ucfirst($request->input("member_last_name_{$i}")),
                    'suffix' => $request->input("member_suffix_{$i}"),
                    'member_type' => $request->input("member_type_{$i}"),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ];

                if ($member_id) {
                    $member = Member::updateOrCreate(['id' => $member_id], $member_data);
                } else {
                    $member = Member::firstOrCreate($member_data);
                }

                $member_ids[] = $member->id;
            }

            // Update Recorder
            if ($request->recorder_id) {
                $recorder = Recorder::findOrFail($request->recorder_id);
                $recorder->update([
                    'first_name' => ucfirst($request->recorder_first_name),
                    'middle_name' => ucfirst($request->recorder_middle_name),
                    'last_name' => ucfirst($request->recorder_last_name),
                    'suffix' => $request->recorder_suffix,
                    'updated_by' => Auth::user()->id,
                ]);
            }

            // Update Thesis Transaction
            $thesisEntry->update([
                'degree_id' => $request->degree,
                'defense_id' => $request->defense_type,
                'adviser_id' => $request->adviser_id,
                'chairperson_id' => $request->chairperson_id,
                'member_ids' => json_encode($member_ids),
                'or_number' => $request->or_number,
                'defense_date' => $request->defense_date,
                'defense_time' => $request->defense_time,
                'updated_by' => Auth::user()->id,
                'updated_on' => Auth::user()->office_id,
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Thesis entry updated successfully',
                'data' => $thesisEntry
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Error updating thesis entry: ' . $e->getMessage()
            ], 500);
        }
    }

    public function proceed(Request $request)
    {
        $ibu_dbcon = DB::connection('ors_pgsql');

        $transactions = ThesisTransaction::whereNull('deleted_at')
        ->where('status', 'processing')
        ->where('tracking_number', '!=', NULL)
        ->where('created_on', Auth::user()->office_id)
        ->where('created_by', Auth::user()->id)
        ->get();

        if ($transactions->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No thesis transactions found with processing status']);
        }

        $batchId = $transactions->first()->tracking_number;
        $usertype = Auth::user()->usertype->name;
        $office = Office::where('name', 'Administration')->first();

        // Update the status and dispatch email jobs
        foreach ($transactions as $transaction) {
            if ($usertype === 'Cashiers') {
                $transaction->update([
                    'status' => 'Complete',
                    'updated_on' => $office->id,
                    'created_by' => Auth::user()->id,
                    'updated_at' => now(),
                ]);
            } else {
                $transaction->update([
                    'status' => 'On Queue',
                    'updated_on' => $office->id,
                    'created_by' => Auth::user()->id,
                    'updated_at' => now(),
                ]);
            }

            $logs = new ThesisLogs();
            $logs->tracking_number = $batchId;
            $logs->office_id = $office->id;
            $logs->from_office_id = Auth::user()->office_id;
            $logs->from_user = Auth::user()->id;
            $logs->save();


            SendTransactionEmailsJob::dispatch($transaction)
                        ->onQueue('emails')
                        ->afterCommit();  // Ensures job runs after transaction commits

                    Log::info('Email job dispatched', [
                        'transaction_id' => $transaction->id,
                        'tracking_number' => $transaction->tracking_number
                    ]);

            // Dispatch email job for each transaction
            if ( $usertype === 'Cashiers' || $usertype === 'Dean') {

            }

        }

        return response()->json(['success' => true, 'message' => 'Transaction proceeded successfully.']);
    }

    public function getItems(){

        $transactions = ThesisTransaction::whereNull('deleted_at')
        ->where('status', 'processing')
        ->where('created_on', Auth::user()->office_id)
        ->where('created_by', Auth::user()->id)
        ->where('updated_by', Auth::user()->id)

        ->count();

        return response()->json(['transactions' => $transactions]);
    }


}
