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
        Schema::create('simbol_fonetik', function (Blueprint $table) {
            $table->string('simbol_id', 50)->primary();
            $table->string('simbol_ipa', 10)->notNullable()->unique();
            $table->text('deskripsi')->nullable();
            $table->string('file_audio', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simbol_fonetik');
    }
};