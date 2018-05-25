@extends('layout.admin')



@section('title',$title)




@section('content')
<div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">订单详情</div>


                            </div>
                            
                     

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>订单号</th>
                                                <th>商品名称</th>
                                                <th>商品</th>
                                                <th>价格</th>
                                                <th>数量</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
											
											@foreach($res as $v)

                                            <tr class="gradeX">
                                                <td>{{$v->oid}}</td>
                                                <td>{{$v->gname}}</td>
                                                <td>{{$v->gpic}}</td>
                                                <td>{{$v->price}}</td>
                                                <td>{{$v->cnt}}</td>
                                               
                                               
                                            </tr>
                                           @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>

	



@endsection
