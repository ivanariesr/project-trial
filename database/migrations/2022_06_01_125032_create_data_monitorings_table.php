<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_monitorings', function (Blueprint $table) {
            $table->id();
            $table->string('no_idm',7);
            $table->string('no_idn',7);
            $table->string('no_idc',7);
            $table->string('no_idp',7);
            $table->string('no_ids',7);
            $table->string('prktype',10);
            $table->string('no_PRKorWO',10);
            $table->string('nm_pkerjaan',255);
            $table->string('rkap',9);
            $table->string('stts_pkerjaan',12);
            $table->string('tgl_mulai',11);
            $table->string('tgl_akhir',11);
            $table->string('stts_admin',17);
            $table->text('ket_progress');
            $table->string('due_date',11);
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
        Schema::dropIfExists('data_monitoring');
    }
}
