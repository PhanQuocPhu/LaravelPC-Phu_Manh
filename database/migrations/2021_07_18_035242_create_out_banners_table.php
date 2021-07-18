<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ob_img')->nullable();
            $table->string('ob_link')->nullable();
            $table->timestamps();
            $table->tinyInteger('ob_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_banners');
    }
}
