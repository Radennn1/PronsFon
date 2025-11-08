<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamusTranskripsi extends Model
{
    use HasFactory;

    protected $table = 'kamus_transkripsi';
    protected $primaryKey = 'kata_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; // Tidak ada created_at/updated_at di tabel ini

    protected $fillable = [
        'kata_id',
        'kata_sumber',
        'transkripsi_fonetik',
        'bahasa',
    ];
}