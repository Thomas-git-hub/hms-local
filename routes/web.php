<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HonorariumController;
use App\Http\Controllers\SentItemsController;
use App\Http\Controllers\ForAcknowledgementController;
use App\Http\Controllers\OpenAcknowledgementController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\SendEmailController;
use App\Models\Honorarium;
use App\Http\Controllers\OnHoldController;
use App\Http\Controllers\ProfileController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\CashierQueueController;
use App\Http\Controllers\ComplianceController;
use App\Http\Controllers\FacultyDashboardController;
use App\Http\Controllers\FacultyTrackingController;
use App\Http\Controllers\ThesisAcknowledgementController;
use App\Http\Controllers\ThesisMonitorController;
use App\Http\Controllers\ThesisNewEntriesController;
use App\Http\Controllers\ThesisOutGoingController;
use App\Http\Controllers\ThesisOpenOutGoingController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ReleasedTransactionController;
use App\Http\Controllers\ThesisReleasedTransactionsController;

//START NO AUTHENTICATED ACCESS
Route::middleware(['guest', '419'])->group(function () {

    Route::get('/', [UserController::class, 'index'])->name("login");
    Route::post('/login', [UserController::class, 'login'])->name("login.user");
    Route::get('/registration', [UserController::class, 'registration'])->name("registration");
    Route::post('/register', [UserController::class, 'register'])->name('form.register');

    // Add the forgot password route here
    Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot.password.form');

    // Google Sign In
    Route::get('/auth/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.redirect');
    Route::get('/auth/callback', [GoogleAuthController::class, 'callback'])->name('auth.callback');

});
//END NO AUTHENTICATED ACCESS


//START AUTHENTICATED ACCESS

Route::middleware(['auth_check', '419'])->group(function () {

    Route::post('/test', [UserController::class, 'test'])->name('test');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    // Route::put('/profile/update', [ProfileController::class, 'profile_update'])->name('profile.update');
    Route::match(['post', 'put'], 'profile/update', [ProfileController::class, 'profile_update'])->name('profile.update');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('password.change');
    Route::get('/profile/get-super-admins', [ProfileController::class, 'getSuperAdmins'])->name('get.super.admins');
    Route::post('/profile/send-email', [ProfileController::class, 'sendEmail'])->name('send.email');


    Route::middleware(['faculty'])->group(function () {
        Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard'])->name("admin_dashboard");
    });

    Route::get('/acknowledgementCount', [AdminController::class, 'getAcknowledgement'])->name("acknowledgementCount");
    Route::get('/EmailCount', [AdminController::class, 'getPendingEmail'])->name("EmailCount");

    Route::get('/admin_email', [AdminController::class, 'admin_email'])->name("admin_email");
    Route::get('/admin_open_email', [AdminController::class, 'admin_open_email'])->name("admin_open_email");

    Route::post('/send_email', [SendEmailController::class, 'send_email'])->name("send_email");
    Route::get('/getEmails', [SendEmailController::class, 'getEmails'])->name("getEmails");
    Route::get('/getadmin_email', [AdminController::class, 'getadmin_email'])->name("getadmin_email");
    Route::post('/updateEmailStatus', [SendEmailController::class, 'updateStatus'])->name('updateEmailStatus');
    Route::post('/deleteEmails', [SendEmailController::class, 'deleteEmails'])->name('deleteEmails');

    // Route::get('/sent_items', [AdminController::class, 'admin_open_email'])->name("admin_open_email");
    Route::get('/sent_items', [SentItemsController::class, 'sent_items'])->name("sent_items");
    Route::get('/open_sent_items', [SentItemsController::class, 'open_sent_items'])->name("open_sent_items");
    Route::post('/send_reply', [SentItemsController::class, 'send_reply'])->name("send_reply");
    Route::get('/getEmailsSent', [SentItemsController::class, 'getEmails'])->name("getEmailsSent");

    //START SUPERADMIN ACCESS

    // Route::middleware(['Superadmin'])->group(function () {

        Route::get('/getUser', [UserController::class, 'getUser'])->name('getUser');

        Route::get('/admin_faculty', [AdminController::class, 'admin_faculty'])->name("admin_faculty");
        Route::get('/admin_view_faculty', [AdminController::class, 'admin_view_faculty'])->name("admin_view_faculty");
        Route::get('/admin_faculty/list', [UserController::class, 'list'])->name("admin_faculty.list");
        Route::get('/user-management/user-count', [UserManagementController::class, 'UserCount'])->name('user_management.user_count');


        Route::get('/user_management', [UserManagementController::class, 'user_management'])->name("user_management");
        Route::get('/user_management/list', [UserManagementController::class, 'list'])->name("user_management.list");
        Route::post('/user_management/store', [UserManagementController::class, 'store'])->name("user_management.store");
        Route::post('/user_management/proxy', [UserManagementController::class, 'proxy'])->name("user_management.proxy");
        Route::post('/user_management/reset', [UserManagementController::class, 'reset'])->name("user_management.reset");
        Route::post('/user_management/checkAdminPassword', [UserManagementController::class, 'checkAdminPassword'])->name("user_management.checkAdminPassword");

        Route::get('/admin_honorarium', [AdminController::class, 'admin_honorarium'])->name("admin_honorarium");
        Route::get('/admin_honorarium/list', [HonorariumController::class, 'list'])->name("admin_honorarium.list");
        Route::post('/admin_honorarium/store', [HonorariumController::class, 'store'])->name("admin_honorarium.store");
        Route::post('/admin/honorarium/update/{id}', [HonorariumController::class, 'update'])->name('admin_honorarium.update');
        Route::get('/admin/honorarium/getHonorarium', [HonorariumController::class, 'getHonorarium'])->name('getHonorarium');

        Route::get('/admin_new_entries', [AdminController::class, 'admin_new_entries'])->name("admin_new_entries");
        Route::get('/Getadmin_new_entries', [AdminController::class, 'Getadmin_new_entries'])->name("Getadmin_new_entries");
        Route::get('/admin_new_entries/list', [AdminController::class, 'list'])->name("admin_new_entries.list");
        Route::post('/admin_new_entries/generate_tracking_number', [AdminController::class, 'generate_trackingNum'])->name("admin_new_entries.generate_trackingNum");
        Route::post('/form/submit', [AdminController::class, 'submitForm'])->name('form.submit');
        Route::post('/submit/onHold', [AdminController::class, 'submitOnHold'])->name('submit.onHold');
        Route::post('insertFormData', [SendEmailController::class, 'reply_send'])->name('insertFormData');
        Route::post('/admin_new_entries/destroy', [AdminController::class, 'destroy'])->name('admin_new_entries.destroy');

        Route::get('/admin_on_queue', [AdminController::class, 'admin_on_queue'])->name('admin_on_queue');
        Route::get('/open_on_queue', [QueueController::class, 'OpenOnQueue'])->name('open_on_queue');
        Route::get('/admin_on_queue/list', [QueueController::class, 'list'])->name('admin_on_queue.list');
        Route::get('/admin_on_queue/open_list', [QueueController::class, 'open_list'])->name('admin_on_queue.open_list');

        Route::get('/admin_on_hold', [AdminController::class, 'admin_on_hold'])->name('admin_on_hold');
        Route::get('/main_on_hold', [OnHoldController::class, 'mainOnHold'])->name('main_on_hold');
        Route::get('/main_on_hold_list', [OnHoldController::class, 'list'])->name('main_on_hold.list');



        Route::post('/admin_on_queue/proceed_to_budget-office', [QueueController::class, 'proceedToBudgetOffice'])->name('admin_on_queue.proceedToBudgetOffice');
        Route::post('/admin_on_queue/proceed', [QueueController::class, 'proceed'])->name('admin_on_queue.proceed');
        Route::post('/admin_on_queue/on_hold_batch', [QueueController::class, 'on_hold_batch'])->name('admin_on_queue.on_hold_batch');
        Route::post('/admin_on_queue/proceed_to_cashier', [QueueController::class, 'proceedToCashier'])->name('admin_on_queue.proceedToCashier');
        Route::match(['post', 'put'], 'admin_on_queue/update', [QueueController::class, 'update'])->name('admin_on_queue.update');
        Route::match(['post', 'put'], 'admin_on_queue/change_to_onhold', [QueueController::class, 'change_to_onhold'])->name('admin_on_queue.change_to_onhold');

        Route::get('/cashier_in_queue', [CashierQueueController::class, 'cashier_in_queue'])->name('cashier_in_queue');
        Route::get('/cashier_in_queue/list', [CashierQueueController::class, 'list'])->name('cashier_in_queue.list');

        Route::get('/cashier_open_queue', [CashierQueueController::class, 'cashier_open_queue'])->name('cashier_open_queue');
        Route::get('/cashier_open_queue/open_list', [CashierQueueController::class, 'open_list'])->name('cashier_open_queue.open_list');
        Route::post('/cashier_open_queue/store', [CashierQueueController::class, 'store'])->name('cashier_open_queue.store');
        Route::post('/check-proceed-cashier', [CashierQueueController::class, 'checkIfProceedToCashier'])->name('check.proceed.cashier');
        Route::post('/cashier-open-queue/store-deduction', [CashierQueueController::class, 'storeDeduction'])->name('cashier_open_queue.store_deduction');


        Route::get('/for_acknowledgement', [ForAcknowledgementController::class, 'for_acknowledgement'])->name('for_acknowledgement');
        Route::get('/for_acknowledgement/list', [ForAcknowledgementController::class, 'list'])->name("for_acknowledgement.list");

        Route::get('/open_acknowledgement', [OpenAcknowledgementController::class, 'open_acknowledgement'])->name('open_acknowledgement');
        Route::get('/open_acknowledgement/list', [OpenAcknowledgementController::class, 'list'])->name('open_acknowledgement.list');
        Route::get('/open_acknowledgement/list', [OpenAcknowledgementController::class, 'list'])->name('open_acknowledgement.list');
        Route::post('/open_acknowledgement/acknowledge', [OpenAcknowledgementController::class, 'acknowledge'])->name('open_acknowledgement.acknowledge');


        Route::get('/transactions/on-hold', [OnHoldController::class, 'getOnHoldTransactions'])->name('on_hold_status');
        Route::post('/save/onHold', [OnHoldController::class, 'saveOnHold'])->name('saveOnHold');
        Route::post('/save/UpdateToProceed', [OnHoldController::class, 'UpdateToProceed'])->name('UpdateToProceed');
        Route::post('/update-complied-on', [OnHoldController::class, 'updateCompliedOn'])->name('update.complied.on');
        Route::post('/proceed_on_hold', [OnHoldController::class, 'proceed_on_hold'])->name('proceed_on_hold');


        Route::get('/history', [HistoryController::class, 'history'])->name('history');
        Route::get('/open_history', [HistoryController::class, 'open_history'])->name('open_history');
        Route::get('/open_history/list', [HistoryController::class, 'OpenHistoryList'])->name('OpenHistoryList');
        Route::get('/history/list', [HistoryController::class, 'list'])->name('history.list');

        Route::get('/faculty/bugs', [FacultyTrackingController::class, 'AdminList'])->name('faculty.bugs');
        Route::get('/faculty/budget-office', [FacultyTrackingController::class, 'BudgetList'])->name('faculty.budget-office');
        Route::get('/faculty/dean_office', [FacultyTrackingController::class, 'DeanList'])->name('faculty.dean_office');
        Route::get('/faculty/dean_office/accounting', [FacultyTrackingController::class, 'DeanListTwo'])->name('faculty.dean_office_two');
        Route::get('/faculty/accounting', [FacultyTrackingController::class, 'AccountList'])->name('faculty.accounting');
        Route::get('/faculty/cashier', [FacultyTrackingController::class, 'CashierList'])->name('faculty.cashier');
        Route::get('/faculty/honorarium_released', [FacultyTrackingController::class, 'honorarium_released'])->name('faculty.honorarium_released');
        Route::get('/faculty/filtered', [FacultyTrackingController::class, 'filtered'])->name('faculty.filtered');

        Route::get('/faculty_dashboard', [FacultyDashboardController::class, 'faculty_dashboard'])->name('faculty_dashboard');
        Route::get('/faculty_tracking', [FacultyTrackingController::class, 'faculty_tracking'])->name('faculty_tracking');
        Route::get('/getTransactionByID', [FacultyTrackingController::class, 'getTransactionByID'])->name('getTransactionByID');
        Route::post('/deposited', [FacultyTrackingController::class, 'deposited'])->name('deposited');

        // NEW ROUTE AS OF NOV 4
        // THESIS HONORARIUM PROCESS
        // Thesis New Entries
        Route::get('/thesis_new_entries', [ThesisNewEntriesController::class, 'thesisNewEntries'])->name('thesis.newEntries');
        Route::get('/getStudent', [ThesisNewEntriesController::class, 'getStudent'])->name('thesis.getStudent');
        Route::get('/getMembers', [ThesisNewEntriesController::class, 'getMembers'])->name('thesis.getMembers');
        Route::get('/getDegrees', [ThesisNewEntriesController::class, 'getDegrees'])->name('thesis.getDegrees');
        Route::get('/getRecorder', [ThesisNewEntriesController::class, 'getRecorder'])->name('thesis.getRecorder');
        Route::get('/getChairperson', [ThesisNewEntriesController::class, 'getChairperson'])->name('thesis.getChairperson');
        Route::get('/getAdviser', [ThesisNewEntriesController::class, 'getAdviser'])->name('thesis.getAdviser');
        Route::get('/getDefenseTypes', [ThesisNewEntriesController::class, 'getDefenseTypes'])->name('thesis.getDefenseTypes');
        Route::post('/thesis/store', [ThesisNewEntriesController::class, 'store'])->name('thesis.store');
        Route::get('/thesis/list', [ThesisNewEntriesController::class, 'list'])->name('thesis.list');
        Route::get('/thesis/check-data', [ThesisNewEntriesController::class, 'checkData'])->name('thesis.checkData');
        Route::delete('/thesis/delete/{id}', [ThesisNewEntriesController::class, 'destroy'])->name('thesis.destroy');
        Route::post('/thesis/generateTrackingNum', [ThesisNewEntriesController::class, 'generateTrackingNum'])->name('thesis.generateTrackingNum');
        Route::get('/thesis/getMembersByID', [ThesisNewEntriesController::class, 'getMembersByID'])->name('thesis.getMembersByID');
        Route::get('/thesis/getTransactionByID', [ThesisNewEntriesController::class, 'getTransactionByID'])->name('thesis.getTransactionByID');
        Route::post('/thesis/proceed', [ThesisNewEntriesController::class, 'proceed'])->name('thesis.proceed');

        Route::match(['post', 'put'], 'thesis/update', [ThesisNewEntriesController::class, 'update'])->name('thesis.update');

        Route::get('/thesis/get-items', [ThesisNewEntriesController::class, 'getItems'])->name('thesis.getItems');


        // Thesis Acknowledgement
        Route::get('/thesisAcknowledgement', [ThesisAcknowledgementController::class, 'thesis_acknowledgement'])->name('thesis.thesis_acknowledgement');
        Route::get('/thesis/acknowledgement/list', [ThesisAcknowledgementController::class, 'list'])->name('thesis.acknowledgement.list');
        Route::get('/openThesisAcknowledgement', [ThesisAcknowledgementController::class, 'openThesisAcknowledgement'])->name('thesis.openThesisAcknowledgement');

        Route::get('/thesis/open/list', [ThesisAcknowledgementController::class, 'open_list'])->name('thesis.open.list');
        Route::post('/thesis/acknowledge', [ThesisAcknowledgementController::class, 'acknowledge'])->name('thesis.acknowledge');

        // Thesis Out Going Defenses
        Route::get('/thesis-out-going', [ThesisOutGoingController::class, 'showThesisOutGoing'])->name('thesis.outgoing');
        Route::get('/thesis-out-going/list', [ThesisOutGoingController::class, 'list'])->name('thesis.outgoing.list');
        Route::get('/thesis-out-going/getItems', [ThesisOutGoingController::class, 'getItems'])->name('thesis.outgoing.getItems');

        // Thesis Open Out Going Defenses
        Route::get('/thesis-open-out-going', [ThesisOpenOutGoingController::class, 'showThesisOpenOutGoing'])->name('thesis.open.out.going');
        Route::get('/thesis-open-out-going/list', [ThesisOpenOutGoingController::class, 'open_list'])->name('thesis.open.out.list');
        Route::get('/thesis/fetchTransactionDetails', [ThesisOpenOutGoingController::class, 'fetchTransactionDetails'])->name('thesis.fetchTransactionDetails');
        Route::get('/thesis/honorarium-data', [ThesisOpenOutGoingController::class, 'getHonorariumData'])->name('thesis.honorarium.data');
        Route::post('/thesis/submitAmount', [ThesisOpenOutGoingController::class, 'submitAmount'])->name('thesis.submitAmount');
        Route::post('/thesis/proceedByTN', [ThesisOpenOutGoingController::class, 'proceedByTN'])->name('thesis.proceedByTN');
        Route::post('/thesis/proceed-to-cashier', [ThesisOpenOutGoingController::class, 'proceedToCashier'])->name('thesis.proceed-to-cashier');
        Route::post('/thesis/check-proceed-cashier', [ThesisOpenOutGoingController::class, 'checkIfProceedToCashier'])->name('thesis.check.proceed.cashier');


        Route::get('/thesis-track-and-monitor', [ThesisMonitorController::class, 'index'])->name('thesis.track.and.monitor');
        Route::get('/thesis/dean_office/new-entries', [ThesisMonitorController::class, 'DeanListNewEntries'])->name('thesis.dean_office.new-entries');
        Route::get('/thesis/bugs', [ThesisMonitorController::class, 'AdminList'])->name('thesis.bugs');
        Route::get('/thesis/budget-office', [ThesisMonitorController::class, 'BudgetList'])->name('thesis.budget-office');
        Route::get('/thesis/dean_office', [ThesisMonitorController::class, 'DeanList'])->name('thesis.dean_office');
        Route::get('/thesis/dean_office/accounting', [ThesisMonitorController::class, 'DeanListTwo'])->name('thesis.dean_office_two');
        Route::get('/thesis/accounting', [ThesisMonitorController::class, 'AccountList'])->name('thesis.accounting');
        Route::get('/thesis/cashier', [ThesisMonitorController::class, 'CashierList'])->name('thesis.cashier');
        Route::get('/thesis/honorarium_released', [ThesisMonitorController::class, 'honorarium_released'])->name('thesis.honorarium_released');
        Route::post('/thesis/deposited', [ThesisMonitorController::class, 'Thesisdeposited'])->name('thesis.deposited');
        Route::get('/thesis/released', [ThesisMonitorController::class, 'released'])->name('thesis.released');
        Route::get('/thesis/filtered', [ThesisMonitorController::class, 'filtered'])->name('thesis.filtered');


        Route::get('/getThesisAcknowledgement', [ThesisAcknowledgementController::class, 'getThesisAcknowledgement'])->name('getThesisAcknowledgement');
        Route::get('/getThesisOutgoing', [ThesisOutGoingController::class, 'getThesisOutgoing'])->name('getThesisOutgoing');
        Route::get('/getOnHold', [OnHoldController::class, 'getOnHold'])->name('getOnHold');


        Route::get('/getComplianceList', [ComplianceController::class, 'getComplianceList'])->name('getComplianceList');

        Route::get('/releasedTransactions', [ReleasedTransactionController::class, 'index'])->name('releasedTransactions');
        Route::get('/releasedTransactions/list', [ReleasedTransactionController::class, 'list'])->name('releasedTransactions.list');
        Route::get('/thesis-released-transactions', [ThesisReleasedTransactionsController::class, 'index'])->name('thesisReleasedTransactions');


    // });

    //END SUPERADMIN ACCESS

});

//END AUTHENTICATED ACCESS

// Add this route with your other thesis routes

