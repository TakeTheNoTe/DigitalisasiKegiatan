<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Activities;
use App\Detailactivities;
use App\Attendances;
use App\Question;
use App\Answer;
use App\Log;
use App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
public function index()
    {
        $user = Auth::user();
        $activities = DB::table('detailactivities')
        ->select('*')
        ->where('id_participants',$user->id)
        ->distinct()
        ->get();
        
        $attendances = DB::table('attendances')
        ->select('*')
        ->where('id_participants',$user->id)
        ->distinct()
        ->paginate(2);
        return view('absensi', compact('user','activities','attendances'));
    }

public function absenm($id,$ids,$name,$names,$status_req, $status, $desc)
    {
        $absen = new Attendances;

        $absen->id_activities = $id;
        $absen->activities = $name;
        $absen->id_participants = $ids;
        $absen->participants = $names;
        $absen->status_request = $status_req;
        $absen->status = $status;
        $absen->save();

        $loga = new Log;

        $loga->activities = $name;
        $loga->id_participants = $ids;
        $loga->participants = $names;
        $loga->description = $desc;
        $loga->save();

        return redirect('presensi');
    }

    public function absenk($id,$ids,$name,$names,$status_req,$status,$desc)
    {
        $absen = new Attendances;

        $absen->id_activities = $id;
        $absen->activities = $name;
        $absen->id_participants = $ids;
        $absen->participants = $names;
        $absen->status_request = $status_req;
        $absen->status = $status;
        $absen->save();

        $loga = new Log;

        $loga->activities = $name;
        $loga->id_participants = $ids;
        $loga->participants = $names;
        $loga->description = $desc;
        $loga->save();

        return redirect('presensi');
    }
}
