@extends('dashboardbackend.layoutadmin.main')
@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
             <a href="{{ route('jadwalkp.create') }}"> <button type="button" class="btn btn-success " >Buat Jadwal Baru</button></a>
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
                      <th class="text-secondary opacity-7"></th>
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
                      <td class="align-middle">
                        <a href="{{url('jadwalkp/'.$jadwal_kps->id.'/edit')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        &nbsp
						            <a  class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Delete User" href="{{route('jadwalkp.destroy',$jadwal_kps->id)}}" onclick="event.preventDefault();
                          document.getElementById('delete').submit();">
                          
                            {!! method_field('DELETE') . csrf_field()!!}

                          Delete
                          <form id="delete" action="{{route('jadwalkp.destroy',$jadwal_kps->id)}}" method="post">  {!! method_field('delete') . csrf_field()!!}
                          </form>
                          </a>
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