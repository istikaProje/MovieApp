<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\MoviesController as FrontMoviesController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\CategoryController as FrontCategoryController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;

Route::view('/','home.index')->name('home');

Route::middleware('guest')->group(function(){
    Route::view('/register','auth.register')->name('register');
    Route::post('/register',[AuthController::class,'register']);
    Route::view('/login','auth.login')->name('login');
    Route::post('/login',[AuthController::class,'login']);
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/category/{id}', [FrontCategoryController::class, 'show'])->name('category.show');
    Route::get('/movies', [FrontMoviesController::class, 'index'])->name('movies.index');
    Route::get('/movies/{id}', [FrontMoviesController::class, 'show'])->name('movies.show');
    Route::get('/movies/{movie}/watch', [FrontMoviesController::class, 'watch'])->name('movies.watch');
    Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');
Route::post('/movies/{id}/comments', [MoviesController::class, 'addComment'])->middleware('auth')->name('movies.comment');

  Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');


});

Route::middleware('admin.guest')->group(function(){
    Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
});

Route::middleware('admin.auth')->group(function(){
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('admin.logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');

    Route::get('/admin/movies', [AdminMovieController::class, 'index'])->name('admin.movies.index');
    Route::get('/admin/movies/create', [AdminMovieController::class, 'create'])->name('admin.movies.create');
    Route::post('/admin/movies', [AdminMovieController::class, 'store'])->name('admin.movies.store');
    Route::get('/admin/movies/{id}/edit', [AdminMovieController::class, 'edit'])->name('admin.movies.edit');
    Route::put('/admin/movies/{id}', [AdminMovieController::class, 'update'])->name('admin.movies.update');
    Route::delete('/admin/movies/{id}', [AdminMovieController::class, 'destroy'])->name('admin.movies.destroy');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin.users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/admin.categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/admin.categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin.categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');



});




