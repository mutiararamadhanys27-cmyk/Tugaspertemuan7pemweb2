<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    public function keluhans()
{
    return $this->hasMany(Keluhan::class);
}
    protected $fillable = [
        'nomor_kk',
        'nomor_ktp',
        'nama',
        'alamat',
        'jenis_kelamin'
    ];
}