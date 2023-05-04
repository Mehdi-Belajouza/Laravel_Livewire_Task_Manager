<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Livewire\ShowUsers;
use App\Http\Controllers\WikiSearch;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Admin
/* administration routing */
Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');

/* actions on dashboard routing*/
Route::get('/admin/users', [UserController::class, 'search'])->name('admin.users.search');// select
Route::post('/users', [UserController::class, 'store'])->name('admin.users.store'); //create
Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update'); //update
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy'); //delete

/* displaying profile routing*/
Route::get('/profile', [UserController::class, 'showProfile'])->name('admin.users.profile');
Route::get('/user/{id}', [UserController::class, 'showProfile']);


// Login
/*User login*/
Route::post('/login', [UserLoginController::class, 'login'])->name('login');
Route::post('/logout', [UserLoginController::class, 'logout'])->name('logout');
//___google___
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [LoginController::class,'handleGoogleCallback']);


/*Admin login*/
Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.admins.admin-login');
// Route::post('/admin/login', [AdminLoginController::class, 'logout'])->name('logout');
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.admins.admin-login');


/* main navigation routing */
Route::get('/', function () {return view('home');});
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/search', function () {return view('search');})->name('search');
Route::get('/blog', function () {return view('blog');})->name('blog');
Route::get('/login', function () {return view('login');})->name('login');

/* data.json searching */
Route::get('/profiles', [WikiSearch::class ,'showWikis'])->name('wikisearch.index');

/* Manage adminstrator */

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.admins.admin-create');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.admins.index');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.admins.store');
Route::group(['middleware' => ['auth:admin']], function () {

});


// Route::get('/admin/create', [AdminUserController::class, 'create'])->name('admin.create');
// Route::post('/admin/create', [AdminUserController::class, 'create']);
