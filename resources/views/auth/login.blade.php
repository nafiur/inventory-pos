<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="InventoryPOS">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Nafiur Rahman">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Inventory Pos Admin</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
</head>
<body class="account-page">
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper login-new">
                <div class="container">
                    <div class="login-content user-login">
                        <div class="login-logo">
                            <img src="{{ asset('backend/assets/img/logo.png') }}" alt="img">
                            <a href="index.html" class="login-logo logo-white">
                                <img src="{{ asset('backend/assets/img/logo-white.png') }}" alt>
                            </a>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="login-userset">
                                <div class="login-userheading">
                                    <h3>Sign In</h3>
                                    <h4>Access the InventoryPOS Admin panel using your email and passcode.</h4>
                                </div>
                                <div class="form-login">
                                    <label class="form-label">Email Address</label>
                                    <div class="form-addons">
                                        <input type="text" name="email" class="form-control">
                                        <img src="{{ asset('backend/assets/img/icons/mail.svg') }}" alt="img">
                                    </div>
                                </div>
                                <div class="form-login">
                                    <label>Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                                <div class="form-login authentication-check">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                    <input type="checkbox" name="remember">
                                                    <span class="checkmarks"></span>Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a class="forgot-link" href="forgot-password-3.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-login">
                                    <button class="btn btn-login" type="submit">Sign In</button>
                                </div>
                                <div class="signinform">
                                    <h4>New on our platform?<a href="register-3.html" class="hover-a"> Create an account</a></h4>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                        <p>Copyright &copy; 2024 InventoryPOS. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('backend/assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/feather.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/theme-script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/script.js') }}" type="text/javascript"></script>
</body>
</html>
