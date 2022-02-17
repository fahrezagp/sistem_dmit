<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipKegiatan extends Model
{
    protected $table = 'arsip_kegiatan';
    protected $fillable = ['mitra','kegiatan_id','seksi','tahun','kegiatan'];
}
