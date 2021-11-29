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

Route::get('dashboardmhw', function () {
    return view('dashboardmahasiswa/dashboard/dashboard');
});

Route::get('jadwalkp', function () {
    return view('dashboardmahasiswa/jadwalkp/jadwalkp');
});

Route::get('profil', function () {
    return view('dashboardmahasiswa/profil/profil');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
