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
    	$res = DB::table('orders')->where('oid',$id)->delete();

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
    public function status(Request $request)
    {
        $id = $request->all();

        $id = $id['id'];



        $status['status'] = '2';

        DB::table('orders_details')->where('id',$id)->update($status);
    }


    
    public function delete(Request $request)
    {
        $id = $request->all();
        $id = $id['id'];
        DB::table('orders_details')->where('id',$id)->delete();
    }
    	 
}
