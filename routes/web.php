<?php

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

Route::get('/',[SqmController::class,'index'])->name('sqm');
Route::post('sqm/store',[SqmController::class,'store'])->name('sqm.store');
Route::get('sqm/{id}/edit',[SqmController::class,'edit'])->name('sqm.edit');
Route::get('sqm/{id}/hapus',[SqmController::class,'destroy'])->name('sqm.hapus');
Route::get('teknisi',[SqmController::class,'index'])->name('teknisi');