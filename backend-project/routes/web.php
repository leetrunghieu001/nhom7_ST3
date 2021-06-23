<?php

use Illuminate\Support\Facades\Artisan;
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
//-------------- Frontend
Route::get('/clear-cache',function(){
    $exitCode = Artisan::call('cacher:clear');
});

//Trang chủ
Route::get('/', 'HomeController@index');
Route::get('/homePage', 'HomeController@index');

//Search
Route::post('/search', 'HomeController@search');



// Category product home
Route::get('/category_product/{category_id}', 'CategoryProduct@show_category_home');

// Brand product home
Route::get('/brand_product/{brand_id}', 'BrandProduct@show_brand_home');

// Detail product home
Route::get('/details_product/{product_id}', 'ProductController@product_details');


//-------------- Backend
// Search
Route::post('/search_order', 'CheckoutController@search_order');

Route::post('/search_brand', 'CheckoutController@search_brand');

Route::get('/search_product', 'CheckoutController@search_product');

Route::post('/search_category', 'CheckoutController@search_category');


Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');


// Catogery Product
Route::get('/add_category_product', 'CategoryProduct@add_category_product');
Route::get('/all_category_product', 'CategoryProduct@all_category_product');

Route::get('/unactive_category_product/{category_product_id}', 'CategoryProduct@unactive_category_product');
Route::get('/active_category_product/{category_product_id}', 'CategoryProduct@active_category_product');
Route::get('/edit_category_product/{category_product_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete_category_product/{category_product_id}', 'CategoryProduct@delete_category_product');

Route::post('/save_category_product', 'CategoryProduct@save_category_product');
Route::post('/update_category_product/{category_product_id}', 'CategoryProduct@update_category_product');

// Brand Product
Route::get('/add_brand_product', 'BrandProduct@add_brand_product');

Route::get('/all_brand_product', 'BrandProduct@all_brand_product');

Route::get('/unactive_brand_product/{brand_product_id}', 'BrandProduct@unactive_brand_product');
Route::get('/active_brand_product/{brand_product_id}', 'BrandProduct@active_brand_product');
Route::get('/edit_brand_product/{brand_product_id}', 'BrandProduct@edit_brand_product');
Route::get('/delete_brand_product/{brand_product_id}', 'BrandProduct@delete_brand_product');

Route::post('/save_brand_product', 'BrandProduct@save_brand_product');

Route::post('/update_brand_product/{brand_product_id}', 'BrandProduct@update_brand_product');

//Product
Route::get('/add_product', 'ProductController@add_product');

Route::get('/all_product', 'ProductController@all_product');

Route::get('/unactive_product/{product_id}', 'ProductController@unactive_product');
Route::get('/active_product/{product_id}', 'ProductController@active_product');
Route::get('/edit_product/{product_id}', 'ProductController@edit_product');
Route::get('/delete_product/{product_id}', 'ProductController@delete_product');

Route::post('/save_product', 'ProductController@save_product');

Route::post('/update_product/{product_id}', 'ProductController@update_product');


// Cart
Route::post('/update_cart_quantity', 'CartController@update_cart_quantity');
Route::post('/save_cart', 'CartController@save_cart');
Route::get('/show_cart', 'CartController@show_cart');
Route::get('/delete_to_cart/{rowId}', 'CartController@delete_to_cart');


// Check out
Route::get('/login_checkout', 'CheckoutController@login_checkout');
Route::get('/logout_checkout', 'CheckoutController@logout_checkout');
Route::post('/add_customer', 'CheckoutController@add_customer');

Route::post('/login_customer', 'CheckoutController@login_customer');

Route::post('/order_place', 'CheckoutController@order_place');
Route::get('/show_checkout', 'CheckoutController@show_checkout');
Route::get('/payment', 'CheckoutController@payment');
Route::post('/save_checkout_customer', 'CheckoutController@save_checkout_customer');



// Orders
Route::get('/manager_order', 'CheckoutController@manager_order');
Route::get('/view_order/{order_id}', 'CheckoutController@view_order');
Route::get('/delete_order/{rowId}', 'CheckoutController@delete_order');
Route::post('/update_order/{order_id}', 'CheckoutController@update_order');

// Send Mail
Route::get('/send-mail', 'CheckoutController@send_mail');

//Comment

Route::post('/add-comment','CommentController@AddNewComment');


Route::get('/delete_comment/{comment_id}/{product_id}','CommentController@DeleteComment');
