<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use Session;
use Stripe;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use function PHPUnit\Framework\returnSelf;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from LaravelTus.com."
        ]);

        Session::flash('success', 'Payment successful!');




        $cmd=Auth::user()->commandes()->create([
            'prixT_com'=>doubleval($request->prix),

        ]);


        //creation des article de la commande

      $panier=$request->panier;
    //   dd($panier);

      $obj = json_decode($panier);


        foreach ($obj as  $item) {

            $cmd->articles()->create([
             'produit_id'=>  $item->id,
             'qteA_art'=> $item->quantity,
            ]);

        }
        $montant = doubleval($request->prix);
        return view('facture.show', compact('cmd', 'montant'));

    }

    
}
