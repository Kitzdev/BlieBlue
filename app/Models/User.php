<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    // Show all users in table "user"
    public function getUser()
	{
	   $users = DB::select('SELECT * FROM user');
       return $users;
	}

    // Add user into table "user"
    public function addUser($user) {
        $user_fullname = $user['user_fullname'];
        $user_name  = $user['user_name'];
        $password   = $user['password'];
        $user_role  = $user['user_role'];

        DB::insert('INSERT INTO user (user_fullname, user_name, password, user_role) VALUES (?, ?, ?, ?)', [$user_fullname, $user_name, $password, $user_role]);
    }

    // Update user by user_id, require new user data
    public function updateUser($user_id, $user) {
        
        $user_fullname  = $user['user_fullname'];
        $user_name      = $user['user_name'];
        $password       = $user['password'];
        $user_role      = $user['user_role'];

        DB::update('UPDATE user SET user_fullname = ?, user_name = ?, password = ?, user_role = ? WHERE user_id = ?', [$user_fullname, $user_name, $password, $user_role, $user_id]);
    }

    // Search row by user_id
    public function searchuserRow($user_id) {
        $user = DB::select('select * from user where user_id = ?', [$user_id]);
        return $user;
    }

    // Delete user by user_id
    public function deleteUser($user_id) {
        DB::delete('delete from user where user_id = ?', [$user_id]);
    }
}
