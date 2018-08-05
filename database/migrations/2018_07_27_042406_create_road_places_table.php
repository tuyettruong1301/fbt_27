<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_places', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('road_id');
            $table->unsignedInteger('place_id');
            $table->unsignedInteger('order_day');
            $table->unsignedInteger('batch');
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
        Schema::dropIfExists('road_places');
    }
}
