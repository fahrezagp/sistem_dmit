@extends('layouts.master')
@section('pengolahan','active')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary">Data Supervisor</h3>
          <!-- Tombol Tambah Data -->
          <button type="button" class="btn btn-primary float-end btn-icon-split" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>  
            </span> 
            <span class="text">Tambah Supervisor</span> 
            </button>
          </div>
              <div class="card-body">
                <!-- Tabel -->
                <div class="table-responsive">
                  <table class="table table-hover border-bottom-primary" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                      <tbody>
                        <tr class="even">
                          @foreach($data_supervisor as $supervisor )
                          <td>{{$supervisor->nip}}</td>
                          <td>{{$supervisor->nama}}</td>
                          <td>{{$supervisor->jabatan}}</td>
                          <td>
                            <a href="supervisor/{{$supervisor->id}}/edit" class="btn btn-warning btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Edit Data" >
                              <i class="fas fa-pen"></i>
                            </a>
                            <a href="supervisor/{{$supervisor->id}}/hapus" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data" 
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
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header font-light">
                    <h5 class="modal-title" id="tambahLabel">Tambah Supervisor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="/supervisor/tambah" method="POST">
                      {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="" class="form-label">NIP</label>
                          <input name="nip" type="number" class="form-control form-control-user"  aria-describedby="" placeholder="Masukan No Induk Pegawai" required>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Nama</label>
                          <input name="nama" type="text" class="form-control" id="" aria-describedby="" placeholder="Masukan Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="" aria-describedby="" placeholder="Masukan Email" required>
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jabatan</label>
                            <select name="jabatan" class="form-select form-select-sm" aria-label=".form-select-sm ">
                                <option selected>Pilih Jabatan</option>
                                <option value="Kepala BPS">Kepala BPS</option>
                                <option value="Kepala Sub Bagian Tata Usaha">Kepala Sub Bagian Tata Usaha</option>
                                <option value="Stastisi Muda">Stastisi Muda</option>
                                <option value="Stastisi Pertama">Stastisi Pertama</option>
                                <option value="Fungsional Umum">Fungsional Umum</option>
                              </select>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
     
        </div>
    </div>
  
@endsection