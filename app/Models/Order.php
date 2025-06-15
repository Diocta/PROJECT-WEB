<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Kolom-kolom yang boleh diisi mass assignment
    protected $fillable = [
    'id_user',
    'username',
    'id_product',
    'amount_product',
    'total_price',
    'address',
    'transaction_method',
];

protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
];


    // Relasi ke model Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    // Relasi ke model User (jika ingin akses user dari order)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
