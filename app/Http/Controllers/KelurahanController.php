<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function tampil(){
        $data_kelurahan = \App\Models\Kecamatan::all();
        return view('mitra.index', compact('data_kelurahan')) ; 
    }
}
