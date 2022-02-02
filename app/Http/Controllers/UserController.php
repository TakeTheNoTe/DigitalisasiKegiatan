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
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $dact = Detailactivities::select('*')
        ->where('id_participants',$user->id)
        ->distinct()
        ->paginate(2);

        return view('home', compact('user','dact'));
    }

    public function hapusdk($id,$ids)
    {
        DB::table('detailactivities')
        ->where('id_participants', $ids)
        ->where('id_activities', $id)
        ->delete();
        
        return redirect()->route('home.index');
    }

    public function gantipassword(Request $request, $id, $name, $act, $desc)
    {
        $gp = User::findOrFail($id);

        $gp->password = $request->input('password');
        $gp->update();

        $log = new Log;

        $log->id_participants = $id;
        $log->participants = $name;
        $log->activities = $act;
        $log->description = $desc;
        $log->save();

        return redirect()->route('home.index');
    }
}
