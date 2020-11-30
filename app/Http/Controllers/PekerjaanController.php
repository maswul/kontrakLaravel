<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class PekerjaanController extends Controller
{
    //

    public function index(Request $request)
    {
        if ($request->ajax())
        {

            $data = Pekerjaan::join('perusahaans', 'pekerjaans.perusahaan_id', '=', 'perusahaans.id')
                ->select(['pekerjaans.id','perusahaans.nama', 'pekerjaans.tipe AS tipe','pekerjaans.pekerjaan','pekerjaans.tahun','pekerjaans.kode_keg','pekerjaans.kode_rek','pekerjaans.hps','pekerjaans.nego']);






            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row){

                    $btn = '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" title="Edit Pekerjaan"  data-id="'.$row->id.'"  class="btn btn-flat bg-primary editPerusahaan btn-sm">E</a>';
                    
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" title="Buatkan Jadwal"  data-id="'.$row->id.'"  class="btn btn-flat bg-warning jadwalPerusahaan btn-sm">J</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" title="Cetak"  data-id="'.$row->id.'"  class="btn btn-flat bg-success cetakPerusahaan btn-sm">C</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" title="Hapus Pekerjaan"  data-id="'.$row->id.'"  class="btn btn-flat bg-danger deletePerusahaan btn-sm">D</a>';
                    $btn = $btn . "</div>";
                    return $btn;
                })->rawColumns(['action'])->make(true);
        }

        //


        $Data['datas'] = Perusahaan::select('id','nama')->get();
        //return response()->json($Data);
        return view('pekerjaan.index', $Data);
    }



    public function store(Request $request)
    {
        /*Pekerjaan::updateOrCreate(['id' => $request->Pekerjaan_id],
            ['perusahaan_id' => $request->perusahaan_id,
                'program' => $request->program,
                'kegiatan' => $request->kegiatan,
                'pekerjaan' => $request->pekerjaan,
                'tahun' => $request->tahun,
                'kode_rek' => $request->kode_rek,
                'kode_keg' => $request->kode_keg,
                'dpa_skpd' => $request->dpa_skpd,
                'hps' => $request->hps,
                'tipe' => $request->tipe,
                'penawaran' => $request->penawaran,
                'nego' => $request->nego
            ]
        );*/

        $data = Pekerjaan::all()->find($request->Pekerjaan_id);

        if ($data)
        {
            $data->update($request->all());
            $data = 'Edit data sukses';
        }else{
            //add
            $xdata = $request->all();
            $user_id = Pekerjaan::create($xdata)->id;

            $data = "Tambah baru sukses dengan id = {$user_id}";
        }

        //Pekerjaan::updateOrCreate($request->all());



        return response()->json(['success'=>"{$data}"]);

    }

    public function edit($id)
    {
        $Prs = Pekerjaan::find($id);
        return response()->json($Prs);
    }

    public function destroy($id)
    {
        Pekerjaan::find($id)->delete();

        return response()->json(['success'=>'Perusahaan berhasil dihapus!']);
    }
}
