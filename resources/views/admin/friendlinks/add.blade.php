@extends('layout.admin')

@section('title',$title)

@section('content')



    <div class="row">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-body am-fr">
                <form  action="/admin/friendlinks" method="post" class="am-form tpl-form-border-form tpl-form-border-br">

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">
                            添加友情链接
                        </label>
                        <div class="am-u-sm-9">
                            <input type="text"  name="cname" id="user-weibo" placeholder="请添加分类用点号隔开">
                            <div>
                            </div>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">
                            友情链接列表
                        </label>
                        <div class="am-u-sm-9">
                            <input type="text" name="curl" id="user-weibo" placeholder="请添加分类用点号隔开">
                            <div>
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
    </div>


@endsection



