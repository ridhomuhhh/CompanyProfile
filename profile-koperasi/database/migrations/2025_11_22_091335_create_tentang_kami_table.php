<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tentang_kami', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->cascadeOnUpdate()
                ->constrained('users')
                ->nullOnDelete();

            $table->longText('sejarah')->nullable();
            $table->mediumText('visi')->nullable();
            $table->mediumText('misi')->nullable();
            $table->mediumText('legalitas_hukum')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tentang_kami');
    }
};