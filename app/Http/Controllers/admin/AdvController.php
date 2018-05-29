<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $arr = $request->all();
        $res = DB::table('ad')->orderBy('adid','asc')->paginate($request->input('num',5));

        $num = $request->input('num');

        return view('admin.adv.index',[
            'title'=>'广告管理列表',
            'res'=>$res,
            'num'=>$num,
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
        return view('admin.adv.add',['title'=>'广告添加页面']);
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
        if($request->hasFile('adsrc')) {

            $name = rand(1111,9999).time();

            // dump($name);

            //获取后缀
            $suffix = $request->file('adsrc')->getClientOriginalExtension();


            //移动
            $path = $request->file('adsrc')->move('./uploads/',$name.'.'.$suffix);

            //去掉不需要的字段
             $res = $request->except('_token');
             // dump($res);

            //存到数据表
            $res['adsrc'] = '/uploads/'.$name.'.'.$suffix;

            }


            $data = DB::table('ad')->insert($res);

            if($data){
                return redirect('/admin/adv')->with('msg','修改成功');
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


        $res = DB::table('ad')->where('adid',$id)->first();
        return view('admin.adv.edit',['title'=>'广告修改页面','res'=>$res]);
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

        if($request->hasFile('adsrc')) {

            $name = rand(1111,9999).time();

            // dump($name);

            //获取后缀
            $suffix = $request->file('adsrc')->getClientOriginalExtension();


            //移动
            $path = $request->file('adsrc')->move('./uploads/',$name.'.'.$suffix);

            //去掉不需要的字段
             $res = $request->except('_token','_method');
             // dump($res);

            //存到数据表
            $res['adsrc'] = '/uploads/'.$name.'.'.$suffix;
            // dump($res);

            }


            $data = DB::table('ad')->where('adid',$id)->update($res);

            if($data){
                return redirect('/admin/adv')->with('msg','修改成功');
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

        $res = DB::table('ad')->where('adid',$id)->delete();
        // dump($res);

        if($res) {
            return redirect('/admin/adv');
        } else {
            return back();
        }



    }
}
