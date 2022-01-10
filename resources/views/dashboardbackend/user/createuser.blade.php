@extends('layout.main')
    <style>#hidden_div {
      display: none;
    }
    </style>
@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4> <strong>BUAT USER BARU</strong> </h4>
        </div>
        <form action="{{ route('super_admin.user.store') }}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="p-0 mx-3 mt-3 position-relative z-index-12">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="form-group">
                  <label for="nomor_induk" class="form-control-label">Nomor Induk</label>
                  <input placeholder="nomor induk" type="number" name="nomor_induk" id="nomor_induk" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password" class="form-control-label">Password</label>
                  <input placeholder="Masukkan Password" type="password" name="password" id="password" class="form-control"  required>
                </div>
                  <div class="form-group">
                  <label >Jenis Role</label>
                    <select  class="form-control" type="role_id"  name="role_id" id="role_id" autocomplete="role_id" onchange="showDiv('hidden_div', this)" required>
                   
                      @foreach ($role as $item)
                      <option value="{{$item->id}}">{{$item->jenis_role}}</option>
                      @endforeach
                    </select>
                  </div>           
                  <div class="form-group" id="hidden_div">
                    <label for="nama" class="form-control-label">Nama</label>
                    <input placeholder="Masukkan Nama" type="text" name="nama" class="form-control" >
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


  <script type="text/javascript">
    function showDiv(divId, element){
    document.getElementById(divId).style.display = element.value != 1 ? 'block' : 'none';
    }
  </script>
  

 
  @endsection