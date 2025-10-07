<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Kategori; // <-- Import model Kategori

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->string('materi_id', 50)->primary();
            $table->string('judul', 255)->notNullable();
            $table->text('konten')->notNullable();
            $table->integer('urutan')->default(0);
            // $table->timestamps(); // Jika Anda tidak menggunakan timestamps di tabel materi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};