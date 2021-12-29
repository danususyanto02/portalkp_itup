@extends('dashboardmahasiswa.layout.main')
@section('content')
{--<div class="card-body px-0 pt-0 pb-2">
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
        @foreach ($profil as $profils)
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">{{$profils['nama']}}</h6>
              </div>
            </div>
          </td>
          <td>
            <h6 class="mb-0 text-sm">{{$profils['npm']}}</h6>
          </td>
          <td class="align-middle">
            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a>
            &nbsp
            <a  class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Delete User" href="{{route('profil.destroy',$profils->id)}}" onclick="event.preventDefault();
              document.getElementById('delete').submit();">
              
                {!! method_field('DELETE') . csrf_field()!!}

              Delete
              <form id="delete" action="{{route('profil.destroy',$profils->id)}}" method="post">  {!! method_field('delete') . csrf_field()!!}
              </form>
              </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>--}
@endsection