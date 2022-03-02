<?php

namespace App\Http\Controllers;

use App\Models\Product;

class BackOfficeController extends Controller
{
    public function index()
    {
        $productsList = Product::all();
        return view('index', ['products'=>$productsList]);
    }

    public function add()
    {
        return view('add');
    }

    public function edit($id)
    {
        return view('edit');
    }

    public function delete($id)
    {
        $delete = Product::destroy($id);
        return view('index');
    }
}
