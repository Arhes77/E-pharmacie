<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Produit;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Request;

class PanierProduit extends Component
{
    public $qte=null;
    public $totalPrice=0;
    public $totalProduit=0;
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
  public function retirerPanier($rowId,$index)
  {
   
      // $userID=Auth::user()->id;
      // $userID=3;
      // \Cart::session($userID)->remove($rowId);
      if ($index!=null | $index!=0){
      $this->totalProduit-=$this->message[$index]['price']*$this->message[$index]['quantity'];
    }
      $this->emit('retirer',$rowId);
  }




  public function decrementQuantity($index){
    $this->message[$index]['quantity']--;
    if($this->message[$index]['quantity']==0){
      $this->emit('retirer',$this->message[$index]['id']);
      
    }
  }
  
  public function incrementQuantity($index){
    $this->message[$index]['quantity']++;
  }

   
  public function totalPriceProduit($totalPrice){
    $this->totalProduit+=$totalPrice;
    
  }
}
