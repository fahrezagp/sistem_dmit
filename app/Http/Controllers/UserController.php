<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

;
class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_user = User::where(['role','name','email'],'LIKE','%' .$request->cari. '%')->get();
        }else {
            $data_user = User::all();
        }
        
        return view('user.index', compact('data_user')); 
    }
    public function tambah(Request $request)
    {
        //Input User
        $user = new User;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = bcrypt('password') ;
        $user->remember_token = Str::random(60);
        $user->save();

        return redirect('/user')->withToastSuccess(' User Berhasil Ditambahkan! '); 
         
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('user/edit',['user' => $user]);
    }
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/user')->withToastSuccess('Data Berhasil Diupdate');
      
    }
    public function hapus($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return redirect('/user')->withToastSuccess('Data Telah Dihapus');
    }
    public function gantipassword($id)
    {
        $user = User::find($id);
        return view('admin.gantipassword',['user' => $user]);
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

          if(Hash ::check($password_lama, $pas_lama)){
            //$pas_lama->update(['password'=> Hash::make($request->password_baru)]);
           $user->update(['password'=> Hash::make($request->password_baru)]);
            //return dd();
            return redirect()->route('passadmin',['id'=> $id])->withToastSuccess('Password berhasil diganti','success');
          }
          else{ 
             return back()->with('toast_error','Password belum sesuai');
          }
    } 
}
