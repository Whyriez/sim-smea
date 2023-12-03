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
        Schema::create('detail_disposisi_trskn', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lembards');
            $table->integer('idtrsk_ke');
            $table->string('name_dtrsk');
            $table->timestamps();

            $table->foreign('id_lembards')->references('id')->on('lembar_disposisi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_disposisi_trskn');
    }
};
