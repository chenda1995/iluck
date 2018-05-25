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

                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/goods" method="post" enctype='multipart/form-data'>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">商品分类 <span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                               
                                <select data-am-selected="{searchBox: 1}" style="display: none;" name="tid">
                                    <option value="0">请选择</option>
                                    @foreach($res as $k=>$v)
                                    <option value="{{$v->path}}{{$v->cid}}">{{$v->cname}}</option>
                                    @endforeach
                                   
                                </select>
                            </div>
                        </div>
                        
						<div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品名称<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="gname">
                            </div>
                        </div>
                        
                       
						<div class="am-form-group">
                            <label for="user-intro" class="am-u-sm-3 am-form-label">商品图片</label>
                            <div class="am-u-sm-9">
                                <ul class="mws-form-list inline">
									<input type="file" name='gpic[]' multiple readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="No file selected...">
								</ul>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品尺寸<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="size">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品颜色<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="color">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品价格<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="price">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品库存<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="stock">
                            </div>
                        </div>

                        <div class="am-form-group">

                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品详情<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                  <script id="editor" name='content' type="text/plain" style="width:700px;height:300px;"></script>


                            </div>
                        </div>

						 <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品状态<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                               	<input type="radio" name='status' value='1' checked> <label>上架</label>
    							<input type="radio" name='status' value='0'> <label>下架</label>
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

@section('js')
<script>


    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

<<<<<<< HEAD
=======


>>>>>>> origin/lz001
</script>

@endsection
