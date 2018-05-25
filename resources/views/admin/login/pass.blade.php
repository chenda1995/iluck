@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">修改密码</div>
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



                                <form action="/admin/changepass" method='post' class="am-form tpl-form-border-form tpl-form-border-br" enctype='multipart/form-data'>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">旧密码 <span class="tpl-form-line-small-title">Old Password</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name="oldpass" class="tpl-form-input" id="user-name" placeholder="请输入用户名">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">新密码 <span class="tpl-form-line-small-title">New Password</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name="password" class="tpl-form-input" id="user-name" placeholder="请输入密码">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">确认密码 <span class="tpl-form-line-small-title">Confirm Password</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name="repass" class="tpl-form-input" id="user-name" placeholder="请确认密码">
                                        </div>
                                    </div>

                                    

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                        	{{csrf_field()}}
                            				<input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="修改">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
</div>

@endsection