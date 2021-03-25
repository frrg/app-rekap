<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\BackendController as Controller;
use Illuminate\Http\Request;

class WilayahController extends Controller
{

    public function selectKabupaten(Request $request)
    {
        $data = Kabupaten::where('kd_prov', $request->kd_prov)->select('kd_kab as id', 'nama as text')->get();
        return response()->json($data);
    }

    public function selectKecamatan(Request $request)
    {
        $data = Kecamatan::where('kd_kab', $request->kd_kab)->select('kd_kec as id', 'nama as text')->get();
        return response()->json($data);
    }

    public function selectKelurahan(Request $request)
    {
        $data = Kelurahan::where('kd_kec', $request->kd_kec)->select('kd_kel as id', 'nama as text')->get();
        return response()->json($data);
    }
}
