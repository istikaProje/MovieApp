<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Movie;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $moviesCount = Movie::count();
        return view('admin.dashboard', compact('usersCount', 'moviesCount'));
    }
}