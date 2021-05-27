<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->string('location');
            $table->string('status');
            $table->integer('price');
            $table->integer('size');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('tv_lounges');
            $table->integer('garages');
            $table->integer('swimming_pools');
            $table->mediumtext('images');
            $table->string('description');
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
        Schema::dropIfExists('properties');
    }
}
