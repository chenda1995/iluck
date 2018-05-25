@extends('layout.admin')


@section('title',$title);



@section('content')

<div class="tpl-content-wrapper">

           

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">修改订单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" action="/admin/orders/{{$res->oid}}" method="post">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">订单号 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" readonly value="{{$res->oid}}" name="oid">
                                            
                                        </div>
                                    </div>

                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">收货人 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$res->rec}}" name="rec">
                                            
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">收货人电话 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$res->oid}}" name="tel">
                                            
                                        </div>
                                    </div>

                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">订单金额 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" readonly value="{{$res->sum}}" name="sum">
                                            
                                        </div>
                                    </div>

                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">订单数量 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" readonly value="{{$res->cnt}}" name="cnt">
                                            
                                        </div>
                                    </div>

                                     


                                    

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">收货地址</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro"  name="addr">{{$res->addr}}</textarea>
                                        </div>
                                    </div>
                                    {{method_field('PUT')}}
									{{csrf_field()}}
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button  class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                




@endsection
