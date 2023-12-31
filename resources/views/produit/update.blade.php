<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('produit.update',$Produit)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <label for="nom ">nom produit</label> 
                <input type="text" name="nom_prod" id="nom" value="{{$Produit->nom_prod}}"> 
            </div>
    
            <div>
                <label for="descri">description</label> 
                <input type="text" name="descri_prod" id="descri" value="{{$Produit->descri_prod}}" > 
            </div>
            <div>
                <label for="prix">prix</label> 
                <input type="number" name="prix_prod" id="prix" value="{{$Produit->prix_prod}}" > 
            </div>
            <div>
                <label for="path">image du produit</label> 
                <input type="file" name="url_prod" id="path" value="{{$Produit->url_prod}}"> 
            </div>
            <div>
                <label for="qteS">qte en stock</label> 
                <input type="number" name="qteS_prod" id="qteS" value="{{$Produit->qteS_prod}}"> 
            </div>
    
            <div>
                <label for="path">categorie du produit</label> 
                <select name="categorie_id" id="">
                    @foreach ($cats as $cat)
                    <option value="{{$cat->id}}" >{{$cat->nom_cat}}</option>
                    @endforeach
                    
                </select>
                
            </div>
            <input type="submit" value="modifier le produit">
        </div>
    
</body>
</html>