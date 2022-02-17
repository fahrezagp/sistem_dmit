<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $table = 'supervisor';
    protected $fillable = ['nama','jabatan','nip','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
