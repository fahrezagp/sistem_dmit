@extends('layouts.master')

@section('content')
@section('about','active')

<div class="row">
    <div class="col-lg-8 mb-1 container ">
        <div class="card bg-light-dashboard text-black shadow-sm" style="border-radius: 2%">
            <div class="card-body">
                <div class="profile-about">
                    <div class="profile-main border-bottom-primary ">
                        <img src="{{asset('style/assets/img/fotoijazah.jpeg')}}" class="img-about" alt="Avatar">
                        <h3 class="name">Fahreza Genta Pratama</h3>
                        <hr>
                        <h4>17170117</h4>
                        <h4>Teknik Informatika</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
