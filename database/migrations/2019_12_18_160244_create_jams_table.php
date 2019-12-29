<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['jam_session', 'open_mic'])->default('jam_session');
            //  Type of the Jam that can either be a Session or an Open Mic
            $table->string('title')->unique();
            $table->string('slug')->unique();
            //  Title of the Jam  (used in both types)
            $table->string('descr');
            //  Description of the Jam (used in both types)
            $table->enum('mode', ['public', 'secret']);
            //  Mode of the Jam that can be public or private (used in Jam Session)
            $table->string('banner_path')->nullable();
            //  Path to the Jam banner image (used in both types)
            $table->string('brand_path')->nullable();
            //  Path to the Brand image (used in Open Mics)
            $table->integer('user_id')->unsigned();
            //  Relationship to User that owns the Jam (used in Jam Session)
            $table->integer('city_id')->unsigned();
            //  Relationship to the City where the Jam takes places

            /**
             * Jam Session related
             *
            */
            $table->date('jam_session_date')->nullable();
            //  Date of the Jam Session
            $table->dateTime('jam_session_time')->nullable();
            //  Time of the Jam Session
            $table->integer('jam_session_secret')->unsigned()->nullable();
            //  Secret of the Jam Session
            $table->enum('jam_session_space', ['indoor', 'outdoor']);
            //  Space of the Jam Session

            /**
             * Open Mic related
             *
             */
            $table->enum('open_mic_weekday', ['mon','tue', 'wed', 'thu', 'fri', 'sat', 'sun'])->nullable();
            //  Weekday of the Open Mic
            $table->string('open_mic_start')->nullable();
            //  Starting Time (in HH:hh) of the Open Mic
            $table->string('open_mic_event_place')->nullable();
            //  Event place of the Open Mic, e.g. Bar, Restaurant, Club, Hostel etc.
            $table->enum('open_mic_event_place_type', ['bar', 'restaurant', 'club', 'hostel','hotel', 'other'])->nullable();
            //  Type of the event place
            $table->string('open_mic_event_website')->nullable();
            //  Official Website of the event host/event place
            $table->string('open_mic_event_url')->nullable();
            //  URL to Event in the web

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
        Schema::dropIfExists('jams');
    }
}
