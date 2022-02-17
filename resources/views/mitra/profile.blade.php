@extends('layouts.master')

@section('content')

<div class="card-profile o-hidden border-left-success shadow-sm my-5"  style="height:754px;">
	<div class="clearfix">
		<div class="profile-left">
			<div class="profile-header">
				<div class="profile-main">
					<img src="{{asset('style/assets/img/undraw_profile.svg')}}" class="img-profile" alt="Avatar">
					<h3 class="name">{{$mitra->nama}}</h3>
				</div>
			</div>
			<div class="card-profile shadow-sm ">
				<div class="profile-info">
					Data Pokok
					@if(auth()->user()->role == 'mitra')
					<a href="/profilemitra/{{$mitra->id}}/ubah">
						<button type="button" class="btn btn-primary float-end btn-icon-split" >
								<span class="icon text-white-50">
								<i class="fas fa-pen"></i>  
								</span> 
								<span class="text">Ubah</span> 
								</button></a>
					@endif
					<hr>
					<div class="profile-detail">
						<div class="table-responsive">
							<table class="table table-profile">
								<tbody>
									<tr>
										<th>Nama</th>
										<td>{{$mitra->nama}}</td>
									</tr>
									<tr>
										<th>Alamat</th>
										<td>{{$mitra->alamat}}</td>
									</tr>
									<tr>
										<th>Kelurahan</th>
										<td>{{$mitra->kelurahan->nama_kelurahan}}</td>
									</tr>
									<tr>
										<th>Kecamatan</th>
										<td>{{$mitra->kecamatan->nama_kecamatan}}</td>
									</tr>
									<tr>
										<th>Pendidikan</th>
										<td>{{$mitra->pendidikan}}</td>
									</tr>
									<tr>
										<th>No HP</th>
										<td>{{$mitra->no_hp}}</td>
									</tr>
									<tr>
										<th>Bank</th>
										<td>{{$mitra->bank}}</td>
									</tr>
									<tr>
										<th>No Rekening</th>
										<td>{{$mitra->no_rek}}</td>
									</tr>
								</tbody>
							</table>
							
						</div>
					</div>
					<hr>
					@if(auth()->user()->role == 'mitra')
					<a href="mitra/{{$mitra->user_id}}/gantipassword">
						<button type="button" class="float-end btn btn-danger btn-icon-split">
						<span class="icon text-white-50">
							<i class="fas fa-key"></i>  
							</span> 
							<span class="text">Ganti Password</span> 
					</button></a>
					@endif
			</div>
		</div>
		
		</div>
		<div class="profile-right">
			<h4 class="heading">Riwayat Kegiatan</h4>
			<hr>
			<div class="table-responsive">
				<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr class="even">
						<th>Kegiatan</th>
						<th>Tahun</th>
					</tr>
				</thead>
				<tbody>
					@if($mitra->kegiatan == null)
					<tr>
						<td>Belum mengikuti kegiatan</td>
					</tr>
					@else
					@foreach ($mitra->kegiatan as $mk)
					<tr>
						<td>{{$mk->kegiatan}}</td>
						<td>{{$mk->tahun}}</td>
					</tr>
					@endforeach
					@endif
				</tbody>
				</table>
			</div>
			<hr>
			
		</div>
	</div>

</div>   


@endsection