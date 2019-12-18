<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinergiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinergias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jam_id');
            //  Relationship to Jam
            $table->integer('user_id');
            //  Relationship to User
            $table->enum('role', ['promoter', 'co_host'])->default('promoter');
            //  Role of the user within this synergy
            $table->boolean('has_liked')->default(false);
            //  True if user has 'liked' the jam, probably going to be a 'check-fist with ya man'
            $table->boolean('has_joined')->default(true);
            //  True if user joins the jam before event start
            $table->boolean('is_performing')->default(false);
            //  True if user will perform artistically

            //  !!ToDo: add hasMany-relationship to Instrument:class
            //  User will be able to select instruments that he is going to bring to the jam.

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
        Schema::dropIfExists('sinergias');
    }
}
