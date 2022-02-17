@extends('layouts.master')
@section('pengolahan','active')

@section('content')

<div class="col-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-primary">Edit Data Kegiatan</h4>
      </div>
        <div class="row">
            <div class="card-body">
          <div class="col-10">
            <div class="table-responsive">
                <form action="/kegiatan/{{$kegiatan->id}}/update" method="POST">
                    {{ csrf_field() }}
                    <table class="table table-hovered" width="100%" cellspacing="0">
                        <tr>
                            <th>Kegiatan</th>
                            <td><textarea name="kegiatan" value="{{$kegiatan->kegiatan}}" class="form-control form-control-user"  aria-describedby="" placeholder="Masukan Kegiatan" required>{{$kegiatan->kegiatan}}</textarea></td>
                        </tr>
                        <tr>
                            <th>Seksi</th>
                            <td><select name="seksi" class="form-select form-select-sm" aria-label=".form-select-sm ">
                                
                                <option value="Tata Usaha" @if($kegiatan->seksi == 'Tata Usaha') selected @endif>Tata Usaha</option>
                                <option value="Sosial" @if($kegiatan->seksi == 'Sosial') selected @endif>Sosial</option>
                                <option value="Produksi" @if($kegiatan->seksi == 'Produksi') selected @endif>Produksi</option>
                                <option value="Distribusi " @if($kegiatan->seksi == 'Distribusi') selected @endif>Distribusi</option>
                                <option value="Neraca" @if($kegiatan->seksi == 'Neraca') selected @endif>Neraca</option>
                                <option value="IPDS" @if($kegiatan->seksi == 'IPDS') selected @endif>IPDS</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th>Tahun</th>
                            <td><input name="tahun" type="number" value ="{{$kegiatan->tahun}}" class="form-control" id="" aria-describedby="" placeholder="Masukan Tahun" required></td>
                        </tr>
                        <tr >
                            <td class="border-0"></td>
                            <td class="border-0">
                              <button type="submit" class="btn btn-primary float-end">Simpan</button>
                          </td>
                          </tr>
                    </table>
                </form>
            </div>
          </div>
          </div>
        </div>    
    </div>
</div>
            

@endsection