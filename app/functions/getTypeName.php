<?php

	function getName($pid){
		if($pid == '0'){
			return '顶级分类';
		}else{
			$res = DB::table('goods_type')->where('cid',$pid)->first();
			// dd($pid);die;
			return empty($res->cname) ? '' : $res->cname;
		}
	}