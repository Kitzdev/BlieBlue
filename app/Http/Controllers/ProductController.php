<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function showItem() {
        $item = DB::select('select * from item');

        return view('test', ['item' => $item]);
    }

    public function insertItem() {

    }
}
