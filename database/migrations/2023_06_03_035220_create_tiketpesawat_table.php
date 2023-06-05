<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketpesawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiketpesawat', function (Blueprint $table) {
            $table->id();
            $table->string('id_tiket')->unique();
            $table->unsignedBigInteger('id_maskapai');
            $table->foreign('id_maskapai')->references('id')->on('maskapai')->onDelete('cascade');
            $table->unsignedBigInteger('id_jadwal');
            $table->foreign('id_jadwal')->references('id')->on('jadwal')->onDelete('cascade');
            $table->unsignedBigInteger('id_kota');
            $table->foreign('id_kota')->references('id')->on('kota')->onDelete('cascade');
            $table->unsignedBigInteger('id_pengguna');
            $table->foreign('id_pengguna')->references('id')->on('pengguna')->onDelete('cascade');
            $table->string('kelas');
            $table->integer('harga');
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
        Schema::dropIfExists('tiketpesawat');
    }
}