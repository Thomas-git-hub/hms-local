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

    <title>BUGS HMS</title>

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

  <style>

  </style>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
      <div class="authentication-inner row m-0">
        <!-- /Left Text -->
        {{-- <div class="d-none d-lg-flex col-lg-7 col-xl-8 d-flex"  style="background: rgb(105,108,255); background: linear-gradient(140deg, rgba(105,108,255,1) 27%, rgba(0,212,255,1) 100%);"> --}}
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
            <div class="app-brand mb-3">
              <a class="app-brand-link gap-2">
                <img src="{{ asset('assets/myimg/logo.png') }}" class="logo-container" alt="Login" style="width: 10%;">
                <span class="app-brand-text demo text-body fw-bold text-uppercase">BUGS</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Welcome to BUGS Honorarium Monitoring System</h4>
            <p class="mb-4">Please sign in to your account to monitor your honorarium</p>

            <form id="loginForm" class="mb-3">
                @csrf
              <div class="mb-3">
                <label for="email" class="form-label">BU Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="@bicol-u.edu.ph" autofocus />
                <div class="invalid-feedback" id="emailError"></div>
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  <a href="/forgot-password">
                    <small>Forgot Password?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="Enter Password"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  <div class="invalid-feedback" id="passwordError"></div>
                </div>
              </div>
              {{-- <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" name="remember"/>
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
              </div> --}}
              <button type="submit" class="btn btn-primary d-grid w-100">Sign in</button>
            </form>

            <p class="text-center">
              <span>Don't have an account?</span>
              <a href="{{route('registration')}}">
                <span>Register here</span>
              </a>
            </p>

            <div class="divider my-4">
              <div class="divider-text">
                <i class='bx bxl-google'></i>
              </div>
            </div>

            <div class="d-flex justify-content-center">
              {{-- <a href="{{ route('auth.redirect') }}" class="btn btn-icon btn-label-google-plus me-3">
                <i class="tf-icons bx bxl-google-plus">Login via Google</i>
              </a> --}}
              <div class="d-flex justify-content-center mb-3">
                <a href="{{ route('auth.redirect') }}" class="btn btn-light shadow-sm d-flex align-items-center border" style="border-radius: 5px; padding: 10px 20px; text-decoration: none;">
                    <img src="https://www.svgrepo.com/show/303108/google-icon-logo.svg" alt="Google Logo" width="20" height="20" class="me-2">
                    <span style="color: #5F6368; font-weight: 500;">Sign in with Google</span>
                </a>
            </div>

            </div>
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
        $('#loginForm').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('login.user') }}",
                method: 'POST',
                data: {
                email: $('#email').val(),
                password: $('#password').val(),
                _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {
                Swal.fire({
                    title: 'Loading...',
                    html: '<div class="spinner-grow text-primary" role="status" style="width: 3rem; height: 3rem;"></div>',
                    showConfirmButton: false,
                    allowOutsideClick: false
                });
                },
                success: function(response) {
                if (response.success) {
                  Swal.close();
                    window.location.href = response.redirect;
                } else {
                    Swal.close();
                    if(response.message){
                      Swal.fire({
                          icon: 'error',
                          title: 'Error!',
                          text: response.message,
                          showConfirmButton: true,
                      });
                    } else {
                      Swal.close();
                      var errors = response.errors;
                      Object.keys(errors).forEach(function(key) {
                          var inputField = $('#loginForm [name=' + key + ']');
                          inputField.addClass('is-invalid');
                          $('#loginForm #' + key + 'Error').text(errors[key][0]);
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


        $('#loginForm').find('input, select').on('keyup change', function() {
            $(this).removeClass('is-invalid');
            var errorId = $(this).attr('name') + 'Error';
            $('#' + errorId).text('');
        });

        // Ajax Google Sign In
        // $(document).on('click', '#googleLogin', function() {
        //         $.ajax({
        //             url: "{{ route('auth.redirect') }}", // Use your route name here
        //             type: "GET",
        //             success: function(response) {
        //                 window.location.href = response; // Redirect to Google's login page
        //             },
        //             error: function(xhr) {
        //                 Swal.fire({
        //                     icon: "error",
        //                     title: "Login Failed",
        //                     text: "Unable to login with Google."
        //                 });
        //             }
        //         });
        // });

        @if (session('error'))
            Swal.fire({
                icon: "error",
                title: "Login Failed",
                text: "{{ session('error') }}"
            });
        @endif


    </script>
  </body>
</html>
