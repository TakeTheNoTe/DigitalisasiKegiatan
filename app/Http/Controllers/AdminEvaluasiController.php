<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use App\Attendances;
use App\Question;
use Illuminate\Support\Facades\DB;

class AdminEvaluasiController extends Controller
{

public function index()
    {
        $activities = DB::table('activities')
        ->select('id','name')
        ->distinct()
        ->paginate(5);

        $question = DB::table('questions')
        ->select('id','question')
        ->distinct()
        ->get();

        return view('admin/evaluasi',compact('question','activities'));
    }

public function editpertanyaan($id,$question)
    {
        return view('admin/editpertanyaan',compact('question','id'));
    }

public function updatepertanyaan(Request $req, $id)
    {
    	$updtp = Question::findOrFail($id); 

    	$updtp->question = $req->input('question');
    	$updtp->update();

    	return redirect()->route('adminevaluasi.index');
    }

public function lihatev($id)
    {
        $answ = DB::table('answers')
        ->select('id_participants','participants')
        ->where('id_activities',$id)
        ->distinct()
        ->get();

        $ev1 = DB::table('answers')
        ->where('id_activities',$id)
        ->where('answer','1')
        ->count('answer');

        $ev2 = DB::table('answers')
        ->where('id_activities',$id)
        ->where('answer','2')
        ->count('answer');

        $ev3 = DB::table('answers')
        ->where('id_activities',$id)
        ->where('answer','3')
        ->count('answer');

        $ev4 = DB::table('answers')
        ->where('id_activities',$id)
        ->where('answer','4')
        ->count('answer');

        $ev5 = DB::table('answers')
        ->where('id_activities',$id)
        ->where('answer','5')
        ->count('answer');

        return view('admin/lihatevaluasi', compact('answ','id','ev1','ev2','ev3','ev4','ev5'));
    }

public function lihathaev($id,$ids)
    {
        $answr = DB::table('answers')
        ->select('id_activities','question','answer')
        ->where('id_participants',$id)
        ->where('id_activities',$ids)
        ->distinct()
        ->get();

        return view('admin/lihathaev', compact('answr'));
    }
}
