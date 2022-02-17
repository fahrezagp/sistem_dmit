@extends('layouts.master')
@section('pengolahan','active')
@section('content')
    
<div class="col-10">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Edit Data Supervisor</h4>
    </div>
      <div class="row">
        <div class="card-body">
        <div class="col-10">
          <div class="table-responsive">
            <form action="/supervisor/{{$supervisor->id}}/update" method="POST">
              {{ csrf_field() }}
              <table class="table table-hover" width="100%" cellspacing="0">
                  <tr>
                    <th>  NIP  </th>
                    <td><input name="nip" type="text" class="form-control"  aria-describedby="" 
                      placeholder="Masukan Nomor Induk Pegawai" value="{{$supervisor -> nip}}"></td>
                  </tr>
                  <tr>
                    <th>  Nama  </th>
                    <td><input name="nama" type="text" class="form-control"  aria-describedby="" 
                      placeholder="Masukan Nama Lengkap" value="{{$supervisor -> nama}}"></td>
                  </tr>
                  <tr>
                    <th>  Jabatan  </th>
                    <td><select name="jabatan" class="form-select form-select-sm" 
                      aria-label=".form-select-sm example">\
                        <option value="Kepala BPS" @if($supervisor->jabatan == 'Kepala BPS') selected @endif)>Kepala BPS</option>
                        <option value="Kepala Sub Bagian Tata Usaha" @if($supervisor->jabatan == 'Kepala Sub Bagian Tata Usaha') selected @endif)>Kepala Sub Bagian Tata Usaha </option>
                        <option value="Stastisi Muda" @if($supervisor->jabatan == 'Stastisi Muda') selected @endif)>Stastisi Muda</option>
                        <option value="Stastisi Pertama" @if($supervisor->jabatan == 'Stastisi Pertama') selected @endif)>Stastisi Pertama</option>
                        <option value="Fungsional Umum" @if($supervisor->jabatan == 'Fungsional Umum') selected @endif)>Fungsional Umum</option>
                      </select></td>
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
