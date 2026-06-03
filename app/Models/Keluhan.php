<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    public function masyarakat()
{
    return $this->belongsTo(Masyarakat::class);
}
protected $fillable = [
    'keluhan',
    'status',
    'reject_reason',
    'masyarakat_id'
];
}
