<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany; // <-- Import ini
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'kategori';

    // Primary key custom
    protected $primaryKey = 'kategori_id';

    // Tipe data primary key
    protected $keyType = 'string';

    // Non-incrementing primary key
    public $incrementing = false;

    public $timestamps = false;

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'kategori_id',
        'nama_kategori',
        'deskripsi_kategori',
    ];

    public function materi(): BelongsToMany // <-- TAMBAHKAN METODE INI
    {
        return $this->belongsToMany(Materi::class, 'materi_kategori', 'kategori_id', 'materi_id');
    }

    // Hubungan: Satu Kategori dapat memiliki banyak Tugas
    public function tugas(): HasMany
    {
        return $this->hasMany(Tugas::class, 'kategori_tugas_id', 'kategori_id');
    }
}