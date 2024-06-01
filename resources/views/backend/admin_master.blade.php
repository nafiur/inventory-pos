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

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/toastr/toatr.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.5.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    @livewireStyles
</head>
<body>
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}

    <div class="main-wrapper">

        @include('backend.header')

        @include('backend.sidebar')

        <div class="flash-messages">
            @phpflasher_render
        </div>
        @yield('content')


    </div>



    <script src="{{ asset('backend/assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('backend/assets/js/feather.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/plugins/apexchart/apexcharts.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/apexchart/chart-data.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/plugins/sweetalert/sweetalert2.all.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/sweetalert/sweetalerts.min.js') }}" type="text/javascript"></script>


    <script src="{{ asset('backend/assets/plugins/summernote/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/dataTables.bootstrap5.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.5.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-ru-mill.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-uk_countries-mill.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-in-mill.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/jvectormap.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/assets/js/theme-script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/js/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/toastr/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/toastr/toastr.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select').select2();
        });

    </script>

    <script>
        $(document).ready(function() {
            // Other initializations...

            // Initialize DateTimePicker
            if ($('.datetimepicker').length > 0) {
                $('.datetimepicker').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm:ss'
                });
            }
        });

    </script>
    @livewireScripts
</body>
</html>
