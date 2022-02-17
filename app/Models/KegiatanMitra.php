<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanMitra extends Model
{
    protected $table = 'kegiatan_mitra';
    protected $fillable = ['kegiatan_id','mitra_id'];
}
