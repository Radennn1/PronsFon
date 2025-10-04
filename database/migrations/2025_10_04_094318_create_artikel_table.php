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
        Schema::create('artikel', function (Blueprint $table) {
            $table->string('artikel_id', 50)->primary();
            $table->string('judul_artikel', 255)->notNullable();
            $table->string('penulis', 255)->nullable();
            $table->string('sumber', 255)->nullable();
            $table->text('link_atau_file')->notNullable(); // Bisa URL atau path file lokal
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};