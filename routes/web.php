<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanControlleer;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\Jadwal;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\CPekerjaan;
use App\Http\Controllers\exportEx;
use App\Http\Controllers\LelangController;
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
    return redirect(route('pekerjaan.list'));
});

//Route::get('/perusahaan', [PerusahaanControlleer::class,'index']);
Route::resource('perusahaan', PerusahaanControlleer::class);

Route::resource('pekerjaan', PekerjaanController::class);

Route::get('pekerjaans/{id}/data.html', function ($id) {
    $db = Pekerjaan::wherePerusahaanPengawas($id)->get()->toArray();
    $temp = '';
    foreach ($db as $item)
    {
        $temp .= '<tr>';
        $temp .= '<td><input value="'. $item['id']. '" data-id="'. $item['id'].'" type="checkbox"></td>';
        $temp .= '<td>' . $item['pekerjaan'] . '</td>';
        $temp .= '<td>' . getPerusahaan($item['perusahaan_id']) . '</td>';
        $temp .= '</tr>';
    }
    return $temp;
})->name('pekerjaan.diawasi');

Route::resource('jadwal', Jadwal::class);

Route::resource('cetak', CetakController::class);

Route::get('/coba', [Jadwal::class,'coba']);

Route::get('pajak/{id}', [exportEx::class,'pajak'])->name('cetak.pajak');
Route::get('kontrak/{id}', [exportEx::class, 'kontrak'])->name('cetak.kontrak');
Route::get( 'termin/{id}', [exportEx::class,'termin'])->name('cetak.termin');
Route::get( 'ringkasan/{id}.html', [exportEx::class,'ringkasan'])->name('cetak.ringkasan');

Route::get('download/perusahaan', [exportEx::class,'dlperusahaan'])->name('download.perusahaan');

Route::get('tanggal/{id}', [LelangController::class,'index'])->name('lelang');

Route::post('tanggal/simpan', [LelangController::class, 'store'])->name('lelang.simpan');

Route::group(['prefix' => 'pekerjaans'], function () {
    Route::get('list.html',[CPekerjaan::class,'index'])->name('pekerjaan.list');
    Route::get('rubah/{id}.html', [CPekerjaan::class,'edit'])->name('pekerjaan.tambah');
    Route::get('tambah.html', [CPekerjaan::class,'tambah'])->name('pekerjaan.baru');
    Route::post('simpan.html', [CPekerjaan::class, 'store'])->name('pekerjaan.simpan');
    Route::post('hapus.html', [CPekerjaan::class, 'hapus'])->name('pekerjaan.hapus');
});
