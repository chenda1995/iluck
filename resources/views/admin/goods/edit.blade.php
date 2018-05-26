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
                <style type="text/css">
                	/*#img{position: relative;float:left;}*/
                	.del{cursor: pointer; /*position: absolute;*/ right: 0px; top: 0px; font-size: 14px; opacity: 0.3; width: 20px; text-align: center; line-height: 20px; color: rgb(255, 255, 255); background: rgb(45, 45, 45) none repeat scroll 0px 0px; font-family: iconfont; font-style: normal;} 
			                </style>

                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/goods/{{$goods->gid}}" method="post" enctype='multipart/form-data'>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">商品分类 <span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                               <select data-am-selected="{searchBox: 1}" style="display: none;" name="tpath">
                                    <option value="0">请选择</option>
                                    @foreach($type as $k=>$v)
                                    <option value="{{$v->path}}{{$v->cid}}" @if($goods->tid == $v->cid) selected @endif>{{$v->cname}}</option>
                                    @endforeach
                                </select>
                                <span style="padding-left: 20px;padding-right: 20px;">品牌分类</span>
                                <select data-am-selected="{searchBox: 1}" style="display: none;" name="bid">
                                    <option value="0">请选择</option>
                                    @foreach($brand as $k=>$v)
                                    <option value="{{$v->bid}}"  @if($goods->bid == $v->bid) selected @endif>{{$v->bname}}</option>
                                    @endforeach
                                </select>
                              
                            </div>
                        </div>
                     
                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品名称<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="gname" value="{{$goods->gname}}">
                            </div>
                        </div>
                       <div class="am-form-group">
                            <label for="user-intro" class="am-u-sm-3 am-form-label">商品图片</label>
                            <div class="am-u-sm-9">
                            	<table>
									<tr class="mws-form-list inline">								@foreach($imgs as $k=>$v)
										<td>
											<input type="hidden" name="oldgpic[]" value="{{$v}}">
											<span class="del" onclick="delimg('{{$ids[$k]}}')">x</span><img src="{{ URL::asset($v) }}" id="{{$ids[$k]}}">
										</td>
										@endforeach
	                                </tr>	                                                       
                                </table>
                            </div>
                        </div>                  
                        
                        <div class="am-form-group">
                            <label for="user-intro" class="am-u-sm-3 am-form-label">增加图片</label>
                            <div class="am-u-sm-9">
                                <ul class="mws-form-list inline">
									<input type="file" name='gpic[]' multiple readonly="readonly" >
								</ul>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品尺寸<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="size" value="{{$goods->size}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品颜色<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="color" value="{{$goods->color}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品价格<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="price" value="{{$goods->price}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品库存<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-weibo" name="stock" value="{{$goods->stock}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">商品状态<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input type="radio" name='status' value='1' @if($goods->status == '1') checked @endif > <label>上架</label>
                                <input type="radio" name='status' value='0' @if($goods->status == '0') checked @endif > <label>下架</label>
                            </div>
                        </div>
                        <div class="am-form-group">
                       
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                            	{{csrf_field()}}
                            	{{method_field("PUT")}}
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

    function delimg(id) {
       $("#"+id).parents('td').remove();
      
    }

</script>

@endsection
