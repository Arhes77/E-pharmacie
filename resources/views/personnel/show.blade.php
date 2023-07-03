<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>

    <div class="border-solid">
        <center><img class="w-9 h-9 rounded-full" src="{{Storage::url($personnel->user->profil) }}" alt="photo"></center>
        <p>utilisateur:
            {{$personnel->user->nom}} {{$personnel->user->prenom}}
        </p>
        <p>
            nee le: {{$personnel->user->birthdate}}
        </p>
        <p>
            adresse Email : {{$personnel->user->email}}
        </p>

        <p>
            compte ouvert le: {{$personnel->user->created_at}}
        </p>

        <p>
            status: {{$personnel->user->status->titre_status}}
        </p>

    </div>
</body>
</html>
