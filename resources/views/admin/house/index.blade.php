@extends('layout.admin')

@section('title',$title)


@section('content')

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title  am-cf">
                        收藏管理
                    </div>
                </div>
                <div class="widget-body  am-fr">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                            <input type="text" class="am-form-field ">
                            <span class="am-input-group-btn">
                                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"
                                type="button">
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="am-u-sm-12">
                        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>商品图片</th>
                                    <th>商品名</th>
                                    <th>商品价格</th>
                                    <th>收藏时间</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($data as $v)
                                <tr class="gradeX">
                                    <td class="am-text-middle">{{$v->id}}</td>
                                    <td class="am-text-middle">{{$v->uname}}</td>
                                    <td>
                                        <img src="{{$v->img}}" class="tpl-table-line-img" alt="" width="70px" height="70px">
                                    </td>
                                    <td class="am-text-middle">{{$v->gname}}</td>
                                    <td class="am-text-middle">{{$v->price}}</td>
                                    <td class="am-text-middle">{{date("Y-m-d H:i:s",$v->stime)}}</td>
                                    
                                </tr>
                                @endforeach
                                <!-- more data -->
                            </tbody>
                        </table>
                    </div>
                    <div class="am-u-lg-12 am-cf">
                        <div class="am-fr">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection