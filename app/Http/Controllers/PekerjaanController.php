<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use Yajra\DataTables\DataTables;

class PekerjaanController extends Controller
{
    //

    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $data = Pekerjaan::join('perusahaans', 'pekerjaans.perusahaan_id', '=', 'perusahaans.id')
                ->select(['pekerjaans.id','perusahaans.nama','pekerjaans.pekerjaan','pekerjaans.tahun','pekerjaans.kode_keg','pekerjaans.kode_rek','pekerjaans.hps','pekerjaans.nego']);


            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="badge bg-primary editPerusahaan">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="badge bg-danger deletePerusahaan">Delete</a>';
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
        Pekerjaan::updateOrCreate(['id' => $request->Pekerjaan_id],
            ['perusahaan_id' => $request->perusahaan_id,
                'program' => $request->program,
                'kegiatan' => $request->kegiatan,
                'pekerjaan' => $request->pekerjaan,
                'tahun' => $request->tahun,
                'kode_rek' => $request->kode_rek,
                'kode_keg' => $request->kode_keg,
                'dpa_skpd' => $request->dpa_skpd,
                'hps' => $request->hps,
                'penawaran' => $request->penawaran,
                'nego' => $request->nego
            ]
        );

        return response()->json(['success'=>'Perusahaan aktif telah disimpan']);

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
