<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/',"Shop\MainController@index")->name('homepage');

Route::get('/produit/{id}',"Shop\MainController@produit")->name('voir_produit');

Route::get('/categorie/{id}',"Shop\MainController@viewByCategory")->name('voir_produits_par_cat');

Route::get('/tag/{id}',"Shop\MainController@viewByTag")->name('voir_produits_par_tag');

Route::post('/panier/add/{id}',"Shop\CartController@add")->name('cart_add');
Route::get('/panier',"Shop\CartController@index")->name('cart_index');

Route::get('/paiement','CheckoutController@index')->name('checkout.index');
Route::post('/paiment', 'CheckoutController@store')->name('checkout.store');
Route::get('/merci', function () {
  return view('checkout.thankyou');
});