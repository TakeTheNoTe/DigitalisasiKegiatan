<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminLogController extends Controller
{

public function index()
    {
        $logs = DB::table('logs')
        ->select('*')
        ->orderBy('created_at','desc')
        ->paginate(6);
        return view('admin/logactivity',compact('logs'));
    }

public function delog()
    {
        DB::table('logs')
        ->delete();

        return redirect()->route('logaktifitas.index');
    }
}
