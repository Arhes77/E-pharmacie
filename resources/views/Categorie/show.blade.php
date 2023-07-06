@extends('layouts.index')
@section('main')
<div class="flex flex-col lg:mt-7 md:mt-4 font-serif ">
    <div class="rounded-md m-4 bg-green-600">
        <h1 class="rounded-sm text-center font-bold text-white">Liste des produits en BD</h1>
    </div>
    <div class="flex flex-row flex-wrap m-3">
        <div class="lg:w-2/3 md:w-1/2 px-1 border-r-2">
            <p class="w-fit text-justify">
                Epharma@237, référence de la vente de médicaments sur Internet est une véritable pharmacie en ligne
                française , qui vous donne accès à plus de 5 000 médicaments sans ordonnance, tous issus du circuit
                français. En vous rendant sur notre site, vous trouverez un large choix de produits...
            </p>
        </div>
        <div class="w-fit lg:ml-6 ml-3 ">
            <ul class="list-disc list-outside">
                @foreach ($cats as $ca)
                    <li>{{ $ca->nom_cat }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="flex flex-wrap lg:ml-12 md:ml-0.5 my-4 flex-col">
        @foreach ($cat as $p)
            <livewire:produit-component :p="$p" :bools="0"/>
        @endforeach
    </div>

    <a class="bg-black p-15 text-white" href="{{ route('produit.create') }}" type="button"> creer produit</a>
   

</div>
@endsection