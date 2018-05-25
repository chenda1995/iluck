<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    public function index(){

    	return view('home.orders.order_index',['title'=>'订单页面']);
    }
}
