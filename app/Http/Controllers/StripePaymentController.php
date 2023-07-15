<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Stripe;
use Session;
use App\Models\Article;
use App\Models\Produit;
use App\Models\Commande;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
     
=======
use App\Models\Article;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use Session;
use Stripe;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use function PHPUnit\Framework\returnSelf;

>>>>>>> 786c3584f67a4e1d3f12d506a441a45a027bc56e
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
            
            $art=$cmd->articles()->create([
             'produit_id'=>  $item->id, 
             'qteA_art'=> $item->quantity,
            ]);

            //decrementation de la quantite de produit en stock

            
           $qte=$item->quantity;
           
            $product = Produit::find($item->id);
            $product->update([
                'qteS_prod' => DB::raw("\"qteS_prod\" -  $qte"),
            ]);
           


        }
        $montant = doubleval($request->prix);
        return view('facture.show', compact('cmd', 'montant'));

    }

    
}
