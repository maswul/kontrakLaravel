<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\TerminFisik;
use App\Models\TerminPengawasan;
use App\Models\TerminPerencanaan;
use App\Models\termyn;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Perusahaan;
use App\Models\Pekerjaan;

class LelangController extends Controller
{
    /*public function index($id)
    {
        #id merupkan perusahaan
    if (Pekerjaan::find($id)->count() > 0)
    {
        $termin = false;
        switch (Pekerjaan::find($id)->tipe) {
            case '1':
                //konsultansi
            break;
            case '2':
                //fisik
                $termin = TerminFisik::whereHas('pekerjaan', function($q) use ($id){
                    $q->where('id', $id);
                })->first();
                if ($termin)
                {
                    for ($i=1; $i < 9; $i++) {
                        $termin["termin_tgl_{$i}"] = Carbon::parse($termin["termin_tgl_{$i}"])->isoFormat('DD-MM-YYYY');//ganti formatTanggal
                    }
                }

            break;
            case '3':
                //perencanaan
                $termin = TerminPerencanaan::whereHas('pekerjaan', function($q) use ($id){
                    $q->where('id', $id);
                })->first();
                if ($termin)
                {
                    for ($i=1; $i < 10; $i++) {
                        $termin["termin_tgl_{$i}"] = Carbon::parse($termin["termin_tgl_{$i}"])->isoFormat('DD-MM-YYYY');//ganti formatTanggal
                    }
                }

            break;
            default:
                # //pengawsan
                $termin = TerminPengawasan::whereHas('pekerjaan', function($q) use ($id){
                    $q->where('id', $id);
                })->first();
                if ($termin)
                {
                    for ($i=1; $i < 7; $i++) {
                        $termin["termin_tgl_{$i}"] = Carbon::parse($termin["termin_tgl_{$i}"])->isoFormat('DD-MM-YYYY');//ganti formatTanggal
                    }
                }
                break;
        }

        if ($termin)
        {
            $data['termin'] = $termin;
            $data['termin_id'] = $termin->id;
        }

        //$lelang = Pekerjaan::with('lelang')->get()->find($id);
        $lelang = Lelang::with('pekerjaan')->whereHas('pekerjaan', function ($q) use ($id){
            $q->where('id', $id);
        })->first();
        if ($lelang)
        {
            $data['lelang_id'] = $lelang->id;
            for ($i=0; $i < 20; $i++) {
                $lelang["tgl_{$i}"] = Carbon::parse($lelang["tgl_{$i}"])->isoFormat('DD-MM-YYYY');
            }
            $data['lelang'] = $lelang;
        }


        $data['pekerjaan_id'] = $id;
        $data['pekerjaan'] = Pekerjaan::find($id)->pekerjaan;

        $data['pekerjaan_tipe'] = Pekerjaan::find($id)->tipe;
        return view('jadwalperencanaan', $data);
    }else{
        return redirect('pekerjaan');
    }
    }*/
    //

    public function index($id) {
        $pekerjaan = Pekerjaan::find($id);
        if (!$pekerjaan)
        {
            return redirect('pekerjaan');
        }
        if (Pekerjaan::find($id)->count() > 0)
        {
            $termin = termyn::whereHas("pekerjaan", function ($q) use ($id) {
                $q->where('id', $id);
            })->first();
            if ($termin)
            {
                for ($i=1; $i < 10; $i++) {
                    $termin["termin_tgl_{$i}"] = Carbon::parse($termin["termin_tgl_{$i}"])->isoFormat('DD-MM-YYYY');//ganti formatTanggal
                }
                $data['termin'] = $termin;
                $data['termin_id'] = $termin->id;
            }

            $lelang = Lelang::with('pekerjaan')->whereHas('pekerjaan', function ($q) use ($id){
                $q->where('id', $id);
            })->first();
            if ($lelang)
            {
                $data['lelang_id'] = $lelang->id;
                for ($i=0; $i < 20; $i++) {
                    $lelang["tgl_{$i}"] = Carbon::parse($lelang["tgl_{$i}"])->isoFormat('DD-MM-YYYY');
                }
                $data['lelang'] = $lelang;
            }

            $data['pekerjaan_id'] = $id;
            $data['pekerjaan'] = Pekerjaan::find($id)->pekerjaan;

            $data['pekerjaan_tipe'] = Pekerjaan::find($id)->tipe;
            return view('jadwalperencanaan', $data);
        }else{
            return redirect(route('pekerjaan.list'));
        }
    }
    public function store(Request $request)
    {
        $lelang_id = $request->lelang_id;
        $termin_id = $request->termin_id;

        $data = $request->all();

        for ($i=0; $i < 20; $i++) {
            if (array_key_exists("tgl_{$i}", $data)) {
                $data["tgl_{$i}"] = Carbon::parse($data["tgl_{$i}"])->isoFormat('YYYY-MM-DD');//ganti formatTanggal
            }
            if (array_key_exists("termin_tgl_{$i}", $data))
            {
                $data["termin_tgl_{$i}"] = Carbon::parse($data["termin_tgl_{$i}"])->isoFormat('YYYY-MM-DD');//ganti formatTanggal
            }
        }

        Lelang::updateOrCreate(["id" => $lelang_id], $data);
        termyn::updateOrCreate(["id" => $termin_id], $data);


        return redirect(route('pekerjaan.list'))->with("pesan", "Jadwal telah disimpan!");
    }
}
