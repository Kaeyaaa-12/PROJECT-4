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
        Schema::create('aduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_aduan');
            $table->dateTime('waktu_kejadian');
            $table->text('lokasi_kejadian');
            $table->text('isi_laporan');
            $table->string('bukti')->nullable();
            $table->enum('status', ['Baru', 'Dalam Proses', 'Selesai'])->default('Baru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aduans');
    }
};
