<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function templateLogin () {
        return view ('login');
    }

    public function login (LoginRequest $request) {
        $data = [
            'email' =>$request->email,
            'password' =>$request->password
        ];

        if(Auth::attempt($data)) {
            $account = DB::table('users')->where('email', $request->email)->first();
            if($account->role == 1 ){return redirect()->route('adminIndex')->with('success', "Hello admin, you logged!");}
            else{return redirect()->route('home')->with('success', "Hello adventure, you logged!");}
        } else {
            return redirect()->route('login')->with('error', "Email or pasword not match!"); 
        }
    }

    public function logout (Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('home');
    }

}
