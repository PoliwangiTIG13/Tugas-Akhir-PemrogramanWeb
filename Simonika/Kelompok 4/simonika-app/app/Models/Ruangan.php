<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $fillable = ['namaRuangan'];

    public function ujian()
    {
        return $this->hasMany(Ujian::class);
    }
}