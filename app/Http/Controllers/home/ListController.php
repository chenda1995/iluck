<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    //
   	public function index()
    {
    	return view('home.list.list',['title'=>'商品列表']);
    }

}
