<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $fillable = ['nama_kecamatan','kecamatan_id'];

    public function kelurahan()
    {
        return $this->hasMany(Kelurahan::class);
    }
    public function mitra()
    {
        return $this->hasMany(Mitra::class);
    }
}
