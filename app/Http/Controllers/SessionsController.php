<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SessionsController extends Controller
{
    public function logout(){
        auth()->logout();
        return redirect('/login')->with('success','Logged out of the account');
    }
    
    public function Logincheck(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials) ){
            return redirect('/')->with('success','Welcome, you are logged in!');
        }
        else{
            return redirect('/login')->with('fail','Invalid User!');
        }
    }
}
