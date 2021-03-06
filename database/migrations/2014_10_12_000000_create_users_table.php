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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 45);
            $table->string('email', 45)->unique();
            $table->string('password');
            $table->string('role', 45);
            $table->integer('mahasiswa_id')->nullable();
            $table->integer('dosen_id')->nullable();
            // $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
            // $table->foreign('dosen_id')->references('id')->on('dosens');
            // $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
