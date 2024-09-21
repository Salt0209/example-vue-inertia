<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $users = User::all();

        return inertia('Home', [
            'users' => $users,
        ]);
    }
    public function store(Request $request)
    {
        $field = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        // Save a new category to the database
        User::create($field);

        return redirect('/');
    }
}
