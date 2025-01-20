<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller


{
    public function register(Request $request){
     //validate

       $fields  =  $request->validate([

        'name' => ['required','max:255'],
        'email' => ['required', 'max:255','email','unique:users'],
        'password'=>['required','min:3','confirmed'],
    ]);


    //register

   $user = User::create($fields);

    //login

    Auth::login($user);

    event(new Registered($user));

    //redirect
    return redirect()->route('home');
    }

    //login User

    public function login(Request $request){
        $fields = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        if(Auth::attempt($fields,$request->remember)){
            return redirect()->intended();
        }else{
            return back()->withErrors([
                'failure' => 'The provided credentials do not match our records.',
                ]);
            }
}

//logout User

public function logout(Request $request){

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}

}
