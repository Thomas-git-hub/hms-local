<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script src="assets/vendor/libs/select2/select2.js"></script>
    <script src="assets/vendor/libs/toastr/toastr.js"></script>


    <!-- CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>



    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <script>
        $(function () {

            function getEmail() {
                $.ajax({
                    url: '{{ route('getadmin_email') }}',
                    method: 'GET',
                    success: function(data) {
                        $('#UnreadCount').text(data.UnreadCount);
                        $('#emailtoday').text(data.emailtoday);

                    }
                });
            }
            getEmail();

            function acknowledgementCount() {
                $.ajax({
                    url: '{{ route('acknowledgementCount') }}',
                    method: 'GET',
                    success: function(data) {
                        $('#acknowledgementCount').text(data.acknowledgementCount);

                    }
                });
            }

            acknowledgementCount();

            function getPendingEmail() {
                $.ajax({
                    url: '{{ route('EmailCount') }}',
                    method: 'GET',
                    success: function(data) {
                        $('#EmailCount').text(data.EmailCount);

                    }
                });
            }

            getPendingEmail();

            function getThesisAcknowledgement() {
                $.ajax({
                    url: '{{ route('getThesisAcknowledgement') }}',
                    method: 'GET',
                    success: function(data) {
                        $('#thesisAcknowledgementCount').text(data.acknowledgementCount);

                    }
                });
            }

            getThesisAcknowledgement();

            function getThesisOutgoing() {
                $.ajax({
                    url: '{{ route('getThesisOutgoing') }}',
                    method: 'GET',
                    success: function(data) {
                        $('#outgoingDefensesCount').text(data.outgoingCount);

                    }
                });
            }

            getThesisOutgoing();

            function getOnHold() {
                $.ajax({
                    url: '{{ route('getOnHold') }}',
                    method: 'GET',
                    success: function(data) {
                        $('#onHoldCount').text(data.onholdcount);

                    }
                });
            }

            getOnHold();



            var table = $('#inboxTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('getEmails')}}',
                pageLength: 100,
                paging: false, // Disable pagination
                dom: '<"top"f>rt<"bottom"ip>',
                // responsive: true,
                language: {
                    search: "", // Remove the default search label
                    searchPlaceholder: "Search..." // Set the placeholder text
                },
                order: [[3, 'desc']], // Sort by the 4th column (Date) in descending order to ensure the latest date is on top
                columns: [
                    {
                        data: 'id',
                        orderable: true,
                        render: function(data, type, row) {
                            return '<input type="checkbox" class="form-check-input row-checkbox" value="' + row.id + '">';
                        }
                    },
                    { data: 'name', name: 'name', title: 'Name' },
                    { data: 'subject', name: 'subject', title: 'Subject' },
                    { data: 'date', name: 'date', title: 'Date' }
                ],
                createdRow: function(row, data) {
                    // Add class to unopened rows
                    if (data.status === 'Unread') {
                        $(row).addClass('unopened').css('font-weight', 'bold');
                    } else if (data.status === 'Read') {
                        $(row).addClass('opened').css('font-weight', 'normal');
                    }
                }
            });

            // Function to update the Toggle Check button text
            function updateToggleCheckButton() {
                var allChecked = $('#inboxTable tbody input.row-checkbox').length === $('#inboxTable tbody input.row-checkbox:checked').length;
                var anyChecked = $('#inboxTable tbody input.row-checkbox:checked').length > 0;

                if (allChecked || anyChecked) {
                    $('#toggleCheck').text('Uncheck');
                } else {
                    $('#toggleCheck').text('Check All');
                }
            }

            // Initial call to set the button text based on initial state
            updateToggleCheckButton();

             // Row click event
             $('#inboxTable tbody').on('click', 'tr', function() {
                var rowData = table.row($(this).closest('tr')).data();

                // If the row is unopened, change its class to opened
                if ($(this).hasClass('unopened')) {
                    $(this).removeClass('unopened').addClass('opened');
                }

                $.ajax({
                    url: '{{ route('updateEmailStatus') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: rowData.id
                    },
                    success: function(response) {
                        if (response.success) {
                            console.log('Status updated to Read');
                        } else {
                            console.log('Error updating status');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('AJAX Error:', error);
                    }
                });

                // Redirect to another page with full details (example)
                window.location.href = `/admin_open_email?id=${rowData.id}`;
            });

            // Prevent checkbox click from triggering row click event
            $('#inboxTable tbody').on('click', 'input.row-checkbox', function(e) {
                e.stopPropagation();

                updateToggleCheckButton(); // Update button text when a checkbox is clicked
            });

            // Delete Selected button click event
            $('#deleteSelected').on('click', function() {
                var selectedIds = [];
                $('#inboxTable tbody input.row-checkbox:checked').each(function() {
                    var rowId = $(this).val(); // Get the ID of the row
                    selectedIds.push(rowId);   // Collect the selected row IDs
                });

                if (selectedIds.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No selection',
                        text: 'Please select at least one item to delete.',
                    });
                    return;
                }

                // Confirm deletion
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Send AJAX request to change the status to "Deleted"
                        $.ajax({
                            url: '{{ route('deleteEmails') }}',
                            type: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                ids: selectedIds
                            },
                            success: function(response) {
                                getEmail();
                                if (response.success) {
                                    // Remove the selected rows from the table
                                    $('#inboxTable tbody input.row-checkbox:checked').each(function() {
                                        var row = $(this).closest('tr');
                                        table.row(row).remove().draw(false);
                                    });
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted!',
                                        text: 'Selected emails have been deleted.',
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: 'There was an error deleting the selected emails.',
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                  getEmail();
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: 'There was an issue with the deletion process.',
                                });
                            }
                        });
                    }
                });

                updateToggleCheckButton(); // Update button text after deletion
            });

            // Toggle Check All/Uncheck All button click event
            $('#toggleCheck').on('click', function() {
                var allChecked = $('#inboxTable tbody input.row-checkbox').length === $('#inboxTable tbody input.row-checkbox:checked').length;

                if (allChecked) {
                    $('#inboxTable tbody input.row-checkbox').prop('checked', false);
                    $('#toggleCheck').text('Check All');
                } else {
                    $('#inboxTable tbody input.row-checkbox').prop('checked', true);
                    $('#toggleCheck').text('Uncheck');
                }
            });

        });
    </script>
    {{-- EMAIL DATATABLES END --}}

{{-- ACKNOWLEDGEMENT DATATABLES START --}}

{{-- ACKNOWLEDGEMENT DATATABLES END --}}

{{-- HISTORY DATATABLES START --}}
<script>
    $(function () {
        // var data = [
        //     { batch_id: ' 001-08072024', from: 'Jane blu <small class="text-warning">(BUGS Admnistration)</small>', number_of_transactions: '5', date: 'Jul 5' },
        //     { batch_id: ' 002-08072024', from: 'Jane blu <small class="text-warning">(BUGS Admnistration)</small>', number_of_transactions: '5', date: 'Jul 5' },
        //     { batch_id: ' 003-08072024', from: 'Jane blu <small class="text-warning">(BUGS Admnistration)</small>', number_of_transactions: '5', date: 'Jul 5' },
        //     { batch_id: ' 004-08072024', from: 'Jane blu <small class="text-warning">(BUGS Admnistration)</small>', number_of_transactions: '5', date: 'Jul 5' },
        //     // Add more objects as needed
        // ];

        var table = $('#historyTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('history.list')}}',
            pageLength: 100,
            paging: true, // abled pagination
            dom: '<"top"lf>rt<"bottom"ip>',
            order: [[4, 'desc']], // Sort by the 'date' column in descending order
            language: {
                search: "", // Remove the default search label
                searchPlaceholder: "Search..." // Set the placeholder text
            },
            columns: [
                { data: 'id', name: 'id', title: 'ID', visible: false },
                { data: 'batch_id', name: 'batch_id', title: 'Batch ID' },
                { data: 'from', name: 'from', title: 'From' },
                { data: 'number_of_transactions', name: 'number_of_transactions', title: 'No. of Transactions' },
                { data: 'date', name: 'date', title: 'Date' },
            ],
            createdRow: function(row, data) {
                // Add class to unopened rows
                $(row).addClass('unopened');
            }
        });


        // Row click event
        $('#historyTable tbody').on('click', 'tr', function() {
            var rowData = table.row($(this).closest('tr')).data();

            // If the row is unopened, change its class to opened
            if ($(this).hasClass('unopened')) {
                $(this).removeClass('unopened').addClass('opened');
            }

            // Redirect to another page with full details (example)
            window.location.href = `/open_history?id=${rowData.batch_id}`;
        });
    });
</script>
{{-- HISTORY DATATABLES END --}}

{{-- BACK NAVIGATION BUTTON START --}}
<script>
    $(document).ready(function() {
        $('#navigatePrevious').on('click', function() {
            window.history.back(); // Go back to the previous page
            console.log('Navigating back');
        });
    });
</script>
{{-- BACK NAVIGATION BUTTON START --}}

{{-- DISCARD EMAIL TOAST --}}
<script>
    $(document).ready(function() {
        $('#discard').click(function() {
            location.reload(); // Reloads the current page
        });
    });
</script>
{{-- DISCARD EMAIL TOAST END--}}




