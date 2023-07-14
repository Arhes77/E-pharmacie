<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FactureController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        return Pdf::loadView('facture.show', compact('composante'))->download('FACTURE.pdf');
    }

    public function create(){

    }
}
