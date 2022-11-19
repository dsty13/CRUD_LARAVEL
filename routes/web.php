<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\mahasiswaController;


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
Route::get('/',function(){
    return view('Aboutme');
});

// Route::get('/', [mahasiswaController::class,'index'])->name('data');
// Route::get('/create', [mahasiswaController::class,'create'])->name('create');
// Route::post('/simpan', [mahasiswaController::class,'store'])->name('simpan');
Route::resource('Mahasiswa',mahasiswaController::class);

