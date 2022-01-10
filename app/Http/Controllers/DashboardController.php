<?php

namespace App\Http\Controllers;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use App\Models\Beritakp;
use App\Models\Beritaprodi;
use App\Models\DetailMahasiswa;
use App\Models\Dosen;
use App\Models\File;
use App\Models\FileBriefing;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $mahasiswa = DetailMahasiswa::all();
        $video = Video::latest()->paginate(1);
        
        $list = Dosen::withCount('dospem')
        ->orderBy('created_at')
        ->get();
        $bukupanduan = File::latest()->paginate(1);
        $filebriefing = FileBriefing::latest()->paginate(1);
        $beritakp = Beritakp::orderBy('created_at','ASC')->get();
        $beritaprodi = Beritaprodi::orderBy('created_at','ASC')->get();

        return view('dashboard',compact('beritaprodi','beritakp','bukupanduan','filebriefing','list','mahasiswa','video'));
           
    }

    public function show($id)
    {
        $data=Video::all();
        return view('dashboard', compact('data'));
    }


    
}

