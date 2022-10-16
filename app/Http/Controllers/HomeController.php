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
        $id = Auth::user()->id;
        $count = DB::select("SELECT count(*) FROM projects where users_id = '$id'");
        $projects = DB::select("SELECT * FROM projects where users_id = '$id'");
        return view('dashboard.home', compact('projects', 'count'));

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
