<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductController extends Controller
{
    public function showList()
    {
        $products = Products::all()->sortBy('price');

        return view('product-list', ['products' => $products]);
    }

    public function showProduit(int $id)
    {

        $products = Products::find($id);
        return view('product-details', ['title' => $products->title,'description' => $products->description, 'price' => $products->price, 'image' => $products->image]);
    }


}
