<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    //
    public function index()
    {
    	

    	return view('home.index',['title'=>'商城后台首页']);

    }

    
}
