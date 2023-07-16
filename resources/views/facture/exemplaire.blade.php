<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>facture</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col">
        <div class="flex flex-row">
            <div class="flex flex-col text-xl mx-auto w-1/3">
                <p>Health in Numerical World</p>
                <p>E-PHARM@237</p>
            </div>
            <div class="w-1/3">
                <img class="w-14 h-14 rounded-lg mx-auto my-auto " src="/images/logo.png" alt="logo">
            </div>
            <div class="flex flex-col w-1/3">
                <div class="m-2 text-xl">
                    <label>FACTURE:{{ $articles->commande->id }} </label>
                </div>
                <label for="">Date:{{$articles->commande->created_at}}</label>
            </div>
        </div>
        <div class="">
            <label class="mx-auto" for="">Nom du Client:{{Auth::user()->nom}}</label>
        </div>

        <div class="flex flex-col">
            <table class="table-auto ml-10">
                <thead class="bg-green-600 uppercase">
                    <tr>
                        <th>designation</th>
                        <th>prix </th>
                        <th>quantite</th>
                        <th>total unitaire</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($articles as $composante)
                        <tr>
                            <td>{{ $composante->produit->nom_prod }}</td>
                            <td>{{ $composante->produit->prix_prod }}</td>
                            <td>{{ $composante->qteA_art }}</td>
                            <td>{{ $composante->produit->prix_prod * $composante->qteA_art }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"> <span>Prix total: {{ $montant }}</span></td>
                    </tr>
                </tbody>
            </table>
            <span class="ml-10">Votre Pharmacie De Confiance </span> <br>
            <span class="ml-10"><i>votre sante notre priorite</i></span>
        </div>
    </div>
</body>
</html>
