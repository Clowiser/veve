<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function showList()
    {
        $products = Product::all()->sortBy('price');

        return view('product-list', ['products' => $products]);
    }

    public function showProduit(int $id)
    {

        $product = Product::find($id);
        return view('product-details', ['product' => $product]);
    }


}
