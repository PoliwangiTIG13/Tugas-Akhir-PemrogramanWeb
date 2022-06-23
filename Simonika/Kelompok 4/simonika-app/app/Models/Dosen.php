<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nidn',
        'nama',
        'telepon',
        'jenis_kelamin',
        'keahlian',
        'username',
        'password',
        'userRole_id',
    ];

    public function proyekDosen()
    {
        return $this->hasMany(ProyekDosen::class);
    }

    public function pembimbingPenguji()
    {
        return $this->hasMany(PembimbingPenguji::class);
    }
}