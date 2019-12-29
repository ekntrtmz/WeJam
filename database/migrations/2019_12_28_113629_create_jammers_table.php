<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJammersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jammers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jam_id');
            //  Relationship to Jam
            $table->integer('user_id');
            //  Relationship to User
            $table->enum('jammer_type', ['host', 'performer', 'default']);
            //  Jammer types: Basic Jammer (not performing or hosting) if is null
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
        Schema::dropIfExists('jammers');
    }
}
