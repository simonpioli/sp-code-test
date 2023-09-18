<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
{{--    <title>{{ config('app.name', 'Laravel') }} | {{ $pageTitle }}</title>--}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Inline Scripts -->
    @yield('pre-js')

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/gxp6wnw.css">

    <!-- Styles -->
    @vite('resources/scss/app.scss')

    <!-- Scripts -->
    <script>
        window.config = window.config || {};
    </script>
    @vite('resources/js/app.js')

{{--    <meta name="description" content="{{ $pageDescription }}">--}}
{{--    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/favicon.png') }}" />--}}
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
</body>
</html>
