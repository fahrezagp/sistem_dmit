@extends('layouts.master')

@section('content')


    			<div class="card-profile o-hidden border-0 shadow-lg my-5">
						<div class="clearfix">
							<div class="profile-left">
								<div class="profile-header">
									<div class="profile-main">
										<img src="{{asset('style/assets/img/undraw_profile.svg')}}" class="img-profile" alt="Avatar">
										<h3 class="name">{{$mitra->nama}}</h3>
									</div>
								</div>
							</div>
							<div class="profile-right">
								<h4 class="heading">Ubah Data Pokok</h4>
								<hr>
								<div class="profile-detail">
									<div class="profile-info">
										<div class=" table-responsive">
                                            <form action="/profilemitra/{{$mitra->id}}/simpanprofile" method="POST">
                                                {{ csrf_field() }}
                                            <table class="table table-profile">
                                                <tbody>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td><input name="nama" type="text" class="form-control "  aria-describedby="" 
                                                            placeholder="Masukan Nama Lengkap" value="{{$mitra -> nama}}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td><textarea name="alamat" type="text" class="form-control"  aria-describedby="" 
                                                            placeholder="Masukan Alamat Lengkap" value="{{$mitra -> alamat}}">{{$mitra -> alamat}}</textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kecamatan</th>
                                                        <td><select name="kecamataan_id" id="kecamatan_id" class="form-select form-select-sm" 
                                                            aria-label=".form-select-sm " disabled>
                                                            <option value="{{$mitra->kecamatan_id}}">{{$mitra->kecamatan->nama_kecamatan}}</option>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kelurahan</th>
                                                        <td><select name="kelurahan_id" id="kelurahan_id" class="form-select form-select-sm" 
                                                            aria-label=".form-select-sm " disabled>
                                                            <option value="{{$mitra->kelurahan_id}}">{{$mitra->kelurahan->nama_kelurahan}}</option>
                                                        </select>
                                                    </td>
                                                    </tr>
                                                    <th>  Pendidikan  </th>
                                                    <td><select name="pendidikan" class="form-select form-select-sm" 
                                                        aria-label=".form-select-sm ">
                                                        <option value="SD Sederajat" @if($mitra->pendidikan == 'SD Sederajat') selected @endif)>SD Sederajat</option>
                                                        <option value="SMP Sederajat" @if($mitra->pendidikan == 'SMP Sederajat') selected @endif)>SMP Sederajat</option>
                                                        <option value="SMA Sederajat" @if($mitra->pendidikan == 'SMA Sederajat') selected @endif)>SMA Sederajat</option>
                                                        <option value="Sarjana" @if($mitra->pendidikan == 'Sarjana') selected @endif)>Sarjana</option>
                                                        <option value="Master" @if($mitra->pendidikan == 'Master') selected @endif)>Master</option>
                                                        <option value="Doctoral" @if($mitra->pendidikan == 'Doctoral') selected @endif)>Doctoral</option>
                                                        <option value="Lainnya" @if($mitra->pendidikan == 'Lainnya') selected @endif)>Lainnya</option>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                    <th>No Handphone  </th>
                                                    <td><input name="no_hp" id="no_hp" type="number" class="form-control"  aria-describedby="" 
                                                        placeholder="Masukan No Handphone" value="{{$mitra -> no_hp}}"></td>
                                                    </tr>
                                                    <tr>
                                                    <th>  Bank  </th>
                                                    <td><input name="bank" id="bank" type="text" class="form-control"  aria-describedby="" 
                                                        placeholder="Masukan Bank" value="{{$mitra -> bank}}" ></td>
                                                    </tr>
                                                    <tr>
                                                    <th>  No Rekening  </th>
                                                    <td><input name="no_rek" id="no_rek" type="number" class="form-control"  aria-describedby="" 
                                                        placeholder="Masukan No Rekening" value="{{$mitra -> no_rek}}" ></td>
                                                    </tr>           
                                                    <tr>
                                                                <th>Email</th>
                                                                <td ><input name="email" type="text" class="form-control" value="{{$mitra->user->email}}" disabled></td>
                                                            </tr>
                                                            </tbody>
                                                            </table>
                                                        <hr>    
                                                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                                        </form>
                                                        </div>

                                        </table>
									</div>
								</div>
							</div>
						</div>
					
    			</div>   


@endsection