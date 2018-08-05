<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('image');
            $table->unsignedInteger('road_id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('price_adult');
            $table->unsignedInteger('price_child');
            $table->unsignedInteger('percent');
            $table->enum('eat', ["2", "3"]);
            $table->enum('travel', ['Ô tô', 'Máy bay']);
            $table->enum('status', ["0", "1"]);
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
        Schema::dropIfExists('tours');
    }
}
