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
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "id" => $product->id,
                        "title" => $product->title,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];
            session()->put('cart', $cart);
            return redirect('/cart');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect('/cart');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "title" => $product->title,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];
        session()->put('cart', $cart);
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
        if(session()->get('cart')) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return redirect('/cart');
        }
    }

}
