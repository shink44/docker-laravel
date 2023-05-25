<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'フレボ') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    

    <!-- Styles -->
    <link href="{{ asset('css/furebo.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
    @component('components.header')
    @endcomponent

        <main class="py-4 mb-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
