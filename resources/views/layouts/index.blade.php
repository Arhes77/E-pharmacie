<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [ x-cloak ] { display: none;}
    </style>
   
</head>
@livewireStyles
<body class="bg-gray-100">
    <div id="app">
        <header class="block w-full mx-auto my-auto justify-between items-center text-sm">
            <div class="h-12.05 bg-black text-white w-full dark:bg-gray-300:text-black flex">
                <div class="flex items-center">
                    <a class="flex ml-3 px-auto">
                        Contactez-nous<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                    <a class="flex ml-3 mx-auto">Qui somme-nous ?<svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>

                <div class="ml-auto items-center flex">
                    @auth
                        <div class="flex">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endauth
                    <div class="p-1 text-center">
                        <div class="p-1 text-center"></div>
                        <a href="{{ route('login') }}"
                            class="text-center items-center px-20 py-1.5 bg-blue-500 border border-gray-600 rounded-sm text-sm font-extrabold text-black">
                            Sign in
                        </a>
                        <div class="text-sm pt-1">
                            New customer?
                            <a href="{{ route('register') }}" class="text-blue-700 hover:blue-500">
                                Start here.
                            </a>
                        </div>
                    </div>

                    {{-- Dark theme a implementer --}}

                </div>
            </div>
            <div class="flex flex-row mx-15% bg-white dark:bg-gray-100">
                <div class="flex">
                    <Logo />
                </div>
                <div class="my-auto mx-3 w-2/3">

                    {{-- composants de reherche --}}

                    <input type="text" name="" id="">
                </div>
                <div class="flex">
                    {{-- composants Pannier --}}
                    {{-- <button>Panier</button> --}}
                   <livewire:panier-produit />
                </div>
            </div>
            {{-- navigation --}}
            <div class="pt-5 w-full flex flex-row h-full">
                <x-responsive-nav-link class="focus:bg-blue-600">
                    {{ __('Medicaments') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link>
                    {{ __('Parapharmacie') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link>
                    {{ __('Veterinaire') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link>
                    {{ __('Services') }}
                </x-responsive-nav-link>
            </div>
            <div class="bg-green-500 w-full h-5 text-white items-center">
            </div>
        </header>

        <!-- Page Content -->
        <main>
            @yield('main')
        </main>


        <h1><b>blade php</b></h1>
        

        <footer>

        </footer>
    </div>
   
    @livewireScripts
</body>

</html>
