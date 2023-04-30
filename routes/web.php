<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

/* actions on dashboard routing*/
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

/* displaying profile routing*/
Route::get('/profile', [UserController::class, 'showProfile'])->name('users.profile');
Route::get('/user/{id}', [UserController::class, 'showProfile']);

/*login*/
Route::post('/login', [LoginController::class, 'login'])->name('login');

/* main navigation routing */
Route::get('/', function () {return view('home');});
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/login', function () {return view('login');})->name('login');


Route::get('/admin/users', [UserController::class, 'search'])->name('users.search');


/* data.json searching */
Route::get('/profiles', [WikiSearch::class ,'showWikis'])->name('wikisearch.index');

