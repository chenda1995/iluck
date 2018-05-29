<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        
    
        <meta charset="UTF-8">

        <title>
            {{$title}}
        </title>

   
        <script type="text/javascript">
            var curl = {
                apiName: 'require'
            };
            var MOGU = {};
            var MoGu = {};
            var MOGU_DEV = 0 || "online" == "pre";
            var M_ENV = "online";
        </script>

        <link href="/home/css/xqindex.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/home/css/bottom.css" media="all">
        <link href="/home/css/index_002.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/home/css/icon.css">
        <link rel="stylesheet" type="text/css" href="/home/css/shopHeader.css">

        <script type="text/javascript" src="/home/js/mwp.js"></script>

        <script type="text/javascript">
            if (window.require) {
                require.config({
                    domain: 0
                });
            }

            MOGUPROFILE = {};
        </script>
       
        <style type="text/css">
            .admin_panel_wrap { width: 1200px; margin: 0 auto; } .admin_panel { border:
            1px solid #e0e0e0; background: #fff; padding: 20px; margin-top: 20px; font-size:
            14px; } .admin_panel .item { float: left; margin-right: 20px; } .admin_panel
            .item .title { color: #ff7b76; font-size: 14px; font-weight: bold; } .admin_panel
            .op_btn { background: #34beff; color: #fff; display: inline-block; width:
            48px; text-align: center; border-radius: 3px; } .media_screen_960 .admin_panel_wrap
            { width: 960px; }
        </style>
        <style type="text/css">
            #J_ModulePintuan { border: 1px solid #e5e5e5; margin-bottom: 20px; padding:
            20px 20px 10px 20px; } #J_ModulePintuan .title-bar { font-size: 14px; color:
            #666666; padding-bottom: 19px; margin-bottom: 20px; border-bottom: 1px
            solid #e5e5e5; } #J_ModulePintuan .title-bar img { height: 15px; width:
            62px; margin-right: 11px; vertical-align: -2px; } #J_ModulePintuan .title-bar
            .btn-rule { cursor: pointer; text-decoration: underline; color: #999999;
            } #J_ModulePintuan ul { font-size: 0; } #J_ModulePintuan li { width: 31.1%;
            margin-right: 1.7%; height: 40px; line-height: 40px; padding: 10px 0 10px
            10px; background-color: #fff0f0; display: inline-block; margin-bottom:
            10px; border-radius: 2px; } #J_ModulePintuan li:last-child { margin-right:
            0; } #J_ModulePintuan li .avatar { border-radius: 50%; width: 40px; height:
            40px; margin-right: 10px; } #J_ModulePintuan li .name { font-size: 14px;
            color: #333333; display: inline-block; width: 68px; overflow: hidden; height:
            40px; vertical-align: middle; text-overflow: ellipsis; white-space: nowrap;
            } #J_ModulePintuan li .info { display: inline-block; line-height: 20px;
            text-align: right; margin-right: 10px; font-size: 12px; } #J_ModulePintuan
            li .info .num { color: #ff5777; } #J_ModulePintuan li .info .time { color:
            #999999; } #J_ModulePintuan li .btn-pintuan { position: relative; top:
            -10px; display: inline-block; width: 80px; height: 60px; line-height: 60px;
            color: #ff5777; background-color: #fedcdc; text-align: center; font-size:
            14px; border-radius: 0 2px 2px 0; cursor: default; } #J_ModulePintuan li
            .btn-pintuan:hover .qrcode-wrapper { display: inline-block; } #J_ModulePintuan
            li .btn-pintuan .qrcode-wrapper { display: none; width: 180px; height:
            195px; line-height: normal; background: white; font-size: 10px; text-align:
            center; padding: 10px 5px; position: relative; z-index: 10000; top: -7px;
            left: -13px; border-radius: 5px; box-shadow: 0 0 5px #dddddd; color: #666666;
            } #J_ModulePintuan li .btn-pintuan .qrcode-wrapper .trangle { position:
            absolute; top: -6px; left: 48px; width: 0; height: 0; border-left: 5px
            solid transparent; border-right: 5px solid transparent; border-bottom:
            6px solid white; } #J_ModulePintuan li .btn-pintuan .qrcode-wrapper .qrcode
            { width: 180px; height: 180px; margin-bottom: 2px; } #J_ModulePintuan .modal-pintuan-rule
            { display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0;
            margin: auto; height: 300px; width: 400px; padding: 16px 20px; z-index:
            20001; background-color: white; border-radius: 6px; font-size: 14px; }
            #J_ModulePintuan .modal-pintuan-rule .head-title { margin-bottom: 17px;
            text-align: center; color: #333333; } #J_ModulePintuan .modal-pintuan-rule
            .content { height: 260px; overflow-y: auto; } #J_ModulePintuan .modal-pintuan-rule
            .content .title { color: #333333; } #J_ModulePintuan .modal-pintuan-rule
            .content .desc { color: #666666; margin-bottom: 10px; } #J_ModulePintuan
            .modal-pintuan-rule .m-icon-close { position: absolute; right: 11px; top:
            11px; font-size: 12px; color: #999999; cursor: pointer; } #J_ModulePintuan
            .modal-mask { display: none; position: fixed; top: 0; left: 0; height:
            100%; width: 100%; background-color: black; opacity: 0.4; z-index: 20000;
            } .media_screen_1200 #J_ModulePintuan li { width: 31.3%; } .media_screen_1200
            #J_ModulePintuan li .name { width: 140px; }
        </style>
        <style type="text/css">
            #J_ModuleNavModal .mask { position: fixed; top: 0; left: 0; z-index: 99999;
            background: black; opacity: 0.4; width: 100%; height: 100%; } #J_ModuleNavModal
            .wrapper { position: fixed; top: 0; left: 0; right: 0; bottom: 0; margin:
            auto; z-index: 100000; height: 323px; width: 610px; padding: 80px 0; border-radius:
            10px; background: white; } #J_ModuleNavModal .wrapper .m-icon-close { position:
            absolute; top: 21px; right: 21px; font-size: 19px; color: #999999; cursor:
            pointer; } #J_ModuleNavModal .wrapper .header { font-family: 'PingFangSC-Medium';
            font-size: 30px; line-height: 30px; text-align: center; margin-bottom:
            12px; color: #333333; } #J_ModuleNavModal .wrapper .desc { font-family:
            'PingFangSC-Regular'; font-size: 16px; line-height: 26px; text-align: center;
            margin-bottom: 40px; color: #333333; } #J_ModuleNavModal .wrapper .qrcode-list
            { padding: 0 70px; text-align: center; } #J_ModuleNavModal .wrapper .item
            { display: inline-block; position: relative; vertical-align: middle; width:
            216px; height: 216px; } #J_ModuleNavModal .wrapper .item .r { display:
            inline-block; position: absolute; width: 23px; height: 23px; border: 1px
            solid #d8d8d8; } #J_ModuleNavModal .wrapper .item .r1 { top: 0; left: 0;
            border-radius: 6px 0 0 0; border-right: none; border-bottom: none; } #J_ModuleNavModal
            .wrapper .item .r2 { top: 0; right: 0; border-radius: 0 6px 0 0; border-left:
            none; border-bottom: none; } #J_ModuleNavModal .wrapper .item .r3 { bottom:
            0; right: 0; border-radius: 0 0 6px 0; border-left: none; border-top: none;
            } #J_ModuleNavModal .wrapper .item .r4 { bottom: 0; left: 0; border-radius:
            0 0 0 6px; border-right: none; border-top: none; } #J_ModuleNavModal .wrapper
            .item .icon { position: absolute; top: 89px; left: 89px; width: 40px; height:
            40px; z-index: 1; } #J_ModuleNavModal .wrapper .item .img { display: inline-block;
            position: absolute; top: 24px; left: 24px; width: 170px; height: 170px;
            } #J_ModuleNavModal .wrapper .item .text { position: absolute; bottom:
            -10px; left: 0; width: 100%; text-align: center; font-size: 14px; color:
            #999999; }
        </style>
        <style type="text/css">
            #J_ModuleCustomProperty { margin-right: 10px; min-height: auto; } #J_ModuleCustomProperty
            .property-cont { font-size: 12px; } #J_ModuleCustomProperty .tag-img {
            height: 20px; margin-right: 3px; vertical-align: middle; } #J_ModuleCustomProperty
            .link { margin-left: 20px; } #J_ModuleCustomBanner { position: fixed; bottom:
            0; left: 0; z-index: 1024; background: #eee; width: 100%; } #J_ModuleCustomBanner
            img { width: 100%; } #J_ModuleCustomBanner .m-icon-close { position: absolute;
            right: 40px; top: 10px; color: white; font-weight: bold; padding: 5px;
            }
        </style>
        <style type="text/css">
            .nohl { -webkit-user-select: none; -moz-user-select: none; -ms-user-select:
            none; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-text-size-adjust: 100% } .shieldcaptain-warpper { max-width: 414px
            } .shieldcaptain-warpper .desc { overflow: hidden } .shieldcaptain-warpper
            .desc > span { color: #666; float: left; font-size: 12px } .shieldcaptain-warpper
            .desc > a { float: right; font-size: 12px; color: #999 } .shieldcaptain-warpper
            .img-con { position: relative; text-align: center; margin-top: 8px } .shieldcaptain-warpper
            .img-con .success-con { position: absolute; display: none; width: 100%;
            height: 100%; top: 0; left: 0; background-color: rgba(255, 255, 255, 0.8)
            } .shieldcaptain-warpper .img-con .success-con p { font-size: 12px; color:
            #333; display: block; position: absolute; text-align: center; top: 50%;
            line-height: 32px; margin-top: -16px; width: 100% } .shieldcaptain-warpper
            .img-con .loading-con { position: absolute; display: none; top: 0; left:
            0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.6)
            } .shieldcaptain-warpper .img-con .loading-con > svg { width: 74px; height:
            74px; position: absolute; left: 50%; top: 50%; margin-left: -38px; margin-top:
            -38px } .shieldcaptain-warpper .img-con .img-list { font-size: 0; width:
            100%; margin: 0; padding: 0; overflow: hidden } .shieldcaptain-warpper
            .img-con .img-list li { list-style: none; display: inline-block; vertical-align:
            middle; width: 24.25%; background-repeat: no-repeat; background-size: auto
            100%; cursor: pointer; transition: all ease 0.2s; margin-right: 1% } .shieldcaptain-warpper
            .img-con .img-list li:after { content: ''; display: block; width: 100%;
            padding-top: 100% } .shieldcaptain-warpper .img-con .img-list li:nth-child(1)
            { background-position: 0 0 } .shieldcaptain-warpper .img-con .img-list
            li:nth-child(2) { background-position: 33.33% 0 } .shieldcaptain-warpper
            .img-con .img-list li:nth-child(3) { background-position: 66.66% 0 } .shieldcaptain-warpper
            .img-con .img-list li:nth-child(4) { background-position: 100% 0; margin-right:
            0 }
        </style>
    </head>
    
    <body class="media_screen_1200">
        
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
                <a target="_blank" href="http://cart.mogujie.com/cart/mycart" rel="nofollow">
                    <i class="s-icon">
                    </i>
                    <div class="s-txt">
                        购物车
                    </div>
                    <div class="num">
                    </div>
                </a>
            </div>
            <!--优惠券-->
            <div class="sidebar-item mgj-my-coupon">
                <a target="_blank" rel="nofollow" href="http://promotion.mogujie.com/trade/promotion/user/shopcoupon">
                    <i class="s-icon">
                    </i>
                    <div class="s-txt">
                        优惠券
                    </div>
                    <div class="num">
                    </div>
                </a>
            </div>
            <!--钱包-->
            <div class="sidebar-item mgj-my-wallet">
                <a target="_blank" rel="nofollow" href="https://payuserp.mogujie.com/wallet/home">
                    <i class="s-icon">
                    </i>
                    <div class="s-txt">
                        钱包
                    </div>
                </a>
            </div>
            <!--足迹-->
            <div class="sidebar-item mgj-my-browserlog">
                <a target="_blank" rel="nofollow" href="http://track.mogujie.com/">
                    <i class="s-icon">
                    </i>
                    <div class="s-txt">
                        足迹
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
       <div id="header" class="site-top-nav J_sitenav" data-ptp="_head">
            <div class="wrap">
                <a href="" rel="nofollow" class="home fl">
                    iluck首页
                </a>
                <ul class="header-top">
                    <li class="s1 show-nologin">
                        <a rel="nofollow" class="" href="/home/userdetails" style="color: red">

                          
                        </a>
                    </li>
                    <li class="s1 show-nologin">
                        <a rel="nofollow" class="J_nav_btn_login" href="/home/userdetails">

                            个人中心 
                            
                        </a>
                    </li>
                     <li class="s1 show-nologin">
                        <a rel="nofollow" class="J_nav_btn_login" href="/home/loginout">

                        注销
                            
                        </a>
                    </li>
                    <li class="s1 myorder has-line">
                        <a href="" target="_blank" class="text display_u"
                        rel="nofollow">
                            我的订单
                        </a>
                    </li>
                    <li class="s1 has-line shopping-cart-v2 sc-on">
                        <a class="cart-info-wrap" href="" target="_blank"
                        rel="nofollow">
                            <span class="cart-info">
                                购物车
                            </span>
                        </a>
                        <i class="icon-delta">
                        </i>
                        <span class="shopping-cart-loading">
                        </span>
                      
                    </li>
                    <li class="s1 has-line has-icon custom-item">
                        <a rel="nofollow" href="" target="_blank">
                            客户服务
                        </a>
                        <i class="icon-delta">
                        </i>
                        <ol class="ext-mode">
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="">
                                    消费者服务
                                </a>
                            </li>
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="">
                                    商家服务
                                </a>
                            </li>
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="">
                                    规则中心
                                </a>
                            </li>
                        </ol>
                    </li>
                    <li class="s1 has-line has-icon myxiaodian">
                        <a href="" rel="nofollow" target="_blank"
                        class="text display_u">
                            商家后台
                        </a>
                        <i class="icon-delta">
                        </i>
                        <ol class="ext-mode">
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="">
                                    管理后台
                                </a>
                            </li>
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="">
                                    商家社区
                                </a>
                            </li>
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="">
                                    商家培训
                                </a>
                            </li>
                            <li class="s2">
                                <a target="_blank" rel="nofollow" href="">
                                    市场入驻
                                </a>
                            </li>
                        </ol>
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
 
       
        <div class="shop-info-search-header">
            <div class="shop-info-box">
                <div class="J-user-info-box">
                    <div class="J-shop-user-info J-show-user-detail">
                        <a href="http://shop.mogujie.com/1oy202" class="avatar" title="Penta KIll shoes">
                            <img class="face fl" src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/1v1w1h_2fefch9jc0fa0hl3h9hee5iicci12_200x200.jpg">
                        </a>
                        <div class="name-score-wrap">
                            <div class="name-wrap fl">
                                <a href="http://shop.mogujie.com/1oy202" class="name fl" title="Penta KIll shoes">
                                    Penta KIll shoes
                                </a>
                                <p class="mark">
                                </p>
                            </div>
                            <div class="score-wrap">
                                <p class="star">
                                    <i>
                                    </i>
                                    <i>
                                    </i>
                                    <i>
                                    </i>
                                    <i>
                                    </i>
                                </p>
                                <p class="descript">
                                    <span class="cat">
                                        描述
                                        <b class="">
                                            4.74
                                        </b>
                                    </span>
                                    <span class="cat">
                                        质量
                                        <b class="">
                                            4.73
                                        </b>
                                    </span>
                                    <span class="cat">
                                        服务
                                        <b class="">
                                            4.79
                                        </b>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="J-shop-user-info-detail">
                        <div class="info-box fl">
                            <ol class="li li3">
                                <li>
                                    <span class="tag">
                                        所在地区：
                                    </span>
                                    浙江省台州市
                                </li>
                                <li>
                                    <span class="tag">
                                        商品数：
                                    </span>
                                    247
                                </li>
                                <li>
                                    <span class="tag">
                                        收藏数：
                                    </span>
                                    27121
                                </li>
                                <li>
                                    <span class="tag">
                                        销售量：
                                    </span>
                                    210920
                                </li>
                                <li>
                                    <span class="tag">
                                        创建时间：
                                    </span>
                                    2015年09月27日
                                </li>
                                <li>
                                    <span class="tag">
                                        店铺保证金：
                                    </span>
                                    已缴纳
                                </li>
                                <li class="company-info clearfix">
                                    <span class="tag">
                                        公司名：
                                    </span>
                                    <span class="c-name">
                                        温岭娜美贸易有限公司
                                    </span>
                                </li>
                                <li>
                                    <span class="tag">
                                        工商执照：
                                    </span>
                                    <a class="shop-company-licen" href="https://s17.mogucdn.com/p1/160425/1v1w1h_ifrgimjxmvrgenbshazdambqmeyde_2448x3264.jpg_640x999.jpg_watermark"
                                    target="_blank">
                                        <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/upload_ifrtezlgmzsgmolbguzdambqhayde_25x25.png"
                                        alt="">
                                    </a>
                                </li>
                                <li class="tc mt10 mb3">
                                    <a class="go-detail" href="http://shop.mogujie.com/1oy202/credit" target="_blank"
                                    rel="nofollow">
                                        查看详情
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <ol class="li li1">
                            <li class="title">
                                动态评分
                            </li>
                            <li>
                                描述相符：
                                <span class="num">
                                    4.74
                                </span>
                            </li>
                            <li>
                                质量满意：
                                <span class="num">
                                    4.73
                                </span>
                            </li>
                            <li>
                                服务周到：
                                <span class="num">
                                    4.79
                                </span>
                            </li>
                        </ol>
                        <ol class="li li2">
                            <li class="title">
                                比同行平均
                            </li>
                            <li>
                                <span class="tag up">
                                    高
                                </span>
                                0.86%
                            </li>
                            <li>
                                <span class="tag up">
                                    高
                                </span>
                                1.04%
                            </li>
                            <li>
                                <span class="tag up">
                                    高
                                </span>
                                1.89%
                            </li>
                        </ol>
                        <ol class="li li4" v-if="shopDetailInfo.dsr">
                            <li class="title">
                                本店
                            </li>
                            <li>
                                平均发货时间：
                                <span class="num">
                                    0.90
                                </span>
                                天
                            </li>
                            <li>
                                退货率：
                                <span class="num">
                                    0.56 %
                                </span>
                            </li>
                            <li>
                                有效投诉率：
                                <span class="num">
                                    0.00 %
                                </span>
                            </li>
                        </ol>
                        <ol class="li li5">
                            <li class="title">
                                行业
                            </li>
                            <li>
                                1.08 天
                            </li>
                            <li>
                                3.67 ％
                            </li>
                            <li>
                                0.04 ％
                            </li>
                        </ol>
                    </div>
                    <div class="shop-header-action">
                        <a class="J-shop-follow shop-follow fl" rel="nofollow" href="javascript:;">
                            收藏店铺
                        </a>
                        <a href="javascript:;" class="chart fl clearfix">
                            <div class="mogutalk_widget_btn kefu fl mogutalk_widget4" data-bid="1oy202#23"
                            data-style="widget4" data-from="shop-header">
                            </div>
                        </a>
                    </div>
                    <div class="shop-header-arrow J-show-user-detail">
                    </div>
                    <div class="line-right fr">
                    </div>
                </div>
                <div class="shop-search">
                    <div class="top_nav_search" id="nav_search_form">
                        <input class="searchInShop J-searchInShop" value="搜本店" type="submit">
                        <form class="search_inner_box clearfix" action="http://list.mogujie.com/s"
                        method="get" id="top_nav_form" target="_blank">
                            <input data-acm="3.mce.1_4_11k.39084.76952.pC6UkqRDTONn5.p_12_hotSearchKeywordRec-sd_115_116-mid_39084-mdt_sketch-lc_201"
                            id="headerSeachValue" data-tel="search_book" name="q" class="ts_txt fl"
                            data-def="拖鞋" value="拖鞋" autocomplete="off" def-v="拖鞋" type="text">
                            <input value="搜全站" class="ts_btn" type="submit">
                            <input name="t" value="bao" id="select_type" type="hidden">
                            <input name="ptp" value="" type="hidden">
                        </form>
                        <div class="top_search_hint is-not-ie8-hack">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="J-shop-top-banner">
            <div class="top-banner-img" style="background-image: url(http://s2.mogucdn.com/p2/170227/190064789_7lljg21cbacd1ik8he08kc1l47fa2_1920x150.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center">
            </div>
        </div>
        <div class="J-shop-top-nav">
            <div class="top-nav">
                <div class="nav-mask">
                </div>
                <ul>
                    <li>
                        <a href="http://shop.mogujie.com/1oy202">
                            首页
                        </a>
                    </li>
                    <li class="J-top-nav-title">
                        <a href="http://shop.mogujie.com/1oy202/index/total">
                            全部商品
                            <em class="arrow">
                            </em>
                        </a>
                        <ol class="category-list">
                            <li>
                                <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=256952">
                                    潮流运动鞋
                                </a>
                            </li>
                            <li>
                                <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=256954">
                                    绝美高跟鞋
                                </a>
                            </li>
                            <li>
                                <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=1411793">
                                    时尚单鞋
                                </a>
                            </li>
                            <li>
                                <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=1471619">
                                    春季新款单鞋
                                </a>
                            </li>
                            <li>
                                <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=1471621">
                                    明星小白鞋
                                </a>
                            </li>
                            <li>
                                <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=1472633">
                                    潮*凉鞋
                                </a>
                            </li>
                            <li>
                                <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=20117375">
                                    冬季美靴
                                </a>
                            </li>
                        </ol>
                    </li>
                    <li class="J-top-nav-title">
                        <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=1471621"
                        class="">
                            明星小白鞋
                        </a>
                    </li>
                    <li class="J-top-nav-title">
                        <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=1411793"
                        class="">
                            时尚单鞋
                        </a>
                    </li>
                    <li class="J-top-nav-title">
                        <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=1471619"
                        class="">
                            春季新款单鞋
                        </a>
                    </li>
                    <li class="J-top-nav-title">
                        <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=256952"
                        class="">
                            潮流运动鞋
                        </a>
                    </li>
                    <li class="J-top-nav-title">
                        <a href="http://shop.mogujie.com/1oy202/list/index?categoryId=1472633"
                        class="">
                            潮*凉鞋
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <input value="1oy202" id="shopId" type="hidden">
        <input value="" id="shopOwnerId" type="hidden">
        <input id="shopSearchUrl" value="http://shop.mogujie.com/1oy202/search/index/"
        type="hidden">
        <script src="/home/js/shopHeader.js">
        </script>
        <!-- 管理员信息栏 -->
        <div class="admin_panel_wrap">
        </div>
        <div id="body_wrap">
            <input id="shopid" value="1oy202" type="hidden">
            <input id="J_ShopId" value="1oy202" type="hidden">
            <input id="J_ShopUserId" value="13q3s4i" type="hidden">
            <input id="J_PageType" value="item" type="hidden">
            <input id="iteminfoid" value="1k12j9s" type="hidden">
            <input id="J_ItemId" value="1k12j9s" type="hidden">
            <input id="J_RushId" value="" type="hidden">
            <input id="sellerId" value="13q3s4i" type="hidden">
            <input id="J_SellerId" value="13q3s4i" type="hidden">
            <input id="J_DetailRefer" value="http%3A%2F%2Fact.mogujie.com%2Fuzt%2Fpc%2Fnvxie%3Facm%3D3.mce.1_10_1hxzq.19221..bUVZQqRDRtGrl.pos_0-m_418575-sd_119-mf_15261_944839-idx_19-mfs_22-dm1_5000%26ptp%3D1._mf1_1239_15261.0.0.YXN86V9m"
            type="hidden">
            <input id="J_CartLuckyDrawData" data-istimerange="true" type="hidden">
            <div class="shop-detail">
                <div class="detail-primary clearfix">
                    <div class="primary-goods">
                        <div class="clearfix">
                           
                            <div class="fl goods-info goods-info-tuan-act" id="J_GoodsInfo">
                                <div class="info-box">
                                    <h1 class="goods-title">
                                        <span itemprop="name">
                                            {{$goods->gname}}
                                        </span>
                                    </h1>
                                    <div class="goods-prowrap goods-main">
                                        <dl class="clearfix event-box">
                                            <dd class="event-box-content event-box-content-tuan" style="background: url(http://s3.mogucdn.com/mlcdn/c024f5/180412_39lbk8e4ihh8jekcc8k2ig758ejld_540x50.png) 0 0 no-repeat;">
                                                <span class="event-tuan-info ui-hide">
                                                    <img src="" alt="">
                                                    <span class="desc">
                                                    </span>
                                                </span>
                                                <span class="event-tuan-text ui-hide">
                                                    后结束
                                                </span>
                                                <span class="event-time-text">
                                                    距团购结束还剩：
                                                </span>
                                                <span class="event-time-left" id="J_CountDown" cut-time="17257">
                                                    <span class="d">
                                                        0
                                                    </span>
                                                    天
                                                    <span class="h">
                                                        4
                                                    </span>
                                                    小时
                                                    <span class="m">
                                                        46
                                                    </span>
                                                    分
                                                    <span class="s">
                                                        50
                                                    </span>
                                                    秒
                                                </span>
                                            </dd>
                                        </dl>
                                        <div class="clearfix main-box">
                                            <dl class="clearfix property-box">
                                                <dt class="property-type property-type-origin">
                                                    价格：
                                                </dt>
                                                <dd class="property-cont property-cont-origin">
                                                    <span id="J_OriginPrice" class="price">
                                                        ¥{{$goods->price/0.8}}
                                                    </span>
                                                </dd>
                                            </dl>
                                            <dl class="clearfix property-box J_NowPrice_Wrap">
                                                <dt class="property-type property-type-now" style="color: #ef2f23">
                                                    团购价：
                                                </dt>
                                                <dd class="property-cont property-cont-now fl">
                                                    <span id="J_NowPrice" class="price" style="color: #ff0000">
                                                        ¥{{$goods->price}}
                                                    </span>
                                                </dd>
                                                <dd class="property-extra fr">
                                                    <span class="mr10">
                                                        评价：
                                                        <span class="num">
                                                            7119
                                                        </span>
                                                    </span>
                                                    <span>
                                                        累计销量：
                                                        <span class="num J_SaleNum">
                                                            10705
                                                        </span>
                                                    </span>
                                                </dd>
                                            </dl>
                                            <dl id="J_ModuleModou" style="display:none" class="clearfix property-box">
                                            </dl>
                                            <div id="J_ModulePromotions">
                                            </div>
                                            <dl id="J_ModuleCustomProperty" style="display:none" class="clearfix property-box">
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="goods-prowrap goods-im">
                                        <dl class="clearfix">
                                            <dt>
                                                客服：
                                            </dt>
                                            <dd>
                                                <div class="mogutalk_widget_btn kefu mogutalk_default" data-bid="1oy202#23"
                                                data-style="default" data-from="goodsdetail_skumtalk">
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="goods-prowrap goods-sku" id="J_GoodsSku">
                                        <div class="content">
                                            <div class="pannel-title">
                                                <span class="choose-goods-info">
                                                    选择商品信息
                                                </span>
                                                <b class="J_PannelClose pannel-close">
                                                </b>
                                            </div>
                                            <div class="box">
                                                <dl style="display: block;" class="style clearfix">
                                                    <dt>
                                                        颜色：
                                                    </dt>
                                                    <dd>
                                                        @foreach($goods->color as $k=>$v)
                                                         <ol class="J_SizeList size-list clearfix" style=" float: left;display:inline;">
                                                            <li class="" data-id="100" title="35" >{{$v}}</li>
                                                        </ol>
                                                        @endforeach
                                                    </dd>
                                                </dl>
                                                <dl style="display: block;" class="size clearfix">
                                                    <dt>
                                                        尺码：
                                                    </dt>
                                                    <dd>
                                                        @foreach($goods->size as $k=>$v)
                                                         <ol class="J_SizeList size-list clearfix" style=" float: left;display:inline;">
                                                            <li class="" data-id="100" title="35" >{{$v}}</li>
                                                        </ol>
                                                        @endforeach
                                                    </dd>
                                                </dl>
                                                <dl class="clearfix">
                                                    <dt>
                                                        数量：
                                                    </dt>
                                                    <dd class="num clearfix">
                                                        <div data-stock="4261" id="J_GoodsNum" class="goods-num fl">
                                                            <span class="num-reduce num-disable">
                                                            </span>
                                                            <input autocomplete="off" class="num-input" value="1" type="text">
                                                            <span class="num-add ">
                                                            </span>
                                                        </div>
                                                        <div class="J_GoodsStock goods-stock fl">
                                                            库存4261件
                                                        </div>
                                                        <div class="J_GoodsStockTip goods-stock-tip fl">
                                                            您所填写的商品数量超过库存！
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                            <div class="pannel-action">
                                                <a href="javascript:;" class="J_PannelOK pannel-ok">
                                                    确认
                                                </a>
                                            </div>
                                        </div>
                                        <div class="goods-buy clearfix">
                                            <a href="javascript:;" id="J_BuyNow" class="fl mr10 buy-btn buy-now">
                                                立刻购买
                                            </a>
                                            <input value="nodapei" id="dapeiShow" type="hidden">
                                            <a href="javascript:;" id="J_BuyCart" class="fl mr10 buy-cart buy-btn">
                                                加入购物车
                                            </a>
                                            <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/171130_19haaka7jg7224f491f44c24c8bi5_32x32.gif"
                                            class="refresh-loading">
                                        </div>
                                    </div>
                                    <div class="goods-social clearfix">
                                        <div class=" fav  item" goodsid="0" tradeitemid="1k12j9s" tid="0">
                                            <span class=" isfav  m-icon m-icon-star ">
                                            </span>
                                            <span class="fav-num">
                                                34947
                                            </span>
                                        </div>
                                        <div class="share item">
                                            <b>
                                            </b>
                                            分享
                                            <div class="share-w clearfix">
                                                <a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2Fwww.mogujie.com%2Fcps%2Fopen%2Ftrack%3Fchannel%3D19%26uid%3D128yxgi%26target%3Dhttp%253A%252F%252Fshop.mogujie.com%252Fdetail%252F1k12j9s&amp;title=%E6%9E%97%E5%85%81%E5%84%BF%E5%90%8C%E6%AC%BE%E5%B8%86%E5%B8%83%E9%9E%8B%EF%BC%8C%E4%B8%8A%E8%84%9A%E8%88%92%E9%80%82%E3%80%82&amp;pics=http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg_468x468.jpg"
                                                class="forqzone" title="关注QQ空间" rel="nofollow">
                                                </a>
                                                <a target="_blank" href="http://widget.renren.com/dialog/share?resourceUrl=http%3A%2F%2Fwww.mogujie.com%2Fcps%2Fopen%2Ftrack%3Fchannel%3D19%26uid%3D128yxgi%26target%3Dhttp%253A%252F%252Fshop.mogujie.com%252Fdetail%252F1k12j9s&amp;title=%E6%9E%97%E5%85%81%E5%84%BF%E5%90%8C%E6%AC%BE%E5%B8%86%E5%B8%83%E9%9E%8B%EF%BC%8C%E4%B8%8A%E8%84%9A%E8%88%92%E9%80%82%E3%80%82&amp;thumbnail_url=http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg_468x468.jpg"
                                                class="forrenren" title="关注人人" rel="nofollow">
                                                </a>
                                                <a target="_blank" href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fwww.mogujie.com%2Fcps%2Fopen%2Ftrack%3Fchannel%3D19%26uid%3D128yxgi%26target%3Dhttp%253A%252F%252Fshop.mogujie.com%252Fdetail%252F1k12j9s&amp;title=%E6%9E%97%E5%85%81%E5%84%BF%E5%90%8C%E6%AC%BE%E5%B8%86%E5%B8%83%E9%9E%8B%EF%BC%8C%E4%B8%8A%E8%84%9A%E8%88%92%E9%80%82%E3%80%82&amp;pic=http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg_468x468.jpg"
                                                class="forsina" title="关注sina" rel="nofollow">
                                                </a>
                                                <a target="_blank" href="http://www.mogujie.com/group/topic/1grvy/" class="forweixin"
                                                title="关注微信" rel="nofollow">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="report">
                                            <a target="_blank" href="http://cs.mogujie.com/dispute/report/add.html?itemid=1k12j9s"
                                            class="goods_report fl" rel="nofollow">
                                                举报
                                            </a>
                                        </div>
                                    </div>
                                    <div class="goods-extra clearfix">
                                        <div class="extra-services">
                                            <div class="fl clearfix label">
                                                商品特色：
                                            </div>
                                            <ul class="fl clearfix list">
                                                <li class="item">
                                                    <span class="link" title="实拍认证">
                                                        <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/upload_4feh98909481a8805bbdal579kg79_60x60.png"
                                                        height="24" width="24">
                                                        实拍认证
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="extra-services">
                                            <div class="fl clearfix label">
                                                服务承诺：
                                            </div>
                                            <ul class="fl clearfix list">
                                                <li class="item">
                                                    <a class="link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=895"
                                                    target="_blank" title="" rel="nofollow">
                                                        <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/idid_ie3tmyjxhfrtgzbzmezdambqgayde_40x40.png"
                                                        height="24" width="24">
                                                        全国包邮
                                                    </a>
                                                </li>
                                                <li class="item">
                                                    <a class="link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=892"
                                                    target="_blank" title="" rel="nofollow">
                                                        <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/idid_ifrtgojygu2dgzbzmezdambqhayde_40x40.png"
                                                        height="24" width="24">
                                                        7天无理由退货
                                                    </a>
                                                </li>
                                                <li class="item">
                                                    <a class="link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=893"
                                                    target="_blank" title="" rel="nofollow">
                                                        <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/idid_ifrdqobzmq3dizbzmezdambqmeyde_40x40.png"
                                                        height="24" width="24">
                                                        72小时发货
                                                    </a>
                                                </li>
                                                <li class="item">
                                                    <a class="link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=927"
                                                    target="_blank" title="" rel="nofollow">
                                                        <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/idid_ie4timrzmq3tkzbzmezdambqgqyde_40x40.png"
                                                        height="24" width="24">
                                                        退货补运费
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="extra-pay">
                                            <div class="fl clearfix label">
                                                支付方式：
                                            </div>
                                            <div class="fl list list-nomaibei">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fl goods-topimg" id="J_GoodsImg">
                                <div class="big-img">
                                    <button class="middle">
                                        <img id="J_BigImg" src="{{ URL::asset($goods->gpic[0])}}"
                                        data-main="http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg_468x468.jpg"
                                        alt="小白鞋,平底,运动鞋,学院风,单鞋" width="400">
                                    </button>
                                </div>
                                <div id="J_SmallImgs" class="small-img">
                                    <div class="box">
                                        <div style="width: 350px; height: 59px;" class="list">
                                            <ul class="clearfix carousel">
                                            @foreach($goods->gpic as $k=>$v)
                                                <li class="c">
                                                    <img src="{{ URL::asset($v)}}">
                                                    <i>
                                                    </i>
                                                </li>
                                           @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="left-btn arrow-btn" href="javascript:;">
                                    </a>
                                    <a style="display: inline;" class="right-btn arrow-btn" href="javascript:;">
                                    </a>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="primary-slide">
                        <div class="goods-recommend" id="J_ModuleLook" data-ptp="_rechot">
                            <!-- 热卖推荐 -->
                            <p class="title">
                                <s>
                                </s>
                                <span>
                                    热卖推荐
                                </span>
                            </p>
                            <div class="list">
                                <div class="box">
                                    <ul>
                                        <li>
                                            <a href="http://shop.mogujie.com/detail/1ls4x5e?acm=3.mce.1_4_1ls4x5e.5124.32450.3PUHQqRDTOTAE.sd_115_119-mid_5124-pm_014-pos_0-lc_201"
                                            target="_blank">
                                                <img class="loggered" src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/180303_3fjbk610hjjg477ki73j8a98l0k5j_640x960.jpg"
                                                data-iids="1ls4x5e" data-indexs="0" data-acms="3.mce.1_4_1ls4x5e.5124.32450.3PUHQqRDTOTAE.sd_115_119-mid_5124-pm_014-pos_0-lc_201"
                                                width="120">
                                            </a>
                                            <div>
                                                ￥59.5
                                            </div>
                                        </li>
                                        <li>
                                            <a href="http://shop.mogujie.com/detail/1lzlnbg?acm=3.mce.1_4_1lzlnbg.5124.32450.3PUHQqRDTOTAE.sd_115_119-mid_5124-pm_009-pos_1-lc_201"
                                            target="_blank">
                                                <img class="loggered" src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/180428_8f11j70hf0f7ld4d6caflj5dkack7_640x960.jpg"
                                                data-iids="1lzlnbg" data-indexs="1" data-acms="3.mce.1_4_1lzlnbg.5124.32450.3PUHQqRDTOTAE.sd_115_119-mid_5124-pm_009-pos_1-lc_201"
                                                width="120">
                                            </a>
                                            <div>
                                                ￥59.5
                                            </div>
                                        </li>
                                        <li>
                                            <a href="http://shop.mogujie.com/detail/1m01fca?acm=3.mce.1_4_1m01fca.5124.32450.3PUHQqRDTOTAE.sd_115_119-mid_5124-pm_009-pos_2-lc_201"
                                            target="_blank">
                                                <img class="loggered" src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/180503_4lgcad7llbd95fl3880eg77gga4d0_640x960.jpg"
                                                data-iids="1m01fca" data-indexs="2" data-acms="3.mce.1_4_1m01fca.5124.32450.3PUHQqRDTOTAE.sd_115_119-mid_5124-pm_009-pos_2-lc_201"
                                                width="120">
                                            </a>
                                            <div>
                                                ￥69.3
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="J_ModuleCustomBanner" style="display:none">
                </div>
                <!-- 蘑菇拼团 -->
                <div class="detail-content ">
                    <!-- 顶部 -->
                    <div style="display: block;" class="col-top">
                        <!-- 搭配购 -->
                        <div class="module-dapei" id="J_ModuleDapei">
                            <!-- 搭配购 -->
                            <div class="dapei-container" data-channel="channel_dapei">
                                <div class="dapei-tab">
                                    <ul>
                                        <li class="dapei-tab-item active" data-index="0" data-mark="collocationSet_700007220321">
                                            套餐一
                                        </li>
                                    </ul>
                                </div>
                                <div class="dapei-body">
                                    <div class="dapei-item dapei-show" data-index="0" data-mark="collocationSet_700007220321">
                                        <ul class="dapei-body-items" data-page-now="1" data-page-all="1">
                                            <li iid="1k12j9s" class="dapei-body-items-item dapei-body-items-item-show"
                                            data-page="1" data-index="true">
                                                <a href="http://shop.mogujie.com/detail/1k12j9s" class="dapei-body-items-item-img-a">
                                                    <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960_003.jpg"
                                                    alt="林允儿同款M字女鞋韩版低帮运动白色帆布鞋休闲鞋学生系带小白鞋" class="dapei-body-items-item-img"
                                                    data-src="https://s11.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg_160x160.jpg">
                                                </a>
                                                <span class="dapei-body-items-item-price">
                                                    <span class="dapei-checkbox">
                                                        <input checked="checked" disabled="disabled" type="checkbox">
                                                    </span>
                                                    <span class="dapei-item-price">
                                                        ￥47.6
                                                    </span>
                                                </span>
                                                <div data-num="1" data-nowprice="4760" data-price="8500" data-stockid="1mvzgtu"
                                                class="dapei-sku-select" show-body="false">
                                                    <span>
                                                        35,白绿,1件
                                                    </span>
                                                    <i class="drop-down-before">
                                                    </i>
                                                    <i class="drop-down">
                                                    </i>
                                                </div>
                                                <!-- SKU -->
                                                <div class="dapei-sku-body" data-iid="1k12j9s">
                                                    <div class="content">
                                                        <div class="pannel-title">
                                                            <span class="pannel-title-text">
                                                                选择商品信息
                                                            </span>
                                                            <b class="pannel-close">
                                                                ╳
                                                            </b>
                                                        </div>
                                                        <div class="pannel-box">
                                                            <div class="sku-list">
                                                                <dl class="size clearfix">
                                                                    <dt class="sku-text">
                                                                        尺码
                                                                    </dt>
                                                                    <dd>
                                                                        <ul class="J_SizeList size-list clearfix">
                                                                            <li class="c" data-id="100" title="35" alt="35">
                                                                                35
                                                                            </li>
                                                                            <li class="" data-id="101" title="36" alt="36">
                                                                                36
                                                                            </li>
                                                                            <li class="" data-id="102" title="37" alt="37">
                                                                                37
                                                                            </li>
                                                                            <li class="" data-id="103" title="38" alt="38">
                                                                                38
                                                                            </li>
                                                                            <li class="" data-id="104" title="39" alt="39">
                                                                                39
                                                                            </li>
                                                                            <li class="" data-id="105" title="40" alt="40">
                                                                                40
                                                                            </li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="style clearfix">
                                                                    <dt class="sku-text">
                                                                        款式
                                                                    </dt>
                                                                    <dd>
                                                                        <ul class="J_StyleList style-list clearfix">
                                                                            <li class="img disable" data-id="1" title="白/黑" alt="白/黑">
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg"
                                                                                alt="白/黑">
                                                                                <b>
                                                                                </b>
                                                                            </li>
                                                                            <li class="img c" data-id="2" title="白绿" alt="白绿">
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg"
                                                                                alt="白绿">
                                                                                <b>
                                                                                </b>
                                                                            </li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                            <dl class="sku-num">
                                                                <dt class="title">
                                                                    数量:
                                                                </dt>
                                                                <dd class="clearfix sku-num-body">
                                                                    <div data-stock="855" class="sku-counter fl">
                                                                        <span class="num-reduce fl num-disable">
                                                                        </span>
                                                                        <input class="num-input" value="1" disabled="disabled" type="text">
                                                                        <span class="num-add fl num-disable">
                                                                        </span>
                                                                        <!-- <span class="dapei-num">1</span> -->
                                                                    </div>
                                                                    <div class="sku-stock fl">
                                                                        库存
                                                                        <span class="stock">
                                                                            855
                                                                        </span>
                                                                        件
                                                                    </div>
                                                                    <div class="J_GoodsStockTip goods-stock-tip fl" style="display: none;">
                                                                        您所填写的商品数量超过库存!
                                                                    </div>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                        <div class="pannel-action">
                                                            <span class="confirm btn">
                                                                确定
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="dapei-plus">
                                                    +
                                                </span>
                                            </li>
                                            <li iid="1k545u8" class="dapei-body-items-item dapei-body-items-item-show"
                                            data-page="1" data-index="false">
                                                <a href="http://shop.mogujie.com/detail/1k545u8" class="dapei-body-items-item-img-a">
                                                    <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/170719_0ba2d6523eka1ad73ikijij4al7jg_640x960.jpg"
                                                    alt="2018冬季新款欧美加绒高跟女靴尖头粗跟短靴及裸靴短筒棉靴女防水台" class="dapei-body-items-item-img"
                                                    data-src="https://s3.mogucdn.com/p2/161112/112622453_7jg1ek4d3001jch38c244h4ajc17h_640x960.jpg_160x160.jpg">
                                                </a>
                                                <span class="dapei-body-items-item-price">
                                                    <span class="dapei-checkbox">
                                                        <input checked="checked" type="checkbox">
                                                    </span>
                                                    <span class="dapei-item-price">
                                                        ￥67.3
                                                    </span>
                                                </span>
                                                <div data-num="1" data-nowprice="6730" data-price="9900" data-stockid="1sphfou"
                                                class="dapei-sku-select" show-body="false">
                                                    <span>
                                                        36（标准码）,黑色（加绒）,1件
                                                    </span>
                                                    <i class="drop-down-before">
                                                    </i>
                                                    <i class="drop-down">
                                                    </i>
                                                </div>
                                                <!-- SKU -->
                                                <div class="dapei-sku-body" data-iid="1k545u8">
                                                    <div class="content">
                                                        <div class="pannel-title">
                                                            <span class="pannel-title-text">
                                                                选择商品信息
                                                            </span>
                                                            <b class="pannel-close">
                                                                ╳
                                                            </b>
                                                        </div>
                                                        <div class="pannel-box">
                                                            <div class="sku-list">
                                                                <dl class="size clearfix">
                                                                    <dt class="sku-text">
                                                                        尺码
                                                                    </dt>
                                                                    <dd>
                                                                        <ul class="J_SizeList size-list clearfix">
                                                                            <li class="c" data-id="100" title="36（标准码）" alt="36（标准码）">
                                                                                36（标准码）
                                                                            </li>
                                                                            <li class="" data-id="101" title="39（标准码）" alt="39（标准码）">
                                                                                39（标准码）
                                                                            </li>
                                                                            <li class="" data-id="102" title="35（标准码）" alt="35（标准码）">
                                                                                35（标准码）
                                                                            </li>
                                                                            <li class="" data-id="103" title="37（标准码）" alt="37（标准码）">
                                                                                37（标准码）
                                                                            </li>
                                                                            <li class="" data-id="104" title="38（标准码）" alt="38（标准码）">
                                                                                38（标准码）
                                                                            </li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="style clearfix">
                                                                    <dt class="sku-text">
                                                                        款式
                                                                    </dt>
                                                                    <dd>
                                                                        <ul class="J_StyleList style-list clearfix">
                                                                            <li class="img disable" data-id="1" title="黑色（不加绒）" alt="黑色（不加绒）">
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/79945140_1aake0556fefgiaa07i8ia8f6d2fg_640x960.jpg"
                                                                                alt="黑色（不加绒）">
                                                                                <b>
                                                                                </b>
                                                                            </li>
                                                                            <li class="img c" data-id="2" title="黑色（加绒）" alt="黑色（加绒）">
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/170719_0ba2d6523eka1ad73ikijij4al7jg_640x960_002.jpg"
                                                                                alt="黑色（加绒）">
                                                                                <b>
                                                                                </b>
                                                                            </li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                            <dl class="sku-num">
                                                                <dt class="title">
                                                                    数量:
                                                                </dt>
                                                                <dd class="clearfix sku-num-body">
                                                                    <div data-stock="470" class="sku-counter fl">
                                                                        <span class="num-reduce fl num-disable">
                                                                        </span>
                                                                        <input class="num-input" value="1" disabled="disabled" type="text">
                                                                        <span class="num-add fl num-disable">
                                                                        </span>
                                                                        <!-- <span class="dapei-num">1</span> -->
                                                                    </div>
                                                                    <div class="sku-stock fl">
                                                                        库存
                                                                        <span class="stock">
                                                                            470
                                                                        </span>
                                                                        件
                                                                    </div>
                                                                    <div class="J_GoodsStockTip goods-stock-tip fl" style="display: none;">
                                                                        您所填写的商品数量超过库存!
                                                                    </div>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                        <div class="pannel-action">
                                                            <span class="confirm btn">
                                                                确定
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li iid="18kd1xc" class="dapei-body-items-item dapei-body-items-item-show"
                                            data-page="1" data-index="false">
                                                <a href="http://shop.mogujie.com/detail/18kd1xc" class="dapei-body-items-item-img-a">
                                                    <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/1v1w1h_ie4dkntemrstgolfguzdambqgiyde_640x962.jpg"
                                                    alt="2018新款英伦风复古牛津鞋系带松糕厚底鞋 高跟粗跟单鞋女" class="dapei-body-items-item-img" data-src="https://s3.mogucdn.com/p1/160105/1v1w1h_ie4dkntemrstgolfguzdambqgiyde_640x962.jpg_160x160.jpg">
                                                </a>
                                                <span class="dapei-body-items-item-price">
                                                    <span class="dapei-checkbox">
                                                        <input type="checkbox">
                                                    </span>
                                                    <span class="dapei-item-price">
                                                        ¥59.78
                                                    </span>
                                                </span>
                                                <div class="dapei-sku-select" show-body="false">
                                                    <span>
                                                        选择颜色规格
                                                    </span>
                                                    <i class="drop-down-before">
                                                    </i>
                                                    <i class="drop-down">
                                                    </i>
                                                </div>
                                                <!-- SKU -->
                                                <div class="dapei-sku-body" data-iid="18kd1xc">
                                                    <div class="content">
                                                        <div class="pannel-title">
                                                            <span class="pannel-title-text">
                                                                选择商品信息
                                                            </span>
                                                            <b class="pannel-close">
                                                                ╳
                                                            </b>
                                                        </div>
                                                        <div class="pannel-box">
                                                            <div class="sku-list">
                                                                <dl class="size clearfix">
                                                                    <dt class="sku-text">
                                                                        尺码
                                                                    </dt>
                                                                    <dd>
                                                                        <ul class="J_SizeList size-list clearfix">
                                                                            <li class="" data-id="100" title="35" alt="35">
                                                                                35
                                                                            </li>
                                                                            <li class="" data-id="101" title="36" alt="36">
                                                                                36
                                                                            </li>
                                                                            <li class="" data-id="102" title="37" alt="37">
                                                                                37
                                                                            </li>
                                                                            <li class="" data-id="103" title="38" alt="38">
                                                                                38
                                                                            </li>
                                                                            <li class="" data-id="104" title="39" alt="39">
                                                                                39
                                                                            </li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="style clearfix">
                                                                    <dt class="sku-text">
                                                                        款式
                                                                    </dt>
                                                                    <dd>
                                                                        <ul class="J_StyleList style-list clearfix">
                                                                            <li class="img" data-id="1" title="黑色（不加绒)" alt="黑色（不加绒)">
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/20b66m_50ce9llb8lld4ck6j0iklagjgkl2b_640x960.jpg"
                                                                                alt="黑色（不加绒)">
                                                                                <b>
                                                                                </b>
                                                                            </li>
                                                                            <li class="img" data-id="2" title="酒红色（不加绒）" alt="酒红色（不加绒）">
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/20b66m_46kd8fikhg28ej6c6acl7ih5jh9d1_640x960.jpg"
                                                                                alt="酒红色（不加绒）">
                                                                                <b>
                                                                                </b>
                                                                            </li>
                                                                            <li class="img disable" data-id="3" title="黑色（加绒）" alt="黑色（加绒）">
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/20b66m_3k8cdk87bd6kc691l8ajhik3lh42j_810x1080.jpg"
                                                                                alt="黑色（加绒）">
                                                                                <b>
                                                                                </b>
                                                                            </li>
                                                                            <li class="img disable" data-id="4" title="酒红色（加绒）" alt="酒红色（加绒）">
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/20b66m_0l1fk6dl3dbe4i6fe5e0756g92f0b_810x1080.jpg"
                                                                                alt="酒红色（加绒）">
                                                                                <b>
                                                                                </b>
                                                                            </li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                            <dl class="sku-num">
                                                                <dt class="title">
                                                                    数量:
                                                                </dt>
                                                                <dd class="clearfix sku-num-body">
                                                                    <div data-stock="47630" class="sku-counter fl">
                                                                        <span class="num-reduce fl num-disable">
                                                                        </span>
                                                                        <input class="num-input" value="1" disabled="disabled" type="text">
                                                                        <span class="num-add fl num-disable">
                                                                        </span>
                                                                        <!-- <span class="dapei-num">1</span> -->
                                                                    </div>
                                                                    <div class="sku-stock fl">
                                                                        库存
                                                                        <span class="stock">
                                                                            47630
                                                                        </span>
                                                                        件
                                                                    </div>
                                                                    <div class="J_GoodsStockTip goods-stock-tip fl" style="display: none;">
                                                                        请选择颜色和尺码!
                                                                    </div>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                        <div class="pannel-action">
                                                            <span class="confirm btn">
                                                                确定
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="dapei-buy">
                                            <div class="dapei-buy-price">
                                                <span class="dapei-buy-price-text">
                                                    优惠搭配价格：
                                                </span>
                                                <span class="dapei-buy-price-price">
                                                    ¥114.9
                                                </span>
                                            </div>
                                            <div class="dapei-buy-save">
                                                <span class="dapei-buy-save-text">
                                                    为您节省¥
                                                </span>
                                                <span class="dapei-buy-save-price">
                                                    69.1
                                                </span>
                                            </div>
                                            <div class="dapei-buy-now">
                                                <span class="dapei-buy-now-btn">
                                                    立即购买
                                                </span>
                                            </div>
                                            <div class="dapei-buy-tips">
                                                请确保选择至少一件搭配商品！
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 主体 -->
                    <div class="col-main">
                        <!-- 模块标签页 -->
                        <div class="module-tabpanel" id="J_ModuleTabpanel">
                            <!-- 选项栏 -->
                            <div class="tabbar-box">
                                <ul class="tabbar-list clearfix">
                                    <li data-panels="graphic,recommend" data-hasnav="true" class="tab-graphic selected">
                                        <a href="javascript:;">
                                            商品详情
                                        </a>
                                    </li>
                                    <li data-panels="rates" data-hasnav="false">
                                        <a href="javascript:;">
                                            累计评价
                                            <em>
                                                7119
                                            </em>
                                        </a>
                                    </li>
                                    <li data-panels="recommend" data-hasnav="false">
                                        <a href="javascript:;">
                                            本店同类商品
                                        </a>
                                    </li>
                                    <!-- 购物车模块 -->
                                    <li class="module-cart" id="J_ModuleCart">
                                        <div class="cart-info">
                                            <div class="ui-hd cart-hd">
                                                <div class="cart-name" href="javascript:;">
                                                    <span>
                                                        <i>
                                                        </i>
                                                        加入购物车
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="cart-occupying ui-hide">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabbar-bg ui-hide">
                                <div class="bg-right">
                                </div>
                                <div class="bg-left">
                                </div>
                            </div>
                            <div class="tabbar-occupying ui-hide">
                            </div>
                            <!-- 选项页 -->
                            <div class="panel-box">
                                <!-- 图文详情 -->
                                <div class="module-panel module-graphic" id="J_ModuleGraphic">
                                    <!-- 图文详情 -->
                                    <!-- 注：PHP模板走的是本地模板文件：views/modules/module-graphic.php-->
                                    <!-- 商品描述 -->
                                  
                                    <!-- 产品参数 -->
                                    <div id="J_Graphic_产品参数">
                                        <div class="panel-title">
                                            <h1>
                                                产品参数
                                            </h1>
                                        </div>
                                        <!-- 产品参数 -->
                                        <div class="graphic-block">
                                            <!-- 描述 -->
                                            <!-- 表格 -->
                                            <table class="parameter-table" id="J_ParameterTable">
                                                <tbody>
                                                    <tr class="">
                                                        <td>
                                                            图案: 字母/文字/数字,纯色
                                                        </td>
                                                        <td>
                                                            鞋面特殊工艺效果: 光板（无工艺效果）
                                                        </td>
                                                        <td>
                                                            颜色: 白/黑,白绿
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            帮高: 低帮
                                                        </td>
                                                        <td>
                                                            跟高: 低跟（1-3cm）
                                                        </td>
                                                        <td>
                                                            鞋跟形状: 平跟（无跟）
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            尺码: 35,36,37,38,39,40
                                                        </td>
                                                        <td>
                                                            鞋底材质: 橡胶底
                                                        </td>
                                                        <td>
                                                            季节: 春夏
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            鞋头: 圆头
                                                        </td>
                                                        <td>
                                                            流行元素: 韩系
                                                        </td>
                                                        <td>
                                                            风格: 韩系,百搭
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            闭合方式: 系带
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- 模块级别 -->
                                    <div class="graphic-block">
                                        <!-- 图片列表 -->
                                        <div id="J_Graphic_穿着效果">
                                            <div class="panel-title">
                                                <h1>
                                                    穿着效果
                                                </h1>
                                            </div>

                                            <!-- 描述 -->
                                            <div class="graphic-pic">
                                                {{!!$goods->gdesc!!}}
                                            </div>
                                         
                                  
                                        </div>
                                        
                                    </div>
                                    <!-- 尺码说明 -->
                                    <div id="J_Graphic_尺码说明">
                                        <div class="panel-title">
                                            <h1>
                                                尺码说明
                                            </h1>
                                        </div>
                                        <!-- 尺码说明 -->
                                        <div class="graphic-block">
                                            <!-- 描述 -->
                                            <div class="graphic-text">
                                                标准尺码
                                            </div>
                                            <!-- 表格 -->
                                            <table class="size-table">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            尺码
                                                        </td>
                                                        <td>
                                                            脚长
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            35
                                                        </td>
                                                        <td>
                                                            225
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            36
                                                        </td>
                                                        <td>
                                                            230
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            37
                                                        </td>
                                                        <td>
                                                            235
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            38
                                                        </td>
                                                        <td>
                                                            240
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            39
                                                        </td>
                                                        <td>
                                                            245
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            40
                                                        </td>
                                                        <td>
                                                            250
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- 提醒 -->
                                            <div class="size-text">
                                                ※ 以上尺寸为实物人工测量，因测量当时不同会有1-2cm误差，相关数据仅作参考，以收到实物为准。
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 累计评价 -->
                                <div class="module-panel module-rates ui-none" id="J_ModuleRates">
                                    <!-- 买家评价 -->
                                    <div id="J_RatesBuyer">
                                        <div class="panel-title rates-title">
                                            <h1>
                                                买家评价
                                            </h1>
                                        </div>
                                        <!-- 买家评价 -->
                                        <div class="rates-buyer">
                                            <!-- 评价分数 -->
                                            <div class="comment-info">
                                                <ul class="clearfix">
                                                    <!-- ## 总平均分 -->
                                                    <li class="score">
                                                        <span class="comment-star">
                                                            <b style="width: 77px;">
                                                            </b>
                                                        </span>
                                                        <span class="numbox">
                                                            <b class="num-v">
                                                                4.8
                                                            </b>
                                                            <span class="num-s">
                                                                分
                                                            </span>
                                                        </span>
                                                    </li>
                                                    <!-- ## 描述、价格、商品 -->
                                                    <li class="">
                                                        <div class="title">
                                                            描述相符
                                                        </div>
                                                        <div class="cont">
                                                            <span class="comment-star">
                                                                <b style="width: 77px;">
                                                                </b>
                                                            </span>
                                                            <span class="num-v">
                                                                4.81
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="title">
                                                            商品质量
                                                        </div>
                                                        <div class="cont">
                                                            <span class="comment-star">
                                                                <b style="width: 77px;">
                                                                </b>
                                                            </span>
                                                            <span class="num-v">
                                                                4.79
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- ## 评价内容 -->
                                            <div class="comment-content">
                                                <!-- ## 标签 -->
                                                <div class="tags clearfix">
                                                    <div class="list ">
                                                        <!-- ## 好评标签个数 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="质量">
                                                            质量很好 (1030)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="服务">
                                                            卖家服务很好 (473)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="物流">
                                                            物流快 (394)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="性价比">
                                                            性价比高 (389)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="款式">
                                                            款式好 (298)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="尺码">
                                                            尺寸无偏差 (258)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="做工">
                                                            做工不错 (88)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="气味">
                                                            没异味 (87)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="发货">
                                                            发货速度快 (76)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="颜色">
                                                            颜色正 (72)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="描述">
                                                            和描述的一样 (61)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="整体">
                                                            整体感觉不错 (39)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <a href="javascript:;" data-emotion="negative" data-property="质量">
                                                            质量一般 (44)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <a href="javascript:;" data-emotion="negative" data-property="物流">
                                                            物流有点慢 (30)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <a href="javascript:;" data-emotion="negative" data-property="服务">
                                                            服务态度不好 (6)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <a href="javascript:;" data-emotion="negative" data-property="发货">
                                                            发货速度有点慢 (6)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <a href="javascript:;" data-emotion="negative" data-property="性价比">
                                                            性价比一般 (5)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 好评 -->
                                                        <!-- ## 差评 -->
                                                        <a href="javascript:;" data-emotion="negative" data-property="气味">
                                                            有异味 (4)
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                    </div>
                                                    <div class="all">
                                                        全部
                                                        <b>
                                                        </b>
                                                    </div>
                                                </div>
                                                <!-- 导航 -->
                                                <div class="nav clearfix">
                                                    <!-- div class="comment-sort"> <input type="radio" class="J_CommentSort" data-type="1" id="J_CommentSortDefault" name="commentSort" checked /><label for="J_CommentSortDefault"> 默认排序</label> <input type="radio" class="J_CommentSort ml15" data-type="0" id="J_CommentSortTime" name="commentSort" /><label for="J_CommentSortTime"> 时间排序</label> </div> -->
                                                    <a href="javascript:;" data-type="all" class="c">
                                                        全部评价（7119）
                                                    </a>
                                                    <a href="javascript:;" data-type="img" class="">
                                                        晒图（3457）
                                                    </a>
                                                </div>
                                                <!-- 列表 -->
                                                <div id="J_RatesBuyerList" class="comments">
                                                    <!--详情页交易评价列表-->
                                                    <div class="item clearfix" data-id="1vix4z0">
                                                        <div class="info">
                                                            <div class="info-w">
                                                                <!-- 评价用户、时间 -->
                                                                <div class="info-t clearfix">
                                                                    <span class="name">
                                                                        王鹏利
                                                                    </span>
                                                                    <span class="date">
                                                                        2017年06月27日
                                                                    </span>
                                                                </div>
                                                                <!-- 评价内容 -->
                                                                <div class="info-m">
                                                                    鞋子美美的，穿着很舒服，也很百搭
                                                                </div>
                                                                <!-- 商品属性 -->
                                                                <div class="info-b clearfix">
                                                                    <p>
                                                                        <span class="sku-choose">
                                                                            颜色:白绿 尺码:36
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="height-weight">
                                                                            鞋码: 36
                                                                        </span>
                                                                        <span class="height-weight">
                                                                            是否合脚: 合脚
                                                                        </span>
                                                                    </p>
                                                                    <!-- <a href="//www.mogujie.com/apps" target="_blank" class="from-ios
                                                                    shop-detail-icons comment-mt">来自iOS客户端</a> -->
                                                                    <!-- <a href="//www.mogujie.com/apps" target="_blank" class="from-android
                                                                    shop-detail-icons comment-mt">来自Android客户端</a> -->
                                                                </div>
                                                                <!-- 晒图 S -->
                                                                <div class="info-k show-img">
                                                                    <ul class="list clearfix">
                                                                        <li>
                                                                            <div class="img-box">
                                                                                <span>
                                                                                    <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/170627_1df7cbcil5kb2lf9ef63609ih2799_1080x1078.jpg"
                                                                                    width="40">
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="big-img">
                                                                        <div class="img-box">
                                                                            <span>
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/a" height="400">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- 晒图 E -->
                                                                <!-- 商家回复输入 -->
                                                            </div>
                                                        </div>
                                                        <div class="face">
                                                            <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/upload_73289ki0h6j92ck3f3gec621gc60g_1080x1440.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="item clearfix" data-id="1uu59vw">
                                                        <div class="info">
                                                            <div class="info-w">
                                                                <!-- 评价用户、时间 -->
                                                                <div class="info-t clearfix">
                                                                    <span class="name">
                                                                        前任说过不离开
                                                                    </span>
                                                                    <span class="date">
                                                                        2017年05月24日
                                                                    </span>
                                                                </div>
                                                                <!-- 评价内容 -->
                                                                <div class="info-m">
                                                                    宝贝已收到，美美哒试了也比较合脚店家还送了袜子包装也非常完美
                                                                </div>
                                                                <!-- 商品属性 -->
                                                                <div class="info-b clearfix">
                                                                    <p>
                                                                        <span class="sku-choose">
                                                                            颜色:白绿 尺码:36
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="height-weight">
                                                                            鞋码: 36
                                                                        </span>
                                                                        <span class="height-weight">
                                                                            是否合脚: 合脚
                                                                        </span>
                                                                    </p>
                                                                    <!-- <a href="//www.mogujie.com/apps" target="_blank" class="from-ios
                                                                    shop-detail-icons comment-mt">来自iOS客户端</a> -->
                                                                    <!-- <a href="//www.mogujie.com/apps" target="_blank" class="from-android
                                                                    shop-detail-icons comment-mt">来自Android客户端</a> -->
                                                                </div>
                                                                <!-- 晒图 S -->
                                                                <div class="info-k show-img">
                                                                    <ul class="list clearfix">
                                                                        <li>
                                                                            <div class="img-box">
                                                                                <span>
                                                                                    <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/170524_31609efkh4d14070d7caaa7il3961_720x970.jpg"
                                                                                    width="40">
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="img-box">
                                                                                <span>
                                                                                    <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/170524_7c10ka5ba2ja7eii585lf785l54e9_720x970.jpg"
                                                                                    width="40">
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="img-box">
                                                                                <span>
                                                                                    <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/170524_03gad4958e8a9j6iel9a7e1aa3gc9_720x970.jpg"
                                                                                    width="40">
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="big-img">
                                                                        <div class="img-box">
                                                                            <span>
                                                                                <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/a" height="400">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- 晒图 E -->
                                                                <!-- 商家回复输入 -->
                                                            </div>
                                                        </div>
                                                        <div class="face">
                                                            <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/1fsfvp_ieygmnjygq4gmnbzmqytambqgyyde_120x160.jpg">
                                                        </div>
                                                    </div>

                                                    <div class="pagination">
                                                        <a class="c">
                                                            1
                                                        </a>
                                                        <a href="http://rate.mogujie.com/jsonp/pc.rate.ratelist/v2?pageSize=20&amp;sort=1&amp;isNewDetail=1&amp;itemId=1k12j9s&amp;type=1&amp;marketType=market_mogujie&amp;page=2"
                                                        rel="nofollow">
                                                            2
                                                        </a>
                                                        <a href="http://rate.mogujie.com/jsonp/pc.rate.ratelist/v2?pageSize=20&amp;sort=1&amp;isNewDetail=1&amp;itemId=1k12j9s&amp;type=1&amp;marketType=market_mogujie&amp;page=3"
                                                        rel="nofollow">
                                                            3
                                                        </a>
                                                        <a href="http://rate.mogujie.com/jsonp/pc.rate.ratelist/v2?pageSize=20&amp;sort=1&amp;isNewDetail=1&amp;itemId=1k12j9s&amp;type=1&amp;marketType=market_mogujie&amp;page=4"
                                                        rel="nofollow">
                                                            4
                                                        </a>
                                                        <a href="http://rate.mogujie.com/jsonp/pc.rate.ratelist/v2?pageSize=20&amp;sort=1&amp;isNewDetail=1&amp;itemId=1k12j9s&amp;type=1&amp;marketType=market_mogujie&amp;page=5"
                                                        rel="nofollow">
                                                            5
                                                        </a>
                                                        <i>
                                                            ...
                                                        </i>
                                                        <a href="http://rate.mogujie.com/jsonp/pc.rate.ratelist/v2?pageSize=20&amp;sort=1&amp;isNewDetail=1&amp;itemId=1k12j9s&amp;type=1&amp;marketType=market_mogujie&amp;page=2"
                                                        rel="nofollow">
                                                            下一页&gt;
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 成交记录 -->
                                    <div id="J_RatesOrder">
                                        <div class="panel-title rates-title">
                                            <h1>
                                                成交记录
                                            </h1>
                                        </div>
                                        <!-- 成交记录 -->
                                        <div class="rates-order">
                                            <!-- 列表 -->
                                            <div class="sale-list" id="J_RatesOrderList">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 本店同类商品 -->
                                <div class="module-panel module-recommend" id="J_ModuleRecommend">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 侧边栏 -->
                    <div class="col-sidebar">
                        <!-- 店铺模块 -->
                        <div class="module-shop" id="J_ModuleShop">
                            <!-- 店铺信息 -->
                            <div class="ui-box shop-info">
                                <h3 class="ui-hd shop-hd">
                                    <div class="shop-name">
                                        <a class="text text-hasim" href="http://shop.mogujie.com/1oy202">
                                            Penta KIll shoes
                                            <div class="mogutalk_widget_btn kefu mogutalk_pc" data-bid="1oy202#23"
                                            data-style="pc" data-from="goodsdetail_skumtalk">
                                            </div>
                                        </a>
                                    </div>
                                </h3>
                                <div class="shop-occupying ui-hide">
                                </div>
                                <div class="ui-bd">
                                    <div class="shop-evaluate">
                                        <ul>
                                            <li>
                                                <p class="text">
                                                    描述
                                                </p>
                                                <p class="num-def ">
                                                    4.74
                                                </p>
                                            </li>
                                            <li>
                                                <p class="text">
                                                    质量
                                                </p>
                                                <p class="num-def ">
                                                    4.73
                                                </p>
                                            </li>
                                            <li>
                                                <p class="text">
                                                    服务
                                                </p>
                                                <p class="num-def ">
                                                    4.79
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="shop-btns">
                                        <a id="J_ShopFav" rel="nofollow" class="J-shop-follow shop-follow  btn-fav "
                                        href="javascript:;" data-shopid="1oy202">
                                            收藏店铺
                                        </a>
                                        <a class="btn-goto" href="http://shop.mogujie.com/1oy202">
                                            进入店铺
                                        </a>
                                    </div>
                                    <div class="shop-search">
                                        <i class="line">
                                        </i>
                                        <form action="http://shop.mogujie.com/1oy202/search/index" method="get"
                                        id="J_ShopSearch">
                                            <input class="inptxt" name="q" type="text">
                                            <input class="inpbtn" value="店内搜索" type="submit">
                                        </form>
                                    </div>
                                    <div class="shop-provide">
                                        <i class="line">
                                        </i>
                                        <i class="arrow">
                                        </i>
                                        <a class="pic" href="javascript:;">
                                            <img class="img-lazyload" src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/upload_ie2dsmbsmyydcmtbgmzdambqgiyde_150x26.png"
                                            height="26" width="150">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 分类模块 -->
                        <div class="module-classify" id="J_ModuleClassify">
                            <!-- 分类信息 -->
                            <div class="ui-box classify-info">
                                <h3 class="ui-hd">
                                    本店分类
                                </h3>
                                <div class="ui-bd">
                                    <!-- 列表 -->
                                    <ul class="classify-list">
                                        <li>
                                            <a href="http://shop.mogujie.com/1oy202/index/total">
                                                全部商品
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 看了又看模块 -->
                        <div class="module-repeat" id="J_ModuleRepeat">
                        </div>
                    </div>
                    <!-- 扩展栏 -->
                    <div class="col-extra">
                        <i class="bor-line bor-r">
                        </i>
                        <i class="bor-line bor-b">
                        </i>
                        <i class="bor-line bor-l">
                        </i>
                        <div class="qrcode">
                            <div class="qrcode-togger">
                                手机扫码下单
                                <!-- <br />
                                快捷支付立减五元 -->
                            </div>
                            <div class="qrcode-pic">
                                <!-- <img src="//shop.mogujie.com/qrcode/16qub6k"> -->
                            </div>
                            <i class="qrcode-mini">
                            </i>
                            <i class="qrcode-arrow">
                            </i>
                        </div>
                        <!-- 右侧子导航模块 -->
                        <div class="module-extranav" id="J_ModuleExtranav">
                            <!-- 主体 -->
                            <div class="extranav-bd">
                                <!-- 模块-扩展导航栏 -->
                                <!-- 注：PHP模板走的是本地模板文件：views/modules/module-extranav.php-->
                                <!-- 子导航列表 -->
                                <ul class="extranav-list">
                                    <!-- 商品描述 -->
                                    <li class="selected" data-module="J_Graphic_desc">
                                        <a href="javascript:;">
                                            商品描述
                                        </a>
                                    </li>
                                    <!-- 产品参数 -->
                                    <li data-module="J_Graphic_产品参数">
                                        <a href="javascript:;">
                                            产品参数
                                        </a>
                                    </li>
                                    <!-- 模块列表 -->
                                    <li data-module="J_Graphic_穿着效果">
                                        <a href="javascript:;">
                                            穿着效果
                                        </a>
                                    </li>
                                    <li data-module="J_Graphic_整体款式">
                                        <a href="javascript:;">
                                            整体款式
                                        </a>
                                    </li>
                                    <!-- 尺码说明 -->
                                    <li data-module="J_Graphic_尺码说明">
                                        <a href="javascript:;">
                                            尺码说明
                                        </a>
                                    </li>
                                    <!-- 本店同类商品 -->
                                    <li data-module="J_RecommendList">
                                        <a href="javascript:;">
                                            商品推荐
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                var MoGuConstant = {
                    mobileRegex: /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i,
                    userAgent: navigator.userAgent.toLowerCase()
                };

                var MoGuDetail = {
                    data: null,

                    util: {
                        isMGJApp: (function() {
                            return MoGuConstant.userAgent.indexOf('nonative') < 0 && MoGuConstant.userAgent.indexOf('mogujie') > 0;
                        } ()),

                        isMobile: (function() {
                            return MoGuConstant.mobileRegex.test(MoGuConstant.userAgent);
                        } ()),

                        isWeChat: (function() {
                            return MoGuConstant.userAgent.indexOf('micromessenger') > 0;
                        } ())
                    }
                };
            </script>
            <script type="text/javascript">
                // 如果在蘑菇街APP
                // if (MoGuDetail.util.isMGJApp) {
                //   setTimeout(function(){
                //       window.location.href = "mgj://detail?iid=1k12j9s";
                //   },400)
                // }
                // 如果在移动设备上
                if (MoGuDetail.util.isMobile) {
                    setTimeout(function() {
                        var isJiajiagou = location.pathname.indexOf('/jiajiagou/detail/') !== -1;
                        var type = isJiajiagou ? 'jiajiagou': 'normal'
                        var url = "//h5.mogujie.com/detail-" + type + "/index.html?itemId=1k12j9s";
                        if (window.location.search) {
                            url += ('&' + window.location.search.slice(1));
                        }
                        // window.location.href = url;
                        window.location.href = window.logger ? logger.generatePtpParams(url) : url;
                    },
                    400)
                }

                var detailInfo = {
                    itemId: '1k12j9s',
                    shopId: '1oy202',
                    type: Number('8') || 0,
                    saleStartTime: '',
                    state: Number('0') || 0,
                    rushState: Number('') || 0,
                    detailType: 'item',
                    main: {
                        originPrice: '¥85.00',
                        nowPrice: '¥55.25',
                        topImages: ["http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg", "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_42j99856j281bg71eikag37f43fi1_640x960.jpg", "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_71b53kji2bc8i8c3213226300c6df_640x960.jpg", "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg", "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_12abg15gic6h14d9787b8giag9hig_640x960.jpg", "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_8d5a3jk7a1kfkchh9b82h6ed3gc77_640x960.jpg"]
                    },
                    attribute: [{
                        "sizeId": 100,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                        "size": "35",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 1,
                        "stockId": "1mvzgti",
                        "xdSkuId": "1mvzgti",
                        "currency": "￥",
                        "style": "白/黑",
                        "stock": 0
                    },
                    {
                        "sizeId": 101,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                        "size": "36",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 1,
                        "stockId": "1mvzgtk",
                        "xdSkuId": "1mvzgtk",
                        "currency": "￥",
                        "style": "白/黑",
                        "stock": 0
                    },
                    {
                        "sizeId": 102,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                        "size": "37",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 1,
                        "stockId": "1mvzgtm",
                        "xdSkuId": "1mvzgtm",
                        "currency": "￥",
                        "style": "白/黑",
                        "stock": 0
                    },
                    {
                        "sizeId": 103,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                        "size": "38",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 1,
                        "stockId": "1mvzgto",
                        "xdSkuId": "1mvzgto",
                        "currency": "￥",
                        "style": "白/黑",
                        "stock": 0
                    },
                    {
                        "sizeId": 104,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                        "size": "39",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 1,
                        "stockId": "1mvzgtq",
                        "xdSkuId": "1mvzgtq",
                        "currency": "￥",
                        "style": "白/黑",
                        "stock": 0
                    },
                    {
                        "sizeId": 105,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                        "size": "40",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 1,
                        "stockId": "1mvzgts",
                        "xdSkuId": "1mvzgts",
                        "currency": "￥",
                        "style": "白/黑",
                        "stock": 0
                    },
                    {
                        "sizeId": 100,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                        "size": "35",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 2,
                        "stockId": "1mvzgtu",
                        "xdSkuId": "1mvzgtu",
                        "currency": "￥",
                        "style": "白绿",
                        "stock": 855
                    },
                    {
                        "sizeId": 101,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                        "size": "36",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 2,
                        "stockId": "1mvzgtw",
                        "xdSkuId": "1mvzgtw",
                        "currency": "￥",
                        "style": "白绿",
                        "stock": 681
                    },
                    {
                        "sizeId": 102,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                        "size": "37",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 2,
                        "stockId": "1mvzgty",
                        "xdSkuId": "1mvzgty",
                        "currency": "￥",
                        "style": "白绿",
                        "stock": 561
                    },
                    {
                        "sizeId": 103,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                        "size": "38",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 2,
                        "stockId": "1mvzgu0",
                        "xdSkuId": "1mvzgu0",
                        "currency": "￥",
                        "style": "白绿",
                        "stock": 611
                    },
                    {
                        "sizeId": 104,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                        "size": "39",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 2,
                        "stockId": "1mvzgu2",
                        "xdSkuId": "1mvzgu2",
                        "currency": "￥",
                        "style": "白绿",
                        "stock": 835
                    },
                    {
                        "sizeId": 105,
                        "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                        "size": "40",
                        "nowprice": 5525,
                        "price": 8500,
                        "styleId": 2,
                        "stockId": "1mvzgu4",
                        "xdSkuId": "1mvzgu4",
                        "currency": "￥",
                        "style": "白绿",
                        "stock": 718
                    }],
                    listBanner: {},
                    redPacketsSwitch: false,
                    loginUserId: '',
                    isLogin: false,
                    isMoguer: false,
                    isNewPriceItem: false,
                    shopInfo: {
                        "marked": false,
                        "level": 4,
                        "shopLogo": "http://s3.mogucdn.com/p2/161001/1v1w1h_2fefch9jc0fa0hl3h9hee5iicci12_200x200.jpg",
                        "services": [{
                            "icon": "http://s3.mogucdn.com/p1/160826/idid_ie3tmyjxhfrtgzbzmezdambqgayde_40x40.png",
                            "link": "http://www.mogujie.com/rule/mogu?categoryId=326&ruleId=895",
                            "name": "全国包邮"
                        },
                        {
                            "icon": "http://s3.mogucdn.com/p1/160826/idid_ifrtgojygu2dgzbzmezdambqhayde_40x40.png",
                            "link": "http://www.mogujie.com/rule/mogu?categoryId=326&ruleId=892",
                            "name": "7天无理由退货"
                        },
                        {
                            "icon": "http://s3.mogucdn.com/p1/160826/idid_ifrdqobzmq3dizbzmezdambqmeyde_40x40.png",
                            "link": "http://www.mogujie.com/rule/mogu?categoryId=326&ruleId=893",
                            "name": "72小时发货"
                        },
                        {
                            "icon": "http://s3.mogucdn.com/p1/160826/idid_ie4timrzmq3tkzbzmezdambqgqyde_40x40.png",
                            "link": "http://www.mogujie.com/rule/mogu?categoryId=326&ruleId=927",
                            "name": "退货补运费"
                        }],
                        "shopUrl": "http://shop.mogujie.com/1oy202",
                        "type": 1,
                        "userId": "13q3s4i",
                        "cSells": 210920,
                        "isMarked": false,
                        "allGoodsUrl": "",
                        "score": [{
                            "score": 4.74,
                            "isBetter": true,
                            "name": "描述"
                        },
                        {
                            "score": 4.73,
                            "isBetter": true,
                            "name": "质量"
                        },
                        {
                            "score": 4.79,
                            "isBetter": true,
                            "name": "服务"
                        }],
                        "nonsupportReasonRefound": false,
                        "cFans": 27121,
                        "name": "Penta KIll shoes",
                        "categories": [{
                            "link": "https://shop.mogujie.com/1oy202/list/index?categoryId=256952",
                            "name": "潮流运动鞋"
                        },
                        {
                            "link": "https://shop.mogujie.com/1oy202/list/index?categoryId=256954",
                            "name": "绝美高跟鞋"
                        },
                        {
                            "link": "https://shop.mogujie.com/1oy202/list/index?categoryId=1411793",
                            "name": "时尚单鞋"
                        },
                        {
                            "link": "https://shop.mogujie.com/1oy202/list/index?categoryId=1471619",
                            "name": "春季新款单鞋"
                        },
                        {
                            "link": "https://shop.mogujie.com/1oy202/list/index?categoryId=1471621",
                            "name": "明星小白鞋"
                        },
                        {
                            "link": "https://shop.mogujie.com/1oy202/list/index?categoryId=1472633",
                            "name": "潮*凉鞋"
                        },
                        {
                            "link": "https://shop.mogujie.com/1oy202/list/index?categoryId=20117375",
                            "name": "冬季美靴"
                        }],
                        "shopId": "1oy202",
                        "cGoods": 248
                    },
                    skuInfo: {
                        "abroad": false,
                        "defaultPrice": "¥55.25",
                        "sizeKey": "尺码",
                        "skus": [{
                            "sizeId": 100,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                            "size": "35",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 1,
                            "stockId": "1mvzgti",
                            "xdSkuId": "1mvzgti",
                            "currency": "￥",
                            "style": "白/黑",
                            "stock": 0
                        },
                        {
                            "sizeId": 101,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                            "size": "36",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 1,
                            "stockId": "1mvzgtk",
                            "xdSkuId": "1mvzgtk",
                            "currency": "￥",
                            "style": "白/黑",
                            "stock": 0
                        },
                        {
                            "sizeId": 102,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                            "size": "37",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 1,
                            "stockId": "1mvzgtm",
                            "xdSkuId": "1mvzgtm",
                            "currency": "￥",
                            "style": "白/黑",
                            "stock": 0
                        },
                        {
                            "sizeId": 103,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                            "size": "38",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 1,
                            "stockId": "1mvzgto",
                            "xdSkuId": "1mvzgto",
                            "currency": "￥",
                            "style": "白/黑",
                            "stock": 0
                        },
                        {
                            "sizeId": 104,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                            "size": "39",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 1,
                            "stockId": "1mvzgtq",
                            "xdSkuId": "1mvzgtq",
                            "currency": "￥",
                            "style": "白/黑",
                            "stock": 0
                        },
                        {
                            "sizeId": 105,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_832c58gkie6693ldae2jkcjgee241_640x960.jpg",
                            "size": "40",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 1,
                            "stockId": "1mvzgts",
                            "xdSkuId": "1mvzgts",
                            "currency": "￥",
                            "style": "白/黑",
                            "stock": 0
                        },
                        {
                            "sizeId": 100,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                            "size": "35",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 2,
                            "stockId": "1mvzgtu",
                            "xdSkuId": "1mvzgtu",
                            "currency": "￥",
                            "style": "白绿",
                            "stock": 855
                        },
                        {
                            "sizeId": 101,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                            "size": "36",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 2,
                            "stockId": "1mvzgtw",
                            "xdSkuId": "1mvzgtw",
                            "currency": "￥",
                            "style": "白绿",
                            "stock": 681
                        },
                        {
                            "sizeId": 102,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                            "size": "37",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 2,
                            "stockId": "1mvzgty",
                            "xdSkuId": "1mvzgty",
                            "currency": "￥",
                            "style": "白绿",
                            "stock": 561
                        },
                        {
                            "sizeId": 103,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                            "size": "38",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 2,
                            "stockId": "1mvzgu0",
                            "xdSkuId": "1mvzgu0",
                            "currency": "￥",
                            "style": "白绿",
                            "stock": 611
                        },
                        {
                            "sizeId": 104,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                            "size": "39",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 2,
                            "stockId": "1mvzgu2",
                            "xdSkuId": "1mvzgu2",
                            "currency": "￥",
                            "style": "白绿",
                            "stock": 835
                        },
                        {
                            "sizeId": 105,
                            "img": "http://s3.mogucdn.com/p2/uni/160807/1tc4hs_3akhe4je7idjbehcl14fe8hcjb77g_640x960.jpg",
                            "size": "40",
                            "nowprice": 5525,
                            "price": 8500,
                            "styleId": 2,
                            "stockId": "1mvzgu4",
                            "xdSkuId": "1mvzgu4",
                            "currency": "￥",
                            "style": "白绿",
                            "stock": 718
                        }],
                        "title": "林允儿同款M字女鞋韩版低帮运动白色帆布鞋休闲鞋学生系带小白鞋",
                        "props": [{
                            "default": false,
                            "label": "颜色:",
                            "list": [{
                                "default": false,
                                "styleId": 1,
                                "name": "白/黑",
                                "index": 1,
                                "type": "style"
                            },
                            {
                                "default": false,
                                "styleId": 2,
                                "name": "白绿",
                                "index": 2,
                                "type": "style"
                            }]
                        },
                        {
                            "default": false,
                            "label": "尺码:",
                            "list": [{
                                "sizeId": 100,
                                "default": false,
                                "name": "35",
                                "index": 100,
                                "type": "size"
                            },
                            {
                                "sizeId": 101,
                                "default": false,
                                "name": "36",
                                "index": 101,
                                "type": "size"
                            },
                            {
                                "sizeId": 102,
                                "default": false,
                                "name": "37",
                                "index": 102,
                                "type": "size"
                            },
                            {
                                "sizeId": 103,
                                "default": false,
                                "name": "38",
                                "index": 103,
                                "type": "size"
                            },
                            {
                                "sizeId": 104,
                                "default": false,
                                "name": "39",
                                "index": 104,
                                "type": "size"
                            },
                            {
                                "sizeId": 105,
                                "default": false,
                                "name": "40",
                                "index": 105,
                                "type": "size"
                            }]
                        }],
                        "totalStock": 4261,
                        "styleKey": "颜色",
                        "priceRange": "¥55.25"
                    },
                    pinTuanInfo: {},
                    itemInfo: {
                        "isFaved": false,
                        "iid": "1k12j9s",
                        "saleType": 0,
                        "discountDesc": "活动价",
                        "admin": false,
                        "redPacketsSwitch": false,
                        "title": "林允儿同款M字女鞋韩版低帮运动白色帆布鞋休闲鞋学生系带小白鞋",
                        "type": 8,
                        "cartNum": 0,
                        "imUrl": "",
                        "lowPrice": "",
                        "cFav": 34947,
                        "price": "",
                        "extra": {},
                        "highPrice": "",
                        "cids": "#682# #757# #764#",
                        "shopId": "1oy202",
                        "state": 0,
                        "newComer": false,
                        "oldPrice": "",
                        "addCartTips": false,
                        "userId": "13q3s4i",
                        "tags": "小白鞋,平底,运动鞋,学院风,单鞋",
                        "topImages": [""],
                        "canApplyInstallment": false,
                        "discountBgColor": "#f13e3a",
                        "lowNowPrice": "55.25",
                        "shareCpsUrl": "http%3A%2F%2Fwww.mogujie.com%2Fcps%2Fopen%2Ftrack%3Fchannel%3D19%26uid%3D128yxgi%26target%3Dhttp%253A%252F%252Fshop.mogujie.com%252Fdetail%252F1k12j9s",
                        "grayUser": false,
                        "inActivity": false,
                        "self": false,
                        "highNowPrice": "55.25",
                        "desc": "林允儿同款帆布鞋，上脚舒适。"
                    },
                    priceRuleImg: '',
                    threeDModel: ''
                };
            </script>
        </div>
        <script type="text/javascript">
            window.PTP_PARAMS = window.PTP_PARAMS || {};
            window.PTP_PARAMS.ptp_cnt_b = '__item_detail';
        </script>
        <script src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/co.txt">
        </script>
        <div class="foot J_siteFooter" data-ptp="_foot">
        </div>

         <script type="text/javascript" src="/home/js/index_002.js"> </script>
        
         <script type="text/javascript" src="/home/js/bottom.js"> </script>
        
         <!-- <script type="text/javascript" src="/home/js/index(2).js"> </script> -->
          <!-- <script type="text/javascript" src="/home/商品列表_files/index.js"></script> -->
        
        <!-- 数据部门(晓海)要求在PC模板中添加ga统计信息， -->
        <script type="text/javascript">
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] ||
                function() { (i[r].q = i[r].q || []).push(arguments)
                },
                i[r].l = 1 * new Date();
                a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-25590490-1', 'auto');
            ga('send', 'pageview');

            //临时删除旧版指纹cookie，后面可以干掉这段代码，By奇云，17.02.15
            M.fn.removeCookie('FRMS_FINGERPRINT', {
                domain: '.mogujie.com',
                path: '/'
            });
        </script>
        <script type="text/javascript">
            if (window._trace && window._trace.config) {
                _trace.config.customUrl = function() {
                    return location.hostname + '/detail';
                }
            }
            // $('.pic-box').html($('.pic-box').text());
        </script>
        <script src="/home/js/getcapjs" id="shieldcaptain-bootstrap"
        type="text/javascript">
        </script>
    </body>

</html>