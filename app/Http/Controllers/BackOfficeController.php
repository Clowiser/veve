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
    //permet d'afficher une liste d'une ressource => la liste des produits


    public function create()
    {
        return view('create');
    }
    //permet de présenter un formulaire pour créer une nouvelle ressource


    public function store(Request $Request){

        $product = new Products(); // On créait notre nouvel objet (sera enregistré dans ce dernier)
        $product->description = $Request->input('description'); // on requête les éléments voulus
        $product->title = $Request->input('title');
        $product->image = $Request->input('image');
        $product->price = $Request->input('price');

        $product->save(); // on enregistre
 
        return redirect('/index'); // on redirect à notre page principale
    }
    //permet, après l'action create, d'enregistrer la nouvelle ressource


    public function edit($id)
    {
        $product = Products::find($id);
        return view('edit', ['product' => $product]);
    }
    //permet d'afficher le formulaire ou éditer(modifier) une ressource spécicifiée


    public function update($id, $Request){

        $product = Products::find($id);

        $product->title = $Request->input('title');
        $product->price = $Request->input('price');

        $product->save();

        return redirect('index');
    }
  

    public function destroy($id)
    {
        $product = Products::destroy($id);
        return redirect('index');
    }
    //permet de supprimer une ressource spécifiée => donc par son index + une fois la ressource détruite, on retourne à l'index

}