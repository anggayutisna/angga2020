<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalMapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_mapel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jadwal_id');
            $table->foreign('jadwal_id')->references('id')->on('jadwal')->onDelete('CASCADE');
            $table->unsignedBigInteger('mapel_id');
            $table->foreign('mapel_id')->references('id')->on('mapel')->onDelete('CASCADE');
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
        Schema::dropIfExists('jadwal_mapel');
    }
}
