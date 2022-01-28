<?php

namespace App\Http\Controllers;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use App\Models\JadwalKp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $jadwalkp = JadwalKp::find($id);
        $jadwalkp->update($request->all());   
        return redirect()->route('jadwalkp.index');
    }

    public function store(Request $request){
        $jadwal=new JadwalKp;
        $jadwal->kegiatan=$request->kegiatan;
        $jadwal->daritanggal=$request->daritanggal;
        $jadwal->sampaitanggal=$request->sampaitanggal;
        $jadwal->users_id=Auth::user()->id;
        $jadwal->save();
        return redirect('/jadwalkp');
    }

    public function destroy($id)
    {
        $jadwalkp=JadwalKp::find($id);
        $jadwalkp->delete();
        return redirect()->back();
    }

}
