
@extends('layout.home')

@section('content')



        <div class="head-main">
            <img class="logo" src="/home/sycss/image/head-top-logo.png" />
            <span class="s1">搜商品<div class="ss1">店铺</div></span>
            <input class="s2" type="text"  value="既保暖性又时尚感棉服"/>
            <input class="s3" type="button" />
             <div class="sao">
            <img src="/home/sycss/image/leftlogin.png" style="width:160px;height:80px" />
            <span class="mgj">蘑菇街客户端</span>
        </div>        
        <ul>
            <li><a href="#">毛衣</a></li>
            <li><a href="#">雪地靴</a></li> 
            <li><a href="#">羽绒服</a></li>
            <li><a href="#">毛呢外套</a></li> 
            <li><a href="#">连衣裙</a></li> 
            <li><a href="#">家居服</a></li> 
            <li><a href="#">打底裤</a></li> 
            <li><a href="#">包包</a></li> 
            <li><a href="#">打底衫</a></li>
        </ul>  
        </div>  
        <div class="head-foot">
            
            <ul class="daohang">
                <li class="sk">全部商品</li>
                <li><a href="#">团购</a></li>
                <li><a href="#">品牌</a></li>
                <li><a href="#">海淘馆</a></li>
                <li><a href="#">红人Bazaar</a></li>
            </ul>
        </div> 
    </div>
    <div class="banner">
<!--    banner左侧结构=======================================-->
        <div class="left">
        <!--左侧导航栏-->
               @foreach($res as $k=>$v)
            <ul class="ul">
              <div class="left-tanchuang left-tanchuang2">
                            <dl>
                                <dt><a href="#">新品发布</a></dt>
                                <dd>
                                @foreach($v->type as $kk=>$vv)
                                    @if($kk==0) 
                                    <ul class="clearfix">
                                        @foreach($vv->type as $kkk=>$vvv)
                                        <li><a href="list/{{$v->cid}}">{{$vvv->cname}}</a></li>
                                        @endforeach   
                                    </ul> 
                                 </dd>
                                <dt><a href="#">当季热卖</a></dt>
                                    @elseif($kk==1)
                                    <ul class="clearfix">
                                        @foreach($vv->type as $kkk=>$vvv)
                                        <li><a href="list/{{$v->cid}}">{{$vvv->cname}}</a></li>
                                        @endforeach  
                                    </ul>  
                                <dt><a href="#">女神最爱</a></dt>
                                    @elseif($kk==2)
                                    <ul class="clearfix">
                                        @foreach($vv->type as $kkk=>$vvv)
                                        <li><a href="list/{{$v->cid}}">{{$vvv->cname}}</a></li>
                                        @endforeach   
                                    </ul>  
                                    @endif  
                                @endforeach  
                                <div class="xiao-banner"><a href="#"><img src="/home/index/image/xiao-banner2.jpg" /></a></div>
                            </dl>
                    </div> 
                 <li class="li">
                  <dl>
                      <dt class="dt"><a class="a" href="list/{{$v->cid}}">{{$v->cname}}</a></dt>
                    @foreach($v->type as $kk=>$vv)
                        <dd class="dd"><a class="a"  href="list/{{$v->cid}}">{{$vv->cname}}</a><ins></ins>
                    @endforeach
                    </dl>
                </li>
            </ul>
            @endforeach
        </div>


        <!-- 右侧展示banner -->
        <div class="right">
            <!-- <img src="/home/sycss/image/banner.gif" /> -->
            
            
                <ul class="slide-show">
                    <li><a href="#"><img src="" alt="" / style="width: 875px;height: 550px"></a></li>
       

            </ul>
            <img class="banner-left" src="/home/sycss/image/banner-left.png" />
            <img class="banner-right" src="/home/sycss/image/banner-right.png" />

            <ol class="p-box">
                <li class="current"><img src="/home/sycss/image/point40x40.png" width="20px" alt="" /></li>
                <li><img src="/home/sycss/image/point40x40.png" width="20px" alt="" /></li>
                <li><img src="/home/sycss/image/point40x40.png" width="20px" alt="" /></li>
                <li><img src="/home/sycss/image/point40x40.png" width="20px" alt="" /></li>
                <li><img src="/home/sycss/image/point40x40.png" width="20px" alt="" /></li>
                <li><img src="/home/sycss/image/point40x40.png" width="20px" alt="" /></li>
            </ol>

         
            
        </div>
    </div>
<!--main1-->
    <div class="main1">
        <div class="one" id="divdown1">
            <span class="xsg"></span>
            <ul class="daojishi">
                <li></li>
                <li>:</li>
                <li></li>
                <li>:</li>
                <li></li>
            </ul>            
            <img src="/home/sycss/image/main1-daojishi_640x640.jpg" alt="" />
        </div>
        <div class="two">
            <a href="#"><img src="/home/sycss/image/main1-two.png" /></a>
        </div>
        <div class="three">
            <a href="#"><img src="/home/sycss/image/main1-three-1.png" /></a>
            <a href="#"><img class="zs2" src="/home/sycss/image/main1-three-2.png" /></a>
        </div>
    </div>
<!--main2-->
    <div class="main2 banxin">
        <div class="title banxin">
        
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
            <div class="ppg-wz">
            </div>
            
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
        </div>
        <div class="ppg">
            <div class="ppg-1"><a href="/home/list"><img src="/home/sycss/image/ppg-1.png" width="223" height="254" /></a></div>
            <div class="ppg-2"><a href="#"><img src="/home/sycss/image/ppg-2.png" width="111" height="60" /></a></div>
            <div class="ppg-3"><a href="#"><img src="/home/sycss/image/ppg-3.png" width="111" height="60" /></a></div>
            <div class="ppg-4"><a href="#"><img src="/home/sycss/image/ppg-4.png" width="111" height="60" /></a></div>
            <div class="ppg-5"><a href="#"><img src="/home/sycss/image/ppg-5.png" width="111" height="60" /></a></div>
            <div class="ppg-6"><a href="#"><img src="/home/sycss/image/ppg-6.png" width="111" height="60" /></a></div>
            <div class="ppg-7"><a href="#"><img src="/home/sycss/image/ppg-7.png" width="111" height="60" /></a></div>
            <div class="ppg-8"><a href="#"><img src="/home/sycss/image/ppg-8.png" width="111" height="60" /></a></div>
            <div class="ppg-9"><a href="#"><img src="/home/sycss/image/ppg-9.png" width="111" height="60" /></a></div>
            <div class="ppg-10"><a href="#"><img src="/home/sycss/image/ppg-10.png"/></a></div>
            <div class="ppg-11"><a href="#"><img src="/home/sycss/image/ppg-11.png"/></a></div>
            <div class="ppg-12"><a href="#"><img src="/home/sycss/image/ppg-14.png"/></a></div>
            <div class="ppg-13"><a href="#"><img src="/home/sycss/image/ppg-13.png"/></a></div>
            <div class="ppg-14"><a href="#"><img src="/home/sycss/image/ppg-12.png"/></a></div>
       </div>
    
    </div>
<!--main3/////////////////////////////-->
    <div class="main3 banxin">
        <div class="title banxin">
        
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
            <div class="xs-wz">
            </div>
            
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
        </div>
        <div class="xs">
            <div class="xs-1"><a href="#"><img src="/home/sycss/image/xs-1.jpg" width="223" height="254" /></a></div>
            <div class="xs-2"><a href="#"><img src="/home/sycss/image/xs-2.jpg" width="111" height="60" /></a></div>
            <div class="xs-3"><a href="#"><img src="/home/sycss/image/xs-3.jpg" width="111" height="60" /></a></div>
            <div class="xs-4"><a href="#"><img src="/home/sycss/image/xs-4.jpg" width="111" height="60" /></a></div>
            <div class="xs-5"><a href="#"><img src="/home/sycss/image/xs-5.jpg" width="111" height="60" /></a></div>
            <div class="xs-6"><a href="#"><img src="/home/sycss/image/xs-6.jpg" width="111" height="60" /></a></div>
            <div class="xs-7"><a href="#"><img src="/home/sycss/image/xs-7.jpg" width="111" height="60" /></a></div>
            <div class="xs-8"><a href="#"><img src="/home/sycss/image/xs-8.jpg" width="111" height="60" /></a></div>
            <div class="xs-9"><a href="#"><img src="/home/sycss/image/xs-9.jpg" width="111" height="60" /></a></div>
            <div class="xs-10"><a href="#"><img src="/home/sycss/image/xs-10.jpg"/></a></div>
            <div class="xs-11"><a href="#"><img src="/home/sycss/image/xs-11.png"/></a></div>
            <div class="xs-12"><a href="#"><img src="/home/sycss/image/xs-12.png"/></a></div>
            <div class="xs-13"><a href="#"><img src="/home/sycss/image/xs-13.png"/></a></div>
            <div class="xs-14"><a href="#"><img src="/home/sycss/image/xs-14.png"/></a></div>
       </div>
     </div>
<!--main4/////////////////////////////-->
    <div class="main4 banxin">
        <div class="title banxin">
        
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
            <div class="ht-wz">
            </div>
            
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
        </div>
        <div class="ht">
            <div class="box-left">
                    <div class="ht1"><a href="#"><img src="/home/sycss/image/ht-1.png" /></a></div>
                    <div class="ht2"><a href="#"><img src="/home/sycss/image/ht-2.png" /></a></div>
                    <ul>
                        <li><a href="#">卸妆</a></li>
                        <li><a href="#">KS</a></li>
                        <li><a href="#">手表</a></li>
                        <li><a href="#">口红</a></li>
                        <li><a href="#">精华</a></li>
                        <li><a href="#">面膜</a></li>
                        <li><a href="#">伊思</a></li>
                        <li><a href="#">耳钉</a></li>
                        <li><a href="#">手链</a></li>
                    
                    </ul>
            </div>
            <div class="box-right">
                <div class="ul-boxj">
                    <div class="ul-box clearfix">
                        <div class="box-right-l box-right-r">
                            <div class="ht3"><a href="#"><img src="/home/sycss/image/ht-3.jpg" /></a></div>
                            <a href="#"><div class="ht4"><img src="/home/sycss/image/ht-4.png" />                    
                            <span>GNC健安喜<br /><i>美国第一保健品牌！</i></span>                    
                            </div></a>
                        </div>
                        <div class="box-right-l box-right-r">
                            <div class="ht3"><a href="#"><img src="/home/sycss/image/ht-5.jpg" /></a></div>
                            <a href="#"><div class="ht4"><img src="/home/sycss/image/ht-6.png" />                    
                            <span>小家电<br /><i>全球热门电子小家用！</i></span>                    
                            </div></a>
                        </div>
                        <!-- 轮播效果 -->
                        <div class="box-right-l box-right-r">
                            <div class="ht3"><a href="#"><img src="/home/sycss/image/ht-3.jpg" /></a></div>
                            <a href="#"><div class="ht4"><img src="/home/sycss/image/ht-4.png" />                    
                            <span>GNC健安喜<br /><i>美国第一保健品牌！</i></span>                    
                            </div></a>
                        </div>
                        <div class="box-right-l box-right-r">
                            <div class="ht3"><a href="#"><img src="/home/sycss/image/ht-5.jpg" /></a></div>
                            <a href="#"><div class="ht4"><img src="/home/sycss/image/ht-6.png" />                    
                            <span>小家电<br /><i>全球热门电子小家用！</i></span>                    
                            </div></a>
                        </div>
                    </div>
                </div>
                <div class="jt1"></div>
                <div class="jt2"></div>
            </div>
        </div>
    
    </div>
<!--main5/////////////////////////////-->
    <div class="main5 banxin">
        <div class="title banxin">
        
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
            <div class="hr-wz">
            </div>
            
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
        </div>
        <div class="hr">
            <div class="box-left">
                    <div class="hr1"><a href="#"><img src="/home/sycss/image/hr-1.jpg" /></a></div>
                    <div class="hr2"><a href="#"><img src="/home/sycss/image/hr-2.jpg" /></a></div>
                    <ul>
                        <li><a href="#">男友频道</a></li>
                        <li><a href="#">美妆频道</a></li>
                        <li><a href="#">模特频道</a></li>
                        <li><a href="#">萌妹频道</a></li>
                        <li><a href="#">中性频道</a></li>
                        <li><a href="#">极简频道</a></li>
                    
                    </ul>
            </div>
            <div class="box-right">
                <div class="box-right-l">
                    <div class="hr3"><a href="#"><img src="/home/sycss/image/hr-3.jpg" /></a></div>
                    <a href="#"><div class="hr4"><img src="/home/sycss/image/hr-4.jpg" />                    
                    <span>冬日加分项甜美连衣裙<br /><i>女神气质即可拥有！</i></span>                   
                    </div></a>
                </div>
                <div class="box-right-l box-right-r">
                    <div class="hr3"><a href="#"><img src="/home/sycss/image/hr-5.jpg" /></a></div>
                    <a href="#"><div class="hr4"><img src="/home/sycss/image/hr-6.jpg" />                   
                    <span>降温季囤货指南<br /><i>温暖外套降温必备！</i></span>                   
                    </div></a>
                </div>
                <div class="jt1"></div>
                <div class="jt2"></div>
            </div>
        </div>
    
    </div>
<!--main6/////////////////////////////-->
    <div class="main6 banxin">
        <div class="title banxin">
        
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
            <div class="hh-wz">
            </div>
            
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
        </div>
        <div class="hh">
            <div class="hh-1"><a href="#"><img src="/home/sycss/image/hh-1.jpg" width="223" height="254" /></a></div>
            <div class="hh-2"><a href="#"><img src="/home/sycss/image/hh-2.jpg" width="111" height="60" /></a></div>
            <div class="hh-3"><a href="#"><img src="/home/sycss/image/hh-3.jpg" width="111" height="60" /></a></div>
            <div class="hh-4"><a href="#"><img src="/home/sycss/image/hh-4.jpg" width="111" height="60" /></a></div>
            <div class="hh-5"><a href="#"><img src="/home/sycss/image/hh-5.jpg" width="111" height="60" /></a></div>
            <div class="hh-6"><a href="#"><img src="/home/sycss/image/hh-6.jpg" width="111" height="60" /></a></div>
            <div class="hh-7"><a href="#"><img src="/home/sycss/image/hh-7.jpg" width="111" height="60" /></a></div>
            <div class="hh-8"><a href="#"><img src="/home/sycss/image/hh-8.jpg" width="111" height="60" /></a></div>
            <div class="hh-9"><a href="#"><img src="/home/sycss/image/hh-9.jpg" width="111" height="60" /></a></div>
            <div class="hh-10"><a href="#"><img src="/home/sycss/image/hh-10.jpg"/></a></div>
            <div class="hh-11"><a href="#"><img src="/home/sycss/image/hh-11.png"/></a></div>
            <div class="hh-12"><a href="#"><img src="/home/sycss/image/hh-12.png"/></a></div>
            <div class="hh-13"><a href="#"><img src="/home/sycss/image/hh-13.png"/></a></div>
            <div class="hh-14"><a href="#"><img src="/home/sycss/image/hh-14.png"/></a></div>
       </div>
     </div>
<!--main7/////////////////////////////-->
    <div class="main7 banxin">
        <div class="title banxin">
        
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
            <div class="sm-wz">
            </div>
            
            <div class="title1">
                <div class="title2">
                    <div class="title3">
                    </div>
                </div>          
            </div>
            
        </div>
        <div class="sm">
            <div class="sm-1"><a href="#"><img src="/home/sycss/image/sm-1.jpg" width="223" height="254" /></a></div>
            <div class="sm-2"><a href="#"><img src="/home/sycss/image/sm-2.jpg" width="111" height="60" /></a></div>
            <div class="sm-3"><a href="#"><img src="/home/sycss/image/sm-3.jpg" width="111" height="60" /></a></div>
            <div class="sm-4"><a href="#"><img src="/home/sycss/image/sm-4.jpg" width="111" height="60" /></a></div>
            <div class="sm-5"><a href="#"><img src="/home/sycss/image/sm-5.jpg" width="111" height="60" /></a></div>
            <div class="sm-6"><a href="#"><img src="/home/sycss/image/sm-6.jpg" width="111" height="60" /></a></div>
            <div class="sm-7"><a href="#"><img src="/home/sycss/image/sm-7.jpg" width="111" height="60" /></a></div>
            <div class="sm-8"><a href="#"><img src="/home/sycss/image/sm-8.jpg" width="111" height="60" /></a></div>
            <div class="sm-9"><a href="#"><img src="/home/sycss/image/sm-9.jpg" width="111" height="60" /></a></div>
            <div class="sm-10"><a href="#"><img src="/home/sycss/image/sm-10.jpg"/></a></div>
            <div class="sm-11"><a href="#"><img src="/home/sycss/image/sm-11.png"/></a></div>
            <div class="sm-12"><a href="#"><img src="/home/sycss/image/sm-12.png"/></a></div>
            <div class="sm-13"><a href="#"><img src="/home/sycss/image/sm-13.png"/></a></div>
            <div class="sm-14"><a href="#"><img src="/home/sycss/image/sm-14.png"/></a></div>
       </div>
     </div>
  










@endsection

