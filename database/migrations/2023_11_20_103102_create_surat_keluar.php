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
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_berkas');
            $table->string('alamat_penerima');
            $table->dateTime('tanggal');
            $table->string('tipe_surat');
            $table->string('perihal');
            $table->string('nomor_petunjuk')->nullable();
            $table->string('nomor_paket')->nullable();
            $table->string('berkas');
            $table->enum('status_persetujuan', ['belum', 'diajukan', 'diterima'])->default('belum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar');
    }
};
