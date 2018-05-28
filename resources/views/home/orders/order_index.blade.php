@extends('layout.home1')


@section('title',$title)



@section('content')

<link href="/home/orders/index.css" rel="stylesheet" type="text/css">
<link href="/home/orders/index.css-1220b6f4.css" rel="stylesheet"
type="text/css">

    <div class="mu_content_wrap" style="margin-left: 150px;">

        <div class="order-title">
            <ul class="order-title-column clearfix">
                <li class="goods">
                    商品
                </li>
                <li class="price">
                    单价(元)
                </li>
                <li class="quantity">
                    数量
                </li>
                <li class="aftersale">
                    售后
                </li>
                <li class="total">
                    实付款(元)
                </li>
                <li class="status">
                    交易状态
                </li>
                <li class="other">
                    操作
                </li>
            </ul>
        </div>

<?php

    $uid = session('uid');

    $res = DB::table('orders')->where([['uid',$uid],['auth','0']])->get();

    foreach ($res as $k => $v) {
        $oid = $v->oid;

        $arr = DB::table('orders_details')->where([['oid',$oid],['auth','0']])->get();


    

  

  


 ?>

       
        <div id="orderWrap">
            <div class="order-list">
                <div class="order-section finished" data-payid="77272182363570">
                    <table class="order-table">
                        <tbody oid="{{$oid}}">
                            <?php foreach($arr as $k1=>$v1){

        ?>
                            <tr class="order-table-header">
                                <td colspan="7">
                                    <div class="order-info fl">
                                        <span class="no">
                                            订单编号：
                                            <span class="order_num">
                                               {{$v1->oid}}
                                            </span>
                                        </span>
                                        <span class="deal-time">
                                           交易时间: {{date('Y-m-d H:i:s',$v1->time)}}
                                        </span>
                                        
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr class="order-table-item last">
                                <td class="goods">
                                    <a class="pic" href="http://shop.mogujie.com/detail/1lt7ams" title="查看宝贝详情"
                                    hidefocus="true" target="_blank">
                                        <img src="{{$v1->gpic}}"
                                        alt="查看宝贝详情" width="70">
                                    </a>
                                    <div class="desc">
                                        <p>
                                            <a href="http://shop.mogujie.com/detail/1lt7ams" target="_blank">
                                               {{$v1->gname}}
                                            </a>
                                           
                                        </p>
                                        <p>
                                            颜色：{{$v1->color}}-［{{$v1->size}}］
                                        </p>
                                        
                                    </div>
                                </td>
                                <td class="price">
                                    
                                    <p>
                                        {{$v1->price}}
                                    </p>
                                </td>
                                <td class="quantity">
                                    {{$v1->cnt}}
                                </td>
                                <td class="aftersale">
                                </td>
                                <td class="total" rowspan="1">
                                    <p class="total-price">
                                        ￥ {{$v1->price*$v1->cnt}}
                                    </p>
                                    <p>
                                        <span>
                                            (全国包邮)
                                        </span>
                                    </p>
                                </td>
                                <td class="status" rowspan="1">
                                    <p class="p">
                                        @if($v1->status == '1')
                                        等待发货
                                        @endif
                                        @if($v1->status == '2')
                                        <a href="#" class="shouhuo" gid="{{$v1->id}}">>>确认收货<<</a>
                                        @endif
                                        @if($v1->status == '3')
                                        交易完成
                                        <a href="#">|去评价吧</a>
                                        @endif
                                    </p>
                                    <a href="/home/order/xq/{{$v1->id}}"
                                    class="order-link go-detail-link" target="_blank" gid="{{$v1->id}}">
                                        订单详情
                                    </a>
                                </td>
                                <td class="other" rowspan="1">
                                    <ul>
                                        <li>
                                            <a gid="{{$v1->id}}" class="order-link order-remove" href="javascript:;" data-shopid="77272182373570">
                                                删除订单
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                             <?php }?>
                        </tbody>
                    </table>
                </div>
                
                
            </div>
            
        </div>
      
       <?php } ?> 
    </div>
   
    <script>
        $('.order-link').click(function(){
            $(this).each(function(){

                var res = confirm('确定删除吗??');

                if(!res) return;

                

                var id = $(this).attr('gid');
                //console.log(oid);

                $.get('/home/order/del',{id:id},function(data){

                    location.reload();
                    
                })
            })
        })

        $('.shouhuo').click(function(){
            $(this).each(function(){

                var id = $(this).attr('gid');

                $.get('/home/order/shouhuo',{id:id},function(data){
                    console.log(data);
                })
            $(this).parent('.p').html('交易完成<a href="#">&nbsp;|去评价吧</a>');

            })
        })


    </script>

@endsection