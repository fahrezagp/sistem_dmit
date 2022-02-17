@extends('layouts.master')

@section('content')


    			<div class="card-profile o-hidden border-0 shadow-lg my-5">
						<div class="clearfix">
							<div class="profile-left">
								<div class="profile-header">
									<div class="profile-main">
										<img src="{{asset('style/assets/img/undraw_profile.svg')}}" class="img-profile" alt="Avatar">
										<h3 class="name">{{$user->supervisor->nama}}</h3>
									</div>
								</div>
							</div>
							<div class="profile-right">
                                <a href="/profile">
                                    <button type="button" class="btn btn-primary float-end btn-icon-split" >
                                            <span class="icon text-white-50">
                                            <i class="fas fa-chevron-circle-left"></i>
                                            </span> 
                                            <span class="text">Kembali</span> 
                                            </button></a>
								<h4 class="heading">Ganti Password</h4>
								<hr>
								<div class="profile-detail">
									<div class="profile-info">
										<div class=" table-responsive">
                                            <form action="/supervisor/{{$user->id}}/simpanpassword" method="post">
                                                {{ csrf_field() }}
                                                @method("PATCH")
                                            <table class="table table-hover table-profile">
                                                <tbody>
                                                    <tr>
                                                        <th>Masukan Password Lama</th>
                                                        <td><input type="password" name="password_lama" id="password_lama" class="form-control @error('password_lama') is-invalid @enderror"></td>
                                                   @error('password_lama')
                                                        <div class="text-danger mt-2">{{$message}}</div>
                                                   @enderror
                                                    </tr>
                                                    <tr>
                                                        <th>Masukan Password Baru</th>
                                                        <td><input type="password" name="password" id="password" class="form-control"></td>
                                                        @error('password')
                                                        <div class="text-danger mt-2">{{$message}}</div>
                                                   @enderror
                                                    </tr>
                                                    <tr>
                                                        <th>Konfirmasi Password Baru</th>
                                                        <td><input type="password" name="password_confirmation" id="password_confirmation" class="form-control"></td>
                                                       
                                                    </tr>
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                        </table>
                                            <button type="submit" class="btn btn-danger btn-icon-split float-end">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-key"></i>  
                                                </span> 
                                                <span class="text">Simpan</span> 
                                        </button></form>
									</div>
								</div>
								<hr>
								
							</div>
						</div>
					
    			</div>   


@endsection