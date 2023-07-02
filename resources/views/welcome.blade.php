@extends('layouts.index')
@section('main')
    <div class=" flex flex-col items-center">
        <div class="w-full rounded-2xl mx-5 my-5 items-center pt-1.5">
            <Caroussel />
        </div>
        <div class="font-bold uppercase">
            <h1>Nos produits sante du mois</h1>
        </div>
        <div class="flex flex-row w-full h-max">
            <div
                class="border transition duration-700 ease-in delay-150 bg-gray-200 dark:bg-white w-1/4 h-max my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/acceuil1.jpg" alt="Logo" class="w-40 mt-3 h-full" />
                <p class="flex">This is an image </p>
                <button class="cursor-pointer mb-1 bg-green-600">Ajouter au pannier</button>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-gray-200 dark:bg-white w-1/4 h-max  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/minceur1.jpg" alt="Logo" class="w-40 mt-3 h-full" />
                <p class="flex">Desintoxification</p>
                <button class="cursor-pointer mb-1 bg-green-600">Ajouter au pannier</button>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-gray-200 dark:bg-white w-1/4 h-max  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/demaquillant1.jpg" alt="Logo" class="w-40 mt-3 h-full" />
                <p class="flex">Demaquillant </p>
                <button class="cursor-pointer mb-1 bg-green-600">Ajouter au pannier</button>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-gray-200 dark:bg-white w-1/4 h-max  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/sommeil1.jpg" alt="Logo" class="w-40 mt-3 h-full" />
                <p class="flex"> Sommeil</p>
                <button class="cursor-pointer mb-1 bg-green-600">Ajouter au pannier</button>
            </div>
        </div>
        <div class="font-bold my-3 uppercase">
            <h1>Nos produits coups de coeur</h1>
        </div>
        <div class="flex flex-row w-full">
            <div
                class="border transition duration-700 ease-in delay-150 bg-gray-200 dark:bg-white w-1/4 h-full  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/visage1.jpg" alt="Logo" class="w-40 mt-3 h-full" />
                <p class="flex">Visage </p>
                <button class="cursor-pointer mb-1 bg-green-600">Ajouter au pannier</button>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-gray-200 dark:bg-white w-1/4 h-full  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/acceuil2.jpg" alt="Logo" class="w-40 mt-3 h-full" />
                <p class="flex">Huile Prodiguese </p>
                <button class="cursor-pointer mb-1 bg-green-600">Ajouter au pannier</button>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-gray-200 dark:bg-white w-1/4 h-full  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/demaquillant2.jpg" alt="Logo" class="w-40 mt-3 h-full" />
                <p class="flex">Nettoyant </p>
                <button class="cursor-pointer mb-1 bg-green-600">Ajouter au pannier</button>
            </div>
            <div
                class="border transition duration-700 ease-in delay-150 bg-gray-200 dark:bg-white w-1/4 h-full  my-5 ml-5 items-center hover:shadow-xl hover:translate-y-3 flex flex-col cursor-pointer">
                <img src="images/acceuil/visage2.jpg" alt="Logo" class="w-40 mt-3 h-full" />
                <p class="flex">Soins visage </p>
                <button class="cursor-pointer mb-1 bg-green-600">Ajouter au pannier</button>
            </div>

        </div>
        <div class="font-bold uppercase">
            <h1>Nos conseils <b>sante</b> </h1>
        </div>

    </div>
@endsection
