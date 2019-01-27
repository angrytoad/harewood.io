<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="rwPYkMxpKvBDQH1E0Q4Woum5d8Gc1tsNIBjGd19dZHc" />

        <title>@yield('title',env('DEFAULT_TITLE')) | Web Development in Nottinghamshire</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        @yield('content')
    </body>
</html>
