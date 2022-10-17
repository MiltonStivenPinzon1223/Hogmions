<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Models\Projects;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
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
            $insert = DB::statement("INSERT INTO visits(ip, date, projects_id) values('$ip', '$date', '1')");
        }
    }else{
        $insert = DB::statement("INSERT INTO visits(ip, date, projects_id) values('$ip', '$date', '1')");
    }

    $views = array();
    for ($i=1; $i < 13; $i++) {
        $sql = "select count(date) as date from visits where projects_id= '1' and date like '%-0$i-%'";
        if ($i >= 10) {
            $sql = "select count(date) as date from visits where projects_id= '1' and date like '%-$i-%'";
        }
        $sqls = DB::select($sql);
        foreach ($sqls as $sql) {
            array_push($views, $sql->date);
        }
    }

        $id = Auth::user()->id;
        $projects = DB::select("SELECT * FROM projects where users_id = '$id'");
        return view('dashboard.home', compact('projects', 'views'));

    }

    public function catalogue()
    {
        return view('catalogue');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'telephone' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'active_projects' => "0",
            'url_photo' => "0",
            'password' => Hash::make($request->password),
        ]);
        $id = $user->id;
        return redirect()->route('login');
    }
}
