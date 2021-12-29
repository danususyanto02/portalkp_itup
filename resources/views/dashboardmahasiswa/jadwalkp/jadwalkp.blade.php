@extends('dashboardmahasiswa.layout.main')
@section('content')
<div class="container-fluid">
    <h1>Jadwal Kegiatan Kerja Praktik</h1>
    <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kegiatan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Pengarahan KP</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">11 September 2021</p>
                </td>
              </tr>
              <tr>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Batas pengumpulan form KP yang sudah disetujui oleh dosen pembimbing dan koordinator KP</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">29 Oktober 2021</p>
                  <p class="text-xs font-weight-bold mb-0">Jam 14.00 WIB</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Batas pengumpulan Laporan KP</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">14 Januari 2022</p>
                  <p class="text-xs font-weight-bold mb-0">Jam 14.00 WIB</p>
                </td>
              </tr>
              <tr>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Sidang Evaluasi KP</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">24 s/d 28 Januari 2022</p>
                </td>
              </tr>
              <tr>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Batas pengumpulan Berkas Hardcover KP</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">11 Februari 2022</p>
                  <p class="text-xs font-weight-bold mb-0">Jam 14.00 WIB</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection