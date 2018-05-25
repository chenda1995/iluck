<?php

namespace App\Http\Controllers\home;

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
       // dump(Session::get('code'));
    	return view('home.login.login',['title'=>'登录_iluck']);
    }


    public function code()
   	{
		//生成验证码图片的Builder对象，配置相应属性  
        $builder = new CaptchaBuilder;  
        //可以设置图片宽高及字体  
        $builder->build($width = 120, $height = 41, $font = null);  
        //获取验证码的内容  
        $phrase = $builder->getPhrase();  
        //把内容存入session  四种方法
        Session::flash('code', $phrase);  
        
        //2. Session::put('code',$phrase);
        //3. session(['code'=>$phrase]);
        //4. $request->session()->put('code',$pharse);

        //生成图片  
        header("Cache-Control: no-cache, must-revalidate");  
        header('Content-Type: image/jpeg');  
        $builder->output();
   	}





   public function logindo(Request $request)
   {

    	// dump($request->all());

    	$res = $request->except('_token');

   		//拿数据 
    	$res = $request->input('uname');
    	$data = DB::table('user')->where('uname',$res)->first();
        // dd($data);
       
      //判断用户名
    	if(!$data){

    		return back()->with('err','用户名或密码错误');

    	}

      //判断密码
    	$pass = $request->input('password');

    	if (!Hash::check($pass,$data->password)) {

    		return back()->with('err','用户名或密码错误');

    	}


      //判断验证码是否正确
   
        if(Session::get('code') != $request->input('code')){

            return back()->with('msg','验证码不正确');

        }



        session(['uid'=>$data->uid]);

    	return redirect('home/index');
   		 
   }


  public function loginout(Request $request)
  {
    //删除session
        $request->session()->forget('uid');

        return redirect('home/login');
  }




}

