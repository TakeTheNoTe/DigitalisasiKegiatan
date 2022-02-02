<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use Illuminate\Support\Facades\DB;

class AdminKegiatanController extends Controller
{
public function index()
    {
        $activities = DB::table('activities')
        ->select('*')
        ->distinct()
        ->orderBy('created_at','desc')
        ->paginate(5);

        return view('admin/kegiatan',compact('activities'));
    }

public function tambahkegiatan()
    {
        return view('admin.tambahkegiatan');
    }

public function insertk (Request $request)
    {
    $this->validate($request,[  
        'name' => 'required',
        'date' => 'required',
        'participants' => 'required',
        'open_date' => 'required',
        'close_date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'link' => 'required',
    ]);

    $user = new Activities; 

    $user->name = $request->input('name');
    $user->date = $request->input('date');
    $user->participants = $request->input('participants');
    $user->open_date = $request->input('open_date');
    $user->close_date = $request->input('close_date');
    $user->start_time = $request->input('start_time');
    $user->end_time = $request->input('end_time');
    $user->link = $request->input('link');
    $user->save();

    return redirect()->route('adminkegiatan.index');
    }

public function deletek($id)
    {
        DB::delete('delete from activities where id = ?',[$id]);
        return redirect()->route('adminkegiatan.index');
    }

public function editk($id)
    {
        $activities = Activities::findOrFail($id);
        return view('admin/editk',compact('activities','id'));
    }

public function updatek(Request $request, $id)
    {
    $user = Activities::findOrFail($id); 

    $user->name = $request->input('name');
    $user->date = $request->input('date');
    $user->participants = $request->input('participants');
    $user->open_date = $request->input('open_date');
    $user->close_date = $request->input('close_date');
    $user->start_time = $request->input('start_time');
    $user->end_time = $request->input('end_time');
    $user->link = $request->input('link');
    $user->update();

    return redirect()->route('adminkegiatan.index');
    }
}
