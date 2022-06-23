<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembimbingPenguji extends Model
{
    use HasFactory;

    protected $fillable = [
        'keterangan',
        'status',
        'nilaiSempro',
        'nilaiAkhir',
        'proyekAkhir_id',
        'dosen_id',
        'posisi_id',
    ];

    public function proyekAKhir()
    {
        return $this->belongsTo(ProyekAkhir::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function posisi()
    {
        return $this->belongsTo(Posisi::class);
    }

    public function catatanRevisi()
    {
        return $this->hasMany(CatatanRevisi::class);
    }
}