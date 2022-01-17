@extends('layout.main')
@section('content')
<form action="

@if (auth()->user()->role_id==1)
{{route('super_admin.video.store')}}
@endif
@if (auth()->user()->role_id==3)
{{route('staf_prodi.video.store')}}
@endif
" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label >Nama File</label>
        <input type="text" name="judul" class="form-control"  placeholder="Nama File">
      </div>
      <div class="input-group mb-3">
        <input type="file" name="video" class="form-control" for="video " id="video" accept="video/*">
      </div>
      <button type="submit" value="submit" class="btn btn-primary" >Upload</button>
</form>
@endsection