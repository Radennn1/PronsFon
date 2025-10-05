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
    public $timestamps = false; // Tidak ada created_at/updated_at di tabel ini

    protected $fillable = [
        'artikel_id',
        'judul_artikel',
        'penulis',
        'sumber',
        'link_atau_file',
    ];
}