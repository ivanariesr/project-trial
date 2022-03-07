<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBahanbakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bahanbakus', function (Blueprint $table) {
            $table->id();
            $table->string('suplier');
            $table->string('nama_bahan_baku');
            $table->string('kode_bahan_baku');
            $table->string('satuan_bahan_baku');
            $table->bigInteger('jumlah_bahan_baku');
            $table->bigInteger('harga');
            $table->text('ket');
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
        Schema::dropIfExists('data_bahanbakus');
    }
}
