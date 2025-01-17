<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    /** @use HasFactory<\Database\Factories\KecamatanFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'kota_id'
    ];
    public function kota(){
        return $this->belongsTo(kota::class);
    }
    public function desa(){
        return $this->hasMany(desa::class);
    }
}
