<?php

namespace App\Http\Controllers;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use App\Models\FileBriefing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
class FileBriefingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $filebriefing=FileBriefing::all();
        return view('dashboardbackend.file.filebriefing.index', compact('filebriefing'), );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboardbackend.file.filebriefing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filebriefing=new FileBriefing();
        $filebriefing->nama=$request->nama;
        $filebriefing->users_id=Auth::user()->id;
        if($request->file('file')){
            $filebriefingdata = $request->file('file');
            $nama_file = time().str_replace(" ", "", $filebriefingdata->getClientOriginalName());
            $filebriefingdata->move('storage/file/briefing', $nama_file);
            $filebriefing->file = $nama_file;
        }
        $filebriefing->save();
        if(auth()->user()->role_id==1){
            return redirect()->route('super_admin.filebriefing.index');
        }elseif(auth()->user()->role_id==3){
            return redirect()->route('staf_prodi.filebriefing.index');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileBriefing $filebriefing)
    {
        $filebriefing->delete();
        return redirect()->back();
    }
}
