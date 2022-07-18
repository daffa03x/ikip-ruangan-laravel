<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingFasilitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_fasilitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jadwal_fasilitas_id');
            $table->unsignedBigInteger('users_id')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('jadwal_fasilitas_id')->references('id')->on('jadwal_fasilitas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_fasilitas');
    }
}
