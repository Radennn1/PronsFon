<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('artikel', function (Blueprint $table) {
            $table->string('file_pdf')->nullable()->after('deskripsi_abstrak');
            $table->dropColumn('link_atau_file');
        });
    }

    public function down(): void
    {
        Schema::table('artikel', function (Blueprint $table) {
            $table->dropColumn('file_pdf');
            $table->text('link_atau_file'); // Untuk mengembalikan jika rollback
        });
    }
};