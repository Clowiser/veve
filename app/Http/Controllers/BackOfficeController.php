<?php

namespace App\Http\Controllers;

use App\Models\Products;

class BackOfficeController extends Controller
{
    public function index()
    {
        $productsList = Products::all();
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
        $delete = Products::destroy($id);
        return view('index');
    }
}
