<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PingjiaController extends Controller
{
    //
    public function pingjia()
    {

    	return view('home.pingjia.pingjia',['title'=>'我的评价']);
    }

    public function pjdo(Request $request)
    {
    	// dump($request->all());

    	$res = $request->except('_token');
    	// dd($res);

    	$res['etime'] = time();

    	$res['uid'] = session('uid');
    	$res['gid'] = 1;
		// dd($res);
    	$data = DB::table('user_evaluate')->insert($res);

    	if ($data) {
    		
    		return redirect('/home/spxq/1');

    	} else {

    		return back()->with('评价失败');
    	}
    }
}
