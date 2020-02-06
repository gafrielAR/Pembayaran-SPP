<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('petugas')->unsigned()->index();
            $table->bigInteger('siswa')->unsigned()->index();
            $table->date('tgl_bayar');
            $table->string('bulan_bayar');
            $table->string('tahun_bayar');
            $table->bigInteger('spp')->unsigned()->index();
            $table->integer('jumlah_bayar');
            $table->timestamps();

            $table->foreign('petugas')->references('id')->on('users');
            $table->foreign('siswa')->references('id')->on('siswas');
            $table->foreign('spp')->references('id')->on('spps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}
