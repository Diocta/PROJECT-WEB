<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('article', function (Blueprint $table) {
        $table->id('id_article');
        $table->date('publish_date');
        $table->string('title');
        $table->text('article_content');
        $table->string('picture_article');
        $table->unsignedBigInteger('id_user');
        $table->string('category_name');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
