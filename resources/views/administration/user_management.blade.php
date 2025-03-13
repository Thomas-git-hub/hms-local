@extends('components.app')
@section('content')

<!-- Enter Admin Pass for Reset Password Modal -->
<div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reset User Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
            <div class="row mb-3">
                <div class="col-md">
                    <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password32">Enter Admin Password</label>
                        <div class="input-group input-group-merge">
                          <input type="password" class="form-control" id="basic-default-password32" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="basic-default-password" />
                          {{-- <span class="input-group-text cursor-pointer" id="basic-default-password"><i class="bx bx-hide"></i></span> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-primary " id="resetBtn">Reset Password</button>
                    <button type="button" class="btn btn-label-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPasswordModal">
    Launch demo modal
</button> --}}

<!-- Enter New Password Modal -->
<div class="modal fade" id="newPasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <div class="d-flex align-items-center gap-1">
                <i class='bx bx-lock-open fs-3'></i>
                <h5 class="modal-title" id="exampleModalLabel">New Password</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row mb-3">
                <div class="col-md">
                    <div class="form-password-toggle mb-2">
                        <label class="form-label" for="newPassword">Enter New Password</label>
                        <div class="input-group input-group-merge">
                          <input type="password" name="password" class="form-control" id="newPassword" placeholder="Enter New Password" aria-describedby="basic-default-password" />
                        </div>
                        <small class="text-danger" id="newPasswordError"></small> <!-- Error message -->
                    </div>
                    <div class="form-password-toggle">
                        <label class="form-label" for="newPassword">Confirm New Password</label>
                        <div class="input-group input-group-merge">
                          <input type="password" class="form-control" name="password_confirmation" id="retypeNewPassword" placeholder="Confirm Password" aria-describedby="basic-default-password" />
                          {{-- <span class="input-group-text cursor-pointer" id="basic-default-password"><i class="bx bx-hide"></i></span> --}}
                        </div>
                        <small class="text-danger" id="retypeNewPasswordError"></small> <!-- Error message -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-primary " id="submitNewPassword">Reset Password</button>
                    <button type="button" class="btn btn-label-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

<!--View User Account Details Modal-->
    <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalToggleLabel">Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-4">
                        Office:
                    </div>
                    <div class="col-md-8">
                        <b id="office"></b>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        Full Name:
                    </div>
                    <div class="col-md-8">
                        <b id="faculty"></b>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        ID Number:
                    </div>
                    <div class="col-md-8">
                        <b id="id_num">000-0000</b>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        Position/Academic Rank:
                    </div>
                    <div class="col-md-8">
                        <b id="position"> </b>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        Mother College:
                    </div>
                    <div class="col-md-8">
                        <b id="college"></b>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        Contact Number:
                    </div>
                    <div class="col-md-8">
                        <b id="contact"></b>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        Email:
                    </div>
                    <div class="col-md-8">
                        <b id="email"></b>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button class="btn btn-label-danger">Close</button>
            </div> --}}
        </div>
        </div>
    </div>

{{-- Header --}}
    <div class="row mt-4 mb-3">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h4 class="d-flex align-items-center">User Management</h4>
                    <div class="row gap-1">
                        <div class="col-md">
                            <div class="card shadow-none bg-label-success">
                                {{-- <div class="card-header d-flex justify-content-end">
                                    <small class="card-title text-success d-flex align-items-center"></small>
                                </div> --}}
                                <div class="card-body text-success">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md d-flex align-items-center gap-3">
                                            <h1 class="text-success text-center d-flex align-items-center" id="UserCount" style="font-size: 48px;">0</h1>
                                            <h5 class="card-title text-success">Numbers of Active User</h5>
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

{{-- Add User Account Button --}}
    <div class="row mb-3">
        <div class="col-md d-flex justify-content-end">
            <button class="btn btn-primary" id="requestButton">Add User Account</button>
        </div>
    </div>

{{-- Create Account Form --}}
    <div class="row mb-3" id="requestFormContainer" style="display: none;">
        <div class="col-md">
            <form id="requestForm">
                @csrf
                <div class="card border border-primary shadow" id="requestFormCard">
                    <div class="card-header">
                        <p class="text-secondary">Create New Account</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-5">
                                <label for="usertype" class="form-label">Request Account for:</label>
                                <select id="usertype" class="form-select" name="usertype">
                                <option value="">Default select</option>
                                <option value="1">Administration</option>
                                <option value="2">Dean</option>
                                <option value="3">Budget Office</option>
                                <option value="4">Accounting</option>
                                <option value="5">Cashier</option>
                                <option value="6" id="facultyOption">Faculty</option>
                                </select>
                                <span class="error-message text-danger small-warning"></span>
                            </div>
                        </div>

                        <div class="row mb-3" id="selectFaculty" style="display: none;">
                            <label for="facultySelect" class="form-label">Select Faculty</label>
                            <select class="form-control" id="facultySelect" name="employee_id" id="employee_id" style="width: 100%;">
                                <option selected disabled>Search by Name/Email...</option>
                                <!-- Other existing options can go here -->
                            </select>
                        </div>


                        <div id="fields" style="display:;">
                            <!-- Other fields as before -->
                            <div class="row mb-3">
                                <div class="col-md">
                                    <label for="first_name" class="form-label">First name</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="-" aria-describedby="defaultFormControlHelp"/>
                                    {{-- <small class="text-danger small-warning">Enter Employee's First Name</small> --}}
                                     <span class="error-message text-danger small-warning"></span>
                                </div>
                                <div class="col-md">
                                    <label for="middle_name" class="form-label">Middle name</label>
                                    <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="-" aria-describedby="defaultFormControlHelp"/>
                                    {{-- <small class="text-danger small-warning">Enter Employee's Middle Name</small> --}}
                                     <span class="error-message text-danger small-warning"></span>
                                </div>
                                <div class="col-md">
                                    <label for="last_name" class="form-label">Last name</label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="-" aria-describedby="defaultFormControlHelp"/>
                                    {{-- <small class="text-danger small-warning">Enter Employee's Last Name</small> --}}
                                     <span class="error-message text-danger small-warning"></span>

                                </div>
                                <div class="col-md">
                                    <label for="suffix" class="form-label">Suffix</label>
                                    <input type="text" class="form-control" name="suffix" id="suffix" placeholder="-" aria-describedby="defaultFormControlHelp"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md">
                                    <label for="ee_number" class="form-label">Employee ID Number</label>
                                    <input type="text" class="form-control" name="ee_number" id="ee_number" placeholder="-" aria-describedby="defaultFormControlHelp"/>
                                    {{-- <small class="text-danger small-warning">Employee ID is Required</small> --}}
                                     <span class="error-message text-danger small-warning"></span>
                                </div>
                                <div class="col-md" style="display: none;" id="academicRankContainer">
                                    <label for="academicRank" class="form-label">Academic Rank</label>
                                    <input type="hidden" class="form-control" name="academicRankValue" id="academicRankValue"/>
                                    <input type="text" class="form-control" name="academicRank" id="academicRank" placeholder="-" disabled/>
                                </div>
                                <div class="col-md" id="positionContainer">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" name="position" id="position" placeholder="-" />
                                </div>
                            </div>

                            <div class="row mb-3" id="motherCollege" style="display: none;">
                                <div class="col-md">
                                    <label for="mother_college" class="form-label">Mother College</label>
                                    <input type="hidden" class="form-control" name="collge_NUM" id="collge_NUM"/>
                                    <input type="text" class="form-control" name="mother_college" id="mother_college" placeholder="-" disabled/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="contact_num" class="form-label">Contact No.</label>
                                    <input type="text" class="form-control" name="contact_num" id="contact_num" placeholder="-" aria-describedby="defaultFormControlHelp"/>
                                    {{-- <small class="text-danger small-warning">Enter Valid Contact Number</small> --}}
                                     <span class="error-message text-danger small-warning"></span>
                                </div>
                                <div class="col-md-8">
                                    <label for="user_email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="user_email" id="user_email" placeholder="-" aria-describedby="defaultFormControlHelp"/>
                                    {{-- <small class="text-danger small-warning">Enter Valid Email Address</small> --}}
                                     <span class="error-message text-danger small-warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <small class="small-button-warning text-danger warning" style="display:none;"><b> Warning, Please check the fields again.</b></small>
                            </div>
                            <div class="col-md d-flex justify-content-end gap-2">
                                <button type="submit" class="btn btn-primary" id="submit">Enter</button>
                                <button type="button" class="btn btn-label-danger" id="cancelRequestButton">Cancel</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>

{{-- Datatable --}}
    <div class="row">
        <div class="col-md">
            <diuv class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="requestAccountTable" class="table table-borderless" style="width:100%">
                            <tbody class="text-center">
                                <!-- Data will be inserted here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </diuv>
        </div>
    </div>
@endsection



@section('components.specific_page_scripts')

{{-- User Count --}}
<script>
    $(document).ready(function() {
        // Fetch active user count on page load
        $.ajax({
            url: '{{ route('user_management.user_count') }}', // Adjust the route as necessary
            type: 'GET',
            success: function(response) {
                $('#UserCount').text(response.active_user_count);
            },
            error: function(xhr) {
                console.error('Error fetching user count:', xhr);
            }
        });
    });
</script>

{{-- Datatables --}}
<script>
    $(function () {

        var table = $('#requestAccountTable').DataTable({
            processing: true,
            serverSide: true, // Set serverSide to false to use local data
            ajax: '{{ route('user_management.list') }}',
            pageLength: 10,
            paging: true,      // Enable pagination

            dom: '<"top"lf>rt<"bottom"ip>',
            language: {
                search: "", // Remove the default search label
                searchPlaceholder: "Search..." // Set the placeholder text
            },
            columns: [
                { data: 'faculty', name: 'faculty', title: 'Account For' },
                { data: 'usertype', name: 'usertype', title: 'User Type' }, // Map local data to the columns
                { data: 'email', name: 'email', title: 'email' },
                { data: 'date', name: 'date', title: 'created' },
                { data: 'status', name: 'status', title: 'status' },
                { data: 'action', name: 'action', title: 'action' },

                { data: 'contact', name: 'contact', title: 'contact', visible: false },
                { data: 'id', name: 'id', title: 'id', visible: false },
                { data: 'position', name: 'position', title: 'position', visible: false },
                { data: 'college', name: 'college', title: 'college', visible: false },
                { data: 'ee_number', name: 'ee_number', title: 'ee_number', visible: false },
                { data: 'office', name: 'office', title: 'office', visible: false },
            ],
        });

        $(document).on('click', '.view-btn-user', function() {
            var row = $(this).closest('tr');
            var rowData = table.row(row).data();

            $('#modalToggle').modal('show');

            // Populate modal fields with the correct data
            $('#faculty').text(rowData.faculty);
            $('#id_num').text(rowData.ee_number);
            $('#office').text(rowData.office);
            $('#position').text(rowData.position);
            $('#email').text(rowData.email);
            $('#contact').text(rowData.contact);
            $('#college').text(rowData.college);

            // Ensure the modal is being populated with the correct data
            console.log("Modal data populated:", {
                faculty: rowData.faculty,
                id_num: rowData.ee_number,
                office: rowData.office,
                position: rowData.position,
                email: rowData.email,
                contact: rowData.contact,
                college: rowData.college
            });

            $('#editRowIndex').val(table.row(row).index());

        });

        $(document).on('click', '.reset-btn-user', function() {
            var row = $(this).closest('tr');
            var rowData = table.row(row).data();

            $('#resetPasswordModal').modal('show');

            $('#resetBtn').off('click').on('click', function(e) {
                e.preventDefault();
                var password = $('#basic-default-password32').val();
                var _token = '{{ csrf_token() }}';

                $.ajax({
                    url: '{{ route('user_management.checkAdminPassword') }}',
                    method: 'POST',
                    data: { password: password, _token: _token },
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Processing',
                            html: '<div class="spinner-grow text-primary" role="status" style="width: 3rem; height: 3rem;"></div>',
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#newPasswordModal').modal('show');
                            $('#resetPasswordModal').modal('hide');
                            $('#basic-default-password32').val('');
                            Swal.close();

                        } else {
                            if(response.message) {
                                $('#basic-default-password32').val('');
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: response.message,
                                    showConfirmButton: true,
                                });
                                Swal.close();
                            }
                        }
                    },
                    error: function() {
                        Swal.close();
                        $('#basic-default-password32').val('');
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed!',
                            text: 'Something went wrong.',
                            showConfirmButton: true,
                        });
                    }
                });

            })

            $('#submitNewPassword').off('click').on('click', function(e) {
                e.preventDefault();
                var email = rowData.email;
                var password = $('#newPassword').val();
                var password_confirmation = $('#retypeNewPassword').val();
                var _token = '{{ csrf_token() }}';

                // Clear previous errors
                $('.text-danger').text('');
                $('.form-control').removeClass('is-invalid');

                $.ajax({
                    url: '{{ route('user_management.reset') }}',
                    method: 'POST',
                    data: {
                        email: email,
                        password: password,
                        password_confirmation: password_confirmation,
                        _token: _token
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Processing',
                            html: '<div class="spinner-grow text-primary" role="status" style="width: 3rem; height: 3rem;"></div>',
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function(response) {
                        Swal.close();
                        if (response.success) {
                            $('#newPasswordModal').modal('hide');
                            $('#newPassword, #retypeNewPassword').val('');

                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message,
                                showConfirmButton: true,
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message,
                                showConfirmButton: true,
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.close();
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            if (errors.password) {
                                $('#newPassword').addClass('is-invalid');
                                $('#newPasswordError').text(errors.password[0]);
                            }
                            if (errors.password_confirmation) {
                                $('#retypeNewPassword').addClass('is-invalid');
                                $('#retypeNewPasswordError').text(errors.password_confirmation[0]);
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Failed!',
                                text: 'Something went wrong.',
                                showConfirmButton: true,
                            });
                        }
                    }
                });
            });


        });

        $('#requestAccountTable').off('click').on('click', '.proxy-btn', function() {
            var row = $(this).closest('tr');
            var rowData = table.row(row).data();

            $.ajax({
                    url: '{{ route('user_management.proxy') }}',
                    method: 'POST',
                    data: {
                        id: rowData.id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.href = response.redirect;

                        }
                    },
                    error: function(xhr) {
                        hideLoader();
                        console.log(xhr.responseText);
                    }
            });


        });


    });
</script>
{{-- DATATABLES END--}}


{{-- FORM VALIDATION --}}
<script>
    $(document).ready(function() {
    // Show #academicRank and hide #position when 'Faculty' is selected
        $('#usertype').on('change', function() {
            let selectedValue = $(this).val();

            if (selectedValue == '6') {  // 6 is the value of 'Faculty'
                $('#academicRankContainer').show();  // Show Academic Rank
                $('#selectFaculty').show();
                $('#motherCollege').show();
                $('#positionContainer').hide();  // Hide Position
            } else {
                $('#academicRankContainer').hide();  // Hide Academic Rank
                $('#selectFaculty').hide();
                $('#positionContainer').show();  // Show Position
            }
        });

    });

</script>

<script>
    $(document).ready(function() {
        $('#requestButton').click(function() {
            $('#requestFormContainer').show();
            $('.warning').hide();

        });

        $('#requestForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '{{ route('user_management.store') }}',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    Swal.fire({
                        title: 'Registration is being processed',
                        html: '<div class="spinner-grow text-primary" role="status" style="width: 3rem; height: 3rem;"></div>',
                        showConfirmButton: false,
                        allowOutsideClick: false
                    });
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Account Registered!!',
                        showClass: {
                            popup: 'animate__animated animate__bounceIn'
                        },
                        customClass: {
                            confirmButton: 'btn btn-success'
                        },
                        buttonsStyling: false
                    }).then(() => {
                        $('#requestAccountTable').DataTable().ajax.reload(); // Reload the DataTable
                        $('#requestFormContainer').hide(); // Hide the form container
                        clearForm(); // Clear the form fields
                    });
                },
                error: function(xhr) {

                    Swal.close()
                    // Clear previous error messages
                    $('.error-message').text('');
                    $('.warning').hide();

                    if (xhr.status === 409) {
                        // Show SweetAlert for error 409
                        Swal.fire({
                            icon: 'error',
                            title: 'Conflict',
                            text: 'The user already exists.',
                            showClass: {
                                popup: 'animate__animated animate__shakeX'
                            },
                            customClass: {
                                confirmButton: 'btn btn-danger'
                            },
                            buttonsStyling: false
                        });
                    } else {
                        // Loop through the validation errors and display them under each field
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $('#' + key).next('.error-message')
                                .text(value[0])
                                .addClass('small-warning text-danger');
                        });
                    }

                    $('.warning').show(); // Show warning if necessary
                },

            });
        });


        // Function to capitalize the first letter of every word
        function capitalizeWords(str) {
            return str.replace(/\b\w/g, function(char) {
                return char.toUpperCase();
            });
        }

        function clearForm() {
            $('#requestForm')[0].reset(); // Reset the form fields
            $('.error-message').text(''); // Clear any error messages
            $('.small-warning').removeClass('text-danger'); // Remove warning classes
            $('#selectFaculty').hide(); // Hide faculty selection if it was shown
            $('#facultySelect').val(null).trigger('change');

            $('#collge_NUM').val('');
            $('#academicRank').val('');
            $('#academicRankValue').val('');
            $('#mother_college').val('').prop('disabled', true);
            $('#motherCollege').hide();

        }

        $('#facultySelect').on('select2:select', function(e) {
            var selectedOption = $(this).select2('data')[0]; // Get the selected option data
            var facultyFirstName = `${selectedOption.employee_fname} `;
            var facultyMiddleName = `${selectedOption.employee_mname}`;
            var facultyLastName = `${selectedOption.employee_lname}`;
            var facultyEmail = selectedOption.email; // Get the email from the selected data
            var facultyAcademicRank = selectedOption.academic; // Get the email from the selected data
            var facultyAcademicRankValue = selectedOption.academic; // Get the email from the selected data
            var facultyId = selectedOption.id;
            var facultyeenum = selectedOption.employee_no;
            var facultycollege = selectedOption.college;
            var facultycollge_id = selectedOption.collgeID;

            // Update the hidden input and the To: container
            $('#user_id').val(facultyId);
            $('#first_name').val(facultyFirstName);
            $('#middle_name').val(facultyMiddleName);
            $('#last_name').val(facultyLastName);
            $('#user_email').val(facultyEmail);
            $('#ee_number').val(facultyeenum);
            $('#academicRank').val(facultyAcademicRank);
            $('#academicRankValue').val(facultyAcademicRankValue);
            $('#mother_college').val(facultycollege);
            $('#collge_NUM').val(facultycollge_id);
        });

        $('#facultySelect').select2({
            placeholder: 'Search by Name/ID Number...',
            allowClear: true,
            ajax: {
                url: '{{ route('getUser') }}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        search: params.term // search term
                    };
                },
                processResults: function(data) {
                    var options = [];
                    var searchTerm = $('#facultySelect').data('select2').dropdown.$search.val();

                    data.forEach(function(user) {
                        options.push({
                            id: user.id,
                            employee_fname: user.employee_fname,
                            employee_lname: user.employee_lname,
                            employee_mname: user.employee_mname,
                            employee_no: user.employee_no,
                            email: user.email,
                            academic: user.employee_academic_rank,
                            college: user.college_name,
                            collgeID: user.college_id,
                            text: `${user.employee_fname} ${user.employee_lname}`,
                        });
                    });

                    return {
                        results: options
                    };
                },
                cache: true
            }
        });
    });
</script>
{{-- FORM VALIDATION END--}}


<script>
    $(document).ready(function() {
        $('#cancelRequestButton').click(function() {
            // Clear all input fields
            $('#requestFormCard input[type="text"]').val('');
            $('#facultySelect').prop('selectedIndex', 0); // Reset the select option
            $('.small-warning').hide(); // Hide all warnings

            // Hide the request form card
            $('#requestFormContainer').hide();
        });
    });
</script>



@endsection
