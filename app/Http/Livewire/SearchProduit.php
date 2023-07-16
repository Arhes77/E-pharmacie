<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;

class SearchProduit extends Component
{
    public String $query='';
    public $produits=[];
    public Int $selectedIndex=0;
    
    public function render()
    {
        return view('livewire.search-produit');
    }


    public function showProduit(){
        if($this->produits){
            return redirect()->route('produit.showresult',[$this->produits[$this->selectedIndex]['id']]);
        }
    }


    public function incrementIndex(){
        if(count($this->produits)-1==$this->selectedIndex)
        {
            $this->selectedIndex=0;
        }
        else
        $this->selectedIndex++;
    }

    public function decrementIndex()
    {
        if($this->selectedIndex==0){
            $this->selectedIndex=count($this->produits)-1;
        }
        else
        $this->selectedIndex--;
    }

    public function resetIndex()
    {
        $this->reset('selectedIndex');
        return;
    }


    public function updatedQuery()
    {
        $words= '%'. $this->query.'%';
        if(strlen($this->query)>3){
            $this->produits=Produit::where('nom_prod' ,'ILIKE',$words)
            ->orwhere('descri_prod','ILIKE',$words)
            
            
            ->get();




        }

    }
}
