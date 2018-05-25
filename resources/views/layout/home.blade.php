
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>

     <link href="/home/sycss/image/favicon.ico" type="/home/sycss/image/x-icon" rel="shortcut icon"/> 
     <link type="text/css" rel="stylesheet" href="/home/sycss/styles/index.css" />



    <!-- 商品列表css -->
    <link rel="stylesheet" href="/home/css/nav-mogu-act.css">
    <link href="/home/css/TopNavSideBar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/home/css/pc_selection_wall.css">
    <link rel="stylesheet" href="/home/css/index.css">

    <!-- 商品详情css -->
    <link href="/home/css/xqindex.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/home/css/bottom.css" media="all">
    <link href="/home/css/index_002.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/home/css/icon.css">
    <link rel="stylesheet" type="text/css" href="/home/css/shopHeader.css">


    <link rel="stylesheet" type="text/css" href="/home/car/index.css">
    <link rel="stylesheet" type="text/css" href="/home/car/bottom.css">
    <link rel="stylesheet" type="text/css" href="/home/car/index.css-709a8a6f.css">
    <!-- <link rel="stylesheet" type="text/css" href="/home/car/index.css-aff6006a.css"> -->
    <link rel="stylesheet" type="text/css" href="/home/car/index_002.css">



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


     

</head>

<body>
    
    <div class="mgj_rightbar">
        <div class="mgj-my-cart">
            <a class="nofollow" href="javascript:;">
                <i class="s-icon"></i>
                <div class="s-txt">购物车</div>
            </a>
        </div>
        <div class="mgj-my-coupon">
            <a class="nofollow" href="javascript:;">
                <i class="s-icon"></i>
                <div class="s-txt">优惠券</div>
            </a>
        </div>
        <div class="mgj-my-wallet">
            <a class="nofollow" href="javascript:;">
                <i class="s-icon"></i>
                <div class="s-txt">钱包</div>
            </a>
        </div>
        <div class="mgj-my-browserlog">
            <a class="nofollow" href="javascript:;">
                <i class="s-icon"></i>
                <div class="s-txt">足迹</div>
            </a>
        </div>
         <div class="sideBottom">
            <a class="nofollow" href="javascript:;">
                <i class="s-icon"></i>               
            </a>
        </div>


    </div>
    <?php
        $res = DB::table('user')->where('uid',session('uid'))->first();
        // dd($res);
    ?>
    <div class="head">
       <div class="head-top">
          <ul>
          <li class="wodexiaodian"><a class="wd" href="../mgjz/index.html">我的小店</a></li>
          <li class="khfw">
                <a class="fw" href="#">
                    客户服务
                    <ul class="khfwtk">
                        <li>联系合作</li>
                        <li>帮助</li>
                    </ul>
                    
                </a>
          </li>
          <li class="gouwuche">
<!--                <div class="gwctk"></div>-->
                <a class="gwc" href="#">
                    购物车
                    <ul class="gwctk">
                            <li>购物车里没有商品！</li>
                        </ul>
                </a>
          </li>
          <li class="dingdan"><a class="dd" href="#">我的订单</a></li>
          <li ><a class="dl" href="/home/userdetails" style="color: red">{{$res->uname}}</a></li>
          <li ><a class="zc" href="/home/register">注册</a></li>
                
          </ul>
            
            
        </div>
        @section('content')

        @show

<!-- 底部链接 -->
<div class="foot">
            <div class="foot-top banxin">
                <div class="foot-top-l">
                    <div class="foot-logo">
                        <a href="#"><img src="/home/sycss/image/foot-logo.png" /></a>                        
                    </div>
                    <p class="xukezheng">
                    营业执照注册号：<a href="#">330106000129004</a>
                    </p>
                    <p class="xukezheng">
                    增值电信业务经营许可证：<a href="#">浙B2-20110349</a>
                    </p>
                    <p class="xukezheng">
                    ICP备案号：浙ICP备10044327号-3
                    </p>
                    <p class="xukezheng">
                    ©2015 Mogujie.com 杭州卷瓜网络有限公司
                    </p>
                    
                </div>
                <div class="foot-top-r">
                    <dl>
                        <dt>公司</dt>
                        <dd><a href="#">关于我们</a></dd>
                        <dd><a href="#">招聘信息</a></dd>
                        <dd><a href="#">联系我们</a></dd>
                    </dl>
                    <dl>
                        <dt>消费者</dt>
                        <dd><a href="#">帮助中心</a></dd>
                        <dd><a href="#">意见反馈</a></dd>
                        <dd><a href="#">手机版下载</a></dd>
                    </dl>
                    <dl>
                        <dt>商家</dt>
                        <dd><a href="#">免费开店</a></dd>
                        <dd><a href="#">商家社区</a></dd>
                        <dd><a href="#">商家入驻</a></dd>
                        <dd><a href="#">管理后台</a></dd>
                    </dl>
                    <dl>
                        <dt>权威认证</dt>
                        <dd><a href="#">免费开店</a></dd>
                        <dd><a href="#">商家社区</a></dd>
                        <dd><a href="#">商家入驻</a></dd>
                        <dd><a href="#">管理后台</a></dd>
                    </dl>
                
                </div>
                
            </div>
            <div class="foot-bottom banxin">
                <dl>
                    <dt>友情链接:</dt>
                    <dd><a href="#">淘粉吧</a></dd>
                    <dd><a href="#">蘑菇街团购网</a></dd>
                    <dd><a href="#">蘑菇街女装</a></dd>
                    <dd><a href="#">蘑菇街男装</a></dd>
                    <dd><a href="#">蘑菇街鞋子</a></dd>
                    <dd><a href="#">蘑菇街包包</a></dd>
                    <dd><a href="#">蘑菇街家居</a></dd>
                    <dd><a href="#">家具网</a></dd>
                    <dd><a href="#">时尚品牌网</a></dd>
                    <dd><a href="#">装修</a></dd>
                    <dd><a href="#">蘑菇街母婴</a></dd>
                    <dd><a href="#">衣联网</a></dd>
                    <dd><a href="#">播视网视频</a></dd>             
                
                </dl>
            
            </div>
        
    </div>
</body>
</html>

