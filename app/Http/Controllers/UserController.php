<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    // Init "Item model" object
    public function __construct() {
       $this->User = new User();
    } 

    // Returns default page (dashboard view)
    public function index() {
        return view('/dashboard/users');
    }

    // Add item into table, redirect to default page (dashboard view)
    public function addUser(Request $request) {
        $user = [
            "user_fullname" => $request->input('user_fullname'),
            "user_name" => $request->input('user_name'),
            "password" => $request->input('password'),
            "user_role" => $request->input('user_role'),
        ];

        $this->User->addUser($user);
        return redirect('/dashboard/users');
    }

    // Show all items in table "item", returns dashboard_items view
    public function showUsers() {
        $users = [
            "users" => collect($this->User->getUser())
        ];

        return view('dashboard_users', $users);
    }

    
    public function editUser($user_id) {
        $users = [
            "users" => collect($this->User->searchUserRow($user_id))
        ];

        return view('user_edit', $users);
    }

    // Update item, redirect to default page (dashboard view)
    public function updateUser(Request $request) {
        $user_id = $request->user_id;
        $user = [
            "user_fullname" => $request->input('user_fullname'),
            "user_name" => $request->input('user_name'),
            "password" => $request->input('password'),
            "user_role" => $request->input('user_role'),
        ];

        $this->User->updateUser($user_id, $user);
        return redirect('/dashboard/users');
    }

    // Delete item, redirect to default page (dashboard view)
    public function deleteUser($user_id) {

        $this->User->deleteUser($user_id);
        return redirect('/dashboard/users');
    }
}
