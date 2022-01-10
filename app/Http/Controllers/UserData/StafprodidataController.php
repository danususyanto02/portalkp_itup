<?php

namespace App\Http\Controllers\UserData;

use App\Http\Controllers\Controller;
use App\Models\StafProdi;
use Illuminate\Http\Request;

class StafprodidataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $staf = StafProdi::all();
        if($staf->has('search')){
            $staf= StafProdi::where('nama','like','%'.$request->search.'%')->get();
        }else{
            $staf = StafProdi::all();
        }
    
        return view ('form.stafprodi.indexform', compact('staf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $edit = StafProdi::find($id);
        return view('form.stafprodi.editform',compact('edit'));
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
        $request->validate([
            'nama' => 'required|string',
            'no_telpon' => 'required|string',
        ]);

        $datauser = StafProdi::find($id);
        $datauser->update([
            'nama' => $request -> nama,
            'no_telpon' => $request -> no_telpon,

        ]); 
        return redirect()->route('super_admin.data-staf-prodi.index');
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
