<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheapTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheapTrip', function (Blueprint $table) {
            $table->id();
            $table->string('cheapTrip_title');
            $table->longText('cheapTrip_description');
            $table->string('cheapTrip_img');
            $table->string('cheapTrip_price');
            $table->unsignedBigInteger('guide_id');
            $table->unsignedBigInteger('park_id1');
            $table->unsignedBigInteger('park_id2')->nullable();
            $table->unsignedBigInteger('park_id3')->nullable();
            $table->foreign('guide_id')->references('id')->on('guides');
            $table->foreign('park_id1')->references('id')->on('parks');
            $table->foreign('park_id2')->references('id')->on('parks');
            $table->foreign('park_id3')->references('id')->on('parks');
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
        Schema::dropIfExists('cheapTrip');
    }
}
