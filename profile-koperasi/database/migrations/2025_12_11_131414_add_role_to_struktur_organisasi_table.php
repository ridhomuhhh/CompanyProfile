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
        Schema::table('struktur_organisasi', function (Blueprint $table) {
            // Kita taruh setelah kolom 'nama' biar rapi
            $table->string('role')->nullable()->after('nama');
        });
    }

    public function down(): void
    {
        Schema::table('struktur_organisasi', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
