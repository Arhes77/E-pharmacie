<div x-data="{ isEnable: true }" class="relative w-full ml-auto">

    <div
        class="flex focus:border-green-500 dark:focus:border-indigo-600 focus:ring-green-100 dark:focus:ring-green-100 rounded-md shadow-sm  dark:bg-gray-100">
        <input @click.away="isEnable= false ; @this.resetIndex() ;" @click="isEnable = true"
            class="rounded-md w-full  shadow-sm border-gray-300" type="text"
            placeholder="Paracethamol, Tramadhol, Dollipranne..." autocomplete="off" wire:model="query"
            wire:keydown.arrow-down.prevent="incrementIndex" wire:keydown.arrow-up.prevent="decrementIndex"
            wire:keydown.backspace="resetIndex">
        <button class="bg-gray-500 ml-1 rounded-md border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-16 h-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

        </button>
    </div>

    @if (strlen($query) > 3)
        <div class="absolute z-50 bg-gray-100  px-2 my-3 py-5 shadow-lg rounded w-full" x-show="isEnable">
            @if (count($produits) > 0)
                <h1 class="font-extrabold uppercase text-center mt-1">resultat</h1>
                @foreach ($produits as $index => $prod)
                    <div class="flex items-center px-0 ">

                        <img src="{{ Storage::url($prod->url_prod) }}" alt="...."
                            class="w-10 h-10 mx-2 rounded-full">
                        <p class=" {{ $index == $selectedIndex ? 'text-blue-500' : '' }}  ">{{ $prod->nom_prod }}</p>
                    </div>
                @endforeach
            @else
                <span class=" text-orange-700 text-center"> aucun resultat trouver pour "{{ $query }}"</span>
            @endif
        </div>
    @endif
</div>
