<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Produit;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Request;

class PanierProduit extends Component
{
  public $qte;
    public  $message=[];
    protected $listeners =['PanierProduit'=>'setPanierMessage']; 
    public function render()
    {
        return view('livewire.panier-produit');
    }
  public function setPanierMessage($items){
    $this->message=$items;
    
    $this->dispatchBrowserEvent('panier-message');
    
  }
  public function retirerPanier($rowId)
  {
      // $userID=Auth::user()->id;
      // $userID=3;
      // \Cart::session($userID)->remove($rowId);
      $this->emit('retirer',$rowId);
  }
  public function decrementQuantity($qte){
    $this->qte --;
  }

   
    
}
