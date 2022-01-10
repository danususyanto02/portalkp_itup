@extends('layout.main')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4> <strong>BERITA KP</strong> </h4>
        </div>
        <form action="
        @if (auth()->user()->role_id==1)
             {{route('super_admin.beritakp.update',$berita->id)}}
             @endif
             @if (auth()->user()->role_id==2)
             {{route('staf_prodi.beritakp.update',$berita->id)}}
             @endif
             @if (auth()->user()->role_id==3)
             {{route('pejabat_prodi.beritakp.update',$berita->id)}}
             @endif
        " 
        method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="p-0 mx-3 mt-3 position-relative z-index-12">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="form-group">
                  <label for="nomor_induk" class="form-control-label">Info Berita KP</label>
                  <textarea name="info_berita" id="summernote" class="form-control">{!!$berita->info_berita   !!}  </textarea>
                </div>
                  <div class="form_group">
                      <button type="submit" class="btn btn-success" onclick="return confirm('Data Sudah Benar ?')"> 
                        SAVE
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  @endsection