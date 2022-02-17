<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Support\Facades\Hash;
use App\Models\Kegiatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class MitraController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_mitra = Mitra::where('nama','LIKE','%' .$request->cari. '%')->get();
        }else {
            $data_mitra = Mitra::all();
        }
        $data_kecamatan['data'] = Kecamatan::orderby("nama_kecamatan","asc")->select('id','nama_kecamatan')->get();
       
        
        return view('mitra.index',compact('data_mitra','data_kecamatan')); 

    }
    public function profilemitra()
    {
        $mitra =  auth()->user()->mitra;
        return view('mitra.profile', compact('mitra'));
        
    }
    public function profmit($id)
    {
        $mitra = Mitra::find($id);
        return view('mitra.profile', compact('mitra'));
    }
    public function kecamatan()
    {
        $kecamatan = Kecamatan::all();
        return view('mitra.index', ['kecamatan' => $kecamatan]);
    }
    public function tampilkelurahan($id=0)
    {   
        $data_kelurahan['data'] = Kelurahan::orderby("nama_kelurahan","asc")
        ->select('id','nama_kelurahan')
        ->where('kecamatan_id',$id)->get();

        return response()->json($data_kelurahan);
    }

    public function tampilkelurahan2($mId=0)
    {   
        $data_kelurahan['data'] = Kelurahan::orderby("nama_kelurahan","asc")
        ->select('id','nama_kelurahan')
        ->where('kecamatan_id',$mId)->get();

        return response()->json($data_kelurahan);
    }

    public function kelurahan()
    {
        $kelurahan = Kelurahan::all();
        return view('mitra.index', compact('kelurahan'));
    }
    
    public function tambah(Request $request)
    {
        //Input Users
        $user = new User;
        $user->role = 'mitra';
        $user->email = $request->email;
        $user->password = bcrypt('password') ;
        $user->remember_token = Str::random(60);
        $user->save();

        //Input Mitra
        $request->request->add(['user_id' => $user->id]);
        $mitra = Mitra::create($request->all());
        return redirect('/mitra')->withToastSuccess(' Mitra Berhasil Ditambahkan! '); 
         
    }
    public function edit($id)
    {
        $mitra = Mitra::find($id);
        $data_kecamatan['data'] = Kecamatan::orderby("nama_kecamatan","asc")->select('id','nama_kecamatan')->get();
        return view('mitra/edit',compact('mitra','data_kecamatan'));
    }
    public function update(Request $request,$id)
    {
        $mitra = Mitra::find($id);
        $mitra->update($request->all());
            return redirect('/mitra')->withToastSuccess('Data Berhasil Diupdate');
     
        
    }
    public function hapus($id)
    {
        $mitra = Mitra::find($id);
        $mitra->delete($mitra);
        return redirect('/mitra')->withToastSuccess('Data Telah Dihapus');
    }

    public function jobdesk()
    {
        $mitra =  auth()->user()->mitra;
        return view('mitra.jobdesk', compact('mitra'));
    }

    public function ubahprofile($id)
    {
        $mitra = Mitra::find($id);
        return view('mitra/ubahprofile',['mitra' => $mitra]);
    }

    public function simpanprofile(Request $request,$id)
    {
        $mitra = Mitra::find($id);
        $mitra->update($request->all());
        if ($mitra->update !== 0)
        {
            return redirect('/profilemitra')->withToastSuccess('Profile Berhasil Diubah!');
        }
        else{
            return redirect('/profilemitra');
        }
        
    }
    public function gantipassword($id)
    {
        $user = User::find($id);
        return view('mitra/gantipassword',['user' => $user]);
    }
    public function simpanpassword (Request $request, $id)
    {   $user = User::find($id);
        $this->validate($request, 
        [
            'password_lama'=> 'required',
            'password_baru' => 'min:8', 'confirmed'
          ]);
          $pas_lama = $user->password;
          $password_lama = request('password_lama');
          $password =  bcrypt (request('password_baru'));

          if(Hash::check($password_lama, $pas_lama)){
            //$pas_lama->update(['password'=> Hash::make($request->password_baru)]);
           $user->update(['password'=> Hash::make($request->password_baru)]);
            //return dd();
            return back()->withToastSuccess('Password berhasil diganti');
          }
          else{ 
              return back()->with('toast_error', 'Password belum sesuai');
          }
    } 

}
