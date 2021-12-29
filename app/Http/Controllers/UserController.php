<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Models\DetailMahasiswa;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(Request $request){
        $user = new User;
        $user -> role_id = $request->role_id;
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = bcrypt('rahasia');
        $user -> save(); 

        if($user['role_id']=='1') {
            $request ->request->add(['users_id' => $user-> id]);
            $dosen = new Dosen([
                'users_id' => $user-> id,
                'nama' => $request -> input ('nama'),
                'no_telpon' => $request -> input ('no_telpon')
            ]);
            $dosen->save();
           }elseif($user['role_id']=='2') {
            $request ->request->add(['users_id' => $user-> id]);
            $dosen = new Dosen([
                'users_id' => $user-> id,
                'nama' => $request -> input ('nama'),
                'no_telpon' => $request -> input ('no_telpon')
            ]);
            $dosen->save();
           }elseif($user['role_id']=='3') {
            $request ->request->add(['users_id' => $user-> id]);
            $dosen = new Dosen([
                'users_id' => $user-> id,
                'nama' => $request -> input ('nama'),
                'no_telpon' => $request -> input ('no_telpon')
            ]);
            $dosen->save();
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
    //insert tabel anggota
    
        // $newuser=new User;
        // $newuser->name=$request->name;
        // $newuser->email=$request->email;
        // $newuser->password=$request->password;
        // $newuser->nomor_induk=$request->nomor_induk;
        // $newuser->role_id=$request->role_id;
        // $newuser->save();
        $user = User::orderBy('role_id','DESC')->get();
        return view('dashboardbackend.user.indexuser',compact('user'));
       }
}

