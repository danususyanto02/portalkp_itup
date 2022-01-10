@extends('layout.main')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4> <strong>Ubah User</strong> </h4>
        </div>
        <form action="{{ route('super_admin.user.update',$user->id) }}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
          <div class="p-0 mx-3 mt-3 position-relative z-index-12">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                
                  <div class="form-group">
                    <label for="nomor_induk" class="form-control-label"></label>
                    <input placeholder="nomor induk" type="number" name="nomor_induk" id="nomor_induk" class="form-control" value="{{ $user->nomor_induk ?? '' }}" required>
                  </div>
              
                <div class="form-group">
                  <label for="password" class="form-control-label"></label>
                  <input placeholder="Masukkan Password" type="password" name="password" id="password" class="form-control"  required>
                </div>
                  </div>
                  <div class="form_group">
                      <button type="submit" class="btn btn-success"> 
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