@extends('layout.admin')

@section('title',$title)


@section('content')

<div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">商品评论</div>


                            </div>
                            <div class="widget-body  am-fr">

                                
                                
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
                 <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                    </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>用户名</th>
                                                <th>商品名</th>
                                                <th>商品图片</th>
                                                <th>评论内容</th>
                                                <th>评论星级</th>
                                                <th>评论时间</th>
                                                <th>状态</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($data as $v)
                                            <tr class="gradeX">
                                            	<td class="am-text-middle">{{$v->id}}</td>
                                            	<td class="am-text-middle">{{$v->uname}}</td>
                                                <td class="am-text-middle" style="width: 320px;">{{$v->gname}}</td>

                                                <td>
                                                    <img src="{{$v->gimg}}" class="tpl-table-line-img" alt="" width="70px" height="70px">
                                                </td>
                                                <td class="am-text-middle">{{$v->text}}</td>
                                                <td class="am-text-middle" style="color: red;font-size:18px">{{str_repeat("★",$v->start)}}{{str_repeat("☆",5-$v->start)}}</td>
                                                <td class="am-text-middle">{{date("Y-m-d H:i:s",$v->etime)}}</td>
                                                <td class="am-text-middle">
                      <select name="" id="" style="color: black" onchange="zt(this,{{$v->id}})">
                                                	@if($v->statu==1)
                                                		<option value="0">未审核</option>
                                                		<option selected value="1">正常</option>
                                                		<option value="2">黑名单</option>

                                                	@elseif($v->statu==2)
                                                		<option value="0">未审核</option>
                                                		<option value="1">正常</option>
                                                		<option selected value="2">黑名单</option>

                                                	@else
                                                		<option selected value="0">未审核</option>
                                                		<option value="1">正常</option>
                                                		<option value="2">黑名单</option>

                                                	@endif

                                                	</select>
                                                </td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
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

                                    <div class="am-fr">
                                        {{ $data->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
            	function zt(obj,id)
            	{
            		//获取自己的value值
            		val = $(obj).val();
            		// alert(id);

            		// 发送ajax请求
            		$.post("/admin/comment/ajaxStatu",{"id":id,"statu":val,"_token":'{{csrf_token()}}'},function(data){

            			if (data==1) {

            				alert('修改成功')
            			} else {

            				('修改失败')
            			}

            		})
            	}
            </script>


@endsection