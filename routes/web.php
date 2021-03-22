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
include('backend.php');
include('frontend.php');

 Route::get('/', 'HomeController@index')->name('index');
 Route::get('/product-detail', 'HomeController@product_detail')->name('product_detail');