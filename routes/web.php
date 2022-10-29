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
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'vi'])) {
        abort(400);
    }
    
    session()->put('locale',$locale);
    	
   return redirect()->back();
});
 Route::get('/', 'HomeController@index')->name('index');
 Route::get('/product-detail', 'HomeController@product_detail')->name('product_detail');