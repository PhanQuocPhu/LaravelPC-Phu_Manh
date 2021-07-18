<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('p_transaction_id')->nullable()->index('p_transaction_id');
            $table->unsignedInteger('p_user_id')->nullable()->index('p_user_id');
            $table->integer('p_money')->nullable()->comment('Số tiền thanh toán');
            $table->string('p_note')->nullable()->comment('Nội dung thanh toán');
            $table->string('p_vnp_response_code', 255)->nullable()->comment('Mã phản hồi');
            $table->string('p_code_vnp', 255)->nullable()->comment('Mã giao dịch vnpay');
            $table->string('p_code_bank', 255)->nullable()->comment('Mã ngân hàng');
            $table->dateTime('p_time')->nullable()->comment('Thời gian chuyển tiền');
            $table->timestamps();
            $table->string('p_transaction_code', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
