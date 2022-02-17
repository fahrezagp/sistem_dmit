@extends('layouts.master')
@section('dashboard','active')

@section('content')
        <div class="row">
            <div class="col-lg-12 mb-1">
                <div class="card bg-light-dashboard text-black shadow">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h2 class="m-0 font-weight-normal text-primary">Dashboard</h2>
                        </div>
                        <div class="text-lg">
                            Selamat Datang di DMIT Sistem Informasi Mitra BPS Cimahi
                        </div> <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-1 mb-1">
                                <div class="card border-left-success shadow-sm h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                    Jumlah Mitra</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mitra}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                
                            <div class="col-xl-3 col-md-1 mb-1">
                                <div class="card border-left-success shadow-sm h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                    Kegiatan Berjalan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kegiatan}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                        <br>
                    <div class="row">
                        <div class="col-xl-12 col-md-1 mb-1">
                            <div class="card border-left-success shadow-sm h-100 py-2">
                                <div class="card-body">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h2 class="m-0 font-weight-normal text-primary">Daftar Mitra</h2>
                                    </div>
                                <div class="table-responsive">
                                    <table class="table table-striped"  width="100%" cellspacing="0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kelurahan</th>
                                            <th>Kegiatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="even">
                                        @foreach($data_mitra as $mit)
                                        <td>{{$mit->nama}}</td>
                                        <td>{{$mit->kelurahan->nama_kelurahan}}</td>
                                        
                                        <td>
                                            <ul>
                                            @foreach ($mit->kegiatan as $keg)
                                            <li>{{$keg->kegiatan}}</li>
                                            @endforeach
                                        </ul>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                                    
                                </table>
                            </div>
                            </div>
                            </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
       

@endsection