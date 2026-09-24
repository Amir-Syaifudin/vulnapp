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
        Schema::create('peserta_sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasi')->unique();
            $table->string('nama');
            $table->string('nik', 16);
            $table->string('instansi');
            $table->string('skema_sertifikasi');
            $table->string('asesor_penanggung_jawab');
            $table->date('tanggal_asesmen');
            $table->string('hasil');
            $table->text('catatan_asesor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_sertifikasi');
    }
};
