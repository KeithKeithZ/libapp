<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = DB::select('select * from users');
        return $users;
    }

    public function getUser($value)
    {
        $user = collect(DB::select('select * from users'))->firstWhere('Username', $value);
        return $user;
    }

    public function getUserLogin(Request $request)
    {
        $username = $request->get('Username');
        $password = $request->get('Password');
        $user = collect(DB::select('select * from users where Username="'.$username.'" AND UserPassword="'.$password.'"'))->first();
        return response($user, 200)
                    ->header('Content-Type', 'application/json');
    }
}
