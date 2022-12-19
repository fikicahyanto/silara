<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

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
    return view('beranda');
});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('admin', function (){
        return 'admin page';
    });
});

Route::get('/user' , [UserController::class, 'index']);

Route::get('dosen', [DosenController::class, 'index']);
Route::get('dosen/create', [DosenController::class, 'create']);
Route::post('dosen', [DosenController::class,'store']);
Route::resource('dosen', DosenController::class);
Route::get('dosen/edit/{id}',[DosenController::class, 'edit']);
Route::post('dosen/update/{id}', [DosenController::class,'update']);
Route::post('dosen/{id}', [DosenController::class,'destroy']);

Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('mahasiswa', [MahasiswaController::class,'store']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('mahasiswa/edit/{id}',[MahasiswaController::class, 'edit']);
Route::post('mahasiswa/update/{id}', [MahasiswaController::class,'update']);
Route::post('mahasiswa/{id}', [MahasiswaController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
