<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model Product
use App\Models\Category; // Import model Category

class ProductController extends Controller
{
    // Method untuk menampilkan semua produk
    public function index() {
        // Ambil semua produk dengan kategori
        $products = Product::with('category')->get();
        return view('shop.index', compact('products'));
    }
}
