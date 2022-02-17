@extends('layouts.master')
@section('kegiatanaktif','active')

@section('content')

<div class="row">
    <div class="col-xl-12 col-md-1 mb-1">
        <div class="card border-left-success shadow-sm h-100 py-2">
            <div class="card-body">
                <a href="/arsipkegiatan">
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
                        <h4 class="m-0 font-weight-normal text-primary">Mitra Yang Berpartisipasi</h4>
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

@endsection
