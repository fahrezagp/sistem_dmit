@extends('layouts.master')
@section('pengolahan','active')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Data Kegiatan</h3>
          <!-- Tombol Tambah Data -->
          <button type="button" class="btn btn-primary float-end btn-icon-split" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>  
            </span> 
            <span class="text">Tambah Kegiatan</span> 
            </button>
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
                            @foreach($data_kegiatan as $kegiatan )
                            <td>{{$kegiatan->kegiatan}}</td>
                            <td>{{$kegiatan->seksi}}</td>
                            <td>{{$kegiatan->tahun}}</td>
                            <td>
                              <a href="kegiatan/{{$kegiatan->id}}/edit" class="btn btn-warning btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Lihat kegiatan      " >
                                <i class="fas fa-pen"></i>
                              </a>
                              <a href="kegiatan/{{$kegiatan->id}}/hapus" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data" 
                                onclick="return confirm ('Apakah Yakin Akan Menghapus Data ?')">
                                <i class="fas fa-trash"></i>
                              </a>
                            </td>
                        </tr>
                    @endforeach
                          </tbody>
                </table>
                </div>
              </div>
                <!-- Tambah Data -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content">
                  <div class="modal-header font-light">
                    <h5 class="modal-title" id="tambahLabel">Tambah Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="/kegiatan/tambah" method="POST">
                      {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="" class="form-label"> Kegiatan</label>
                          <textarea name="kegiatan" value="kegiatan" class="form-control form-control-user"  aria-describedby="" placeholder="Masukan Kegiatan" required></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Seksi</label>
                          <select name="seksi" class="form-select form-select-sm" aria-label=".form-select-sm ">
                              <option selected>Pilih Seksi</option>
                              <option value="Tata Usaha">Tata Usaha</option>
                              <option value="Sosial">Sosial</option>
                              <option value="Produksi">Produksi</option>
                              <option value="Distribusi ">Distribusi</option>
                              <option value="Neraca">Neraca</option>
                              <option value="IPDS">IPDS</option>
                            </select>
                         </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tahun</label>
                            <input name="tahun" type="number" class="form-control" id="" aria-describedby="" placeholder="Masukan Tahun" required>
                          </div>
                        
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                 
                </div>
              </div>
            </div>
     
        </div>
    </div>


@endsection