<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrders()
    {
        $orders = DB::select('select * from orders');
        dd($orders);
    }
}
