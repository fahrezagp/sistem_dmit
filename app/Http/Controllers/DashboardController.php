<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Mitra;
use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.index');
    }
    
    public function mitrakegiatan(Request $request)
    {   
        $data_mitra = Mitra::all();
        $mit = $data_mitra->where('id', );
        $mitra = Mitra::count();
        $kegiatan = Kegiatan::count();

        return view('dashboards.index',compact('data_mitra','mitra','kegiatan'));
    }

}

