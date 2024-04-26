<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function register(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = bcrypt($request->input('password'));
        
        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $pass;
        $user->save();
        auth()->login($user);
        return redirect('/')->with('success','Your account has been created!');
    }
}
