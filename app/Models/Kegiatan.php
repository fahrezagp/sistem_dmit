<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['kegiatan','seksi','tahun','arsip_id','mitra'];

    public function mitra()
    {
        return $this->belongsToMany(Mitra::class);
    }
}
