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
Route::get('project/{id}', function($id){
    date_default_timezone_set("America/Bogota");
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = now();
    $query = DB::select("SELECT * FROM visits where ip = '$ip' AND projects_id='$id' ORDER BY date desc");
    if ($query) {
        $fecha = $query[0]->date;
        $fecha2 = date("Y-m-d H:i:s");
        $nuevafecha = strtotime($fecha."+ 1 day");
        $nuevafecha = date("Y-m-d H:i:s", $nuevafecha);
        if ($fecha2 > $nuevafecha) {
            $insert = DB::statement("INSERT INTO visits(ip, date, projects_id) values('$ip', '$date', '$id')");
        }
        }else{
            $insert = DB::statement("INSERT INTO visits(ip, date, projects_id) values('$ip', '$date', '$id')");
        }
	$project = DB::select("select * from projects where id = '$id'");
    return redirect($project[0]->url) ;
});
Route::post('/project/store', [UserController::class, 'store_project'])->name('project.store');
Route::post('/project/store_file', [UserController::class, 'store_file'])->name('project.file');
Route::post('/qr', [UserController::class, 'qr'])->name('qr');
Route::put('/update-photo/{id}', [UserController::class, 'update_photo'])->name('update-photo');

Route::resource('/home', HomeController::class)->names('homes');
Route::get('/register', [HomeController::class, 'create'])->name('register');
Route::get('/catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
