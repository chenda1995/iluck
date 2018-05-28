<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RecoveryController extends Controller
{
    public function index()
    {
    	return view('home.orders.order_rec',['title'=>'回收站']);
    }
}
