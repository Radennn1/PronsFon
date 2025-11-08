<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimbolFonetik extends Model
{
    use HasFactory;

    protected $table = 'simbol_fonetik';
    protected $primaryKey = 'simbol_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; // Tidak ada created_at/updated_at di tabel ini

    protected $fillable = [
        'simbol_id',
        'simbol_ipa',
        'deskripsi',
        'file_audio',
    ];
}