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
								<a href="/supervisor/{{$supervisor->id}}/ubah">
								<button type="button" class="btn btn-primary float-end btn-icon-split" >
										<span class="icon text-white-50">
										<i class="fas fa-pen"></i>  
										</span> 
										<span class="text">Ubah</span> 
										</button></a>

								<h4 class="heading">Data Pokok</h4>
								<hr>
								<div class="profile-detail">
									<div class="profile-info">
										<div class=" table-responsive">
                                            <form action="/supervisor/{{$supervisor->id}}/profile" method="POST">
                                                {{ csrf_field() }}
                                            <table class="table table-hover table-profile">
                                                <tbody>
                                                    <tr>
                                                        <th>NIP</th>
                                                        <td>{{$supervisor->nip}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td>{{$supervisor->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jabatan</th>
                                                        <td>{{$supervisor->jabatan}}</td>
                                                    </tr>
													<tr>
														<th>Email</th>
														<td>{{$supervisor->user->email}}</td>
													</tr>
                                                </tbody>
                                            </table>
                                            </form>
                                        </div>
                                        </table>
									</div>
								</div>
								<hr>
								<a href="supervisor/{{$supervisor->user_id}}/gantipassword">
									<button type="button" class="btn btn-danger btn-icon-split">
									<span class="icon text-white-50">
										<i class="fas fa-key"></i>  
										</span> 
										<span class="text">Ganti Password</span> 
								</button></a>
							</div>
						</div>
					
    			</div>   


@endsection