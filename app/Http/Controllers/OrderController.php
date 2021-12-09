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
        $ID = $payload['ID'];
        $book = DB::select('select BookName, Author, Category, Price from book where ID="'.$ID.'"');
        array_push($this->bag, $book[0]);
        return $this->bag;
        // return $book;
    }

    public function getCart()
    {
        return $bag = $this->bag;;
    }

}
