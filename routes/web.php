<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BookController::class, 'getBooks']);

Route::get('/userLogin', function () {
    return view('userSignIn');
});

Route::get('/userRegister', function () {
    return view('userRegister');
});

Route::get('/BookList', function () {
    $bookListArr = app('App\Http\Controllers\BookController')->getBooks();
    print_r($bookListArr);
    return view('bookList', ['bookList' => $bookListArr]);
});

Route::get('/adminLogin', function () {
    return view('adminSignIn');
});

Route::get('/checkOut', function () {
    return view('cartCheckOut');
});

Route::get('/viewReport', function () {
    return view('viewReport');
});

Route::get('/userProfile', function () {
    return view('userProfile');
});