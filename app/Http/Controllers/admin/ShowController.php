<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //获取数据
        $res = DB::table('broadcast')->orderBy('bid','asc')->paginate($request->input('num',5));

        $num = $request->input('num');
        return view('admin.carousel.index',['title'=>'轮播图列表','num'=>$num,'res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.carousel.add',['title'=>'轮播图添加页面']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //去掉不要的字段
         $res = $request->except('_token','cid','statics','brand');
         // dump($res);

        if($request->hasFile('bprofile')) {

            $name = rand(1111,9999).time();

            // dump($name);

            //获取后缀
            $suffix = $request->file('bprofile')->getClientOriginalExtension();


            //移动
            $path = $request->file('bprofile')->move('./uploads/',$name.'.'.$suffix);

            //去掉不需要的字段
             $res = $request->except('_token','cid','statics','brand');
             // dump($res);

            //存到数据表
            $res['bprofile'] = '/uploads/'.$name.'.'.$suffix;



            }


            $data = DB::table('broadcast')->insert($res);

            if($data){
                return redirect('/admin/show')->with('msg','添加成功');
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
    public function edit($id)
    {
        //
        //获取数据
        $res = DB::table('broadcast')->where('bid',$id)->first();

        // dump($res);

        //显示在模板
        return view('admin.carousel.edit',['title'=>'轮播的修改页面','res'=>$res]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        if($request->hasFile('bprofile')) {

            $name = rand(1111,9999).time();

            // dump($name);

            //获取后缀
            $suffix = $request->file('bprofile')->getClientOriginalExtension();


            //移动
            $path = $request->file('bprofile')->move('./uploads/',$name.'.'.$suffix);

            //去掉不需要的字段
             $res = $request->except('_token','_method','cid','statics','brand');
             // dump($res);

            //存到数据表
            $res['bprofile'] = '/uploads/'.$name.'.'.$suffix;



            }


            $data = DB::table('broadcast')->where('bid',$id)->update($res);

            if($data){
                return redirect('/admin/show')->with('msg','修改成功');
        } else {
             return back();
         }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //



         $res = DB::table('broadcast')->where('bid',$id)->delete();
        // dump($res);

        if($res) {
            return redirect('/admin/show');
        } else {
            return back();
        }


    }

}
