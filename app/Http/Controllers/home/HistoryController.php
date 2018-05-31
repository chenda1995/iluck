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
    	$res = session('history');
    	return view('home.history.history',['res'=>$res]);
    }
}
