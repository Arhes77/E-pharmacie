<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index( Request $request){
        return view('commande.index',compact('request'));
    }
}
