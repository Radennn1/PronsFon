<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';
    protected $primaryKey = 'tugas_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; // Karena kita hanya punya 'created_at' dan tidak 'updated_at'

     protected $fillable = [
        'tugas_id',
        'judul_tugas',
        'deskripsi',
        'soal',
        'tujuan_capaian', // <-- TAMBAHKAN INI
        'kategori_tugas_id',
        'created_at',
    ];

    // Hubungan: Satu Tugas dimiliki oleh satu Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_tugas_id', 'kategori_id');
    }

    /**
     * Memberitahu Laravel untuk menggunakan 'tugas_id' untuk route model binding.
     */
    public function getRouteKeyName() // <-- TAMBAHKAN METODE INI
    {
        return 'tugas_id';
    }
}