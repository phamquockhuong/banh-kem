<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    	 return view('index');
    }
    public function product_detail(){

    	 return view('product-detail');
    	//return view('index');
    }
}
