<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest:admin');
	}

   public function showLoginForm()
   {
   	return view('auth.admin-login');
   }

   public function login(Request $request)
   {
   	//validate data

   	if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
   		return redirect()->intended(route('peserta.index'));
   	}
   	return redirect()->back()->withInput($request->only('username','remember'));


   }
}
