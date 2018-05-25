<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{
    //
    public function index(Request $request)
    {
    	//多表查询
    	$data = DB::table('user_evaluate')
    		->select("user_evaluate.*","goods.gname","goods.gpic as gimg","user.uname")
    		->join("user",'user.uid','=','user_evaluate.uid')
    		->join("goods","goods.gid",'=',"user_evaluate.gid")
    		->paginate(5);

    		// dd($data);

    		//加载页面
    		return view("admin.comment.index",['title'=>'评论管理'])->with("data",$data);
    }

    

    //ajax修改评论状态
    public function ajaxStatu(Request $request)
    {

    	$arr = $request->except('_token');
    	// var_dump($arr);

    	$sql = "update user_evaluate set statu = $arr[statu] where id = $arr[id]";

    	if (DB::update($sql)) {
    		
    		return 1;
    	} else {

    		return 0;
    	}
    }
}
