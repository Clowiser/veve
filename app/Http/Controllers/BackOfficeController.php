<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

// Request : la requête HTTP 

class BackOfficeController extends Controller
{

    public function index()
    {
        $products = Product::all()->sortby('price');
        return view('index', ['products' => $products]);
    }
    //permet d'afficher une liste d'une ressource => la liste des produits




    public function create()
    {
        return view('create');
    }
    //permet de présenter un formulaire pour créer une nouvelle ressource


    public function store(Request $Request){

        $product = new Product(); // On créait notre nouvel objet (sera enregistré dans ce dernier)
        $product->description = $Request->input('description'); // on requête les éléments voulus
        $product->title = $Request->input('title');
        $product->image = $Request->input('image');
        $product->price = $Request->input('price');

        $product->save(); // on enregistre
 
        return redirect('index'); // on redirect à notre page principale
    }
    //permet, après l'action create, d'enregistrer la nouvelle ressource



    public function edit($id)
    {
        // $product = Product::find($id);
        // return view('edit', ['product' => $product]);
        
        $product = Product::find($id);
        $category = Category::pluck('name', 'id'); 
        // dd($category);
        //récupérer la liste que l'on va envoyer au select donc on le rajoute au compact
        return view('edit', compact('product', 'category'));
    }
    //permet d'afficher le formulaire ou éditer(modifier) une ressource spécicifiée


    public function update(Request $Request, $id){

        $product = Product::find($id);
        $product->title = $Request->input('title');
        $product->price = $Request->input('price');
        $product->description = $Request->input('description');
        $product->image = $Request->input('image');
        $product->category_id = $Request->input('category_id');

        $validator = \Validator::make($Request->all(),[
            'title' => 'bail|required|alpha_spaces|regex:/^[\pL\s\-]+$/u', 
            'description' => 'bail|required|alpha_spaces|regex:/^[\pL\s\-]+$/u',
            'price' => 'bail|required|entier',
            'image' => 'bail|required|url',
            'category_id' => 'bail|required|entier',
         ]);

        $product->save();

        return redirect('index');
    }
    //permet de mettre à jour la ressource spécifiée
  


    
    public function destroy($id)
    {
        $product = Product::destroy($id);
        return redirect('index');
    }
    //permet de supprimer une ressource spécifiée => donc par son index + une fois la ressource détruite, on retourne à l'index

}