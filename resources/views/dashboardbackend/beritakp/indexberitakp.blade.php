@extends('layout.main')
@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
             <a href="
             @if (auth()->user()->role_id==1)
             {{route('super_admin.beritakp.create')}}
             @endif
             @if (auth()->user()->role_id==2)
             {{route('staf_prodi.beritakp.create')}}
             @endif
             @if (auth()->user()->role_id==3)
             {{route('pejabat_prodi.beritakp.create')}}
             @endif
            "> <button type="button" class="btn btn-success" >Buat Berita KP Baru</button></a>
              <h6>BERITA KP</h6>
              
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Berita</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Berita</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($beritakp as $data => $databerita)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{++$data}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{!!$databerita->info_berita!!}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$databerita->created_at->format('d M Y')}}</h6>
                      </td>
                      <td class="align-middle">
                        <a href="
                        @if (auth()->user()->role_id==1)
                        {{url('admin/beritakp/'.$databerita->id.'/edit')}}
                         @endif
                         @if (auth()->user()->role_id==2)
                         {{url('pejabat-prodi/beritakp/'.$databerita->id.'/edit')}}
                         @endif
                        @if (auth()->user()->role_id==3)
                        {{url('staf-prodi/beritakp/'.$databerita->id.'/edit')}}
                        @endif


                        
                        " class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        &nbsp
						            <a  class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Delete User" href="
                         @if (auth()->user()->role_id==1)
                           {{route('super_admin.beritakp.destroy',$databerita->id)}}
                            @endif
                          @if (auth()->user()->role_id==3)
                            {{route('staf_prodi.beritakp.destroy',$databerita->id)}}
                           @endif
                           @if (auth()->user()->role_id==3)
                           {{route('pejabat_prodi.beritakp.store')}}
                           @endif
                       " onclick="event.preventDefault();
                          document.getElementById('delete').submit();">
                          
                            {!! method_field('DELETE') . csrf_field()!!}

                          Delete
                          <form id="delete" action="
                            @if (auth()->user()->role_id==1)
                            {{route('super_admin.beritakp.destroy',$databerita->id)}}
                            @endif
                            @if (auth()->user()->role_id==2)
                            {{route('pejabat_prodi.beritakp.destroy',$databerita->id)}}
                            @endif
                            @if (auth()->user()->role_id==3)
                            {{route('staf_prodi.beritakp.destroy',$databerita->id)}}
                            @endif" 
                            method="post">  {!! method_field('delete') . csrf_field()!!}
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