@extends('layout.main')
@section('content')
<form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label >Nama File</label>
        <input type="text" name="nama" class="form-control" >
      </div>
      <div class="input-group mb-3">
        <input type="file" name="file" class="form-control" for="file " id="file">
      </div>
      <button type="submit" value="submit" class="btn btn-primary">Upload</button>
</form>
@endsection