<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('city_id')->nullable();
            $table->string('category')->nullable(); //["1", "2", "5"] // JSON relationship
            $table->string('place_type')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('amenities')->nullable();
            $table->string('address')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('website')->nullable();
            $table->longText('social')->nullable();
            $table->longText('opening_hours')->nullable();
            $table->string('thumb')->nullable();
            $table->longText('gallery')->nullable();
            $table->string('video')->nullable();
            $table->integer('status')->nullable();

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
        Schema::dropIfExists('places');
    }
}
