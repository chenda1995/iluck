<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HouseController extends Controller
{
    //
    public function index()
    {

    	$data = DB::table('collection')
    				->select('collection.*','goods.gname','goods.gpic as gimg','goods.price')
    				->join('goods','goods.gid','=','collection.gid')
    				->get();
    	// dd($data);

    	return view('home.house.house',['title'=>'我的收藏'])->with("data",$data);
    } 
}
