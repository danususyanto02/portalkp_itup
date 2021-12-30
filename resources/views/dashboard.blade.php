@extends('layout.main')
@section('content')
<body class="g-sidenav-show bg-gray-100">

<div class="container-fluid py-4">
    <div class="row mt-4">
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <p class="mb-1 pt-2 text-bold">Jadwal KP</p>
                  <h5 class="font-weight-bolder">Jadwal KP</h5>
                  <p class="mb-5">Informasi tentang jadwal kegiatan Kerja Praktik</p>
                  <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{url('/jadwalkp')}}">
                    Read More
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                <div class="bg-gradient-primary border-radius-lg h-100">
                  <img src="../assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Download Buku Panduan KP</h5>
            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Download</a>
          </div>
        </div>
        <br>
        <div class="card card-frame">
          <div class="card-body">
            <h5>Download Presentasi Briefing KP</h5>
            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Download</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-4">
      <div class="card container-fluid" id="berita-jurusan">
        <div class="card-header pb-0" style="background-color: #cb0c9f">
            <div class="">
              <h4 style="color: white">Berita Jurusan</h4>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-1">
            <h6>No</h6>
          </div>
          <div class="col-lg-2">
            <h6>Tanggal</h6>
          </div>
          <div class="col-lg-7">
            <h6>Info</h6>
          </div>
          <div class="col-lg-2">
            <h6>Pengirim</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-1">
            <p>1</p>
          </div>
          <div class="col-lg-2">
            <p>30/11/2021</p>
          </div>
          <div class="col-lg-7">
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
          </div>
          <div class="col-lg-2">
            <p>Sulthan</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-4">
      <div class="card container-fluid" id="berita-jurusan">
        <div class="card-header pb-0" style="background-color: #cb0c9f">
            <div class="">
              <h4 style="color: white">Berita KP</h4>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-1">
            <h6>No</h6>
          </div>
          <div class="col-lg-2">
            <h6>Tanggal</h6>
          </div>
          <div class="col-lg-7">
            <h6>Info</h6>
          </div>
          <div class="col-lg-2">
            <h6>Pengirim</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-1">
            <p>1</p>
          </div>
          <div class="col-lg-2">
            <p>30/11/2021</p>
          </div>
          <div class="col-lg-7">
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
          </div>
          <div class="col-lg-2">
            <p>Sulthan</p>
          </div>
        </div>
      </div>
    </div>
    @endsection
