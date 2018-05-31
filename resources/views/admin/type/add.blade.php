@extends('layout.admin')

@section('title',$title)

@section('content')
	 			<div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">{{$title}}</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/type" method="post" >
                                                  
                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">父级分类 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="pid">
			                                    <option value="0">请选择</option>
			                                    @foreach($res as $k=>$v)
			                                    <option value="{{$v->cid}}">{{$v->cname}}</option>
			                                    @endforeach
			                                   
			                                </select>
                                        </div>
                                    </div>
    
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">添加分类 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" name="cname">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">状态</label>
                                        <div class="am-u-sm-9">
                                            <ul class="mws-form-list inline">
    											<input type="radio" name='status' value='1' checked> <label>启用</label>
    											<input type="radio" name='status' value='0'> <label>禁止</label>
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
                </div>

    
@endsection