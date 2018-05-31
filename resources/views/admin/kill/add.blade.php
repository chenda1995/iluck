@extends('layout.admin')

@section('title',$title)


@section('content')


<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">添加限时快抢页</div>
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



                                <form action="/admin/kill" method='post' class="am-form tpl-form-border-form tpl-form-border-br" enctype='multipart/form-data'>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品标题 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="gktitle" class="tpl-form-input" id="user-name" placeholder="请输商品标题">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">快抢价 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="gknprice" class="tpl-form-input" id="user-name" placeholder="请输快抢价格">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">原价 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="gkoprice" class="tpl-form-input" id="user-name" placeholder="请输原价">
                                        </div>
                                    </div>




                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片 </label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                     <i class="am-icon-cloud-upload"></i> 添加图片</button>
                                                <input id="doc-form-file" type="file" name="gksrc" multiple="">
                                            </div>

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

