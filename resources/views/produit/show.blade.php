@extends('layouts.index')
@section('main')
    <div class="flex flex-col lg:mt-7 md:mt-4 font-serif ">
        <div class="rounded-md m-4 bg-green-600">
            <h1 class="rounded-sm text-center font-bold text-white">Liste des produits en BD</h1>
        </div>
        <div class="flex flex-row  flex-wrap m-3">
            <div class="lg:w-2.5/3 md:w-1/2 px-1 border-r-2">
                <p class="w-fit text-justify">
                    Epharma@237, référence de la vente de médicaments sur Internet est une véritable pharmacie en ligne
                    française , qui vous donne accès à plus de 5 000 médicaments sans ordonnance, tous issus du circuit
                    français. En vous rendant sur notre site, vous trouverez un large choix de produits...
                </p>
                <a class="bg-black p-15 text-white" href="{{ route('produit.create') }}" type="button"> creer produit</a>
            </div>
            <div class="w-fit lg:ml-6 ml-3 ">
                <ul class="list-disc list-outside grid grid-rows-3 flex-wrap">
                    @forelse ($cat as $ca)
                        <li>{{ $ca->nom_cat }}</li>
                    @empty
                        <h4 class="w-fit my-3 self-center text-red-600 text-xl">Acune Catégories pour le moment!!!</h4>
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="pt-3"><livewire:flash-message/></div>
        <div class="flex flex-wrap lg:ml-12 md:ml-0.5 my-4 flex-col">
            
            @forelse ($cat as $p)
                <h4 class="font-bold w-fit my-3 self-center text-2xl">{{ $p->nom_cat }}</h4>
                <livewire:produit-component :p="$p" :bools="1" />
                
            @empty
                <h4 class="w-fit my-3 self-center text-red-600 text-xl">Acune Catégories pour le moment!!!</h4>
            @endforelse
        </div>
    </div>
@endsection
