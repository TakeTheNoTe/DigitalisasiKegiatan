<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPresensiController extends Controller
{

public function lihatk($id)
    {
        $att = DB::table('attendances')
        ->select('id_activities','activities','id_participants','participants','status_request','status','created_at')
        ->where('id_activities',$id)
        ->distinct()
        ->get();
        return view('admin/lihatkegiatan',compact('att'));
    }

public function statusterima($id,$ids,$ket,$req)
    {
        DB::table('attendances')
        ->where('id_participants',$id)
        ->where('id_activities',$ids)
        ->where('status_request',$req)
        ->update(['status' => $ket]);

        return redirect()->route('adminkegiatan.index');
    }

public function statustolak ($id,$ids,$ket,$req)
    {
        DB::table('attendances')
        ->where('id_participants',$id)
        ->where('id_activities',$ids)
        ->where('status_request',$req)
        ->update(['status' => $ket]);

        return redirect()->route('adminkegiatan.index');
    }

public function deleteinkeg ($id,$ids,$stat)
    {
        DB::table('attendances')
        ->where('id_participants', $id)
        ->where('id_activities',$ids)
        ->where('status',$stat)
        ->delete();

        return redirect()->route('adminkegiatan.index');
    }
}
