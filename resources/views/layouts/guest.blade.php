<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-global.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#161616]">
    <div class="nav z-50 fixed top-0 left-0 w-full ">
        @include('layouts.navigation')
    </div>
    <div class="head pt-[0px]">
        <div class="content-body">
            {{ $slot }}
        </div>
    </div>
    @include('layouts.footer')

</body>
<script src="{{ asset('assets/js/sistem.js') }}"></script>

</html>
