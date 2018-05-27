<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SpxqController extends Controller
{
    //
    public function index($gid)
    {
    	// dd($id)
    	//查询商品对应评论
    	$commentTot = DB::table('user_evaluate')->where('gid',$gid)->count();

    	$goodTot = DB::table('user_evaluate')->where([['gid','=',$gid],['start','>',4]])->count(); //好评
    	$chaTot = DB::table('user_evaluate')->where([['gid','=',$gid],['start','<=',2]])->count(); //差评
    	$zhongTot = $commentTot-$goodTot-$chaTot;                             //中评

    	$arr = array(
    		'commentTot'=>$commentTot,
    		'goodTot'=>$goodTot,
    		'chaTot'=>$chaTot,
    		'zhongTot'=>$zhongTot,
    	);
    	// dd($arr);

    	// dd($comment);

    	$comment = DB::table('user_evaluate')->where('gid',$gid)->get();



    	//数据格式化
    	$data = array(
    		'arr'=>$arr,
    		'comment'=>$comment,
    	);

    	return view('home.spxq.spxq',['title'=>'商品详情'])->with($data);

    }
}
