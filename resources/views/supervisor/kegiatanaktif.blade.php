@extends('layouts.master')

@section('kegiatanaktif','active')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Kegiatan Aktif</h3>
          
          </div>
              <div class="card-body">
                <!-- Tabel -->
                <div class="table-responsive">
                  <table class="table table-hover border-bottom-primary" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Kegiatan</th>
                        <th>Seksi</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                      <tbody>
                        <tr class="even">
                            @foreach($kegiatan_aktif as $kegiatan )
                            <td>{{$kegiatan->kegiatan}}</td>
                            <td>{{$kegiatan->seksi}}</td>
                            <td>{{$kegiatan->tahun}}</td>
                            <td>
                              <a href="kegiatanaktif/{{$kegiatan->id}}/detailkegiatan" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Lihat kegiatan      " >
                                <i class="fas fa-search"></i>
                              </a>
                             <!-- <a href="supervisorhapus" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data" 
                                onclick="return confirm ('Apakah Yakin Akan Menghapus Data ?')">
                                <i class="fas fa-trash"></i>
                              </a>-->
                            </td>
                        </tr>
                    @endforeach
                          </tbody>
                </table>
                </div>
              </div>
        </div> 

@endsection