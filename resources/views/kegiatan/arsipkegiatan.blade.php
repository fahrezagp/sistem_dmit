@extends('layouts.master')
@section('arsip','active')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Arsip Kegiatan</h3>
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
                            <a href="detailarsip/{{$kegiatan->id}}" class="btn btn-success btn-circle btn-sm"
                                data-toggle="tooltip" data-placement="right" title="Lihat kegiatan      ">
                                <i class="fas fa-search"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
