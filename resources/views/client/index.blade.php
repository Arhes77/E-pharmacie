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

    <div class="bg-green-400 text-white rounded-lg mb-10">
        <div><h2 class="text-center text-opacity-50 text-4xl">Administration des utilisateurs</h2></div>

    </div>
    <div>

        <table class="table-auto ml-10">
            <thead>
                <tr>
                    <th colspan="6" class="bg-blue-500 border-2 border-black text-white "> table des clients</th>
                </tr>
                <tr  >
                    <th class="border-2 border-black">Profil</th>
                    <th class="border-2 border-black">Nom</th>
                    <th class="border-2 border-black">Prenom</th>
                    <th class="border-2 border-black">Email</th>
                    <th class="border-2 border-black">Status</th>
                    <th class="border-2 border-black">Operation</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($user as $item)
                @if ($item->status->titre_status =='client')

                <tr class="border-2 border-black">
                    <td class="border-2 border-black"><img class="w-12 h-12 rounded-full" src="{{Storage::url($item->profil) }}" alt="picture" >
                    </td>
                    <td class="border-2 border-black not-italic font-semibold">{{ $item->nom }}</td>
                    <td class="border-2 border-black not-italic font-semibold">{{ $item->prenom}}</td>
                    <td class="border-2 border-black not-italic font-semibold">{{ $item->email }}</td>
                    <td class="border-2 border-black not-italic font-semibold">{{ $item->status->titre_status }}</td>

                    <td class="border-2 border-black" >
                        <a  href="{{ route('client.show', $item->id) }}">
                             voir
                        </a>
                        <a href="{{ route('client.create', $item->id) }}">
                             nommer
                        </a>
                        <form action="{{ route('client.delete', $item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">
                                 supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                @endif
            @empty
                <tr>
                    <td colspan="6" class="border-2 border-black not-italic font-semibold">
                        <div class="text-center">
                            Aucun client pour le moment
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>

        </table>

       </div>
</body>
</html>
