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
        <center><img class="w-9 h-9 rounded-full" src="{{Storage::url($user->profil) }}" alt="photo"></center>
        <p>utilisateur:
            {{$user->nom}} {{$user->prenom}}
        </p>
        <p>
            nee le: {{$user->birthdate}}
        </p>
        <p>
            adresse Email : {{$user->email}}
        </p>

        <p>
            compte ouvert le: {{$user->created_at}}
        </p>

        <p>
            status: {{$user->status->titre_status}}
        </p>

    </div>
</body>
</html>
