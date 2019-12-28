<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yamen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jam_id');
            //  Relationship to Jam
            $table->integer('user_id');
            //  Relationship to User
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
        Schema::dropIfExists('yamen');
    }
}
