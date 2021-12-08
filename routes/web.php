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

Route::get('/user', [UserController::class, 'getUsers']);

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
    $userProfile = app('App\Http\Controllers\UserController')->getUsers();
    return view('userProfile', ['userProfile' => $userProfile]);
});

Route::get('/filterBooks/{params}', function ($params) {
    $array = explode("&", $params);
    $key = explode("=", $array[0])[1];
    $value = explode("=", $array[1])[1];
    $bookListArr=App::call('App\Http\Controllers\BookController@filterBooks' , ['key' => $key, 'value' => $value]);
    return view('bookList', ['bookList' => $bookListArr]);
});

Route::get('/userProfile/{params}', function ($params) {
    $array = explode("=", $params);
    $value =$array[1];
    $userProfile=App::call('App\Http\Controllers\UserController@getUser' , ['value' => $value]);
    return view('userProfile', ['user' => $userProfile]);
});

Route::post('/userRegister', 'App\Http\Controllers\BookController@addOne');