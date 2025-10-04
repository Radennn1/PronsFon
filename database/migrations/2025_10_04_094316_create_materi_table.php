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
        Schema::create('materi', function (Blueprint $table) {
            $table->string('materi_id', 50)->primary();
            $table->string('judul', 255)->notNullable();
            $table->text('konten')->notNullable();
            $table->integer('urutan')->nullable();
            $table->timestamp('last_updated')->useCurrent()->useCurrentOnUpdate(); // MySQL specific
            // Untuk PostgreSQL atau database lain, mungkin hanya $table->timestamps();
            // atau $table->dateTime('last_updated')->useCurrent()->nullable();
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