<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'alamat',
        'telepon',
        'jenis_kelamin',
        'username',
        'password',
    ];

    public function proyekAkhir()
    {
        return $this->hasOne(ProyekAKhir::class);
    }

    public function proyekUjian()
    {
        return $this->hasManyThrough(
            Ujian::class,
            ProyekAkhir::class,
            'mahasiswa_id',
            'proyekAkhir_id',
            'id',
            'id'
        );
    }

    public function dosenMahasiswa() {
        return $this->hasManyThrough(Dosen::class, [ProyekAkhir::class, PembimbingPenguji::class]);
    }
}