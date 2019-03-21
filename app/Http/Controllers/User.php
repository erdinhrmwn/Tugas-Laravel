<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    //
    public function index()
    {
        $nama = Auth::user();
        if (!Auth::check()) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('welcome', ['nama' => $nama->name]);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salah !');
        }

        // $email = $request->email;
        // $password = $request->password;

        // $data = ModelUser::where('email', $email)->first();
        // if ($data) { //apakah email tersebut ada atau tidak
        //     if (Hash::check($password, $data->password)) {
        //         Session::put('name', $data->name);
        //         Session::put('email', $data->email);
        //         Session::put('login', true);
        //         return redirect('/');
        //     } else {
        //         return redirect('login')->with('alert', 'Password atau Email, Salah !');
        //     }
        // } else {
        //     return redirect('login')->with('alert', 'Password atau Email, Salah!');
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('alert', 'Kamu sudah logout');
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'required|min:6|email|unique:users',
            'password' => 'required|min:6',
            'confirmation' => 'required|same:password',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('login')->with('alert-success', 'Kamu berhasil Register');
    }
}
