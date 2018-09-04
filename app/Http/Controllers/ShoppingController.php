<?php

namespace App\Http\Controllers;
use App\Product;
Use Cart;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart(){

      $pdt=Product::find(request()->pdt_id);
      $cartItem=Cart::add([
        'id'=>$pdt->id,
        'name'=>$pdt->name,
        'qty'=>request()->qty,
        'price'=>$pdt->price,
      ]);

      Cart::associate($cartItem->rowId,'App\Product');

      return redirect('cart');

    }

    public function cart(){

      return view('cart');

    }

    public function cart_delete($id){
      Cart::remove($id);
      return redirect()->back();
    }

    public function incr($id,$qty){
     Cart::update($id,$qty+1);
     return redirect()->back();
    }

    public function decr($id,$qty){
      Cart::update($id,$qty-1);
      return redirect()->back();
    }

    public function add1($id){
      $pdt=Product::find($id);
      $cartItem=Cart::add([
        'id'=>$pdt->id,
        'name'=>$pdt->name,
        'qty'=>1,
        'price'=>$pdt->price,
      ]);

      Cart::associate($cartItem->rowId,'App\Product');

      return redirect('cart');
    }

    public function checkout(){
      return view('checkout');
    }

}
