@extends('layout.admin')

@section('title',$title)


@section('content')

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title  am-cf">
                        用户列表
                    </div>
                </div>
                <div class="widget-body  am-fr">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                        <div class="am-form-group">
                            <div class="am-btn-toolbar">
                              
                            </div>
                        </div>
                    </div>
                    <form action="/admin/user" method='get'>
                        <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                            <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                <input type="text" name='search' value="{{$search}}" class="am-form-field ">
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
                                        用户名
                                    </th>
                                    <th>
                                        手机号
                                    </th>
                                    <th>
                                        状态
                                    </th>
                                    <th>
                                        用户头像
                                    </th>
                                    <th>
                                        注册时间
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
                                        {{$v->uid}}
                                    </td>
                                    <td class="am-text-middle">
                                        {{$v->uname}}
                                    </td>
                                    <td class="am-text-middle">
                                        {{$v->tel}}
                                    </td>
                                    <td class="am-text-middle">
                                        @if($v->state)
                                            <button class="am-btn am-btn-default am-btn-danger am-btn-group-xs" onclick="state(this,{{$v->uid}},1)">禁止</button>
                                        @else
                                            <button class="am-btn am-btn-default am-btn-success am-btn-group-xs" onclick="state(this,{{$v->uid}},0)">启用</button>
                                        @endif
                                    </td>
                                    <td>
                                        <img src="{{$v->uic}}" class="tpl-table-line-img" alt="" width="70" height="70px">
                                    </td>
                                    <td class="am-text-middle">
                                        {{date('Y-m-d H:i:s',$v->addtime)}}
                                    </td>
                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">
                                            <a href="/admin/user/{{$v->uid}}/edit" id="bj">
                                                <i class="am-icon-pencil">
                                                </i>
                                                编辑
                                            </a>
                                            <a href="javascript:;" class="tpl-table-black-operation-del" onclick="del(this,{{$v->uid}})">
                                                <i class="am-icon-trash"></i>
                                                删除
                                            </a>
              
                                        </div>
                                    </td>
                                </tr>
                                 <script>
                                    function delUser(user_uid)  
                                    {  

                                           $.post("{{ url('user') }}/" + user, {    // 网址、数据、成功后操作  
                                               "_token": "{{ csrf_token() }}",          
                                               "_method": "delete"  
                                           }, function(data) {  
                                              
                                           });  
                                    }  
                                </script>
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

<script>
    //ajax删除
    function del(obj,uid)
    {
        // alert(uid);
        $.post('/admin/user/'+uid,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
            // alert(data);
            // 判断是否删除成功
            if (data==1) {

                //成功移除数据 父级的父级的父级  移除
                $(obj).parent().parent().parent().remove()
            } else {
                alert('删除失败');
            }
        })
    }


    //ajax修改状态
    function state(obj,uid,state)
    {
        //发送ajax请求

        if (state) {
            //发送ajax请求

            $.post('user/ajaxState',{uid:uid,"_token":"{{csrf_token()}}","state":"0"},function(data){

                if (data==1) {

                    $(obj).parent().html('<button class="am-btn am-btn-default am-btn-success am-btn-group-xs" onclick="state(this,'+uid+',0)">启用</button>')

                } else {

                    alert('修改失败');

                }
            })
        } else {
            $.post('user/ajaxState',{uid:uid,"_token":"{{csrf_token()}}","state":"1"},function(data){

                if (data==1) {

                    $(obj).parent().html('<button class="am-btn am-btn-default am-btn-danger am-btn-group-xs" onclick="state(this,'+uid+',1)">禁用</button>')

                } else {

                    alert('修改失败');

                }
            })

        }
    }
</script>

@endsection