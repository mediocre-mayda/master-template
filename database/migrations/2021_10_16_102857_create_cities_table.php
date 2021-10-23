<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id');
            $table->string('name');
            $table->string('slug');
            $table->string('intro');
            $table->longText('description');
            $table->string('thumb');
            $table->string('banner');
            $table->string('language');
            $table->string('currency');
            $table->double('lat');
            $table->double('lng');
            $table->integer('priority');
            $table->integer('status');
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
        Schema::dropIfExists('cities');
    }
}
