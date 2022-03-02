<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showListe()
    {
        $products = Product::all();

        return view('product-list', ['products'=>$products]);
    }

    public function showProduit($id)
    {
        $product = Product::find($id);

        return view('product-details', [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'description' => $product->description
        ]);
    }
}
