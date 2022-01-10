@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <a href="
                
                @if (auth()->user()->role_id==1)
                    {{route('super_admin.filebriefing.create')}}
                @endif
                @if (auth()->user()->role_id==3)
                    {{route('staf_prodi.filebriefing.create')}}
                @endif
                
               "> <button type="button" class="btn btn-success " >Upload Video Baru</button></a>
                <h6>Table Video</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id File</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama File</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">File</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($filebriefing as $key=>$data)
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
                          <span class="text-xs font-weight-bold mb-0">{{$data->nama}}</span>
                        </td>
                        <td class="align-middle text-center text-sm">  
                          <button class="btn  btn-sm bg-gradient-secondary "><a href="{{ asset('storage/file/briefing/'.$data->file)}}" target="_blank"> Download PDF </a></button>
                        </td>

                        <td class="align-middle text-center">
                         
                        <form method="post" action="
                        
                        @if (auth()->user()->role_id==1)
                        {{route('super_admin.filebriefing.destroy',$data->id)}}
                         @endif
                        @if (auth()->user()->role_id==3)
                        {{route('staf_prodi.filebriefing.destroy',$data->id)}}
                         @endif
                        
                        ">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn  btn-sm">Delete</button>
                        </form>
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