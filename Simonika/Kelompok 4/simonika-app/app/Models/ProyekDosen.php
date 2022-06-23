<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyekDosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'topik',
        'deskripsi',
        'kebutuhan',
        'dosen_id',
        'kategoriPA_id',
    ];

    public function kategoriPA()
    {
        return $this->belongsTo(KategoriPA::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}