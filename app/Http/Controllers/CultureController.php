<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // ✅ Tambahkan baris ini!

class CultureController extends Controller
{
    public function index()
    {
        $category_name = 'Culture';

        $articles = DB::table('article')
            ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
            ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
            ->where('article_categories.name', $category_name)
            ->get();

        return view('culture.index', compact('articles', 'category_name'));
    }

    public function lifestyle()
{
    $category_name = 'Lifestyle';

    $articles = DB::table('article')
        ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
        ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
        ->where('article_categories.name', $category_name)
        ->get();

    return view('culture.lifestyle', compact('articles', 'category_name'));
}

    public function festival()
{
    $category_name = 'Festival';

    $articles = DB::table('article')
        ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
        ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
        ->where('article_categories.name', $category_name)
        ->get();

    return view('culture.festival', compact('articles', 'category_name'));
}
    public function art()
{
    $category_name = 'Art';

    $articles = DB::table('article')
        ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
        ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
        ->where('article_categories.name', $category_name)
        ->get();

    return view('culture.art', compact('articles', 'category_name'));
}
    public function traditionalclothing()
{
    $category_name = 'Traditional_Clothing';

    $articles = DB::table('article')
        ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
        ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
        ->where('article_categories.name', $category_name)
        ->get();

    return view('culture.traditionalclothing', compact('articles', 'category_name'));
}
    public function localfood()
{
    $category_name = 'Local_Food';

    $articles = DB::table('article')
        ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
        ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
        ->where('article_categories.name', $category_name)
        ->get();

    return view('culture.localfood', compact('articles', 'category_name'));
}
    public function pop()
{
    $category_name = 'Pop';

    $articles = DB::table('article')
        ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
        ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
        ->where('article_categories.name', $category_name)
        ->get();

    return view('culture.pop', compact('articles', 'category_name'));
}
    public function economy()
{
    $category_name = 'Economy';

    $articles = DB::table('article')
        ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
        ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
        ->where('article_categories.name', $category_name)
        ->get();

    return view('culture.economy', compact('articles', 'category_name'));
}
    public function technology()
{
    $category_name = 'Technology';

    $articles = DB::table('article')
        ->join('article_categories', 'article.category_id', '=', 'article_categories.categories_id')
        ->select('article.title', 'article.article_content', 'article.picture_article', 'article_categories.name as category_name')
        ->where('article_categories.name', $category_name)
        ->get();

    return view('culture.technology', compact('articles', 'category_name'));
}

}
