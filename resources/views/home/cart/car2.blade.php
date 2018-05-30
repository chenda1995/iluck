@extends('layout.home1')


@section('title',$title)



@section('content')


   
    
    <?php 
    $a = session('uid');
    $res = DB::table('address')->where('uid',$a)->get();

    $arr = DB::table('address')->where('uid',$a)->count();

    

     ?>
    
    


<link href="/home/car/index.css-709a8a6f.css" rel="stylesheet" type="text/css">
<link href="/home/car/index.css-aff6006a.css" rel="stylesheet" type="text/css">
<body class="media_screen_1200">
    <div ></div>
    @if($arr>0)
    <div id="pay_info">
        <div class="g-wrap wrap">
            <div class="cart_wrap">
                <!-- 页面内容 -->
                <div class="cart_page_wrap pt0">
                    <h2 class="cart_stit">
                        选择收货地址
                    </h2>
                    <div class="cart_address_wrap" id="cartAddress">
                        <!-- 选择收获地址list -->

                        <ul class="cart_address_list clearfix" style="height:160px" id="cartAddressList">
                        	 @foreach($res as $v)
                        	 
                            <li data-aid="567699303" >
                               
                                <a href="javascript:;" 

                                @if($v->auth == '0')
                                class="cart_address_card addressCard qq"
                                @endif 

                                @if($v->auth == '1')

                                class="cart_address_card addressCard  qq selected"
                                @endif

                                cid="{{$v->id}}" uid="">

                                    <h5 class="cart_address_tit">
                                        {{$v->name}}
                                    </h5>
                                    <p class="cart_address_street">
                                        {{$v->address}}
                                    </p>
                                    <p class="cart_address_zipinfo" data-postcode="" data-province="北京市" data-city="北京市"
                                    data-area="海淀区">
                                        {{$v->diqu}}
                                    </p>
                                    <p class="cart_address_mobile">
                                        {{$v->tel}}
                                    </p>
                                    <span style="float: right;">
                                    	<form action="/home/cardizhido/{{$v->id}}" method="get">
                                    	<button>编辑</button>
                                    </form>
                                        
                                    </span>
                                </a>
                            </li>

                            @endforeach
                        </ul>
                         
                        <!-- 管理收获地址 -->
                        <ul class="cart_address_ctrl clearfix" id="addressCtrl">
                            
                            <li>
                                <a href="/home/dizhiindex" target="_blank">
                                    管理收货地址
                                </a>
                            </li>
                            <li>
                                <a href="/home/dizhiedit" class="addOtherAddress">
                                    使用新地址
                                </a>
                            </li>
                        </ul>
                        <div id="J_otherAddrWrap">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer显示价格 -->
            <div>
                <div class="cart_paybar">

                    <a href="/home/orderddxq" class="cart_surebtn fr">
                        确认去付款 &gt;

                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if($arr == 0 )
   

<link href="/home/dizhi/index.css-709a8a6f.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/home/dizhi/bottom.css"
media="all">
<link href="/home/dizhi/index.css-aff6006a.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="/sanji/pick-pcc.min.1.0.1.css">

<body class="media_screen_1200">
    <div id="pay_info">
        <div class="g-wrap wrap">
            <div class="cart_wrap">
                <!-- 页面内容 -->
                <div class="cart_page_wrap pt0">
                    <h2 class="cart_stit">
                        选择收货地址
                    </h2>
                    <div class="cart_address_wrap" id="cartAddress">
                        <!-- 选择收获地址list -->
                        <ul class="cart_address_list clearfix" id="cartAddressList">
                        </ul>
                        <!-- 管理收获地址 -->
                        <ul class="cart_address_ctrl clearfix" id="addressCtrl">
                          
                            <li>
                                <a href="/home/dizhiindex" target="_blank">
                                    管理收货地址
                                </a>
                            </li>
                            <li>
                                <a href="/home/dizhiedit" class="addOtherAddress">
                                    使用新地址
                                </a>
                            </li>
                        </ul>
                        <div id="J_otherAddrWrap">
                            <div class="__addressPop">
                                <dl class="address_pop">
                                    <form action="/home/dizhiadd2/{{session('uid')}}" method="post" >
                                        {{csrf_field()}}
                                    <input type="hidden" class="J_addressid" name="uid" value="{{session('uid')}}">
                                    <dt>
                                        省：
                                    </dt>
                                    <dd class="pt_ie6hack">
                                        <i class="needicon">
                                            *
                                        </i>
                                        <style>
                        
                                        a{display:inline;}
                                        </style>
                    
                        <div class="a" >
                            <a href="javascript:void(0)" style="
                            display:block;
                            position:relative;
                            font-size:14px;
                            background:#fff;
                            text-decoration:none;
                            cursor:default;
                            " class="pick-area qwe" name="省\市\县/省\市/区\县" ></a>

                            <input type="text" value="" name="diqu" readonly style="margin-top: 15px;">
                        

                            <script src="/sanji/jquery-3.2.1.min.js"></script>
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
                                        
                                        
                                        
                                    </dd>
                                    <dt>
                                        邮政编码：
                                    </dt>
                                    <dd>
                                        <i class="needicon">
                                            *
                                        </i>
                                        <input type="text" 
                                        class="text formsize_normal J_postcode J_form vm" name="yzbm">
                                       
                                    </dd>
                                    <dt>
                                        街道地址：
                                    </dt>
                                    <dd>
                                        <i class="needicon">
                                            *
                                        </i>
                                        <textarea data-type="*" data-min="5" data-max="100"  class="textarea formsize_large J_street J_form "
                                        name="address" cols="30" rows="3" style="margin: 5px 0px; width: 672px; height: 45px;">
                                        </textarea>
                                       
                                    </dd>
                                    <dt>
                                        收货人姓名：
                                    </dt>
                                    <dd>
                                        <i class="needicon">
                                            *
                                        </i>
                                        <input type="text" data-type="*" data-errormsg="请填写收货人" data-normal=""
                                        class="text formsize_normal J_name J_form vm " name="name">
                                       
                                    </dd>
                                    <dt>
                                        手机：
                                    </dt>
                                    <dd>
                                        <i class="needicon">
                                            *
                                        </i>
                                        <input type="text" 
                                        class="text formsize_normal J_mobile J_form vm " name="tel">
                                       
                                    </dd>
                                    <dt>
                                    </dt>
                                    <dd class="pt10 oper_btn">
                                       
                                         <button class="confirm_btn J_okbtn mr10">添加完成</button>
                                        
                                    </dd>
                                    </form>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>



    @endif

</body>
<script>

	

	
	$('.cart_address_card').each(function(){
		$(this).click(function(){
			 $(this).addClass('selected');
			 var id = $(this).attr('cid');
			 var uid = {{$a}};
			 $.get('/home/cardizhi',{id:id,uid:uid},function(data){});
			 
			  $(this).parent().siblings().find('.qq').removeClass('selected');
		})
	})


</script>






@endsection