@extends('layout.main')
@section('content')


<div class="container-fluid">
  <strong>Edit mahasiswa</strong>
</div>
<form action="{{route('super_admin.data-mahasiswa.update',$edit->id)}}" method="POST" enctype="multipart/form-data">


@csrf
@method('PUT')
<div class="form-group">
      <label for="nama" class="form-control-label">Nama</label>

      <input placeholder="your name" type="text" name="nama" id="nama" autocomplete="nama" class="form-control" value="{{ $edit->nama ?? '' }}">
  </div>
  <div class="form-group">
    <label for="alamat" class="form-control-label">Alamat</label>

    <input placeholder="your alamat" type="text" name="alamat" id="alamat" autocomplete="alamat" class="form-control" value="{{ $edit->alamat ?? '' }}">
  </div>
<div class="form-group">
  <label for="no_telpon" class="form-control-label">No.Telepon</label>

  <input placeholder="nomor telpon" type="number" name="no_telpon" id="no_telpon" autocomplete="no_telpon" class="form-control" value="{{ $edit->no_telpon ?? '' }}">
</div>
<div class="form-group">
  <label for="sel1">Jenis Kelamin</label>
  <select class="form-control" type="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin" autocomplete="jenis_kelamin" value="{{ $edit->jenis_kelamin ?? ''}}">
    <option>Laki-Laki</option>
    <option>Perempuan</option>
  </select>
</div>
<div class="form-group">
  <label for="tempat_lahir" class="form-control-label">Tempat Lahir</label>
  <input placeholder="tempat_lahir" type="tempat_lahir" name="tempat_lahir" id="tempat_lahir" autocomplete="tempat_lahir" class="form-control" value="{{ $edit->tempat_lahir ?? '' }}">
</div>
<div class="form-group">
  <label for="tanggal lahir" class="form-control-label">Tanggal Lahir</label>
  <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" autocomplete="tanggal_lahir" placeholder="tanggal_lahir" value="{{ $edit->tanggal_lahir ?? '' }}">
</div> 
    <div class="px-4 py-3 text-right sm:px-6">

      <button type="submit" class="btn bg-gradient-secondary">

          Save Changes
      </button>
  </div>
</form>
</div>
@endsection