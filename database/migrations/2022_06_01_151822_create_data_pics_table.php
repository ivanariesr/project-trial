<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pics', function (Blueprint $table) {
            $table->id();
            $table->string('no_idp',7);
            $table->string('nm_rend',75);
            $table->string('nm_pm',75);
            $table->string('nm_niaga',75);
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
        Schema::dropIfExists('data_pic');
    }
}
