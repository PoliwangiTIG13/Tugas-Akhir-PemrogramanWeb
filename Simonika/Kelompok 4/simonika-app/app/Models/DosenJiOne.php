<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenJiOne extends Model
{
    use HasFactory;

    public function information()
    {
        return $this->hasMany(Information::class);
    }
}