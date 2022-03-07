<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BackOfficeController extends Controller
{
    public function index()
    {
        $productsList = Product::all();
        return view('index', ['products'=>$productsList]);
    }

    public function create()
    {
        $categorie = Category::all();
        return view('add', ['categorie' => $categorie]);
    }

    public function add(Request $request)
    {
        $product = new Product();

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image = $request->input('image');

        $validator = Validator::make($request->all(),[
            'description' => 'bail|required',
            'price' => 'bail|required|integer|between:1,50000',
            'title' => 'bail|required|between:1,200',
            'image' => 'bail|required|url',
            'categorie' => 'bail|required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $product->save();

        return redirect('/backoffice')->with('success','Produit ajouter avec succés.');
    }

    public function update(int $id)
    {
        $product = Product::find($id);
        $categorie = Category::all();
        return view('edit', [ 'product' => $product, 'categorie' => $categorie]);
    }

    public function edit(int $id, Request $request)
    {
        $product = Product::find($id);
        $category = $request->request->all();

        $cat = [];
        foreach ($category['category'] as $category){
            $cat[] = $category;
        }

        $product->categories()->sync($cat);
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image = $request->input('image');

        $validator = Validator::make($request->all(),[
            'description' => 'bail|required',
            'price' => 'bail|required|integer|between:1,50000',
            'title' => 'bail|required|between:1,200',
            'image' => 'bail|required|url',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $product->save();

        return redirect('/backoffice')->with('success','Produit editer avec succés.');
    }

    public function delete($id)
    {
        Product::destroy($id);
        return redirect('/backoffice')->with('success','Produit supprimer avec succés.');
    }
}
