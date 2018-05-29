<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SpxqController extends Controller
{
    //
    public function index($id)
    {
    	// dd($id)
    	//查询商品对应评论
    	// $comment = DB::table('user_evaluate')->where('gid',$id)->get();
    	// // dd($comment);


    	$goods = DB::table('goods')->where('gid',$id)->first();
    	$goods->gpic = json_decode($goods->gpic);
    	$goods->size = explode(',', $goods->size);
    	$goods->color = explode('，', $goods->color);
    	
    	// var_dump($goods);die;
    	return view('home.spxq.spxq',[
    		'title'=>'商品详情',
    		'goods'=>$goods
    	]);


    }
}
