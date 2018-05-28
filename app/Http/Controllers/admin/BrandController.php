<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Storage;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = DB::table('goods_brand')->
        where('bname','like','%'.$request->input('search').'%')->
        orderBy('bid', 'desc')->
        paginate(5);

        $num = $request->input('num');
        $search = $request->input('search');

        return view('admin.brand.index',[
            'title'=>'品牌浏览页面',
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
        //显示表单

      return view('admin.brand.add',['title'=>'品牌添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $path = $request->file('logo')->store('public/logo');

        $data = DB::table('goods_brand')->insert([
            'bname' => $request->input('bname'),
            'logo' => str_replace('public', 'storage', $path),         
        ]);

        if($data){
            return redirect('/admin/brand');
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
        $res = DB::table('goods_brand')->where('bid',$id)->first();

        return view('admin.brand.edit',[
            'title'=>'品牌修改页面',
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

        $name = $request->input('bname');
        $img = $request->file('logo');
        $array = [];
        if(!empty($name)){
            $array['bname'] = $name; 
        }
        if(!empty($img)){
            $path = str_replace('public', 'storage', $img->store('public')); 
            $array['logo'] = $path;
        }

        $data = DB::table('goods_brand')->where('bid',$id)->update($array);

        if($data){
            return redirect('/admin/brand')->with('msg','修改成功');
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
        $res = ['id'=>$id,'code'=>''];
        $res['code'] = DB::table('goods_brand')->where('bid',$id)->delete();
        return $res;
        
    }
}
