<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use Gregwar\Captcha\CaptchaBuilder;  
use Session;
use Mail;


class LoginController extends Controller
{
    //
    public function login()
    {
       // dump(Session::get('code'));
      // dd($_SERVER);
      // 获取上一个页面
      session(['prevPge'=>$_SERVER['HTTP_REFERER']]);



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
        session(['uname'=>$data->uname]);

    	return redirect(session('prevPge'));
   		 
   }

   // 前台退出的方法
  public function loginout(Request $request)
  {
    //删除session
        $request->session()->flush();

        return redirect('home/login');
  }


  //找回密码
  public function zhaohui()
  {
    // var_export($_POST);

    if ($_POST) {
      //接收数据

      $email = $_POST['email'];
      // 获取数据
      // $data = DB::table('user')->where('email','$email')->first();
      $data = DB::table('user')->select('email','uid')->first();
      // dd($data);

      //判断数据是否正确
      if ($data) {
        
          Mail::send('Mail.index',['uid'=>$data->uid],function($message) use($email){
          $message->to($email);
          $message->subject("找回密码");
        });

          //加载找回密码的提示页面
          $mailArr = explode('@',$email);

          // dd($mailArr);

          $href = 'mail.'.$mailArr[1];

          return view('home.zh')->with('href',$href);

      } else {

        return back();

      }

    } else {

      return view('home.zhmm.zhmm');

    }
    
  }


  //重置密码
  public function savePass($uid)
  {
    // var_dump($_POST);
    //判断post是否存在 存在修改密码  不存在显示修改页面
    if ($_POST) {
      //判断密码是否一致
      if ($_POST['password']==$_POST['repass']) {
        //判断密码长度
        if (strlen($_POST['password'])>=8 && strlen($_POST['password'])<=16) {
          //格式化数据并且修改
          $data = array();
          // $data['_token'] = str_random(50);
          $data['password'] = Hash::make($_POST['password']);

          if (DB::table('user')->where('uid',$uid)->update($data)) {
            # code...
            return redirect('/home/login');
          } else {
            return back();
          }

        } else {
          return back();
        }
      } else {
        return back();
      }
    } else {

      return view('home.savePass.save');
    }
  }
}

