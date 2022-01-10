@extends('layout.main')
@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header justify-content-end ">
              <h4><strong>LIST MAHASISWA</strong></h4>
              <div class="mb-3"></div>
              <div class="col-md-3 ">
                 <form action="">
                   <div class="input-group ">
                    <button class="btn btn-outline-primary mb-0" type="submit" >Cari</button>
                     <input type="text" class="form-control text-center " placeholder="Cari Berdasarkan Nama Mahasiswa" name="search" >
                   </div>
                 </form>
              </div>
             </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.Telepon</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis kelamin</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tempat lahir</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal lahir</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NPM</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($mahasiswa as $data )
                    <tr>
                      
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$data->nama ?? ''}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">{{$data->alamat ?? ''}}</h6>
                      </td>
                      <td class=" text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$data->no_telpon ?? ''}}</h6>
                      </td><td class=" text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$data->jenis_kelamin ?? ''}}</h6>
                      </td><td class=" text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$data->tempat_lahir ?? ''}}</h6>
                      </td>
                      </td><td class=" text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$data->tanggal_lahir ?? ''}}</h6>
                      </td>
                    </td><td class=" text-center text-sm">
                      <h6 class="mb-0 text-sm">{{$data->user->nomor_induk ?? ''}}</h6>
                    </td>
                      <td class="align-middle text-center">
                        <form action="{{url('admin/data-mahasiswa/'.$data->id.'/edit')}}" method="GET">
                            <button type="submit" class="btn  btn-sm">edit</button>
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