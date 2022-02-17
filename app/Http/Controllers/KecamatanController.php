<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function wilayah(){
        $data_kecamatan = \App\Models\Kecamatan::all();
        return view('mitra.wilayah', compact('data_kecamatan')) ; 
    }
}
