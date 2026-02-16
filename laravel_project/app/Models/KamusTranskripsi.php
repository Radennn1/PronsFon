<?php
// app/Models/KamusTranskripsi.php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamusTranskripsi extends Model
{
    use HasFactory;
    protected $table = 'kamus_transkripsi';
    protected $primaryKey = 'kata_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'kata_id',
        'kata_sumber',
        'transkripsi_indonesia_ipa',
        'audio_indonesia',
        'transkripsi_dayak_ahe_ipa',
        'audio_dayak_ahe',
    ];
}