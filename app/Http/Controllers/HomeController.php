<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

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
        $users = user::where('id', $id)->first();
        return view('home', compact('users'));

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
            'profession' => "0",
            'password' => Hash::make($request->password),
        ]);
        $id = $user->id;
        return redirect()->route('profile', compact('id'));
    }
}
