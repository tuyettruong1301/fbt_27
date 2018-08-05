<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->unsignedInteger('tour_id');
            $table->date('departure_day');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('count_seat');
            $table->unsignedInteger('occupied_seat')->default(0);
            $table->unsignedInteger('rest_seat');
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
        Schema::dropIfExists('departions');
    }
}
