<?php

namespace App\Http\Controllers;

use App\Models\FileBriefing;
use Illuminate\Http\Request;

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
        if($request->file('file')){
            $filebriefingdata = $request->file('file');
            $nama_file = time().str_replace(" ", "", $filebriefingdata->getClientOriginalName());
            $filebriefingdata->move('storage/file/briefing', $nama_file);
            $filebriefing->file = $nama_file;
        }
        $filebriefing->save();
        return redirect()->route('filebriefing.index');
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
    public function destroy($id)
    {
        //
    }
}
