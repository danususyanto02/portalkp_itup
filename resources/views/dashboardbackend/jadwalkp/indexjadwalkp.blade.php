@extends('layout.main')
@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              @if (auth()->user()->role_id==3)
             <a href="
              @if (auth()->user()->role_id==1)
              {{route('super_admin.jadwalkp.create')}}
              @endif
              @if (auth()->user()->role_id==3)
              {{route('staf_prodi.jadwalkp.create')}}
              @endif "> <button type="button" class="btn btn-success " >Buat Jadwal Baru</button></a>
             @endif

             @if (auth()->user()->role_id==1)
             <a href="
              @if (auth()->user()->role_id==1)
              {{route('super_admin.jadwalkp.create')}}
              @endif
              @if (auth()->user()->role_id==3)
              {{route('staf_prodi.jadwalkp.create')}}
              @endif "> <button type="button" class="btn btn-success " >Buat Jadwal Baru</button></a>
             @endif
              <h6>Jadwal KP</h6>
              
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">  Kegiatan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Dari Tanggal</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sampai Tanggal</th>
                
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jadwalkp as $jadwal_kps)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$jadwal_kps->kegiatan}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{{$jadwal_kps->daritanggal}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$jadwal_kps->sampaitanggal}}</h6>
                      </td>
                      @if (auth()->user()->role_id==1)
                      <td class="align-middle text-center">
                        <form action="
                          @if (auth()->user()->role_id==1)
                         {{url('admin/jadwalkp/'.$jadwal_kps->id.'/edit')}}
                          @endif
                          @if (auth()->user()->role_id==3)
                          {{url('staf-prodi/jadwalkp/'.$jadwal_kps->id.'/edit')}}
                          @endif

                         " method="GET">
                            <button type="submit" class="btn  btn-sm">edit</button>
                        </form>
                        @endif

                        @if (auth()->user()->role_id==3)
                      <td class="align-middle text-center">
                        <form action="
                          @if (auth()->user()->role_id==1)
                         {{url('admin/jadwalkp/'.$jadwal_kps->id.'/edit')}}
                          @endif
                          @if (auth()->user()->role_id==3)
                          {{url('staf-prodi/jadwalkp/'.$jadwal_kps->id.'/edit')}}
                          @endif

                         " method="GET">
                            <button type="submit" class="btn  btn-sm">edit</button>
                        </form>
                        @endif

                      @if (auth()->user()->role_id==1)
                          <form action="
                          @if (auth()->user()->role_id==1)
                          {{ route('super_admin.jadwalkp.destroy', $jadwal_kps->id) }}
                          @endif
                          @if (auth()->user()->role_id==3)
                          {{ route('staf_prodi.jadwalkp.destroy', $jadwal_kps->id) }}
                          @endif
                          " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn  btn-sm">Delete</button>
                        </form>
                          
                      </td>
                      @endif

                      @if (auth()->user()->role_id==3)
                          <form action="
                          @if (auth()->user()->role_id==1)
                          {{ route('super_admin.jadwalkp.destroy', $jadwal_kps->id) }}
                          @endif
                          @if (auth()->user()->role_id==3)
                          {{ route('staf_prodi.jadwalkp.destroy', $jadwal_kps->id) }}
                          @endif
                          " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn  btn-sm">Delete</button>
                        </form>
                          
                      </td>
                      @endif

                      
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