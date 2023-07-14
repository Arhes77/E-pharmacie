<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

       // dd($request->panier);
       $panier = $request->panier;
       $montant = $request->prix;

       //dd($panier);
        return  view('facture.show', compact('panier', 'montant'));
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $panier = $request->panier;
        $montant = $request->prix;

        return Pdf::loadView('facture.facture', compact('panier', 'montant'))->download('Facture.pdf');
    }
}
