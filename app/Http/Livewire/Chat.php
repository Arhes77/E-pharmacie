<?php

namespace App\Http\Livewire;


use App\Models\MessageForum;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Chat extends Component
{
    public $message;
 
    public $usersOnline = [];
 
    public $userTyping;
    protected array $rules = [
        'message' => ['required', 'string'],
    ];

    //listeners qui est un ecouteur d'evenement
    protected $listeners = [
        'echo-presence:chat-room,.MessageCreated' => 'render',
        'echo-presence:chat-room,here' => 'here', 
        'echo-presence:chat-room,joining' => 'joining',
        'echo-presence:chat-room,leaving' => 'leaving',
        'echo-presence:chat-room,.client-typing' => 'typing', 
        'echo-presence:chat-room,.client-stopped-typing' => 'stoppedTyping',    
    ];


    public function typing($event)
{
    // array_map(function ($user) use ($event): void {
    //     if ($user['id'] === $event['id']) {
    //         $user['typing'] = true;
 
    //         $this->userTyping = $user['id'];
    //     }
    // },$this->usersOnline);
    $this->usersOnline->map(function ($user) use ($event): void {
        if ($user['id'] === $event['id']) {
            $user['typing'] = true;
                
            $this->userTyping = $user['id'];
        }
    });
}
 
public function stoppedTyping($event)
{

    // array_map(function ($user) use ($event): void {
    //     if ($user['id'] === $event['id']) {
    //         unset($user['typing']);
 
    //         $this->userTyping = null;
    //     }
    // },$this->usersOnline);


    $this->usersOnline->map(function ($user) use ($event): void {
        if ($user['id'] === $event['id']) {
            unset($user['typing']);
 
            $this->userTyping = null;
        }
    });
}

    public function here($users)
    {
        $this->usersOnline = collect($users);
    }


    public function joining($user)
    {
        //array_push($this->usersOnline,$user);
         $this->usersOnline->push($user);
    }




        public function leaving($user)
    {
        $this->usersOnline = $this->usersOnline->reject(
            fn ($u) => $u['id'] === $user['id']
        );
    }
    public function render()
    {
        return view('livewire.chat')->with('messages', $this->messages); ;
    }

 
     
    public function sendMessage(): void
    {
        $this->validate();
        
     
        Auth::user()
            ->messageForums()
            ->create([
                'conten_smsF' => $this->message,
            ]);

            $this->emitSelf('scrollToBottom'); 
     
        $this->message = '';

        
    }
     
    public function getMessagesProperty(): array|Collection
    {
        return MessageForum::with('user')
            ->latest()
            ->get();
    }
}
