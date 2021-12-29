@extends('dashboardbackend.layoutadmin.main')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4> <strong>BUAT USER BARU</strong> </h4>
        </div>
        <form action="{{ route('super_admin.user.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="p-0 mx-3 mt-3 position-relative z-index-12">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="form-group">
                  <label for="nomor_induk" class="form-control-label">Nomor Induk</label>
                  <input placeholder="nomor induk" type="text" name="nomor_induk" id="nomor_induk" autocomplete="nomor_induk" class="form-control" value="{{ $user->nomor_induk ?? '' }}" required>
                <div class="form-group">
                  <label for="password" class="form-control-label">password</label>
                  <input placeholder="your password" type="password" name="password" id="password" autocomplete="password" class="form-control" value="{{ $user->password ?? '' }}" required>
            
                  <div class="form-group">
                  <label for="sel1">Jenis Kelamin</label>
                    <select class="form-control" type="role_id" name="role_id" id="role_id" autocomplete="role_id" value="{{ $user->role_id ?? '' }}" required>
                     <option value="1">Super Admin</option>
                     <option value="2">Pejabat Prodi</option>
                     <option value="3">Staf Prodi</option>
                     <option value="4">Dosen</option>
                     <option value="5">Mahasiswa</option>
                    </select>
                  </div>
                  <div class="form_group">
                      <button type="submit" class="btn btn-success" onclick="return confirm('Data Sudah Benar ?')"> 
                        SAVE
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  @endsection