<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    //
    public function index()
    {
    	return view('home.house.house',['title'=>'我的收藏']);
    }
}
