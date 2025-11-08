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
        Schema::create('tugas', function (Blueprint $table) {
            $table->string('tugas_id', 50)->primary();
            $table->string('judul_tugas', 255)->notNullable();
            $table->text('deskripsi')->notNullable();
            $table->string('kategori_tugas_id', 50)->nullable(); // Bisa null jika tugas tidak memiliki kategori
            $table->timestamp('created_at')->useCurrent(); // Default current timestamp

            $table->foreign('kategori_tugas_id')->references('kategori_id')->on('kategori')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};