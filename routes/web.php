<?php

use App\Http\Controllers\SqmbootController;
use App\Http\Controllers\SqmController;
use App\Models\Sqm;
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

// Route::get('/', function () {
//     return view('sqm.layout.master');
// });
 
Route::get('sqm',[SqmController::class,'index'])->name('sqm');
Route::post('sqm/store',[SqmController::class,'store'])->name('sqm.store');
Route::get('sqm/{id}/edit',[SqmController::class,'edit'])->name('sqm.edit');
Route::get('sqm/{id}/hapus',[SqmController::class,'destroy'])->name('sqm.hapus');
Route::get('teknisi',[SqmController::class,'index'])->name('teknisi');

// Route::get('keterusan', function () {
//     return view('bootsrap4Sqm.layoutApp.master');
// });

Route::get('/',[SqmbootController::class,'index'])->name('keterusan');
Route::post('keterusan/store',[SqmbootController::class,'store'])->name('keterusan.store');
Route::get('keterusan/{id}/edit',[SqmbootController::class,'edit'])->name('keterusan.edit');
Route::get('keterusan/{id}/hapus',[SqmbootController::class,'destroy'])->name('keterusan.hapus');
// Route::get('teknisi',[SqmbootController::class,'index'])->name('teknisi');