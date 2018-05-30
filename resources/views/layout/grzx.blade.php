<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <script type="text/javascript">
            window.__trace__headstart = +new Date;
            window.__server__startTime = 1525952963309;
            window.__token = "mTu9xj%2F05ucpZLhbCOAWsJmE2RSt4rIhO02%2BlWmgf0Fcp5BnN0a%2FXdgrYMY1Rkxa";
        </script>
        <meta charset="UTF-8">
        <link rel="dns-prefetch" href="http://s6.mogucdn.com/">
        <link rel="dns-prefetch" href="http://s7.mogucdn.com/">
        <link rel="dns-prefetch" href="http://s6.mogujie.cn/">
        <link rel="dns-prefetch" href="http://s7.mogujie.cn/">
        <link rel="dns-prefetch" href="http://s8.mogujie.cn/">
        <link rel="dns-prefetch" href="http://s9.mogujie.cn/">
        <link rel="dns-prefetch" href="http://s12.mogujie.cn/">
        <link rel="dns-prefetch" href="http://s13.mogujie.cn/">
        <meta http-equiv="Cache-Control" content="no-transform ">
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            @yield('title')
        </title>
        <meta name="keywords" content="蘑菇街,mogujie,买手,买手街,网购">
        <meta name="description" content="">
        <meta name="copyright" content="mogujie.com">
        <link rel="search" type="application/opensearchdescription+xml" href="http://www.mogujie.com/opensearch.xml">
        <link rel="icon" href="https://s10.mogucdn.com/mlcdn/c45406/170401_16fj5k6k4174bfd21d03a4gf6a7hg_48x48.png"
        type="image/x-icon">
        <script type="text/javascript">
            var curl = {
                apiName: 'require'
            };
            var MOGU = {};
            var MoGu = {};
            var MOGU_DEV = 0 || "online" == "pre";
            var M_ENV = "online";
        </script>
        <link href="/home/grzx/index.css"
        rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/home/grzx/bottom.css"
        media="all">
        <link href="/home/grzx/index_002.css"
        rel="stylesheet" type="text/css">
        
        
        <link rel="stylesheet" href="/home/grzx/index_003.css">
       
    </head>
    
    <body class="media_screen_960 media_screen_1200">
       
        <div style="right: 0px;" class="mgj_rightbar J_sidebar" data-ptp="_sidebar">
            <!--空的右侧边栏-->
            <div id="mgj_rightbar_top_blank" class="mgj_rightbar_960">
            </div>
            <!--方便定margin的空dediv-->
            <div id="mgj_rightbar_blank_div">
            </div>
            <!--用户头像-->
            
            <!--购物车-->
            <div style="left: 0px;" class="sidebar-item mgj-my-cart">
                <a target="_blank" href="/home/cart" rel="nofollow">
                    <i class="s-icon">
                    </i>
                    <div class="s-txt">
                        购物车
                    </div>
                    <div style="display: none;" class="num">
                    </div>
                </a>
            </div>
             <!--订单-->
        <div style="left: 0px;" class="sidebar-item mgj-my-cart">
        <a target="_blank" href="/home/orderindex" rel="nofollow">
            
            <div class="s-txt">
                我的订单
            </div>
            
        </a>
        </div>
        <!--地址-->
        <div style="left: 0px;" class="sidebar-item mgj-my-cart">
        <a target="_blank" href="/home/dizhiedit" rel="nofollow">
            
            <div class="s-txt">
                地址管理
            </div>
            
        </a>
        </div>
           
            <div class="sideBottom">
                <!--回到顶部-->
                <div style="left: 0px;" class="sidebar-item mgj-back2top show">
                    <a rel="nofollow" href="javascript:;">
                        <i class="s-icon">
                        </i>
                    </a>
                </div>
            </div>
        </div>
        <?php
            $res = DB::table('user')->where('uid',session('uid'))->first();
            // dd($res);
        ?>
        <div id="header" class="J_sitenav site-top-nav" data-ptp="_head">
            <div class="wrap">
                <a href="/home/index" rel="nofollow" class="home fl">
                    iluck首页
                </a>
                <ul class="header-top">
                    <li class="s1 has-icon user-meta">
                        <a rel="nofollow" href="javascript:;" style="color: red">
                            {{$res->uname}}
                        </a>
                        <a rel="nofollow" href="/home/userdetails" target="_blank">
                        </a>
                        <i class="icon-delta">
                        </i>
                        <ol class="ext-mode" id="menu-personal">
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="/home/userdetails">
                                    个人设置
                                </a>
                            </li>
                            <li class="s2">
                                <a rel="nofollow" href="/home/loginout">
                                    退出
                                </a>
                            </li>
                        </ol>
                    </li>
                    
                    <li class="s1 has-icon has-line user-fav">
                        <a rel="nofollow" href="#">
                            我的收藏
                        </a>
                        <i class="icon-delta">
                        </i>
                        <ul class="ext-mode">
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="#">
                                    收藏的商品
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li class="s1 myorder has-line">
                        <a href="/home/orderindex" target="_blank" class="text display_u"
                        rel="nofollow">
                            我的订单
                        </a>
                    </li>
                    <li class="s1 has-line shopping-cart-v2">
                        <a class="/home/cart" href="#" target="_blank"
                        rel="nofollow">
                            <span class="cart_info">
                                购物车
                            </span>
                        </a>
                        <i class="icon-delta">
                        </i>
                        <span class="shopping-cart-loading">
                        </span>
                    </li>
                   
                   
                </ul>
            </div>
        </div>
        <style>
            .innerwrap{ margin-right: -30px; } .media_screen_960 { min-width: 960px;
            } .promotionTopNavContainer { height: 50px; overflow: hidden; display:
            none;} .promotionTopNavContainer a { display: block; width: 86px; height:
            50px; overflow: hidden;} .promotionTopNavContainer a.first { width: 168px;
            } /** screnn-960 **/ .media_screen_960 .promotionTopNavContainer .first{
            width: 153px!important; } .media_screen_960 .promotionTopNavContainer a
            { width: 66px; } .media_screen_960 .promotionTopNavContainer a.last {width:
            80px;} .wrap { position: relative;}
        </style>
        <div class="promotionTopNavContainer">
        </div>
        <script type="text/template" class="topnavPromotionTpl">
            < div class = "wrap" >

            </div>

        </script>
        <!-- 中间区域 -->
        
        <?php $a = session('uid'); ?>
        <div id="body_wrap">
            <div id="body_content_wrap">
                <div id="body" class="fm970">
                    <div class="per_wrap clearfix" id="per_wrap">
                        <div id="navListWrap">
                            <div class="mu_nav_wrap">
                                <div class="mu_nav_info">
                                    <div class="mu_nav_info_avatar">
                                        <div class="mu_nav_info_avatar_mk">
                                        </div>
                                        <img src="{{$res->uic}}"
                                        height="100" width="100" alt="暂无图片">
                                    </div>
                                    <p class="mu_nav_info_uname">
                                        {{$res->uname}}
                                    </p>
                                </div>
                                <div class="mu_nav mu_expand">
                                    <div class="mu_title">
                                        我的订单
                                    </div>
                                    <ul class="mu_nav_item">
                                        <li>
                                            <a href="/home/orderindex">
                                                全部订单
                                            </a>
                                        </li>

                                        <li>
                                            <a href="/home/rec/index">
                                                订单回收
                                            </a>
                                        </li>
                                      
                                         
                                       
                                        <!-- 新增，stage=8 回收站订单 -->
                                        
                                    </ul>
                                </div>
                                
                                
                             <div class="mu_nav pb40 mu_expand">
                                    <div class="mu_title">
                                       地址管理
                                    </div>
                                    <ul class="mu_nav_item">
                                        <li class="">
                                            <a href="/home/dizhiedit">
                                                添加信息
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/home/dizhiindex">
                                                预览信息
                                            </a>
                                        </li>
                                        
                                          
                                    </ul>
                                </div>
                               
                                
                                <div class="mu_nav pb40 mu_expand">
                                    <div class="mu_title">
                                        帐号设置
                                    </div>
                                    <ul class="mu_nav_item">
                                        <li class="">
                                            <a href="/home/userdetails">
                                                基本信息
                                            </a>
                                        </li>
                                        <li>
                                            <?php $a = session('uid'); ?>

                                            <a href="/home/userdetails/touxiang/{{$a}}">
                                                修改头像
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @section('content')

                        @show
                        <script src="/sanji/jquery.min.js"></script>
                        <style type="text/css">
                         
                        </script>
                       
                        
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.isDev = !!0;
        </script>
        <script type="text/javascript" src="/home/grzx/index_003.js">
        </script>
        <script type="text/javascript" src="/home/grzx/index.js">
        </script>
        <script src="/home/grzx/index_002.js">
        </script>
        <script src="/home/grzx/getcapjs" id="shieldcaptain-bootstrap"
        type="text/javascript">
        </script>
    </body>

</html>