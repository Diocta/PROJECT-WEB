<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('article_categories')->insert([
            ['categories_id' => 1, 'name' => 'Culture'],
            ['categories_id' => 2, 'name' => 'Lifestyle'],
            ['categories_id' => 3, 'name' => 'Festival'],
            ['categories_id' => 4, 'name' => 'Art'],
            ['categories_id' => 5, 'name' => 'Traditional_Clothing'],
            ['categories_id' => 6, 'name' => 'Local_Food'],
            ['categories_id' => 7, 'name' => 'Pop'],
            ['categories_id' => 8, 'name' => 'Economy'],
            ['categories_id' => 9, 'name' => 'Technology'],
        ]);
    }
}
