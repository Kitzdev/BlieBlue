<?php

//App\Http\Controllers

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
}
