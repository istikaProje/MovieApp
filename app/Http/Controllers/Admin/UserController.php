<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Enums\Role;
class UserController extends Controller
{
    // Kullanıcı listeleme
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    // Kullanıcı oluşturma formu
    public function create()
    {
        return view('admin.users.create');
    }
// Yeni kullanıcı kaydetme
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'role' => ['required', Rule::in(Role::getValues())],
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => $request->role,
    ]);

    return redirect()->route('admin.users')->with('success', 'Kullanıcı başarıyla oluşturuldu.');
}



    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

     // Kullanıcı güncelleme
     public function update(Request $request, $id)
     {
         $user = User::findOrFail($id);
 
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
             'password' => 'nullable|string|min:8|confirmed',
             'role' => ['required', Rule::in(Role::getValues())],
            ]);
 
         $data = $request->only(['name', 'email', 'role']);
         if ($request->filled('password')) {
             $data['password'] = bcrypt($request->password);
         }
 
         $user->update($data);
 
         return redirect()->route('admin.users')->with('success', 'Kullanıcı başarıyla güncellendi.');
        }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }
}