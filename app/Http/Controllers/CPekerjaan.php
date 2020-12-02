<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class CPekerjaan extends Controller
{
    //
    public function index(Request $request)
    {
        $data['db'] = Pekerjaan::latest()->get();

        //$data['lelang'] = Lelang::wherePekerjaanId($data['db'][0]->id);
        return view("pekerjaan.home", $data);
    }
}
