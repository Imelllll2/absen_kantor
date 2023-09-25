<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('karyawan_id');
            $table->date('tanggal');
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            $table->string('keterangan', 100);
            $table->foreign('karyawan_id')->references('id')->on('karyawans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
