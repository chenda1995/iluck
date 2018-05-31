@extends('layout.admin')



@section('title',$title)




@section('content')

<div class="tpl-content-wrapper" style="margin-left:0px">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">订单列表</div>


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
                     
                            <form action="/admin/orders" method='get'>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-5">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field " name="search" value="{{$search}}">
                                        <span class="am-input-group-btn">
            								<button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" 	></button>
          								</span>
                                    </div>
                                </div>
                            </form>
                                <style>
                                    
                                    td{

                                        text-align:center;
                                    }
                                    th{
                                        text-align:center;
                                    }
                                </style>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr >
                                                <th>订单号</th>
                                                <th>收货人</th>
                                                <th>收货地址</th>
                                                <th>联系电话</th>
                                                <th>订单金额</th>
                                                <th>订单数量</th>
                                                <th>订单时间</th>
                                               
                                                <th>订单操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											
											@foreach($res as $v)

                                            <tr class="gradeX">
                                                <td>{{$v->oid}}</td>
                                                <td>{{$v->rec}}</td>
                                                <td>{{$v->addr}}</td>
                                                <td>{{$v->tel}}</td>
                                                <td>{{$v->sum}}</td>
                                                <td>{{$v->cnt}}</td>
                                                <td>{{date('Y-m-d H:i:s',$v->otime)}}</td>
                                                
                                                <td>
                                                  <div class="tpl-table-black-operation">
                                                        <a href="/admin/orders/{{$v->oid}}/edit">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="/admin/orders/{{$v->oid}}">
                                                            <i class="am-icon-archive"></i> 查看
                                                        </a>
                                                        
                                                            
                                                        <a href="/admin/order/del/{{$v->oid}}" 
                                                        class="tpl-table-black-operation-del" >
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                           @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
					
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
						<div style="margin-left: 900px">
						{{ $res->appends($request)->links() }}
	


    				    </div>
    <script src="/admins/assets/js/amazeui.datatables.min.js"></script>
                                                 <script>


                                                    var aa = $('.w');
                                                   // console.log(aa);
                                                        aa.click(function(){
                                                            // alert(123);
                                                   //获取id值
                                                        var oid = $(this).parents('tr').find('td').eq(0).text();
                                                       // console.log(oid);
                                                    // 发送ajax
                                                    $.get('/admin/order/update/',{oid:oid},function(data){

                                                            if(data){

                                                                alert('成功发货');

                                                            location.reload();
                                                            } else {

                                                                alert('发货失败');
                                                            }
                                                    })
                                                    return false;

                                                 });









                                                    </script>


		
						
@endsection