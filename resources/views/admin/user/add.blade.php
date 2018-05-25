@extends('layout.admin')

@section('title',$title)


@section('content')
 

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">添加用户</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">
                                @if (count($errors) > 0)
                                    <div class="mws-form-message error">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style='color:blue;font-size:17px;list-style:none'>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif



                                <form action="/admin/user" method='post' class="am-form tpl-form-border-form tpl-form-border-br" enctype='multipart/form-data'>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">User name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="uname" class="tpl-form-input" id="user-name" placeholder="请输入用户名">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">密码 <span class="tpl-form-line-small-title">Password</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name="password" class="tpl-form-input" id="user-name" placeholder="请输入密码">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">确认密码 <span class="tpl-form-line-small-title">Password</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name="repass" class="tpl-form-input" id="user-name" placeholder="请确认密码">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span class="tpl-form-line-small-title">Phone</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="tel" class="tpl-form-input" id="user-name" placeholder="请输入手机号">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">头像 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="assets/img/a5.png" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                     <i class="am-icon-cloud-upload"></i> 添加头像图片</button>
                                                <input id="doc-form-file" type="file" name="uic" multiple="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">状态 <span class="tpl-form-line-small-title">Status</span></label>
                                        <div class="am-u-sm-9">
                                            <ul class="mws-form-list inline">
                                                <input type="radio" name='state' value='0' checked> <label>启用</label>
                                                <input type="radio" name='state' value='1'> <label>禁止</label>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            {{csrf_field()}}
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
</div>
@endsection

