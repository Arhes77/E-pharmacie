<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>administration des utilisateurs</title>
</head>
<body>

    <div class="bg-green-400 text-white rounded-lg mb-10">
        <div><h2 class="text-center text-opacity-50 text-4xl">Administration du personnel</h2></div>

    </div>


   <div>
    <table class="table-auto ml-10">
        <thead>
            <tr>
                <th colspan="6" class="bg-blue-500 border-2 border-black text-white "> table du personnel</th>
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
            @forelse ($personnel as $item)
            <tr class="border-2 border-black">
                @if ($item->user->status->titre_status != 'client')

                <td class="border-2 border-black"><img class="w-12 h-12 rounded-full" src="{{Storage::url($item->user->profil) }}" alt="picture" >
                </td>
                <td class="border-2 border-black not-italic font-semibold">{{ $item->user->nom }}</td>
                <td class="border-2 border-black not-italic font-semibold">{{ $item->user->prenom}}</td>
                <td class="border-2 border-black not-italic font-semibold">{{ $item->user->email }}</td>
                <td class="border-2 border-black not-italic font-semibold">{{ $item->user->status->titre_status }}</td>

                <td class="border-2 border-black" >
                    <a  href="{{ route('personnel.show', $item->id) }}">
                         voir
                    </a>
                    <a href="{{ route('personnel.change', $item->id) }}">
                         nommer
                    </a>
                    <form action="{{ route('personnel.delete', $item->id) }}" method="POST">
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
                        Aucun autre membre du personnel le moment
                    </div>
                </td>
            </tr>
        @endforelse
        </tbody>

    </table>
    <br>

   </div>

   <br>

</body>
</html>
