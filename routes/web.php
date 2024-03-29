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

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', 'Frontend\AuthController@showHome')->name('main');
Route::get('/home', 'Frontend\AuthController@showHome')->name('main');
Route::get('/registration', 'Frontend\AuthController@showRegistration')->name('registration');
Route::post('/registration', 'Backend\UserController@store')->name('registration');
Route::get('/login', 'Frontend\AuthController@showLogin')->name('login');
Route::post('/login', 'Frontend\AuthController@processLogin')->name('login');
Route::get('/logout', 'Frontend\AuthController@logout')->name('logout');

Route::get('login/github', 'Frontend\AuthController@redirectToProvider');
Route::get('login/github/callback', 'Frontend\AuthController@handleProviderCallback');

Route::get('login/facebook', 'Frontend\AuthController@loginViaFacebook');
Route::get('login/facebook/callback', 'Frontend\AuthController@loginViaFacebook');


Route::get('/productList', 'Frontend\ProductController@showList')->name('productList');
Route::get('/productDetails/{id}', 'Frontend\ProductController@showDetails')->name('productDetails');

Route::get('/contact', 'Frontend\ContactController@showContact')->name('contact');

Route::group(['middleware'=>'auth'], function(){
    Route::post('/addToCart/{id}', 'Frontend\CartController@addToCart')->name('addToCart');
    Route::get('/shopingCart', 'Frontend\CartController@showCart')->name('shopingCart');
    Route::get('/checkout/{id}', 'Frontend\CartController@showCheckout')->name('checkout');
    Route::post('/checkout/{id}', 'Frontend\CartController@processCheckout')->name('checkout');
});

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/


Route::group(['middleware'=>'auth'], function(){

    Route::get('/dashboard', 'Backend\DashboardController@showDashboard')->name('dashboard');

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
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
