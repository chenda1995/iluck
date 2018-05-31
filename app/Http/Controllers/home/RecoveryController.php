<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RecoveryController extends Controller
{
    public function index()
    {
    	

    	return view('home.orders.order_rec',['title'=>'回收站']);
    }

    public function huanyuan($id)
    {
    	
    	$auth['auth'] = '0';
    	$res = DB::table('orders_details')->where('id',$id)->update($auth);
    	if($res){
    		return redirect('/home/rec/index');
    	}else{
    		back();
    	}
    }

    public function del($id)
    {
    	$res = DB::table('orders_details')->where('id',$id)->delete();

    	if($res){
    		
    		return redirect('/home/rec/index');
    	}else{
    		back();
    	}
    }

    public function delete(Request $request)
    {
        $id = $request->all();
        
        DB::table('orders_details')->where($id)->delete();
    }

    public function huan(Request $request)
    {
        $id = $request->all();
        $auth['auth'] = '0';
        DB::table('orders_details')->where($id)->update($auth);
    }
}
