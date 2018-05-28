<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class OrderController extends Controller
{
	public function index()
	{
		return view('home.orders.order_index',['title'=>'订单页面']);
	}


    public function ddxq()
    {

    	$car = DB::table('car')->where([['uid',session('uid')],['auth',1] ])->get();

    	$add = DB::table('address')->where([['uid',session('uid')],['auth',1]])->get();

    	//订单生成时间
    	$orders['otime'] = time();

    	//生成订单号
    	$orders['oid'] = rand(11111,99999).time();

    	
    	$su = 0;
    	$b = 0;
    	foreach ($car as $k => $v) {

    		$a =  $v->price*$v->cnt;

			$su += $a;

			$b += $v->cnt;

    	}
    	$cnt = $b;
    	$sum = $su;

    	//订单总金额
    	$orders['sum'] = $sum;
    	//订单数量
    	$orders['cnt'] = $cnt;
    	
    	foreach ($add as $k1 => $v1) {
    		$tel = $v1->tel;
    		$rec = $v1->name;
    		$addr = $v1->diqu.'&nbsp;'.$v1->address;
    		$uid = $v1->uid;
    	}
    	//订单tel
    	$orders['tel'] = $tel;
    	//订单姓名
    	$orders['rec'] = $rec;
    	//订单地址
    	$orders['addr'] = $addr;
    	//订单uid
    	$orders['uid'] = $uid;
    	//生成订单

    	$order = DB::table('orders')->insert($orders);

    	//订单详情
    	
    	foreach ($car as $k3 => $v3) {
            $details['gid'] = $v3->gid;
    		$details['time'] = $orders['otime'];
    		$details['oid'] = $orders['oid'];
    		$details['gname'] = $v3->gname;
    		$details['gpic'] = $v3->gpic;
    		$details['cnt'] = $v3->cnt;
    		$details['price'] = $v3->price;
    		$details['size'] = $v3->size;
    		$details['color'] = $v3->color;
    		DB::table('orders_details')->insertGetId($details);

    		

    		
    	}

    	// 

    	if($order){
    		foreach ($car as $k2 => $v2) {
    			$id = $v2->id;
    			DB::table('car')->where('id',$id)->delete();
    			 

        } 
    		
         return redirect('/home/orderindex');
    	
    	}
	}


	public function shouhuo(Request $request)
	{
		$id = $request->all();

		var_dump($id);

		$a['status'] = '3';

		DB::table('orders_details')->where('id',$id)->update($a);
	}

	public function xq($id)
	{
		$res = DB::table('orders_details')->where('id',$id)->get();

		foreach ($res as $k => $v) {
			$oid = $v->oid;
		}
		

		$arr = DB::table('orders')->where('oid',$oid)->get();
		



		return view('home.orders.order_xq',['title'=>'订单详情','res'=>$res,'arr'=>$arr,'oid'=>$oid]);
	}

	public function del(Request $request)
	{
		$id = $request->all();

		$id = $id['id'];

		$auth['auth'] = '1';
		
		
		 $arr = DB::table('orders_details')->where('id',$id)->update($auth);

	
	}
}
