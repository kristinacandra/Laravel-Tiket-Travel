<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketkapalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiketkapal', function (Blueprint $table) {
            $table->id();
            $table->string('id_tiket')->unique();
            $table->unsignedBigInteger('id_kapal');
            $table->foreign('id_kapal')->references('id')->on('kapal')->onDelete('cascade');
            $table->unsignedBigInteger('id_jadwal');
            $table->foreign('id_jadwal')->references('id')->on('jadwals')->onDelete('cascade');
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
        Schema::dropIfExists('tiketkapal');
    }
}
