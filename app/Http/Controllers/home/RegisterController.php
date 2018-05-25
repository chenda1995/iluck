<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ucpaas;
use Hash;
use DB;

class RegisterController extends Controller
{
    //
     public function register()
    {
    	return view('home.login.register',['title'=>'注册_iluck']);
    }

    public function zhuce(Request $request)
    {
    	//表单验证
    	$this->validate($request,[
            'uname' => 'required|unique:user|regex:/^\w{4,20}$/',
            "password" => 'required|regex:/^\S{6,20}$/',
            'repass'=>'same:password',
            'tel'=>'required|regex:/^1[345678]\d{9}$/'
            
        ]);
        // dump($request->all());

        $res = $request->except('yzm','_token','repass');
        // dump($res);

        $res['addtime'] = time();

        $res['state'] = 1;

        $res['password'] = Hash::make($request->input('password'));

        
        

        $data = DB::table('user')->insertGetId($res);

		
		 $a = $res['uname'];
             $aa = DB::table('user')->where('uname',$a)->get();
             foreach ($aa as $k => $v) {
                $a2['uid'] = $v->uid;
                $a2['born'] = ',,';
                $arr = DB::table('user_details')->insert($a2);
             }

        if($data){

            return redirect('/home/login');

        } else {

        	return back();
        }

    }


    public function ycode()
    {
    	//引入类文件
    	// require_once('/home/lib/Ucpaas.php');

        //初始化必填
		$options['accountsid']='154f35b6af1cdc1bd56db3e0641aaa6e';
		$options['token']='0783775ae03264d772509f6dc2cf5d2e';


		//初始化 $options必填
		$ucpass = new Ucpaas($options);

		//开发者账号信息查询默认为json或xml

		// echo $ucpass->getDevinfo('xml');

		$code = rand(111111,999999);

		$toNumber = $_POST['number'];

		// $_SESSION['code'] = $code;

		$appId = "a6f6979975a742879539eccd4c0bbab9";

		$templateId = "319215";
		$param=$code;

		$ucpass->templateSMS($appId,$toNumber,$templateId,$param);

		echo $code;
    	// echo 123;

    }

    

}

        