@extends('layout.admin')

@section('title',$title)


@section('content')


<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">广告修改页</div>
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



                                <form action="/admin/adv/{{$res->adid}}" method='post' class="am-form tpl-form-border-form tpl-form-border-br" enctype='multipart/form-data'>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">广告地址 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="adurl" value="{{$res->adurl}}" class="tpl-form-input" id="user-name" placeholder="请输链接地址">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">广告图 </label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="{{$res->adsrc}}" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                     <i class="am-icon-cloud-upload"></i> 修改图片</button>
                                                <input id="doc-form-file" type="file" name="adsrc" multiple="">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            {{method_field('PUT')}}
                                            {{csrf_field()}}
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
</div>
@endsection

