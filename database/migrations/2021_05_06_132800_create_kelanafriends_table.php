<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelanafriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelanafriends', function (Blueprint $table) {
            $table->id();
            $table->string('friend_name');
            $table->string('friend_img');
            $table->string('friend_location');
            $table->string('friend_instagram');
            $table->string('friend_whatsapp');
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
        Schema::dropIfExists('kelanafriends');
    }
}
