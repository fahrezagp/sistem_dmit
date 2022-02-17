@extends('layouts.master')

@section('user','active')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Data User</h3>
        <!-- Tombol Tambah Data -->
        <button type="button" class="btn btn-primary float-end btn-icon-split" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah User</span>
        </button>
    </div>
    <div class="card-body">
        <!-- Tabel -->
        <div class="table-responsive">
            <table class="table table-hover border-bottom-primary" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Aksi</th>

                    </tr>
                </thead>

                <tbody>
                    <tr class="even">
                        @foreach($data_user as $user )
                        <td>{{$user->role}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="user/{{$user->id}}/edit" class="btn btn-warning btn-circle btn-sm"
                                data-toggle="tooltip" data-placement="right" title="Edit Data">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="user/{{$user->id}}/hapus" class="btn btn-danger btn-circle btn-sm "
                                data-toggle="tooltip" data-placement="right" title="Hapus Data"
                                onclick="return confirm ('Apakah Yakin Akan Menghapus Data ?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr> @endforeach
                </tbody>


            </table>
        </div>
    </div>
    <!-- Tambah Data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
                <div class="modal-header font-light bg-primary">
                    <h5 class="modal-title" id="tambahLabel">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/user/tambah" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="" aria-describedby=""
                                placeholder="Masukan Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Role</label>
                            <select name="role" class="form-select form-select-sm" aria-label=".form-select-sm ">
                                <option selected>Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="supervisor">Supervisor</option>
                                <option value="mitra">Mitra</option>
                            </select>
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


@endsection
