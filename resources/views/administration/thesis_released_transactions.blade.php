@extends('components.app')
@section('content')
<div class="row mt-4">
    <h4 class="card-title text-secondary">Thesis Released Transactions</h4>
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
    var table = $('#releasedTransactionTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{route('thesis.released')}}',
            data: function(d) {
            d.tracking_number = $('#trackingNumberFilterField').val();
            d.faculty_name = $('#facultyFilterField').val();
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

    $('#filterButton').on('click', function() {
        table.ajax.reload();
    });
});

</script>
@endsection
