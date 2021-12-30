<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Models\DetailMahasiswa;
use App\Models\Dosen;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::orderBy('role_id','DESC')->get();

        // dd($user);
        return view ('dashboardbackend.user.indexuser', compact('user'));
    }

    public function create(){
        return view('dashboardbackend.user.createuser');
    }

    public function edit($id)
    {
        $beritaprodi = User::find($id);
        return view('dashboardbackend.beritaprodi.editberitaprodi',compact('beritaprodi'));
    }

    public function store(Request $request){
        $user = new User;
        $user -> nomor_induk = $request->nomor_induk;
        $user -> role_id = $request->role_id;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request['password']);
        $user -> save(); 

        if($user['role_id']=='2') {
            $request ->request->add(['users_id' => $user-> id]);
            $pejabatprodi = new PejabatProdi([
                'users_id' => $user-> id,
                'nama' => $request -> input ('nama'),
                'no_telpon' => $request -> input ('no_telpon')
            ]);
            $pejabatprodi->save();
           }elseif($user['role_id']=='3') {
            $request ->request->add(['users_id' => $user-> id]);
            $stafprodi = new StafProdi([
                'users_id' => $user-> id,
                'nama' => $request -> input ('nama'),
                'no_telpon' => $request -> input ('no_telpon')
            ]);
            $stafprodi->save();
           }elseif($user['role_id']=='4') {
            $request ->request->add(['users_id' => $user-> id]);
            $dosen = new Dosen([
                'users_id' => $user-> id,
                'nama' => $request -> input ('nama'),
                'no_telpon' => $request -> input ('no_telpon')
            ]);
            $dosen->save();
            }elseif($user['role_id']=='5') {
            $request ->request->add(['users_id' => $user-> id]);
            $mahasiswa = new DetailMahasiswa([
                'users_id' => $user-> id,
                'alamat' => $request -> input ('alamat'),
                'no_telpon' => $request -> input ('no_telpon')
            ]);
            $mahasiswa->save();
       }
        $user = User::orderBy('role_id','DESC')->get();
        return view('dashboardbackend.user.indexuser',compact('user'));
       }
}

