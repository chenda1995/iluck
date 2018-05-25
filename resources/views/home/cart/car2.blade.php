@extends('layout.home1')


@section('title',$title)



@section('content')


   
    
    <?php 
    $a = session('uid');
    $res = DB::table('address')->where('uid',$a)->get();

     ?>
    
    


<link href="/home/car/index.css-709a8a6f.css" rel="stylesheet" type="text/css">
<link href="/home/car/index.css-aff6006a.css" rel="stylesheet" type="text/css">
<body class="media_screen_1200">
    <div ></div>
    
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
                    <a href="javascript:;" class="cart_surebtn fr">
                        确认并付款 &gt;
                    </a>
                </div>
            </div>
        </div>
    </div>

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