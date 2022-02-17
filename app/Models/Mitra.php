<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitra';
    protected $fillable = ['nama','alamat','kelurahan_id','kecamatan_id','pendidikan','no_hp','bank','no_rek','user_id'];

    public function kegiatan()
    {
        return $this->belongsToMany(Kegiatan::class);
    }
   public function kecamatan()
   {
        return $this->belongsTo(Kecamatan::class);
   }
   public function kelurahan()
   {
        return $this->belongsTo(Kelurahan::class);
   }
   public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}

