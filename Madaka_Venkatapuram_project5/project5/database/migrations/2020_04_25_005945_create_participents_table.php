<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('eventId')->unsigned();
            $table->bigInteger('userId')->unsigned();
            $table->foreign('eventId')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('userId')->references('id')->on('userevs')->onDelete('cascade');
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
        Schema::dropIfExists('participents');
    }
}
