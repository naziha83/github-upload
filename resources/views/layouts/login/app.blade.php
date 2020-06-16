<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon_mof.png') }}">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/global_assets/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/login_assets/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/login_assets/bootstrap_limitless.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/login_assets/layout.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/login_assets/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/login_assets/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    @yield('style')

</head>
<body>

    @yield('content')

    <!-- Core JS files -->
    <script src="{{ asset('js/global_assets/main/jquery.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/ui/ripple.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('js/global_assets/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('js/login_assets/plugins/forms/validation/validate.min.js') }}"></script>

    <script src="{{ asset('js/login_assets/app.js') }}"></script>
    <!-- /theme JS files -->

    @yield('script')

</body>
</html>
