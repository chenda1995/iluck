@extends('layout.admin')



@section('title',$title)




@section('content')
<div class="tpl-content-wrapper">
            <div class="row-content am-cf"  style="margin-left:  -200px;">
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
                                                <th width="100px">商品</th>
                                                <th>价格</th>
                                                <th>数量</th>
                                                <th>大小</th>
                                                <th>颜色</th>
                                                <th>状态</th>
                                                <th>操作</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
											
											@foreach($res as $v)

                                            <tr class="gradeX">
                                                <td>{{$v->oid}}</td>
                                                <td>{{$v->gname}}</td>
                                                <td width="100px">{{$v->gpic}}</td>
                                                <td>{{$v->price}}</td>
                                                <td>{{$v->cnt}}</td>
                                                <td>{{$v->size}}</td>
                                                <td>{{$v->color}}</td>




                                                <td calss="r" >
                                                    @if($v->status == 1)

                                                    <a class="w"  href=""  gid="{{$v->id}}">点击发货</a>

                                                    @endif

                                                    @if($v->status == 2)

                                                    <span style="color:yellow"  >等待收货</span>

                                                    @endif
                                                    @if($v->status == 3)

                                                    <span style="color:#99cc33;">交易完成</span>

                                                    @endif




                                                    </td>
                                                    <td><a href="###" 
                                                        class="tpl-table-black-operation-del"  style="color:red" gid="{{$v->id}}">
                                                            <i class="am-icon-trash" style="color:red"></i> 删除
                                                        </a></td>
                                               
                                               
                                            </tr>
                                           @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>

	<script>
     $('.tpl-table-black-operation-del').click(function(){
        $(this).each(function(){
            var gid = $(this).attr('gid');
            //alert(gid);
            $.get('/admin/order/delete',{id:gid},function(data){
                console.log(data);
            })
            $(this).parents('.gradeX').remove();
        })
     })

     $('.w').click(function(){
        $(this).each(function(){
            var gid = $(this).attr('gid');
           //console.log(gid);
           $.get('/admin/order/status',{id:gid},function(data){
            console.log(data);
           })

           $(this).parent('r').html(` <span style="color:yellow"  >等待收货</span>`);


        })

       
     })   
    </script>



@endsection
