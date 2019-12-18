<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jam_id');
            $table->integer('user_id');
            $table->enum('role', ['promoter', 'co_host'])->default('promoter');
            //  Role of the assoicated user within this collaboration
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
        Schema::dropIfExists('collaborations');
    }
}
