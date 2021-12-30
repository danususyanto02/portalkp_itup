@extends('layout.main')
@section('content')
<form action="{{route('video.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label >Nama File</label>
        <input type="text" name="judul" class="form-control" >
      </div>
      <div class="input-group mb-3">
        <input type="file" name="video" class="form-control" for="video " id="video">
      </div>
      <button type="submit" value="submit" class="btn btn-primary">Upload</button>
</form>
@endsection