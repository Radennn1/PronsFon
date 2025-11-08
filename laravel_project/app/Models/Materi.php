<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    protected $primaryKey = 'materi_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'materi_id',
        'judul',
        'konten',
        'file_pdf',
        'urutan',
    ];

    public function kategori(): BelongsToMany
    {
        return $this->belongsToMany(Kategori::class, 'materi_kategori', 'materi_id', 'kategori_id');
    }
}