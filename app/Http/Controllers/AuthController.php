<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login_view() {
        return view('login');
    }

    public function login_process(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $cek_user = User::where('username', $username)->where('password', $password)->first();
        if($cek_user){
            return redirect()->route('index');
        }
        else {
            return redirect()->route('login');
        }
    }
    
    public function register_view() {
        return view('register');
    }

    public function register_process(Request $request) {
        $name = $request->name;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        User::create([
            'name'=>$name,
            'username'=>$username,
            'email'=>$email,
            'password'=>$password,
        ]);
        return redirect()->route('login');
    }
    public function hasil_view() {
        return view('hasil');
    }
    public function hasil_process(Request $request) {
        return redirect()->route('hasil');
    }
}

