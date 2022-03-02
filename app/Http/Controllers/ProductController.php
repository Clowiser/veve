<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showList()
    {
        $products = DB::select('select * from products');
 
      
        return view('product-list', ['products' => $products]);
    }

    public function showProduit(int $id)
    {
        
        $products = DB::select('select * from products where id ='.$id);
        return view('product-details', ['title' => $products[0]->title,'description' => $products[0]->description, 'price' => $products[0]->price, 'image' => $products[0]->image]);
    }
}
