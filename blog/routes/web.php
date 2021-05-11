<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function(){
//     return view('welcome');
// })->name('welcome')->middleware('checkLogin');
//Trang chủ
Route::get('/','ProductController@index')->name('homePage');

//Login
// Route::get('/login', function(){
//     return view('login');
// })->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
