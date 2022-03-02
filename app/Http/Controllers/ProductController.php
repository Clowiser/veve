<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function showListe()
    // {
    //     $products = DB::select('select * from products');

    //     return view('product-list', ['products' => $products]);
    // }

    // public function showProduit($id)
    // {
    //     $products = DB::select('select * from products where id = '.$id);
    
    //     return view('product-details', ['name' => $id, 'price' => $products[0]->price]);
    // }


    // Models
    public function showListByPriceCroiss() {
        
        $products = Product::all()->sortByDesc('price');

        return view('product-list', ['products' => $products]);
    }

    public function showProduit($id){

        $product = Product::find($id);

        return view('product-details', [
            'id' => $product->id,
             'name' => $product->name,
             'price' => $product->price,
             'img' => $product->image,
             'title' => $product->title   
        ]);
    }
}
