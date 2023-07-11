<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index( Request $request){
        $panier=$request->panier;
        $prix=$request->prix;
        return view('commande.index')->with(
            [
                'panier'=>$panier,
                'prix'=>$prix,
            ]
        );
    }

    public function show(Request $req){
        
        $prix=$req->prix;
        $panier=$req->panier;
        return view('stripe')->with(
            [
                
                'prix'=>$prix,
                'panier'=>$panier,
            ]
        ); 
    }
}
