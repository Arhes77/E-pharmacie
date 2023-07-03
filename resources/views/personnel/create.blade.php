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
        <p>
            nommer cet utilisateur comme membre du personnel en changeant son statut
        </p>

        <form method="POST" action="{{ route('client.update', $user) }}">
            @csrf
            <label for="statut"> statut</label>

            <select name="status_id" id="status_id">
                @foreach ($status as $item )

                @if ($item->titre_status != 'pharmacien')

                <option value="{{ $item->id }}"
                    {{ isset($users) && $item->id == $users->statut_id ? 'selected' : '' }}>
                    {{$item->titre_status}}</option>
                @endif
                @endforeach
            </select>


            <div class="mt-2">
                <button type="submit" class="btn btn-success">nomer</button>
            </div>
        </form>

    </div>
</body>
</html>
