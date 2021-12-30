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
                  <h5 class="font-weight-bolder">Jadwal KP</h5>
                  <p>Informasi tentang jadwal kegiatan Kerja Praktik</p>
                  <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{url('/jadwalkp')}}">
                    Selengkapnya
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <h5 class="font-weight-bolder">Jumlah Bimbingan Dosen</h5>
                  <table>
                    <thead>
                      <tr>
                        <th>Dosen</th>
                        <th>Jumlah Mahasiswa Bimbingan</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($list as $item )
                        <tr>
                          <td>{{$item->nama}}</td>
                          <td>{{$item->dospem_count}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <h5 class="font-weight-bolder">Mahasiswa Bimbingan</h5>
                  <table>
                    <thead>
                      <tr>
                        <th>Mahasiswa</th>
                        <th>Dosen Pembimbing</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($mahasiswa as $item )
                        <tr>
                          <td>{{$item->alamat}}</td>
                          <td>{{$item->dosen->nama ?? '' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @foreach ($bukupanduan as $key=>$data)
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Download Buku Panduan KP</h5>
            <a href="{{url('storage/file/panduan/'.$data->file)}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Download</a>
          </div>
        </div>
        @endforeach
        <br>
        @foreach ($filebriefing as $key=>$data)
        <div class="card card-frame">
          <div class="card-body">
            <h5>Download Presentasi Briefing KP</h5>
            <a href="{{url('storage/file/briefing/'.$data->file)}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Download</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{-- <div class="row my-4">
      <div class="card container-fluid" id="berita-jurusan">
        <div class="card-header pb-0" style="background-color: #cb0c9f">
            <div class="">
              <h4 style="color: white">Berita Program Studi</h4>
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
    </div> --}}
    {{-- <div class="row my-4">
      <div class="card container-fluid" id="berita-jurusan">
        <div class="card-header pb-0" style="background-color: #cb0c9f">
            <div class="">
              <h4 style="color: white">Berita Kerja Praktik</h4>
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
    </div> --}}
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Berita Kerja Praktik</h6>
              
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">  No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">  Info Berita</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pengirim</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($beritakp as $berita=>$data)
                    <tr>
                      <td>
                        <h6>{{++$berita}}</h6>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{!!$data->info_berita!!}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{{$data->pengirim}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$data->created_at}}</h6>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Berita Program Studi</h6>
              
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">  No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">  Info Berita</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pengirim</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($beritaprodi as $berita=>$data)
                    <tr>
                      <td>
                        <h6>{{++$berita}}</h6>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$data->info_berita}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{{$data->pengirim}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$data->created_at}}</h6>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection
