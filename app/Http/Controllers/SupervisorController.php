<?php


namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class SupervisorController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_supervisor = Supervisor::where(['nama','nip'],'LIKE','%' .$request->cari. '%')->get();
        }else {
            $data_supervisor = Supervisor::all();
        }
        
        return view('supervisor.index', compact('data_supervisor')); 
    }

    public function profile()
    {
        $supervisor =  auth()->user()->supervisor;
        return view('supervisor.profile', compact('supervisor'));
        
    }

    public function ubahprofile($id)
    {
        $supervisor = Supervisor::find($id);
        return view('supervisor/ubahprofile',['supervisor' => $supervisor]);
    }

    public function simpanprofile(Request $request,$id)
    {
        $supervisor = Supervisor::find($id);
        $supervisor->update($request->all());
        
            return redirect('/profile')->withToastSuccess('Profile Berhasil Diubah!');
        
    }

    public function tambah(Request $request)
    {
        //Input Users
        $user = new User;
        $user->role = 'supervisor';
        $user->email = $request->email;
        $user->password = bcrypt('password') ;
        $user->remember_token = Str::random(60);
        $user->save();

        //Input Supervisor
        $request->request->add(['user_id' => $user->id]);
        $supervisor = Supervisor::create($request->all());
        return redirect('/supervisor')->withToastSuccess(' Supervisor Berhasil Ditambahkan! '); 
         
    }

    public function edit($id)
    {
        $supervisor = Supervisor::find($id);
        return view('supervisor/edit',['supervisor' => $supervisor]);
    }
    public function update(Request $request,$id)
    {
        $supervisor = Supervisor::find($id);
        $supervisor->update($request->all());
            return redirect('/supervisor')->withToastSuccess('Data Berhasil Diupdate');
        
        
    }
    public function hapus($id)
    {
        $supervisor = Supervisor::find($id);
        $supervisor->delete($supervisor);
        return redirect('/supervisor')->withToastSuccess('Data Telah Dihapus');
    }

    public function indextambahmitra(Request $request)
    {
        $data_kecamatan['data'] = Kecamatan::orderby("nama_kecamatan","asc")->select('id','nama_kecamatan')->get();

        return view('supervisor.tambahmitra', compact('data_kecamatan'));     
    }
    public function tampilkelurahan($id=0)
    {   
        $data_kelurahan['data'] = Kelurahan::orderby("nama_kelurahan","asc")
        ->select('id','nama_kelurahan')
        ->where('kecamatan_id',$id)->get();

        return response()->json($data_kelurahan);
    }
    public function tambahmitra(Request $request)
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
         return redirect('/tambahmitra')->withToastSuccess(' Mitra Berhasil Ditambahkan! ');
    }
    
    public function gantipassword($id)
    {
        $user = User::find($id);
        return view('supervisor/gantipassword',['user' => $user]);
    }
    public function simpanpassword (Request $request, $id)
    {   $user = User::find($id);
        $this->validate($request, 
        [
            'password_lama'=> 'required',
            'password' => 'min:8', 'confirmed'
          ]);
          $pas_lama = $user->password;
          $password_lama = request('password_lama');
          $password =  bcrypt (request('password'));

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
