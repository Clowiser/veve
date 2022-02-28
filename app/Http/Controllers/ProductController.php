<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showListe()
    {
        return "Liste Produit";
    }

    public function showProduit()
    {
        return "produit 1";
    }
}
