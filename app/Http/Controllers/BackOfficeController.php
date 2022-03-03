<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

// Request : la requête HTTP 

class BackOfficeController extends Controller
{

    public function index()
    {
        $products = Products::all()->sortby('price');
        return view('index', ['products' => $products]);
    }

    public function create()
    {
        return view('create');
    }

    public function store($Request){

    }

    public function edit($id)
    {
        $product = Products::find($id);
        return view('edit', ['product' => $product]);
    }

    public function update($id, $Request){

        $product = Products::find($id);

        $product->title = $request->input('title');
        $product->price = $request->input('price');

        $product->save();

        return redirect('index');
    }
  
    public function destroy($id)
    {
        $product = Products::destroy($id);
        return redirect('index');
    }

}
