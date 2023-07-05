@extends('layouts.index')
@section('main')
    <div class="flex flex-col font-serif font-bold">
        <h1>Liste des produits en BD</h1>
        <a class="bg-black" href="{{route('produit.create')}}" type="button"> creer produit</a>
        <div class="flex flex-row-4">
            <ul>
                @foreach ($cat as $ca)
                    <li>{{ $ca->nom_cat }}</li>
                @endforeach
            </ul>
        </div>
        <div class="flex flex-wrap flex-row-4">
            @foreach ($prod as $p)
                <livewire:produit-component :p="$p" />
            @endforeach
        </div>

    </div>
@endsection
