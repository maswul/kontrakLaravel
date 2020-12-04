<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\Pekerjaan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class CPekerjaan extends Controller
{
    //
    public function index(Request $request)
    {
        $data['db'] = Pekerjaan::latest()->get();

        //$data['lelang'] = Lelang::wherePekerjaanId($data['db'][0]->id);
        return view("pekerjaan.home", $data);
    }

    public function edit(Request $request) {
        //$pekerjaan''
        $_id = Hashids::decode($request->id);
        if (!$_id){
            return redirect(route('pekerjaan.list'));
        }
        $id = $_id[0];
        $pekerjaan = Pekerjaan::find($id);
        if (!$pekerjaan)
        {
            return redirect('pekerjaan');
        }else{
            if (Pekerjaan::find($id)->id){
                $data['title'] = "Edit Pekerjaan";
            }else {
                $data['title'] = "Tambah Pekerjaan";
            }

            $data['db'] = Pekerjaan::find($id);
            $data['dbs'] = Pekerjaan::whereTipe(2)->latest()->get(); //untuk list fisik
            $data['datas'] = Perusahaan::latest()->get();

            return view('pekerjaan.tambah', $data);
        }
    }

    public function tambah() {
            $data['title'] = "Tambah Pekerjaan";
            $data['datas'] = Perusahaan::latest()->get();
            $data['dbs'] = Pekerjaan::whereTipe(2)->latest()->get();
         return view('pekerjaan.tambah', $data);
    }

    public function hapus(Request $request)
    {
        $id = $request->id;
        Pekerjaan::find($id)->delete();
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['hps'] = str_replace(",","",$data['hps']);
        $data['penawaran'] = str_replace(",","",$data['penawaran']);
        $data['nego'] = str_replace(",","",$data['nego']);
        if ($data['tipe'] == 4) $data['perusahaan_pengawas'] = null;
        Pekerjaan::updateOrCreate(["id" => $request->Pekerjaan_id], $data);
        return redirect(route('pekerjaan.list'))->with("pesan", "Jadwal telah disimpan!");
    }
}
