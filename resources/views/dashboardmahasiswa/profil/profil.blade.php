@extends('dashboardmahasiswa.layout.main')
@section('content')
<div class="container-fluid">
<form action="{{route('profil.store')}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
        <label for="nama" class="form-control-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="nama" id="nama">
    </div>
    <div class="form-group">
        <label for="npm" class="form-control-label">NPM</label>
        <input type="text" name="npm" class="form-control" value="npm" id="npm">
    </div>
{{--     
    <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input class="form-control" type="email" value="email" id="email">
    </div>
    <div class="form-group">
        <label for="alamat" class="form-control-label">Alamat</label>
        <input class="form-control" type="url" value="alamat" id="alamat">
    </div>
    <div class="form-group">
        <label for="no telp" class="form-control-label">No Telepon</label>
        <input class="form-control" type="tel" value="no telp" id="no telp">
    </div>
    <div class="form-group">
        <label for="password" class="form-control-label">Password</label>
        <input class="form-control" type="password" value="password" id="password">
    </div>
    <div class="form-group">
        <label for="tempat lahir" class="form-control-label">Tempat Lahir</label>
        <input class="form-control" type="number" value="tempat lahir" id="tempat lahir">
    </div>
    <div class="form-group">
        <label for="tanggal lahir" class="form-control-label">Tanggal Lahir</label>
        <input class="form-control" type="date" value="tanggal lahir" id="tanggal lahir">
    </div>
    <div class="form-group">
      <label for="jenis-kelamin" class="form-control-label">Jenis Kelamin</label>
      <div class="form-check mb-3">
        <input class="form-check-input" type="radio" name="laki-laki" id="laki-laki">
        <label class="custom-control-label" for="laki-laki" value="Laki-laki">Laki-laki</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="perempuan" id="perempuan">
        <label class="custom-control-label" for="perempuan" value="Perempuan">Perempuan</label>
      </div>
    </div>
    <div class="form-group">
      <label for="sel1">Dosen Pembimbing</label>
      <select class="form-control" id="sel1">
        <option>Adi Wahyu Pribadi, S.Si, M.Kom</option>
        <option>Amir Murtako, S.Kom, M.Kom</option>
        <option>Bambang Riono, S.Kom, MMSI</option>
        <option>Desti Fitriati, S.Kom, M.Kom</option>
        <option>Gregorius Hendita A.K., S.Si, M.Cs</option>
      </select> 
    </div>--}}
    <button type="submit" value="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection