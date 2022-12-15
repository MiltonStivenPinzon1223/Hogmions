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

        //inserta registro de visita
        date_default_timezone_set("America/Bogota");
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = now();
    $mes = date('m');
    
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

    //busqueda de visitas por mes
        $id = Auth::user()->id;
        $projects = DB::select("SELECT * FROM projects where users_id = '$id'");
        $final = array();
        foreach ($projects as $project) {
            $views = array();
            $object = (object) [];
            $mouths = array();
            for ($i= $mes -2; $i < $mes + 1; $i++) {
                $sql = "select count(date) as date from visits where projects_id= '$project->id' and date like '%-0$i-%'";
                if ($i >= 10) {
                    $sql = "select count(date) as date from visits where projects_id= '$project->id' and date like '%-$i-%'";
                }
                $sqls = DB::select($sql);
                foreach ($sqls as $sql) {
                    array_push($views, $sql->date);
                }
                switch ($i) {
                    case "01":
                        $mouth = "Enero";
                        break;
                    case "02":
                        $mouth = "Febrero";
                        break;
                    case "03":
                        $mouth = "Marzo";
                        break;
                    case "04":
                        $mouth = "Abril";
                        break;
                    case "05":
                        $mouth = "Mayo";
                        break;
                    case "06":
                        $mouth = "Junio";
                        break;
                    case "07":
                       $mouth = "Julio";
                       break;
                    case "08":
                        $mouth = "Agosto";
                        break;
                    case "09":
                       $mouth = "Septiembre";
                       break;
                    case "10":
                        $mouth = "Octubre";
                        break;
                    case "11":
                        $mouth = "Noviembre";
                        break;
                    case "12":
                        $mouth = "Diciembre";
                        break;
                }
                array_push($mouths, $mouth);
            }
                $name = $project->name;
                $object->name = $name;
                $object->views = $views;
                $object->mouths = $mouths;
                $object->color = "rgba(".rand(10,255).",".rand(10,255).",".rand(10,255).", .5)";
            array_push($final, $object);
        }
        //return $final;
        return view('dashboard.home', compact('projects', 'final'));

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
