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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_berkas');
            $table->string('alamat_pengirim');
            $table->dateTime('tanggal');
            $table->string('nomor');
            $table->string('perihal');
            $table->string('nomor_petunjuk')->nullable();
            $table->string('nomor_paket')->nullable();
            $table->string('berkas');
            $table->string('berkas_disposisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};
