<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showListe()
    {
        return view('product-list');
    }

    public function showProduit(int $id)
    {
        return view('product-details', ['name' => $id]);
    }
}
