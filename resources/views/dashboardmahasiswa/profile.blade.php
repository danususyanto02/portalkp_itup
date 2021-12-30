@extends('layout.main')
@section('content')


<div class="container-fluid">
<form action="{{ route('mahasiswa.profile.update', [Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
  
  @method('PUT')
  @csrf

</div>

<div class="form-group">
<div class="card card-frame">
  <div class="card-body">
   <strong>NPM : &nbsp {{ $user->nomor_induk ?? '' }}</strong> 
  </div>
</div>
</div>
<div class="form-group">
      <label for="nama" class="form-control-label">Nama Lengkap</label>

      <input placeholder="your name" type="text" name="nama" id="nama" autocomplete="nama" class="form-control" value="{{ $user->detail_mahasiswa->nama ?? '' }}" required>
  </div>
  <div class="form-group">
    <label for="alamat" class="form-control-label">Alamat</label>

    <input placeholder="your alamat" type="text" name="alamat" id="alamat" autocomplete="alamat" class="form-control" value="{{ $user->detail_mahasiswa->alamat ?? '' }}" required>
  </div>
  <div class="form-group">
    <label for="email" class="form-control-label">Email Address</label>

    <input placeholder="your email" type="email" name="email" id="email" autocomplete="email" class="form-control" value="{{ $user->email ?? '' }}" required>
</div>
<div class="form-group">
  <label for="no_telpon" class="form-control-label">No.Telepon</label>

  <input placeholder="nomor telpon" type="no_telpon" name="no_telpon" id="no_telpon" autocomplete="no_telpon" class="form-control" value="{{ $user->detail_mahasiswa->no_telpon ?? '' }}" required>
</div>
<div class="form-group">
  <label for="sel1">Jenis Kelamin</label>
  <select class="form-control" type="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin" autocomplete="jenis_kelamin" value="{{ $user->detail_mahasiswa->jenis_kelamin ?? ''}}" required>
    <option>Laki-Laki</option>
    <option>Perempuan</option>
  </select>
</div>
<div class="form-group">
  <label for="tempat_lahir" class="form-control-label">Tempat Lahir</label>
  <input placeholder="tempat_lahir" type="tempat_lahir" name="tempat_lahir" id="tempat_lahir" autocomplete="tempat_lahir" class="form-control" value="{{ $user->detail_mahasiswa->tempat_lahir ?? '' }}" required>
</div>
<div class="form-group">
  <label for="tanggal lahir" class="form-control-label">Tanggal Lahir</label>
  <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" autocomplete="tanggal_lahir" placeholder="tanggal_lahir" value="{{ $user->detail_mahasiswa->tanggal_lahir ?? '' }}" required>
</div>
<div class="form-group">
  <label for="">Dosen Pembimbing</label>
  <select class="form-control" id="dospem_id"  type="dospem_id" name="dospem_id" id="dospem_id" >
    @foreach ($dosen as $datadosen)
    <option value="{{$datadosen->id}}">{{$datadosen['nama']}}</option>
    {{-- <option value="{{$jadwal_kps['id']}}">{{$jadwal_kps['nama']}} {{ $user->detail_mahasiswa->dospem_id ?? ''}}</option> --}}
    @endforeach
  </select>
</div> 
    {{-- <div class="form-group">
        <label for="nama" class="form-control-label">Nama</label>
        <input class="form-control" type="text" value="nama" id="nama">
    </div>
    <div class="form-group">
        <label for="npm" class="form-control-label">NPM</label>
        <input class="form-control" type="search" value="npm" id="npm">
    </div>
    <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input class="form-control" type="email" value="email" id="email">
    </div> --}}
    {{-- <div class="form-group">
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
    </div> --}}
    <div class="px-4 py-3 text-right sm:px-6">

      <button type="submit" class="btn bg-gradient-secondary" onclick="return confirm('Are you sure want to submit this data ?')">

          Save Changes
      </button>
  </div>
</form>
</div>
@endsection

