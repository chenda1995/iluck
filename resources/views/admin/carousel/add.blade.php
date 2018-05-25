@extends('layout.admin')

@section('title',$title)

@section('content')

     <div class="row-content am-cf">
    <div class="row">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 pull-left">
        <div class="widget am-cf ">
            <div class="widget-body am-fr pull-left">
                <form action="/admin/show" method='post' class="am-form tpl-form-border-form tpl-form-border-br text-center" enctype="multipart/form-data">

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">
                            商品分类
                        </label>
                        <div class="am-u-sm-9">
                            <input type="text" name="cid" id="user-weibo" placeholder="请添加分类用点号隔开">
                            <div>
                            </div>
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            商品名称

                        </label>
                        <div class="am-u-sm-9">
                            <input type="text" name="bname" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">

                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            商品价格

                        </label>
                        <div class="am-u-sm-9">
                            <input type="text" name="bprice" class="tpl-form-input" id="user-name" placeholder="请输入商品价格">

                        </div>
                    </div>

                   <!--  <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            商品链接地址

                        </label>
                        <div class="am-u-sm-9">
                            <input type="text" name="burl" class="tpl-form-input" id="user-name" placeholder="请输入商品链接地址">

                        </div>
                    </div> -->



                   <!--  <div class="am-form-group">
                       <label for="user-email" class="am-u-sm-3 am-form-label">
                           发布时间

                       </label>
                       <div class="am-u-sm-9">
                           <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间"
                           data-am-datepicker="" readonly="">

                       </div>
                   </div> -->


                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">
                            添加图片

                        </label>
                        <div class="am-u-sm-9">
                            <!-- <div> -->
                                <!-- <button type="button"> -->
                                   <!--  <i class="am-icon-cloud-upload">
                                    </i>
                                    添加商品图片 -->
                                    <input  name="bprofile" type="file" multiple="">
                                <!-- </button> -->
                                <!-- <input id="doc-form-file" type="file" multiple=""> -->

                                <!-- <script id="editor" name="gpic" type="text/plain" style="width:900px;height:300px;"></script> -->
                            <!-- </div> -->
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
</div>

@endsection


@section('js')
<script>


    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

    /*setTimeout(function(){

        $('.mws-form-message').slideUp(1000);

    },3000)
*/
    // $('.mws-form-message').delay(3000).slideUp(1000);

</script>

@endsection