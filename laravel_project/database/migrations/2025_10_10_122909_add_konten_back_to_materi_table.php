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
        Schema::table('materi', function (Blueprint $table) {
            // Menambahkan kolom 'konten' sebagai text, setelah 'judul'
            // dan menjadikannya nullable agar tidak ada masalah saat mengisi data lama
            $table->text('konten')->nullable()->after('judul');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materi', function (Blueprint $table) {
            $table->dropColumn('konten');
        });
    }
};