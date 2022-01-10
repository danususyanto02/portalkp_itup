<?php

namespace App\Http\Controllers\UserData;

use App\Http\Controllers\Controller;
use App\Models\PejabatProdi;
use Illuminate\Http\Request;

class PejabatprodidataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pejabat = PejabatProdi::all();
        if($request->has('search')){
            $pejabat= PejabatProdi::where('nama','like','%'.$request->search.'%')->get();
        }else{
            $pejabat = PejabatProdi::all();
        }
        return view ('form.pejabatprodi.indexform', compact('pejabat'));
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
        $edit = PejabatProdi::find($id);
        return view('form.pejabatprodi.editform',compact('edit'));
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
            'jabatan' => 'required|string',
        ]);

        $datauser = PejabatProdi::find($id);
        $datauser->update([
            'nama' => $request -> nama,
            'no_telpon' => $request -> no_telpon,
            'jabatan' => $request -> jabatan,
        ]); 
        return redirect()->route('super_admin.data-pejabat-prodi.index');
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
