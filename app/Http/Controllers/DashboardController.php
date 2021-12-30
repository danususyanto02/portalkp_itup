<?php

namespace App\Http\Controllers;

use App\Models\Beritakp;
use App\Models\Beritaprodi;
use App\Models\File;
use App\Models\FileBriefing;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
      
        $bukupanduan = File::paginate(1);
        $filebriefing = FileBriefing::paginate(1);
        $beritakp = Beritakp::orderBy('created_at','ASC')->get();
        $beritaprodi = Beritaprodi::orderBy('created_at','ASC')->get();
        return view('dashboard',compact('beritaprodi','beritakp','bukupanduan','filebriefing'));

        
    }

    public function download(Request $request, $file)
    { 
        return response()->download(public_path('storage/file/panduan'.$file));
     
    }

    public function downloadbriefing(Request $request, $file)
    { 
        return response()->download(public_path('storage/file/briefing'.$file));
     
    }
    
}

