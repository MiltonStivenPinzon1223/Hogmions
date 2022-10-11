<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    date_default_timezone_set("America/Bogota");
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = now();
    $query = DB::select("SELECT * FROM visits where ip = '$ip' ORDER BY date desc");
    if ($query) {
        $fecha = $query[0]->date;
        $fecha2 = date("Y-m-d H:i:s");
        $nuevafecha = strtotime($fecha."+ 1 day");
        $nuevafecha = date("Y-m-d H:i:s", $nuevafecha);
        if ($fecha2 > $nuevafecha) {
            $insert = DB::statement("INSERT INTO visits(ip, date) values('$ip', '$date')");
        }
    }else{
        $insert = DB::statement("INSERT INTO visits(ip, date) values('$ip', '$date')");
    }
    return view('index');
})->name('index');

Auth::routes();

Route::get('qr', function () {
return QrCode::generate('https://www.youtube.com/watch?v=5y4_Xu4aA_I&t=305s', '../public/test.svg');
});


Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::put('/update-photo/{id}', [UserController::class, 'update_photo'])->name('update-photo');

Route::resource('/home', HomeController::class)->names('homes');
Route::get('/register', [HomeController::class, 'create'])->name('register');
Route::get('/catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
