<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan';
    protected $primaryKey = 'ulasan_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; // Karena kita hanya punya 'created_at' dan tidak 'updated_at'

    protected $fillable = [
        'ulasan_id',
        'nama_pengirim',
        'universitas_pengirim',
        'isi_ulasan',
        'rating',
        'created_at',
    ];
}