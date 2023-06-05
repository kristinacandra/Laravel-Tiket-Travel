<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePespesawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pespesawat', function (Blueprint $table) {
            $table->id();
            $table->string('id_pesanan')->unique();
            $table->unsignedBigInteger('id_tiket');
            $table->foreign('id_tiket')->references('id')->on('tiketpesawat')->onDelete('cascade');
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
        Schema::dropIfExists('pespesawat');
    }
}
