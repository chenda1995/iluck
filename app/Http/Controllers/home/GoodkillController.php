<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodkillController extends Controller
{
    //

    public function goodkill()
    {


        return view('home.goodkill.index');
    }

}
