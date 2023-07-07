@if ($bools)
    <div class="flex flex-row w-full">

        @forelse ($p->produits as $i => $prod)
            @if ($i <= 3)
            <div class="border font-bold transition duration-700 ease-out delay-150 hover:shadow-xl hover:translate-y-3 dark:text-gray-800 bg-white my-2 lg:-ml-5 md:ml-0.5 w-1/4  flex flex-col ">
                <a class="flex h-full flex-col" href="#">
                    <div class="my-auto ">
                        <img src="{{ Storage::url($prod->url_prod) }}" alt="Image du produit" class="w-fit h-full" />
                    </div>
                    <div class="mt-auto">
                      <h1 class="ml-2 font-extrabold text-center md:text-xs lg:text-xl my-1">{{ $prod->nom_prod }}</h1>
                      <p class="text-center mt-auto"> {{ $prod->prix_prod }} Fcfa</p>
                   </div>
                </a>
                <button type="button "
                    class="inline-block  rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
    
                </button>
                <a class="cursor-pointer dark:text-gray-700 flex mt-0 text-center py-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"
                    data-te-toggle="modal" data-te-target="#exampleModalScrollable" data-te-ripple-init
                    data-te-ripple-color="light"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="w-6 mx-3 h-6">
                        <path
                            d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                    </svg>Ajouter
                </a>
            </div>
            
            <!-- Modal -->
            <div data-te-modal-init
              class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
              id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel"
              aria-hidden="true">
                <div data-te-modal-dialog-ref
                  class="pointer-events-none relative h-full w-full translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-4 min-[576px]:h-full min-[576px]:max-w-[900px]">
                    <div
                      class="pointer-events-auto relative flex h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                      <div
                          class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                          <!--Modal title-->
                          <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                              id="exampleModalScrollableLabel">
                              Notice du produit <b>{{ $prod->nom_prod }}</b>
                          </h5>
                          <!--Close button-->
                          <button type="button"
                              class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                              data-te-modal-dismiss aria-label="Close">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                  stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                          </button>
                      </div>
    
                      <!--Modal body-->
                      <div class="relative overflow-y-auto p-4">
                          <p class=" text-clip">{{ $prod->descri_prod }}</p>
                          <!--Modal footer-->
                          <div
                              class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                              <button type="button"
                                  class="inline-block rounded bg-primary-200 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                  data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                  Annuler
                              </button>
                              <button type="button"
                                  class="ml-1 inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium  leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                  data-te-ripple-init data-te-modal-dismiss data-te-ripple-color="light"
                                  wire:click="addPanier({{ $prod->id }})">
                                  Confirmer
                              </button>
                          </div>                                
    
                      </div>
                      <u class="text-red-500">Bien lire la notice!!!</u>
                  </div>
              </div>
          </div>
            @else
            @break
        @endif
    @empty
    @endforelse

</div>
<div class="w-fit my-3 self-center">
    <a href="{{ route('categorie.show', [$p->id]) }}"
        class="lg:px-7 md:text-xl text-xs py-2 rounded-xl dark:bg-blue-500   text-white bg-gray-700"> Voir tous les
        produits relatif à <u> {{ $p->nom_cat }}</u></a>
</div>
@else
<div class="flex flex-row flex-wrap w-full">
    @forelse ($p->produits as $i => $prod)
        <div class="border font-bold transition duration-700 ease-out delay-150 hover:shadow-xl hover:translate-y-3 dark:text-gray-800 bg-white my-2 lg:-ml-5 md:ml-0.5 w-1/4  flex flex-col ">
            <a class="flex h-full flex-col" href="#">
                <div class="my-auto ">
                    <img src="{{ Storage::url($prod->url_prod) }}" alt="Image du produit" class="w-fit h-full" />
                </div>
                <div class="mt-auto">
                  <h1 class="ml-2 font-extrabold text-center md:text-xs lg:text-xl my-1">{{ $prod->nom_prod }}</h1>
                  <p class="text-center mt-auto"> {{ $prod->prix_prod }} Fcfa</p>
               </div>
            </a>
            <button type="button "
                class="inline-block  rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">

            </button>
            <a class="cursor-pointer dark:text-gray-700 flex mt-0 text-center py-2 px-5 hover:opacity-70 text-white rounded-lg mb-1 bg-green-600"
                data-te-toggle="modal" data-te-target="#exampleModalScrollable" data-te-ripple-init
                data-te-ripple-color="light"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor" class="w-6 mx-3 h-6">
                    <path
                        d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                </svg>Ajouter
            </a>
        </div>
        
        <!-- Modal -->
        <div data-te-modal-init
          class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
          id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel"
          aria-hidden="true">
            <div data-te-modal-dialog-ref
              class="pointer-events-none relative h-full w-full translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-4 min-[576px]:h-full min-[576px]:max-w-[900px]">
                <div
                  class="pointer-events-auto relative flex h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                  <div
                      class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                      <!--Modal title-->
                      <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                          id="exampleModalScrollableLabel">
                          Notice du produit <b>{{ $prod->nom_prod }}</b>
                      </h5>
                      <!--Close button-->
                      <button type="button"
                          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                          data-te-modal-dismiss aria-label="Close">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                      </button>
                  </div>

                  <!--Modal body-->
                  <div class="relative overflow-y-auto p-4">
                      <p class=" text-clip">{{ $prod->descri_prod }}</p>
                      <!--Modal footer-->
                      <div
                          class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                          <button type="button"
                              class="inline-block rounded bg-primary-200 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                              data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                              Annuler
                          </button>
                          <button type="button"
                              class="ml-1 inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium  leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                              data-te-ripple-init data-te-modal-dismiss data-te-ripple-color="light"
                              wire:click="addPanier({{ $prod->id }})">
                              Confirmer
                          </button>
                      </div>                                

                  </div>
                  <u class="text-red-500">Bien lire la notice!!!</u>
              </div>
          </div>
      </div>
    @empty
    @endforelse

</div>
<div class="w-fit my-3 self-center">
    <a href="{{ route('categorie.show', [$p->id]) }}"
        class="lg:px-7 md:text-xl text-xs py-2 rounded-xl dark:bg-blue-500   text-white bg-gray-700"> <u>
            {{ $p->nom_cat }}</u></a>
</div>
@endif
