<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FriendlinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $arr = $request->all();
        $res = DB::table('connect')->orderBy('cid','asc')->paginate($request->input('num',5));

        $num = $request->input('num');

        return view('admin.friendlinks.index',[
            'title'=>'友情链接列表',
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

        return view('admin.friendlinks.add',['title'=>'友情链接的添加页面']);
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


        $data = DB::table('connect')->insert($res);
        // dump($data);
        if($data) {
            return redirect('/admin/friendlinks')->with('msg','添加成功');
        } else {
            return back()-with('msg','添加失败');
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

        $res = DB::table('connect')->where('cid',$id)->first();

        return view('admin.friendlinks.edit',[
            'title'=>'友情链接修改页面',
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
        $data = $request->except('_token','_method');

        // dump($data);
        $res = DB::table('connect')->where('cid',$id)->update($data);
        // dump($res);

        if($res) {

            return redirect('/admin/friendlinks')->with('msg','修改成功');
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

        $res = DB::table('connect')->where('cid',$id)->delete();
        // dump($res);

        if($res) {
            return redirect('/admin/friendlinks');
        } else {
            return back();
        }


    }
}
