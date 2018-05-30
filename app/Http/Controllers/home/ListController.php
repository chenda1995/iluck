<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Common;

class ListController extends Controller
{
    //
   	public function index($id)
    {

    		$type = Common::getTypeMassage($id);
    	
    		$res = DB::table('goods_type')->where('cid',$id)->first();
	 		$tpath = $res->path.$id.',';

	 		$goods = DB::table('goods')->where('tpath','like',$tpath.'%')->get();

	 		$goods->each(function($item, $key){            
            	$item->gpic = json_decode($item->gpic);
           		return $item;         
        	}); 
        	// print_r($type);die;
        	
			return view('home.list.list',[
    		'title'=>'商品列表',
    		'type'=>$type,
    		'goods'=>$goods

    		
    	]);
    }

}
