<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon_mof.png') }}">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/global_assets/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/global_assets/icons/material/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main_assets/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main_assets/bootstrap_limitless.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main_assets/layout.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main_assets/components1.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main_assets/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    @yield('style')

</head>
<body class="navbar-top">

    {{-- Main Navbar --}}
    @include('layouts.master.navbar')

    {{-- Page Content --}}
    <div class="page-content">

        {{-- Main Sidebar --}}
        @include('layouts.master.sidebar')

        {{-- Main Content --}}
        <div class="content-wrapper">

            @yield('content')

            @include('layouts.master.footer')

        </div>

    </div>

    <script src="{{ asset('js/global_assets/main/jquery.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/ui/perfect_scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/pickers/anytime.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/notifications/sweet_alert.min.js') }}"></script>

    <!-- Theme JS files -->
    @yield('script')

    <script src="{{ asset('js/main_assets/app.js') }}"></script>
    <!-- /theme JS files -->

    <!-- Custom JS -->
    <script src="{{ asset('js/main_assets/sidebar_custom_scroll.js') }}"></script>
    <script src="{{ asset('js/main_assets/picker_date.js') }}"></script>
    <script src="{{ asset('js/main_assets/inputmask.js') }}"></script>
    <script src="{{ asset('js/main_assets/formatter.min.js') }}"></script>

    @yield('script-custom')
    <!-- /custom JS -->

</body>
</html>
