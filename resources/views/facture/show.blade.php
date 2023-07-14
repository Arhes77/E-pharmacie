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

    <h2>votre paiement a ete effectuer avec succes merci pour votre fidelite</h2>
   <table class="table-auto">
    <thead>
        <tr aria-colspan="4"><h1>FACTURE</h1></tr>
        <tr>

            <th>designation</th>
            <th>prix </th>
            <th>quantite</th>
            <th>total unitaire</th>
        </tr>
    </thead>
        <tbody>

            {{-- {{dd($cmd->articles)}} --}}
            @foreach ($cmd->articles as $composante )
            <tr>
            <td>{{$composante->produit->nom_prod}}</td>
            <td>{{$composante->produit->prix_prod}}</td>
            <td>{{$composante->qteA_art}}</td>
            <td>{{$composante->produit->prix_prod * $composante->qteA_art}}</td>
            </tr>
            @endforeach

            <tr>
                <td>prix total:</td>
                <td colspan="3">{{$montant}}</td>
            </tr>
        </tbody>

   </table>

   <form action="{{route('facture')}}" method="POST">
    @csrf
    <input type="hidden" value="{{$cmd}}" name="commande">
    <input type="hidden" name="montant" id="montant", value="{{$montant}}">
    <input type="submit" value=" obtenir ma facture">
</form>
</body>
</html>
