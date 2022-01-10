<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate ;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class VideoController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video=Video::all();
        return view('dashboardbackend.file.crudvideo.indexvideo', compact('video'), );
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardbackend.file.video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video=new Video;
        $video->judul=$request->judul;
        if($request->file('video')){
            $file = $request->file('video');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('storage/file', $nama_file);
            $video->video = $nama_file;
        }
        $video->save();
        return redirect('dashboard');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Video::all();
        return view('dashboardstaff.file.detail', compact('data'));
    }

    // public function download(Request $request, $video)
    // { 
    //     return response()->download(public_path('storage/file'.$video));
     
    // }



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
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->back();
    }
}
