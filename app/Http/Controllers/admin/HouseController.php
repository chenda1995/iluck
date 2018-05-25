<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HouseController extends Controller
{
    //
    public function index()
    {	
    	//多表查询
    	$data = DB::table('collection')
    		->select('collection.*','goods.gname','goods.price','goods.gpic as img','user.uname')
    		->join('user','user.uid','=','collection.uid')
    		->join('goods','goods.gid','=','collection.gid')
    		->get();



    	return view('admin.house.index',['title'=>'收藏管理'])->with('data',$data);
    }
}
