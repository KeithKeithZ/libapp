<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getAdmins()
    {
        $admins = DB::select('select * from admin');
        dd($admins);
    }

    public function getAdminLogin ($value1, $value2)
    {
        $admin = collect(DB::select('select * from admin where AdminName="'.$value1.'" AND AdminPassword="'.$value2.'"'))->first();
        return $admin; 
    }
}
