@extends('layout.main')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <div class="card">
                
                <div class="card-body p-3">
                  <div class="col-md-3 ">
                    <form action="">
                      <div class="input-group ">
                       <button class="btn btn-outline-primary mb-0" type="submit" >Cari</button>
                        <input type="text" class="form-control text-center " placeholder="Cari Berdasarkan Nama Dosen" name="search" >
                      </div>
                    </form>
                 </div>
                 <br> 
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="d-flex flex-column h-100">
                        <h5 class="font-weight-bolder">Mahasiswa Bimbingan</h5> 
                        <table>
                          <thead>
                            <tr>
                              <th>Dosen Pembimbing</th>
                              <th>Mahasiswa </th>
                              <th>Nomor Induk </th>
                              <th>Nomor Telpon </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($dosen as $item )
                              <tr>
                                <td>{{$item->nama ?? ''}}</td>
                                <td>{{$item->dospem->nama ?? '' }}</td>
                                <td>{{$item->dospem->user->nomor_induk?? '' }}</td>
                                <td>{{$item->dospem->no_telpon?? '' }}</td>
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
        </div>
      </div>
    </div>
    @endsection