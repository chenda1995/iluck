<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class KillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $arr = $request->all();
        $res = DB::table('goods_kill')->
        where('gktitle','like','%'.$request->input('search').'%')->orderBy('gkid','asc')->paginate($request->input('num',5));

        $num = $request->input('num');
        $search = $request->input('search');

        return view('admin.kill.index',['title'=>'限时抢购列表页',
            'res'=>$res,
            'num'=>$num,
            'request'=>$arr,
            'search'=>$search,

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
        return view('admin.kill.add',['title'=>'限时抢购添加页']);
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

         if($request->hasFile('gksrc')) {

            $name = rand(1111,9999).time();

            // dump($name);

            //获取后缀
            $suffix = $request->file('gksrc')->getClientOriginalExtension();


            //移动
            $path = $request->file('gksrc')->move('./uploads/',$name.'.'.$suffix);

            //去掉不需要的字段
             $res = $request->except('_token');
             // dump($res);

            //存到数据表
            $res['gksrc'] = '/uploads/'.$name.'.'.$suffix;

            }


            $data = DB::table('goods_kill')->insert($res);

            if($data){
                return redirect('/admin/kill')->with('msg','修改成功');
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
        $res = DB::table('goods_kill')->where('gkid',$id)->first();
        return view('admin.kill.edit',['res'=>$res,'title'=>'显示抢购的修改页面']);
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
        //

        if($request->hasFile('gksrc')) {

            $name = rand(1111,9999).time();

            // dump($name);

            //获取后缀
            $suffix = $request->file('gksrc')->getClientOriginalExtension();


            //移动
            $path = $request->file('gksrc')->move('./uploads/',$name.'.'.$suffix);

            //去掉不需要的字段
             $res = $request->except('_token','_method');
             // dump($res);

            //存到数据表
            $res['gksrc'] = '/uploads/'.$name.'.'.$suffix;
            // dump($res);

            }


            $data = DB::table('goods_kill')->where('gkid',$id)->update($res);

            if($data){
                return redirect('/admin/kill')->with('msg','修改成功');
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


        $res = DB::table('goods_kill')->where('gkid',$id)->delete();
        // dump($res);

        if($res) {
            return redirect('/admin/kill');
        } else {
            return back();
        }
    }
}
