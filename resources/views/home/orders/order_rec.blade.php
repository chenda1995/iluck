@extends('layout.home1')


@section('title',$title)



@section('content')

<!DOCTYPE html>
<link href="./订单列表_蘑菇街_files/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./订单列表_蘑菇街_files/bottom.css"
media="all">
<link href="./订单列表_蘑菇街_files/index.css-1220b6f4.css" rel="stylesheet"
type="text/css">
<div class="mu_content_wrap">
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
    <div id="orderWrap">
        <div class="order-operate">
            <label>
                <input type="checkbox" class="order-check-all checkall" name="checkall">
                全选
            </label>
            <a class="delete order-delete-all" href="javascript:;" data-url="/trade/order/deleterecycleorder">
                批量永久删除
            </a>
            <a class="recover order-recover-all" href="javascript:;" data-url="/trade/order/recoveryrecycleorder">
                批量还原
            </a>
        </div>
        <div class="order-list">
            <div class="order-section finished" data-payid="77265909793570">
                <table class="order-table">
                    <tbody>
                        <tr class="order-table-header">
                            <td colspan="7">
                                <div class="order-info fl">
                                    <input type="checkbox" class="J_check check" name="checkbox" data-shopid="77265909803570">
                                    <span class="no">
                                        订单编号：
                                        <span class="order_num">
                                            77265909803570
                                        </span>
                                    </span>
                                    <span class="deal-time">
                                        成交时间：2018-05-24 16:18:59
                                    </span>
                                    
                                </div>
                                    
                            </td>
                        </tr>
                        <tr class="order-table-item last">
                            <td class="goods">
                                <a class="pic" href="http://shop.mogujie.com/detail/1k63moi" title="查看宝贝详情"
                                hidefocus="true" target="_blank">
                                    <img src="./订单列表_蘑菇街_files/171220_8324hl99b4jf2kb1d75llfd048ilg_800x800.jpg_999x999.v1c0.webp"
                                    alt="查看宝贝详情" width="70">
                                </a>
                                <div class="desc">
                                    <p>
                                        <a href="#" target="_blank">
                                            LUC 不锈钢保温杯男女士咖啡杯学生随行水杯子
                                        </a>
                                        
                                    </p>
                                    <p>
                                        颜色：浅棕色
                                    </p>
                                    <p>
                                        规格：380ML
                                    </p>
                                    <ul class="ui-tags-list clearfix">
                                        <li class="ui-tags-item">
                                            
                                            
                                        </li>
                                        <li class="ui-tags-item">
                                            
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td class="price">
                               
                                <p>
                                    49.00
                                </p>
                            </td>
                            <td class="quantity">
                                1
                            </td>
                            <td class="aftersale">
                            </td>
                            <td class="total" rowspan="1">
                                <p class="total-price">
                                    ￥ 49.00
                                </p>
                                <p>
                                    <span>
                                        (全国包邮)
                                    </span>
                                </p>
                            </td>
                            <td class="status" rowspan="1">
                                <p class="">
                                    交易取消
                                </p>
                                <a href="http://order.mogujie.com/order/detail4buyer?orderId=77265909803570"
                                class="order-link go-detail-link" target="_blank">
                                    订单详情
                                </a>
                            </td>
                            <td class="other" rowspan="1">
                                <ul>
                                    <li>
                                        <a class="order-link order-recover recover-btn" href="javascript:;" data-url="/trade/order/recoveryrecycleorder"
                                        data-shopid="77265909803570">
                                            还原订单
                                        </a>
                                    </li>
                                    <li>
                                        <a class="order-link order-delete delete-btn" href="javascript:;" data-shopid="77265909803570">
                                            永久删除
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection