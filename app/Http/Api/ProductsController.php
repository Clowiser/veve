<?php

namespace App\Http\Api;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController
{
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'donnees'=> $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        $product->categories->pluck('id');

        return response()->json([
            'donnees'=> $product,
        ]);

    }

    public function add(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();

        return response()->json([
            "product"=> $product,
        ], 201);
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->update($request->all());

        return response([
            'donnees' => $product
        ]);
    }

    public function delete($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response([], 204);
    }

}
