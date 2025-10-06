<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    // Hubungan: Satu Kategori memiliki banyak Materi
    public function materi()
    {
        return $this->belongsToMany(Materi::class, 'materi_kategori', 'kategori_id', 'materi_id');
    }

    // Hubungan: Satu Kategori dapat memiliki banyak Tugas
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'kategori_tugas_id', 'kategori_id');
    }
}