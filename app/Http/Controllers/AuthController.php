<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

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
        //'ConfirmPassword' => 'required|min:8',
    ]);

        $reg['name'] = $request->name;
        $reg['email'] = $request->email;
        $reg['password'] = $request->password;

        $user = User::create($reg);
        if(!$user){
            return redirect(url('/registerAdmin'))->with('error','Registered failed, try again');
        }
        return redirect(url('/loginAdmin'))->with('success', 'Register successfull');
    } 


    public function forgot(){

        return view('frontend.auth.forgot');
    }
}
