@extends('layout.home1')


@section('title',$title)



@section('content')

       

        <link href="/home/css/xqindex.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/home/css/bottom.css" media="all">
        <link href="/home/css/index_002.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/home/css/icon.css">
        <link rel="stylesheet" type="text/css" href="/home/css/shopHeader.css">

        <script type="text/javascript" src="/home/js/mwp.js"></script>

        

        <?php
                    $res = DB::table('user')->where('uid',session('uid'))->first();
                    // dd($res);
                ?>
       

        
 
       
        
      
        
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
            <div class="shop-detail"  style="margin-top: 20px;">
                <div class="detail-primary clearfix" style="margin:0 auto;">
                    <div class="primary-goods">
                        <div class="clearfix">
                           
                            <div class="fl goods-info goods-info-tuan-act" id="J_GoodsInfo">
                                <div class="info-box">
                                    <h1 class="goods-title">
                                        <span itemprop="name">
                                            {{$goods->gname}}

                                            <?php session(['gname'=>$goods->gname]); ?>

                                            @foreach($goods->gpic as $v)
                                            <?php session(['gpic'=>$v]); ?>
                                            @endforeach
                                        </span>
                                    </h1>
                                    <div class="goods-prowrap goods-main">
                                        
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
                                                        <?php session(['price'=>$goods->price]); ?>
                                                        <?php session(['gid'=>$goods->gid]); ?>
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
                                                            <li class="aa " data-id="100" title="35" gid="{{$goods->gid}}">{{$v}}</li>
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
                                                            <li class="dd" data-id="100" title="35" gid="{{$goods->gid}}" >{{$v}}</li>
                                                        </ol>
                                                        @endforeach

                                                    </dd>
                                                </dl>
                                              <script>
                                                  $('.aa').click(function(){
                                                     $(this).each(function(){
                                                       var gid = $(this).attr('gid');
                                                       $(this).attr('class','aa c');
                                                      var color =  $(this).text();
                                                      $.get('/home/cardo1',{color:color},function(data){
                                                        //console.log(data);
                                                      })
                                                       //$(this).addClass('c');
                                                       
                                                     })
                                                     $(this).parent('.J_SizeList').siblings().find('.aa').attr('class','aa');
                                                     
                                                  })
                                                   $('.dd').click(function(){
                                                     $(this).each(function(){
                                                       var gid = $(this).attr('gid');
                                                       $(this).attr('class','dd c');
                                                       var size = $(this).text();
                                                        $.get('/home/cardo2',{size:size},function(data){
                                                        //console.log(data);
                                                      })

                                                       //$(this).addClass('c');
                                                       
                                                     })
                                                     $(this).parent('.J_SizeList').siblings().find('.dd').attr('class','dd');
                                                     
                                                  })
                                              </script> 
                                            </div>
                                            <div class="pannel-action">
                                                <a href="javascript:;" class="J_PannelOK pannel-ok">
                                                    确认
                                                </a>
                                            </div>
                                        </div>
                                        <div class="goods-buy clearfix">
                                            <a href="#" id="J_BuyNow" class="fl mr10 buy-btn buy-now">
                                                加入购物车
                                            </a>
                                            
                                            <img src="%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/171130_19haaka7jg7224f491f44c24c8bi5_32x32.gif"
                                            class="refresh-loading">
                                        </div>
                                        <script>
                                            $('#J_BuyNow').click(function(){
                                               $(this).
                                            })
                                            

                                        </script>
                                    </div>
                                    <div class="goods-social clearfix">
                                        <div class=" fav  item" goodsid="0"  tid="0">
                                            <span class=" isfav  m-icon m-icon-star ">
                                            </span>
                                            <span class="fav-num" onclick="house(this,)">
                                                加入收藏
                                            </span>
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
                                                        <img src="/home/%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/upload_4feh98909481a8805bbdal579kg79_60x60.png"
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
                                                    <a class="link" href="#"
                                                     title="" rel="nofollow">
                                                        <img src="/home/%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/idid_ie3tmyjxhfrtgzbzmezdambqgayde_40x40.png"
                                                        height="24" width="24">
                                                        全国包邮
                                                    </a>
                                                </li>
                                                <li class="item">
                                                    <a class="link" href="#"
                                                     title="" rel="nofollow">
                                                        <img src="/home/%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/idid_ifrtgojygu2dgzbzmezdambqhayde_40x40.png"
                                                        height="24" width="24">
                                                        7天无理由退货
                                                    </a>
                                                </li>
                                                <li class="item">
                                                    <a class="link" href="#"
                                                     title="" rel="nofollow">
                                                        <img src="/home/%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/idid_ifrdqobzmq3dizbzmezdambqmeyde_40x40.png"
                                                        height="24" width="24">
                                                        72小时发货
                                                    </a>
                                                </li>
                                                <li class="item">
                                                    <a class="link" href="#"
                                                     title="" rel="nofollow">
                                                        <img src="/home/%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/idid_ie4timrzmq3tkzbzmezdambqgqyde_40x40.png"
                                                        height="24" width="24">
                                                        退货补运费
                                                    </a>
                                                </li>
                                            </ul>
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
                    
                </div>
                <div id="J_ModuleCustomBanner" style="display:none">
                </div>
                <!-- 蘑菇拼团 -->
                <div class="detail-content ">
                    <!-- 顶部 -->
                  
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
                                                                
                                                            </b>
                                                            <span class="num-s">
                                                                %
                                                            </span>
                                                        </span>
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
                                                           
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="服务">
                                                            
                                                        </a>
                                                        <b>
                                                            |
                                                        </b>
                                                        <!-- ## 差评 -->
                                                        <!-- ## 好评 -->
                                                        <a href="javascript:;" class="best" data-emotion="positive" data-property="物流">
                                                           
                                                             
                                                        </a>    
                                                    </div>
                                                   
                                                </div>
                                                <!-- 导航 -->
                                                <div class="nav clearfix">
                        
                                                    <a href="javascript:;" data-type="all" class="c">
                                                       
                                                    </a>
                                                 
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
                                            <img class="img-lazyload" src="/home/%E5%95%86%E5%93%81%E8%AF%A6%E6%83%85_files/upload_ie2dsmbsmyydcmtbgmzdambqgiyde_150x26.png"
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
        </div>
    </div>
    <style>
        


    </style>
</div>
</div>
</div>
</body>
</html>

          @endsection
           
        