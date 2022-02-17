@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-xl-12 col-md-1 mb-1">
        <div class="card border-left-success shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h2 class="m-0 font-weight-normal text-primary">Kegiatan Yang Diikuti</h2>
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
                        </tr>
                        </thead>
                          <tbody>@foreach ($mitra->kegiatan as $m_k)
                            <tr class="even">
                                
                                <td>{{$m_k->kegiatan}}</td>
                                <td>{{$m_k->seksi}}</td>
                                <td>{{$m_k->tahun}}</td>
                                @endforeach
                            </tr>
                              </tbody>
                    </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection