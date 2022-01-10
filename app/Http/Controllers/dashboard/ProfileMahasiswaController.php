<?php

namespace App\Http\Controllers\dashboard;

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Profile\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use App\Models\User;
use App\Models\DetailMahasiswa;
use App\Models\Dosen;

class ProfileMahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DetailMahasiswa::all();
        $user = User::where('id', Auth::user()->id)->first();
        // $bimbingankp = BimbinganKp::where('mahasiswa_id', $user->detail_mahasiswa->id)->get();
        $dosen = Dosen::all();
        // $list = DetailMahasiswa::withCount('dosen',)->get();
        $list = Dosen::withCount('dospem')
        ->orderBy('created_at')
        ->get();

        // dd($list);
        return view('dashboardmahasiswa.profile', compact('user','list','mahasiswa'),['dosen'=>$dosen,'list'=>$list]);
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
    public function show(Request $request,$id)
    {
        $mahasiswa = DetailMahasiswa::orderBy('role_id','DESC')->get();
        if($request->has('search')){
            $mahasiswa= DetailMahasiswa::where('nomor_induk','like','%'.$request->search.'%')->get();
        }else{
            $mahasiswa = DetailMahasiswa::orderBy('role_id','DESC')->get();
        }
        // dd($user);
        return view ('dashboardbackend.user.indexuser', compact('user'));
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
    public function update(UpdateProfileRequest $request_profile, DetailMahasiswa $request_detail_mahasiswa)
    {

        $data_profile = $request_profile->all();
        $data_detail_user = $request_detail_mahasiswa->all();

        // proses save to user
        $user = User::find(Auth::user()->id);
        $user->update($data_profile);

        $data_detail_user = [
            'nama'           => request()->input('nama'),
            'no_telpon'      => request()->input('no_telpon'),
            'alamat'         => request()->input('alamat'),
            'jenis_kelamin'  => request()->input('jenis_kelamin'),
            'tempat_lahir'   => request()->input('tempat_lahir'),
            'tanggal_lahir'  => request()->input('tanggal_lahir'),
            'dospem_id'      => request()->input('dospem_id'),

        ];
        // proses save to detail user
        $detail_user = DetailMahasiswa::find($user->detail_mahasiswa->id);
        $detail_user->update($data_detail_user);


        return back();

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
