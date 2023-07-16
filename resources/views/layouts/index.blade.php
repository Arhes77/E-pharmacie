<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image">


    <title class="text-green-600">Epharm@237:Phamacie et Parapharmacie du 237(Cameroun)</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    
        <style>
            [ x-cloak ] { display: none;}
        </style>
    @livewireStyles
</head>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").classList.add("sticky");
        } else {
            document.getElementById("header").classList.remove("sticky");
        }
        prevScrollpos = currentScrollPos;
    }
</script>
<script>
    $(document).ready(function() {
        // afficher le bouton "Remonter" lorsque l'utilisateur a fait défiler la page
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        // faire défiler la page vers le haut en douceur lorsque l'utilisateur clique sur le bouton "Remonter"
        $('#back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
</script>

<body>
    <div>
        <header id="header"
            class="z-10 transition duration-300 ease-in-out transform bg-gray-100 dark:bg-gray-900 top-0 w-full mx-auto my-auto justify-between items-center text-sm">
            {{-- contactez nous et user component --}}
            <div class="bg-black text-white w-full flex">
                {{-- contactez nous  --}}
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
                {{-- user component --}}
                <div class="ml-auto items-center flex">
                    @if (Auth::user())
                        <!-- Settings Dropdown -->
                        <div class="flex">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <div data-te-chip-init data-te-ripple-init
                                        class="[word-wrap: break-word] my-[5px] mr-4 flex h-[42px] cursor-pointer items-center justify-between rounded-[18px] bg-gray-100 px-[12px] py-0 text-[13px] font-normal normal-case leading-loose text-[#4f4f4f] shadow-none transition-[opacity] duration-300 ease-linear hover:!shadow-none active:bg-white  dark:bg-neutral-600 dark:text-neutral-200">
                                        <img class="my-0 -ml-[10px] mr-[8px] h-[inherit] w-[inherit] rounded-[90%]"
                                            src="{{ Storage::url(Auth::user()->profil) }}" alt="Contact Person" />
                                        {{ Auth::user()->nom }}
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </x-slot>
                                <x-slot name="content">
                                    <a class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                        href="/admin">Administration</a>
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profil') }}
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
                    @else
                        <div class="p-1 text-center inline-flex">
                            <div class="p-1 text-center"></div>
                            <div class="text-sm pt-2">
                                Nouveau chez nous ?
                                <a href="{{ route('register') }}" class="text-blue-500 hover:opacity-70">
                                    Commencez ici.
                                </a>
                            </div>
                            <a href="{{ route('login') }}"
                                class="text-center items-center px-20 py-1.5 bg-blue-500 border border-gray-600 rounded-sm text-sm font-extrabold text-black">
                                Sign in
                            </a>

                        </div>
                    @endif
                    {{-- Dark theme a implementer --}}
                    <div class="mr-2">
                        <h6>Theme</h6>
                        <label class="swap swap-rotate">
                            <!-- this hidden checkbox controls the state -->
                            <input id="theme-toggle" type="checkbox" class="invisible" />

                            <!-- sun icon -->
                            <svg class="swap-off fill-current w-10 h-8" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                            </svg>

                            <!-- moon icon -->
                            <svg class="swap-on text-green-500 fill-current w-10 h-8" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                            </svg>

                        </label>
                    </div>
                </div>
            </div>
            {{-- Logo composant de recherche et pannier --}}
            <div class="flex mb-0 flex-row w-full ">
                {{-- Logo --}}
                <div class="flex lg:w-1/4  py-2">
                    <x-application-logo />
                </div>
                {{-- composant de recherche --}}
                <div class="py-auto self-center flex lg:w-1/2">
                    {{-- composants de reherche --}}
                    <livewire:search-produit />
                </div>
                {{-- composant du pannier --}}
                <div class="flex w-1/4 my-auto ml-1">
                    {{-- composants Pannier --}}
                    <livewire:panier-produit />
                </div>
            </div>
            {{-- navigation --}}
            <div class="mt-0 dark:text-white">
                <nav class="pt-5 w-full  flex flex-row">
                    <x-responsive-nav-link :href="route('produit.index', [1])" class="focus:bg-blue-600">
                        {{ __('Medicaments') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('produit.index', [2])" class="focus:bg-blue-600">
                        {{ __('Parapharmacie') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('produit.index', [3])" class="focus:bg-blue-600">
                        {{ __('Vétérinaire') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link>
                        {{ __('Services') }}
                    </x-responsive-nav-link>
                </nav>
            </div>
            <div class="bg-green-500 w-full text-white font-bold  flex  h-[7]">
                <a href="#" id="back-to-top" title="Remonter la page" class="animate-bounce mx-auto flex self-center">
                    <h5>Go Up</h5><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-4 h-[7] ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
                    </svg>
                </a>
            </div>
        </header>

        <!-- Page Content -->
        <main class="dark:bg-neutral-600 dark:text-neutral-200">
            @yield('main')
        </main>

        {{-- <!-- Footer section made by @WillySmith  --> --}}
        <footer class="bg-black text-center text-white">
            <div class="container px-6 pt-6">
                <!-- Lien et Newletter  section -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4">
                    <div class="mb-6 border-l-3">
                        <h5 class="mb-2.5 text-green-500 text-xl font-bold uppercase">A Propos</h5>

                        <ul class="mb-0 list-none">
                            <li>
                                <a href="#!" class="text-white hover:text-blue-600 hover:opacity-70">Qui sommes
                                    nous???</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white hover:text-blue-600 hover:opacity-70">Nous
                                    contactez</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white hover:text-blue-600 hover:opacity-70">Parainage et
                                    fid&eacute;lit&eacute;</a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="text-white hover:text-blue-600 hover:opacity-70">L&eacute;galit&eacute; des
                                    pharmacies en ligne</a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="text-white hover:text-blue-600 hover:opacity-70">&Eacute;vitez
                                    les
                                    contrefa&ccedil;on </a>
                            </li>
                            <li>
                                <a href="#!" class="text-white hover:text-blue-600 hover:opacity-70">FQA</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Liens utile --}}
                    <div class="mb-6 border-l-3">
                        <h5 class="mb-2.5 text-green-500 text-xl font-bold uppercase">Cat&eacute;gories</h5>

                        <ul class="mb-0 list-none">
                            <li>
                                <a href="#!" class="text-white hover:text-blue-600 hover:opacity-70">Maux
                                    d'estomac</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white hover:text-blue-600 hover:opacity-70">Rhume &&
                                    Grippe</a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="text-white hover:text-blue-600 hover:opacity-70">Hemoro&iuml;de</a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="text-white hover:text-blue-600 hover:opacity-70">Phytot&eacute;rapie</a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="text-white hover:text-blue-600 hover:opacity-70">Compl&eacute;ments
                                    alimentaires</a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="text-white hover:text-blue-600 hover:opacity-70">Vet&eacute;rinaire</a>
                            </li>
                        </ul>
                    </div>

                    {{-- NewLetter section --}}
                    <div class="mb-6 border-l-3 lg:col-span-2 min-w-full flex flex-row">
                        <form class="w-2/3 mx-3" action="" method="POST">
                            <div class="flex flex-col mx-3">
                                <div class="md:mb-6 md:ml-auto">
                                    <p class="">
                                        <strong>Abonner vous à notre newsLetter, chaque semaine nous publions les
                                            offres et les reductions les plus importantes</strong>
                                    </p>
                                </div>

                                <!-- Newsletter sign-up input field -->
                                <div class="relative md:mb-6">
                                    <input type="text"
                                        class=" block text-black min-h-[auto] w-full rounded border-0 px-3 py-[0.32rem]"
                                        placeholder="Adresse Email" name="newsletter" />
                                </div>

                                <!-- Newsletter sign-up submit button -->
                                <div class="mb-6 mt-2 md:mr-auto">
                                    <button type="submit"
                                        class="inline-block rounded px-6 pb-[6px] pt-2 text-xs font-medium hover:bg-opacity-70 bg-green-500 ">
                                        S'abonner à la NewsLetter
                                    </button>
                                </div>
                            </div>
                        </form>

                        {{-- Nous suivre --}}
                        <div class="flex flex-col border-l-2 w-1/3 px-5">
                            {{-- facebook --}}
                            <a href="#!" type="button"
                                class="m-1 h-9 w-9 hover:animate-bounce rounded-full border-2 border-blue-800 uppercase leading-normal text-blue-800 transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                            {{-- twiter --}}
                            <a href="#!" type="button"
                                class="m-1 h-9 w-9 rounded-full border-2 border-blue-600 text-blue-600 hover:animate-bounce hover:bg-opacity-80 focus:ring-1"
                                data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            {{-- google --}}
                            <a href="#!" type="button"
                                class="m-1 h-9 w-9 rounded-full border-2 border-l-blue-600 border-t-red-600 border-r-yellow-400 border-b-white text-green-400 hover:animate-bounce hover:bg-opacity-80 focus:ring-1"
                                data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                                        fill-rule="evenodd" clip-rule="evenodd" />
                                </svg>
                            </a>
                            {{-- instagram --}}
                            <a href="#!" type="button"
                                class="m-1 h-9 w-9 rounded-full border-2 border-l-blue-600 border-t-blue-500 border-r-red-600 border-b-white text-white bg-red-900 hover:animate-bounce hover:bg-opacity-80 focus:ring-1"
                                data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            {{-- linkdin --}}
                            <a href="#!" type="button"
                                class="m-1 h-9 w-9 rounded-full border-2 border-blue-600 text-blue-600 hover:animate-bounce hover:bg-opacity-80 focus:ring-1"
                                data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Image du footer section --}}
            <div class="container p-6">
                <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-5">
                    <div class="mb-6 lg:mb-0">
                        <img src="{{ asset('images/cover/care.jpg') }}" class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img src="{{ asset('images/cover/affiche2.jpg') }}" class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img src="{{ asset('images/cover/house2.png') }}" class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img src="{{ asset('images/cover/affiche3.jpg') }}" class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img src="{{ asset('images/medicaments/love.jpg') }}" class="w-full rounded-md shadow-lg" />
                    </div>
                </div>
            </div>

            {{-- Copyright section --}}
            <div class="p-4 text-center" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023,
                <a class="text-white hover:text-blue-500 hover:opacity-60 pl-2" href="/">Epharma@237</a> Tous
                droits réservés|

                <a class="text-white hover:text-blue-500 hover:opacity-60 pl-2" href="/">Comment commander???
                    |</a>
                <a class="text-white hover:text-blue-500 hover:opacity-60 pl-2" href="/">Methodes de livraison
                    |</a>
                <a class="text-white hover:text-blue-500 hover:opacity-60 pl-2" href="/">Comment &ccedil;a
                    marche???</a>
            </div>
        </footer>

    </div>
    @vite('resources/js/app.js')
    @livewireScripts
</body>
<script>
    const toggleButton = document.querySelector('#theme-toggle');
    toggleButton.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
    });
</script>

</html>
