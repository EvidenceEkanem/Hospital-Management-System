<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hospital Data Management Panel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ URL::to('loginFolder/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ URL::to('loginFolder/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('loginFolder/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ URL::to('loginFolder/css/nice-select.css') }}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ URL::to('loginFolder/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::to('loginFolder/css/main.css') }}">
</head>
<body>
    <main>
        <article>
            <div id="app">
                    @yield('content')
            </div>
        </article>
    </main>

    @yield('scripts')


    <script src="{{ URL::to('loginFolder/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{ URL::to('loginFolder/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('loginFolder/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ URL::to('loginFolder/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ URL::to('loginFolder/js/jquery.sticky.js') }}"></script>
        <script src="{{ URL::to('loginFolder/js/parallax.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ URL::to('loginFolder/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::to('loginFolder/js/waypoints.min.js') }}"></script>
        <script src="{{ URL::to('loginFolder/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ URL::to('loginFolder/js/main.js') }}"></script>
</body>
</html>
