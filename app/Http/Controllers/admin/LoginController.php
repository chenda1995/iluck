<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use Gregwar\Captcha\CaptchaBuilder;  
use Session;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('admin.login.login',['title'=>'商城后台管理登录']);
    }

    public function dologin(Request $request)
    {
    	//表单验证

        //拿数据
    	$res = $request->input('username');
    	$data = DB::table('admin')->where('username',$res)->first();
        // dd($data);

    	if(!$data){

    		return back()->with('err','用户名或密码错误');
    	}

    	$pass = $request->input('password');

    	if (!Hash::check($pass,$data->password)) {

    		return back()->with('err','用户名或密码错误');

    	}

        if(Session::get('code') != $request->input('code')){

            return back()->with('err','验证码不正确');

        }
    

        session(['id'=>$data->id]);

    	return redirect('admin/index');
    }


    public function signout(Request $request)
    {

        //删除session
        $request->session()->forget('id');

        return redirect('admin/login');
    }

    public function pass()
    {   

        return view('admin.login.pass',['title'=>'修改密码']);

    }



    public function changePass(Request $request)
    {
        //表单验证


        //获取旧密码
        $pass = $request->input('oldpass');

        $res = DB::table('admin')->where('id',session('id'))->first();

        //哈希
        if(!Hash::check($pass,$res->password)){

            return back()->with('msg','输入的旧密码错误');
        }

        $foo['password'] = Hash::make($request->input('password'));

        $data = DB::table('admin')->where('id',session('id'))->update($foo);

        if($data){

            return redirect('admin/login');

        }

    }


    // 生成验证码
    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性  
        $builder = new CaptchaBuilder;  
        //可以设置图片宽高及字体  
        $builder->build($width = 120, $height = 40, $font = null);  
        //获取验证码的内容  
        $phrase = $builder->getPhrase();  
        //把内容存入session  四种方法
        Session::flash('code', $phrase);  

        //2. Session::put('code',$phrase);
        //3. session(['code'=>$phrase]);
        //4. $request->session()->put('code',$pharse);

        Session::put('yanzheng',$phrase);

        //生成图片  
        header("Cache-Control: no-cache, must-revalidate");  
        header('Content-Type: image/jpeg');  
        $builder->output();
    }

}
