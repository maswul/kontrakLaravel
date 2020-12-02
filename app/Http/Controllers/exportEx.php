<?php

namespace App\Http\Controllers;

use App\Models\JTermin;
use App\Models\Lelang;
use App\Models\Pekerjaan;
use App\Models\Perusahaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Riskihajar\Terbilang\Facades\Terbilang;
use PhpOffice\PhpWord\TemplateProcessor;
use Novay\WordTemplate\WordTemplate;


class exportEx extends Controller
{
    //

    public function pajak($id)
    {
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

        $terbilang = ucwords(strtolower(Terbilang::make($db->pekerjaan['nego'], " Rupiah")));
        $sheet->setCellValue("D10", "( $terbilang )");

        //ganti sheet pajak
        $sheet = $ss->getSheetByName('pajak');
        $sheet->setCellValue("D8", $db->pekerjaan['perusahaan']['npwp']); //npwp
        $nego = $db->pekerjaan['nego'] * 100 / 110;
        $sheet->setCellValue("L16", $nego); //kalkulasi nego
        $sheet->setCellValue("D13", "Kode Rekening : ({$db->pekerjaan['kode_keg']}) {$db->pekerjaan['kode_rek']}"); //kode rek


        $writer = new Xlsx($ss);
        $judul_50 = substr($db->pekerjaan['pekerjaan'], 0, 30);
        $fileName = "Termin_{$db->pekerjaan['perusahaan']['nama']}_{$judul_50}.xlsx";
        //$writer->save("");


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
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
        foreach ($db as $item) {
            $n++;
            $sheet->setCellValue('A' . $n, $item->nama);
            $sheet->setCellValue('B' . $n, $item->direktur);
            $sheet->setCellValue('C' . $n, $item->npwp);
            $sheet->setCellValue('D' . $n, $item->bank);
            $sheet->setCellValue('E' . $n, $item->rekening);
            $sheet->setCellValue('F' . $n, $item->alamat);
        }

        $fileName = "DataPerusahaan_" . Carbon::now() . ".xlsx";
        $writer = new Xlsx($ss);
        //$writer->save("");


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
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

    public function kontrak($id)
    {
        //echo Pekerjaan::find($id)->tipe;

        $lelang = Lelang::whereHas('pekerjaan', function ($q) use ($id) {
            $q->where('id', $id);
        })->get();

        if ($lelang->count() == 0) {
            //check data lelang
            return redirect(route('lelang', array("id" => $id)));
        } else {


            switch (Pekerjaan::find($id)->tipe) {
                case 1:
                    //jasakonsultansi
                    break;
                case 2:
                    //fisik
                    $file = storage_path('app/template/kontrak_fisik.docx');
                    $tugas = "Pembangunan Sarana Prasarana Air Bersih di";
                    $namafile = "Fisik";
                    $this->kon_perencanaan($id, $tugas, $file, $namafile);
                    break;
                case 3:
                    //perencanaan
                    $file = storage_path('app/template/kontrak.docx');
                    $tugas = "Perencanaan Teknis Pembangunan Sarana Prasarana Air Bersih";
                    $namafile = "Perencanaan";
                    $this->kon_perencanaan($id, $tugas, $file, $namafile);
                    break;
                case 4:
                    //pengawasan
                    $file = storage_path('app/template/kontrak_awas.docx');
                    $tugas = "Pengawasan Fisik Pembangunan Sarana Prasarana Air Bersih";
                    $namafile = "Pengawasan";
                    $this->kon_perencanaan($id, $tugas, $file, $namafile);
                    break;
            }
        }
    }

    public function kon_rencana($id)
    {
        //parent::__call($method, $parameters); // TODO: Change the autogenerated stub
        $file = storage_path('app/template/template.rtf');
        return WordTemplate::export($file, array(), 'suket.doc');
    }

    public function kon_fisik($id, $tugas, $file, $nmfile)
    {
        //${perusahaan_pengawas}
        //${direktur_pengawas}
        //tgl 17 dan 19
        //get jumlah minggu
        //pekerjaan
        //TODO FUNGSI DOWNLOAD TERMIN
    }

    public function kon_perencanaan($id, $tugas, $file, $nmfile)
    {


        $dtPeker = Pekerjaan::find($id)->toArray();

        $dtPer = Perusahaan::whereId($dtPeker['perusahaan_id'])->first()->toArray();
        $dtLelang = Lelang::wherePekerjaanId($id)->first()->toArray();

        for ($i = 0; $i < 20; $i++) {

            $tgl = $dtLelang["tgl_{$i}"];
            $dtLelang["tgl_{$i}"] = Carbon::parse($tgl)->isoFormat('D MMMM Y');
            $dtLelang["tgl_{$i}_hari"] = strtoupper(Carbon::parse($tgl)->isoFormat('dddd'));
            $dtLelang["tgl_{$i}_tanggal"] = strtoupper(Terbilang::make(Carbon::parse($tgl)->isoFormat('D')));
            $dtLelang["tgl_{$i}_bulan"] = strtoupper(Carbon::parse($tgl)->isoFormat('MMMM'));
            $dtLelang["tgl_{$i}_tahun"] = strtoupper(Terbilang::make(Carbon::parse($tgl)->isoFormat('Y')));
        }

        //untuk Pekerjaan
        $dtPeker['pekerjaan_full'] = $tugas . " " . $dtPeker['pekerjaan'];

        $tpl = new TemplateProcessor($file);

        $bayar80 = 0.8 * $dtPeker['nego'];
        $bayar80_terbilang = ucwords(strtolower(Terbilang::make($bayar80, " Rupiah")));
        $bayar5 = 0.05 * $dtPeker['nego'];
        $bayar5_terbilang = ucwords(strtolower(Terbilang::make($bayar5, " Rupiah")));
        $bayar15 = 0.15 * $dtPeker['nego'];
        $bayar15_terbilang = ucwords(strtolower(Terbilang::make($bayar15, " Rupiah")));


        $tpl->setValue('hps_terbilang', ucwords(strtolower(Terbilang::make($dtPeker['hps'], " Rupiah"))));
        $tpl->setValue('penawaran_terbilang', ucwords(strtolower(Terbilang::make($dtPeker['penawaran'], " Rupiah"))));
        $tpl->setValue('nego_terbilang', ucwords(strtolower(Terbilang::make($dtPeker['nego'], " Rupiah"))));

        $tpl->setValue('bayar80', number_format($bayar80, 0, ',', '.'));
        $tpl->setValue('bayar80_terbilang', $bayar80_terbilang);
        $tpl->setValue('bayar5', number_format($bayar5, 0, ',', '.'));
        $tpl->setValue('bayar5_terbilang', $bayar5_terbilang);
        $tpl->setValue('bayar15', number_format($bayar15, 0, ',', '.'));
        $tpl->setValue('bayar15_terbilang', $bayar15_terbilang);

        $dtPeker['hps'] = number_format($dtPeker['hps'], 0, ',', '.');
        $dtPeker['penawaran'] = number_format($dtPeker['penawaran'], 0, ',', '.');
        $dtPeker['nego'] = number_format($dtPeker['nego'], 0, ',', '.');

        $tpl->setValues($dtPeker);

        $tpl->setValues($dtPer);
        $tpl->setValues($dtLelang);
        $tpl->setValue('DIREKTUR', $dtPer['direktur']);
        $tpl->setValue('PERUSAHAAN', $dtPer['nama']);
        $tpl->setValue('KOTA', $dtPer['kota']);
        $tpl->setValue('PEKERJAAN_FULL',$dtPeker['pekerjaan_full'] );

        $judul_50 = substr($dtPeker['pekerjaan'], 0, 30);

        $filename = "kontrak {$nmfile} {$dtPer['nama']} {$judul_50}";
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header("Content-Disposition: attachment; filename=\"{$filename}.docx\"");

        $tpl->saveAs('php://output');
    }
}
