@extends('layout.main')
@section('content')


<div class="container-fluid">

  <strong>Edit Pejabat Prodi</strong>
  </div>
<form action="{{route('super_admin.data-staf-prodi.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
<div class="form-group">
      <label for="nama" class="form-control-label">Nama</label>
      <input placeholder="your name" type="text" name="nama" id="nama" autocomplete="nama" class="form-control" value="{{ $edit->nama ?? '' }}">
  </div>
<div class="form-group">
  <label for="no_telpon" class="form-control-label">No.Telepon</label>
  <input placeholder="nomor telpon" type="no_telpon" name="no_telpon" id="no_telpon" autocomplete="no_telpon" class="form-control" value="{{ $edit->no_telpon ?? '' }}">
</div>
    <div class="px-4 py-3 text-right sm:px-6">

      <button type="submit" class="btn bg-gradient-secondary" >

          Save Changes
      </button>
  </div>
</form>
</div>
@endsection