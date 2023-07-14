<div class="dropdown dropdown-end">
    <label tabindex="0"
        class="btn rounded-lg hover:bg-orange-600  text-white border-none bg-green-500 flex flex-row overflow-hidden m-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="lg:w-10 lg:h-9">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
        <h5>Panier</h5> <label
            class="w-6 h-8 text-black text-xl text-center rounded-xl bg-white">{{ count($message) }}</label>
    </label>
    <div tabindex="0" class="dropdown-content menu p-2  shadow bg-base-100 rounded-box  w-fit">
        <div class="w-full dark:text-gray-200 flex flex-row">
            @if (count($message) > 0)
                <div class="py-9 text-center ">
                    <table class="table-auto self-center">
                        <thead class="bg-green-500 h-auto pt-0">
                            <tr class="bg-green-500 h-auto">
                                <th class="text-xl text-white mx-2">Produits</th>
                                <th class="text-xl text-white mx-2">PU</th>
                                <th class="text-xl text-white mx-2">Notice</th>
                                <th class="text-xl text-white mx-2">Qte</th>
                                <th class="text-xl text-white mx-2">Total</th>
                                <th class="text-xl text-white mx-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($message as $index=> $item)
                                <tr class="border-b border-gray-400">
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['price'] }}</td>
                                    <td><a href="{{ route('produit.details', [$item['name']]) }}">notice</a></td>
                                    <td class="items-center flex flex-rows-1 ">
                                        <button
                                            class="text-xs ml-3 w-7 h-7 rounded-full border-2 border-gray-800 items-center"
                                            wire:click="decrementQuantity({{ $index }})"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 self-center">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                        <label class="text-center ml-4" for="qte">{{ $item['quantity'] }}</label>
                                        <button
                                            class="text-xs ml-4  w-7 h-7 rounded-full border-2 border-gray-800 items-center"
                                            wire:click="incrementQuantity({{ $index }})"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 self-center">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </button>
                                    </td>
                                    <td>
                                        <span>{{ $totalPrice = $item['price'] * $item['quantity'] }}</span>
                                           <h5 class="font-bold">fcfa</h1> 
                                        </a>
                                    </td>
                                    <td class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 border-1 rounded-full"
                                            wire:click="retirerPanier({{ $item['id'] }},{{ $index }})"
                                            wire:init="totalPriceProduit({{ $totalPrice }})">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg></td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="grid grid-cols py-9 ml-3 mr-auto">
                    <div class="box  h-100 w-120">
                        <button class="btn">
                            Continuer l'ajout
                        </button>
                    </div>

                    <div class="box-content h-64 w-69 p-4 border-3">
                        <label class="text-emerald-600" for="total"> TOTAL Produits:
                            <span class="font-extrabold text-xl"> {{ $totalProduit }}</span>
                        </label><br>
                        <label class="" for="livraison"> Frais livraison: 2 000 fcfa</label><br><br>
                        <label class="" for="TOTAL"> TOTAL : <span
                                class="font-extrabold text-xl">{{ $totalProduit + 2000 }} </span></label><br>
                        <form action="{{ route('commande.index') }}" method="POST">
                            @csrf
                            <input type="hidden" name="prix" value="{{ $totalProduit }}">
                            <input type="hidden" name="panier" value="{{ $message }}">
                            <button
                                class="text-xl text-white btn btn-success hover:bg-green-700 focus:bg-black">
                                Commander
                            </button>
                        </form>

                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
