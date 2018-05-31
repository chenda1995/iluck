<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class PingjiaController extends Controller
{
    //
    public function pingjia($id,$gid)
    {



    	return view('home.pingjia.pingjia',['title'=>'我的评价','id'=>$id,'gid'=>$gid]);
    }

  public function pjdo(Request $request)
 {
    	// dump($request->all());

    	$res = $request->except('_token');
    	// dd($res);


    	$res['etime'] = time();

    	$res['uid'] = session('uid');

        
        
    	$gid = $res['gid'] ;
        $id = intval($gid);
        // echo '<pre>';
        // var_dump($id);die();

		// dd($res);
    	$data = DB::table('user_evaluate')->insert($res);

    	if ($data) {
    		
    		return redirect('/home/spxq/'.$id);

    	} else {

    		return back()->with('评价失败');
        }
   }

   public function gai(Request $request)
   {
        $arr = $request->all();
        $id = $arr['id'];

        var_dump($id);
        
        $status['status'] = '4';
        DB::table('orders_details')->where('id',$id)->update($status);
   }
}
