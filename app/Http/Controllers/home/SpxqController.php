<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpxqController extends Controller
{
    //
    public function index()
    {
    	// dd($id)
    	//查询商品对应评论
    	// $comment = DB::table('user_evaluate')->where('gid',$id)->get();
    	// // dd($comment);





    	return view('home.spxq.spxq',['title'=>'商品详情']);

    }
}
