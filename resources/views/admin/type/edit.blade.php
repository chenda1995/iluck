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

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/type/{{$info->cid}}" method="post" enctype='multipart/form-data'>
                                                  
                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">父级分类 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{maxHeight: 300}" style="display: none;" name="pid" size="5">
			                                    <option value="0">请选择</option>
			                                    @foreach($res as $k=>$v)
			                                    <option value="{{$v->cid}}" @if($info->pid == $v->cid) selected @endif >{{$v->cname}}</option>
			                                    @endforeach
			                                </select>
                                        </div>
                                    </div>
    
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">分类名称 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" name="cname" value='{{$info->cname}}'>
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">分类图片</label>
                                        <div class="am-u-sm-9">
                                            <ul class="mws-form-list inline">
                                                <input type="file" name='tpic' multiple readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="No file selected...">
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">状态</label>
                                        <div class="am-u-sm-9">
                                            <ul class="mws-form-list inline">
    											<input type="radio" name='status' value='1' @if($info->status == '1') checked @endif> <label>启用</label>
    											<input type="radio" name='status' value='0' @if($info->status == '0') checked @endif> <label>禁止</label>
    										</ul>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                        	{{csrf_field()}}
                                        	{{method_field("PUT")}}
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="修改">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection