<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('asset/style.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="/portofolio" style='padding-left:20px'>Home</a>

    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="/about">About </a>
        <a class="nav-link" href="/education">Education </a>
        <a class="nav-link" href="/projects">Projects </a>
        <a class="nav-link" href="/posts">Blogs </a>
        <a class="nav-link" href="/send-email">Email </a>
    </ul>
</nav>
    @yield('content')
</body>
</html>

<!-- testing tambah teks -->

