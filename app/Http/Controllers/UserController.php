<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Projects;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $querys = DB::select("SELECT * from projects where users_id = '$id'");
        return $querys;
        return view('home', compact('querys'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function profile()
    {
        $id = Auth::user()->id;
        $users = user::where('id', $id)->first();
        $projects = DB::select("SELECT * FROM projects where users_id = '$id'");
        return view('dashboard.profile', compact('users', 'projects'));

    }
    public function update(Request $request, $id)
    {
        $query = DB::update('UPDATE users SET name = \''.$request->name.'\', proffession=\''.$request->proffession.'\', telephone = \''.$request->telephone.'\', email=\''.$request->email.'\' WHERE id = \''.$id.'\';');

        if ($query) {
            return redirect()->route('home');
        }else{
            return "Error al realizar la actualizacion, verifica si realmente hiciste un cambio.";
        }
    }
/*
    public function update_photo(Request $request, $id)
    {
        $request->validate([
            'file' => 'required'
        ]);

        $nombre = $_FILES['file']['name'];
        
        
        $servidor = 'C:\xampp\htdocs\hogmions\public\storage\user\\'.$nombre;
        $tipo = strtolower(pathinfo($servidor, PATHINFO_EXTENSION));
        $nombre = $id.".".$tipo;
        $url = 'storage\\\\user\\\\'.$id.".".$tipo;
        $servidor = 'C:\xampp\htdocs\hogmions\public\storage\user\\'.$nombre;
        if (move_uploaded_file($request->file('file'), $servidor)) {
            $query = DB::update('UPDATE users SET url_photo = \''.$url.'\' WHERE id = \''.$id.'\';');
            return redirect()->route('profile');
        }else{
            echo "Error.";
            die();
        } 
    }
*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function qr($url, $name)
    {
        $ruta = "../public/".$name.".svg";
        QrCode::generate($url, $ruta);
        $ruta = "../".$name.".svg";
        return $ruta;
    }

    public function create_project()
    {
        $id = Auth::user()->id;
        $projects = DB::select("SELECT * FROM projects where users_id = '$id'");
        return view('dashboard.create_project', compact('id', 'projects'));
    }

    public function store_project(Request $request)
    {
        $project = new Projects();
        $project->name = $request->name;
        $project->url = $request->url;
        $project->url_qr = "a";
        $project->users_id = Auth::user()->id;
        $project->cutting_day = date('j');
        $project->months_paid = '0';
        $project->views = '0';

        $project->save();
        $id = DB::select("select id from projects where name= '$project->name'");
        $url = "127.0.0.1/project/".$id[0]->id;
        $qr = UserController::qr($url, $project->name);
        $query = DB::statement("update projects set url_qr='$qr' where name='$project->name'");
        return redirect()->route('homes.index');
    }

    public function store_file(Request $request)
    {
        $nombre = str_replace(" ","_",$request->name).".pdf";
        $servidor = 'C:\xampp\htdocs\Hogmions\public\\'.$nombre;
        $tipo = strtolower(pathinfo($servidor, PATHINFO_EXTENSION));
        if (move_uploaded_file($request->file('file'), $servidor)) {
            $servidor = substr($servidor, 32);
            $servidor = "..\..\\".$servidor;
        }
        $project = new Projects();
        $project->name = $request->name;
        $project->url = $servidor;
        $project->url_qr = "a";
        $project->users_id = Auth::user()->id;
        $project->cutting_day = date('j');
        $project->months_paid = '0';
        $project->views = '0';

        $project->save();
        $id = DB::select("select id from projects where name= '$project->name'");
        $url = "127.0.0.1/project/".$id[0]->id;
        $qr = UserController::qr($url, $project->name);
        $query = DB::statement("update projects set url_qr='$qr' where name='$project->name'");
        return redirect()->route('homes.index');
    }
}
