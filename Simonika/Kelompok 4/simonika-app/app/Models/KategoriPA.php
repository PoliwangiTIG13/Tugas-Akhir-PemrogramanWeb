<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPA extends Model
{
    use HasFactory;

    protected $fillable = ['namaKategori', 'deskripsi'];

    public function proyekDosen()
    {
        return $this->hasMany(ProyekDosen::class);
    }
}