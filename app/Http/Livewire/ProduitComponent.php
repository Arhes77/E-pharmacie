<?php

namespace App\Http\Livewire;




use App\Models\Produit;
use Livewire\Component;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;



class ProduitComponent extends Component
{

    public $p;
    public $bools=1;
    protected $listeners =['retirer'=>'retirerPanier']; 
    public $items;
    
    public function render()
    {
        return view('livewire.produit-component');
    }
    

      
    public function addPanier( $produit)
    {
       
    $Produit = Produit::find($produit); // assuming you have a Produit model with id, name, description & price
    $rowId = 456; // generate a unique() row ID
    // $userID = Auth::user()->id; // the user ID to bind the \cart contents
    $userID=2;
    
    if($userID!=null){



    // add the produit to \cart
    \Cart::session($userID)->add([
        'id'=>$Produit->id,
        'name'=>$Produit->nom_prod,
         'price'=>$Produit->prix_prod,
         'quantity'=>1,
        'image'=>$Produit->url_prod,       
  ]);
    $this->items = \Cart::getContent();
    $this->emit('PanierProduit',$this->items);
    // app()->instance('items', \Cart::getContent());

           
    // return view('showPanier',compact('items'));
    }
        }

        public function retirerPanier($rowId)
        {
            // $userID=Auth::user()->id;
            $userID=2;
            \Cart::session($userID)->remove($rowId);
            $this->items = \Cart::getContent();
            $this->emit('PanierProduit',$this->items);

            
        }
        public function listerContenuePanier()
        {
            $userID=2;
            $items = \Cart::session($userID)->getContent();
            
            $this->emit('PanierProduit',$this->items);
            
            
            // foreach($items as $row) {
    
            //     echo $row->id; // row ID
            //     echo $row->nom;
            //     echo $row->descripton;
            //     echo $row->prix;
                
            //     echo $item->associatedModel->id; // whatever properties your model have
            //     echo $item->associatedModel->name; // whatever properties your model have
            //     echo $item->associatedModel->description; // whatever properties your model have
            // }
    
        }

        public function updatePanier($rowId)

        {
        $userID=Auth::user()->id;
        \Cart::session($userID)->update($rowId,[
            
            'prix' => 98.67,
        ]);
    }
}
