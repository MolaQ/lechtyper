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
            $table->integer('time');
            $table->integer('goals');
            $table->integer('assists');
            $table->integer('yellowcards');
            $table->integer('redcards');
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
        Schema::dropIfExists('bet_event_details');
    }
};
