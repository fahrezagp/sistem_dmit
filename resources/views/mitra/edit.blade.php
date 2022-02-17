@extends('layouts.master')
@section('pengolahan','active')

@section('content')
    
<div class="col-10">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h4  class="m-0 font-weight-bold text-primary">Edit Data Mitra</h4>
    <a href="/mitra">
      <button type="button" class="btn btn-primary float-end btn-icon-split" >
              <span class="icon text-white-50">
              <i class="fas fa-chevron-circle-left"></i>
              </span> 
              <span class="text">Kembali</span> 
              </button></a>
    </div>
      <div class="row">
        <div class="card-body">
          <div class="col-10">
            <div class="table-responsive">
              <form action="/mitra/{{$mitra->id}}/update" method="POST">
                {{ csrf_field() }}
                <table class="table table-hover" width="100%" cellspacing="0">
                    <tr>
                      <th>  Nama  </th>
                      <td>:</td>
                      <td><input name="nama" type="text" class="form-control"  aria-describedby="" 
                        placeholder="Masukan Nama Lengkap" value="{{$mitra -> nama}}"></td>
                    </tr>
                    <tr>
                      <th>  Alamat  </th>
                      <td>:</td>
                      <td><textarea name="alamat" type="text" class="form-control"  aria-describedby="" 
                        placeholder="Masukan Alamat Lengkap" value="{{$mitra -> alamat}}">{{$mitra -> alamat}}</textarea>
                      </td>
                    </tr>
                    <tr>
                      <th>  Kecamatan  </th>
                      <td>:</td>
                      <td> 
                        <!--<input type="text" class="form-control" value="{{$mitra->kecamatan->nama_kecamatan}}" > -->
                        
                        <select name="kecamatan_id" id="kecamatan_id" class="form-select form-select-sm" 
                        aria-label=".form-select-sm example">
                        <option value="" selected disabled>{{$mitra->kecamatan->nama_kecamatan}}</option>
                          @foreach ($data_kecamatan['data'] as $kecamatan)  
                                <option value="{{$kecamatan->id}}" >{{$kecamatan->nama_kecamatan}}</option>
                                @endforeach
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>  Kelurahan  </th>
                      <td>:</td>
                      <td>  
                        
                        <select name="kelurahan_id" id="kelurahan_id" class="form-select form-select-sm" 
                        aria-label=".form-select-sm example">
                          <option value="0" selected disabled>{{$mitra->kelurahan->nama_kelurahan}}</option>
                      
                        </select></td>
                    </tr>
                    <tr>
                      <th>  Pendidikan  </th>
                      <td>:</td>
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
                      <td>:</td>
                      <td><input name="no_hp" id="no_hp" type="number" class="form-control"  aria-describedby="" 
                        placeholder="Masukan No Handphone" value="{{$mitra -> no_hp}}"></td>
                    </tr>
                    <tr>
                      <th>  Bank  </th>
                      <td>:</td>
                      <td><input name="bank" id="bank" type="text" class="form-control"  aria-describedby="" 
                        placeholder="Masukan Bank" value="{{$mitra -> bank}}" ></td>
                    </tr>
                    <tr>
                      <th>  No Rekening  </th>
                      <td>:</td>
                      <td><input name="no_rek" id="no_rek" type="number" class="form-control"  aria-describedby="" 
                        placeholder="Masukan No Rekening" value="{{$mitra -> no_rek}}" ></td>
                    </tr>
                  
              </table>
              <button type="submit" class="btn btn-primary btn-primary float-end">Simpan</button>
            </form>  
            </div>
            </div>
        </div>
        
            
        </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type='text/javascript'>
          
            $(function(){
              //memilih kecamatan
              $('#kecamatan_id').change(function(){
                //id kecamatan
                var id =$(this).val();
                //mengosongkan dropdown
                $('#kelurahan_id').find('option').not(':first').remove();
                //AJAX request
                $.ajax({
                  url:'/mitra/tampilkelurahan/'+id,
                  type:'get',
                  dataType:'json',
                  success:function(response){

                      var len=0;
                      if(response['data']!= null){
                        len = response['data'].length;
                    }

                    if(len > 0){
                      //Membaca data dan membuat <option>
                      for(var i=0;i<len;i++){

                        var id = response['data'][i].id;
                        var name = response['data'][i].nama_kelurahan;

                        var option = "<option value='"+id+"'>"+name+"</option>";

                        $("#kelurahan_id").append(option);
                      }
                    }
                  }
                });
              });
            });
      
          </script>

@endsection
