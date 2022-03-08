<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{

    //Controller
    public function showList()
    {
        // $products = Product::all()->sortBy('price');      
        // return view('product-list', ['products' => $products]);

        $products = Product::all()->sortBy('price');      
        return view('product-list', compact('products'));
    }

    public function showProduct(int $id)
    {
        $products = Product::find($id);
        return view('product-details', ['title' => $products->title,'description' => $products->description, 'price' => $products->price, 'image' => $products->image, 'category_id' => $products->category_id]);
    }

}