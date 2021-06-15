<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_customer');
            $table->string('kode_bahan_jadi');
            $table->bigInteger('jumlah_bahan_jadi');
            $table->string('satuan_bahan_jadi');
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
        Schema::dropIfExists('data_penjualans');
    }
}
