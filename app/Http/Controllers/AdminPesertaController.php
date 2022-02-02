<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminPesertaController extends Controller
{
public function index()
    {
        $users = DB::table('users')
        ->select('*')
        ->distinct()
        ->orderBy('created_at','desc')
        ->paginate(5);

        return view('admin/peserta',compact('users'));
    }

public function delete($id)
    {
        DB::delete('delete from users where id = ?',[$id]);
        return redirect()->route('peserta.index');
    }
public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin/editp',compact('user','id'));
    }

public function updatep(Request $request, $id)
    {
    $user = User::findOrFail($id); 

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->username = $request->input('username');
    $user->password = $request->input('password');
    $user->degree = $request->input('degree');
    $user->faculty = $request->input('faculty');
    $user->gender = $request->input('gender');
    $user->update();

    return redirect()->route('peserta.index');
    }
}
