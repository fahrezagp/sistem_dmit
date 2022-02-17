<?php

namespace App\Http\Controllers;

use App\Models\ArsipKegiatan;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\KegiatanMitra;
use App\Models\Mitra;
use PhpParser\Node\Expr\FuncCall;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_kegiatan = Kegiatan::where('nama','LIKE','%' .$request->cari. '%')->get();
        }else {
            $data_kegiatan = Kegiatan::all();
        }
        
        return view('kegiatan.index', compact('data_kegiatan')); 
    }

    public function kegiatanaktif(Request $request)
    {
        if($request->has('cari'))
        {
            $kegiatan_aktif = Kegiatan::where('nama','LIKE','%' .$request->cari. '%')->get();
        }else {
            $kegiatan_aktif = Kegiatan::all();
        }
        return view('supervisor.kegiatanaktif' ,compact ('kegiatan_aktif'));
    }

    public function detailkegiatan($id)
    {
        $no = 1;
        $kegiatan = Kegiatan::find($id);
        $datakegiatan = Kegiatan::all();
        $mitra = Mitra::all();
        return view('supervisor.detailkegiatan',compact ('kegiatan','datakegiatan','mitra','no'));
    }
    public function tambahmitra(Request $request,$id)
    {
        $kegiatan = Kegiatan::find($id);
        $mitra['mitra'] = $request->input('mitra');
        $kegiatan->mitra()->attach($mitra['mitra']);    
        
        return redirect()->route('dkegiatan',['id'=> $id])->withToastSuccess('Mitra Berhasil Ditambahkan');
            //KegiatanMitra::create(['mitra_id'=> ($request->$mitra)]);
    
        
        
    }
    public function tambah(Request $request)
    {
        //Input Arsip
        $arsip = new ArsipKegiatan();
        $arsip-> kegiatan = $request->kegiatan;
        $arsip-> seksi = $request->seksi;
        $arsip-> tahun = $request->tahun;
        $arsip->save();
        
        //Input Kegiatan
        $request->request->add(['arsip_id' => $arsip->id]);
        $kegiatan = Kegiatan::create($request->all());
        return redirect('/kegiatan')->withToastSuccess(' Kegiatan Berhasil Ditambahkan! '); 
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan/edit',['kegiatan' => $kegiatan]);
    }
    public function update(Request $request,$id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->update($request->all());
            return redirect('/kegiatan')->withToastSuccess('Data Berhasil Diupdate');
      
        
    }
    public function hapus($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete($kegiatan);
        return redirect('/kegiatan')->withToastSuccess('Data Telah Dihapus');
    }

    public function arsipkegiatan(Request $request)
    {
        if($request->has('cari'))
        {
            $data_kegiatan = Kegiatan::where('nama','LIKE','%' .$request->cari. '%')->get();
        }else {
            $data_kegiatan = Kegiatan::all();
        }
        
        return view('kegiatan.arsipkegiatan', compact('data_kegiatan')); 
    }
    public function detailarsip($id)
    {
        $no = 1;
        $kegiatan = Kegiatan::find($id);

        return view('kegiatan/detailarsip',compact ('kegiatan','no'));

    }

}
