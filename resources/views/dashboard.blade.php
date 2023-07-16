<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<h1 class="text-center font-extrabold tracking-tight upercase text-5xl">historique de vos commandes</h1>
    <div class="py-12 h-screen flex flex-wrap flex-cols mx-auto">
        
        @forelse (Auth::user()->commandes as $cmd)
            <div
                class="max-w-7xl  sm:px-6 lg:px-8 border bg-gray-200 rounded-lg mx-12 mt-auto p-5 w-1/4 border-3  mb-12">
                <div class="flex justify-between border-b border-gray-500 mb-7">
                    <div class="text-extrabold text-2xl bg-white rounded-3xl mb-2 p-2">
                        {{ $cmd->prixT_com }} fcfa
                    </div>
                    <div>
                        <div class="bg-green-100 border-gray-200 rounded-md capitalize px-5 font-extrabold mb-2 text-green-900 text-xl">payé
                            
                              
                        </div>
                    </div>
                </div>
                <div class="my-12">
                    <div class="flex justify-stretch px-12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="font-bold uppercase ml-5">{{ Auth::user()->nom }}</span>


                    </div>
                    <div class="flex justify-stretch px-12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <span class="ml-5">{{ $cmd->created_at }}</span>


                    </div>
                </div>
                <div class="flex mr-5 bg-green-200 rounded-full shadow-2xl h-16 w-auto">
                    <button class="font-extrabold uppercase text-2xl flex">regenerer la facture
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-5 mt-3 text-2xl">
                            <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                          </svg>
                          
                    </button>
                   
                </div>




            </div>
        @empty
            <span class="text-xl font-semibold">vous n'aviez pas encore fait de commandes</span>
        @endforelse
    </div>


</x-app-layout>
