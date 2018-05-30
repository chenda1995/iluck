

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
   
    <meta charset="UTF-8">
 
    
     <title>@yield('title')</title>

<link rel="stylesheet" type="text/css" href="/home/index_files/vpop.css" media="all"> 
<link rel="stylesheet" type="text/css" href="/home/index_files/pc_wall.css" media="all">
<link rel="stylesheet" href="/home/index_files/kJKdJ1VoF1t48p8ECXMUyqC.css">



 

</head>

<body class="media_screen_1200">




<!--右侧导航栏-->
<div style="right: 0px;" class="mgj_rightbar J_sidebar">
    <!--空的右侧边栏-->
    <div id="mgj_rightbar_top_blank" class="mgj_rightbar_960">
    </div>
    <!--方便定margin的空dediv-->
    <div id="mgj_rightbar_blank_div">
    </div>
    <!--用户头像-->
   
    <!--购物车-->
    <div style="left: 0px;" class="sidebar-item mgj-my-cart">
        <a target="_blank" href="	" rel="nofollow">
            <i class="s-icon">
            </i>
            <div class="s-txt">
                购物车
            </div>
            
        </a>
    </div>
    <!--优惠券-->
   
    <!--钱包-->
    
    <!--足迹-->
    
    <div class="sideBottom">
        <!--回到顶部-->
        <div style="left: 0px;" class="sidebar-item mgj-back2top">
            <a rel="nofollow" href="javascript:;">
                <i class="s-icon">
                </i>
            </a>
        </div>
    </div>
</div>

<div id="header" class="site-top-nav J_sitenav" data-ptp="_head" >
    <div class="wrap">
        <a href="/home/index" rel="nofollow" class="home fl">
            iluck首页
        </a>
        <ul class="header-top">
            <li class="s1 has-icon user-meta">
                <a rel="nofollow" href="javascript:;">
                    wx_m6kpq3hmynfj4
                </a>
                <a rel="nofollow" href="#" target="_blank">
                </a>
                <i class="icon-delta">
                </i>
                <ol class="ext-mode" id="menu-personal">
                    <li class="s2">
                        <a target="_blank" rel="nofollow" href="/home/userdetails">
                            个人设置
                        </a>
                    </li>
                    <li class="s2">
                        <a rel="nofollow" href="/home/loginout">
                            退出
                        </a>
                    </li>
                </ol>
            </li>
          
            <li class="s1 has-icon has-line user-fav">
                <a rel="nofollow" href="javascript:;">
                    我的收藏
                </a>
                <i class="icon-delta">
                </i>
                <ul class="ext-mode">
                    <li class="s2">
                        <a target="_blank" rel="nofollow" href="">
                            收藏的商品
                        </a>
                    </li>
                </ul>
            </li>
                    
                    
            <li class="s1 myorder has-line">
                <a href="/home/orderindex" target="_blank" class="text display_u"
                rel="nofollow">
                    我的订单
                </a>
            </li>
            <li class="s1 has-line shopping-cart-v2">
                <a class="cart-info-wrap" href="/home/cart" target="_blank"
                rel="nofollow">
                    <span class="cart-info">
                        购物车
                        
                    </span>
                </a>
                <i class="icon-delta">
                </i>
                <span class="shopping-cart-loading">
                </span>
            </li>
           
            
        </ul>
    </div>
</div>

<!-- 中间区域 -->




@section('content')



@show

<!--end-->

<div class="foot">
            
               
               
                      <?php $fl = DB::table('connect')->get(); ?>
                
                     <span style="margin-left: 150px;">
                    @foreach($fl as $k=>$v)
                   <a href="{{$v->curl}}" target="_blank" style="margin-left: 20px;">{{$v->cname}}</a>
                    @endforeach
                    </span>
                
                    

             

            <br>
        <center>  
            <div style="margin-top: 70px;">
             <span class="xukezheng">
                        IPC备案号：晋ICP备18004132号-1
                    </span>
                    <p class="xukezheng">
                    ©2015 iluck.club 
                    </p>
                </center>
            </div>
            
               

            </div>




<!-- 添加ga统计信息 -->






</body></html>