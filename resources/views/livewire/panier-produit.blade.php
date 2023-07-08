<div class="relative" data-te-dropdown-position="dropstart">
    <button
        class="flex items-center whitespace-nowrap rounded bg-green-700 pb-2 pl-4 pr-6 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
        type="button" id="dropdownMenuButton1s" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init
        data-te-ripple-color="light"   data-te-collapse-init
        data-te-target="#collapseExample"
        aria-expanded="false"
        aria-controls="collapseExample">
        <span class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
            </svg>
        </span>
        <div class="flex items-center">
            <svg @click="open= !open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-9 h-7 hover:open="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>

            <h1 class="text-center"> MON PANIER</h1>
            <div class="rounded-full mt-5 bg-gray-900 text-2xl text-white mr-2 ">{{ count($message) }}</div>

        </div>
    </button>
    <div class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
         data-te-dropdown-menu-ref id="collapseExample" data-te-collapse-item>
        <div data-te-dropdown-item class="block w-full dark:text-gray-200 relative">
            @if (count($message) > 0)
                <div class="py-9 text-center ">
                    <table class="table-fixed ">
                        <thead>
                            <tr class="bg-green-500 h-16">
                                <th class="uppercase text-2xl text-white mr-2">Produits</th>
                                <th class="uppercase text-2xl text-white mr-2">Prix-Unitaire</th>
                                <th class="uppercase text-2xl text-white mr-2">Disp</th>
                                <th class="uppercase text-2xl text-white mr-2">Notice</th>
                                <th class="uppercase text-2xl text-white mr-2">Qte</th>
                                <th class="uppercase text-3xl text-white">Total</th>
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
                                        <button
                                            class="text-xl ml-3 w-10 h-7 rounded-full border-2 border-gray-800 items-center"
                                            wire:click="decrementQuantity({{ $index }})"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 border-1 rounded-full mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                        <label class="text-center ml-4" for="qte">{{ $item['quantity'] }}</label>
                                        <button
                                            class="text-xl ml-4  w-10 h-7 rounded-full border-2 border-gray-800 items-center"
                                            wire:click="incrementQuantity({{ $index }})"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 border-1 rounded-full ml-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </button>
                                    </td>
                                    <td>
                                        <span>{{ $totalPrice = $item['price'] * $item['quantity'] }} fcfa</span><a
                                            class="ml-8" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6 border-1 rounded-full"
                                                wire:click="retirerPanier({{ $item['id'] }},{{ $index }})"
                                                wire:init="totalPriceProduit({{ $totalPrice }})">
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
                <div class="grid grid-cols py-9 ml-auto mr-auto">
                    <div class="box  h-100 w-120">
                        <button
                            class="inline-flex items-center  px-auto py-2 bg-gray-800 border border-blue-300 rounded-md font-semibold   mr-2 text-white tracking-widest hover:bg-gray-900 focus:bg-black uppercase  focus:outline-none focus:ring-2 focus:ring-indigo-500
                        ">Continuer
                            l'ajout</button>
                    </div>

                    <div class="box-content h-64 w-69 p-4 border-3">
                        <label class="text-emerald-600" for="total"> TOTAL Produits:
                            <span class="font-extrabold text-xl"> {{ $totalProduit }}</span>
                        </label><br>
                        <label class="" for="livraison"> Frais livraison: 2 000 fcfa</label><br><br>
                        <label class="" for="TOTAL"> TOTAL : <span
                                class="font-extrabold text-xl">{{ $totalProduit + 2000 }} </span></label><br>
                        <a href="/"
                            class="inline-flex items-center  px-auto py-2 bg-green-500 border border-blue-300 rounded-md font-semibold text-2xl text-white mr-2  tracking-widest hover:bg-green-700 focus:bg-black uppercase  focus:outline-none focus:ring-2 focus:ring-indigo-500
                            ">Commander</a>

                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
