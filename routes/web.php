<?php

use App\Http\Controllers\DashboardStaffController;
use App\Http\Controllers\JadwalKpController;
use App\Http\Controllers\UserController;
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


Route::prefix('dashboard')
    ->middleware(['auth:sanctum','verified'])
    ->group(function() {
        Route::get('/', [DashboardStaffController::class, 'index']);
        Route::resource('jadwalkp',JadwalKpController::class); 
     
    });
