<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use App\Models\JTermin;
use App\Models\Perusahaan;
use Yajra\DataTables\DataTables;

class Jadwal extends Controller
{
    //untuk fungsi utama
    public function index(Request $request)
    {
        # code...
        if ($request->ajax())
        {
            //$data = Pekerjaan::with('perusahaan')->get();
            $data = JTermin::with('pekerjaan.perusahaan')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="badge bg-primary editPerusahaan">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="badge bg-danger deletePerusahaan">Delete</a>';
                    return $btn;
                })->rawColumns(['action'])->make(true);
        }
        return view('jadwal.index');




    }

    public function Coba(Request $request)
    {
        /*$data = Pekerjaan::with('perusahaan')->get();
        $dt =  DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="badge bg-primary editPerusahaan">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="badge bg-danger deletePerusahaan">Delete</a>';
                    return $btn;
                })->rawColumns(['action'])->make(true);

        return $dt;*/
        $data = Pekerjaan::with('jtermin')->get();
        $dt =  DataTables::of($data)->addIndexColumn()
        ->addColumn('action', function ($row){

            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="badge bg-primary editPerusahaan">Edit</a>';
            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="badge bg-danger deletePerusahaan">Delete</a>';
            return $btn;
        })->rawColumns(['action'])->make(true);


        print_r(response()->json($data));
    }

    public function create(Request $request)
    {
        # code...
        $data['datas'] = Pekerjaan::select('id','pekerjaan')->get();
        return view('jadwal.create', $data);
    }

    public function store(Request $request)
    {
        # Untuk simpan database
        JTermin::updateOrCreate(['id' => $request->Termin_id],
            ["pekerjaan_id" => $request->pekerjaan_id,
            "no_spk" => $request->no_spk,
            "no_ba_lapdal"=> $request->no_ba_lapdal,
            "no_ba_lapkhir"=> $request->no_ba_lapkhir,
            "no_bast_lapdal"=> $request->no_bast_lapdal,
            "no_bast_lapkhir"=> $request->no_bast_lapkhir,
            "no_bast_pekerjaan"=> $request->no_bast_pekerjaan,
            "no_bast_pembayaran"=> $request->no_bast_pembayaran,
            //tanggal
            "tgl_spk"=> $request->tgl_spk,
            "tgl_ba_lapdal"=> $request->tgl_ba_lapdal,
            "tgl_ba_lapkhir"=> $request->tgl_ba_lapkhir,
            "tgl_bast_lapdal"=> $request->tgl_bast_lapdal,
            "tgl_bast_lapkhir"=> $request->tgl_bast_lapkhir,
            "tgl_bast_pekerjaan"=> $request->tgl_bast_pekerjaan,
            "tgl_bast_pembayaran" => $request->tgl_bast_pembayaran,

            "tgl_0" => $request->tgl_0,

            "tgl_1" => $request->tgl_1,
            "no_1" => $request->no_1,
            "tgl_2" => $request->tgl_2,
            "no_2" => $request->no_2,
            "tgl_3" => $request->tgl_3,
            "no_3" => $request->no_3,
            "tgl_4" => $request->tgl_4,
            "no_4" => $request->no_4,
            "tgl_5" => $request->tgl_5,
            "no_5" => $request->no_5,
            "tgl_6" => $request->tgl_6,
            "no_6" => $request->no_6,
            "tgl_7" => $request->tgl_7,
            "no_7" => $request->no_7,
            "tgl_8" => $request->tgl_8,
            "no_8" => $request->no_8,
            "tgl_9" => $request->tgl_9,
            "no_9" => $request->no_9,
            "tgl_10" => $request->tgl_10,
            "no_10" => $request->no_10,
            "tgl_11" => $request->tgl_11,
            "no_11" => $request->no_11,
            "tgl_12" => $request->tgl_12,
            "no_12" => $request->no_12,
            "tgl_13" => $request->tgl_13,
            "no_13" => $request->no_13,
            "tgl_14" => $request->tgl_14,
            "no_14" => $request->no_14,
            "tgl_15" => $request->tgl_15,
            "no_15" => $request->no_15,

            "tgl_16" => $request->tgl_16,

            "tgl_17" => $request->tgl_17,
            "no_17" => $request->no_17,
            "tgl_18" => $request->tgl_18,
            "no_18" => $request->no_18,

            "tgl_19" => $request->tgl_19,

            ]
        );

        return response()->json(['success'=>'Jadwal termin telah ditambahkan']);
    }

    public function destroy($id)
    {
        JTermin::find($id)->delete();

        return response()->json(['success'=>'Jadwal pekerjaan berhasil dihapus!']);
    }

    public function edit($id)
    {
        $Jt = JTermin::find($id);


        $data['db'] = $Jt;
        $data['datas'] = Pekerjaan::find($Jt->pekerjaan_id);



        return view('jadwal.edit', $data);
    }
}
