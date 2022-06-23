<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenisUjian',
        'proyekAkhir_id',
        'ruangan_id',
        'draft',
        'dokumenTambahan',
        'tanggalUjian',
        'waktuUjian',
    ];

    public function proyekAkhir()
    {
        return $this->belongsTo(ProyekAkhir::class);
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}