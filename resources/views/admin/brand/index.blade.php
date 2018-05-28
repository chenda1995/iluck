@extends('layout.admin')

@section('title',$title)

@section('content')
       
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">分类列表</div>
                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        
                                    </div>
                                </div>
                                <form action="/admin/brand" method="get">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" class="am-form-field " name='search' value="{{$search}}">
                                            <span class="am-input-group-btn">
                                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" ></button>
                                          </span>
                                        </div>
                                    </div>
                                </form>
                                <style type="text/css">
                                    
                                </style>

                                <div class="am-u-sm-12">
                                    
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th style="width: 250px;">ID编号</th>
                                                <th style="width: 250px;">品牌名称</th>
                                                <th style="width: 250px;">品牌logo</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($res as $k=>$v)
                                            <tr class="gradeX" id="{{$v->bid}}">
                                                <td class="">{{$v->bid}}</td>   
                                                <td class="uname">{{$v->bname}}</td>
                                                <td class=""> 
                                                    <img src="{{ URL::asset($v->logo) }}" class="tpl-table-line-img" alt="">
                                                </td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="/admin/brand/{{$v->bid}}/edit">
                                                            <i class="am-icon-pencil"></i> 修改
                                                        </a>
                                                        
                                                        <a href="javascript:void(0)" id="del" onclick="del({{$v->bid}})" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i>删除
                                                    </a>
                                                     </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">
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
                                
            
                                <div class="am-fr">
                                    {{ $res->appends(['search'=>$search])->links() }} 
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                
                function del(id){
                   $.ajax(
                       {
                           url: "/admin/brand/" + id,
                           method : "POST", // Or POST : result is the same
                           headers:{'X-CSRF-TOKEN':$("input[name=_token]").val()},
                           data :{ _method : 'DELETE' },
                           success: function(data, textStatus, jqXHR ){
                                console.log(data);
                                if (data.code > 0){

                                    alert('删除成功');
                                    location.reload();
                                  // $("#"+data.id).remove();
                                }
                           }
                       }
                   );
                }
            </script>
@endsection