<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    // Menampilkan halaman order dengan detail produk
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('order.order', compact('product'));
    }

    // Menyimpan pesanan ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'id_product' => 'required|exists:products,id',
            'amount_product' => 'required|integer|min:1',
            'address' => 'required|string',
            'transaction_method' => 'required|string',
        ]);

        // Ambil user login
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login untuk memesan.');
        }

        // Ambil produk
        $product = Product::findOrFail($validated['id_product']);

        // Hitung total harga
        $total_price = $product->price * $validated['amount_product'];

        // Simpan pesanan ke database
        Order::create([
            'id_user'            => $user->id,
            'username'           => $user->name,
            'id_product'         => $product->id,
            'product_name'       => $product->product_name,
            'price'              => $product->price,
            'picture_product'    => $product->picture_product, // pastikan kolom ini sesuai di tabel `products`
            'amount_product'     => $validated['amount_product'],
            'total_price'        => $total_price,
            'address'            => $validated['address'],
            'transaction_method' => $validated['transaction_method'],
        ]);

        return redirect('/transaction')->with('success', 'Order berhasil disimpan.');
    }
}
