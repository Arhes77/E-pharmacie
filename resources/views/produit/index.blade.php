@extends('layouts.index')
@section('main')
    <form action="{{ route('produit.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <label for="nom ">nom produit</label>
                <input type="text" name="nom_prod" id="nom">
            </div>

            <div>
                <label for="descri">description</label>
                <input type="text" name="descri_prod" id="descri">
            </div>
            <div>
                <label for="code">code produit</label>
                <input type="text" name="code_prod" id="code">
            </div>
            <div>
                <label for="prix">prix</label>
                <input type="number" name="prix_prod" id="prix">
            </div>
            <div>
                <label for="path">image du produit</label>
                <input type="file" name="url_prod" id="path">
            </div>
            <div>
                <label for="qteS">qte en stock</label>
                <input type="number" name="qteS_prod" id="qteS">
            </div>

            <div>
                <label for="path">categorie du produit</label>
                <select name="categorie_id" id="path">
                    @foreach ($cats as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nom_cat }}</option>
                    @endforeach

                </select>

            </div>
            <input type="submit" value="creer le produit">
        </div>
    </form>

    <br>
    <form class="mt-5" action="{{ route('categorie.store',[1]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <label for="nom_cat">nom categorie</label>
                <input type="text" name="nom_cat" id="nom">
            </div>

            <div>
                <label for="descri_cat">description categorie</label>
                <input type="text" name="descri_cat" id="descri">
            </div>
            <div>
            <input type="submit" value="creer le produit">
        </div>
    </form>

@endsection
