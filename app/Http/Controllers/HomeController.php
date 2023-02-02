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
    $año = date('o');
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
        $mesi = $mes +1;
        foreach ($projects as $project) {
            $views = array();
            $object = (object) [];
            $mouths = array();
            $mes = $mesi;
            for ($i= 0; $i < 3; $i++) {
                if ($mes == 1) {
                    $sql = "select count(date) as date from visits where projects_id= '$project->id' and date like '%".$año-1 ."-12-%'";
                    $mouth= "Diciembre-" . $año-1;
                }elseif ($mes == 0) {
                    $sql = "select count(date) as date from visits where projects_id= '$project->id' and date like '%".$año-1 ."-11-%'";
                    $mouth= "Noviembre-" . $año-1;
                }elseif ($mes >= 10) {
                    $sql = "select count(date) as date from visits where projects_id= '$project->id' and date like '%$año-".$mes-1 ."-%'";
                }else{
                    $sql = "select count(date) as date from visits where projects_id= '$project->id' and date like '%$año-0".$mes-1 ."-%'";
                }
                $mes = $mes - 1;
                $sqls = DB::select($sql);
                foreach ($sqls as $sql) {
                    array_push($views, $sql->date);
                }
                switch ($mes) {
                    case "01":
                        $mouth = "Enero". "-" . $año;
                        break;
                    case "02":
                        $mouth = "Febrero". "-" . $año;
                        break;
                    case "03":
                        $mouth = "Marzo". "-" . $año;
                        break;
                    case "04":
                        $mouth = "Abril". "-" . $año;
                        break;
                    case "05":
                        $mouth = "Mayo". "-" . $año;
                        break;
                    case "06":
                        $mouth = "Junio". "-" . $año;
                        break;
                    case "07":
                       $mouth = "Julio". "-" . $año;
                       break;
                    case "08":
                        $mouth = "Agosto". "-" . $año;
                        break;
                    case "09":
                       $mouth = "Septiembre". "-" . $año;
                       break;
                    case "10":
                        $mouth = "Octubre". "-" . $año;
                        break;
                    case "11":
                        $mouth = "Noviembre". "-" . $año;
                        break;
                    case "12":
                        $mouth = "Diciembre". "-" . $año;
                        break;
                }
                array_push($mouths, $mouth);
            }
                $name = $project->name;
                $object->name = $name;
                $object->views = array_reverse($views);
                $object->mouths = array_reverse($mouths);
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
