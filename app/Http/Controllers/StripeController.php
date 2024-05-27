<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;



class StripeController extends Controller
{

    public function index(Request $request)
    {


        $carts = Cart::with('product')->whereIn('id', $request['carts'])->get();
        $data = [];

        foreach ($carts as $cart) {
            $data[] = [
                'price_data' => [
                    'currency' => 'pkr',
                    'product_data' => ['name' => $cart->product->sku],
                    'unit_amount' => $cart->product->price * 100,
                    'tax_behavior' => 'exclusive',
                ],
                'quantity' => $cart->quantity,
            ];
        }

        $stripe = new \Stripe\StripeClient(config('stripe.sk'));
        $response =  $stripe->checkout->sessions->create([
            'shipping_address_collection' => ['allowed_countries' => ['PK']],
            'shipping_options' => [
              [
                'shipping_rate_data' => [
                  'type' => 'fixed_amount',
                  'fixed_amount' => [
                    'amount' => 0,
                    'currency' => 'pkr',
                  ],
                  'display_name' => 'Free shipping',
                  'delivery_estimate' => [
                    'minimum' => [
                      'unit' => 'business_day',
                      'value' => 5,
                    ],
                    'maximum' => [
                      'unit' => 'business_day',
                      'value' => 7,
                    ],
                  ],
                ],
              ],
            ],
          'line_items' => [
            $data
          ],
        //   'automatic_tax' => ['enabled' => true],
          'mode' => 'payment',
          'success_url' => url('/success').'?session_id={CHECKOUT_SESSION_ID}',
          'cancel_url' => url('/cancel'),
        ]);

        // dd($response);

        if(isset($response->id) && $response->id!= ''){
            return response()->json(['redirect_url' => $response->url]);
        } else {
            return response()->json(['error' => 'Failed to create session'], 500);
        }
    }

    public function success ()
    {

    }

    public function cancel ()
    {

    }
}
