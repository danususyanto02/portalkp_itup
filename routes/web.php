<?php

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

Route::get('/logintest', function () {
    return view('login');
});

Route::get('/dashboards', function () {
    return view('dashboardstaff/dashboard');
});
Route::get('/jadwal-kp', function () {
    return view('dashboardstaff/jadwalkp');
});
Route::get('/berita', function () {
    return view('dashboardstaff/berita');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
