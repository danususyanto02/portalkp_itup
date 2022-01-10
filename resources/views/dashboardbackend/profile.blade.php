
@extends('layout.main')
@section('content')


@if (auth()->user()->role_id==2)
<div class="container-fluid">
<form action="{{ route('pejabat_prodi.profile.update', [Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="form-group">
      <label for="name" class="form-control-label">Nama Pejabat Prodi</label>

      <input placeholder="your name" type="text" name="nama" id="nama" autocomplete="nama" class="form-control" value="{{ $user->dosen->nama ?? '' }}" required>
  </div>

@endif


@if (auth()->user()->role_id==3)
<div class="container-fluid">
<form action="{{ route('staf_prodi.profile.update', [Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
  @method('PUT')

  <div class="form-group">
    <label for="name" class="form-control-label">Nama Staf Prodi</label>

    <input placeholder="your name" type="text" name="nama" id="nama" autocomplete="nama" class="form-control" value="{{ $user->dosen->nama ?? '' }}" required>
</div>
@endif


@if (auth()->user()->role_id==4)
<div class="container-fluid">
<form action="{{ route('dosen.profile.update', [Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf

<div class="form-group">
  <label for="nomor_induk" class="form-control-label">Nomor Induk Dosen</label>

  <input placeholder="nomor induk" type="text" disabled="disabled" name="nomor_induk" id="nomor_induk" autocomplete="nomor_induk" class="form-control" value="{{ $user->nomor_induk ?? '' }}" required>
</div>
<div class="form-group">
      <label for="name" class="form-control-label">Nama Dosen</label>

      <input placeholder="your name" type="text" name="nama" id="nama" autocomplete="nama" class="form-control" value="{{ $user->dosen->nama ?? '' }}" required>
  </div>
  <div class="form-group">
    <label for="email" class="form-control-label">Email Address</label>

    <input placeholder="your email" type="email" name="email" id="email" autocomplete="email" class="form-control" value="{{ $user->email ?? '' }}" required>
</div>
<div class="form-group">
  <label for="no_telpon" class="form-control-label">No.Telepon</label>

  <input placeholder="nomor telpon" type="no_telpon" name="no_telpon" id="no_telpon" autocomplete="no_telpon" class="form-control" value="{{ $user->dosen->no_telpon ?? '' }}" required>
</div>
@endif

      <button type="submit" class="btn bg-gradient-secondary" onclick="return confirm('Sudah Benar?')">
          Save Changes
      </button>
  </div>

</form>
</div>
@endsection

