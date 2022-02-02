<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Activities;
use App\Attendances;
use App\Question;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Charts;

class AdminController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
       
    public function update(Request $req)
    {
        $admin = Admin::find($req->id);
        $admin->username = $req->input('username');
        $admin->email = $req->input('email');
        $admin->password = Hash::make($req->input('password'));
        $admin->name =$req->input('name');
        $admin->save();

        return redirect('admin/profile');
    }

    public function simpanlihat(Request $req,$id)
    {
        $attendances = Attendances::findOrFail($id);

        $attendances->status = $req->input('status');
        $attendances->update();

        return redirect('admin/kegiatan')->with('success','data deleted');
    }

}