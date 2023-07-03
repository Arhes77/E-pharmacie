<div
class="border bg-gray-200 dark:bg-white w-1/5 h-5/5 my-5 ml-5 items-center hover:shadow-xl hover:w-2/5 flex flex-col ">
<img src="{{ Storage::url($p->url_prod) }}" alt="Logo" class="w-25 mt-3 h-20" wire:click="addPanier({{$p->id}})" />
<h1 class="uppercase font-extrabold ">{{$p->nom_prod}}</h1>
<p class="flex"> {{ $p->descri_prod }} </p>
<a class="text-green-500 font-bold"
wire:click="addPanier({{$p->id}})" >Ajouter au pannier</a>
</div>
{{-- , --}}