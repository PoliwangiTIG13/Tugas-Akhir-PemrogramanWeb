<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanRevisi extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'catatan', 'pembimbingPenguji_id'];

    public function pembimbingPenguji()
    {
        return $this->belongsTo(PembimbingPenguji::class);
    }
}