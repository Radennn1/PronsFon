<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primaryKey = 'artikel_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'artikel_id',
        'judul_artikel',
        'penulis',
        'deskripsi_abstrak', // <-- PERUBAHAN DI SINI
        'file_pdf', // <-- PERUBAHAN DI SINI
    ];
}