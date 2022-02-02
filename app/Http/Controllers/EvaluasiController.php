<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detailactivities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EvaluasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $evaluation = DB::table('detailactivities')
        ->select('*')
        ->where('id_participants',$user->id)
        ->distinct()
        ->paginate(5);

        return view('evaluasi', compact('user','evaluation'));
    }
}
