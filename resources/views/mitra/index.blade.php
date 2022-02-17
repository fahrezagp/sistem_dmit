@extends('layouts.master')
@section('content')
@section('pengolahan','active')

    
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h3 class="m-0 font-weight-bold text-primary">Data Mitra</h3>
              <!-- Tombol Tambah Data -->
                  <button type="button" class="btn btn-primary float-end btn-icon-split" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>  
                  </span> 
                  <span class="text">Tambah Mitra</span> 
                  </button>
              </div>
                  <div class="card-body">
                    <!-- Tabel -->
                    <div class="table-responsive">
                      <table class="table table-hover border-bottom-primary" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kelurahan</th>
                            <th>Pendidikan</th>
                            <th>No HP</th>
                            <th>Bank</th>
                            <th>No Rekening</th>
                            <th>Aksi</th>
                        </tr>
                          </thead>
                          <tbody>
                        <tr class="even">
                            @foreach($data_mitra as $mitra)
                            <td><a href="/prof_mitra/{{$mitra->id}}">{{$mitra->nama}}</a></td>
                            <td>{{$mitra->alamat}}</td>
                            <td>{{$mitra->kelurahan->nama_kelurahan}}</td>
                            <td>{{$mitra->pendidikan}}</td>
                            <td>{{$mitra->no_hp}}</td>
                            <td>{{$mitra->bank}}</td>
                            <td>{{$mitra->no_rek}}</td>
                            <td>
                              <a href="mitra/{{$mitra->id}}/edit" class="btn btn-warning btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Edit Data" >
                                <i class="fas fa-pen"></i>
                              </a>
                              <a href="mitra/{{$mitra->id}}/hapus" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data" 
                                onclick="return confirm ('Apakah Yakin Akan Menghapus Data ?')">
                                <i class="fas fa-trash"></i>
                              </a>
                              
                            </td>
                            
                        </tr>
                        @endforeach
                      </tbody>  
                    </table>
                    </div>
                  </div>
                    <!-- Tambah Data -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header font-light">
                        <h5 class="modal-title" id="tambahLabel">Tambah Mitra</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="/mitra/tambah" method="POST">
                          {{ csrf_field() }}
                            <div class="mb-3">
                              <label for="" class="form-label">Nama</label>
                              <input name="nama" type="text" class="form-control form-control-user"  aria-describedby="" placeholder="Masukan Nama Lengkap" required>
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input name="email" type="email" class="form-control" id="" aria-describedby="" placeholder="Masukan Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat Rumah</label>
                                <textarea name="alamat" type="text" class="form-control" id="alamat" aria-describedby="" placeholder="Masukan Alamat"></textarea>
                              </div>
                              <div class="mb-3">
                                  <label for="Masukan Kecamatan">Kecamatan</label>
                                <select name="kecamatan_id" id="kecamatan_id" class="form-select form-select-sm"  aria-label=".form-select-sm ">
                                <option selected disabled> Pilih Kecamatan </option>
                                @foreach ($data_kecamatan['data'] as $kecamatan)  
                                <option value="{{$kecamatan->id}}" >{{$kecamatan->nama_kecamatan}}</option>
                                @endforeach
                                
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="Masukan Kelurahan">Kelurahan</label>
                             <select name="kelurahan_id" id="kelurahan_id" class="form-select form-select-sm"  aria-label=".form-select-sm ">
                              <option value="0" disabled> Pilih Kelurahan </option>
                            </select>
                            
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">Pendidikan</label>
                              <select name="pendidikan" class="form-select form-select-sm" aria-label=".form-select-sm ">
                                <option selected>Pilih Pendidikan</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="Sarjana">Sarjana</option>
                                <option value="Master">Master</option>
                                <option value="Doctoral">Doctoral</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">No Handphone</label>
                              <input name="no_hp" type="number" class="form-control" id="" aria-describedby="" placeholder="Masukan Nomer Handphone" required>
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">Bank</label>
                              <input name="bank" type="text" class="form-control" id="" aria-describedby="" placeholder="Masukan Bank" >
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">No Rekening</label>
                              <input name="no_rek" type="number" class="form-control" id="" aria-describedby="" placeholder="Masukan Nomer Rekening" >
                            </div>
                
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                          </form>
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
                var idd =$(this).val();
                //mengosongkan dropdown
                $('#kelurahan_id').find('option').not(':first').remove();
                //AJAX request
                $.ajax({
                  url:'mitra/tampilkelurahan/'+idd,
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
