<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;


class AuthController extends Controller
{
    public function register(Request $request){
        //validate
       $fields  =  $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required', 'max:255','email','unique:users'],
            'password'=>['required','confirmed', Password::min(8)->mixedCase()->letters()->numbers()->symbols()],
        ]);

        //register
        $user = User::create($fields);
        //login
        Auth::login($user);
        event(new Registered($user));
        //redirect
        return redirect()->route('payment');
    }

    //login User
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        if(Auth::attempt($fields,$request->remember)){
            if (Auth::user()->is_payment == 0) {
                // Ödeme yapılmamışsa ödeme sayfasına yönlendir
               
                return redirect()->route('payment');
                
            }elseif (Auth::user()->is_payment == 1 && Auth::user()->subscription_ends_at < now()) {
                Auth::user()->is_payment = 0; // Ödeme süresi dolmuşsa, ödeme yapılmadı olarak güncelle
                Auth::user()->save();
                
                return redirect()->route('payment');


            } else {
                
                return redirect()->intended('/');
            }
            
                
            
            
        }else{
            return back()->withErrors([
                'failure' => 'The provided credentials do not match our records.',
                ]);
        }

        
    }
    //logout User

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
