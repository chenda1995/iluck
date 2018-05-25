<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\OrderController;
use DB;

class OrderController extends Controller
{
    public function del($id)
    {
		session(['id'=>'1']);
    	$res = DB::table('orders')->where('oid',$id)->update(['auth' => 1]);

    	if($res){
    		return redirect('admin/orders');
        } else {

            return back();
    	}
    	
    }

    public function update(Request $request)
    {
            $oid = $request->all();

    	$res = DB::table('orders')->where('oid',$oid)->update([ 'status' => 2]);
    	
    	if($res){
    		echo 1;
        } else {

            echo 2;
    	}
    }
    	 
}
