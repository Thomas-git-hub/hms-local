<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="#" class="app-brand-link">
        <img src="{{asset('assets/myimg/logo.png')}}" class="app-brand-logo w-px-30 h-auto me-2 " alt="logo" />
            <span class="app-brand-text menu-text fw-bold">BUGS
              <br />
              <span class="fs-tiny fw-medium">Honorarium Monitoring System</span>
            </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        @if(Auth::user()->usertype->name !== 'Faculty')
        <li class="menu-item {{ request()->is('admin_dashboard') ? 'active' : '' }}">
          <a href="/admin_dashboard" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div class="text-truncate" data-i18n="Page 1">Dashboard</div>
          </a>
        </li>
        @endif
        @if(Auth::user()->usertype->name === 'Faculty')
        <li class="menu-item {{ request()->is('faculty_dashboard') ? 'active' : '' }}">
            <a href="/faculty_dashboard" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div class="text-truncate" data-i18n="Page 1">Faculty Dashboard</div>
            </a>
          </li>
        @endif
        <li class="menu-item {{ request()->is('admin_email') ? 'active' : '' }}">
          <a href="/admin_email" class="menu-link">
            <i class='menu-icon tf-icons bx bx-envelope'></i>
            <div class="text-truncate" data-i18n="Page 2">Inbox</div>
            <span class="badge bg-danger badge-notifications p-1 fs-8" id="EmailCount"></span>
          </a>
        </li>
        <li class="menu-item {{ request()->is('sent_items') ? 'active' : '' }}">
            <a href="/sent_items" class="menu-link">
              <i class='menu-icon tf-icons bx bx-send'></i>
              <div class="text-truncate" data-i18n="Page 2">Sent Items</div>
            </a>
        </li>

        <li class="menu-item">
            <div style="margin-left: 5%; margin-top: 5%; color: #b4b0c4;">Thesis Honoraria Transactions</div>
        </li>

        @if(Auth::user()->usertype->name !== 'Faculty' && Auth::user()->usertype->name !== 'Superadmin')
        <li class="menu-item {{ request()->is('thesisAcknowledgement') || request()->is('openThesisAcknowledgement') ? 'active' : '' }}">
            <a href="/thesisAcknowledgement" class="menu-link">
                <i class='menu-icon tf-icons bx bx-archive-in'></i>
              <div class="text-truncate" data-i18n="Page 2">Acknowledgement</div>
              <span class="badge bg-danger badge-notifications p-1 fs-8" id="thesisAcknowledgementCount">0</span>
            </a>
        </li>
        @endif

        @if(in_array(Auth::user()->usertype->name, ['Dean', 'Superadmin']))
        <li class="menu-item {{ request()->is('thesis_new_entries') ? 'active' : '' }}">
            <a href="/thesis_new_entries" class="menu-link">
                <i class='menu-icon tf-icons bx bx-plus-circle'></i>
              <div class="text-truncate" data-i18n="Page 2">Thesis New Entries</div>
            </a>
        </li>
        @endif

        @if(Auth::user()->usertype->name !== 'Faculty' && Auth::user()->usertype->name !== 'Superadmin')
        <li class="menu-item {{ request()->is('thesis-out-going') || request()->is('thesis-open-out-going') ? 'active' : '' }}">
            <a href="/thesis-out-going" class="menu-link">
                <i class='menu-icon tf-icons bx bx-list-ol' ></i>
              <div class="text-truncate" data-i18n="Page 2">Outgoing Defenses</div>
              <span class="badge bg-danger badge-notifications p-1 fs-8" id="outgoingDefensesCount">0</span>
            </a>
        </li>
        @endif

        {{-- @if(in_array(Auth::user()->usertype->name, ['Dean', 'Superadmin', 'Administrator', 'Faculty'])) --}}
        <li class="menu-item {{ request()->is('thesis-track-and-monitor') ? 'active' : '' }}">
            <a href="/thesis-track-and-monitor" class="menu-link">
                <i class='menu-icon tf-icons bx bx-group'></i>
                <div class="text-truncate" data-i18n="Page 2">Thesis Track & Monitor</div>
                {{-- <span class="badge bg-danger badge-notifications p-1 fs-8" id="trackAndMonitorCount">0</span> --}}
            </a>
        </li>
        {{-- @endif --}}

        <li class="menu-item {{ request()->is('thesis-released-transactions') ? 'active' : '' }}">
            <a href="/thesis-released-transactions" class="menu-link">
                <i class='menu-icon tf-icons bx bx-up-arrow-circle'></i>
                <div class="text-truncate" data-i18n="Page 2">Thesis Released Transactions</div>
                {{-- <span class="badge bg-danger badge-notifications p-1 fs-8" id="trackAndMonitorCount">0</span> --}}
            </a>
        </li>

        <li class="menu-item">
          <div style="margin-left: 5%; margin-top: 5%; color: #b4b0c4;">Regular Honoraria Transactions</div>
        </li>

        @if(Auth::user()->usertype->name === 'Administrator' || Auth::user()->usertype->name === 'Superadmin')
        <li class="menu-item {{ request()->is('admin_honorarium') ? 'active' : '' }}">
            <a href="/admin_honorarium" class="menu-link">
              <i class='menu-icon tf-icons bx bx-list-plus'></i>
              <div class="text-truncate" data-i18n="Page 2">Honorarium</div>
            </a>
        </li>
        @endif
        @if(Auth::user()->usertype->name === 'Administrator' || Auth::user()->usertype->name === 'Superadmin')
        <li class="menu-item {{ request()->is('admin_new_entries') ? 'active' : '' }}">
          <a href="/admin_new_entries" class="menu-link">
            <i class='menu-icon tf-icons bx bx-plus-circle'></i>
            <div class="text-truncate" data-i18n="Page 2">New Entries</div>
          </a>
        </li>
        @endif
        @if(Auth::user()->usertype->name !== 'Administrator' && Auth::user()->usertype->name !== 'Faculty' && Auth::user()->usertype->name !== 'Superadmin')
        <li class="menu-item {{ request()->is('for_acknowledgement') || request()->is('open_acknowledgement') ? 'active' : '' }}">
          <a href="/for_acknowledgement" class="menu-link">
            <i class='menu-icon tf-icons bx bx-archive-in'></i>
            <div class="text-truncate" data-i18n="Page 2">Acknowledgement</div>
            <span class="badge bg-danger badge-notifications p-1 fs-8" id="acknowledgementCount">0</span>
          </a>
        </li>
        @endif
        @if(Auth::user()->usertype->name !== 'Faculty' && Auth::user()->usertype->name !== 'Cashiers' && Auth::user()->usertype->name !== 'Administrator' && Auth::user()->usertype->name !== 'Superadmin')
        <li class="menu-item {{ request()->is('admin_on_queue') || request()->is('open_on_queue') ? 'active' : '' }}">
          <a href="/admin_on_queue" class="menu-link">
            <i class='menu-icon tf-icons bx bx-list-ol'></i>
            <div class="text-truncate" data-i18n="Page 2">In Queue</div>
          </a>
        </li>
        @endif
        @if(Auth::user()->usertype->name === 'Cashiers')
        <li class="menu-item {{ request()->is('cashier_in_queue') || request()->is('cashier_open_queue') ? 'active' : '' }}">
          <a href="/cashier_in_queue" class="menu-link">
            <i class='menu-icon tf-icons bx bx-list-ol'></i>
            <div class="text-truncate" data-i18n="Page 2">Cashier In Queue</div>
          </a>
        </li>
        @endif
        @if(Auth::user()->usertype->name !== 'Faculty' && Auth::user()->usertype->name !== 'Superadmin')
        <li class="menu-item {{ request()->is('main_on_hold') || request()->is('admin_on_hold') ? 'active' : '' }}">
          <a href="/main_on_hold" class="menu-link">
            <i class='menu-icon tf-icons bx bx-error-alt'></i>
            <div class="text-truncate" data-i18n="Page 2">On Hold</div>
            <span class="badge bg-danger badge-notifications p-1 fs-8" id="onHoldCount">0</span>
          </a>
        </li>
        @endif
        {{-- @if(Auth::user()->usertype->name === 'Faculty' || Auth::user()->usertype->name === 'Superadmin') --}}
        <li class="menu-item {{ request()->is('faculty_tracking') ? 'active' : '' }}">
          <a href="/faculty_tracking" class="menu-link">
            <i class='menu-icon tf-icons bx bx-tag-alt'></i>
            <div class="text-truncate" data-i18n="Page 2">Track & Monitor</div>
            {{-- <span class="badge bg-danger badge-notifications p-1 fs-8" id="trackAndMonitorCount">0</span> --}}
          </a>
        </li>
        {{-- @endif --}}
        {{-- @if(Auth::user()->usertype->name !== 'Faculty')
        <li class="menu-item {{ request()->is('history') ? 'active' : '' }}">
          <a href="/history" class="menu-link">
            <i class='menu-icon tf-icons bx bx-history' ></i>
            <div class="text-truncate" data-i18n="Page 2">History</div>
          </a>
        </li>
        @endif --}}
        <li class="menu-item {{ request()->is('releasedTransactions') || request()->is('') ? 'active' : '' }}">
            <a href="/releasedTransactions" class="menu-link">
              <i class='menu-icon tf-icons bx bx-up-arrow-circle'></i>
              <div class="text-truncate" data-i18n="Page 2">Released Transactions</div>
              {{-- <span class="badge bg-danger badge-notifications p-1 fs-8" id="onHoldCount">0</span> --}}
            </a>
        </li>
        @if(Auth::user()->usertype->name === 'Administrator' || Auth::user()->usertype->name === 'Superadmin')
        <li class="menu-item">
            <div style="margin-left: 5%; margin-top: 5%; color: #b4b0c4;">System Users</div>
        </li>

        <li class="menu-item {{ request()->is('user_management') ? 'active' : '' }}">
            <a href="/user_management" class="menu-link">
              <i class='menu-icon tf-icons bx bx-shield-alt-2'></i>
              <div class="text-truncate" data-i18n="Page 2">User Management</div>
            </a>
        </li>

        @endif
      </ul>
  </aside>
