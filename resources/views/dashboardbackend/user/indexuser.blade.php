@extends('layout.main')
@section('content')

        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
             <a href="{{ url('admin/user/create') }}"> <button type="button" class="btn btn-success" >Buat User Baru</button></a>
              <h4>USER</h4>
            </div>
            <div class="card-header justify-content-end ">
              <div class="col-md-3 ">
                 <form action="">
                   <div class="input-group ">
                    <button class="btn btn-outline-primary mb-0" type="submit" >Cari</button>
                     <input type="text" class="form-control text-center " placeholder="Cari Berdasarkan Nomor Induk" name="search" >
                   </div>
                 </form>
              </div>
             </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Induk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $users)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$users->nomor_induk?? ''}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">
                          @if($users->role_id==1)
                            {{$users->jenis_role ?? ''}}
                          @endif
                          @if($users->role_id==2)
                            {{$users->pejabatprodi->nama ?? ''}}
                          @endif
                          @if($users->role_id==3)
                            {{$users->stafprodi->nama ?? ''}}
                          @endif
                          @if($users->role_id==4)
                            {{$users->dosen->nama ?? ''}}
                          @endif
                          @if($users->role_id==5)
                            {{$users->detail_mahasiswa->nama ?? ''}}
                          @endif
                        </h6>
                      </td>
                      <td class="align-middle text-center">
                        <form action="{{url('admin/user/'.$users->id.'/edit')}}" method="GET">
                            <button type="submit" class="btn  btn-sm">edit</button>
                        </form>
                          <form action="{{ route('super_admin.user.destroy', $users->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
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
@endsection