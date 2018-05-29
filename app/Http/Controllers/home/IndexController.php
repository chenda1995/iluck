<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{



    public function index()
    {
        //查询轮播图
        $show = DB::table('broadcast')->get();
        // dd($show);

        //获取广告数据

        $addata = DB::table('ad')->get();


        //处理左侧分类
        $types = DB::table('goods_type')->get();
        // dd($types);

        //递归处理数据
        $type = $this->checkTypeData($types);
        // dd($type);


        // 格式化数据
        $data = array(
            "show"=>$show,
            "type"=>$type,
            'addata'=>$addata

        );

        return view('home.index',['title'=>'商城前台首页'])->with($data);


    }




	//处理分类数据
	public function checkTypeData($data,$pid=0)
	{
		//新建数组
		$newArr = array();

		// 获取数据
		foreach ($data as $k => $v) {

			if ($v->pid==$pid) {

				$newArr[$v->cid] = $v;
				$newArr[$v->cid]->zi = $this->checkTypeData($data,$v->cid);
			}
		}
		//返回数据
		return $newArr;
	}





}
