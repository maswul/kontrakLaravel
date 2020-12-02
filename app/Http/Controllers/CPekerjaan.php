<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\Pekerjaan;
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
        $id = $_id[0];
        $pekerjaan = Pekerjaan::find($id);
        if (!$pekerjaan)
        {
            return redirect('pekerjaan');
        }else{
            $data['title'] = "Tambah Pekerjaan";
            return view('pekerjaan.tambah', $data);
        }
    }
}
