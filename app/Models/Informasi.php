<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
    protected $fillable = [
        'judul',
        'nama',
        'jurusan',
        'rayon',
        'deskripsi',
        'foto',

    ];
}