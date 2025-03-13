<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YwbNL2rsWzMB3w31',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loginlogin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'registration',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'form.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forgot.password.form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/get-super-admins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.super.admins',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/send-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/acknowledgementCount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'acknowledgementCount',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/EmailCount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EmailCount',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_open_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_open_email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getEmails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getEmails',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getadmin_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getadmin_email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updateEmailStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateEmailStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/deleteEmails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteEmails',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sent_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sent_items',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/open_sent_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_sent_items',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_reply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_reply',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getEmailsSent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getEmailsSent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getUser',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_faculty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_faculty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_view_faculty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_view_faculty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_faculty/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_faculty.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-management/user-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_management.user_count',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_management' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_management',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_management/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_management.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_management/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_management.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_management/proxy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_management.proxy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_management/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_management.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_management/checkAdminPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_management.checkAdminPassword',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_honorarium' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_honorarium',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_honorarium/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_honorarium.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_honorarium/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_honorarium.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/honorarium/getHonorarium' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getHonorarium',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_new_entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_new_entries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Getadmin_new_entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Getadmin_new_entries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_new_entries/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_new_entries.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_new_entries/generate_tracking_number' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_new_entries.generate_trackingNum',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/form/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'form.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit/onHold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submit.onHold',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/insertFormData' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'insertFormData',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_new_entries/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_new_entries.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/open_on_queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_on_queue',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue/open_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue.open_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_hold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_hold',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/main_on_hold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'main_on_hold',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/main_on_hold_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'main_on_hold.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue/proceed_to_budget-office' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue.proceedToBudgetOffice',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue/proceed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue.proceed',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue/on_hold_batch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue.on_hold_batch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue/proceed_to_cashier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue.proceedToCashier',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_on_queue/change_to_onhold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_queue.change_to_onhold',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cashier_in_queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier_in_queue',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cashier_in_queue/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier_in_queue.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cashier_open_queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier_open_queue',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cashier_open_queue/open_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier_open_queue.open_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cashier_open_queue/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier_open_queue.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-proceed-cashier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.proceed.cashier',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cashier-open-queue/store-deduction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier_open_queue.store_deduction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/for_acknowledgement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'for_acknowledgement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/for_acknowledgement/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'for_acknowledgement.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/open_acknowledgement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_acknowledgement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/open_acknowledgement/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_acknowledgement.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/open_acknowledgement/acknowledge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_acknowledgement.acknowledge',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transactions/on-hold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'on_hold_status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save/onHold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'saveOnHold',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save/UpdateToProceed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateToProceed',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-complied-on' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.complied.on',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/proceed_on_hold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'proceed_on_hold',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/open_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'open_history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/open_history/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'OpenHistoryList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/history/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'history.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty/bugs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty.bugs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty/budget-office' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty.budget-office',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty/dean_office' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty.dean_office',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty/dean_office/accounting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty.dean_office_two',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty/accounting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty.accounting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty/cashier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty.cashier',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty/honorarium_released' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty.honorarium_released',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty_dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty_dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faculty_tracking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faculty_tracking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getTransactionByID' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getTransactionByID',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/deposited' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposited',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis_new_entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.newEntries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getStudent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getStudent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getMembers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getMembers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getDegrees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getDegrees',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getRecorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getRecorder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getChairperson' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getChairperson',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getAdviser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getAdviser',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getDefenseTypes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getDefenseTypes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/check-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.checkData',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/generateTrackingNum' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.generateTrackingNum',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/getMembersByID' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getMembersByID',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/getTransactionByID' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getTransactionByID',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/proceed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.proceed',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'PUT' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/get-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.getItems',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesisAcknowledgement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.thesis_acknowledgement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/acknowledgement/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.acknowledgement.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/openThesisAcknowledgement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.openThesisAcknowledgement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/open/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.open.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/acknowledge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.acknowledge',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis-out-going' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.outgoing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis-out-going/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.outgoing.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis-out-going/getItems' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.outgoing.getItems',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis-open-out-going' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.open.out.going',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis-open-out-going/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.open.out.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/fetchTransactionDetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.fetchTransactionDetails',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/honorarium-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.honorarium.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/submitAmount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.submitAmount',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/proceedByTN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.proceedByTN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/proceed-to-cashier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.proceed-to-cashier',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/check-proceed-cashier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.check.proceed.cashier',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis-track-and-monitor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.track.and.monitor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/dean_office/new-entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.dean_office.new-entries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/bugs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.bugs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/budget-office' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.budget-office',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/dean_office' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.dean_office',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/dean_office/accounting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.dean_office_two',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/accounting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.accounting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/cashier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.cashier',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thesis/honorarium_released' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.honorarium_released',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getThesisAcknowledgement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getThesisAcknowledgement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getThesisOutgoing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getThesisOutgoing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getOnHold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getOnHold',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/compliance_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'compliance_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/honorarium/update/([^/]++)(*:40)|/thesis/delete/([^/]++)(*:70))/?$}sDu',
    ),
    3 => 
    array (
      40 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_honorarium.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      70 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::YwbNL2rsWzMB3w31' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:909:"function () {
                    $exception = null;

                    try {
                        \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);
                    } catch (\\Throwable $e) {
                        if (app()->hasDebugModeEnabled()) {
                            throw $e;
                        }

                        report($e);

                        $exception = $e->getMessage();
                    }

                    return response(\\Illuminate\\Support\\Facades\\View::file(\'C:\\\\Users\\\\63963\\\\OneDrive\\\\Desktop\\\\BU-Graduate School project\\\\1. Production\\\\honorarium_monitoring_system\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Foundation\\\\Configuration\'.\'/../resources/health-up.blade.php\', [
                        \'exception\' => $exception,
                    ]), status: $exception ? 500 : 200);
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"00000000000005c80000000000000000";}}',
        'as' => 'generated::YwbNL2rsWzMB3w31',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loginlogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'loginlogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\UserController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registration' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@registration',
        'controller' => 'App\\Http\\Controllers\\UserController@registration',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'form.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@register',
        'controller' => 'App\\Http\\Controllers\\UserController@register',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'form.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forgot.password.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgotPasswordController@index',
        'controller' => 'App\\Http\\Controllers\\ForgotPasswordController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'forgot.password.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@test',
        'controller' => 'App\\Http\\Controllers\\UserController@test',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@profile',
        'controller' => 'App\\Http\\Controllers\\ProfileController@profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
      ),
      'uri' => 'profile/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@profile_update',
        'controller' => 'App\\Http\\Controllers\\ProfileController@profile_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\UserController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@changePassword',
        'controller' => 'App\\Http\\Controllers\\ProfileController@changePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get.super.admins' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/get-super-admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@getSuperAdmins',
        'controller' => 'App\\Http\\Controllers\\ProfileController@getSuperAdmins',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get.super.admins',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/send-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@sendEmail',
        'controller' => 'App\\Http\\Controllers\\ProfileController@sendEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
          3 => 'faculty',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_dashboard',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'acknowledgementCount' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'acknowledgementCount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@getAcknowledgement',
        'controller' => 'App\\Http\\Controllers\\AdminController@getAcknowledgement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'acknowledgementCount',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'EmailCount' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'EmailCount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@getPendingEmail',
        'controller' => 'App\\Http\\Controllers\\AdminController@getPendingEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'EmailCount',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_email',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_email',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_open_email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_open_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_open_email',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_open_email',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_open_email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SendEmailController@send_email',
        'controller' => 'App\\Http\\Controllers\\SendEmailController@send_email',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getEmails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getEmails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SendEmailController@getEmails',
        'controller' => 'App\\Http\\Controllers\\SendEmailController@getEmails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getEmails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getadmin_email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getadmin_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@getadmin_email',
        'controller' => 'App\\Http\\Controllers\\AdminController@getadmin_email',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getadmin_email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateEmailStatus' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateEmailStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SendEmailController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\SendEmailController@updateStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updateEmailStatus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteEmails' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'deleteEmails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SendEmailController@deleteEmails',
        'controller' => 'App\\Http\\Controllers\\SendEmailController@deleteEmails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deleteEmails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sent_items' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sent_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SentItemsController@sent_items',
        'controller' => 'App\\Http\\Controllers\\SentItemsController@sent_items',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sent_items',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_sent_items' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'open_sent_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SentItemsController@open_sent_items',
        'controller' => 'App\\Http\\Controllers\\SentItemsController@open_sent_items',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_sent_items',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SentItemsController@send_reply',
        'controller' => 'App\\Http\\Controllers\\SentItemsController@send_reply',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_reply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getEmailsSent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getEmailsSent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SentItemsController@getEmails',
        'controller' => 'App\\Http\\Controllers\\SentItemsController@getEmails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getEmailsSent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getUser' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getUser',
        'controller' => 'App\\Http\\Controllers\\UserController@getUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getUser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_faculty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_faculty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_faculty',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_faculty',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_faculty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_view_faculty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_view_faculty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_view_faculty',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_view_faculty',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_view_faculty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_faculty.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_faculty/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@list',
        'controller' => 'App\\Http\\Controllers\\UserController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_faculty.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_management.user_count' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-management/user-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagementController@UserCount',
        'controller' => 'App\\Http\\Controllers\\UserManagementController@UserCount',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_management.user_count',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_management' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user_management',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagementController@user_management',
        'controller' => 'App\\Http\\Controllers\\UserManagementController@user_management',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_management',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_management.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user_management/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagementController@list',
        'controller' => 'App\\Http\\Controllers\\UserManagementController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_management.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_management.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user_management/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagementController@store',
        'controller' => 'App\\Http\\Controllers\\UserManagementController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_management.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_management.proxy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user_management/proxy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagementController@proxy',
        'controller' => 'App\\Http\\Controllers\\UserManagementController@proxy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_management.proxy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_management.reset' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user_management/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagementController@reset',
        'controller' => 'App\\Http\\Controllers\\UserManagementController@reset',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_management.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_management.checkAdminPassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user_management/checkAdminPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagementController@checkAdminPassword',
        'controller' => 'App\\Http\\Controllers\\UserManagementController@checkAdminPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_management.checkAdminPassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_honorarium' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_honorarium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_honorarium',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_honorarium',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_honorarium',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_honorarium.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_honorarium/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\HonorariumController@list',
        'controller' => 'App\\Http\\Controllers\\HonorariumController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_honorarium.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_honorarium.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_honorarium/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\HonorariumController@store',
        'controller' => 'App\\Http\\Controllers\\HonorariumController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_honorarium.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_honorarium.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/honorarium/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\HonorariumController@update',
        'controller' => 'App\\Http\\Controllers\\HonorariumController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_honorarium.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getHonorarium' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/honorarium/getHonorarium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\HonorariumController@getHonorarium',
        'controller' => 'App\\Http\\Controllers\\HonorariumController@getHonorarium',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getHonorarium',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_new_entries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_new_entries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_new_entries',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_new_entries',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_new_entries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Getadmin_new_entries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Getadmin_new_entries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@Getadmin_new_entries',
        'controller' => 'App\\Http\\Controllers\\AdminController@Getadmin_new_entries',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Getadmin_new_entries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_new_entries.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_new_entries/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@list',
        'controller' => 'App\\Http\\Controllers\\AdminController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_new_entries.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_new_entries.generate_trackingNum' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_new_entries/generate_tracking_number',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@generate_trackingNum',
        'controller' => 'App\\Http\\Controllers\\AdminController@generate_trackingNum',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_new_entries.generate_trackingNum',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'form.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'form/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@submitForm',
        'controller' => 'App\\Http\\Controllers\\AdminController@submitForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'form.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'submit.onHold' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit/onHold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@submitOnHold',
        'controller' => 'App\\Http\\Controllers\\AdminController@submitOnHold',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'submit.onHold',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'insertFormData' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'insertFormData',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\SendEmailController@reply_send',
        'controller' => 'App\\Http\\Controllers\\SendEmailController@reply_send',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'insertFormData',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_new_entries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_new_entries/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdminController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_new_entries.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_on_queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_on_queue',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_on_queue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_on_queue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'open_on_queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@OpenOnQueue',
        'controller' => 'App\\Http\\Controllers\\QueueController@OpenOnQueue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_on_queue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_on_queue/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@list',
        'controller' => 'App\\Http\\Controllers\\QueueController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue.open_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_on_queue/open_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@open_list',
        'controller' => 'App\\Http\\Controllers\\QueueController@open_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue.open_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_hold' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_on_hold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@admin_on_hold',
        'controller' => 'App\\Http\\Controllers\\AdminController@admin_on_hold',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_hold',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'main_on_hold' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'main_on_hold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OnHoldController@mainOnHold',
        'controller' => 'App\\Http\\Controllers\\OnHoldController@mainOnHold',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'main_on_hold',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'main_on_hold.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'main_on_hold_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OnHoldController@list',
        'controller' => 'App\\Http\\Controllers\\OnHoldController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'main_on_hold.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue.proceedToBudgetOffice' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_on_queue/proceed_to_budget-office',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@proceedToBudgetOffice',
        'controller' => 'App\\Http\\Controllers\\QueueController@proceedToBudgetOffice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue.proceedToBudgetOffice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue.proceed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_on_queue/proceed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@proceed',
        'controller' => 'App\\Http\\Controllers\\QueueController@proceed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue.proceed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue.on_hold_batch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_on_queue/on_hold_batch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@on_hold_batch',
        'controller' => 'App\\Http\\Controllers\\QueueController@on_hold_batch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue.on_hold_batch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue.proceedToCashier' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin_on_queue/proceed_to_cashier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@proceedToCashier',
        'controller' => 'App\\Http\\Controllers\\QueueController@proceedToCashier',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue.proceedToCashier',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
      ),
      'uri' => 'admin_on_queue/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@update',
        'controller' => 'App\\Http\\Controllers\\QueueController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_queue.change_to_onhold' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
      ),
      'uri' => 'admin_on_queue/change_to_onhold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\QueueController@change_to_onhold',
        'controller' => 'App\\Http\\Controllers\\QueueController@change_to_onhold',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin_on_queue.change_to_onhold',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier_in_queue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cashier_in_queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\CashierQueueController@cashier_in_queue',
        'controller' => 'App\\Http\\Controllers\\CashierQueueController@cashier_in_queue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashier_in_queue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier_in_queue.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cashier_in_queue/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\CashierQueueController@list',
        'controller' => 'App\\Http\\Controllers\\CashierQueueController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashier_in_queue.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier_open_queue' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cashier_open_queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\CashierQueueController@cashier_open_queue',
        'controller' => 'App\\Http\\Controllers\\CashierQueueController@cashier_open_queue',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashier_open_queue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier_open_queue.open_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cashier_open_queue/open_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\CashierQueueController@open_list',
        'controller' => 'App\\Http\\Controllers\\CashierQueueController@open_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashier_open_queue.open_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier_open_queue.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cashier_open_queue/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\CashierQueueController@store',
        'controller' => 'App\\Http\\Controllers\\CashierQueueController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashier_open_queue.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check.proceed.cashier' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'check-proceed-cashier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\CashierQueueController@checkIfProceedToCashier',
        'controller' => 'App\\Http\\Controllers\\CashierQueueController@checkIfProceedToCashier',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'check.proceed.cashier',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier_open_queue.store_deduction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cashier-open-queue/store-deduction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\CashierQueueController@storeDeduction',
        'controller' => 'App\\Http\\Controllers\\CashierQueueController@storeDeduction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashier_open_queue.store_deduction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'for_acknowledgement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'for_acknowledgement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ForAcknowledgementController@for_acknowledgement',
        'controller' => 'App\\Http\\Controllers\\ForAcknowledgementController@for_acknowledgement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'for_acknowledgement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'for_acknowledgement.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'for_acknowledgement/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ForAcknowledgementController@list',
        'controller' => 'App\\Http\\Controllers\\ForAcknowledgementController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'for_acknowledgement.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_acknowledgement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'open_acknowledgement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenAcknowledgementController@open_acknowledgement',
        'controller' => 'App\\Http\\Controllers\\OpenAcknowledgementController@open_acknowledgement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_acknowledgement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_acknowledgement.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'open_acknowledgement/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenAcknowledgementController@list',
        'controller' => 'App\\Http\\Controllers\\OpenAcknowledgementController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_acknowledgement.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_acknowledgement.acknowledge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'open_acknowledgement/acknowledge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OpenAcknowledgementController@acknowledge',
        'controller' => 'App\\Http\\Controllers\\OpenAcknowledgementController@acknowledge',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_acknowledgement.acknowledge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'on_hold_status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transactions/on-hold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OnHoldController@getOnHoldTransactions',
        'controller' => 'App\\Http\\Controllers\\OnHoldController@getOnHoldTransactions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'on_hold_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'saveOnHold' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save/onHold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OnHoldController@saveOnHold',
        'controller' => 'App\\Http\\Controllers\\OnHoldController@saveOnHold',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'saveOnHold',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdateToProceed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save/UpdateToProceed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OnHoldController@UpdateToProceed',
        'controller' => 'App\\Http\\Controllers\\OnHoldController@UpdateToProceed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'UpdateToProceed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.complied.on' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-complied-on',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OnHoldController@updateCompliedOn',
        'controller' => 'App\\Http\\Controllers\\OnHoldController@updateCompliedOn',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.complied.on',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'proceed_on_hold' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'proceed_on_hold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OnHoldController@proceed_on_hold',
        'controller' => 'App\\Http\\Controllers\\OnHoldController@proceed_on_hold',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'proceed_on_hold',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\HistoryController@history',
        'controller' => 'App\\Http\\Controllers\\HistoryController@history',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'history',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'open_history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'open_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\HistoryController@open_history',
        'controller' => 'App\\Http\\Controllers\\HistoryController@open_history',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'open_history',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'OpenHistoryList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'open_history/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\HistoryController@OpenHistoryList',
        'controller' => 'App\\Http\\Controllers\\HistoryController@OpenHistoryList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'OpenHistoryList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'history.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'history/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\HistoryController@list',
        'controller' => 'App\\Http\\Controllers\\HistoryController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'history.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty.bugs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty/bugs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@AdminList',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@AdminList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty.bugs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty.budget-office' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty/budget-office',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@BudgetList',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@BudgetList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty.budget-office',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty.dean_office' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty/dean_office',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@DeanList',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@DeanList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty.dean_office',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty.dean_office_two' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty/dean_office/accounting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@DeanListTwo',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@DeanListTwo',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty.dean_office_two',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty.accounting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty/accounting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@AccountList',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@AccountList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty.accounting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty.cashier' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty/cashier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@CashierList',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@CashierList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty.cashier',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty.honorarium_released' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty/honorarium_released',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@honorarium_released',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@honorarium_released',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty.honorarium_released',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty_dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty_dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyDashboardController@faculty_dashboard',
        'controller' => 'App\\Http\\Controllers\\FacultyDashboardController@faculty_dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty_dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faculty_tracking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faculty_tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@faculty_tracking',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@faculty_tracking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faculty_tracking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getTransactionByID' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getTransactionByID',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@getTransactionByID',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@getTransactionByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getTransactionByID',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposited' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'deposited',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@deposited',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@deposited',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deposited',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.newEntries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis_new_entries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@thesisNewEntries',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@thesisNewEntries',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.newEntries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getStudent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getStudent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getStudent',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getStudent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getStudent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getMembers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getMembers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getMembers',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getMembers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getMembers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getDegrees' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getDegrees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getDegrees',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getDegrees',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getDegrees',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getRecorder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getRecorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getRecorder',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getRecorder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getRecorder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getChairperson' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getChairperson',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getChairperson',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getChairperson',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getChairperson',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getAdviser' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getAdviser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getAdviser',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getAdviser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getAdviser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getDefenseTypes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getDefenseTypes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getDefenseTypes',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getDefenseTypes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getDefenseTypes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thesis/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@store',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@list',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.checkData' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/check-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@checkData',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@checkData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.checkData',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'thesis/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.generateTrackingNum' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thesis/generateTrackingNum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@generateTrackingNum',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@generateTrackingNum',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.generateTrackingNum',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getMembersByID' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/getMembersByID',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getMembersByID',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getMembersByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getMembersByID',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getTransactionByID' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/getTransactionByID',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getTransactionByID',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getTransactionByID',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getTransactionByID',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.proceed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thesis/proceed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@proceed',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@proceed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.proceed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'PUT',
      ),
      'uri' => 'thesis/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@update',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.getItems' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/get-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getItems',
        'controller' => 'App\\Http\\Controllers\\ThesisNewEntriesController@getItems',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.getItems',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.thesis_acknowledgement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesisAcknowledgement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@thesis_acknowledgement',
        'controller' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@thesis_acknowledgement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.thesis_acknowledgement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.acknowledgement.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/acknowledgement/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@list',
        'controller' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.acknowledgement.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.openThesisAcknowledgement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'openThesisAcknowledgement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@openThesisAcknowledgement',
        'controller' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@openThesisAcknowledgement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.openThesisAcknowledgement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.open.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/open/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@open_list',
        'controller' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@open_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.open.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.acknowledge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thesis/acknowledge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@acknowledge',
        'controller' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@acknowledge',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.acknowledge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.outgoing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis-out-going',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOutGoingController@showThesisOutGoing',
        'controller' => 'App\\Http\\Controllers\\ThesisOutGoingController@showThesisOutGoing',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.outgoing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.outgoing.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis-out-going/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOutGoingController@list',
        'controller' => 'App\\Http\\Controllers\\ThesisOutGoingController@list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.outgoing.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.outgoing.getItems' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis-out-going/getItems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOutGoingController@getItems',
        'controller' => 'App\\Http\\Controllers\\ThesisOutGoingController@getItems',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.outgoing.getItems',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.open.out.going' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis-open-out-going',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@showThesisOpenOutGoing',
        'controller' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@showThesisOpenOutGoing',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.open.out.going',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.open.out.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis-open-out-going/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@open_list',
        'controller' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@open_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.open.out.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.fetchTransactionDetails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/fetchTransactionDetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@fetchTransactionDetails',
        'controller' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@fetchTransactionDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.fetchTransactionDetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.honorarium.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/honorarium-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@getHonorariumData',
        'controller' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@getHonorariumData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.honorarium.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.submitAmount' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thesis/submitAmount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@submitAmount',
        'controller' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@submitAmount',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.submitAmount',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.proceedByTN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thesis/proceedByTN',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@proceedByTN',
        'controller' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@proceedByTN',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.proceedByTN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.proceed-to-cashier' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thesis/proceed-to-cashier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@proceedToCashier',
        'controller' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@proceedToCashier',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.proceed-to-cashier',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.check.proceed.cashier' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'thesis/check-proceed-cashier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@checkIfProceedToCashier',
        'controller' => 'App\\Http\\Controllers\\ThesisOpenOutGoingController@checkIfProceedToCashier',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.check.proceed.cashier',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.track.and.monitor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis-track-and-monitor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@index',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.track.and.monitor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.dean_office.new-entries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/dean_office/new-entries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@DeanListNewEntries',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@DeanListNewEntries',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.dean_office.new-entries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.bugs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/bugs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@AdminList',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@AdminList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.bugs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.budget-office' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/budget-office',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@BudgetList',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@BudgetList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.budget-office',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.dean_office' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/dean_office',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@DeanList',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@DeanList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.dean_office',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.dean_office_two' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/dean_office/accounting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@DeanListTwo',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@DeanListTwo',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.dean_office_two',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.accounting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/accounting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@AccountList',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@AccountList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.accounting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.cashier' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/cashier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@CashierList',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@CashierList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.cashier',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis.honorarium_released' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thesis/honorarium_released',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisMonitorController@honorarium_released',
        'controller' => 'App\\Http\\Controllers\\ThesisMonitorController@honorarium_released',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thesis.honorarium_released',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getThesisAcknowledgement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getThesisAcknowledgement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@getThesisAcknowledgement',
        'controller' => 'App\\Http\\Controllers\\ThesisAcknowledgementController@getThesisAcknowledgement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getThesisAcknowledgement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getThesisOutgoing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getThesisOutgoing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\ThesisOutGoingController@getThesisOutgoing',
        'controller' => 'App\\Http\\Controllers\\ThesisOutGoingController@getThesisOutgoing',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getThesisOutgoing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getOnHold' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getOnHold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\OnHoldController@getOnHold',
        'controller' => 'App\\Http\\Controllers\\OnHoldController@getOnHold',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getOnHold',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'compliance_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'compliance_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth_check',
          2 => '419',
        ),
        'uses' => 'App\\Http\\Controllers\\FacultyTrackingController@compliance_list',
        'controller' => 'App\\Http\\Controllers\\FacultyTrackingController@compliance_list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'compliance_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
