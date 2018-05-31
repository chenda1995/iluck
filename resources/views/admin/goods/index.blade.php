@extends('layout.admin')

@section('title',$title)

@section('content')
	
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">{{$title}}</div>
                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6"></div>
                               
                            	<form action="/admin/goods" method="get">
	                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
	                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
	                                        <input type="text" class="am-form-field " name='search' value="{{$search}}">
	                                        <span class="am-input-group-btn">
				                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" ></button>
				                          </span>
	                                    </div>
	                                </div>
	                                {{ csrf_field() }}
                            	</form>

                                <div class="am-u-sm-12">
                                	<input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="">
                                        <thead>
                                            <tr>
                                                <th>商品ID</th>
                                                <th>名称</th>
                                                <th>图片</th>
                                                <th>类别</th>
                                                <th>价格</th>
                                                <th>库存</th>
                                                <th>状态</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($res as $k=>$v)
                                            <tr class="gradeX">
	                                            <td class="">{{$v->gid}}</td>
            							                    <td class="uname" style="width: 150px;">{{$v->gname}}</td>
            							                    <td class="uname">
							                    	          <img src="{{ URL::asset($v->gpic[0]) }}" class="tpl-table-line-img" alt="" style="width:90px;height: 80px;">
							                                </td>
            	                                            <td class="">{{getName($v->tid)}}</td>
            	                                            <td class="">{{$v->price}}</td>
            	                                            <td class="">{{$v->stock}}</td>
            							                    <td class=" ">
            							                    	@if($v->status==1)
            							                    	<button type="button" class="am-btn am-btn-default am-btn-danger" id="{{$v->gid}}" onclick="upstat({{$v->gid}},0)" style="font-size: 1.2rem">下架</button>
            							                    	@else
            							                    	<button type="button"  class="am-btn am-btn-default am-btn-success" id="{{$v->gid}}" onclick="upstat({{$v->gid}},1)" style="font-size: 1.2rem">上架</button>
            							                    	@endif
            							                    </td>
                                                            <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="/admin/goods/{{$v->gid}}/edit">
                                                            <i class="am-icon-pencil"></i> 修改
                                                        </a>
                                                         <a href="javascript:void(0)" id="del" onclick="del({{$v->gid}})" class=" tpl-table-black-operation-del">
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

                                <div class="am-fr">
                                    {{ $res->appends(['search'=>$search])->links() }} 
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <script>
                
               function del(id){
                   $.ajax(
                       {
                           url: "/admin/goods/" + id,
                           method : "POST", // Or POST : result is the same
                           headers:{'X-CSRF-TOKEN':$("input[name=_token]").val()},
                           data :{ _method : 'DELETE' },
                           success: function(data, textStatus, jqXHR ){
                                if (data.code > 0){
                                    alert('删除成功');
                                    location.reload();
                                  // $("#"+data.id).remove();
                                }
                            }
                        }
                    );
                }

            function upstat(id,sta){
                   $.ajax(
                       {
                           url: "/admin/goods/" + id,
                           method : "POST", // Or POST : result is the same
                           headers:{'X-CSRF-TOKEN':$("input[name=_token]").val()},
                           data :{ 
                           		_method : 'PUT',
                                status : sta,
                                onlystatus : 1,
                            },
                           success: function(data, textStatus, jqXHR ){   
                           console.log(data);                   
                                if (data.code > 0){
                                 if(sta == 0){
                                        $("#"+id).parent('td').html('<button type="button" class="am-btn am-btn-default am-btn-success" id="'+id+'" onclick="upstat('+id+',1)" style="font-size: 1.2rem">上架<tton>');   
                                    }else{
                                         $("#"+id).parent('td').html('<button type="button" class="am-btn am-btn-default am-btn-danger" id="'+id+'" onclick="upstat('+id+',0)" style="font-size: 1.2rem">下架<tton>');   

                                    }
                                // $("#"+[图片]data.id).remove();
                                }
                            }
                        }
                    );
                }

            </script>

@endsection