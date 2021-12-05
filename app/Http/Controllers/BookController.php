<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function getBooks()
    {
        $books = DB::select('select * from book');
        dd($books);
    }
}
