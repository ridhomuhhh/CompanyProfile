<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('media_sosial', function (Blueprint $table) {
            $table->id();
            $table->string('link_instagram', 255)->nullable();
            $table->string('link_x', 255)->nullable();
            $table->string('link_facebook', 255)->nullable();
            $table->string('link_tiktok', 255)->nullable();

            $table->foreignId('user_id')
                ->nullable()
                ->cascadeOnUpdate()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media_sosial');
    }
};