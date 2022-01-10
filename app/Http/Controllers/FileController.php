<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file=File::all();
        $view = Storage::allFiles('public/file/dokumen/');
        // dd($view);
        return view('dashboardbackend.file.file.index', compact('file','view'), ) ;    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardbackend.file.file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=new File();
        $file->nama=$request->nama;
        if($request->file('file')){
            $filedata = $request->file('file');
            $nama_file = time().str_replace(" ", "", $filedata->getClientOriginalName());
            $filedata->move('storage/file/dokumen', $nama_file);
            $file->file = $nama_file;
        }
        $file->save();
        if(auth()->user()->role_id==1){
            return redirect()->route('super_admin.file.index');
        }elseif(auth()->user()->role_id==3){
            return redirect()->route('staf_prodi.file.index');
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
        $fileshow = File::find($id);
        return view('dashboardbackend.file.file.detail.blade.php', compact('fileshow'), );
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
    public function destroy(file $file)
    {
        $file -> delete();
        return redirect()->back();
    }
}
