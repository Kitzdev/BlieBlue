<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_name' => 'required|max:255',
            'password' => 'required', 'min:5', 'max:255', 'unique:register'
        ]);

        $validatedData['user_fullname'] = $request->input('user_fullname');
        $validatedData['user_role'] = $request->input('user_role');

        (new User())->addUser($validatedData);

        Session::flash('message', "Anda berhasil terdaftar");
        return redirect('/');
    }
}
