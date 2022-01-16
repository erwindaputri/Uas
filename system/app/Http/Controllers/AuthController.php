<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function showLogin(){
		return view('login');
	}

	function LoginProcess(){
	
		if(request('login_as') == 1) {
			if(Auth::guard('pengguna')->attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('home')-> with('success', 'Login Berhasil');
			}else{
				return back()->with('danger', 'Login Gagal. Silahkan cek email dan password anda');
			}
		}
			else{
			if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('admin/dashboard')-> with('success', 'Login Berhasil');
			}else{
				return back()->with('danger', 'Login Gagal. Silahkan cek email dan password anda');
			}

		}
	}

	function logout(){
		Auth::logout();
		Auth::guard('user')->logout();
		Auth::guard('pengguna')->logout();
		return redirect('login');
	}

	function registration(){

	}

	function forgotPassword(){
		
	}
} ?>