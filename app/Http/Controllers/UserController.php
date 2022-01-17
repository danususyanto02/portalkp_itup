<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Models\DetailMahasiswa;
use App\Models\Dosen;
use App\Models\PejabatProdi;
use App\Models\Role;
use App\Models\StafProdi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){

        
        $user = User::orderBy('role_id','DESC')->get();
        if($request->has('search')){
            $user= User::where('nomor_induk','like','%'.$request->search.'%')->get();
        }else{
            $user = User::orderBy('role_id','DESC')->get();
        }
        // dd($user);
        return view ('dashboardbackend.user.indexuser', compact('user'));
    }

    public function create(){
        $role = Role::all();
        return view('dashboardbackend.user.createuser', compact('role'));
        
    }

    public function edit($id)
    {
        $user = User::find($id);
        $role = Role::all();
        return view('dashboardbackend.user.edituser',compact('user', 'role'));
    }


    public function update(Request $request,  $id){

        $request->validate([
            'nomor_induk' => 'required|string|unique:users,nomor_induk,id'.$id,
            'password' => 'required|string',
        ]);

        $datauser = User::find($id);
        $datauser->update([
            'nomor_induk'=>$request->nomor_induk, 
            'password' => Hash::make($request->password), 
        ]); 
        return redirect()->route('super_admin.user.index');
    }

    public function bimbingan(Request $request){
        // $mahasiswa = DetailMahasiswa::all();
        $dosen = Dosen::all();
        if($request->has('search')){
            $dosen= Dosen::where('nama','like','%'.$request->search.'%')->get();
        }else{
            $dosen = Dosen::all();
        }
        return view('dashboardbackend.mahasiswabimbingan',compact('dosen'));
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
                'no_telpon' => $request -> input ('no_telpon'),
                'jabatan' => $request -> input ('jabatan'),
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
                'nama' => $request -> input ('nama'),
                'jenis_kelamin' => $request -> input ('jenis_kelamin'),
            ]);
            $mahasiswa->save();
            }else(url('admin/user') );

        $user = User::orderBy('role_id','DESC')->get();
        return view('dashboardbackend.user.indexuser',compact('user'));
       }

       public function destroy(User $user)
       {
        $user->delete();
        return redirect()->back();
       }
   
       
}

