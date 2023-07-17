<?php

namespace App\Http\Controllers;

use App\Models\Article;
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



    public function create(int $id){

        $articles = Article::where('commande_id', '=', $id)->get();
        //dd($articles);
        $cmd = Commande::findOrFail($id);//Commande::where('id', '=', $id)->get();
        //dd($cmd);
        $montant = $cmd->prixT_com;
        //dd($articles);

        return Pdf::loadView('facture.exemplaire', compact('articles', 'cmd', 'montant'))->download('Facture.pdf');

    }
}
