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

    public function addToCart(Request $request)
    {
        $payload = json_decode($request->getContent(), true);
        $this-> bag = $payload['shoppingBag'];
        return redirect()->route('checkOut');
    }

    public function getCart()
    {
        return view('cartCheckOut', ['shoppingBag' => $this-> bag]);
    }

}
