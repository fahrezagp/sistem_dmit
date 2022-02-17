@extends('layouts.master')
@section('user','active')
@section('content')

<div class="col-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Edit User</h4>
      </div>
        <div class="row">
          <div class="card-body">
          <div class="col-10">
            <div class="table-responsive">
              <form action="/user/{{$user->id}}/update" method="POST">
                {{ csrf_field() }}
                <table class="table table-hover" width="100%" cellspacing="0">
                    <tr>
                      <th>  Role  </th>
                      <td> <select name="role" id="role" class="form-select form-select-sm">
                        <option value="admin" @if($user->role == 'admin') selected @endif >Admin</option>      
                        <option value="supervisor" @if($user->role == 'supervisor') selected @endif >Supervisor</option>      
                        <option value="mitra" @if($user->role == 'mitra') selected @endif >Mitra</option>      
                    </select></td>
                    </tr>
                    <tr>
                      <th>  Email  </th>
                      <td><input name="email" type="email" id="email" class="form-control"  aria-describedby="" 
                        placeholder="Masukan Email " value="{{$user -> email}}"></td>
                    </tr>
                   
                    <tr >
                      <td class="border-0"></td>
                      <td class="border-0">
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </td>
                    </tr>
                    
                  </form>   
              </table>
             
            </div>
            </div>
          </div>
            </div>
    </div>
  </div>

@endsection