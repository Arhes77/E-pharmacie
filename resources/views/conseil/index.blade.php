<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>publication de conseil</title>

</head>
<body>

    <div class="box-content h-32 w-90 p-4 border-8 text-xl">

        @forelse ($conseil as $item )
        <h1 class="border-solid border-blue text-2xl"> conseil publier par le pharmacien le {{$item->created_at}}</h1>
        <p> conseil sur: {!! nl2br(e($item->theme)) !!}</p>
        <p class="text-xs font-bold">{!! nl2br(e($item->contenue)) !!}</p>
        <center><span><i>votre sante notre priorite</i></span></center>
        @empty
            <p>aucun conseil pour le moment</p> 
        @endforelse
    </div>
</body>
</html>
