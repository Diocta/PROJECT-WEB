<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
{
    $user = auth()->user();

    $orders = DB::table('orders')
        ->join('products', 'orders.id_product', '=', 'products.id')
        ->join('users', 'orders.id_user', '=', 'users.id')
        ->select(
            'orders.*',
            'products.product_name',
            'products.picture_product',
            'products.price',
            'users.name as username'
        )
        ->where('orders.id_user', $user->id) // hanya order milik user login
        ->orderBy('orders.created_at', 'desc')
        ->get();

    return view('transaction.transaction', compact('orders'));
}

}
