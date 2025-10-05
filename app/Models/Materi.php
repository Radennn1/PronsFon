<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';
    protected $primaryKey = 'materi_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; // Karena kita punya 'last_updated' sendiri, tidak pakai 'created_at' dan 'updated_at' default Laravel

    protected $fillable = [
        'materi_id',
        'judul',
        'konten',
        'urutan',
        'last_updated',
    ];

    // Hubungan: Satu Materi dapat berada di banyak Kategori
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'materi_kategori', 'materi_id', 'kategori_id');
    }
}