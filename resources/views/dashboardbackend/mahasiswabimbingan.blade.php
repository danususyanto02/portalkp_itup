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
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="d-flex flex-column h-100">
                        <h5 class="font-weight-bolder">Mahasiswa Bimbingan</h5>
                        <table>
                          <thead>
                            <tr>
                              <th>Mahasiswa</th>
                              <th>Dosen Pembimbing</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($mahasiswa as $item )
                              <tr>
                                <td>{{$item->nama ?? ''}}</td>
                                <td>{{$item->dosen->nama ?? '' }}</td>
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