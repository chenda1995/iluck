<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SpxqController extends Controller
{
    //
    public function index($gid)
    {
        $goods = DB::table('goods')->where('gid',$gid)->first();
        $goods->gpic = json_decode($goods->gpic);
        $goods->size = explode(',', $goods->size);
        $goods->color = explode('，', $goods->color);
        // $cardo = DB::table('car')
         



        //查询商品对应评论
        $commentTot = DB::table('user_evaluate')->where('gid',$gid)->count();

        $goodTot = DB::table('user_evaluate')->where([['gid','=',$gid],['start','>',4]])->count(); //好评
        $chaTot = DB::table('user_evaluate')->where([['gid','=',$gid],['start','<=',2]])->count(); //差评
        $zhongTot = $commentTot-$goodTot-$chaTot;                     //中评

        $arr = array(
            'commentTot'=>$commentTot,
            'goodTot'=>$goodTot,
            'chaTot'=>$chaTot,
            'zhongTot'=>$zhongTot,
        );

        $comment = DB::table('user_evaluate')
                        ->select("user_evaluate.*","user.uic","user.uname")
                        ->join('user','user.uid','user_evaluate.uid')   
                        ->orderBy('etime', 'desc')
                        ->paginate(20);

                        
        //数据格式化
        $data = array(
            'arr'=>$arr,
            'comment'=>$comment,
        );



        // var_dump($goods);die;
        return view('home.spxq.spxq',[
            'title'=>'商品详情',
            'goods'=>$goods,
            'comment'=>$comment
        ])->with($data);





    }
}
