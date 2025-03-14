@extends('components.app')

@section('content')

<div class="row mt-4">
    <div class="col-md">
        <div class="d-flex align-items-center gap-3">
            <img src="{{asset('assets/myimg/logo.png')}}" class="" alt="logo/" style="width: 70px;">
            <div>
                <h4 class="text-primary d-flex flex-column"><b>BICOL UNIVERSITY GRADUATE SCHOOL</b><small>Honorarium Monitoring System</small></h4>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col">
        <div class="row d-flex flex-column justify-content-start">
            <h4 class="card-title">New Emails</h4>
        </div>
        <div class="card custom-card mt-1">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="d-flex align-items-center" style="margin-left: 1.8%;">
                        <div class="form-check form-check-primary check-buttons d-flex align-items-center">
                            <label><input class="form-check-input" type="checkbox" id="toggleCheck">&nbsp;&nbsp;</label>
                            <label class="text-danger" id="deleteSelected">Move to Trash</label>
                        </div>
                    </div>
                    <table id="inboxTable" class="table table-borderless table-hover" style="width:100%">
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col">
        <div class="row d-flex flex-column justify-content-start">
            <h4 class="card-title">For Compliance</h4>
            <small>Submit the missing document at Administration Office</small>
        </div>
        <div class="card custom-card mt-1">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="complianceTable" class="table table-borderless table-hover" style="width:100%">
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- .|.(^-^).|. --}}

@section('components.specific_page_scripts')


<script>
    var table = $('#complianceTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('getComplianceList')}}',
                pageLength: 100,
                paging: false, // Disable pagination
                dom: '<"top"f>rt<"bottom"ip>',
                language: {
                    search: "", // Remove the default search label
                    searchPlaceholder: "Search..." // Set the placeholder text
                },
                columns: [
                    { data: 'date', name: 'date', title: 'Date' },
                    { data: 'from', name: 'from', title: 'From' },
                    { data: 'for_compliance', name: 'for_compliance', title: 'for_compliance' },
                    { data: 'honorarium', name: 'honorarium' , title: 'honorarium' },
                    { data: 'days_passed', name: 'days_passed', title: 'Days Passed' },
                ],
            });
</script>


@endsection
