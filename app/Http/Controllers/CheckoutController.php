<?php

namespace App\Http\Controllers;
use Cart;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Cart::getContent()->count() <= 0) {
            return redirect()->route('produits.index');
        }
        Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
        $intent = PaymentIntent::create([
            'amount' => round(Cart::getTotal()),
            'currency' => 'eur',
            
        ]);

        //dd($intent);
        $clientSecret = Arr::get($intent, 'client_secret');

        return view('checkout.index', [
            'clientSecret' => $clientSecret
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Cart::destroy();

        $data = $request->json()->all();

        return $data['paymentIntent'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
