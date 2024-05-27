<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{

    public function index()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));


        \Stripe\Charge::create([
            "amount" => 10 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);



        return back()
            ->with('success', 'Payment successful!');
    }
}
