<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     public function registerForm (){
         return view('register');
     }

     public function register (RegisterRequest $request){
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
          ]);

        return redirect('/');
     }

     public function loginForm (){
         return view('login');
     }

     public function login(Request $request){
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
          ];
          if (auth()->attempt($credentials)) {
            return redirect('/');
          }

          return view('login', ['loginFailed' => true]);
     }
     public function logout(){
        Auth::logout();
        return redirect('/login');
     }
}

