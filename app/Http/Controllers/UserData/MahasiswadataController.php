<?php

namespace App\Http\Controllers\UserData;

use App\Http\Controllers\Controller;
use App\Models\DetailMahasiswa;
use Illuminate\Http\Request;

class MahasiswadataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mahasiswa = DetailMahasiswa::all();
        if($request->has('search')){
            $mahasiswa= DetailMahasiswa::where('nama','like','%'.$request->search.'%')->get();
        }else{
            $mahasiswa = DetailMahasiswa::all();
        }
        return view ('form.mahasiswa.indexform', compact('mahasiswa'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = DetailMahasiswa::find($id);
        return view('form.mahasiswa.editform',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $beritaprodi= Beritaprodi::find($id);
        // $beritaprodi->info_berita=$request->info_berita;
        // $beritaprodi->pengirim=$request->pengirim;
        // $beritaprodi->update();
        // return redirect()->route('beritaprodi.index');

        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_telpon' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|string',
        ]);

        $datauser = DetailMahasiswa::find($id);
        $datauser->update([
            'nama' => $request -> nama,
            'alamat' => $request -> alamat,
            'no_telpon' => $request -> no_telpon,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'tempat_lahir' => $request -> tempat_lahir,
            'tanggal_lahir' => $request -> tanggal_lahir,
        ]); 
        return redirect()->route('super_admin.data-mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
