<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/prueba', function () {
    return view('prueba');
});

Auth::routes();

Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::put('/update-photo/{id}', [UserController::class, 'update_photo'])->name('update-photo');

Route::resource('/home', HomeController::class)->names('homes');
Route::get('/register', [HomeController::class, 'create'])->name('register');
Route::get('/catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
