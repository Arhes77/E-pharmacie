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

            @foreach ($panier as $composante )
            <tr>
            <td>{{$composante->name}}</td>
            <td>{{$composante->price}}</td>
            <td>{{$composante->quantity}}</td>
            <td>{{$composante->price * $composante->quantity}}</td>
            </tr>
            @endforeach

            <tr>
                <td>prix total:</td>
                <td colspan="3">{{$montant}}</td>
            </tr>
        </tbody>

   </table>

   <a href="{{ route('facture') }}"> obtenir ma facture</a>
</body>
</html>
