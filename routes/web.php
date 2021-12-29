<?php

use App\Http\Controllers\BeritakpController;
use App\Http\Controllers\BeritaprodiController;
use App\Http\Controllers\dashboard\ProfileDosenController;
use App\Http\Controllers\dashboard\ProfileMahasiswaController;
use App\Http\Controllers\dashboard\ProfileStafprodiController;
use App\Http\Controllers\Dashboardmhw;
use App\Http\Controllers\DashboardStaffController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\JadwalKpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
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

Route::get('/jadwalkp', function () {
    return view('dashboardmahasiswa.jadwalkp');
});


// Route::get('/logintest', function () {
//     return view('login');
// });



// Route::get('/berita', function () {
//     return view('dashboardstaff/berita');
// });

// Route::post('file', [FileController::class, 'store'])->name('store');
// // Route::get('/index', [FileController::class, 'index']);
// Route::get('/view-video/{id}', [FileController::class, 'show']);
// Route::get('/view-video/download/{file}', [FileController::class, 'download']);

Route::group(['middleware'=>'auth'], function(){

    Route::resource('beritakp',BeritakpController::class);
    Route::resource('jadwalkp',JadwalKpController::class); 
    Route::resource('beritaprodi',BeritaprodiController::class); 
    Route::resource('profile-dosen', ProfileDosenController::class);
    Route::resource('file',FileController::class); 
    Route::resource('video',VideoController::class); 
    // Route::resource('profile-dosen', ProfileMahasiswaController::class);
    // Route::resource('user',UserController::class); 

    Route::group(['middleware' => 'role:super_admin','prefix'=>'admin','as'=>'super_admin.'], function(){
        Route::get('/', [DashboardStaffController::class, 'index']);
        Route::resource('video',VideoController::class); 
        Route::resource('profile', ProfileMahasiswaController::class);
        Route::resource('user',UserController::class); 
        Route::resource('jadwalkp',JadwalKpController::class); 
        //Route::resource('profile-dosen', ProfileDosenController::class );
    });

    Route::group(['middleware' => 'role:pejabat_prodi','prefix'=>'pejabat-prodi','as'=>'pejabat_prodi.'], function(){
        Route::get('/', [DashboardStaffController::class, 'index']);
        Route::resource('video',VideoController::class); 

        //Route::resource('profile-dosen', ProfileDosenController::class );
    });

    Route::group(['middleware' => 'role:staf_prodi','prefix'=>'staf-prodi','as'=>'staf_prodi.'], function(){
        Route::get('/', [DashboardStaffController::class, 'index']);
        Route::resource('video',VideoController::class); 
        Route::resource('profile', ProfileStafprodiController::class);
        //Route::resource('profile-dosen', ProfileDosenController::class );
    });

    Route::group(['middleware' => 'role:dosen','prefix'=>'dosen','as'=>'dosen.'], function(){
        Route::get('/', [DashboardStaffController::class, 'index']);
        Route::resource('video',VideoController::class); 
        Route::resource('profile', ProfileDosenController::class );
    });

    Route::group(['middleware' => 'role:mahasiswa','prefix'=>'mahasiswa','as'=>'mahasiswa.'], function(){
        Route::get('/', [DashboardStaffController::class, 'index']);
        Route::resource('video',VideoController::class); 
        Route::resource('profile', ProfileMahasiswaController::class);
        Route::resource('jadwalkp',JadwalKpController::class); 
    });
});

// Route::prefix('dashboard')
//     ->middleware(['auth:sanctum','verified'])
//     ->group(function() {
//         Route::resource('user',UserController::class); 
       
//         Route::get('/', [DashboardStaffController::class, 'index']);
        
        
//         Route::resource('jadwalkp',JadwalKpController::class); 
    
     
//         Route::resource('profile-mhw', ProfileMahasiswaController::class);
//         Route::resource('profile-dosen', ProfileDosenController::class );

//         //Video
//         // Route::resource('video',VideoController::class); 
//         // Route::get('download/{id}', [VideoController::class, 'download'])->name('download');



//         // Route::get('dashboardstaff.file.crudvideo.indexvideo', [VideoController::class, 'download'])
//         // ->name('download');

//         // Route::get('/index-video', [FileController::class, 'index']);
//         // Route::post('/index-video', [FileController::class, 'destroy_video']);
//         // Route::get('/upload-video', [FileController::class, 'create']);
//     });

//     Route::prefix('dashboard')
//     ->middleware(['auth:sanctum','verified'])
//     ->group(function() {
//         Route::get('/', [Dashboardmhw::class, 'index']);

//     });


