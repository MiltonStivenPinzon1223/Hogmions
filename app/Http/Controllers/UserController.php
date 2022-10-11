<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $querys = DB::select("SELECT * from projects where users_id = '$id'");
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


    public function profile($id)
    {
        $id = Auth::user()->id;
        $users = user::where('id', $id)->first();
        return view('profile', compact('users'));

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
        $users = user::where('id', $id)->first();

        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $query = DB::update('UPDATE users SET name = \''.$request->name.'\', proffession=\''.$request->proffession.'\', telephone = \''.$request->telephone.'\', email=\''.$request->email.'\' WHERE id = \''.$id.'\';');

        if ($query) {
            return redirect()->route('home');
        }else{
            return "Error al realizar la actualizacion, verifica si realmente hiciste un cambio.";
        }
    }

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

    public function qr()
    {
        QrCode::size(500)
            ->format('png')
            ->generate('www.google.com', public_path('images/qrcode.png'));
return view('prueba');
    }
}
