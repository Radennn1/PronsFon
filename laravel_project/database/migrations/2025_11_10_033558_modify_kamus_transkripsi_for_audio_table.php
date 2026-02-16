<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('kamus_transkripsi', function (Blueprint $table) {
            // Hapus kolom-kolom lama yang ada di database Anda
            $table->dropColumn(['transkripsi_fonetik', 'bahasa']);
            
            // Tambahkan kolom baru yang spesifik
            $table->string('transkripsi_indonesia_ipa')->nullable()->after('kata_sumber');
            $table->string('audio_indonesia')->nullable()->after('transkripsi_indonesia_ipa');
            $table->string('transkripsi_dayak_ahe_ipa')->nullable()->after('audio_indonesia');
            $table->string('audio_dayak_ahe')->nullable()->after('transkripsi_dayak_ahe_ipa');
        });
    }

    public function down(): void
    {
        Schema::table('kamus_transkripsi', function (Blueprint $table) {
            // Kembalikan struktur lama jika di-rollback
            $table->dropColumn(['transkripsi_indonesia_ipa', 'audio_indonesia', 'transkripsi_dayak_ahe_ipa', 'audio_dayak_ahe']);
            $table->string('transkripsi_fonetik')->nullable(); // Kolom ini yang sebelumnya ada
            $table->string('bahasa')->nullable(); // Kolom ini yang sebelumnya ada
        });
    }
};