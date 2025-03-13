@extends('components.app')

@section('content')

<style>
    #thesisEntriesTable td{
        white-space: nowrap;
    }
</style>

<!-- Remarks Modal -->
<div class="modal fade" id="remarksModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title d-flex align-items-center text-warning" id="exampleModalLabel"><i class='bx bx-message-square-error'></i>&nbsp;Remarks</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
          <div>Updated by: <b class="text-primary" id="remarkUpdatedBy"></b></div>
          <div>Updated last: <b class="text-primary" id="remarkUpdatedLast"></b></div>
          <p class="mt-3" id="remarksText"></p>
        </div>
      </div>
    </div>
</div>
<!-- Remarks Modal End-->

<div class="row mt-4">
    <div class="col">
        <div class="row d-flex flex-column justify-content-start">
            <h4 class="card-title">Track and Monitor Thesis Honoraria</h4>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md">
                        Filter Transactions By:
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md d-flex gap-2">
                        <input type="search" class="form-control" id="trackingNumberFilterField" placeholder="Tracking Number" aria-describedby="defaultFormControlHelp" />
                        <input type="search" class="form-control" id="facultyFilterField" placeholder="Faculty Name" aria-describedby="defaultFormControlHelp" />
                        <button class="btn btn-primary shadow-none" id="filterButton"><i class='bx bx-search-alt'></i> Filter</button>
                    </div>
                </div>

                <div id="filteredTransactionContainer" style="display: none;">
                    <div class="row">
                        <div class="col-md">
                            <div class="card shadow-none border">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md d-flex justify-content-between">
                                            <h5 class="card-title">Transactions</h5>
                                            <button type="button" class="btn btn-icon me-2 btn-label-danger btn-sm" id="closeFilteredTransaction">
                                                <span class="icon-base bx bx-x"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="filteredTransactionTable" class="table table-borderless table-hover" style="width:100%">
                                            <tbody class="text-center">
                                                <!-- Data will be inserted here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col-md mt-4">
    {{-- <h6 class="text-muted">Offices</h6> --}}
    <div class="nav-align-top mb-6">
        <ul class="nav nav-pills nav-fill d-flex flex-nowrap overflow-auto mb-3 gap-2" id="ul-scroll" role="tablist">
            <li class="nav-item">
                <button type="button" class="btn-label-success text-success nav-link office-btn" data-route="{{ route('thesis.dean_office.new-entries') }}" role="tab">
                    <span class="d-none d-sm-block">
                        <i class="tf-icons bx bxs-graduation bx-sm me-1_5 align-text-bottom"></i>
                        Deans Office
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$initialDeanCount ?? 0}}</span>
                    </span>
                    <div class="d-sm-none">
                        <i class="bx bxs-graduation bx-sm"></i>
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$initialDeanCount ?? 0}}</span>
                    </div>
                </button>
            </li>
            <li class="nav-item mb-1 mb-sm-0">
                <button type="button" class="btn-label-primary text-primary nav-link office-btn" data-route="{{ route('thesis.bugs') }}" role="tab" aria-selected="true">
                    <span class="d-none d-sm-block">
                        <i class="tf-icons bx bxs-home bx-sm me-1_5 align-text-bottom"></i>
                        Administration
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$adminCount ?? 0}}</span>
                    </span>
                    <div class="d-sm-none">
                        <i class="bx bxs-home bx-sm d-sm-none"></i>
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$adminCount ?? 0}}</span>
                    </div>
                </button>
            </li>
            <li class="nav-item mb-1 mb-sm-0">
                <button type="button" class="btn-label-secondary text-secondary nav-link office-btn" data-route="{{ route('thesis.budget-office') }}" role="tab">
                    <span class="d-none d-sm-block">
                        <i class="tf-icons bx bxs-coin bx-sm me-1_5 align-text-bottom"></i>
                        Budget Office
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$budgtCount ?? 0}}</span>
                    </span>
                    <div class="d-sm-none">
                        <i class="bx bxs-coin bx-sm d-sm-none"></i>
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$budgtCount ?? 0}}</span>
                    </div>
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn-label-success text-success nav-link office-btn" data-route="{{ route('thesis.dean_office') }}" role="tab">
                    <span class="d-none d-sm-block">
                        <i class="tf-icons bx bxs-graduation bx-sm me-1_5 align-text-bottom"></i>
                        Deans Office
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$deanCount ?? 0}}</span>
                    </span>
                    <div class="d-sm-none">
                        <i class="bx bxs-graduation bx-sm d-sm-none"></i>
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$deanCount ?? 0}}</span>
                    </div>
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn-label-danger text-danger nav-link office-btn" data-route="{{ route('thesis.accounting') }}" role="tab">
                    <span class="d-none d-sm-block">
                        <i class="tf-icons bx bxs-calculator bx-sm me-1_5 align-text-bottom"></i>
                        Accounting
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$acctCount ?? 0}}</span>
                    </span>
                    <div class="d-sm-none">
                        <i class="bx bxs-calculator bx-sm d-sm-none"></i>
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$acctCount ?? 0}}</span>
                    </div>
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn-label-warning text-warning nav-link office-btn" data-route="{{ route('thesis.dean_office_two') }}" role="tab">
                    <span class="d-none d-sm-block"><i class="tf-icons bx bxs-graduation bx-sm me-1_5 align-text-bottom"></i>
                        Deans Office
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$deanCountTwo ?? 0}}</span>
                    </span>
                    <div class="d-sm-none">
                        <i class="bx bxs-graduation bx-sm d-sm-none"></i>
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$deanCountTwo ?? 0}}</span>
                    </div>
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn-label-info text-info nav-link office-btn" data-route="{{ route('thesis.cashier') }}" role="tab">
                    <span class="d-none d-sm-block">
                        <i class="tf-icons bx bxs-credit-card-alt bx-sm me-1_5 align-text-bottom"></i>
                        Cashier
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$cashCount ?? 0}}</span>
                    </span>
                    <div class="d-sm-none">
                        <i class="bx bxs-credit-card-alt bx-sm d-sm-none"></i>
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$cashCount ?? 0}}</span>
                    </div>
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn-label-dark text-dark nav-link office-btn" data-route="{{ route('thesis.honorarium_released') }}" role="tab">
                    <span class="d-none d-sm-block">
                        <i class="tf-icons bx bxs-up-arrow-alt bx-sm me-1_5 align-text-bottom"></i>
                        Released
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$releaseCount ?? 0}}</span>
                    </span>
                    <div class="d-sm-none">
                        <i class="bx bxs-up-arrow-alt bx-sm d-sm-none"></i>
                        <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$releaseCount ?? 0}}</span>
                    </div>
                </button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-pills-justified-administration" role="tabpanel">
                <p class="text-secondary" id="office-title"></p>
                <div class="table-responsive">
                    <table id="thesisEntriesTable" class="table table-borderless table-hover faculty_tracking_table" style="width:100%">
                        <tbody class="text-center">
                            <!-- Data will be inserted here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('components.specific_page_scripts')

<script>

    $(function () {
        var user_id = {!! json_encode($user->employee_id) !!}; // Retrieve user ID
        window.showMembersAlert = function(id) {
            $.ajax({
                url: '{{ route("thesis.getMembersByID") }}', // Route to get members by ID
                type: 'GET',
                data: { id: id }, // Return the id to the backend
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
                },
                success: function(members) {

                    const membersString = members.map(member => {
                        return `<strong>Member Type:</strong> ${member.member_type}<br><strong>Name:</strong> ${member.first_name} ${member.last_name}`;
                    }).join('<br><br>');

                    Swal.fire({
                        title: 'Member(s)',
                        html: membersString,
                        confirmButtonText: 'Got it',
                        confirmButtonColor: '#007bff',
                        footer: 'Viewing members for thesis entry.'
                    });

                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: xhr.responseJSON?.message || 'Something went wrong!',
                    });
                }
            });

        };

         // DataTable initialization
         const thesisTable = $('#thesisEntriesTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('thesis.dean_office.new-entries') }}',

            },
            pageLength: 10,
            paging: true,
            scrollX: true,  // Enable horizontal scrolling
            dom: '<"top"lf>rt<"bottom"ip>',
            language: {
                search: "",
                searchPlaceholder: "Search..."
            },
            columns: [
                { data: 'tracking_number', name: 'tracking_number', title: 'Tracking Number' },
                { data: 'student', name: 'student', title: 'Student', render: function(data, type, row) {
                    return `<div class="text-primary text-uppercase">${data}</div>`;
                } },
                { data: 'defense_date', name: 'defense_date', title: 'Defense Date' },
                { data: 'defense_time', name: 'defense_time', title: 'Defense Time' },
                { data: 'orNumber', name: 'orNumber', title: 'OR#' },
                { data: 'degree', name: 'degree', title: 'Degree' },
                { data: 'defense', name: 'defense', title: 'Defense' },
                { data: 'adviser', name: 'adviser', title: 'Adviser', render: function(data, type, row) {
                    return `<div class="text-primary text-uppercase">${data}</div>`;
                } },
                { data: 'chairperson', name: 'chairperson', title: 'Chairperson', render: function(data, type, row) {
                    return `<div class="text-primary text-uppercase">${data}</div>`;
                } },
                // { data: 'membersCount', name: 'membersCount', title: 'Members' },
                { data: 'membersCount', name: 'membersCount', title: 'Members', render: function(data, type, row) {
                    return `<a href="#" class="btn rounded-pill me-2 btn-label-primary btn-sm text-uppercase fw-bold" onclick="showMembersAlert(${row.id})">${data}</a>`;
                } },
                { data: 'recorder', name: 'recorder', title: 'Recorder' },
                // {
                //     data: 'remarks',
                //     name: 'remarks',
                //     title: 'Remarks',
                //     render: function(data, type, row) {
                //         var remarksButton = '<button type="button" class="btn btn-icon me-2 btn-label-warning remarks-btn" data-bs-toggle="modal" data-bs-target="#remarksModal"><span class="tf-icons bx bx-message-square-error bx-22px"></span></button>';

                //         return '<div class="d-flex flex-row" data-id="' + row.id + '">' + remarksButton + '</div>';
                //     },
                //     orderable: false,  // Disable ordering for this column if needed
                //     searchable: false  // Disable searching for this column if needed
                // },
                { data: 'status', name: 'status', title: 'Status' },
                { data: 'created_by', name: 'created_by', title: 'Created By' },
                { data: 'created_on', name: 'created_on', title: 'Created On' },
                { data: 'created_at', name: 'created_at', title: 'Date' },
                @if(Auth::user()->usertype->name === 'Cashiers' || Auth::user()->usertype->name === 'Superadmin')
                {
                    data: 'id',
                    name: 'id',
                    title: 'Action',
                    render: function(data, type, row) {
                            if (row.status === 'Complete') {
                                return `<button type="button" class="btn btn-icon me-2 btn-label-success claim-btn" data-id="${data}"><span class="tf-icons bx bx-check-square bx-22px"></span></button>`;
                            }else if(row.status === 'Released'){

                                return `<button type="button" class="btn btn-icon me-2 btn-label-success claim-btn" data-id="${data}" disabled><span class="tf-icons bx bx-check-square bx-22px"></span></button>`;
                            }else{
                                return '';
                            }



                    },
                    orderable: false,
                    searchable: false,
                },
                @endif

            ],
            order: [[0, 'desc']],  // Sort by date created by default
            columnDefs: [
                {
                    type: 'created_at',
                    targets: [0, 1] // Apply date sorting to date_received and date_on_hold columns
                }
            ],
            createdRow: function(row, data) {
                $(row).addClass('unopened');
            },
            drawCallback: function() {

            },

        });



        // Handle button clicks for dynamic routes
        $('.office-btn').on('click', function(e) {
            e.preventDefault();
            var route = $(this).data('route'); // Get the route from the clicked button
            var officeTitle = $(this).text(); // Get the button text for the title display

            // Update the DataTable AJAX URL dynamically based on the clicked button
            thesisTable.ajax.url(route).load();

            // Update the office title
            $('#office-title').text(officeTitle);
        });

        // Automatically trigger the first button click to load the default route
        $('.office-btn').first().trigger('click');

            $('#facultyTable').on('click', '.remarks-btn', function() {
            var row = $(this).closest('tr');
            var rowData = table.row(row).data();
            $('#remarkUpdatedBy').text(rowData.created_by);
            $('#remarkUpdatedLast').text(rowData.updated_at);
            $('#remarksText').text(rowData.remark.replace(/<[^>]+>/g, ''));
        });
    });


    $(document).ready(function () {
        // Add click event listener to all buttons with class 'office-btn'
        $(".office-btn").on("click", function () {
            // Remove 'active' class from all buttons
            $(".office-btn").removeClass("active");

            // Add 'active' class to the clicked button
            $(this).addClass("active");
        });

        // Handle button clicks for dynamic routes
        $('.office-btn').on('click', function(e) {
            e.preventDefault();
            var officeTitle = $(this).text().trim().replace(/\d/g, '');

            var route = $(this).data('route');
            table.ajax.url(route).load();
            $('#office-title').text(officeTitle);

        });

        var activeButton = $(".office-btn.active").text().trim().replace(/\d/g, '');
    });


    // Filter Transactions
    var filteredtable = $('#filteredTransactionTable').DataTable({
        "pageLength": 500,    // Set default page length to 500
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{route('thesis.filtered')}}',
            data: function(d) {
            d.tracking_number = $('#trackingNumberFilterField').val();
            d.faculty_name = $('#facultyFilterField').val();
            }
        },
        paging: false,        // Disable pagination
        searching: false,     // Disable search box
        info: false,          // Disable "Showing X of Y entries"
        ordering: false,      // Disable sorting
        lengthChange: false,   // Disable "Show X entries" dropdown
        columns: [
            { data: 'tracking_number', name: 'tracking_number', title: 'Tracking Number' },
            { data: 'student', name: 'student', title: 'Student' },
            { data: 'defense_date', name: 'defense_date', title: 'Defense Date' },
            { data: 'defense_time', name: 'defense_time', title: 'Defense Time' },
            { data: 'or_number', name: 'or_number', title: 'OR#' },
            { data: 'degree', name: 'degree', title: 'Degree' },
            { data: 'defense', name: 'defense', title: 'Defense' },
            { data: 'adviser', name: 'adviser', title: 'Adviser' },
            { data: 'chairperson', name: 'chairperson', title: 'Chairperson' },
            { data: 'members', name: 'members', title: 'Members' },
            { data: 'recorder', name: 'recorder', title: 'Recorder' },
            { data: 'updated_at', name: 'updated_at', title: 'Released Date' },
        ],
    });


    $(document).ready(function() {
        var filteredtable = $('#filteredTransactionTable').DataTable(); // Initialize DataTable

        $('#filterButton').on('click', function() {
            $('#filteredTransactionContainer').show();
            filteredtable.ajax.reload();
        });

        $('#closeFilteredTransaction').on('click', function() {
            filteredtable.clear().draw(); // Reset DataTable (removes all data)
            $('#filteredTransactionContainer').hide(); // Hide container
        });
    });

    $(document).on('click', '.claim-btn', function() {
            const ID = $(this).data('id');
            Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to mark this transaction as Released?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, mark it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route("thesis.deposited") }}',
                    type: 'POST',
                    data: {
                        id: ID
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire(
                                'Updated!',
                                response.message,
                                'success'
                            );
                            table.ajax.reload();
                        }
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            xhr.responseJSON?.message || 'Something went wrong!',
                            'error'
                        );
                    }
                });
            }
        });
    });

</script>



@endsection
