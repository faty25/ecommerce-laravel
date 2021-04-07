<?php

namespace App\Http\Controllers\Shop;
use Cart;
use App\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Ajouter un produit au panier
    
    public function add(Request $request) {

        $produit = Produit::find($request->id);
        Cart::add(array(
            'id' => $produit->id, 
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->qty,
            'attributes' => array('size'=>$request->size,'photo'=>$produit->photo_principale,
            'prix_ttc'=>$produit->prixTTC())
        ));

        return redirect(route('cart_index'));
    }

    public function index() {
        $content = Cart::getContent();
        //dd($content);

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT 20%',
            'type' => 'tax',
            'target' => 'subtotal', 
            'value' => '20%'
        ));
        Cart::condition($condition);

        $total_ht_panier = Cart::getSubTotal();
        $total_ttc_panier = Cart::getTotal();

        $tva = $total_ttc_panier - $total_ht_panier;
        return view('cart.index',compact('content','total_ttc_panier', 'total_ht_panier','tva'));
    }
}
