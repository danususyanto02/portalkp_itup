<?php

use App\Http\Controllers\DashboardStaffController;

use App\Http\Controllers\JadwalKpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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


Route::prefix('dashboard')
    ->middleware(['auth:sanctum','verified'])
    ->group(function() {
        Route::get('/', [DashboardStaffController::class, 'index']);
        Route::resource('jadwalkp',JadwalKpController::class); 
        //Video
        Route::resource('video',VideoController::class); 
        // Route::get('/index-video', [FileController::class, 'index']);
        // Route::post('/index-video', [FileController::class, 'destroy_video']);
        // Route::get('/upload-video', [FileController::class, 'create']);

    });
