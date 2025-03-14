@extends('components.app')

@section('content')

        <div class="row mt-4 gap-3">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title text-secondary">Inbox</h4>
                            <div class=""><small><?php echo date('F j, Y'); ?></small></div>
                        </div>
                        {{-- <h4 class="d-flex align-items-center"><i class='bx bxs-envelope' style="font-size: 32px;"></i></h4> --}}
                        <div class="row gap-1">
                            <div class="col-md">
                                <div class="card shadow-none bg-label-success">
                                    <div class="card-header d-flex justify-content-end">
                                        <small class="card-title text-success d-flex align-items-center gap-1">
                                            <span class="badge text-bg-success">Today</span>
                                        </small>
                                    </div>
                                    <div class="card-body text-success">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md d-flex align-items-center gap-2">
                                                <h1 id="emailtoday" class="text-success text-center d-flex align-items-center" style="font-size: 48px;">
                                                    {{$emailtoday ? $emailtoday : 0}}
                                                </h1>
                                                <h5 class="card-title text-success fw-bold">Emails</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card shadow-none bg-label-danger">
                                    <div class="card-header d-flex justify-content-end">
                                        <small class="card-title text-danger d-flex align-items-center gap-1">
                                            <span class="badge text-bg-danger">Unread</span>
                                        </small>
                                    </div>
                                    <div class="card-body text-danger">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md d-flex align-items-center gap-2">
                                                <h1 id="UnreadCount" class="text-danger text-center d-flex align-items-center" style="font-size: 48px;">
                                                    {{$UnreadCount ? $UnreadCount : 0}}
                                                </h1>
                                                <h5 class="card-title text-danger fw-bold">Unread Emails</h5>
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
        <div class="row mt-4">
            <div class="col">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex align-items-center" style="margin-left: 1.8%;">
                                <div class="form-check form-check-primary check-buttons d-flex align-items-center">
                                    <label><input class="form-check-input" type="checkbox" id="toggleCheck">&nbsp;&nbsp;</label>
                                    <label class="text-danger" id="deleteSelected" style="cursor: pointer;">Move to Trash</label>
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

@endsection


@section('components.specific_page_scripts')



@endsection
