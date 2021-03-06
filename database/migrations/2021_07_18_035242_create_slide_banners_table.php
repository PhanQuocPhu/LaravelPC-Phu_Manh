<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sb_img')->nullable();
            $table->string('sb_link')->nullable();
            $table->timestamps();
            $table->tinyInteger('sb_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide_banners');
    }
}
