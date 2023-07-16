@extends('layouts.index')
@section('main')
<div class="flex flex-col-2 mx-2 my-4 px-2">
    <div class="h-fit w-fit items-center text-xl   mx-2 px-1 flex flex-col">
        <img src="{{ Storage::url($prod->url_prod) }}" alt="Image du produit" class="w-fit h-3/4" />
        <p class="h-1/4 font-extrabold">{{$prod->nom_prod}}</p>
        <p class="h-1/4">Prix: {{$prod->prix_prod}} fcfa</p>
    </div>
    <div class="text-xs mx-2 w-full h-fit overflow-y-auto  px-1">
        <p class="text-justify">{!! nl2br(e($prod->descri_prod)) !!}</p>
        <p>{{$prod->code_prod}}</p>
    </div>
</div>
  
@endsection