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

    <div class="flex flex-col border-3 border-green-400 m-10">
        <h2 class="mx-auto  my-2 text-2xl font-serif ">votre paiement a ete effectuer avec succes merci pour votre fidelite</h2><br><br>
        <div class="flex flex-row w-full">
            <div class="flex flex-col text-xl mx-auto w-1/3">
                <p>Health in Numerical World</p>
                <p>E-PHARM@237</p>
            </div>
            <div class="w-1/3">
                <img class="w-20 h-16 rounded-lg mx-auto my-auto " src="/images/logo.png" alt="logo">
            </div>
            <div class="flex flex-col w-1/3">
                <div class="m-2 text-xl">
                    <label>FACTURE: <span class="ml-2 font-semibold">{{ $cmd->id }}</span></label>
                </div>
                <label for="">Date:<span class="ml-2 font-semibold">{{ now() }}</span></label>
            </div>
        </div>
        <div class="">
            <label class="mx-auto" for="">Nom du Client: <span
                    class="ml-2 font-semibold">{{ Auth::user()->nom }}</span> </label><br>
        </div><br>

        <div class="flex flex-col">
            <table class="table-auto">
                <thead class="bg-green-600 uppercase">
                    <tr>
                        <th>designation</th>
                        <th>prix </th>
                        <th>quantite</th>
                        <th>total unitaire</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($cmd->articles as $composante)
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
            </table><br><br>
            <span class="ml-10"><i>votre sante notre priorite</i></span>
            <span class="ml-10">Votre Pharmacie De Confiance </span> <br>
        </div>
    </div>

    <form action="{{ route('facture') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $cmd }}" name="commande">
        <input type="hidden" name="montant" id="montant", value="{{ $montant }}">
        <input type="submit" value=" obtenir ma facture">
    </form>

</body>

</html>
