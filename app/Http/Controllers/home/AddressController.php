<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class AddressController extends Controller
{
    public function index()
    {
                
    	return view('home.dizhi.dizhi',['title'=>'地址目录']);
    }

    public function dizhiedit()
    {
    	return view('home.dizhi.dizhiedit',['title'=>'添加地址']);
    }

    public function dizhiadd(Request $request,$id)
    {
    	$arr = $request->except('_token');

    	$res = DB::table('address')->insert($arr);

    	if($res){

    	   return redirect('/home/dizhiindex');

        } else {

        	return back();
        }

    	// echo '<pre>';
    	// var_dump($res);
    }

    public function dizhiupdate($id)
    {
    		
    	$res = DB::table('address')->where('id',$id)->get();

    	

    	return view('home.dizhi.dizhiupdate',['title'=>'修改地址','res'=>$res]);
    }

    public function dizhiupdatedo(Request $request)
    {
    	$arr = $request->except('_token');

    	$id = $arr['id'];

    	$res = DB::table('address')->where('id',$id)->update($arr);

    	if($res){

    	   return redirect('/home/dizhiindex');

        } else {

        	return back();
        }
    }

    public function dizhidel($id)
    {
    	$res = DB::table('address')->where('id',$id)->delete();

    	if($res){

    	   return redirect('/home/dizhiindex');

        } else {

        	return back();
        }
    }

    public function auth(Request $request)
    {
        $id = $request->all();
        

        $a['auth'] =  '1';
        $b['auth'] = '0';


        DB::table('address')->where('uid',session('uid'))->update($b);
        $res = DB::table('address')->where('id',$id)->update($a);

        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}
