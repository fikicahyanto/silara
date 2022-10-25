<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;

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






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
