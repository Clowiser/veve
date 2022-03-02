<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showListe()
    {
        $products = DB::select('select * from product');

        return view('product-list', ['products'=>$products]);
    }

    public function showProduit($id)
    {
        $product = DB::select('select * from product where id = '.$id);

        return view('product-details', [
            'product' => $product[0]
        ]);
    }
}
