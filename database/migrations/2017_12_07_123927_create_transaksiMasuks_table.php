<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksiMasuks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nasabah_user');
            $table->foreign('nasabah_user')->references('username')->on('nasabahs');
            $table->string('jenis');
            $table->foreign('jenis')->references('jenis_sampah')->on('sampahs');
            $table->integer('berat');
            $table->integer('jumlah');
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
        Schema::dropIfExists('transaksiMasuks');
    }
}
