@extends('layout.home')

@section('title',$title)


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
                    <li class="on">
                        <a href="javascript:;">
                            收藏的商品
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            足迹
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="body_wrap">
            <div class="mu_wrap wrap clearfix">
                <ul id="filter">
                    <li class="active">
                        全部
                    </li>
                    <li>
                        降价中
                    </li>
                    <li>
                        低库存
                    </li>
                    <li>
                        已失效 
                    </li>
                </ul>
                
                <div id="imagewall_container">
                    @foreach($data as $v)
                    <div class="iwf goods_item" data-tradeitemid="617555070">
                        <a rel="nofollow" href="javascript:;"
                        class="img" target="_blank">
                            <img src="{{$v->gimg}}" alt="" style="width:220px;height: 405px">
                        </a>
                        <p class="title">
                            <a rel="nofollow" href="javascript:;"
                            target="_blank" style="width:220px">
                                {{$v->gname}}
                            </a>
                        </p>
                        <div class="goods_info">
                            <b class="price_info">
                                ￥{{$v->price}}
                            </b>
                        </div>
                    </div>
                   @endforeach
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