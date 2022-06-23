<?php

namespace App\Models;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = ['nama_role'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}