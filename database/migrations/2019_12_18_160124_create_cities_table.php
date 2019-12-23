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
            $table->bigIncrements('id');
            $table->string('name');
            //  Name of the city
            $table->string('slug');
            $table->string('short');
            //  Shortname (airport abbreviation, e.g. BCN)
            $table->string('banner_path')->nullable();
            //  Path to image of a city banner
            $table->string('country_code');
            //  Country Code of the country where the city is located
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
