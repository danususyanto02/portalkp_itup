<?php

namespace App\Http\Controllers;

use App\Models\JadwalKp;
use Illuminate\Http\Request;
use PDO;

class JadwalKpController extends Controller
{
    public function index()
    {
        $jadwalkp = jadwalkp::paginate(5);

        return view('dashboardstaff.jadwalkp.indexjadwalkp', [
            'jadwalkp' => $jadwalkp
        ]);
    }

    public function create()
    {
        return view('dashboardstaff.jadwalkp.createjadwalkp');
    }

    public function show(){
        
    }
    

    public function destroy(JadwalKp $jadwalkp)
    {
        $jadwalkp->delete();
        return redirect()->back();
    }

}
