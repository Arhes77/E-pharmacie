{{-- <div class="m-3 w-96" x-data="{open:true}" @flash-message.window="open = true ; setTimeout(() => open=false,3000);">
    <div
    x-show="open" x-cloak
     class="     my-1   bg-green-700 rounded-lg shadow-sm h-12" 
      >
      <span class="  font-extrabold text-3xl">{{$message}}</span>
      

    </div>
</div> --}}

<div x-data="{ show: false }" x-show="show"  @flash-message.window="show = true ; setTimeout(() => open=false,3000);" class="fixed bottom-0 right-0 m-8">
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert"
  x-show="show" x-cloak>
    <strong class="font-bold">Succès!</strong>
    <span class="block sm:inline">{{$message}}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
  
    <svg @click="show = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
      <title>Fermer</title>
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
    
    </span>
  </div>
</div>
