<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showListe()
    {
        $products = DB::select('select * from products');

        return view('product-list', ['products' => $products]);
    }

    public function showProduit($id)
    {
        $products = DB::select('select * from products where id = '.$id);
    
        return view('product-details', ['name' => $id, 'price' => $products[0]->price]);
    }
}
