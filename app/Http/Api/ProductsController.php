<?php

namespace App\Http\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsController 
{

    public function showListApi()
    {
        $products = Product::all(); // on récupère tous les produits

        //return response()->json($products); // on retourne les informations des produits en JSON

        return response()->json([    // retour en JSON
            'message'=> 'liste des produits affichés',      
            'donnees'=> $products]); 
    }

    public function showProductApi(int $id)
    {
        $product = Product::find($id);

        return response()->json([
            'message'=> 'Le produit affiché',   
            'données'=> $product]);
    }

    public function create(Request $request)
    {
        $product = new Product();  
        $product->title = $request->title;   
        $product->price = $request->price;   
        $product->description = $request->description;  
        $product->category_id =$request->category_id;  
        $product->image =$request->image;  

       $product->save();      

       return response()->json([
        'message'=> 'Le produit est créé',   
        'données'=> $product
       ]);
    }
   
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        
        $product->title = $request->title;   
        $product->price = $request->price;   
        $product->description = $request->description;  
        $product->category_id =$request->category_id;  
        $product->image =$request->image;  

        $product->update($request->all()); // le update fait office de save
        return response([
            'message'=> 'mise à jour du produit', 
            'données'=> $product]);

    }
  
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        return response([          
            'message'=> 'suppression reussi'   
           ], 204); 
        //    code 204 : signifie que l’action de suppression est réussie
    }
   
}

//API REST en lecture = sur le navigateur : rentrer simplement l'adresse http://127.0.0.1:8000/api/products sur le nav (retour format JSON)
//API REST en écriture = sur postman