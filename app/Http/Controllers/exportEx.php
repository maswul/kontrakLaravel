<?php

namespace App\Http\Controllers;

use App\Models\JTermin;
use App\Models\Pekerjaan;
use App\Models\Perusahaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Riskihajar\Terbilang\Facades\Terbilang;


class exportEx extends Controller
{
    //

    public function pajak($id)
    {
        # code...

        

        $db = JTermin::with('pekerjaan.perusahaan')->get()->find($id);

        $file = storage_path('app/template/01_ringkasan.xls');

        $reader = new Xls;
        //$reader->setReadDataOnly(true);
        //$reader->setLoadSheetsOnly('sheet1');
        $ss = $reader->load($file);

        $sheet = $ss->getSheetByName('ringkasan');
        //pelan-pelan isi data


        $sheet->setCellValue("G10", "{$db->pekerjaan['kode_rek']} ({$db->pekerjaan['kode_keg']})"); //Rupiah nego
        $sheet->setCellValue("G11", $db->pekerjaan['program']); //Program
        $sheet->setCellValue("G12", $db->pekerjaan['kegiatan']); //kegiatan
        $sheet->setCellValue("H13", $db->pekerjaan['nego']); //Rupiah nego
        $sheet->setCellValue("G14", "Pekerjaan {$db->pekerjaan['pekerjaan']}"); //pekerjaan

        $sheet->setCellValue("G16", $db->pekerjaan['perusahaan']['bank']); //Bank
        $sheet->setCellValue("N16", $db->pekerjaan['perusahaan']['rekening']); //Rekening
        $sheet->setCellValue("G17", $db->pekerjaan['perusahaan']['nama']); //nama perushaan
        $sheet->setCellValue("G19", $db->pekerjaan['perusahaan']['alamat']); //alamat
        $sheet->setCellValue("G20", $db->pekerjaan['perusahaan']['direktur']);

        //tanggal
        $sheet->setCellValue("H21", Carbon::parse($db->tgl_17)->isoFormat('D MMMM Y')); //tglSPK
        $sheet->setCellValue("M21", "690/ {$db->no_17} /105.4/2020"); //tglSPK

        $sheet->setCellValue("H22", Carbon::parse($db->tgl_18)->isoFormat('D MMMM Y')); //tglSPMK
        $sheet->setCellValue("M22", "690/ {$db->no_18} /105.4/2020"); //tglSPK

        $sheet->setCellValue("H23", Carbon::parse($db->tgl_19)->isoFormat('D MMMM Y')); //tglSPMK

        //bagian catatan
        $sheet->setCellValue("J40", Carbon::parse($db->tgl_12)->isoFormat('D MMMM Y')); //tglSPMK
        $sheet->setCellValue("M40", "690/ {$db->no_12} /105.4/2020"); //tglSPK

        //bagian catatan
        $sheet->setCellValue("J41", Carbon::parse($db->tgl_15)->isoFormat('D MMMM Y')); //tglSPMK
        $sheet->setCellValue("M41", "690/ {$db->no_15} /105.4/2020"); //tglSPK

        //ganti sheet kwitansi
        $sheet = $ss->getSheetByName('kwitansi');
        $tgl_spk = Carbon::parse($db->tgl_17)->isoFormat('D MMMM Y');
        $sheet->setCellValue("D12", "Pembayaran 100% Pekerjaan {$db->pekerjaan['pekerjaan']}, Sesuai Surat Perintah Kerja Nomor : 690/ {$db->no_17} /105.4/2020, Tanggal : {$tgl_spk}"); //isiKwitansi

        $terbilang = ucwords(strtolower(Terbilang::make($db->pekerjaan['nego']," Rupiah")));
        $sheet->setCellValue("D10","( $terbilang )");

        //ganti sheet pajak
        $sheet = $ss->getSheetByName('pajak');
        $sheet->setCellValue("D8", $db->pekerjaan['perusahaan']['npwp']); //npwp
        $nego = $db->pekerjaan['nego'] * 100 / 110;
        $sheet->setCellValue("L16", $nego); //kalkulasi nego
        $sheet->setCellValue("D13", "Kode Rekening : ({$db->pekerjaan['kode_keg']}) {$db->pekerjaan['kode_rek']}"); //kode rek


        $writer = new Xlsx($ss);
        $judul_50 = substr($db->pekerjaan['pekerjaan'],0,30);
        $fileName = "Termin_{$db->pekerjaan['perusahaan']['nama']}_{$judul_50}.xlsx";
        //$writer->save("");


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. $fileName.'"');
        $writer->save('php://output');


    }

    public function dlperusahaan()
    {
        # code...
        $db = Perusahaan::all();

        $file = storage_path('app/template/dlperusahaan.xls');

        $reader = new Xls;
        //$reader->setReadDataOnly(true);
        //$reader->setLoadSheetsOnly('sheet1');
        $ss = $reader->load($file);


        $sheet = $ss->getActiveSheet();
        $n = 1;
        foreach($db as $item)
        {
            $n++;
            $sheet->setCellValue('A'.$n, $item->nama);
            $sheet->setCellValue('B'.$n, $item->direktur);
            $sheet->setCellValue('C'.$n, $item->npwp);
            $sheet->setCellValue('D'.$n, $item->bank);
            $sheet->setCellValue('E'.$n, $item->rekening);
            $sheet->setCellValue('F'.$n, $item->alamat);
        }

        $fileName = "DataPerusahaan_".Carbon::now().".xlsx";
        $writer = new Xlsx($ss);
        //$writer->save("");


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. $fileName.'"');
        $writer->save('php://output');

    }

    public function baru()
    {
        # code...
        $ss = new Spreadsheet();

        $sheet = $ss->getActiveSheet();
        $sheet->setCellValue("A1", "Helloword");

        $writer = new Xlsx($ss);
        $writer->save("contoh.xlsx");

        return;
    }
}
