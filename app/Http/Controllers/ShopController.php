<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    // Menampilkan produk berdasarkan kategori
    public function category($category)
    {
        $categoryData = Category::where('name', $category)->first();

        if (!$categoryData) {
            abort(404); // Jika kategori tidak ditemukan
        }

        $products = Product::where('category_id', $categoryData->id)->get();
        return view('shop.index', compact('products', 'category'));
    }
}
