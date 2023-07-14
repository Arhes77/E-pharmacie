<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FactureController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $composante = $request->commande;
        $montant = $request->montant;

        $composante = json_decode($composante);

        return Pdf::loadView('facture.facture', compact('composante', 'montant'))->download('Facture.pdf');
    }



    public function create(){

    }
}
