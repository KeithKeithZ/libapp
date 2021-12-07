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

Route::get('/filterBooks/{params}', function ($params) {
    $array = explode("&", $params);
    $key = explode("=", $array[0])[1];
    $value = explode("=", $array[1])[1];
    return App::call('App\Http\Controllers\BookController@filterBooks' , ['key' => $key, 'value' => $value]);
    $bookListArr = app('App\Http\Controllers\BookController')->filterBooks($key, $value);
    return view('bookList', ['bookList' => $bookListArr]);
});

// Route::get('/filteredBookList', function () {
    
// });