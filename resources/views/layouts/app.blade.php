<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Menampilkan logo di dalam bagian head -->
    {{-- <img src="{{ asset(env('APP_LOGO_PATH')) }}" alt="Logo"> --}}

    <!-- nama aplikasi -->
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="asset/css/allstyle.css">

    @livewireStyles
</head>

<body>

    <div id="app" style="margin-top: 60px;">
        <livewire:peminjam.kategori></livewire:peminjam.kategori>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @livewireScripts

    @include('admin-lte.footer-user')
</body>

</html>
