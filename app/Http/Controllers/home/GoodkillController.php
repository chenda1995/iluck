<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoodkillController extends Controller
{
    //

    public function goodkill()
    {

        $res = DB::table('goods_kill')->get();
        return view('home.goodkill.index',['title'=>'商品抢购页','res'=>$res]);
    }

}
