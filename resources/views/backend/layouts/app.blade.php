
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Dashboard')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('backend/edu') }}/assets/vendors/core/core.css">

    <link rel="stylesheet" href="{{ asset('backend/edu') }}/assets/vendors/flatpickr/flatpickr.min.css">

    <link rel="stylesheet" href="{{ asset('backend/edu') }}/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ asset('backend/edu') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">

    <link rel="stylesheet" href="{{ asset('backend/edu') }}/assets/css/demo1/style.min.css">

    <link rel="shortcut icon" href="{{ asset('backend/edu') }}/assets/images/favicon.png">

    @stack('css')
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">

        @includeIf('backend.layouts.partials.sidebar')

        <div class="page-wrapper">


        @includeIf('backend.layouts.partials.navbar')


            <div class="page-content">
                @yield('app_content')

            </div>

        @includeIf('backend.layouts.partials.footer')

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('backend/edu') }}/assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/edu') }}/assets/vendors/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('backend/edu') }}/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('backend/edu') }}/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('backend/edu') }}/assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('backend/edu') }}/assets/js/dashboard-light.js"></script>
    <!-- End custom js for this page -->
    @stack('js')

</body>

</html>
