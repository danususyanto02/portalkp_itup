@extends('dashboardstaff.layoutadmin.main')
@section('content')
<div class="container-fluid py-4">
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <a href="{{ url('/dashboard/video/create') }}"> <button type="button" class="btn btn-success " >Upload Video Baru</button></a>
                <h6>Table Video</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id File</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Video</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Video</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($video as $key=>$data)
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm ">{{++$key}}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$data->id}}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold mb-0">{{$data->title}}</span>
                        </td>
                        <td class="align-middle text-center text-sm">        
                            <iframe class="border-radius-lg" width="426" height="240" src="{{url('storage/file/'.$data->video)}}" allowfullscreen></iframe>
                        </td>
                        <td class="align-middle text-center">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          &nbsp;
                          &nbsp;
                          <a  class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Delete User" href="{{route('video.destroy',$data->id)}}" onclick="event.preventDefault();
                            document.getElementById('delete').submit();">
                            
                              {!! method_field('DELETE') . csrf_field()!!}
  
                            Delete
                            <form id="delete" action="{{route('video.destroy',$data->id)}}" method="post">  {!! method_field('delete') . csrf_field()!!}
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
    </div>
</div>
@endsection