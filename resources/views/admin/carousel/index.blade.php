@extends('layout.admin')

@section('title',$title)


@section('content')

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title  am-cf">
                        轮播图列表
                    </div>
                </div>
                <div class="widget-body  am-fr">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                        <div class="am-form-group">
                            <div class="am-btn-toolbar">

                            </div>
                        </div>
                    </div>
                    <form action="/admin/show" method='get'>
                        <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                            <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                <input type="text" name='search' value="" class="am-form-field ">
                                <span class="am-input-group-btn">
                                    <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search">
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                    <div class="am-u-sm-12">
                        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        轮播地址
                                    </th>
                                    <th>
                                        轮播图
                                    </th>
                                    <th>
                                        操作
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($res as $k=>$v)
                                <tr class="gradeX">
                                    <td class="am-text-middle">
                                        {{$v->bid}}
                                    </td>

                                    <td class="am-text-middle">
                                        {{$v->burl}}
                                    </td>

                                     <td class="am-text-middle">
                                        <img src="{{$v->bsrc}}" alt="" style="width: 126px;">
                                    </td>



                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">
                                            <a href="/admin/show/{{$v->bid}}/edit" id="bj">
                                                <i class="am-icon-pencil">
                                                </i>
                                                修改
                                            </a>

                                            <form action="/admin/show/{{$v->bid}}" method='post' style='display:inline'>
                                            {{csrf_field()}}

                                            {{method_field('DELETE')}}

                                                <button class='tpl-table-black-operation-del' onclick="return confirm('你确认要删除吗？');">删除</button>

                                            </form>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <!--more data-->
                            </tbody>
                        </table>
                        <div class="am-fr">
                            <!-- 分页 -->
                            {{$res->appends($request)->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>



@endsection