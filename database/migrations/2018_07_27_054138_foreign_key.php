<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade')->change();
        });

        Schema::table('road_places', function (Blueprint $table) {
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade')->change();
        });

        Schema::table('road_places', function (Blueprint $table) {
            $table->foreign('road_id')->references('id')->on('roads')->onDelete('cascade')->change();
        });

        Schema::table('tours', function (Blueprint $table) {
            $table->foreign('road_id')->references('id')->on('roads')->onDelete('cascade')->change();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->change();
        });

        Schema::table('hotels', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->change();
        });

        Schema::table('departion_hotels', function (Blueprint $table) {
            $table->foreign('departion_id')->references('id')->on('departions')->onDelete('cascade')->change();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade')->change();
        });

        Schema::table('bills', function (Blueprint $table) {
            $table->foreign('departion_id')->references('id')->on('departions')->onDelete('cascade')->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->change();
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->change();
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade')->change();
        });

        Schema::table('rates', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->change();
                $table->foreign('tour_id')->references('id')->onDelete('cascade')->on('tours')->change();
        });

        Schema::table('departions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->change();
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade')->change();
        });

        Schema::table('requests', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->change();
            $table->foreign('departion_id')->references('id')->on('departions')->onDelete('cascade')->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
