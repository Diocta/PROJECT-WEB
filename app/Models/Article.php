<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
{
    return $this->belongsTo(Category::class, 'category_id', 'categories_id');
}

    protected $table = 'article'; // sesuai nama tabel di database
    protected $primaryKey = 'id_article';
    public $timestamps = false; // karena tidak ada created_at & updated_at

    protected $fillable = [
        'publish_date',
        'title',
        'article_content',
        'picture_article',
        'id_user',
        'category_name'
    ];
}



