<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController
{
    public function showCompte()
    {
        return view('compte');
    }
    
}