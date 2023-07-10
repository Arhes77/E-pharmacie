<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Cart;
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
    public $panier=[]; 
    protected $listeners =['PanierProduit'=>'setPanierMessage']; 
    public function render()
    {
      $userID=2;
      $this->message= \Cart::session($userID)->getContent();
        return view('livewire.panier-produit');
    }

  public function setPanierMessage($items){
    // $this->panier=$items;
    // $end=end($this->panier);
    // reset($this->panier);
    // array_push($this->message,$end);
    $this->message=$items;

    
    
    
    $this->dispatchBrowserEvent('panier-message');
    
  }
  public function mount(){
    $panier = \Cart::getContent();
    $this->message=$this->panier;
  }
  public function retirerPanier($rowId,$index)
  {
   
      // $userID=Auth::user()->id;
      // $userID=3;
      // \Cart::session($userID)->remove($rowId);
      if ($index!=null | $index!=0){
      $this->totalProduit-=$this->message[$index]['price']*$this->message[$index]['quantity'];
    }
      // $this->emit('retirer',$rowId);
      //retirons propement le produit du panier
      $userID=2;
      \Cart::session($userID)->remove($rowId);
      $this->message = \Cart::getContent();
  }

  public function listerPanier(){
    $userID=2;
    $this->message= \Cart::session($userID)->getContent();
   
    // $this->emit('lister');
    
  }




  public function decrementQuantity($index){
    // $this->message[$index]['quantity']--;
    // if($this->message[$index]['quantity']==0){
    //   $this->emit('retirer',$this->message[$index]['id']);
      
    // }

    $userID=2;
    if($this->message[$index]['quantity']==1){
      \Cart::session($userID)->remove($this->message[$index]['id']);
      $this->totalProduit-=$this->message[$index]['price'];
      
    }else{
    \Cart::session($userID)->update($this->message[$index]['id'],[
        
        'quantity' => -1,
    ]);
    //actualiser le prix total des produit
    
    $this->totalProduit-=$this->message[$index]['price'];
   
    $this->message= \Cart::session($userID)->getContent();
  }
  }
  
  public function incrementQuantity($index){
    $userID=2;
    \Cart::session($userID)->update($this->message[$index]['id'],[
        
        'quantity' => 1,
    ]);
    //actiliser le prix total des produit
    
    $this->totalProduit+=$this->message[$index]['price'];
    $this->message= \Cart::session($userID)->getContent();
  }

   
  public function totalPriceProduit($totalPrice){
    $this->totalProduit+=$totalPrice;
    
  }
}
