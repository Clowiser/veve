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
        return view('product-details', ['name' => $id]);
    }
}
