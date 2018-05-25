<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Request\FormUpdate;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {


       $res =  DB::table('orders')->
       where([
        ['auth',0],
        ['oid','like','%'.$request->input('search').'%'],]
    )->
       orderBy('oid','asc')->
       Paginate($request->input('num',5));

       $num = $request->input('num');
       $search = $request->input('search');
       $arr = $request->all();

       

       return view('admin.orders.orders
        ',[
        'title'=>'后台订单',
        'res'=>$res,
        'num'=>$num,
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $res = DB::table('orders_details')->where( [

            ['oid',$id],
            ['auth', 0], 
        ])->get();
       



       return view('admin.orders.orders_details',[
                'title'=>'订单详情',
                'res'=>$res
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $res = DB::table('orders')->where('oid',$id)->first();

        return view('admin.orders.edit',[
            'title'=>'订单修改',
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
        $arr = $request->input();
        $arr2 = array_pop($arr);
        $arr3 = array_pop($arr);
       $res = DB::table('orders')->where('oid',$id)->update($arr);
         if($res){

            return redirect('/admin/orders')->with('msg','修改成功');
        } else {

            return back();
        }
        
        // echo '<pre>';
        // var_dump($arr);
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
}
