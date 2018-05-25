<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Http\Requests\FormRequest;
use App\Http\Requests\FormUpdate;

class UserDetailsController extends Controller
{
    //
    public function userdetails()
    {
    	return view('home.user_details.user_details',['title'=>'基本信息']);
    }
    public function update(Request $request)
    {
    	
    	$res = $request->except('_token');

        $ar['tel'] = $res['tel'];

        $uid = $res['uid'];

        $a11 = DB::table('user')->where('uid',$uid)->update($ar);

       



        $res = $request->except('tel','_token');



        
    	 $b1 = $res['born'];
    	$b = implode(",", $b1);
    	
    	$res['born'] = $b;
    	
    	 

       
    	
    	

    	$arr = DB::table('user_details')->where('uid',$uid)->update($res);

    	if($arr){


            return redirect('/home/userdetails');

        } else {

        	return back();
        }

    	
    }

    public function touxiang($id)
    {
        return view('home.user_details.user_touxiang',['title'=>'修改头像']);
    }



    public function updatetx(Request $request,$id)
    {
        // echo $id;
        $res = DB::table('user')->where('uid',$id)->first();

        //$data = '@'.unlink('.'.$res->uic);

        // if(!$data){

        //     return back();
        // }


         if($request->hasFile('uic')){

            //文件名
            $name = rand(1111,9999).'_'.time();

            //获取后缀
             $suffix = $request->file('uic')->getClientOriginalExtension(); 

            //移动到哪去
            $path = $request->file('uic')->move('./uploads/', $name.'.'.$suffix);
            // $path = $request->file('uic')->storeAs('images',$name.'.'.$suffix,'public');
        }
        // dd($path);
        $res = $request->except('_token','_method');

 
            // dd($res);
        //存到数据表中
         $res['uic'] = '/uploads/'.$name.'.'.$suffix;

            $arr = DB::table('user')->where('uid',$id)->update($res);

            if($arr){

             return redirect('/home/userdetails/touxiang/{$id}');

        } else {

            return back();
        }
    }
}
