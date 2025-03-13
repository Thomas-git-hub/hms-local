@extends('components.app')
@section('content')
<div class="row mt-4">
    <h4 class="card-title text-secondary">Released Transactions</h4>
</div>

<div class="row mt-4">
    <div class="col-md">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md">
                        Filter Transaction By:
                    </div>
                </div>
                <div class="row">
                    <div class="col-md d-flex gap-2">
                        <input type="search" class="form-control" id="trackingNumberFilterField" placeholder="Tracking Number" aria-describedby="defaultFormControlHelp" />
                        <input type="text" class="form-control" id="facultyFilterField" placeholder="Faculty Name" aria-describedby="defaultFormControlHelp" />
                        <button class="btn btn-primary shadow-none" id="filterButton"><i class='bx bx-search-alt'></i>Filter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="table-responsive">
                            <table id="releasedTransactionTable" class="table table-borderless table-hover" style="width:100%">
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('components.specific_page_scripts')
<script>

$(function () {
    const user_id = {!! json_encode(Auth::user()->employee_id) !!}; // Retrieve user ID

    var table = $('#releasedTransactionTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{route('releasedTransactions.list')}}',
            data: function(d) {
            d.tracking_number = $('#trackingNumberFilterField').val();
            d.faculty_name = $('#facultyFilterField').val();
            d.user_id = user_id;
            }
        },
        pageLength: 100,
        paging: true, // abled pagination
        dom: '<"top"lf>rt<"bottom"ip>',
        language: {
            search: "", // Remove the default search label
            searchPlaceholder: "Search..." // Set the placeholder text
        },
        order: [[3, 'desc']],
        columns: [
            { data: 'batch_id', name: 'batch_id', title: 'Tracking Number' },
            { data: 'faculty', name: 'faculty', title: 'Faculty' },
            { data: 'id_number', name: 'id_number', title: 'ID Number' },
            { data: 'academic_rank', name: 'academic_rank', title: 'Academic Rank' },
            { data: 'college', name: 'college', title: 'College' },
            { data: 'honorarium', name: 'honorarium', title: 'Honorarium' },
            { data: 'sem', name: 'sem', title: 'Semester' },
            { data: 'year', name: 'year', title: 'Semester Year' },
            { data: 'month.month_name', name: 'month', title: 'Month Of' },
            { data: 'updated_at', name: 'updated_at', title: 'Date Released' },
        ],
        createdRow: function(row, data) {
            // Add class to unopened rows
            $(row).addClass('unopened');
        }
    });

    $('#filterButton').on('click', function() {
        table.ajax.reload();
    });
});

</script>
@endsection
