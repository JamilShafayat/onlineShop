<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.home');
});

Route::get('/a', function () {
    return view('frontend.checkout');
});

Route::get('/b', function () {
    return view('frontend.contact');
});

Route::get('/c', function () {
    return view('frontend.shop-grid');
});


Route::get('/d', function () {
    return view('frontend.shop-details');
});

Route::get('/e', function () {
    return view('frontend.shoping-cart');
});

Route::get('/', function () {
    return view('frontend.home');
});

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', 'Frontend\AuthController@showHome')->name('main');
Route::get('/home', 'Frontend\AuthController@showHome')->name('main');
Route::get('/registration', 'Frontend\AuthController@showRegistration')->name('registration');
Route::post('/registration', 'Frontend\AuthController@processRegistration')->name('registration');
Route::get('/login', 'Frontend\AuthController@showLogin')->name('login');
Route::post('/login', 'Frontend\AuthController@processLogin')->name('login');
Route::get('/logout', 'Frontend\AuthController@logout')->name('logout');

Route::get('/productList', 'Frontend\ProductController@showList')->name('productList');
Route::get('/productDetails/{id}', 'Frontend\ProductController@showDetails')->name('productDetails');

Route::get('/shopingCart', 'Frontend\CartController@showCart')->name('shopingCart');
Route::get('/checkout', 'Frontend\CartController@showCheckout')->name('checkout');
Route::post('/checkout', 'Frontend\CartController@processCheckout')->name('checkout');

Route::get('/contact', 'Frontend\ContactController@showContact')->name('contact');


Route::get('/dashboard', 'Backend\DashboardController@showDashboard')->name('dashboard');
Route::get('/showAll', 'Backend\DashboardController@showAll')->name('showAll');
//  Configarations
Route::resource('area', 'Backend\AreaController');
Route::resource('userType', 'Backend\UserTypeController');
Route::resource('user', 'Backend\UserController');
Route::resource('category', 'Backend\CategoryController');
Route::resource('product', 'Backend\ProductController');
Route::resource('order', 'Backend\OrderController');
Route::resource('task', 'Backend\taskController');

Route::get('/pdfExport/{id}','Backend\OrderController@pdfExport')->name('pdfExport');
Route::get('/report','Backend\OrderController@generateReport')->name('report');
Route::group(['middleware'=>'auth'], function(){



});
