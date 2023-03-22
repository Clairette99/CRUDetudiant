<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.index');
})->name('index');

Route::get('/login', function () {
   return view('layouts.login');
})->name('login');

Route::get('/register', function () {
    return view('layouts.register');
 })->name('register');

 Route::get('/profile', function () {
    return view('layouts.profile');
 })->name('profile');


 Route::view('etudiants', 'livewire.home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
