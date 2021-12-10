<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //"global" items
    protected $bag;

    public function __construct()
    {
        $this->bag = array();
    }

    public function getOrders()
    {
        $orders = DB::select('select * from orders');
        dd($orders);
    }

    public function addOrder(Request $request){
        $payload = json_decode($request->getContent(), true);
        $id = $payload['Order_ID'];
        $status = $payload['OrderStatus'];
        $payment = $payload['OrderPayment'];
        $address = $payload['OrderDelivery'];
        $time = $payload['OrderDatetime'];
        $amount = $payload['OrderAmount'];
        
        $orders = DB::insert('insert into orders (Order_ID, OrderStatus, OrderPayment, OrderDelivery, OrderDatetime, OrderAmount) values (?, ?, ?, ?, ?, ?)', [$id, $status, $payment, $address, $time, $amount]);
        
        return $orders;
    }

}
