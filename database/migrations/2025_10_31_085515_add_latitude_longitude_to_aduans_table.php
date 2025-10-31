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
        Schema::table('aduans', function (Blueprint $table) {
            // Menggunakan tipe data 'decimal' untuk presisi yang lebih baik (10 digit total, 7 di belakang koma)
            // Menggunakan nullable() untuk fleksibilitas, meskipun di form sudah diatur 'required'
            $table->decimal('latitude', 10, 7)->nullable()->after('lokasi_kejadian');
            $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aduans', function (Blueprint $table) {
            $table->dropColumn(['latitude', 'longitude']);
        });
    }
};
