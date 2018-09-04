<?php
use App\Product;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop',function(){
  $products=Product::paginate(3);
  return view('shop',compact('products'));
});

Route::get('/product-detail/{id}',function($id){
  $product=Product::findOrFail($id);
  return view('product-detail',compact('product'));
});

Route::get('/cart',['uses'=>'ShoppingController@cart','as'=>'cart']);
Route::get('/cart/delete/{id}',['uses'=>'ShoppingController@cart_delete','as'=>'cart.delete']);

Route::get('/checkout',function(){
  return view('checkout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/products','AdminProductsController');
Route::post('/cart/add',['uses'=>'ShoppingController@add_to_cart','as'=>'cart.add']);

Route::get('/cart/incr/{id}/{qty}',['uses'=>'ShoppingController@incr','as'=>'cart.incr']);
Route::get('/cart/decr/{id}/{qty}',['uses'=>'ShoppingController@decr','as'=>'cart.decr']);

Route::get('/cart/add1/{id}',['uses'=>'ShoppingController@add1','as'=>'cart.add1']);

Route::get('/cart/checkout',['uses'=>'ShoppingController@checkout','as'=>'cart.checkout']);
