<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>


     <link type="text/css" rel="stylesheet" href="/home/sycss/styles/index.css" />



    <!-- 商品列表css -->
    <link rel="stylesheet" href="/home/css/nav-mogu-act.css">

    <link href="/home/css/css/TopNavSideBar.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/home/css/pc_selection_wall.css">
    <link rel="stylesheet" href="/home/css/index.css">

    <!-- 商品详情css -->
    <link href="/home/css/css/xqindex.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/home/css/css/bottom.css" media="all">
    <link href="/home/css/css/index_002.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/home/css/css/icon.css">
    <link rel="stylesheet" type="text/css" href="/home/css/css/shopHeader.css">



    <link rel="stylesheet" type="text/css" href="/home/css/index.css">
    <link rel="stylesheet" type="text/css" href="/home/css/bottom.css">
    <link rel="stylesheet" type="text/css" href="/home/css/index.css-709a8a6f.css">

<link href="/home/%E6%88%91%E7%9A%84%E6%94%B6%E8%97%8F_files/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/home/%E6%88%91%E7%9A%84%E6%94%B6%E8%97%8F_files/bottom.css" media="all">
<link href="/home/%E6%88%91%E7%9A%84%E6%94%B6%E8%97%8F_files/index_002.css" rel="stylesheet" type="text/css">





    <!-- <link rel="stylesheet" type="text/css" href="/home/car/index.css-aff6006a.css"> -->
    <link rel="stylesheet" type="text/css" href="/home/css/index_002.css">



    <link rel="stylesheet" type="text/css" href="/home/css/index.css">



     <script type="text/javascript" src="/home/sycss/js1.7/jquery-1.7.2.min.js"></script>
     <script type="text/javascript" src="/home/sycss/js/index.js"></script>

    <script src="/home/fenlei/js/jquery.min.js"></script>
    <script src="/home/fenlei/js/amazeui.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/YuxiSlider.jQuery.min.js"></script>


    <script type="text/javascript" src="/home/index_files/js/vpop.js$1525832193.js"></script>
    <script type="text/javascript" src="/home/index_files/js/pc_wall.js$1525848313.js"></script>
    <script src="/home/index_files/js/oiDRP1K45KG4TlCsxhUzeDq.js"></script>


   <!--  <script src="/home/car/index.js"></script>
    <script src="/home/car/analytics.js"></script>
    <script src="/home/car/bottom.js"></script>
    <script src="/home/car/index_002.js"></script>
    <script src="/home/car/pkg-pc-base.js"></script> -->



    <style>

        .main1 .three .zs2{
    margin-top:10px;
}
    </style>




</head>


<body style="background: transparent">
    

    <div class="mgj_rightbar">
        <div class="mgj-my-cart">
            <a class="nofollow" href="javascript:;">
                <i class="s-icon"></i>
                <div class="s-txt">购物车</div>
            </a>
        </div>
       
         <div class="sideBottom">
            <a class="nofollow" href="javascript:;">
                <i class="s-icon"></i>
            </a>
        </div>


    </div>
  
    <div class="head">
       <div class="head-top">
          <ul>

          <li class="gouwuche">

                <a class="gwc" href="/home/cart">
                    购物车
                    
                </a>
          </li>

          <li class="dingdan"><a class="dd" href="/home/orderindex">我的订单</a></li>
          <li >

<?php
        $res = DB::table('user')->where('uid',session('uid'))->first();
        // dd($res);
    ?>
            
            @if(session('uid'))
                <li><a href="/home/loginout">退出</a></li>

                <li><a href="/home/userdetails" style="color: red">

                    
                    欢迎{{$res->uname}}

                    <span>|</span> </a></li>
            @else
                <li><a href="/home/login">请登录</a></li>
            @endif
            

            </a>
        </li>
          <li ><a class="zc" href="/home/register">注册</a></li>

          </ul>


        </div>
        @section('content')

        @show

<!-- 底部链接 -->
<div class="foot">
            <div class="foot-top banxin">
               
                <div class="foot-bottom banxin">
                      <?php $fl = DB::table('connect')->get(); ?>
                <dl>
                    
                    @foreach($fl as $k=>$v)
                    <dd><a href="{{$v->curl}}" target="_blank">{{$v->cname}}</a></dd>
                    @endforeach
                </dl>
                    

                </div>

            <br>
        <center>  
            <div style="margin-top: 70px;">
             <span class="xukezheng">
                        IPC备案号：晋ICP备18004132号-1
                    </span>
                    <p class="xukezheng">
                    ©2015 iluck.club 
                    </p>
                </center>
            </div>
            
               

            </div>

    </div>
</body>
</html>

