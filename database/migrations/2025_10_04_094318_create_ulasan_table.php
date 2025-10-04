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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->string('ulasan_id', 50)->primary();
            $table->string('nama_pengirim', 100)->notNullable();
            $table->string('universitas_pengirim', 255)->nullable();
            $table->text('isi_ulasan')->notNullable();
            $table->integer('rating')->notNullable()->check('rating >= 1 AND rating <= 5'); // Menggunakan check constraint
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};