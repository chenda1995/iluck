<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use common;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $res = DB::table('goods_type')->
        select(DB::raw('*,concat(path,cid) as paths'))->
        orderBy('paths')->
        where('cname','like','%'.$request->input('search').'%')->
        paginate($request->input('num',10));

        foreach($res as $k => $v){
            //获取path路径
            $foo = explode(',',$v->paths);
            $level  = count($foo)-2;
            $v->cname = str_repeat('&nbsp;&nbsp;&nbsp;',$level).'|--'.$v->cname;
        }

        $num = $request->input('num');
        $search = $request->input('search');
      
        return view('admin.type.index',[
            'title'=>'分类列表页面',
            'num'=>$num,
            'search'=>$search,
            'res'=>$res,
            'request'=>$request
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示表单
        $res = DB::table('goods_type')->select(DB::raw('*,concat(path,cid) as paths'))->orderBy('paths')->get();

        foreach($res as $k=>$v){
            //获取path路径
            $foo = explode(',',$v->path);     
            $level = count($foo)-2;
			
            $v->cname = str_repeat('&nbsp;&nbsp;&nbsp;',$level).'|--'.$v->cname; 
        }

        return view('admin.type.add',['title'=>'分类添加页面','res'=>$res]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token');

        if($res['pid'] == '0'){
            $res['path'] = '0,';
        }else{
            $data = DB::table('goods_type')->where('cid',$res['pid'])->first();
        
            $res['path'] = $data->path.$data->cid.',';
        }
        
        $data = DB::table('goods_type')->insert($res);

        if($data){
            return redirect('/admin/type');
        }else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $info = DB::table('goods_type')->where('cid',$id)->first();
        
        $res = DB::table('goods_type')->
        select(DB::raw('*,concat(path,cid) as paths'))->
        orderBy('paths')->
        get();

        foreach($res as $k=>$v){
            //获取path路径
            $foo = explode(',',$v->path);     
            $level = count($foo)-2;
            $v->cname = str_repeat('&nbsp;&nbsp;&nbsp;',$level).'|--'.$v->cname; 
        }

        return view('admin.type.edit',[
            'title'=>'分类修改页面',
            'info'=>$info,
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
    public function update(Request $request, $id)
    {
        //
        $res = $request->except('_token','_method');

        $data = DB::table('goods_type')->where('cid',$id)->update($res);

        if($data){
            return redirect('/admin/type')->with('msg','修改成功');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //删除子类

        $res = DB::table('goods_type')->where('cid',$id)->first();

        $path = $res->path.$res->cid;  //0,2,7

        DB::table('goods_type')->
        where('path','like',$path.',%')->   //0,2,7,%
        delete();

        //删除父类

        $data = DB::table('goods_type')->where('cid',$id)->delete();
        
        if($data){
            return redirect('/admin/type');
        } else{
            return back(); 
        }
    }
    

}
    