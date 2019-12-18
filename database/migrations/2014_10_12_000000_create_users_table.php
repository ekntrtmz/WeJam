<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('isAdmin')->default(false);
            //  True if is admin
            $table->string('avatar_path')->nullable();
            //  Path to avatar image of the user

            $table->string('social_alias_fb')->nullable();
            //  Social alias on Facebook
            $table->string('social_url_fb')->nullable();
            //  Social link to Facebook

            $table->string('social_alias_ig')->nullable();
            //  Social alias on Instagram
            $table->string('social_url_ig')->nullable();
            //  Social link to Instagram

            $table->string('social_alias_sc')->nullable();
            //  Social alias on Soundcloud
            $table->string('social_url_sc')->nullable();
            //  Social link to Soundcloud

            $table->string('social_alias_sf')->nullable();
            //  Social alias on Spotify
            $table->string('social_url_sf')->nullable();
            //  Social link to Spotify

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
        Schema::dropIfExists('users');
    }
}
