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

            @foreach ($composante as $composante )
            <tr>
            <td>{{$composante->nom}}</td>
            <td>{{$composante->prix_unitaire}}</td>
            <td>{{$composante->quantite}}</td>
            <td>{{$composante->prix_unitaire * $composante->quantite}}</td>
            </tr>
            @endforeach

        </tbody>
   </table>
</body>
</html>
