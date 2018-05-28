<?php

namespace App\Services;

use DB;

class CommonUtils
{
	
	public static function getTypeMassage($pid)
    {
        $res = DB::table('goods_type')->where('pid',$pid)->get();

        $sub_type = [];

        foreach($res as $k => $v){

            $v->type = self::getTypeMassage($v->cid);

            $sub_type[] = $v;
        }

        return $sub_type;

    }
}