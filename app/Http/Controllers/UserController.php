<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

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
        $username = $request->input()['username'];
        $password = $request->input()['password'];

        $user = DB::select('select * from users where Username="'.$username.'" AND UserPassword="'.$password.'"');
        if (sizeof($user) > 0) {
            $request->session()->put('user', $username);
            return redirect('userProfile');
        } else {
            echo "Login Failed";
        }
    }

    public function addOne(Request $request){
        $payload = json_decode($request->getContent(), true);
        $username = $payload['Username'];
        $psw = $payload['UserPassword'];
        $email = $payload['Email'];
        $address = $payload['Address'];
        $phone = $payload['PhoneNumber'];
        
        $users = DB::insert('insert into users (Username, UserPassword, Email, Address, PhoneNumber, BillingInformation, OrderHistory) values (?, ?, ?, ?, ?, ?, ?)', [$username, $psw, $email, $address, $phone, '','']);
        return $users;
    }
}
