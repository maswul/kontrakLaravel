<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\TerminFisik;
use App\Models\TerminPengawasan;
use App\Models\TerminPerencanaan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Perusahaan;
use App\Models\Pekerjaan;

class LelangController extends Controller
{
    public function index($id)
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
        
        
        $data['pekerjaan_tipe'] = Pekerjaan::find($id)->tipe;
        return view('jadwalperencanaan', $data);
    }else{
        return redirect('pekerjaan');
    }
    }
    //
    public function store(Request $request) 
    {
        $lelang_id = $request->lelang_id;
        $termin_id = $request->termin_id;

        //check database
        echo $lelang_id;

        if (Lelang::find($lelang_id))
        {
            //edit
            $data = $request->all();

            //to do: ganti $data dan format
            //lelang
            
            for ($i=0; $i < 20; $i++) { 
                $data["tgl_{$i}"] = Carbon::parse($data["tgl_{$i}"])->isoFormat('YYYY-MM-DD');//ganti formatTanggal
            }

            $lelang = Lelang::all()->find($lelang_id);
            $lelang->update($data);

            for ($i=1; $i < 10; $i++) { 
                if (array_key_exists("termin_tgl_{$i}", $data))
                {
                    $data["termin_tgl_{$i}"] = Carbon::parse($data["termin_tgl_{$i}"])->isoFormat('YYYY-MM-DD');//ganti formatTanggal
                }
            }

            switch ($request->pekerjaan_tipe) {
                case '1':
                    //konsultansi
                break;
                case '2':
                    $termin = TerminFisik::all()->find($termin_id);
                    $termin->update($data);
                break;
                case '3':
                    $termin = TerminPerencanaan::all()->find($termin_id);
                    $termin->update($data);
                break;
                default:
                    $termin = TerminPengawasan::all()->find($termin_id);
                    $termin->update($data);
                    break;
            }
            
            return redirect('pekerjaan')->with("pesan", "Jadwal telah diperbarui!");
        }else{
            //buat baru
            
            $data = $request->all();

            //to do: ganti $data dan format
            //lelang
            
            for ($i=0; $i < 20; $i++) { 
                $data["tgl_{$i}"] = Carbon::parse($data["tgl_{$i}"])->isoFormat('YYYY-MM-DD');//ganti formatTanggal
            }
            
            Lelang::create($data);
            switch ($request->pekerjaan_tipe) {
                case '1':
                    //konsultansi
                break;
                case '2':
                    //fisik
                    for ($i=1; $i < 9; $i++) { 
                        $data["termin_tgl_{$i}"] = Carbon::parse($data["termin_tgl_{$i}"])->isoFormat('YYYY-MM-DD');//ganti formatTanggal
                    }
                    TerminFisik::create($data);
                break;
                case '3':
                    //perencanaan
                    for ($i=1; $i < 10; $i++) { 
                        $data["termin_tgl_{$i}"] = Carbon::parse($data["termin_tgl_{$i}"])->isoFormat('YYYY-MM-DD');//ganti formatTanggal
                    }
                    TerminPerencanaan::create($data);
                break;
                default:
                    # //pengawsan
                    for ($i=1; $i < 7; $i++) { 
                        $data["termin_tgl_{$i}"] = Carbon::parse($data["termin_tgl_{$i}"])->isoFormat('YYYY-MM-DD');//ganti formatTanggal
                    }
                    TerminPengawasan::create( $data );
                    break;
            }
            return redirect('pekerjaan')->with("pesan", "Buat Jadwal baru sukses dilaksanakan!");
        }
    }
}
