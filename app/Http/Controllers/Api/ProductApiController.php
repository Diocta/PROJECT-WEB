<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        // Jika ada query ?category_id=
        if ($request->has('category_id')) {
            $products = Product::where('category_id', $request->category_id)->get();
        } else {
            $products = Product::all();
        }

        return response()->json($products);
    }

    public function addData(Request $request)
    {


        $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'picture_product' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $imagePath = $request->file('picture_product')->store('products', 'public');

        $todo = Product::create([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description,
            'picture_product' => $imagePath, 
        ]);

        return response()->json($todo, 201);
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'picture_product' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]); 

        $product = Product::findOrFail($id);

        if ($request->hasFile('picture_product')) {
            $imagePath = $request->file('picture_product')->store('products', 'public');
            $product->picture_product = $imagePath;
        }

        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully'], 200);
    }
}
