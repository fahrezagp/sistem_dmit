@extends('layouts.master')

@section('content')


    			<div class="card-profile o-hidden border-0 shadow-lg my-5">
						<div class="clearfix">
							<div class="profile-left">
								<div class="profile-header">
									<div class="profile-main">
										<img src="{{asset('style/assets/img/undraw_profile.svg')}}" class="img-profile" alt="Avatar">
										<h3 class="name">{{$supervisor->nama}}</h3>
									</div>
								</div>
							</div>
							<div class="profile-right">
								<h4 class="heading">Data Pokok</h4>
								<hr>
								<div class="profile-detail">
									<div class="profile-info">
										<div class=" table-responsive">
                                            <form action="/supervisor/{{$supervisor->id}}/simpanprofile" method="POST">
                                                {{ csrf_field() }}
                                            <table class="table table-profile">
                                                <tbody>
                                                    <tr>
                                                        <th>NIP</th>
                                                        <td><input name="nip" type="text" class="form-control "  aria-describedby="" 
                                                            placeholder="Masukan Nomor Induk Pegawai" value="{{$supervisor -> nip}}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td><input name="nama" type="text" class="form-control"  aria-describedby="" 
                                                            placeholder="Masukan Nama Lengkap" value="{{$supervisor -> nama}}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jabatan</th>
                                                        <td><select name="jabatan" class="form-select form-select-sm" 
                                                            aria-label=".form-select-sm example">\
                                                              <option value="Kepala BPS" @if($supervisor->jabatan == 'Kepala BPS') selected @endif)>Kepala BPS</option>
                                                              <option value="Kepala Sub Bagian Tata Usaha" @if($supervisor->jabatan == 'Kepala Sub Bagian Tata Usaha') selected @endif)>Kepala Sub Bagian Tata Usaha </option>
                                                              <option value="Stastisi Muda" @if($supervisor->jabatan == 'Stastisi Muda') selected @endif)>Stastisi Muda</option>
                                                              <option value="Stastisi Pertama" @if($supervisor->jabatan == 'Stastisi Pertama') selected @endif)>Stastisi Pertama</option>
                                                              <option value="Fungsional Umum" @if($supervisor->jabatan == 'Fungsional Umum') selected @endif)>Fungsional Umum</option>
                                                            </select></td>
                                                    </tr>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td ><input name="email" type="text" class="form-control" value="{{$supervisor->user->email}}" disabled></td>
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