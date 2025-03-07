<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category; // Import model Category

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['category_id', 'product_name', 'price', 'description', 'picture_product'];

    // Relasi ke kategori
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
