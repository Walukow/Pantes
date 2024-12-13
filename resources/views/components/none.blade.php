<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" href="{{ URL('images/logo.png') }}" type="image/png">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100"
        x-data="{ isSmallScreen: window.innerWidth <= 1000 }" 
            x-init="
                window.addEventListener('resize', () => {
                    isSmallScreen = window.innerWidth <= 1000;
                }),
            ">
            @if (session('info'))
                @include('flasher')
            @endif
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-14 px-10">
                    {{ $header }}
                </div>
                <a href="{{ route('collection') }}" class="absolute top-5 lg:left-6 left-2">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                    </svg>                                                         
                </a>   
                <a href="{{ url('/') }}">
                    <img class="lg:w-12 absolute lg:top-4 lg:right-[10%] w-8 top-6 right-2" src="{{ url('images/logo.png') }}" alt="">             
                </a>
            </header>
        @endisset
        {{ $slot }}
    </body>
</html>
