<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function login(){

        return view('frontend.auth.login');
    }

    public function createlogin(Request $request){
       $validData = $request->validate([
        
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    
        return $request->all();

    }

    public function register(){

        return view('frontend.auth.register');
    }
    
      public function registerStore(Request $request){

        $regData = $request->validate([
        
        'name' => 'required|string|max:50',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'Cpassword' => 'required|min:8',
    ]);

    
        return $request->all();
    }


    public function forgot(){

        return view('frontend.auth.forgot');
    }
}
