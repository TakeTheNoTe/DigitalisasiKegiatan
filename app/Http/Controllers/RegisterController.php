<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App;

class RegisterController extends Controller
{
    public function index()
    {
        return view('tambahpeserta');
    }

    public function store (Request $request)
    {

    $this->validate($request,[  
        'name' => 'required',
        'email' => 'required',
        'username' => 'required',
        'password' => 'required',
        'degree' => 'required',
        'faculty' => 'required',
        'gender' => 'required',
    ]);

    $user = new User; 

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->username = $request->input('username');
    $user->password = $request->input('password');
    $user->degree = $request->input('degree');
    $user->faculty = $request->input('faculty');
    $user->gender = $request->input('gender');
    $user->save();

    return redirect('login')->with('success','Peserta Berhasil Ditambahkan');
    }
}
