<!doctype html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Registration</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/bugs_logo_icon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
      <div class="authentication-inner row m-0">
        <!-- /Left Text -->
        {{-- <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center" style="background: rgb(105,108,255); background: linear-gradient(140deg, rgba(105,108,255,1) 27%, rgba(0,212,255,1) 100%);"> --}}
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 d-flex bg-primary"
            style=" background-image: url('{{ asset('assets/myimg/animated.gif') }}');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;">
           <div class="w-100 d-flex justify-content-center">
               <div class="d-flex justify-content-center align-items-center">
                   <!-- You can add other content here if needed -->
               </div>
           </div>
       </div>
        <!-- /Left Text -->

        <!-- Login -->
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
          <div class="w-px-400 mx-auto">
            <!-- Logo -->
            {{-- <div class="app-brand">
              <a href="#" class="app-brand-link gap-2">
                <div class="app-brand mb-5">
                    <a class="app-brand-link gap-2">
                      <img src="{{ asset('assets/myimg/logo.png') }}" class="logo-container" alt="Login" style="width: 10%;">
                      <span class="app-brand-text demo text-body fw-bold text-uppercase">BUGS</span>
                    </a>
                  </div>
                <span class="app-brand-text demo text-body fw-bold">Sneat</span>
              </a>
            </div> --}}
            <!-- /Logo -->
            <h3 class="fw-bold mb-2">Register an Account</h3>
            <p class="">Please enter your BU Email to register account</p>


            <form id="registerForm" class="mb-0">
              <div class="mb-2">
                <label for="email" class="form-label">BU Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="@bicol-u.edu.ph" autofocus />
                <div class="invalid-feedback" id="emailError"></div>
              </div>
              <button type="submit" class="btn btn-primary d-grid w-100 mb-1">Register</button>
              <p class="text-secondary text-center"><small>Ensure you have an existing account in the ORS before you register an account.</small></p>
            </form>

            <div class="divider my-4">
                <div class="divider-text">
                    <i class='bx bxl-gmail'></i>
                </div>
            </div>

            <p class="text-center">
                <span class="text-dark fw-bold">Need a Bicol University Email?</span><br>
                <span>Here's your step-by-step guide to requesting one.</span><br>
                <a href="https://systems.bicol-u.edu.ph/icto/request/email-creation" target="_blank" rel="noopener noreferrer">
                  <span class="">Request Now!</span>
                </a>
            </p>

            <div class="divider my-4">
                <div class="divider-text">
                    Already have an account? <a href="/"><small>Login here</small></a>
                </div>
            </div>

            {{-- <div class="divider my-4">
              <div class="divider-text">or</div>
            </div>

            <div class="d-flex justify-content-center">
              <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                <i class="tf-icons bx bxl-facebook"></i>
              </a>

              <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                <i class="tf-icons bx bxl-google-plus"></i>
              </a>

              <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                <i class="tf-icons bx bxl-twitter"></i>
              </a>
            </div> --}}
          </div>
        </div>
        <!-- /Login -->
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/pages-auth.js"></script>

    <script>
        $('#registerForm').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ route('form.register') }}',
                method: 'POST',
                data: {
                    email: $('#email').val(),
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    Swal.fire({
                        title: 'Your registration is being processed',
                        html: '<div class="spinner-grow text-primary" role="status" style="width: 3rem; height: 3rem;"></div>',
                        showConfirmButton: false,
                        allowOutsideClick: false
                    });
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            showConfirmButton: true,
                            confirmButtonText: 'Redirect to Gmail'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.open('https://mail.google.com', '_blank');
                            }
                            // Clear form fields after success
                            $('#registerForm')[0].reset();  // This will reset the entire form
                            $('.is-invalid').removeClass('is-invalid');  // Remove any validation error highlights
                            $('.invalid-feedback').text('');  // Clear any error messages
                        });
                    } else {
                        if(response.message) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message,
                                showConfirmButton: true,
                            });
                        } else {
                            var errors = response.errors;
                            Object.keys(errors).forEach(function(key) {
                                var inputField = $('#registerForm [name=' + key + ']');
                                inputField.addClass('is-invalid');
                                $('#registerForm #' + key + 'Error').text(errors[key][0]);
                            });
                        }
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed!',
                        text: 'Something went wrong.',
                        showConfirmButton: true,
                    });
                }
            });
        });



        $('#registerForm').find('input, select').on('keyup change', function() {
            $(this).removeClass('is-invalid');
            var errorId = $(this).attr('name') + 'Error';
            $('#' + errorId).text('');
        });
    </script>

  </body>
</html>
