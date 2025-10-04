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
        Schema::create('materi_kategori', function (Blueprint $table) {
            $table->string('materi_id', 50);
            $table->string('kategori_id', 50);
            $table->primary(['materi_id', 'kategori_id']); // Composite primary key
            $table->foreign('materi_id')->references('materi_id')->on('materi')->onDelete('cascade');
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_kategori');
    }
};