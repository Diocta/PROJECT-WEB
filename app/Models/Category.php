<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product; // Import model Product

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected $table = 'article_categories';
protected $primaryKey = 'categories_id';

public function articles()
{
    return $this->hasMany(Article::class, 'category_id', 'categories_id');
}

}
