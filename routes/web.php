<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanControlleer;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\Jadwal;

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

//Route::get('/perusahaan', [PerusahaanControlleer::class,'index']);
Route::resource('perusahaan', PerusahaanControlleer::class);

Route::resource('pekerjaan', PekerjaanController::class);

Route::resource('jadwal', Jadwal::class);
