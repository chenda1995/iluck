<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class SpxqController extends Controller
{
    //
    public function index(Request $request,$gid)
    {
    	//查询商品对应评论
    	$commentTot = DB::table('user_evaluate')->where('gid',$gid)->count();

    	$goodTot = DB::table('user_evaluate')->where([['gid','=',$gid],['start','>',4]])->count(); //好评
    	$chaTot = DB::table('user_evaluate')->where([['gid','=',$gid],['start','<=',2]])->count(); //差评
    	$zhongTot = $commentTot-$goodTot-$chaTot;                             //中评

    	$goods = DB::table('goods')->where('gid',$gid)->first();
    	$goods->gpic = json_decode($goods->gpic);
    	$goods->size = explode(',', $goods->size);
    	$goods->color = explode('，', $goods->color);

    	//存储浏览历史信息
		$history = Session::get('history');

		if (empty($history)){
		    $history = [];
			$history[$goods->gid] = [
			    'gpic'  =>  $goods->gpic,
			    'gname'  =>  $goods->gname,
			    'price'  =>  $goods->price,
			];
		}
	
		Session::put('history', $history); 

    	return view('home.spxq.spxq',[
    		'title'=>'商品详情',
    		'goods'=>$goods
    	]);


    	// dd($comment);



    }
}
