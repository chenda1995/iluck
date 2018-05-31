<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class HistoryController extends Controller
{
    //
    public function index(Request $request)
    {
    	$arr = $request->session()->get('history');
    	print_r($request->session());die;
    	
    	return view('home.history.history');
    }
}
