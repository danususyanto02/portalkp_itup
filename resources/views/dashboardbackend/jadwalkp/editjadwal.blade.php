@extends('dashboardbackend.layoutadmin.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4> <strong>UBAH JADWAL KP</strong> </h4>
          </div>
          <form action="{{ route('jadwalkp.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-0 mx-3 mt-3 position-relative z-index-12">
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <div class="form-group">
                    <label for="nomor_induk" class="form-control-label">Kegiatan</label>
                    <input placeholder="Kegiatan" type="text" name="kegiatan" id="kegiatan" class="form-control" value="{{$jadwalkp->kegiatan}}" required>
                    <div class="form-group">
                        <label for="tanggal lahir" class="form-control-label">Dari Tanggal</label>
                        <input class="form-control" type="date" name="daritanggal" id="daritanggal" value="{{$jadwalkp->daritanggal}}"  required>
                      </div>
                      <div class="form-group">
                        <label for="tanggal lahir" class="form-control-label">Sampai Tanggal</label>
                        <input class="form-control" type="date" name="sampaitanggal" id="sampaitanggal" value="{{$jadwalkp->sampaitanggal}}"required>
                      </div>
                    <div class="form_group">
                        <button type="submit" class="btn btn-success" onclick="return confirm('Data Sudah Benar ?')"> 
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
    </div>
@endsection