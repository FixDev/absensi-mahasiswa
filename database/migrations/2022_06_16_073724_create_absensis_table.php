<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->dateTime('waktu');
            $table->integer('nim');
            $table->enum('status', ['Hadir', 'Alpa', 'Izin', 'Sakit']);
            $table->integer('matkul_id');
            $table->integer('mahasiswa_id');
            // $table->foreign('matkul_id')->references('id')->on('matkuls');
            // $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
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
        Schema::dropIfExists('absensis');
    }
};
