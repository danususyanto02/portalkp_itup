<?php

namespace App\Http\Controllers;

use App\Models\Beritakp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BeritakpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Beritakp::all();
        return view('dashboardbackend.beritakp.indexberitakp', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardbackend.beritakp.createberitakp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beritakp=new Beritakp;
        $beritakp->info_berita=$request->info_berita;
        $beritakp->users_id=Auth::user()->id;
        $beritakp->save();
        return redirect()->route('beritakp.index');
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
        $berita = Beritakp::find($id);
        return view('dashboardbackend.beritakp.editberitakp',compact('berita'));
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
        $beritakp= Beritakp::find($id);
        $beritakp->info_berita=$request->info_berita;
        $beritakp->update();
        return redirect()->route('beritakp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beritakp $beritakp)
    {
        $beritakp->delete();
        return redirect()->back();
    }
}
