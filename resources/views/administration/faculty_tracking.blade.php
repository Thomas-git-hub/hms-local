@extends('components.app')

@section('content')

<style>
    #filteredTransactionTable td{
        white-space: nowrap;
    }
    #transactionStatusTable td{
        white-space: nowrap;
    }
</style>

{{-- Page Header --}}
<div class="row mt-4">
    <div class="col">
        <div class="row d-flex flex-column justify-content-start">
            <h4 class="card-title">Track and Monitor Honorarium</h4>
        </div>
    </div>
</div>

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
          {{-- <div>Updated by: <b class="text-primary" id="remarkUpdatedBy"></b></div>
          <div>Updated last: <b class="text-primary" id="remarkUpdatedLast"></b></div> --}}
          <p class="mt-3" id="remarksText"></p>
        </div>
      </div>
    </div>
</div>
<!-- Remarks Modal End-->

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

{{-- Nav Tabs and Datatable Container --}}
<div class="row mt-4">
    <div class="col-md">
        <div class="nav-align-top mb-6">
            <ul class="nav nav-pills nav-fill d-flex flex-nowrap overflow-auto mb-3 gap-2" id="ul-scroll" role="tablist">
                <li class="nav-item mb-1 mb-sm-0">
                    <button type="button" class="btn-label-primary text-primary nav-link office-btn active" data-route="{{ route('faculty.bugs') }}" role="tab" aria-selected="true">
                        <span class="d-none d-sm-block">
                            <i class="tf-icons bx bxs-home bx-sm me-1_5 align-text-bottom"></i>
                            Administration
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$adminCount ?? 0}}</span>
                        </span>
                        <span class="d-sm-none">
                            <i class="bx bx bxs-home bx-sm"></i>
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$adminCount ?? 0}}</span>
                        </span>
                    </button>
                </li>
                <li class="nav-item mb-1 mb-sm-0">
                    <button type="button" class="btn-label-secondary text-secondary nav-link office-btn" data-route="{{ route('faculty.budget-office') }}" role="tab">
                        <span class="d-none d-sm-block">
                            <i class="tf-icons bx bxs-coin bx-sm me-1_5 align-text-bottom"></i>
                            Budget Office
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$budgtCount ?? 0}}</span>
                        </span>
                        <spa class="d-sm-none">
                            <i class="bx bx bxs-coin bx-sm"></i>
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$budgtCount ?? 0}}</span>
                        </span>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn-label-success text-success nav-link office-btn" data-route="{{ route('faculty.dean_office') }}" role="tab">
                        <span class="d-none d-sm-block">
                            <i class="tf-icons bx bxs-graduation bx-sm me-1_5 align-text-bottom"></i>
                            Deans Office
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$deanCount ?? 0}}</span>
                        </span>
                        <span class="d-sm-none">
                            <i class="bx bx bxs-graduation bx-sm d-sm-none"></i>
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$deanCount ?? 0}}</span>
                        </span>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn-label-danger text-danger nav-link office-btn" data-route="{{ route('faculty.accounting') }}" role="tab">
                        <span class="d-none d-sm-block">
                            <i class="tf-icons bx bxs-calculator bx-sm me-1_5 align-text-bottom"></i>
                            Accounting
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$acctCount ?? 0}}</span>
                        </span>
                        <span class="d-sm-none">
                            <i class="bx bx bxs-calculator bx-sm d-sm-none"></i>
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$acctCount ?? 0}}</span>
                        </span>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn-label-warning text-warning nav-link office-btn" data-route="{{ route('faculty.dean_office_two') }}" role="tab">
                        <span class="d-none d-sm-block"><i class="tf-icons bx bxs-graduation bx-sm me-1_5 align-text-bottom"></i>
                            Deans Office
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$deanCountTwo ?? 0}}</span>
                        </span>
                        <spa class="d-sm-none">
                            <i class="bx bxs-graduation bx-sm d-sm-none"></i>
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$deanCountTwo ?? 0}}</span>
                        </span>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn-label-info text-info nav-link office-btn" data-route="{{ route('faculty.cashier') }}" role="tab">
                        <span class="d-none d-sm-block">
                            <i class="tf-icons bx bxs-credit-card-alt bx-sm me-1_5 align-text-bottom"></i>
                            Cashier
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$cashCount ?? 0}}</span>
                        </span>
                        <span class="d-sm-none">
                            <i class="bx bxs-credit-card-alt bx-sm d-sm-none"></i>
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$cashCount ?? 0}}</span>
                        </span>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn-label-dark text-dark nav-link office-btn" data-route="{{ route('faculty.honorarium_released') }}" role="tab">
                        <span class="d-none d-sm-block">
                            <i class="tf-icons bx bxs-up-arrow-alt bx-sm me-1_5 align-text-bottom"></i>
                            Releasing
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$releaseCount ?? 0}}</span>
                        </span>
                        <span class="d-sm-none">
                            <i class="bx bxs-up-arrow-alt bx-sm d-sm-none"></i>
                            <span class="badge rounded-pill badge-center position-absolute h-px-20 w-px-20 bg-danger ms-1 pt-50">{{$releaseCount ?? 0}}</span>
                        </span>
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-justified-administration" role="tabpanel">
                    <h5 class="card-title text-primary" id="office-title"></h5>
                    {{-- <p class="text-primary" id="office-title"></p> --}}
                    <div class="table-responsive">
                        <table id="transactionStatusTable" class="table table-borderless table-hover faculty_tracking_table" style="width:100%">
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



@endsection

{{-- .|.(^-^).|. --}}


@section('components.specific_page_scripts')

<script>
    const user_id = {!! json_encode($user->employee_id) !!}; // Retrieve user ID

    $(function () {
        var table = $('#transactionStatusTable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '{{ route('faculty.bugs') }}', // Default URL for the first load
                data: function(d) {
                    d.user_id = user_id; // Send user ID in request
                }
            },
            pageLength: 10,
            paging: true,
            dom: '<"top"lf>rt<"bottom"ip>',
            language: {
                search: "",
                searchPlaceholder: "Search...",
                emptyTable: "No data found for this office."
            },
            order: [[3, 'desc']],
            columns: [
                { data: 'id', name: 'id', title: 'ID', visible: false },
                { data: 'batch_id', name: 'batch_id', title: 'Tracking Number' },
                { data: 'faculty', name: 'faculty', title: 'Faculty' },
                { data: 'date_received', name: 'date_received', title: 'Date Received' },
                { data: 'transaction_date', name: 'transaction_date', title: 'Transaction Date' },
                {
                    data: 'honorarium',
                    name: 'honorarium',
                    title: 'Honorarium',
                    render: function(data) {
                        return '<span class="badge rounded-pill bg-warning">' + data + '</span>';
                    }
                },
                { data: 'month.month_name', name: 'month', title: 'Month Of' },
                { data: 'sem', name: 'sem', title: 'Semester' },
                { data: 'year', name: 'year', title: 'Year' },
                { data: 'deduction', name: 'deduction', title: 'Deduction Amount', defaultContent: "no added amount" },
                { data: 'net_amount', name: 'net_amount', title: 'Net Amount', defaultContent: "no added amount" },
                { data: 'status', name: 'status', title: 'Status' },
                {
                    data: 'id',
                    name: 'id',
                    title: 'Remarks',
                    render: function(data, type, row) {
                        return `<button type="button" class="btn btn-icon me-2 btn-label-warning remarks-btn" data-id="${data}" data-bs-toggle="modal" data-bs-target="#remarksModal"><span class="tf-icons bx bx-message-square-error bx-22px"></span></button>`;
                    },
                    orderable: false,  // Disable ordering for this column if needed
                    searchable: false  // Disable searching for this column if needed
                },

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
            createdRow: function(row, data) {
                $(row).addClass('unopened');
            }
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

        $(document).on('click', '.remarks-btn', function() {
            const ID = $(this).data('id');
            $.ajax({
                url: '{{ route('getTransactionByID') }}',
                method: 'GET',
                data: {
                    id: ID
                },
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                success: function(data) {
                    $('#remarkUpdatedBy').text(data.updatedBy.first_name +' '+ data.updatedBy.last_name);
                    $('#remarkUpdatedLast').text(data.date);
                    $('#remarksText').text(data.transaction.remarks);
                    console.log(data.transaction.remarks);

                }
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
                    url: '{{ route("deposited") }}',
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
    });

    var filteredtable = $('#filteredTransactionTable').DataTable({
        "pageLength": 500,    // Set default page length to 500
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{route('faculty.filtered')}}',
            data: function(d) {
            d.tracking_number = $('#trackingNumberFilterField').val();
            d.faculty_name = $('#facultyFilterField').val();
            d.user_id = user_id;
            }
        },
        paging: false,        // Disable pagination
        searching: false,     // Disable search box
        info: false,          // Disable "Showing X of Y entries"
        ordering: false,      // Disable sorting
        lengthChange: false,   // Disable "Show X entries" dropdown
        columns: [
            { data: 'batch_id', name: 'batch_id', title: 'Tracking Number' },
            { data: 'faculty', name: 'faculty', title: 'Faculty' },
            { data: 'honorarium', name: 'honorarium', title: 'Honorarium' },
            { data: 'office', name: 'office', title: 'Processing Office' },
            { data: 'status', name: 'status', title: 'Status' },
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

</script>


@endsection
