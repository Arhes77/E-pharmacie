<div x-data="chat" class="flex flex-col" style="background-image: url('/image/fond.png')">
    <div class="flex flex-col w-full items-center p-3 bg-gray-100" style="background:url(https://picsum.photos/200)">
        <div class="self-center">
            <div class="text-lg font-semibold text-white  text-center flex"><img class="h-12 shadow-2xl w-12 mr-3 rounded-full"
                    src="https://picsum.photos/200" alt="Group image">
                <h2 class="my-auto text-2xl"> Forum de la E-pharmacie</h2>
            </div>
            <div class="text-sm text-white flex">
                <h4 class="font-bold text-xl">online:</h4>
                <ul class="flex">
                    @foreach ($usersOnline as $user)
                        <li class="mr-2 text-xs font-semibold text-green-600">
                            {{ $user['name'] }},

                            @if ($userTyping === $user['id'])
                                <span class="text-sm font-bold text-white"> entrain d'ecrire...</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="ml-12 my-auto z-[5] mt-4">
        @foreach ($messages->reverse() as $message)
            @if ($message->user->nom == Auth::user()->nom)
                <div class="chat chat-start ">
                    <div class="chat-image avatar">
                        <div class="w-10 rounded-full">
                            <img src="{{ Storage::url($message->user->profil) }}" />
                        </div>
                    </div>
                    <div class="chat-header text-black">
                        {{ $message->user->nom == Auth::user()->nom ? 'vous' : $message->user->nom }}
                    </div>
                    <div class="chat-bubble bg-green-600 text-white">{!! $message->conten_smsF !!}</div>
                    <div class="chat-footer text-black opacity-50 flex flex-row">
                        <span> {{ $message->created_at->diffForHumans() }} </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 text-white h-6 font-semibold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                </div>
            @else
                <div class="chat chat-end">
                    <div class="chat-image avatar">
                        <div class="w-10 rounded-full">
                            <img src="{{ Storage::url($message->user->profil) }}" />
                        </div>
                    </div>
                    <div class="chat-header text-black">
                        {{ $message->user->nom == Auth::user()->nom ? 'vous' : $message->user->nom }}
                    </div>
                    <div class="chat-bubble text-white">{!! $message->conten_smsF !!}</div>
                    <div class="chat-footer text-black opacity-70 flex flex-row">
                        <span> {{ $message->created_at->diffForHumans() }} </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 text-white h-6 font-semibold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    {{--
        input pour l'envoie de message  --}}
    <form class="mt-12 mb-8 mx-12 space-x-2" wire:submit.prevent="sendMessage">
        <div class="flex items-center p-3">
            <div class="flex-grow mr-3">
                <input class="w-full  rounded-full py-2 px-3 border border-gray-300 text-sm text-gray-700" type="text"
                    placeholder="ecrire un message" wire:model="message" />
            </div>
            <button class="flex-shrink-0 bg-green-500 hover:bg-green-600 text-white rounded-full p-2" type="submit">
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
