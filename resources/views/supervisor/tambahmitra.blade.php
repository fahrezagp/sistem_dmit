@extends('layouts.master')
@section('tambahmitra','active')
@section('content')

<div class="col-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      <h4  class="m-0 font-weight-bold text-primary">Tambah Mitra</h4>
      </div>
        <div class="row">
          <div class="card-body">
            <div class="col-10">
              <div class="table-responsive">
                <form action="/supervisor/tambahmitra" method="POST">
                  {{ csrf_field() }}
                  <table class="table" width="100%" cellspacing="0">
                      <tr>
                        <th>  Nama  </th>
                        <td>:</td>
                        <td><input name="nama" type="text" class="form-control"  aria-describedby="" 
                          placeholder="Masukan Nama Lengkap" value="" required></td>
                      </tr>
                      <tr>
                        <th>  Email  </th>
                        <td>:</td>
                        <td><input name="email" type="text" class="form-control"  aria-describedby="" 
                          placeholder="Masukan Email" value="" required></td>
                      </tr>
                      
                      <tr>
                        <th>  Kecamatan  </th>
                        <td>:</td>
                        <td>
                          <select name="kecamatan_id" class="form-select form-select-sm" 
                          aria-label=".form-select-sm example" id="kecamatan_id">
                          <option value="">Pilih Kecamatan</option>
                          @foreach ($data_kecamatan['data'] as $kecamatan)
                          <option value="{{$kecamatan->id}}" >{{$kecamatan->nama_kecamatan}}</option>
                          @endforeach
                        </select></td>
                      </tr>
                      <tr>
                        <th>  Kelurahan  </th>
                        <td>:</td>
                        <td> 
                           <select name="kelurahan_id" class="form-select form-select-sm" 
                          aria-label=".form-select-sm example" id="kelurahan_id">
                          <option value="0" > Pilih Kelurahan </option>
                          </select></td>
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
                url:'supervisor/tampilkelurahan/'+id,
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