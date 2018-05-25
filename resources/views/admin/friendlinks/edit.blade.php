@extends('layout.admin')

@section('title',$title)

@section('content')


        <form action="/admin/friendlinks/{{$res->cid}}" method="post" class="am-form tpl-form-border-form tpl-form-border-br">
            <div class="am-form-group">
                <label for="user-name" class="am-u-sm-3 am-form-label">链接名称 </label>
                <div class="am-u-sm-9">
                    <input name="cname" value="{{$res->cname}}" type="text" class="tpl-form-input" id="user-name" placeholder="请输入添加链接"的名称>
                </div>
            </div>

            <div class="am-form-group">
                <label for="user-name" class="am-u-sm-3 am-form-label">链接地址 </label>
                <div class="am-u-sm-9">
                    <input name="curl"  value="{{$res->curl}}"type="text" class="tpl-form-input" id="user-name" placeholder="请输入链接地址">

                </div>
            </div>






            <div class="am-form-group">
                <div class="am-u-sm-9 am-u-sm-push-3">
                {{method_field('PUT')}}
                {{csrf_field()}}
            <input type="submit" class="btn btn-danger" value="修改">
                </div>
            </div>
        </form>


@endsection

