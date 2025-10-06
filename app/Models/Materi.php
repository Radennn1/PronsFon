<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // <-- Import ini

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';
    protected $primaryKey = 'materi_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; // Jika Anda tidak menggunakan timestamps

    protected $fillable = [
        'materi_id',
        'judul',
        'konten',
        'urutan',
        'kategori_id', // <-- TAMBAHKAN INI
    ];

    /**
     * Relasi: Materi belongs to Kategori
     */
    public function kategori(): BelongsTo // <-- TAMBAHKAN METHOD INI
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'kategori_id');
    }
}