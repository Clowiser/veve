<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        $productsList = Products::all();
        return view('index', ['products'=>$productsList]);
    }

    public function create()
    {
        return view('add');
    }

    public function add(Request $request)
    {
        $product = new Products();
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image = $request->input('image');

        $product->save();

        return redirect('/backoffice')->with('success','Produit ajouter avec succés.');
    }

    public function update(int $id)
    {
        $product = Products::find($id);
        return view('edit', [ 'product' => $product]);
    }

    public function edit(int $id, Request $request)
    {
        $product = Products::find($id);
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image = $request->input('image');

        $product->save();

        return redirect('/backoffice')->with('success','Produit editer avec succés.');
    }

    public function delete($id)
    {
        Products::destroy($id);
        return redirect('/backoffice')->with('success','Produit supprimer avec succés.');
    }
}
