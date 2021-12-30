<?php

namespace App\Http\Controllers;

use App\Models\Beritakp;
use App\Models\Beritaprodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaprodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritaprodi = Beritaprodi::all();
        return view('dashboardbackend.beritaprodi.indexberitaprodi', compact('beritaprodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardbackend.beritaprodi.createberitaprodi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beritaprodi=new beritaprodi;
        $beritaprodi->info_berita=$request->info_berita;
        $beritaprodi->pengirim=$request->pengirim;
        $beritaprodi->users_id=Auth::user()->id;
        $beritaprodi->save();
        return redirect()->route('beritaprodi.index');
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

    public function dashboard(){
        $beritakp = Beritakp::orderBy('created_at','ASC')->get();
        $beritaprodi = Beritaprodi::orderBy('created_at','ASC')->get();
        return view('dashboard',compact('beritaprodi','beritakp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beritaprodi = Beritaprodi::find($id);
        return view('dashboardbackend.beritaprodi.editberitaprodi',compact('beritaprodi'));
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
        $beritaprodi= Beritaprodi::find($id);
        $beritaprodi->info_berita=$request->info_berita;
        $beritaprodi->pengirim=$request->pengirim;
        $beritaprodi->update();
        return redirect()->route('beritaprodi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaProdi $beritaprodi)
    {
        $beritaprodi->delete();
        return redirect()->back();
    }
}
