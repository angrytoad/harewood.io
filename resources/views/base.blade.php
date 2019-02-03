<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="rwPYkMxpKvBDQH1E0Q4Woum5d8Gc1tsNIBjGd19dZHc" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title',env('DEFAULT_TITLE')) | Web Development in Nottinghamshire</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <script src='https://www.google.com/recaptcha/api.js?render=6LflCo4UAAAAAIPm6dLUnTYyomKmqsKWAYe8HYmH'></script>
    </head>
    <body>
        @include('partials.navbar')
        @yield('content')
        @include('partials.footer')
    </body>
    <!-- Scripts -->
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    @include('partials.scripts.crispchat')
</html>
