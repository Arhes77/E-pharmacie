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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    @livewireStyles
    <body class="bg-gray-100">
        <div class="h-full w-full flex flex-row sm:justify-center items-center pt-6">
            <div class="w-1/2">
                <a href="/">
                    <img src="{{asset('images/logo/auth.png')}}" alt="Allons y">
                </a>
            </div>

            <div class="w-full h-96 overflow-y-scroll sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md rounded text-left sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
    </body>
</html>
