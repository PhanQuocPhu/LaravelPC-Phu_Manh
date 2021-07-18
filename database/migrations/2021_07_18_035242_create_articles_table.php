<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('a_name')->nullable()->unique('article_a_name_unique');
            $table->string('a_slug')->index('article_a_slug_index');
            $table->string('a_description')->nullable();
            $table->longText('a_content')->nullable();
            $table->tinyInteger('a_active')->default(1)->index('article_a_active_index');
            $table->unsignedInteger('a_author_id')->index('article_a_author_id_index');
            $table->string('a_description_seo')->nullable();
            $table->string('a_title_seo')->nullable();
            $table->string('a_avatar')->nullable();
            $table->integer('a_view')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
