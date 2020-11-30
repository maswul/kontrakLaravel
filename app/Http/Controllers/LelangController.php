<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\TerminFisik;
use App\Models\TerminPengawasan;
use App\Models\TerminPerencanaan;
use Illuminate\Http\Request;

class LelangController extends Controller
{
    //
    public function store(Request $request) 
    {
        $lelang_id = $request->lelang_id;
        $termin_id = $request->termin_id;

        //check database
        if (Lelang::find($lelang_id)->count() == 1)
        {
            //edit
        }else{
            //buat baru
            $dataLelang = $request->all();
            
            Lelang::create($request->all());
            switch ($request->pekerjaan_tipe) {
                case '1':
                    //konsultansi
                break;
                case '2':
                    //fisik
                    TerminFisik::create($request->all());
                break;
                case '3':
                    //perencanaan
                    TerminPerencanaan::create($request->all());
                break;
                default:
                    # //pengawsan
                    TerminPengawasan::create($request)->all();
                    break;
            }
            redirect('pekerjaan')->with("pesan", "Buat Jadwal baru sukses dilaksanakan!");
        }
    }
}
