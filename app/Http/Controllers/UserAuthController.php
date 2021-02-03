<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
	function login(){
		return view('auth.login');
	}

	function daftar(){
		return view('auth.daftar');
	}

	function buat(Request $request){
		$request->validate([
			'nama' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:5|max:12',
		]);

		$user = new User();
		$user->nama = $request->nama;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$query = $user->save();

		if($query){
			return back()->with('berhasil','Akun berhasil di buat!');
		}else{
			return back()->with('gagal','Akun gagal di buat!');
		}

	}

	function cekLogin(Request $request){
		$request->validate([
			'email' => 'required|email',
			'password' => 'required|min:5|max:12',
		]);

		$user = User::where('email','=',$request->email)->first();
		if($user){
			if(Hash::check($request->password, $user->password)){
				$request->session()->put('LoggedUser',$user->id);
				return redirect('profile');
			}else{
				return back()->with('gagal','password salah');
			}
		}else{
			return back()->with('gagal','email belum terdaftar');
		}
	}

	function profile(){
		if(session()->has('LoggedUser')){
			$user = User::where('id','=', session('LoggedUser'))->first();
			$data = [
				'UserInfo'=>$user
			];
		}
		return view('admin.profile', $data);
	}

	function keluar(){
		if(session()->has('LoggedUser')){
			session()->pull('LoggedUser');
			return redirect('login');
		}
	}

}
