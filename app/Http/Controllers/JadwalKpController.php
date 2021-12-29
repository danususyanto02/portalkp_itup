<?php

namespace App\Http\Controllers;

use App\Models\JadwalKp;
use Illuminate\Http\Request;
use PDO;

class JadwalKpController extends Controller
{
    public function index()
    {
        $jadwalkp = jadwalkp::orderBy('daritanggal','ASC')->get();

        return view(' dashboardbackend.jadwalkp.indexjadwalkp', [
            'jadwalkp' => $jadwalkp
        ]);
    }
    // dashboardmahasiswa.jadwalkp.jadwalkp

    public function create()
    {
        return view('dashboardbackend.jadwalkp.createjadwalkp');
    }

    public function edit($id){
        $jadwalkp = JadwalKp::find($id);
        return view('dashboardbackend.jadwalkp.editjadwal',compact('jadwalkp'));
    }

    public function update(Request $request, $id){
        $jadwal = JadwalKp::find($id);
        return redirect()->route('jadwalkp.index');
    }

    public function store(Request $request){
        $jadwal=new JadwalKp;
        $jadwal->kegiatan=$request->kegiatan;
        $jadwal->daritanggal=$request->daritanggal;
        $jadwal->sampaitanggal=$request->sampaitanggal;
        $jadwal->save();
        return redirect()->route('jadwalkp.index');
    }

    public function destroy(JadwalKp $jadwalkp)
    {
        $jadwalkp->delete();
        return redirect()->back();
    }

}
