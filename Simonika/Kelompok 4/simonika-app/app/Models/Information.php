<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Information extends Model
{
    use HasFactory;

    protected $table = 'information';

    protected $fillable = [
        'nim',
        'nama',
        'judulPA',
        'nilai',
        'category_id',
        'result_id',
        'dosenone_id',
        'dosentwo_id',
        'dosenthird_id',
        'dosenfour_id',
        'dosen_id',
    ];

    public function result()
    {
        return $this->belongsTo(Result::class);
    }

    public function dosenone()
    {
        return $this->belongsTo(DosenBimOne::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function dosentwo()
    {
        return $this->belongsTo(DosenBimTwo::class);
    }

    public function dosenthird()
    {
        return $this->belongsTo(DosenJiOne::class);
    }

    public function dosenfour()
    {
        return $this->belongsTo(DosenJiTwo::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    // public function detail($id)
    // {
    //     return DB::table('information')
    //         ->where('id', $id)
    //         ->first();
    // }

    // public function allData()
    // {
    //     return DB::table('information')->get();
    // }
}
