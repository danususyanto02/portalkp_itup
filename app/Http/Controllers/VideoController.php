<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('dashboardstaff.file.crudvideo.indexvideo', compact('video'), );
    }

    public function test()
    {
       $dadawd = 'asdasd' ;}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardstaff.file.video');
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
        return redirect('/dashboard/video');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Video::find($id);
        return view('dashboardstaff.file.detail', compact('data'));
    }

    public function download(Request $request, $video)
    { 
        return response()->download(public_path('storage/file'.$video));
     
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
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->back();
    }
}