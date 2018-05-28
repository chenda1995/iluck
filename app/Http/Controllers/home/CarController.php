<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CarController extends Controller
{
    public function index()
	{
		$res = DB::table('car')->where('uid',session('uid'))->orderBy('id','asc')->get();

		
			

		
		$sum = 0 ;
		foreach ($res as $k => $v) {
			//var_dump($v->price*$v->cnt);
			$a =  $v->price*$v->cnt;

			$sum += $a;


			

		




		

			


		}
		

		
		

		

		return view('home.cart.car',['title'=>'iluck购物车','res'=>$res,'sum'=>$sum]);
	}

	public function del(Request $request)
	{
		$id = $request->all();

		$res = DB::table('car')->where('id',$id)->delete();

		$arr = DB::table('car')->count();

		echo $arr;

		
	}

	public function add(Request $request)
	{
		$arr = $request->all();

		$id = $arr['id'];

		$cnt['cnt'] = $arr['cnt'] + '1';

		DB::table('car')->where('id',$id)->update($cnt);
		
	}

	public function jian(Request $request)
	{
		$arr = $request->all();

		$id = $arr['id'];

		$cnt['cnt'] = $arr['cnt'] - '1';

		if($cnt['cnt'] <= '0'){

			$cnt['cnt'] = '1';
		}

		DB::table('car')->where('id',$id)->update($cnt);
		
	}

	

	public function scdz(Request $request)
	{

		 $arr = $request->all();
		// var_dump($arr);

		 $id = $arr['id'];
		 $auth['auth'] = $arr['auth'];

		 DB::table('car')->where('id',$id)->update($auth);



		  


		



		 // return view('home.cart.car2',['title'=>'确认订单']);


		
	}
	//全选或反选
	public function gid(Request $request)
	{
		$arr = $request->all();
		 //var_dump($arr);

		 
		 $auth['auth'] = $arr['auth'];

		 DB::table('car')->where('uid',session('uid'))->update($auth);
	}

	public function cardizhi(Request $request)
	{
		$arr = $request->all();

		$id = $arr['id'];

		$uid = $arr['uid'];

		$a['auth'] = '0';

		$b['auth'] = '1';

		DB::table('address')->where('uid',$uid)->update($a);

		DB::table('address')->where('id',$id)->update($b);
	}

	public function cardizhido($id)
	{
		$res = DB::table('address')->where('id',$id)->get();
		return view('home.cart.cardizhi',['title'=>'修改地址','res'=>$res]);
	}

	public function carupdatedo(Request $request)
    {
    	$arr = $request->except('_token');

    	$id = $arr['id'];

    	$res = DB::table('address')->where('id',$id)->update($arr);

    	if($res){

    	   return redirect('/home/car/scdz');

        } else {

        	return back();
        }
    }

    public function dddz()
    {
    	return view('home.cart.car2',['title'=>'确认订单']);
    }
}
