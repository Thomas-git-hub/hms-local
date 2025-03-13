
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

    <title>Reset Password</title>

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
    <div class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="card w-50">
                    <div class="card-body">
                        <div class="d-flex">
                            <i class='bx bx-lock-open'></i>
                            <h5 class="card-title">Set a New Password</h5>
                        </div>
                        <form action="" id="resetPasswordForm">
                            <div class="row">
                                <div class="col-md">
                                    <div class="mb-2">
                                        <label for="BUEmail" class="form-label">Bicol University Email</label>
                                        <input type="email" class="form-control" id="BUEmail" placeholder="Enter your active BU Email" />
                                        <small class="text-danger" id="emailError"></small>
                                    </div>

                                    <div class="form-password-toggle mb-2">
                                        <label class="form-label" for="resetPassword">New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="resetPassword" placeholder="Enter new password" />
                                            <span class="input-group-text cursor-pointer togglePassword">
                                                <i class="bx bx-hide"></i>
                                            </span>
                                        </div>
                                        <small class="text-danger" id="passwordError"></small>
                                    </div>

                                    <div class="form-password-toggle mb-2">
                                        <label class="form-label" for="retypePassword">Re-type Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="retypePassword" placeholder="Re-enter new password" />
                                            <span class="input-group-text cursor-pointer togglePassword">
                                                <i class="bx bx-hide"></i>
                                            </span>
                                        </div>
                                        <small class="text-danger" id="confirmPasswordError"></small>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <a href="/" class="fst-italic">Back to Login?</a>
                                        <button type="submit" class="btn btn-label-primary" id="submitButton" disabled>Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
        $(document).ready(function () {
            function validateForm() {
                let email = $("#BUEmail").val().trim();
                let password = $("#resetPassword").val().trim();
                let confirmPassword = $("#retypePassword").val().trim();
                let isValid = true;

                // Email Validation
                if (email === "") {
                    $("#emailError").text("Email is required.");
                    isValid = false;
                } else {
                    $("#emailError").text("");
                }

                // Password Validation (min 8 characters)
                if (password.length < 8) {
                    $("#passwordError").text("Password must be at least 8 characters.");
                    isValid = false;
                } else {
                    $("#passwordError").text("");
                }

                // Confirm Password Validation
                if (confirmPassword !== password || confirmPassword === "") {
                    $("#confirmPasswordError").text("Passwords do not match.");
                    isValid = false;
                } else {
                    $("#confirmPasswordError").text("");
                }

                // Enable Submit Button Only if Form is Valid
                $("#submitButton").prop("disabled", !isValid);
            }

            // Check validation on input change
            $("#BUEmail, #resetPassword, #retypePassword").on("input", validateForm);

            // Show/Hide Password Toggle
            $(".togglePassword").on("click", function () {
                let inputField = $(this).closest(".input-group").find("input");
                let icon = $(this).find("i");

                if (inputField.attr("type") === "password") {
                    inputField.attr("type", "text");
                    icon.removeClass("bx-hide").addClass("bx-show");
                } else {
                    inputField.attr("type", "password");
                    icon.removeClass("bx-show").addClass("bx-hide");
                }
            });

            // Form Submission Handling with SweetAlert
            $("#resetPasswordForm").submit(function (event) {
                event.preventDefault(); // Prevent form submission

                if (!$("#submitButton").prop("disabled")) {
                    Swal.fire({
                        title: "Success!",
                        text: "Password reset successfully!",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(() => {
                        location.reload(); // Reload page after clicking OK
                    });
                }
            });
        });



    </script>
  </body>
</html>
