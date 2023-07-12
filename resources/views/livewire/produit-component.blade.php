@if ($bools)
    <div class="flex flex-row w-full">

        @forelse ($p->produits as $i => $prod)
            @if ($i <= 3)
                <div
                    class="border font-bold transition duration-700 ease-out delay-150 hover:shadow-xl hover:translate-y-3 dark:text-gray-800 bg-white my-2 lg:-ml-5 md:ml-0.5 w-1/4  flex flex-col ">
                    <a class="flex h-full flex-col" href="#">
                        <div class="my-auto ">
                            <img src="{{ Storage::url($prod->url_prod) }}" alt="Image du produit" class="w-fit h-full" />
                        </div>
                        <div class="mt-auto">
                            <h1 class="ml-2 font-extrabold text-center md:text-xs lg:text-xl my-1">{{ $prod->nom_prod }}
                            </h1>
                            <p class="text-center mt-auto"> {{ $prod->prix_prod }} Fcfa</p>
                        </div>
                    </a>
                    <button type="button "
                        class="inline-block  rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">

                    </button>
                    @if ($prod->qteS_prod == 0)
                        <button disabled="true" class="cursor-pointer dark:text-gray-700 flex mt-0 text-center py-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-300"
                            ><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mx-3 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                            </svg>
                            En Rupture
                        </button>
                    @else
                        <button  wire:click="addPanier({{ $prod->id }})" class="cursor-pointer dark:text-gray-700 flex mt-0 text-center py-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"
                           ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 mx-3 h-6">
                                <path
                                    d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                            </svg>Ajouter
                        </button>
                    @endif
                </div>
            @else
            @break
        @endif
    @empty
        <h4 class="w-3/4 my-3 self-center text-red-600 text-xl">Acun Produits pour le moment dans cette
            Catégories!!!</h4>
    @endforelse
</div>
<div class="w-fit my-3 self-center">
    <a href="{{ route('categorie.show', [$p->id]) }}"
        class="lg:px-7 md:text-xl text-xs py-2 rounded-xl dark:bg-blue-500   text-white bg-gray-700"> Voir tous les
        produits relatif à <u> {{ $p->nom_cat }}</u></a>
</div>
@else
<div class="flex flex-row flex-wrap w-full">
    @forelse ($p->produits as $i => $prod)
        <div
            class="border font-bold transition duration-700 ease-out delay-150 hover:shadow-xl hover:translate-y-3 dark:text-gray-800 bg-white my-2 lg:-ml-5 md:ml-0.5 w-1/4  flex flex-col ">
            <a class="flex h-full flex-col" href="#">
                <div class="my-auto ">
                    <img src="{{ Storage::url($prod->url_prod) }}" alt="Image du produit" class="w-fit h-full" />
                </div>
                <div class="mt-auto">
                    <h1 class="ml-2 font-extrabold text-center md:text-xs lg:text-xl my-1">{{ $prod->nom_prod }}
                    </h1>
                    <p class="text-center mt-auto"> {{ $prod->prix_prod }} Fcfa</p>
                </div>
            </a>
            <button
                class="inline-block  rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
            </button>
            @if ($prod->qteS_prod == 0)
                <button disabled="true"
                    class="cursor-pointer dark:text-gray-700 flex mt-0 text-center py-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mx-3 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                    </svg>
                    En Rupture
                </button>
            @else
                <button  wire:click="addPanier({{ $prod->id }})" class="cursor-pointer dark:text-gray-700 flex mt-0 text-center py-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"
                    ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="w-6 mx-3 h-6">
                        <path
                            d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                    </svg>Ajouter
                </button>               
            @endif
        </div>
    @empty
        <h4 class="w-3/4 my-3 self-center text-red-600 text-xl">Acun Produits pour le moment dans cette
            Catégories!!!</h4>
    @endforelse

</div>
<div class="w-fit my-3 self-center">
    <a href="{{ route('categorie.show', [$p->id]) }}"
        class="lg:px-7 md:text-xl text-xs py-2 rounded-xl dark:bg-blue-500   text-white bg-gray-700"> <u>
            {{ $p->nom_cat }}</u></a>
</div>
@endif
