@if ($bools)
    <div class="flex flex-row w-full">

        @forelse ($p->produits as $i => $prod)
            @if ($i <= 4)
                <div
                    class="border font-bold transition duration-700 ease-out delay-150 hover:shadow-xl hover:translate-y-3 dark:text-gray-800 bg-white my-2 lg:-ml-5 md:ml-0.5 w-1/4  flex flex-col ">
                    <a class="flex flex-col" href="#">
                        <img src="{{ Storage::url($prod->url_prod) }}" alt="Imqge du produit" class="w-fit mt-3 h-full" />
                        <h1 class="ml-2 font-extrabold text-center md:text-xs lg:text-xl my-1">{{ $prod->nom_prod }}
                        </h1>
                        <p class="text-center"> {{ $prod->prix_prod }} Fcfa</p>
                    </a>
                    <a class="cursor-pointer dark:text-gray-700 flex mt-auto text-center py-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"
                        wire:click="addPanier({{ $prod->id }})"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor" class="w-6 mx-3 h-6">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>Ajouter
                    </a>
                </div>
            @else
            @break
        @endif
    @empty
    @endforelse

    </div>
    <div class="w-fit my-3 self-center">
        <a href="{{ route('categorie.show', [$p->id]) }}"
            class="lg:px-7 md:text-xl text-xs py-2 rounded-xl dark:bg-blue-500   text-white bg-gray-700"> Voir tous les
            produits relatif à <u> {{ $p->nom_cat }}</u></a>
    </div>
@else
    <div class="flex flex-row w-full">
        @forelse ($p->produits as $i => $prod)
            <div
                class="border font-bold transition duration-700 ease-out delay-150 hover:shadow-xl hover:translate-y-3 dark:text-gray-800 bg-white my-2 lg:-ml-5 md:ml-0.5 w-1/4  flex flex-col ">
                <a class="flex flex-col" href="#">
                    <img src="{{ Storage::url($prod->url_prod) }}" alt="Imqge du produit" class="w-fit mt-3 h-full" />
                    <h1 class="ml-2 font-extrabold text-center md:text-xs lg:text-xl my-1">{{ $prod->nom_prod }}
                    </h1>
                    <p class="text-center"> {{ $prod->prix_prod }} Fcfa</p>
                </a>
                <a class="cursor-pointer dark:text-gray-700 flex mt-auto text-center py-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"
                    wire:click="addPanier({{ $prod->id }})"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="w-6 mx-3 h-6">
                        <path
                            d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                    </svg>Ajouter
                </a>
            </div>
        @empty
        @endforelse

    </div>
    <div class="w-fit my-3 self-center">
        <a href="{{ route('categorie.show', [$p->id]) }}"
            class="lg:px-7 md:text-xl text-xs py-2 rounded-xl dark:bg-blue-500   text-white bg-gray-700"> <u>
                {{ $p->nom_cat }}</u></a>
    </div>
@endif
