<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BackOfficeController extends Controller
{

    //CRUD FOR PRODUCTS

    public function index()
    {
        //first() = du premier au dernier .... latest() =
        if (Category::all()->isEmpty()){
            return view('addcat');
        } elseif(Product::all()->isEmpty()){
            $categorie = Category::all();
            return view('add', ['categorie' => $categorie]);
        } else {
            $productsList = Product::first()->paginate(5);
            $categorie = Category::all();
            return view('index', ['products' => $productsList, 'categorie' => $categorie]);
        }
    }

    public function create()
    {
        $categorie = Category::all();
        return view('add', ['categorie' => $categorie]);
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'description' => 'bail|required',
            'price' => 'bail|required|integer|between:1,50000',
            'title' => 'bail|required|between:1,200',
            'image' => 'bail|required|url',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $product = new Product();

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image = $request->input('image');

        $product->save();

//        dd($product);
        $category = $request->request->all();

        $cat = [];
        foreach ($category['category'] as $category){
            $cat[] = $category;
        }

        $product->categories()->attach($cat);

        return redirect('/backoffice')->with('success','Produit ajouter avec succés.');
    }

    public function update(int $id)
    {
        $productCat = [];
        $product = Product::find($id);
        $productCat = $product->categories->pluck('id')->toArray();
        $categorie = Category::all();

        return view('edit', [ 'product' => $product, 'categorie' => $categorie, 'productCat' => $productCat]);
    }

    public function edit(int $id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'description' => 'bail|required',
            'price' => 'bail|required|integer|between:1,50000',
            'title' => 'bail|required|between:1,200',
            'image' => 'bail|required|url',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

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

        $product->save();

        return redirect('/backoffice')->with('success','Produit editer avec succés.');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->categories()->detach();
        $product->delete();

        return redirect('/backoffice')->with('success','Produit supprimer avec succés.');
    }


// CRUD FOR CATEGORIES

    public function createCat()
    {
        $categorie = Category::all();
        return view('addcat', ['categorie' => $categorie]);
    }

    public function addCat(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'bail|required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect('/backoffice')->with('success','Categorie ajouter avec succés.');
    }

    public function updateCat(int $id)
    {

        $category = Category::find($id);

        return view('editcat', [ 'category' => $category]);
    }

    public function editCat(int $id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'bail|required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $category = Category::find($id);
        $category->name = $request->input('name');

        $category->save();

        return redirect('/backoffice')->with('success','Categorie editer avec succés.');
    }

    public function deleteCat($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/backoffice')->with('success','Produit supprimer avec succés.');
    }
}
