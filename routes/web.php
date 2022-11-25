<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

Auth::routes();

Route::get('/login-google', function ()
{
    return Socialite::driver('google')->redirect();
})->name('login-google');

Route::get('/google-callback', function ()
{
    $user = Socialite::driver('google')->user();
    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
    if ($userExists) {
        Auth::login($userExists);
    }else{
        $usernew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);

        Auth::login($usernew);
    }

    return redirect('/home');
});


Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/project/create', [UserController::class, 'create_project'])->name('project.create');
Route::post('/project/store', [UserController::class, 'store_project'])->name('project.store');
Route::post('/qr', [UserController::class, 'qr'])->name('qr');
Route::put('/update-photo/{id}', [UserController::class, 'update_photo'])->name('update-photo');

Route::resource('/home', HomeController::class)->names('homes');
Route::get('/register', [HomeController::class, 'create'])->name('register');
Route::get('/catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
