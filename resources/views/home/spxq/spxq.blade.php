@extends('layout.home')


@section('title',$title)



@section('content')

       

        <link href="/home/css/xqindex.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/home/css/bottom.css" media="all">
        <link href="/home/css/index_002.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/home/css/icon.css">
        <link rel="stylesheet" type="text/css" href="/home/css/shopHeader.css">

        <link href="/home/css/admin.css" rel="stylesheet" type="text/css" />
        <link href="/home/css/amazeui.css" rel="stylesheet" type="text/css" />
        <link href="/home/css/demo.css" rel="stylesheet" type="text/css" />
        <link type="text/css" href="/home/css/optstyle.css" rel="stylesheet" />
        <link type="text/css" href="/home/css/style.css" rel="stylesheet" />

   

        <script type="text/javascript" src="/home/js/amazeui.js"></script>
        <script type="text/javascript" src="/home/js/jquery-1.7.min.js"></script>

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
            <div class="shop-detail" >
                <div class="detail-primary clearfix" style="margin:0 auto;">
                    <div class="primary-goods">
                        <div class="clearfix">
                           
                            <div class="fl goods-info goods-info-tuan-act" id="J_GoodsInfo" style="margin-top: 20px; ">
                                <div class="info-box">
                                   
                                    <h1 class="goods-title" >
                                        
                                            {{$goods->gname}}

                                            <?php session(['gname'=>$goods->gname]); ?>

                                            @foreach($goods->gpic as $v)
                                            <?php session(['gpic'=>$v]); ?>
                                            @endforeach
                                       
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
                                                        console.log(data);
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
                                                        console.log(data);
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
                                            $('.fl').click(function(){
                                                
                                            })
                                            

                                        </script>
                                    </div>
                                    <div class="goods-social clearfix">
                                  
                                        
                                        <div class="report">
                                            
                                        </div>
                                    </div>
                                    <div class="goods-extra clearfix">
                                        <div class="extra-services">
                                            
                                        </div>
                                        <div class="extra-services">
                                            
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
                    
                    <center>
                        <div style="width: 735px;">
               <div class="introduceMain">
                        <div class="am-tabs" data-am-tabs>
                            <ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
                                <li class="am-active">
                                    <a href="#">

                                        <span class="index-needs-dt-txt">商品详情</span></a>

                                </li>

                                <li>
                                    <a href="#">

                                        <span class="index-needs-dt-txt">全部评价</span></a>

                                </li>
                            </ul>

                            <div class="am-tabs-bd">

                                <div class="am-tab-panel am-fade am-in am-active">
                                    <div class="J_Brand">

                                        <div class="attr-list-hd tm-clear">
                                            <h4>产品参数：</h4></div>
                                        <div class="clear"></div>
                                   
                                        <div class="clear"></div>
                                    </div>

                                    <div class="details">
                                        <div class="attr-list-hd after-market-hd">
                                            <h4>穿着效果:</h4>
                                        </div>
                                        <div class="twlistNews">
                                            {!!$goods->gdesc!!}
                                        </div>
                                    </div>
                                    <div class="clear"></div>

                                </div>

                                <div class="am-tab-panel am-fade">
                                @if($arr['commentTot'])
                                    <div class="actor-new">
                                        <div class="rate">                
                                            <strong>{{round(($arr['goodTot']/$arr['commentTot']*100))}}<span>%</span></strong><br> <span>好评度</span>            
                                        </div>
                                   
                                    </div>  
                                    <div class="clear"></div>
                                    <div class="tb-r-filter-bar">
                                        <ul class=" tb-taglist am-avg-sm-4">
                                            <li class="tb-taglist-li tb-taglist-li-current">
                                                <div class="comment-info">
                                                    <span>全部评价</span>
                                                    <span class="tb-tbcr-num">({{$arr['commentTot']}})</span>
                                                </div>
                                            </li>

                                            <li class="tb-taglist-li tb-taglist-li-1">
                                                <div class="comment-info">
                                                    <span>好评</span>
                                                    <span class="tb-tbcr-num">({{$arr['goodTot']}})</span>
                                                </div>
                                            </li>

                                            <li class="tb-taglist-li tb-taglist-li-0">
                                                <div class="comment-info">
                                                    <span>中评</span>
                                                    <span class="tb-tbcr-num">({{$arr['zhongTot']}})</span>
                                                </div>
                                            </li>

                                            <li class="tb-taglist-li tb-taglist-li--1">
                                                <div class="comment-info">
                                                    <span>差评</span>
                                                    <span class="tb-tbcr-num">({{$arr['chaTot']}})</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                     @foreach($comment as $com)

                                    <ul class="am-comments-list am-comments-list-flip">
                                        <li class="am-comment">
                                            <!-- 评论容器 -->
                                            <a href="">
                                                <img class="am-comment-avatar" src="{{$com->uic}}" />
                                                <!-- 评论者头像 -->
                                            </a>

                                            <div class="am-comment-main">
                                                <!-- 评论内容容器 -->
                                                <header class="am-comment-hd">
                                                    <!--<h3 class="am-comment-title">评论标题</h3>-->
                                                    <div class="am-comment-meta">
                                                        <!-- 评论元数据 -->
                                                        <a href="#link-to-user" class="am-comment-author">{{$com->uname}}</a>
                                                        <!-- 评论者 -->
                                                        评论于
                                                        <time datetime=""> {{date('Y-m-d H:i:s',$com->etime)}}</time>
                                                    </div>
                                                </header>

                                                <div class="am-comment-bd">
                                                    <div class="tb-rev-item " data-id="255776406962">
                                                        <div class="J_TbcRate_ReviewContent tb-tbcr-content ">
                                                            {{$com->text}}
                                                        </div>
                                                    
                                                    </div>

                                                </div>
                                                <!-- 评论内容 -->
                                            </div>
                                        </li>
                                    </ul>
                                    @endforeach

                                    <div class="clear"></div>
                                @endif

                                    <!--分页 -->
                                    <ul class="am-pagination am-pagination-right">
                                        <li class="am-disabled"><a href="#">&laquo;</a></li>
                                        <li class="am-active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
             </div>
                    </center>
                            
                        </div>
                    </div>
                    <!-- 侧边栏 -->
                    <div class="col-sidebar">

                    </div>
                    <!-- 扩展栏 -->
                </div>
            </div>
        </div>

@endsection

 
           
        