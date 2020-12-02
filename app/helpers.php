<?php

use App\Models\Perusahaan;
use App\Models\Lelang;
use Illuminate\Support\Carbon;

function tipePekerjaan($tipe)
{
    switch ($tipe) {
        case '1':
            return "Jasa Konsultansi";
            break;
        case '3':
            return "Perencanaan";
        break;
        case '2':
            return "Fisik";
        break;
        case '4':
            return "Pengawasan";
        break;
        default:
            return "Tdk diketahui";
            break;
    }
}

function getPerusahaan($id)
{
    return Perusahaan::find($id)->nama;
}

function tglKontrak($id)
{
    //dapatkan tgl dr pekerjaan
    $lelang = Lelang::where('pekerjaan_id', '=', $id)->first();
    if ($lelang)
    {
        return Carbon::parse($lelang->tgl_17)->isoFormat('D MMMM Y');
    }else{
        return "Blm ada jadwal!";
    }
}

function chkLelang($id)
{
    if (Lelang::wherePekerjaanId($id)->value('id'))
    {
        return false;
    }
    return true;
}

?>
