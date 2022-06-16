<?php

//App\Http\Controllers
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller{

     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required', 'min:5', 'max:255', 'unique:register'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session->flash('success', 'Registration sucessfull!');

        return redirect('/home');

     }
}
    