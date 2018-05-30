@extends('layout.home1')


@section('title',$title)



@section('content')



    
    
   <?php 




    ?>


<link href="/home/orders/aa/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/home/orders/aa/bottom.css" media="all">
<link href="/home/orders/aa/index.css-10ba2f94.css" rel="stylesheet" type="text/css">
				
<div id="body_wrap" >
    <div id="body" class="fm960" style="width: 1200px; margin:0 auto;">
        <div class="muorder">
            <div class="mu_wrap">
                <h2 class="mu_head">
                    订单详情
                </h2>
                <div class="mu_d_lines mu_d_mrgin">
                    <span class="mw">
                        订单编号: {{$oid}}
                    </span>
                    </i>
                </div>
            </div>
            <div class="mu_d_info">
                <h5 class="mu_d_info_tit">
                    详细信息
                </h5>
                <dl class="mu_d_infolist">
                	@foreach($arr as $v)
                    <dt>
                        收 货 人：
                    </dt>
                    <dd>
               			{{$v->rec}}
                    </dd>
                    <dt>
                        收货地址：
                    </dt>
                    <dd>
                        {{$v->addr}}
                    </dd>
                  
                    <dt>
                        联系电话：
                    </dt>
                    <dd>
                        {{$v->tel}}
                    </dd>
                    @endforeach
                </dl>
            </div>
            <div class="mu_d_orderlist mu_d_mrgin">
                <h5 class="mu_d_info_tit">
                    商品清单
                </h5>
                <ul class="mo_orderlist">
                    <li class="mo_orderitem">
                        <ul class="mo_orderitem_thlist clearfix">
                            <li class="td_goods">
                                商品
                            </li>
                            <li class="td_price">
                                单价(元)
                            </li>
                            <li class="td_count">
                                数量
                            </li>
                            <li class="td_wipay">
                                交易状态
                            </li>
                            <li class="td_ictrl">
                                店铺优惠
                            </li>
                            <li class="td_afmak">
                                全场优惠
                            </li>
                            <li class="td_total">
                                <span>
                                    订单金额(元)
                                </span>
                            </li>
                        </ul>
                        @foreach($res as $v)
                        <ul class="mo_orderitem_det clearfix">
                            <li class="td_colrow">
                                <ul class="td_colrow_wrap clearfix">
                                    <li class="td_goods">
                                        <div class="td_wrap txtleft">
                                            <a href="#" 
                                            target="_blank">
                                                <img src="{{$v->gpic}}"
                                                 class="mo_orderitem_gdimg"
                                                width="60" height="60">
                                            </a>
                                            <div class="mo_orderitem_h mo_orderitem_gdinfo mb4">
                                                <a href="http://shop.mogujie.com/detail/1lzj1wq" title="失踪女t恤上衣中长款宽松百搭ulzzang短袖2018夏季新款韩版纯色亮丝t恤女"
                                                target="_blank">
                                                    {{$v->gname}}
                                                </a>
                                            </div>
                                            <p class="mo_orderitem_d mo_orderitem_gdinfo">
                                                颜色：{{$v->color}}
                                            </p>
                                            <p class="mo_orderitem_d mo_orderitem_gdinfo">
                                                尺码：{{$v->size}}
                                            </p>
                                        </div>
                                    </li>
                                    <li class="td_price">
                                        <div class="td_wrap">
                                            
                                            <p class="mu_money">
                                                ¥ {{$v->price}}
                                            </p>
                                        </div>
                                    </li>
                                    <li class="td_count">
                                        <div class="td_wrap">
                                            <p>
                                                {{$v->cnt}}
                                            </p>
                                            <p class="ui-red-packet-fee">
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="td_wipay mo_orderitem_lfence">
                                <div class="td_wrap">
                                    <span class="wait_pay">
                                         @if($v->status == '1')
                                        等待发货
                                        @endif
                                        @if($v->status == '2')
                                        <a href="#" class="shouhuo" gid="{{$v->id}}">>>确认收货<<</a>
                                        @endif
                                        @if($v->status == '3')
                                        交易完成
                                        <a href="#">|去评价吧</a>
                                        @endif
                                    </span>
                                </div>
                            </li>
                            <li class="td_ictrl mo_orderitem_lfence">
                                <div class="td_wrap">
                                </div>
                            </li>
                            <li class="td_afmak mo_orderitem_lfence">
                                <div class="td_wrap">
                                </div>
                            </li>
                            <li class="td_total mo_orderitem_lfence">
                                <div class="td_wrap">
                                    <span class="mo_orderitem_money_gray mu_money" data-newmodou="true" data-modouusecount="0">
                                        ¥ {{$v->price*$v->cnt}}
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endforeach
                <!-- 2016.11.11满返 -->
                <div class="ui-return-cash">
                    <div class="ui-pay">
                        <div class="ui-pay-part clearfix">
                            <p class="ui-content ui-pay-cash fr">
                                <span class="ui-title">
                                    实付金额：
                                </span>
                                <span class="ui-value ui-pink fr">
                                    ￥{{$v->price*$v->cnt}}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <dl class="mu_d_infolist">
            </div>
        </dl>
    </div>
</div>
</div>
</div>
  <script>
        $('.shouhuo').click(function(){
            $(this).each(function(){

                var id = $(this).attr('gid');

                $.get('/home/order/shouhuo',{id:id},function(data){
                    console.log(data);
                })
            $(this).parent('.wait_pay').html('交易完成<a href="#">&nbsp;|去评价吧</a>');

            })
        })


    </script>
            	


@endsection