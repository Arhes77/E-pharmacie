<div x-data="{ open: false }" @Panier-message.window="open = true" @mouseover="open = true"
    class="flex my-auto mx-auto mr-1 w-1/5 relative ">
    <div class="grid">
    <x-primary-button>
        <svg @click="open= !open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-9 h-7 hover:open="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>

        <h1>Mon Pannier</h1>
        
    </x-primary-button>
   


    <div class="grid relative w-full bg-gray-200 h-auto mt-5" x-show="open">
        <div @mouseout="open= false" class="">

            @forelse ($message as $item)
                <div>
                    <span class="extra-bold underline">{{ $item['name'] }}</>
                        <span>{{ $item['quantity'] }}</span>
                        <span class="text-green-500">prix:{{ $item['price'] }}</span>
                        <button class="text-red-500 font-semibold" wire:click="retirerPanier({{$item['id']}})">retirer du panier</button><br>
                </div>

            @empty
            @endforelse
            @if (count($message)>0)
                <div x-show ="open">
                    <x-secondary-button>commander maintenant</x-secondary-button>
                </div>
            @endif
            



        </div>

    </div>
</div>
</div>
