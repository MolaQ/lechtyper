<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bet_event_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('betevent_id');
            $table->unsignedBigInteger('footballer_id');
            $table->integer('time')->nullable();
            $table->integer('goals')->nullable();
            $table->integer('assists')->nullable();
            $table->integer('yellowcards')->nullable();
            $table->integer('redcards')->nullable();
            $table->timestamps();
            $table->foreign('betevent_id')->references('id')->on('bet_events');
            $table->foreign('footballer_id')->references('id')->on('footballers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bet_event_details');
    }
};
