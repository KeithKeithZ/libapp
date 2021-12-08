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

    public function getUserLogin ($value1, $value2)
    {
        $user = collect(DB::select('select * from users where Username="'.$value1.'" AND UserPassword="'.$value2.'"'))->first();
        return $user; 
    }
}
