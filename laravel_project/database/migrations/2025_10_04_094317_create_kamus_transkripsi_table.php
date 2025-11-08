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
        Schema::create('kamus_transkripsi', function (Blueprint $table) {
            $table->string('kata_id', 50)->primary();
            $table->string('kata_sumber', 255)->notNullable();
            $table->string('transkripsi_fonetik', 255)->notNullable();
            $table->string('bahasa', 50)->notNullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamus_transkripsi');
    }
};