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
                <div class="login-content user-login">
                    <div class="login-logo">
                        <img src="{{ asset('backend/assets/img/logo.png') }}" alt="img">
                        <a href="index.html" class="login-logo logo-white">
                            <img src="{{ asset('backend/assets/img/logo-white.png') }}" alt>
                        </a>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="login-userset">
                            <div class="login-userheading">
                                <h3>Register</h3>
                                <h4>Create New Inventory with POS Account</h4>
                            </div>
                            <div class="form-login">
                                <label>Name</label>
                                <div class="form-addons">
                                    <input type="text" class="form-control" name="name">
                                    <img src="{{ asset('backend/assets/img/icons/user-icon.svg') }}" alt="img">
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Email Address</label>
                                <div class="form-addons">
                                    <input type="text" class="form-control" name="email">
                                    <img src="{{ asset('backend/assets/img/icons/mail.svg') }}" alt="img">
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" name="password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Confirm Passworrd</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-inputs" name="password_confirmation">
                                    <span class="fas toggle-passwords fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-login authentication-check">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="custom-control custom-checkbox justify-content-start">
                                            <div class="custom-control custom-checkbox">
                                                <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>I agree to the <a href="#" class="hover-a">Terms & Privacy</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">Sign Up</button>
                            </div>
                            <div class="signinform">
                                <h4>Already have an account ? <a href="{{ route('login') }}" class="hover-a">Sign In Instead</a></h4>
                            </div>
                            <div class="form-setlogin or-text">

                            </div>
                            <div class="form-sociallink">
                                <ul class="d-flex">
                                    <li>
                                        <a href="javascript:void(0);" class="facebook-logo">
                                            <img src="{{ asset('backend/assets/img/icons/facebook-logo.svg') }}" alt="Facebook">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('backend/assets/img/icons/google.png') }}" alt="Google">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="apple-logo">
                                            <img src="{{ asset('backend/assets/img/icons/apple-logo.svg') }}" alt="Apple">
                                        </a>
                                    </li>
                                </ul>
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

    <script src="{{ asset('backend/assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/feather.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/theme-script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/script.js') }}" type="text/javascript"></script>
</body>
</html>
