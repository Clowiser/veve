<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showListe()
    {
        return view('product-list');
    }

    public function showProduit($id)
    {
        return view('product-details', ['name' => $id]);
    }
}
