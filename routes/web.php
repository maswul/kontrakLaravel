<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanControlleer;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\Jadwal;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\exportEx;
use App\Http\Controllers\LelangController;
use App\Models\Lelang;
use App\Models\Perusahaan;
use App\Models\Pekerjaan;

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
    return redirect('/pekerjaan');
});

//Route::get('/perusahaan', [PerusahaanControlleer::class,'index']);
Route::resource('perusahaan', PerusahaanControlleer::class);

Route::resource('pekerjaan', PekerjaanController::class);

Route::resource('jadwal', Jadwal::class);

Route::resource('cetak', CetakController::class);

Route::get('/coba', [Jadwal::class,'coba']);

Route::get('pajak/{id}', [exportEx::class,'pajak'])->name('cetak.pajak');

Route::get('termin/{id}', function ($id) {
    return "Hello word";
})->name('cetak.termin');

Route::get('kontrak/{id}', function ($id) {
    return "Hello word";
})->name('cetak.kontrak');

Route::get('download/perusahaan', [exportEx::class,'dlperusahaan'])->name('download.perusahaan');

Route::get('tanggal/{id}', function ($id) {
    #id merupkan perusahaan
    if (Pekerjaan::find($id)->count() > 0)
    {   $data['pekerjaan_id'] = $id;
        $data['pekerjaan_tipe'] = Pekerjaan::find($id)->tipe;
        $lelang = Lelang::with('pekerjaan')->get()->find('$id');
        //print_r($lelang);
        return view('jadwalperencanaan', $data);
    }else{
        return redirect('pekerjaan');
    }
})->name('lelang');

Route::post('tanggal/{$id', [LelangController::class, 'store'])->name('lelang.simpan');