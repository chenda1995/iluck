<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = DB::table('goods')->
        where('gname','like','%'.$request->input('search').'%')->
        paginate(5);
    
        $res->each(function($item, $key){            
            $item->gpic = json_decode($item->gpic);
            return $item;         
        }); 

        $num = $request->input('num');
        $search = $request->input('search');

        return view('admin.goods.index',[
            'title'=>'商品列表页',
            'res'=>$res,           
            'request'=>$request,
            'search'=>$search

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = DB::table('goods_type')->select(DB::raw('*,concat(path,cid) as paths'))->orderBy('paths')->get();

        foreach($type as $k=>$v){
            //获取path路径
            $foo = explode(',',$v->path);     
            $level = count($foo)-1;
            $v->cname = str_repeat('&nbsp;&nbsp;&nbsp;',$level).'|--'.$v->cname; 
        }

        $brand = DB::table('goods_brand')->get();
        return view('admin.goods.add',[
            'title'=>'商品添加页面',
            'type'=>$type,
            'brand'=>$brand
        ]);
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
        $res = $request->except('_token');
        $file = $request->file('gpic');
        $imgs = [];

        if(!empty($file)) {

            foreach ($file as $k => $v) {
                $imgs[] = $v->store('public/goods');
                $imgs = str_replace('public', 'storage', $imgs); 
            }
        }

        $res['gpic'] = json_encode($imgs);
        
        $id = explode(',', $res['tpath']);
        $res['tid'] = end($id);

        $data = DB::table('goods')->insert($res);

        if($data){
            return redirect('/admin/goods');
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
        $type = DB::table('goods_type')->
        select(DB::raw('*,concat(path,cid) as paths'))->
        orderBy('paths')->
        get();

         foreach($type as $k=>$v){
            //获取path路径
            $foo = explode(',',$v->path);     
            $level = count($foo)-2;
            $v->cname = str_repeat('&nbsp;&nbsp;&nbsp;',$level).'|--'.$v->cname; 
        }

        $brand = DB::table('goods_brand')->get();
        $goods = DB::table('goods')->where('gid',$id)->first();
        $imgs = json_decode($goods->gpic);
        $ids = [];
        if(!empty($imgs)) {
            foreach ($imgs as $k => $v) {
                $ids[] = md5($v);
            }
        }
        return view('admin.goods.edit',[
            'title'=>'商品修改页面',
            'type'=>$type,
            'brand'=>$brand,
            'goods'=>$goods,
            'imgs'=>$imgs,
            'ids'=>$ids
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

        $res = $request->except('_token','_method');
        $file = $request->file('gpic');
        $imgs = [];

        if(!empty($file)) {

            foreach ($file as $k => $v) {
                $imgs[] = $v->store('public/goods');
                $imgs = str_replace('public', 'storage', $imgs); 
            }
        }

        if(!empty($res['oldgpic'])){
            $imgs = array_merge($res['oldgpic'],$imgs); 
            unset($res['oldgpic']);
        }

        if (!empty($imgs))
            $res['gpic'] = json_encode($imgs);

        if (!empty($res['tpath'])) {
            $tid = explode(',', $res['tpath']);
            $res['tid'] = end($tid);
        }
        

        $data = DB::table('goods')->where('gid',$id)->update($res);
        if(isset($res['status'])) {
            return ['code' => 1];
        }

        if($data){
            return redirect('/admin/goods')->with('msg','修改成功');
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
        // dd($id);die;
        // return $id;
        $res = ['id'=>$id,'code'=>''];
        $res['code'] = DB::table('goods')->where('gid',$id)->delete();
        return $res;

    }

}
