<?php

use App\Http\Controllers\BeritakpController;
use App\Http\Controllers\dashboard\ProfileDosenController;
use App\Http\Controllers\dashboard\ProfileMahasiswaController;
use App\Http\Controllers\dashboard\ProfilePejabatprodiController;
use App\Http\Controllers\dashboard\ProfileStafprodiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboardmhw;
use App\Http\Controllers\DashboardStaffController;
use App\Http\Controllers\FileBriefingController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\JadwalKpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserData\DosendataController;
use App\Http\Controllers\UserData\MahasiswadataController;
use App\Http\Controllers\UserData\PejabatprodidataController;
use App\Http\Controllers\UserData\StafprodidataController;
use App\Http\Controllers\VideoController;
use App\Models\DetailMahasiswa;
use App\Models\Dosen;
use App\Models\JadwalKp;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function() {
     return abort(404);
});


Route::group(['middleware'=>'auth'], function(){
    

    Route::resource('dashboard',DashboardController::class);
    Route::get('jadwalkp', [JadwalKpController::class, 'index']);
    Route::get('databimbingan', [UserController::class, 'bimbingan']);
    
    Route::group(['middleware' => 'role:super_admin','prefix'=>'admin','as'=>'super_admin.'], function(){
        Route::resource('data-pejabat-prodi',PejabatprodidataController::class); 
        Route::resource('data-staf-prodi',StafprodidataController::class); 
        Route::resource('data-dosen',DosendataController::class); 
        Route::resource('data-mahasiswa',MahasiswadataController::class); 
        Route::resource('jadwalkp',JadwalKpController::class); 
        Route::resource('user',UserController::class); 
        Route::resource('filebriefing',FileBriefingController::class);
        Route::resource('file',FileController::class); 
        Route::resource('beritakp',BeritakpController::class);
        Route::resource('video',VideoController::class); 
    });
    

    Route::group(['middleware' => 'role:staf_prodi','prefix'=>'staf-prodi','as'=>'staf_prodi.'], function(){
        Route::resource('jadwalkp',JadwalKpController::class); 
        Route::resource('profile', ProfileStafprodiController::class);
        Route::resource('filebriefing',FileBriefingController::class);
        Route::resource('file',FileController::class);    
        Route::resource('beritakp',BeritakpController::class);
        Route::resource('video',VideoController::class); 
    });

    Route::group(['middleware' => 'role:pejabat_prodi','prefix'=>'pejabat-prodi','as'=>'pejabat_prodi.'], function(){
        Route::resource('profile', ProfilePejabatprodiController::class);
        Route::resource('beritakp',BeritakpController::class);
    });

    Route::group(['middleware' => 'role:dosen','prefix'=>'dosen','as'=>'dosen.'], function(){
        Route::resource('profile', ProfileDosenController::class );
    });

    Route::group(['middleware' => 'role:mahasiswa','prefix'=>'mahasiswa','as'=>'mahasiswa.'], function(){
        Route::resource('profile', ProfileMahasiswaController::class);
    });
});



