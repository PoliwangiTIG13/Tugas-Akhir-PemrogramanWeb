<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyekAkhir extends Model
{
    use HasFactory;

    protected $fillable = [
        'judulPA',
        'idKategoriPA',
        'status',
        'nilaiSempro',
        'nilaiAkhir',
        'tahunAkademikPengajuan',
        'mahasiswa_id',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function pembimbingPenguji()
    {
        return $this->hasMany(PembimbingPenguji::class);
    }

    public function ujian()
    {
        return $this->hasMany(Ujian::class);
    }
}