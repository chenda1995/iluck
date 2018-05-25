<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Http\Requests\FormRequest;
use App\Http\Requests\FormUpdate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $arr = $request->all();

        $res = DB::table('user')->
        where('uname','like','%'.$request->input('search').'%')->
        paginate($request->input('num',5));


        $search = $request->input('search');




        return view('admin.user.index',[ 
            'title'=>'用户的列表页',
            'res'=>$res,
            'search'=>$search,
            'request'=>$arr
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.add',['title'=>'用户添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dump($request->all());
        $this->validate($request,[
            'uname' => 'required|unique:user|regex:/^\w{6,12}$/',
            "password" => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:password',
            'tel'=>'required|regex:/^1[345678]\d{9}$/'
            
        ],[
            'uname.required'=>"用户名不能为空",
            'uname.regex'=>'用户名格式不正确',
			'uname.unique'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一致',
            'tel.required'=>'手机号不能为空',
            'tel.regex'=>'手机号码格式不正确'


        ]);


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
        $res = $request->except('_token','repass');

 
            // dd($res);
        //存到数据表中
        $res['uic'] = '/uploads/'.$name.'.'.$suffix;
        //对密码进行哈希加密
        $res['password'] = Hash::make($request->input('password'));

        $res['addtime'] = time();

        $data = DB::table('user')->insert($res);

        if($data){

            return redirect('/admin/user/');
        } else {

            return back();
        }
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uid)
    {
        //
        $res = DB::table('user')->where('uid',$uid)->first();



        return view('admin.user.edit',[
            'title'=>'用户的修改页面',
            'res'=>$res


        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uid)
    {
        //
        // dump($request->all());
        $res = DB::table('user')->where('uid',$uid)->first();

        $data = '@'.unlink('.'.$res->uic);

        if(!$data){

            return back();
        }


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
        //对密码进行哈希加密
        // $res['password'] = Hash::make($request->input('password'));
        
        $res['password'] = encrypt($request->input('password'));

        $res['addtime'] = time();

        $data = DB::table('user')->where('uid',$uid)->update($res);





        if($data){

            return redirect('/admin/user/');
        } else {

            return back();
        }


        // $res = $request->except('_token','_method');

        // $info = DB::table('user')->where('uid',$uid)->update($res);

        // if($info){

        //     return redirect('/admin/user');
        // }

        $res = $request->except('_token','_method');

        $info = DB::table('user')->where('uid',$uid)->update($res);

        if($info){

            return redirect('/admin/user');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uid)
    {
        
            

        // echo $uid;
        //删除数据
        if (DB::table('user')->where('uid',$uid)->delete()) {
            
            return 1;
        } else {

            return 0;
        }
    }



    //修改用户状态
    public function ajaxState(Request $request)
    {   
        $arr = $request->except('_token');

        // print_r($arr);

        if (DB::update("update user set state = $arr[state] where uid = $arr[uid]")) {
            
            return 1;
        } else {

            return 0;

        }
    }
}
