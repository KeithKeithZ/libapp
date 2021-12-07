<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function getBooks()
    {
        $books = DB::select('select * from book left join publisher on book.Publisher_ID = publisher.Publisher_ID');
        return $books;
    }

    public function filterBooks($key, $value)
    {
        $books = collect(DB::select('select * from book left join publisher on book.Publisher_ID = publisher.Publisher_ID'))->where($key, $value);
        return $books;
    }
}
