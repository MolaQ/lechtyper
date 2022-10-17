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
        Schema::create('bet_events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hashtag');
            $table->datetime('datetime');
            $table->integer('homescore')->nullable();
            $table->integer('awayscore')->nullable();
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
        Schema::dropIfExists('bet_events');
    }
};
