<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jam_id');
            $table->integer('user_id');
            $table->enum('role', ['host', 'co_host', 'promoter'])->default('host');
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
        Schema::dropIfExists('jam_roles');
    }
}
