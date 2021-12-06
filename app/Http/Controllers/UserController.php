<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = DB::select('select * from users');
        dd($users);
    }
}
