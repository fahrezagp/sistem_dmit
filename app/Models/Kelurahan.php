<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
    protected $fillable = ['id','nama_kelurahan'];

    public function kelurahan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
    public function mitra()
    {
         return $this->hasMany(Mitra::class);
    }
}

