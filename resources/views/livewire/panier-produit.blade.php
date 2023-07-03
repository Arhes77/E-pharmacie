<div x-data="{ open: false }" @Panier-message.window="open = true" @mouseover="open = true"
    class="flex my-auto mx-auto mr-1 w-3/5  "  x-cloak>
    <div class="grid">
        <x-primary-button>
            <svg @click="open= !open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-9 h-7 hover:open="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>

            <h1>Mon Pannier</h1>

        </x-primary-button>



        {{-- <div class="grid relative w-full bg-gray-200 h-auto mt-5" x-show="open">
            <div @mouseout="open= false" class="">

                @forelse ($message as $item)
                    <div x-data="{ qte: false }">
                        <span class="extra-bold underline">{{ $item['name'] }}</span>
                        <input type="number" name="" id="" value="{{ $item['quantity'] }}"
                            class="rounded-full w-16 h-8 ">


                        <span class="text-green-500">prix:{{ $item['price'] }}</span>
                        <button class="text-red-500 font-semibold"
                            wire:click="retirerPanier({{ $item['id'] }})">retirer du panier</button><br>
                    </div>

                @empty
                @endforelse
                @if (count($message) > 0)
                    <div x-show="open">
                        <x-secondary-button>commander maintenant</x-secondary-button>
                    </div>
                @endif




            </div>

        </div> --}}

        <div class="flex flex-rows ml-5 dark:text-gray-200 relative" x-show="open">

            <div class="py-9 text-center " @mouseout="open= false">
                <table class="table-fixed ">
                    <thead>
                        <tr class="bg-emerald-600">
                            <th>Produits</th>
                            <th>Prix-Unitaire</th>
                            <th>Disp</th>
                            <th>Notice</th>
                            <th>Qte</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($message as $index=> $item)
                            <tr class="border-b border-gray-400">
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['price'] }}</td>
                                <td>En Stock</td>
                                <td><a href="#">notice</a></td>
                                <td class="items-center flex flex-rows-1 ">
                                    <button class="text-xl ml-3 w-10 h-5 rounded-xl" wire:click="decrementQuantity({{$index}})"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </button>
                                    <label class="text-center ml-4" for="qte">{{ $item['quantity'] }}</label>
                                    <button class="text-xl ml-4 rounded-full" wire:click="incrementQuantity({{$index}})"><svg xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                    </button>
                                </td>
                                <td>
                                    <span >{{$totalPrice= $item['price']*$item['quantity']}} fcfa</span><a class="ml-8" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                            wire:click="retirerPanier({{ $item['id']}},{{$index}})" wire:init="totalPriceProduit({{$totalPrice}})">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @empty
                        @endforelse


                    </tbody>
                </table>
            </div>
            @if (count($message)>0)
                
            
            <div class="grid grid-cols py-9 ml-auto mr-auto">
                <div class="box  h-100 w-120">
                    <button
                        class="bg-neutral-900 ml-5 text-white rounded scale-100 h-100 w-120 border border-sky-100 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">Continuer
                        l'ajout</button>
                </div>

                <div class="box-content h-64 w-69 p-4 border-3">
                    <label class="text-emerald-600" for="total"> TOTAL Produits: {{$totalProduit}}</label><br>
                    <label class="" for="livraison"> Frais livraison: 2k</label><br><br>
                    <label class="" for="TOTAL"> TOTAL : {{$totalProduit+2000}} </label><br>
                    <button
                        class="bg-emerald-600 font-mono rounded border border-sky-100 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-11 hover:bg-orange-600 duration-300">Commander</button>

                </div>
            </div>
            @endif

        </div>
    </div>
</div>
