<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categorie </title>
</head>
<body>
    <form action="{{route('categorie.store',[$famille])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <div>
            <label for="nom ">nom de la categorie</label> 
            <input type="text" name="nom_cat" id="nom" > 
        </div><br>

        <div>
            <label for="descri">description</label> 
            <input type="text" name="descri_cat" id="descri" > 
        </div>
        <input type="submit" value="creer la categorie">

       
</body>
</html>