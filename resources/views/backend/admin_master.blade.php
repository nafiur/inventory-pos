<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Inventory With POS">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Nafiur Rahman">
    <meta name="robots" content="noindex, nofollow">
    <title>Inventory With POS</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
</head>
<body>
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}

    <div class="main-wrapper">

        @include('backend.header')

        @include('backend.sidebar')

        <div class="page-wrapper">
            @yield('content')
        </div>

    </div>


    <script src="{{ asset('backend/assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/feather.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/plugins/apexchart/apexcharts.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/apexchart/chart-data.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/plugins/sweetalert/sweetalert2.all.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/sweetalert/sweetalerts.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/theme-script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/script.js') }}" type="text/javascript"></script>
</body>
</html>
