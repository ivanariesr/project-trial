<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBahanstgjadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bahanstgjadis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bahan_stgjadi');
            $table->string('kode_bahan_stgjadi');
            $table->bigInteger('jumlah_bahan_stgjadi');
            $table->string('satuan_bahan_stgjadi');
            $table->bigInteger('harga');
            $table->text('ket');

            $table->string('kode_bahan_baku');
            $table->string('satuan_bahan_baku');
            $table->bigInteger('jumlah_bahan_baku');

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
        Schema::dropIfExists('data_bahanstgjadis');
    }
}
