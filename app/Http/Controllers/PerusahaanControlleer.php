<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Yajra\DataTables\DataTables;

class PerusahaanControlleer extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $data = Perusahaan::latest()->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row){

                    $btn = '<div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip" title="Edit"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-flat btn-xs bg-primary editPerusahaan">Edt</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" title="Hapus"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-flat btn-xs bg-danger deletePerusahaan">Del</a>';
                    $btn .= '</div>';
                    return $btn;
                })->rawColumns(['action'])->make(true);
        }

        $datas = array("request" => $request,
                    "count" => Perusahaan::get()->count());

        return view("perusahaan.home", $datas);
    }

    public function store(Request $request)
    {
        Perusahaan::updateOrCreate(['id' => $request->Perusahaan_id],
            $request->all()
        );

        return response()->json(['success'=>'Perusahaan aktif telah disimpan']);
    }

    public function edit($id)
    {
        $Prs = Perusahaan::find($id);
        return response()->json($Prs);
    }

    public function destroy($id)
    {
        Perusahaan::find($id)->delete();

        return response()->json(['success'=>'Perusahaan berhasil dihapus!']);
    }


}
