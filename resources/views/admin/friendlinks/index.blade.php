@extends('layout.admin')

@section('title',$title)

@section('content')


<div class="widget-body  widget-body-lg am-fr">
    <table width="100%" class="am-table am-table-compact am-table-bordered am-table-radius am-table-striped tpl-table-black " id="example-r">
        <thead>
            <tr>
                <th>ID</th>
                <th>友情链接名称</th>
                <th>友情链接地址</th>
                <th>操作</th>
            </tr>
        </thead>
            <tbody>
                @foreach($res as $k => $v)
                <tr class="gradeX">
                    <td>{{$v->cid}}</td>
                    <td>{{$v->cname}}</td>
                    <td>{{$v->curl}}</td>


                    <td>
                        <!-- <div class="tpl-table-black-operation"> -->
                            <a href="/admin/friendlinks/{{$v->cid}}/edit">
                                <button class='btn btn-primary'>修改</button>
                            </a>
                            <!-- <a href="javascript:;" class="tpl-table-black-operation-del">
                                <i class="am-icon-trash"></i> 删除
                            </a> -->

                            <form action="/admin/friendlinks/{{$v->cid}}" method='post' style='display:inline'>
                            {{csrf_field()}}

                            {{method_field('DELETE')}}

                            <button class='btn btn-danger' onclick="return confirm('你确认要删除吗？');">删除</button>

                        </form>
                        <!-- </div> -->
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        <style>
            .pagination li{
                float: left;
                height: 20px;
                padding: 0 10px;
                display: block;
                font-size: 12px;
                line-height: 20px;
                text-align: center;
                cursor: pointer;
                outline: none;
                background-color: #444444;

                text-decoration: none;
                border-right: 1px solid #232323;
                border-left: 1px solid #666666;
                border-right: 1px solid rgba(0, 0, 0, 0.5);
                border-left: 1px solid rgba(255, 255, 255, 0.15);
                -webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                -moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);

            }

                    .pagination li a{
                    color: #fff;
                    }

                    .pagination .active{
                    background-color: #88a9eb;
                    color: #323232;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                    }

                    .pagination .disabled{

                        color: #666666;
                        cursor: default;
                    }



                    .pagination{
                        margin:0px;
                    }

        </style>
                <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                    {{ $res->appends($request)->links() }}
                </div>
</div>

@endsection