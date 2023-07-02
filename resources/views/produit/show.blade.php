<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>affichage des produit </title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
@livewireStyles

<body>


    <div class="w-1/2 items-center">
        <livewire:search-produit />
    </div>
    <livewire:panier-produit /><br>


    {{-- @foreach ($prod as $p)
        <h2 class="uppercase ">{{ $p->nom_prod }}</h2>
        <span>{{ $p->descri_prod }}</span>
        <div class="rounded-full w-7 h-7">PRIX:{{ $p->prix_prod }}</div>
        <img src="{{ Storage::url($p->url_prod) }}" width="150" height="150" alt="HUM">
        <a href="{{ route('produit.edit', $p->id) }}"><button>editer le produit</button></a>

        <form action="{{ route('produit.destroy', $p->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    @endforeach --}}

    <div class="flex flex-col font-serif dark:bg-gray-900 font-bold">

        <div class="flex flex-row-4">
            @foreach ($prod as $p)
               <livewire:produit-component :p="$p"/>
            @endforeach
        </div>

    </div>

    @livewireScripts
</body>

</html>
