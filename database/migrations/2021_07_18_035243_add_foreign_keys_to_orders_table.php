<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('or_transaction_id', 'orders_ibfk_3')->references('id')->on('transactions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('or_product_id', 'orders_ibfk_4')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_ibfk_3');
            $table->dropForeign('orders_ibfk_4');
        });
    }
}
