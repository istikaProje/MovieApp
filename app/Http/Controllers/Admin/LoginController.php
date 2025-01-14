<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Admin login sayfasını gösterir
    public function index()
    {
        return view('admin.login');
    }

    // Admin kullanıcı giriş işlemi
    public function authenticate(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt($fields, $request->remember)) {

            if(Auth::guard('admin')->user()->role !== 'admin') {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->withErrors([
                    'failure' => 'You are not autharized to acces this page.'
                ]);
            }
            // Redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        } else {
            // Return back with error
            return redirect()->route('admin.login')->withErrors([
                'failure' => 'The provided credentials do not match our records.'
            ]);
        }
    }

    // Admin kullanıcı çıkış işlemi
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}