<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CarController extends Controller
{
    public function index()
	{
		$res = DB::table('car')->orderBy('id','asc')->get();


		return view('home.cart.car',['title'=>'iluck购物车','res'=>$res]);
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

		//var_dump($arr);

		$a['auth'] =  '1';
		$b['auth'] = '0';

		session(['uid'=>'85']);
		$res = DB::table('car')->where('uid',session('uid'))->update($b);
		  $arr = DB::table('car')->where($arr)->update($a);

		  //var_dump($res);





		 return view('home.cart.car2',['title'=>'确认订单']);


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
}
