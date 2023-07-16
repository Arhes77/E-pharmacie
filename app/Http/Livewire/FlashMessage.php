<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FlashMessage extends Component
{

    public $message;
    public $type;
    public $colors =[
        'danger' => 'text-red-900 border-red-200 bg-red-200',
        'ajoutPanier' => 'text-green-900 border-green-200 bg-green-200',
    ];

    protected $listeners =['flash' => 'setFlashMessage'];

    public function setFlashMessage($message,$type)
    {
        $this->message=$message;
        $this->type=$type;
      
        
        $this->dispatchBrowserEvent('flash-message');
    }

    public function render()
    {
        return view('livewire.flash-message');
    }
}
