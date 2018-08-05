<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('departion_id');
            $table->unsignedInteger('count_adult');
            $table->unsignedInteger('count_child');
            $table->unsignedInteger('total');
            $table->enum('status', ['Đơn mới', 'Chấp nhận', 'Từ chối', 'Thanh toán', 'Hoàn tất']);
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
        Schema::dropIfExists('bills');
    }
}
