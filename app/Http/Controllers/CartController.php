<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
class CartController extends Controller

{
    public function showCart()
    {
        $cart = Cart::find(1);

        return view('cart', ['cart'=>$cart]);
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }

        $cart = Cart::find(1);

        $cart->products()->attach($product);   

        return redirect('/cart');
    }

    public function add($id)
    {

        if(session()->get('cart')) {

            $cart = session()->get('cart');
            $cart[$id]["quantity"]++;
            session()->put('cart', $cart);
            return redirect('/cart');
        }

    }
    public function undo($id)
    {

        if(session()->get('cart')) {

            $cart = session()->get('cart');
            $cart[$id]["quantity"]--;
            session()->put('cart', $cart);
            if($cart[$id]["quantity"]< 1){
                $this->remove($id);
            }
            return redirect('/cart');
        }

    }
    public function remove($id)
    {   
        $cart = Cart::find(1);

        $cart->products()->detach($id);   

            return redirect('/cart');
        
    }

}
