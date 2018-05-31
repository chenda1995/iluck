@extends('layout.home')

@section('content')


<body class="media_screen_1200">

        <div class="promotionTopNavContainer">
        </div>
            
        <div class="attention_nav">
            <div class="nav_container clearfix">
                <a href="javascript:;" class="attention_logo">
                    我的收藏
                </a>
                <ul class="nav_ctrl">
                    <li class="fst">
                        <a href="javascript:;">
                            收藏的店铺
                        </a>
                    </li>
                    <li >
                        <a href="javascript:;">
                            收藏的商品
                        </a>
                    </li>
                    <li class="on">
                        <a href="javascript:;">
                           我的足迹
                        </a>
                    </li>
                </ul>
            </div>
        </div>
     
         <div id="body_wrap">
                <div class="mu_wrap wrap clearfix">
                    @foreach($res as $k=>$v)
                    <div id="imagewall_container">
                        <div class="iwf goods_item" data-tradeitemid="617555070">
                            <a rel="nofollow" href="/home/spxq/{{$k}}"
                            class="img" target="_blank">
                                <img src="{{URL::asset($v['gpic'][0])}}"
                                alt="新百伦新款女鞋580系列复古休闲运动鞋WRT580PB/PA">
                            </a>
                         
                            <p class="title">
                                <a rel="nofollow" href="javascript:;"
                                target="_blank" style="width:220px">
                                    {{$v['gname']}}
                                </a>
                            </p>
                            <div class="goods_info">
                                <b class="price_info">
                                    {{$v['price']}}
                                </b>
                                <span class="fav_num">
                                    33
                                    <img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%97%8F_files/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png"
                                    alt="">
                                </span>
                            </div>
                          
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
           </div>
        </div>

        <script type="text/javascript" src="/home/%E6%88%91%E7%9A%84%E6%94%B6%E8%97%8F_files/index_002.js">
        </script>
        <script type="text/javascript" src="/home/%E6%88%91%E7%9A%84%E6%94%B6%E8%97%8F_files/bottom.js">
        </script>
        <script type="text/javascript" src="/home/%E6%88%91%E7%9A%84%E6%94%B6%E8%97%8F_files/index.js">
        </script>
        
    </body>
@endsection