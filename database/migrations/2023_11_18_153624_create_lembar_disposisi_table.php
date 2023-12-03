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
        Schema::create('lembar_disposisi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_surat_masuk');
            $table->string('surat_dari');
            $table->date('tanggal_surat');
            $table->string('nomor_surat')->nullable();
            $table->date('diterima_tanggal');
            $table->string('nomor_agenda')->nullable();
            $table->integer('sifat');
            $table->string('hal');
            // $table->unsignedBigInteger('dtrsk_ke');
            // $table->unsignedBigInteger('dng_hormat');
            $table->string('catatan');
            $table->timestamps();

            $table->foreign('id_surat_masuk')->references('id')->on('surat_masuk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembar_disposisi');
    }
};
