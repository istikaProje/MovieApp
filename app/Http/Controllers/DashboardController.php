<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Password;



class DashboardController extends Controller
{
    public function index()
    {
        return view('users.dashboard');
    }

    public function updateDashboard(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'name' => 'required|string|unique:users,name,' . auth()->id(),
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'password' => ['nullable', 'confirmed', Password::min(8)->mixedCase()->letters()->numbers()->symbols()],
        ]);

        $user = auth()->user();

        // Eski şifre doğrulama
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The old password is wrong.']);
        }

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('status', 'Profile updated.');
    }

    public function deleteAccount(){

        $user = auth()->user();

        $user->delete();

        return redirect('/')->with('success', 'Account deleted successfully.');
    }




   // Profil fotoğrafını güncelleme
   public function updatePhoto(Request $request)
   {
       $request->validate([
           'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);

       $user = Auth::user();

       // Eski fotoğrafı sil
       if ($user->profile_photo && File::exists(public_path('avatars/' . $user->profile_photo))) {
           File::delete(public_path('avatars/' . $user->profile_photo));
       }

       // Yeni fotoğrafı kaydet
       $fileName = time() . '.' . $request->file('profile_photo')->getClientOriginalExtension();
       $request->file('profile_photo')->move(public_path('avatars'), $fileName);

       $user->profile_photo = $fileName;
       $user->save();

       return redirect()->back()->with('success', 'Profile photo updated.');
   }

   // Profil fotoğrafını silme
   public function deletePhoto()
   {
       $user = Auth::user();

       if ($user->profile_photo && File::exists(public_path('avatars/' . $user->profile_photo))) {
           File::delete(public_path('avatars/' . $user->profile_photo));
           $user->profile_photo = null;
           $user->save();
       }

       return redirect()->back()->with('success', 'Profile photo deleted.');
   }



}
