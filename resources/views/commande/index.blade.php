<x-guest-layout>


    <!-- Nom -->
    <h1 class="font-extrabold text-3xl text-justify m-5">A ce niveau vous aviez exactement 2 choix a faire</h1>
    <div class="mb-7 border-2 border-indigo-800 p-3 rounded-lg">
        <button
            class="flex items-center px-2 py-2 bg-green-500 border border-blue-300 rounded-md font-semibold text-xs text-white tracking-widest hover:bg-green-700 focus:bg-green-900 uppercase  focus:outline-none focus:ring-2 focus:ring-indigo-500 ">

            je veux etre livrer</button>
        <p class="text-justify font-semibold my-5 text-gray-700"> si vous choisissez ce mode alors vous seriez livrer et les
            frais de livraison s'y appliqueront</p>

        <button
            class="flex items-center px-2 py-2 bg-orange-500 border border-blue-300 rounded-md font-semibold text-xs text-white tracking-widest hover:bg-orange-500 focus:bg-orange-900 uppercase  focus:outline-none focus:ring-2 focus:ring-indigo-500"> 
               
            montant 
            <span class="font-extrabold text-2xl ml-5">{{ $prix + 2000 }}</span></button>

    </div>

    <div x-data="{ ouvre: false }" @click.away="ouvre= false" class="mb-7 border-2 border-indigo-800 p-3 rounded-lg">
        <div>
            <button
                class="flex items-center px-2 py-2 bg-green-500 border border-blue-300 rounded-md font-semibold text-xs text-white tracking-widest hover:bg-green-700 focus:bg-green-900 uppercase  focus:outline-none focus:ring-2 focus:ring-indigo-500 "
                @click="ouvre= true">
                sans livraison</button>

            <div x-show="ouvre">
                <h3>definissez un moyen de payement</h3>
                <form action="{{ route('commande.show') }}" method="POST">
                    @csrf
                    <select name="mode" id="">
                        <option value="mobile">payement mobile</option>
                        <option value="carte">solution carte banquaire</option>
                    </select>
                    <input type="hidden" name="prix" value="{{$prix}}">
                    <input type="hidden" name="panier" value="{{$panier}}">
                    <x-primary-button>
                        poursuivre
                    </x-primary-button>
                </form>

            </div>
            <p class="text-justify font-semibold my-5 text-gray-700"> si vous choisissez ce mode alors aucun frais s'y
                appliquera </p>

            <button
                class="flex items-center px-2 py-2 bg-orange-500 border border-blue-300 rounded-md font-semibold text-xs text-white tracking-widest hover:bg-orange-500 focus:bg-orange-900 uppercase  focus:outline-none focus:ring-2 focus:ring-indigo-500 ">
                
                montant <span class="font-extrabold text-2xl ml-5">{{ $prix }}</span></button>
        </div>


    </div>


</x-guest-layout>
