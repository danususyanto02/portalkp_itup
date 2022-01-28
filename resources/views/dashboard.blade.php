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
                          <td>{{$item->nama ??''}}</td>
                          <td>{{$item->dospem_count ?? ''}}</td>
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
      </div>
      @foreach ($bukupanduan as $key=>$data)
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Download Buku Panduan KP</h5>
            <a href="{{url('storage/file/dokumen/'.$data->file)}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Download</a>
          </div>
        </div>
        @endforeach
        
        <br>
        @foreach ($filebriefing as $key=>$data)
        <div class="card card-frame">
          <div class="card-body">
            <h5>Download File Briefing KP</h5>
            <a href="{{url('storage/file/briefing/'.$data->file)}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Download</a>
          </div>
        </div>
        @endforeach
      </div>
     
      <div class="row">
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Video Briefing</h5>
            @foreach ($video as $key=>$data)  
            <video width="426" height="240" controls>
              <source src="{{url('storage/file/'.$data->video)}}" type="video/mp4">         
          </video>
        @endforeach
           
          </div>
        </div>
      </div>
      @if(auth()->user()->role_id==1)
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Data Diri</h5>
            <div>
              <strong>Nomor Induk : {{ Auth::user()->nomor_induk ?? '' }}</strong><br>
            </div>
          </div>
        </div>
      </div>
      @endif

      @if(auth()->user()->role_id==2)
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Data Diri</h5>
            <div>
              <strong>Nomor Induk : {{ Auth::user()->nomor_induk ?? '' }}</strong><br>
              <strong>Nama : {{ Auth::user()->pejabatprodi->nama ?? ''}}</strong><br>
              <strong>Nomor Telepon : {{ Auth::user()->pejabatprodi->no_telpon ?? ''}}</strong><br>
              <strong>Nama : {{ Auth::user()->pejabatprodi->jabatan ?? ''}}</strong><br>
            </div>
          </div>
        </div>
      </div>
      @endif
      @if(auth()->user()->role_id==3)
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Data Diri</h5>
            <div>
              <strong>Nomor Induk : {{ Auth::user()->nomor_induk ?? '' }}</strong><br>
              <strong>Nama : {{ Auth::user()->stafprodi->nama ?? ''}}</strong><br>
              <strong>Nomor Telepon : {{ Auth::user()->stafprodi->no_telpon ?? ''}}</strong><br>
            </div>
          </div>
        </div>
      </div>
      @endif
      
      
      @if(auth()->user()->role_id==4)
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Data Diri</h5>
            <div>
              <strong>Nomor Induk : {{ Auth::user()->nomor_induk ?? ''}}</strong><br>
              <strong>Nama : {{ Auth::user()->dosen->nama ?? ''}}</strong><br>
              <strong>Nomor Telepon : {{ Auth::user()->dosen->no_telpon ?? ''}}</strong><br>
            </div>
          </div>
        </div>
      </div>
      @endif

      @if(auth()->user()->role_id==5)
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card card-frame">
          <div class="card-body">
            <h5>Data Diri</h5>
            <div>
              <strong>NPM : {{ Auth::user()->nomor_induk ?? ''}}</strong><br>
              <strong>Nama : {{ Auth::user()->detail_mahasiswa->nama ?? ''}}</strong><br>
              <strong>Alamat : {{ Auth::user()->detail_mahasiswa->alamat ?? ''}}</strong><br>
              <strong>Tempat Tanggal Lahir : {{ Auth::user()->detail_mahasiswa->tempat_lahir ?? ''}},  {{ Auth::user()->detail_mahasiswa->tanggal_lahir ?? ''}}</strong><br>
              <strong>Nomor Telepon : {{ Auth::user()->detail_mahasiswa->no_telpon ?? ''}}</strong><br>
              <strong>Dosen Pembimbing : {{ Auth::user()->detail_mahasiswa->dosen->nama ?? ''}}</strong><br>
            </div>
          </div>
        </div>
      </div>
      @endif


    </div>
  </div>


    
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Berita</th>
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
    
    @endsection
