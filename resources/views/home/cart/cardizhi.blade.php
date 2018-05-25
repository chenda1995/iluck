@extends('layout.grzx')

@section('title',$title)


@section('content')

<link rel="stylesheet" href="/sanji/pick-pcc.min.1.0.1.css">
<script src="/home/oiDRP1K45KG4TlCsxhUzeDq.js"></script>
					




<div class="per_content_wrap" id="per_content_wrap">
    <div id="setting_box" class="fl">
        <div class="settings_title">
            <span>
               添加地址
            </span>
        </div>
       
            <div id="setting_form" class="setting_basic">
                <form action="/home/carupdatedo" method="post" >
                  {{csrf_field()}}
                    <dl>
                        
                        
                           
                            @foreach($res as $v)
                            <input class="r3" name="uid" value="{{$v->uid}}" type="hidden">
                            <input class="r3" name="id" value="{{$v->id}}" type="hidden">
                     
                        <dd>
                            收件人：
                        </dd>
                        <dt class="unick uname" style="padding-top:5px;">
                            <input type="text" class="itxt"
                           name="name" value="{{$v->name}}">
                        </dt>

                       
                        <dd>
                            邮政编码：
                        </dd>
                        <dt class="unick uname" style="padding-top:5px;">
                            <input type="text" class="itxt"
                           name="yzbm" value="{{$v->yzbm}}">
                        </dt>
                        

                       
                        
                        
                        <dd>
                            收件人手机：
                        </dd>
                        <dt class="unick uname" style="padding-top:5px;">
                            <input type="text" class="itxt"
                           name="tel" value="{{$v->tel}}">
                        </dt>
                        

                       
                    </dl>
                    
					<dd>
                          地区选择：
                    </dd>
                    <dt class="unick uname" style="padding-top:5px;">
						<div class="a" style="margin-left: 103px;">
							<a href="javascript:void(0)" style="
							display:block;
							position:relative;
							font-size:14px;
							background:#fff;
							text-decoration:none;
							cursor:default;
							" class="pick-area qwe" name="省\直辖市/市\市辖区/市辖区\县" ></a>

							<input type="text" value="{{$v->diqu}}" name="diqu" readonly style="margin-top: 15px;">
						

							<script src="/sanji/jquery.min.js"></script>
							<script src="/sanji/pick-pcc.min.1.0.1.js"></script>
							
							<script>
								

							    $(".qwe").pickArea({
						        
						        //"preSet":"",//数据初始化 ；这里的数据初始化有两种方式，第一种是用preSet属性设置，第二种是在a标签里使用name属性设置
						        "getVal":function(){//这个方法是每次选中一个省、市或者县之后，执行的方法
						            //console.log($(".pick-area-hidden").val())
						            //console.log($(".pick-area-dom").val())
						            var thisdom = $("."+$(".pick-area-dom").val());//返回的是调用这个插件的元素pick-area，$(".pick-area-dom").val()的值是该元素的另一个class名，这个class名在dom结构中是唯一的，不会有重复，可以通过这个class名来识别这个pick-area
						            thisdom.next().val($(".pick-area-hidden").val());//$(".pick-area-hidden").val()是页面中隐藏域的值，存放着每次选中一个省、市或者县的时候，当前文本存放的省市县的最新值，每点击一次下拉框里的li，这个值就会立即更新
        }
    });


							</script>
						</div>
					</dt>
                   
                    <dl>
                        <dd>
                            收件人地址：
                        </dd>
                        <dt>
                            <textarea name="address" id="introduce" rows="10" class="r3">
                                {{$v->address}}
                            </textarea>
                           
                        </dt>
                        @endforeach
                        <dd>
                            &nbsp;&nbsp;
                        </dd>
                        <dt>
                            <button class="green_button r3 modifycomplete">修改完成</button>
                            
                        </dt>
                    </dl>
                </form>
            </div>
    </div>
</div>


@endsection