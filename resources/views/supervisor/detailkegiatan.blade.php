@extends('layouts.master')
@section('kegiatanaktif','active')
@section('content')

<div class="row">
    <div class="col-xl-12 col-md-1 mb-1">
        <div class="card border-left-success shadow-sm h-100 py-2">
            <div class="card-body">
                  <a href="/kegiatanaktif">
                    <button type="button" class="btn btn-primary  btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-chevron-circle-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </button></a>
                <hr>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h2 class="m-0 font-weight-normal text-primary">Detail Kegiatan</h2>
                </div>

                <div class="col-xl-6 col-md-1 mb-1">
                    <div class=" table-responsive ">
                        <hr>
                            <table class="table table-borderless table-profile" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <th>Kegiatan</th>
                                        <td>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$kegiatan->kegiatan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Seksi</th>
                                        <td>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$kegiatan->seksi}}</td>

                                    </tr>
                                    <tr>
                                        <th>Tahun</th>
                                        <td>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$kegiatan->tahun}}</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    <hr>
                </div>
                <div class="col-xl-8 col-md-1 mb-1">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4 class="m-0 font-weight-normal text-primary">Mitra Aktif</h4>
                        <button type="button" class="btn btn-primary float-end btn-icon-split" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Mitra</span>
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" width="100%" cellspacing="0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No HP</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="even">
                                    @foreach($kegiatan->mitra as $k_mit)
                                    <td>{{$k_mit->nama}}</td>
                                    <td>{{$k_mit->no_hp}}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header font-light">
                <h5 class="modal-title" id="tambahLabel">Tambah Mitra</h5>

            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <form action="/detailkegiatan/{{$kegiatan->id}}/tambahmitra">
                        {{ csrf_field() }}
                        <table class="table table-striped border-bottom-primary" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kelurahan</th>
                                    <th>Pendidikan</th>
                                    <th>No HP</th>
                                    <th>Bank</th>
                                    <th>No Rekening</th>
                                    <th>Pilih</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($mitra as $mitra)
                                <tr class="even">
                                    <td>{{$no++}}</td>
                                    <td>{{$mitra->nama}}</td>
                                    <td>{{$mitra->alamat}}</td>
                                    <td>{{$mitra->kelurahan->nama_kelurahan}}</td>
                                    <td>{{$mitra->pendidikan}}</td>
                                    <td>{{$mitra->no_hp}}</td>
                                    <td>{{$mitra->bank}}</td>
                                    <td>{{$mitra->no_rek}}</td>
                                    <td>
                                    <input name="mitra[]" id="mitra[]" type="checkbox" class="checkbox"
                                            value="{{$mitra->id}}">
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary float-end btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Simpan</span>
                </button>
                <button type="button" data-bs-dismiss="modal" class="btn btn-danger float-end btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-chevron-circle-left"></i>
                    </span>
                    <span class="text">Batal</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<br>


@endsection
