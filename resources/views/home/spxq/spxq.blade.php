@extends('layout.home1')


@section('title',$title)



@section('content')
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>商品页面</title>

        <link href="/home/xq/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
        <link href="/home/xq/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
        <link href="/home/xq/basic/css/demo.css" rel="stylesheet" type="text/css" />
        <link type="text/css" href="/home/xq/css/optstyle.css" rel="stylesheet" />
        <link type="text/css" href="/home/xq/css/style.css" rel="stylesheet" />

        <script type="text/javascript" src="/home/xq/basic/js/jquery-1.7.min.js"></script>
        <script type="text/javascript" src="/home/xq/basic/js/quick_links.js"></script>

        <script type="text/javascript" src="/home/xq/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
        <script type="text/javascript" src="/home/xq/js/jquery.imagezoom.min.js"></script>
        <script type="text/javascript" src="/home/xq/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="/home/xq/js/list.js"></script>

    </head>

    <body>


            <!--悬浮搜索框-->

            <div class="nav white">
           
            </div>

            <div class="clear"></div>

            <div class="listMain">


                <ol class="am-breadcrumb am-breadcrumb-slash">
                    <li><a href="#">首页</a></li>
                    <li><a href="#">分类</a></li>
                    <li class="am-active">内容</li>
                </ol>
                <script type="text/javascript">
                    $(function() {});
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            start: function(slider) {
                                $('body').removeClass('loading');
                            }
                        });
                    });
                </script>
                <div class="scoll">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="/home/xq/images/01.jpg" title="pic" />
                                </li>
                                <li>
                                    <img src="/home/xq/images/02.jpg" />
                                </li>
                                <li>
                                    <img src="/home/xq/images/03.jpg" />
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <!--放大镜-->

                <div class="item-inform">
                    <div class="clearfixLeft" id="clearcontent">

                        <div class="box">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $(".jqzoom").imagezoom();
                                    $("#thumblist li a").click(function() {
                                        $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
                                        $(".jqzoom").attr('src', $(this).find("img").attr("mid"));
                                        $(".jqzoom").attr('rel', $(this).find("img").attr("big"));
                                    });
                                });
                            </script>

                            <div class="tb-booth tb-pic tb-s310" >
                                <a href="{{ URL::asset($goods->gpic[0])}}"><img src="{{ URL::asset($goods->gpic[0])}}" alt="细节展示放大镜特效" rel="{{ URL::asset($goods->gpic[0])}}" class="jqzoom" /></a>
                            </div>

                            <ul class="tb-thumb" id="thumblist">
                                 @foreach($goods->gpic as $k=>$v)
                                <li class="tb-selected">
                                    <div class="tb-pic tb-s40">
                                        <a href="javascript:;"><img src="{{ URL::asset($v)}}" mid="{{ URL::asset($v)}}" big="{{ URL::asset($v)}}"></a>
                                    </div>
                                </li>
                                @endforeach
                          
                            </ul>
                        </div>

                        <div class="clear"></div>
                    </div>

                    <div class="clearfixRight">

                        <!--规格属性-->
                        <!--名称-->
                        <div class="tb-detail-hd">
                            <h1>{{$goods->gname}} 
                                <?php session(['gname'=>$goods->gname]); ?>

                                            @foreach($goods->gpic as $v)
                                            <?php session(['gpic'=>$v]); ?>
                                            @endforeach

                            </h1>    
                 
             
                        </div>
                        <div class="tb-detail-list">
                            <!--价格-->
                            <div class="tb-detail-price">
                                <li class="price iteminfo_price">
                                    <dt>促销价</dt>
                                    <dd><em>¥</em><b class="sys_item_price">{{$goods->price}}
                                                        <?php session(['price'=>$goods->price]); ?>
                                                        <?php session(['gid'=>$goods->gid]); ?></b>  </dd>                                 
                                </li>
                                <li class="price iteminfo_mktprice">
                                    <dt>原价</dt>
                                    <dd><em>¥</em><b class="sys_item_mktprice">{{$goods->price/0.8}}</b></dd>                                   
                                </li>
                                <div class="clear"></div>
                            </div>

                            <!--地址-->
                            
                            <div class="clear"></div>

                            <!--销量-->
                            <ul class="tm-ind-panel">
                                <li class="tm-ind-item tm-ind-sellCount canClick">
                                    <div class="tm-indcon"><span class="tm-label">月销量</span><span class="tm-count">0</span></div>
                                </li>
                                <li class="tm-ind-item tm-ind-sumCount canClick">
                                    <div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count">0</span></div>
                                </li>
                                <li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
                                    <div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count">{{$arr['commentTot']}}</span></div>
                                </li>
                            </ul>
                            <div class="clear"></div>

                            <!--各种规格-->
                            <dl class="iteminfo_parameter sys_item_specpara">
                                <dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>
                                <dd>
                                    <!--操作页面-->

                                    <div class="theme-popover-mask"></div>

                                    <div class="theme-popover">
                                        <div class="theme-span"></div>
                                        <div class="theme-poptit">
                                            <a href="javascript:;" title="关闭" class="close">×</a>
                                        </div>
                                        <div class="theme-popbod dform">
                                            <form class="theme-signin" name="loginform" action="" method="post">

                                                <div class="theme-signin-left">

                                                    <div class="theme-options">
                                                        <div class="cart-title">颜色:</div>
                                                        <ul class="ww">
                                                            @foreach($goods->color as $k=>$v)
                                                            <li class="sku-line" gid="{{$goods->gid}}">{{$v}}</i>
                                                            @endforeach
                                                   
                                                        </ul>
                                                    </div>
                                                    <div class="theme-options">
                                                        <div class="cart-title">尺码:</div>
                                                        <ul class="qq">
                                                            @foreach($goods->size as $k=>$v)
                                                            <li class="sku-line " gid="{{$goods->gid}}" style="width: 35px;height: 30px;">{{$v}}</li>
                                                            @endforeach
                                                       
                                                        </ul>
                                                    </div>
                                                   
                                                    <div class="clear"></div>

                                                    <div class="btn-op">
                                                        <div class="btn am-btn am-btn-warning">确认</div>
                                                        <div class="btn close am-btn am-btn-warning">取消</div>
                                                    </div>
                                                </div>
                                                <div class="theme-signin-right">
                                                    <div class="img-info">
                                                        <img src="/home/xq/images/songzi.jpg" />
                                                    </div>
                                                   
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </dd>
                            </dl>
                            <div class="clear"></div>
                         
                        </div>

                        <div class="pay">
                            <div class="pay-opt">
                            <a href="home.html"><span class="am-icon-home am-icon-fw">首页</span></a>
                            <a><span class="am-icon-heart am-icon-fw">收藏</span></a>
                            
                            </div>
                            
                            <li>
                                <div class="clearfix tb-btn tb-btn-basket theme-login">
                                    <a id="LikBasket" title="加入购物车" href="/home/cardo"><i></i>加入购物车</a>
                                </div>
                            </li>
                        </div>
                         <script>
                                                  $('.sku-line').click(function(){
                                                     $(this).each(function(){
                                                       var gid = $(this).attr('gid');
                                                       $(this).attr('class','sku-line c');
                                                      var color =  $(this).text();
                                                      $.get('/home/cardo1',{color:color},function(data){
                                                        //console.log(data);
                                                      })
                                                       //$(this).addClass('c');
                                                       
                                                     })
                                                     $(this).parent('.ww').siblings().find('.sku-line').attr('class','sku-line');
                                                     
                                                  })
                                                   $('.sku-line').click(function(){
                                                     $(this).each(function(){
                                                       var gid = $(this).attr('gid');
                                                       $(this).attr('class','sku-line c');
                                                       var size = $(this).text();
                                                        $.get('/home/cardo2',{size:size},function(data){
                                                        //console.log(data);
                                                      })

                                                       //$(this).addClass('c');
                                                       
                                                     })
                                                     $(this).parent('.qq').siblings().find('.sku-line').attr('class','sku-line');
                                                     
                                                  })
                                              </script> 

                    </div>

                    <div class="clear"></div>

                </div>

                <!--优惠套装-->
                <div class="match">
                    <div class="match-title">优惠套装</div>
                    <div class="match-comment">
                    
                    </div>
                </div>
                <div class="clear"></div>
                
                            
                <!-- introduce-->

                <div class="introduce">
                    <div class="browse">
                        <div class="mc"> 
                             <ul>                       
                                <div class="mt">            
                                    <h2>看了又看</h2>        
                                </div>
                                
                                  <li class="first">
                                    <div class="p-img">                    
                                        <a  href="#"> <img class="" src="/home/xq/images/browse1.jpg"> </a>               
                                    </div>
                                    <div class="p-name"><a href="#">
                                        【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
                                    </a>
                                    </div>
                                    <div class="p-price"><strong>￥35.90</strong></div>
                                  </li>
                                  <li>
                                    <div class="p-img">                    
                                        <a  href="#"> <img class="" src="/home/xq/images/browse1.jpg"> </a>               
                                    </div>
                                    <div class="p-name"><a href="#">
                                        【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
                                    </a>
                                    </div>
                                    <div class="p-price"><strong>￥35.90</strong></div>
                                  </li>
                                  <li>
                                    <div class="p-img">                    
                                        <a  href="#"> <img class="" src="/home/xq/images/browse1.jpg"> </a>               
                                    </div>
                                    <div class="p-name"><a href="#">
                                        【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
                                    </a>
                                    </div>
                                    <div class="p-price"><strong>￥35.90</strong></div>
                                  </li>                               
                                  <li>
                                    <div class="p-img">                    
                                        <a  href="#"> <img class="" src="/home/xq/images/browse1.jpg"> </a>               
                                    </div>
                                    <div class="p-name"><a href="#">
                                        【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
                                    </a>
                                    </div>
                                    <div class="p-price"><strong>￥35.90</strong></div>
                                  </li>                               
                                  <li>
                                    <div class="p-img">                    
                                        <a  href="#"> <img class="" src="/home/xq/images/browse1.jpg"> </a>               
                                    </div>
                                    <div class="p-name"><a href="#">
                                        【三只松鼠_开口松子218g】零食坚果特产炒货东北红松子原味
                                    </a>
                                    </div>
                                    <div class="p-price"><strong>￥35.90</strong></div>
                                  </li>                               
                          
                             </ul>                  
                        </div>
                    </div>
                    <div class="introduceMain">
                        <div class="am-tabs" data-am-tabs>
                            <ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
                                <li class="am-active">
                                    <a href="#">

                                        <span class="index-needs-dt-txt">宝贝详情</span></a>

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
                                        <ul id="J_AttrUL">
                                            <li title="">产品类型:&nbsp;烘炒类</li>
                                            <li title="">原料产地:&nbsp;巴基斯坦</li>
                                            <li title="">产地:&nbsp;湖北省武汉市</li>
                                            <li title="">配料表:&nbsp;进口松子、食用盐</li>
                                            <li title="">产品规格:&nbsp;210g</li>
                                            <li title="">保质期:&nbsp;180天</li>
                                            <li title="">产品标准号:&nbsp;GB/T 22165</li>
                                            <li title="">生产许可证编号：&nbsp;QS4201 1801 0226</li>
                                            <li title="">储存方法：&nbsp;请放置于常温、阴凉、通风、干燥处保存 </li>
                                            <li title="">食用方法：&nbsp;开袋去壳即食</li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="details">
                                        <div class="attr-list-hd after-market-hd">
                                            <h4>商品细节</h4>
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
            </div>
            <!--菜单 -->
        
@endsection
