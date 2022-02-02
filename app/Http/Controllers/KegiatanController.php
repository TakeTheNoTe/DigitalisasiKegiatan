<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use App\Detailactivities;
use App\Log;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $activities = DB::table('activities')
        ->select('*')
        ->distinct()
        ->paginate(5);

        return view('kegiatan',compact('activities','user'));
    }
    public function daftar($id,$name,$ids,$names,$start_time,$end_time,$date,$desc)
    {
        $daftar = new Detailactivities;

        $daftar->id_activities = $id;
        $daftar->activities = $name;
        $daftar->id_participants = $ids;
        $daftar->participants = $names;
        $daftar->start_time = $start_time;
        $daftar->end_time = $end_time;
        $daftar->date = $date;
        $daftar->save();

        $logd = new Log;

        $logd->activities = $name;
        $logd->id_participants = $ids;
        $logd->participants = $names;
        $logd->description = $desc;
        $logd->save();

        return redirect()->route('home.index');
    }
}
