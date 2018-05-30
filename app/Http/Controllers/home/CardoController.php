<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class CardoController extends Controller
{
    public function cardo1(Request $Request)
    {
    	$arr = $Request->all();
    	$color = $arr['color'];
    	session(['color'=>$color]);

    	
    }

    public function cardo2(Request $Request)
    {
    	$arr = $Request->all();
    	$size = $arr['size'];
    	session(['size'=>$size]);
    	var_dump(session('size'));
    }

    public function cardo()
    {
    	$car['gname'] = session('gname');
		$car['gpic'] = session('gpic');
		$car['color'] = session('color');
		$car['size'] = session('size');
		$car['price'] = session('price');
		$car['gid'] = session('gid');
		$car['uid'] = session('uid');


		$car = DB::table('car')->insert($car);
		if($car){

		   return redirect('/home/cart');

        } else {

        	return back();
        }
    }
}
