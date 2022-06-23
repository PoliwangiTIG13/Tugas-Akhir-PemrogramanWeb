<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenBimTwo extends Model
{
    use HasFactory;

    public function information()
    {
        return $this->hasMany(Information::class);
    }
}