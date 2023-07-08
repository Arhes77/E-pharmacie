<div x-data="chat">
    
        <div>
          
        <div class="fixed w-full border border-b-2 mb-12">
            
            <div class="flex items-center p-3 bg-gray-100">
                <div class="flex-shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full" src="https://picsum.photos/200" alt="Group image">
                </div>
                <div class="flex-grow">
                    <div class="text-lg font-semibold text-gray-700 text-center">Forum de la E-pharmacie</div>
                    <div class="text-sm text-gray-500">
                        <ul class="flex">
                            @foreach ($usersOnline as $user)
                                <li class="mr-2">
                                    {{ $user['name'] }},
                                   
                                    @if ($userTyping === $user['id'])
                                        <span class="text-sm"> entrain d'ecrire...</span>
                                        
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="ml-12 space-y-4 border ">
                @foreach ($messages->reverse() as $message)
                    <div class="max-w-lg p-3 my-3 rounded-lg  {{ $message->user->nom == Auth::user()->nom ? 'bg-green-100 flex ml-auto mr-12' : 'bg-slate-200 flex mr-auto ml-12' }}">
                        <div >
                        <div class="text-xs text-gray-700 capitalize mb-1 font-bold" >{{ $message->user->nom == Auth::user()->nom ? 'vous' : $message->user->nom }} </div>

                        <p class="text-sm text-gray-700"> {!! $message->conten_smsF !!}</p>
                        <div class="text-right text-xs text-gray-500 mt-2  items-end ">{{ $message->created_at->diffForHumans() }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-800 font-semibold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                              </svg>
                              
                        </div>
                    </div>
                    </div>
                @endforeach
                </div>
        </div>
{{-- 
        input pour l'envoie de message  --}}
        <form class="mt-4 mb-8 ml-12 space-x-2" wire:submit.prevent="sendMessage">


            <div class="flex items-center p-3 bg-gray-100">
                <div class="flex-grow mr-3">
                    <input class="w-full rounded-full py-2 px-3 border border-gray-300 text-sm text-gray-700"
                        type="text" placeholder="ecris un message" wire:model="message" />
                </div>
                <button class="flex-shrink-0 bg-green-500 hover:bg-green-600 text-white rounded-full p-2"
                    type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>

                </button>
            </div>
            @error('message')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </form>

    </div>
    
    <script>
        window.addEventListener("alpine:init", () => {
            Alpine.data("chat", () => ({
                message: @entangle('message'),

                init() {
                    this.$watch("message", value => {
                        const whisperEventName = value === "" ? "stopped-typing" : "typing";

                        Echo.join("chat-room").whisper(whisperEventName, {
                            id: {{ auth()->id() }}
                        })
                    });

                    @this.on("scrollToBottom", () => {
                        window.scrollTo({
                            top: document.body.scrollHeight,
                            behavior: "smooth"
                        });
                    });
                },
            }));
        });
    </script>
</div>