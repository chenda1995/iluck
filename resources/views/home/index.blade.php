
@extends('layout.home')

@section('title',$title)


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
            <ul class="ul">
                <div class="left-tanchuang">
                            <dl>
                                <dt><a href="#">新品发布</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">新款外套</a></li>
                                        <li><a class="red" href="#">羽绒服</a></li>
                                        <li><a href="#">毛呢外套</a></li>
                                        <li><a href="#">毛衣</a></li>
                                        <li><a href="#">卫衣</a></li>
                                        <li><a href="#">针织衫</a></li>
                                        <li><a href="#">时尚套装</a></li>
                                        <li><a href="#">风衣</a></li>
                                        <li><a href="#">衬衫</a></li>
                                        <li><a href="#">长袖T恤</a></li>
                                        <li><a href="#">棒球外套</a></li>
                                        <li><a href="#">牛仔外套</a></li>
                                        <li><a href="#">开衫</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">当季热卖</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">打底衫</a></li>
                                        <li><a class="red" href="#">御寒长款</a></li>
                                        <li><a href="#">套头衫</a></li>
                                        <li><a href="#">保暖短款</a></li>
                                        <li><a href="#">纯棉衬衫</a></li>
                                        <li><a href="#">格纹衬衫</a></li>
                                        <li><a href="#">毛呢外套</a></li>
                                        <li><a href="#">蕾丝衫</a></li>
                                        <li><a href="#">运动套装</a></li>
                                        <li><a href="#">西装外套</a></li>
                                        <li><a href="#">雪纺衫</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">流行元素</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">太空棉</a></li>
                                        <li><a href="#">廓形</a></li>
                                        <li><a href="#">条纹</a></li>
                                        <li><a href="#">格子</a></li>
                                        <li><a href="#">印花</a></li>
                                        <li><a class="red" href="#">流苏</a></li>
                                        <li><a href="#">字母</a></li>
                                        <li><a href="#">蕾丝</a></li>
                                        <li><a href="#">波点</a></li>
                                        <li><a href="#">纯色</a></li>
                                        <li><a href="#">前短后长</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/home/sycss/image/xiao-banner1.jpg"  /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">上衣</a></dt>
                        <dd class="dd"><a class="a red" href="#">冬季热卖</a><ins></ins><a class="a" href="#">棉衣</a><ins></ins><a class="a" href="#">必备内搭</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang2">
                            <dl>
                                <dt><a href="#">新品发布</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">针织裙</a></li>
                                        <li><a class="red" href="#">韩范美裙</a></li>
                                        <li><a href="#">半身裙</a></li>
                                        <li><a href="#">毛衣裙</a></li>
                                        <li><a href="#">毛呢裙</a></li>
                                        <li><a href="#">包臀裙</a></li>
                                        <li><a href="#">收腰裙</a></li>
                                        <li><a href="#">衬衫裙</a></li>
                                        <li><a href="#">牛仔裙</a></li>
                                        <li><a href="#">长袖连衣裙</a></li>
                                        <li><a href="#">卫衣裙</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">当季热卖</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">裙子套装</a></li>
                                        <li><a class="red" href="#">连衣裙</a></li>
                                        <li><a href="#">T恤裙</a></li>
                                        <li><a href="#">背带裙</a></li>
                                        <li><a href="#">针织裙</a></li>
                                        <li><a href="#">气质美裙</a></li>
                                        <li><a href="#">伞裙</a></li>
                                        <li><a href="#">长裙</a></li>
                                        <li><a href="#">小白裙</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">女神最爱</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">甜美</a></li>
                                        <li><a href="#">时尚套装</a></li>
                                        <li><a href="#">韩范</a></li>
                                        <li><a href="#">气质</a></li>
                                        <li><a href="#">清新女神</a></li>
                                        <li><a class="red" href="#">一步裙</a></li>
                                        <li><a href="#">飘逸长裙</a></li>
                                        <li><a href="#">流苏</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner2.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">裙子</a></dt>
                        <dd class="dd"><a class="a"  href="#">冬季美裙</a><ins></ins><a class="a red" href="#">套装</a><ins></ins><a class="a" href="#">连衣裙</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang3">
                            <dl>
                                <dt><a href="#">新品发布</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">显瘦裤子榜</a></li>
                                        <li><a class="red" href="#">小脚裤</a></li>
                                        <li><a href="#">打底裤</a></li>
                                        <li><a href="#">背带裤</a></li>
                                        <li><a href="#">高腰裤</a></li>
                                        <li><a href="#">阔腿裤</a></li>
                                        <li><a href="#">休闲裤</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">当季热卖</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">显瘦牛仔裤</a></li>
                                        <li><a class="red" href="#">小脚牛仔裤</a></li>
                                        <li><a href="#">高腰牛仔裤</a></li>
                                        <li><a href="#">牛仔背带裤</a></li>
                                        <li><a href="#">黑色牛仔裤</a></li>
                                        <li><a href="#">纯棉打底裤</a></li>
                                        <li><a href="#">显瘦休闲裤</a></li>
                                        <li><a href="#">韩版短裤</a></li>
                                        <li><a href="#">显瘦皮裤</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">流行元素</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">修身显瘦</a></li>
                                        <li><a href="#">韩版</a></li>
                                        <li><a href="#">纯棉</a></li>
                                        <li><a href="#">高腰</a></li>
                                        <li><a href="#">直筒</a></li>
                                        <li><a class="red" href="#">阔腿</a></li>
                                        <li><a href="#">灯笼</a></li>
                                        <li><a href="#">蕾丝</a></li>
                                        <li><a href="#">卡通</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner3.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">裤子</a></dt>
                        <dd class="dd"><a class="a" href="#">冬上新</a><ins></ins><a class=" a red" href="#">加绒打底</a><ins></ins><a class="a" href="#">牛仔裤</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang4">
                            <dl>
                                <dt><a href="#">内衣</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">新款外套</a></li>
                                        <li><a class="red" href="#">内衣套装</a></li>
                                        <li><a href="#">调整型内衣</a></li>
                                        <li><a href="#">文胸</a></li>
                                        <li><a href="#">内裤</a></li>
                                        <li><a href="#">保暖内衣</a></li>
                                        <li><a href="#">无痕内衣</a></li>
                                        <li><a href="#">性感内衣</a></li>
                                        <li><a href="#">运动内衣</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">家居睡衣</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">冬季睡衣</a></li>
                                        <li><a class="red" href="#">珊瑚绒</a></li>
                                        <li><a href="#">家居服</a></li>
                                        <li><a href="#">睡裙</a></li>
                                        <li><a href="#">甜美家居服</a></li>
                                        <li><a href="#">情侣睡衣</a></li>
                                        <li><a href="#">睡袍</a></li>
                                        <li><a href="#">性感睡衣</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">袜子</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">短袜</a></li>
                                        <li><a href="#">瘦腿袜</a></li>
                                        <li><a href="#">打底袜</a></li>
                                        <li><a href="#">堆堆袜</a></li>
                                        <li><a href="#">过膝袜</a></li>
                                        <li><a class="red" href="#">连裤袜</a></li>
                                        <li><a href="#">丝袜</a></li>
                                        <li><a href="#">船袜</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner4.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">内衣</a></dt>
                        <dd class="dd"><a class="a red" href="#">内衣套装</a><ins></ins><a class="a" href="#">初冬睡衣</a><ins></ins><a class="a" href="#">内裤</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang5">
                            <dl>
                                <dt><a href="#">当季热卖</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">雪地靴</a></li>
                                        <li><a class="red" href="#">短靴</a></li>
                                        <li><a href="#">运动鞋</a></li>
                                        <li><a href="#">高跟短靴</a></li>
                                        <li><a href="#">及踝靴</a></li>
                                        <li><a href="#">流苏靴</a></li>
                                        <li><a href="#">马丁靴</a></li>
                                        <li><a href="#">增高鞋</a></li>
                                        <li><a href="#">切尔西靴</a></li>
                                        <li><a href="#">单鞋</a></li>
                                        <li><a href="#">豆豆鞋</a></li>
                                        <li><a href="#">厚底鞋</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">热门推荐</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">长靴</a></li>
                                        <li><a class="red" href="#">N字鞋</a></li>
                                        <li><a href="#">好货</a></li>
                                        <li><a href="#">坡跟鞋</a></li>
                                        <li><a href="#">平底靴</a></li>
                                        <li><a href="#">中筒靴</a></li>
                                        <li><a href="#">懒人鞋</a></li>
                                        <li><a href="#">运动跑鞋</a></li>
                                        <li><a href="#">高帮鞋</a></li>
                                        <li><a href="#">中跟单鞋</a></li>
                                        <li><a href="#">牛津鞋</a></li>
                                        <li><a href="#">松糕鞋</a></li>
                                        <li><a href="#">圆头鞋</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">经典直击</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">明星同款</a></li>
                                        <li><a href="#">复古擦色</a></li>
                                        <li><a href="#">韩范</a></li>
                                        <li><a href="#">欧美范</a></li>
                                        <li><a href="#">学生党</a></li>
                                        <li><a class="red" href="#">情侣款</a></li>
                                        <li><a href="#">系带款</a></li>
                                        <li><a href="#">运动风</a></li>
                                        <li><a href="#">舒适平底</a></li>
                                        <li><a href="#">板鞋</a></li>
                                        <li><a href="#">机车靴</a></li>
                                        <li><a href="#">套脚</a></li>
                                        <li><a href="#">拉链款</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner5.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">鞋子</a></dt>
                        <dd class="dd"><a class="a red" href="#">雪地靴</a><ins></ins><a class="a" href="#">短靴</a><ins></ins><a class="a" href="#">运动鞋</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang6">
                            <dl>
                                <dt><a href="#">男装</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">棉服</a></li>
                                        <li><a class="red" href="#">毛衣</a></li>
                                        <li><a href="#">休闲裤</a></li>
                                        <li><a href="#">毛呢外套</a></li>
                                        <li><a href="#">夹克衫</a></li>
                                        <li><a href="#">风衣</a></li>
                                        <li><a href="#">牛仔裤</a></li>
                                        <li><a href="#">卫衣</a></li>
                                        <li><a href="#">运动裤</a></li>
                                        <li><a href="#">羽绒服</a></li>
                                        <li><a href="#">衬衫</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">男鞋</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">皮鞋</a></li>
                                        <li><a class="red" href="#">运动鞋</a></li>
                                        <li><a href="#">休闲鞋</a></li>
                                        <li><a href="#">靴子</a></li>
                                        <li><a href="#">帆布鞋</a></li>
                                        <li><a href="#">板鞋</a></li>
                                        <li><a href="#">高帮鞋</a></li>
                                        <li><a href="#">豆豆鞋</a></li>
                                        <li><a href="#">跑步鞋</a></li>
                                        <li><a href="#">家居鞋</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">包配</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">皮带</a></li>
                                        <li><a href="#">男袜</a></li>
                                        <li><a href="#">胸包</a></li>
                                        <li><a href="#">钱包卡套</a></li>
                                        <li><a href="#">双肩包</a></li>
                                        <li><a class="red" href="#">手表</a></li>
                                        <li><a href="#">单肩包</a></li>
                                        <li><a href="#">手提包</a></li>
                                        <li><a href="#">帽子</a></li>
                                        <li><a href="#">围巾</a></li>
                                        <li><a href="#">棒球帽</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner6.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">男友</a></dt>
                        <dd class="dd"><a class="a" href="#">毛衣</a><ins></ins><a class="a" href="#">运动鞋</a><ins></ins><a class="a red" href="#">羽绒服</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang7">
                            <dl>
                                <dt><a href="#">热门</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">新品</a></li>
                                        <li><a class="red" href="#">双肩包</a></li>
                                        <li><a href="#">斜挎包</a></li>
                                        <li><a href="#">手提包</a></li>
                                        <li><a href="#">单肩包</a></li>
                                        <li><a href="#">百搭大包</a></li>
                                        <li><a href="#">迷你小包</a></li>
                                        <li><a href="#">复古包</a></li>
                                        <li><a href="#">旅行箱包</a></li>
                                        <li><a href="#">钱包</a></li>
                                        <li><a href="#">香风链条</a></li>
                                        <li><a href="#">牛仔外套</a></li>
                                        <li><a href="#">手拿包</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">款式</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">双肩包</a></li>
                                        <li><a class="red" href="#">斜挎包</a></li>
                                        <li><a href="#">单肩包</a></li>
                                        <li><a href="#">手提包</a></li>
                                        <li><a href="#">钱包</a></li>
                                        <li><a href="#">旅行箱</a></li>
                                        <li><a href="#">手拿包</a></li>
                                        <li><a href="#">帆布包</a></li>
                                        <li><a href="#">mini小包</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">流行</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">链条包</a></li>
                                        <li><a href="#">贝壳包</a></li>
                                        <li><a href="#">水桶包</a></li>
                                        <li><a href="#">方形包</a></li>
                                        <li><a href="#">复古包</a></li>
                                        <li><a class="red" href="#">卡通包</a></li>
                                        <li><a href="#">铆钉包</a></li>
                                        <li><a href="#">邮差包</a></li>
                                        <li><a href="#">子母包</a></li>
                                        <li><a href="#">印花包</a></li>
                                        <li><a href="#">帆布包</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner7.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">包包</a></dt>
                        <dd class="dd"><a class="a red" href="#">暖冬热销</a><ins></ins><a class="a red" href="#">双肩</a><ins></ins><a class="a" href="#">斜跨</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang8">
                            <dl>
                                <dt><a href="#">必备护肤</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">洁面</a></li>
                                        <li><a class="red" href="#">面膜</a></li>
                                        <li><a href="#">水乳</a></li>
                                        <li><a href="#">眼唇护理</a></li>
                                        <li><a href="#">T区护理</a></li>
                                        <li><a href="#">护唇膏</a></li>
                                        <li><a href="#">精华</a></li>
                                        <li><a href="#">护肤套装</a></li>
                                        <li><a href="#">防晒</a></li>
                                        <li><a href="#">男士护肤</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">潮流彩妆</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">妆前隔离</a></li>
                                        <li><a class="red" href="#">BB霜</a></li>
                                        <li><a href="#">遮瑕粉底</a></li>
                                        <li><a href="#">腮红</a></li>
                                        <li><a href="#">阴影高光</a></li>
                                        <li><a href="#">定妆散粉</a></li>
                                        <li><a href="#">口红</a></li>
                                        <li><a href="#">眼妆</a></li>
                                        <li><a href="#">眉笔</a></li>
                                        <li><a href="#">美妆工具</a></li>
                                        <li><a href="#">彩妆套装</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">美体美发</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">洗发护发</a></li>
                                        <li><a href="#">烫染造型</a></li>
                                        <li><a href="#">沐浴乳</a></li>
                                        <li><a href="#">身体乳</a></li>
                                        <li><a href="#">全身呵护</a></li>
                                        <li><a class="red" href="#">手足护理</a></li>
                                        <li><a href="#">纤体</a></li>
                                        <li><a href="#">指甲油</a></li>
                                        <li><a href="#">香水</a></li>
                                        <li><a href="#">口腔护理</a></li>
                                        <li><a href="#">精油</a></li>
                                        <li><a href="#">卫生巾</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner8.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">美妆</a></dt>
                        <dd class="dd"><a class="a red" href="#">超值套装</a><ins></ins><a class="a" href="#">面膜</a><ins></ins><a class="a" href="#">口红</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang9">
                            <dl>
                                <dt><a href="#">热门推荐</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">手表</a></li>
                                        <li><a class="red" href="#">项链</a></li>
                                        <li><a href="#">手机壳</a></li>
                                        <li><a href="#">帽子</a></li>
                                        <li><a href="#">围巾</a></li>
                                        <li><a href="#">发饰</a></li>
                                        <li><a href="#">戒指</a></li>
                                        <li><a href="#">眼镜</a></li>
                                        <li><a href="#">耳饰</a></li>
                                        <li><a href="#">假发</a></li>
                                        <li><a href="#">自拍神器</a></li>
                                        <li><a href="#">移动电源</a></li>
                                        <li><a href="#">毛衣链</a></li>
                                        <li><a href="#">帽子</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">爱美装扮</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">秋季新品</a></li>
                                        <li><a class="red" href="#">去约会</a></li>
                                        <li><a href="#">去度假</a></li>
                                        <li><a href="#">去派对</a></li>
                                        <li><a href="#">女神配饰</a></li>
                                        <li><a href="#">情侣配饰</a></li>
                                        <li><a href="#">独特小物</a></li>
                                        <li><a href="#">数码控</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">流行推荐</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">情侣手表</a></li>
                                        <li><a href="#">锁骨链</a></li>
                                        <li><a href="#">加分戒指</a></li>
                                        <li><a href="#">最IN手机壳</a></li>
                                        <li><a href="#">韩版帽</a></li>
                                        <li><a class="red" href="#">流苏围巾</a></li>
                                        <li><a href="#">小清新耳饰</a></li>
                                        <li><a href="#">唯美发饰</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner9.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">配饰</a></dt>
                        <dd class="dd"><a class="a red" href="#">秋冬围巾</a><ins></ins><a class="a" href="#">帽子</a><ins></ins><a class="a" href="#">耳饰</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang10">
                            <dl>
                                <dt><a href="#">家纺布艺</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">四件套</a></li>
                                        <li><a class="red" href="#">秋冬被</a></li>
                                        <li><a href="#">毛毯</a></li>
                                        <li><a href="#">枕头</a></li>
                                        <li><a href="#">抱枕</a></li>
                                        <li><a href="#">床垫</a></li>
                                        <li><a href="#">桌布</a></li>
                                        <li><a href="#">地毯地垫</a></li>
                                        <li><a href="#">坐垫</a></li>
                                        <li><a href="#">美翻了窗帘</a></li>
                                        <li><a href="#">毛绒玩具</a></li>
                                        <li><a href="#">被套</a></li>
                                        <li><a href="#">床单</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">精美家饰</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">墙贴</a></li>
                                        <li><a class="red" href="#">台灯</a></li>
                                        <li><a href="#">小夜灯</a></li>
                                        <li><a href="#">摆件</a></li>
                                        <li><a href="#">闹钟</a></li>
                                        <li><a href="#">照片墙</a></li>
                                        <li><a href="#">纸巾盒</a></li>
                                        <li><a href="#">香薰</a></li>
                                        <li><a href="#">绿植</a></li>
                                        <li><a href="#">仿真花</a></li>
                                        <li><a href="#">DIY</a></li>
                                        <li><a href="#">装饰画</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">美味厨房</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">锅具</a></li>
                                        <li><a href="#">碗</a></li>
                                        <li><a href="#">叉勺筷</a></li>
                                        <li><a href="#">调味罐</a></li>
                                        <li><a href="#">饭盒</a></li>
                                        <li><a class="red" href="#">烘培器具</a></li>
                                        <li><a href="#">保鲜罐</a></li>
                                        <li><a href="#">围裙</a></li>
                                        <li><a href="#">厨房小电器</a></li>
                                        <li><a href="#">厨房清洁</a></li>
                                        <li><a href="#">橡胶手套</a></li>                                       <li><a href="#">隔热手套</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner10.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">家具</a></dt>
                        <dd class="dd"><a class="a red" href="#">四件套</a><ins></ins><a class="a" href="#">毛绒玩具</a><ins></ins><a class="a" href="#">抱枕</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang11">
                            <dl>
                                <dt><a href="#">童装</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">秋冬热销</a></li>
                                        <li><a class="red" href="#">女童</a></li>
                                        <li><a href="#">男童</a></li>
                                        <li><a href="#">婴装</a></li>
                                        <li><a href="#">童鞋</a></li>
                                        <li><a href="#">童裤</a></li>
                                        <li><a href="#">连衣裙</a></li>
                                        <li><a href="#">秋冬外套</a></li>
                                        <li><a href="#">长袖T恤</a></li>
                                        <li><a href="#">衬衫</a></li>
                                        <li><a href="#">卫衣</a></li>
                                        <li><a href="#">针织衫</a></li>
                                        <li><a href="#">家居服</a></li>
                                        <li><a href="#">套装</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">辣妈</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">孕妇装</a></li>
                                        <li><a class="red" href="#">外套</a></li>
                                        <li><a href="#">孕妇裤</a></li>
                                        <li><a href="#">妈咪套装</a></li>
                                        <li><a href="#">打底裤</a></li>
                                        <li><a href="#">产前产后</a></li>
                                        <li><a href="#">家居服</a></li>
                                        <li><a href="#">托腹裤</a></li>
                                        <li><a href="#">束腹带</a></li>
                                        <li><a href="#">哺乳内衣</a></li>
                                        <li><a href="#">孕产洗护</a></li>
                                        <li><a href="#">亲子装</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">玩具用品</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">益智早教</a></li>
                                        <li><a href="#">毛绒玩具</a></li>
                                        <li><a href="#">电动遥控</a></li>
                                        <li><a href="#">童车</a></li>
                                        <li><a href="#">婴儿床品</a></li>
                                        <li><a class="red" href="#">童书</a></li>
                                        <li><a href="#">童包</a></li>
                                        <li><a href="#">奶瓶</a></li>
                                        <li><a href="#">洗护</a></li>
                                        <li><a href="#">喂哺</a></li>
                                        <li><a href="#">幼儿学步</a></li>                                                   <li><a href="#">安全出行</a></li>
                                        <li><a href="#">纸尿裤</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner11.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">母婴</a></dt>
                        <dd class="dd"><a class="a red" href="#">必备冬装</a><ins></ins><a class="a" href="#">童装</a><ins></ins><a class="a" href="#">孕妇装</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul">
                <div class="left-tanchuang left-tanchuang12">
                            <dl>
                                <dt><a href="#">休闲食品</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">巧克力</a></li>
                                        <li><a href="#">饼干</a></li>
                                        <li><a class="red" href="#">月饼</a></li>
                                        <li><a href="#">糕点</a></li>
                                        <li><a href="#">糖果</a></li>
                                        <li><a href="#">蜜饯</a></li>
                                        <li><a href="#">坚果</a></li>
                                        <li><a href="#">肉食</a></li>
                                        <li><a href="#">膨化食品</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">进口美食</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">日韩</a></li>
                                        <li><a href="#">东南亚</a></li>
                                        <li><a href="#">台湾</a></li>
                                        <li><a class="red" href="#">进口饼干</a></li>
                                        <li><a href="#">进口糕点</a></li>
                                        <li><a href="#">进口糖巧</a></li>
                                        <li><a href="#">进口水饮</a></li>

                                    </ul>
                                </dd>

                                <dt><a href="#">茶酒饮品</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a href="#">咖啡</a></li>
                                        <li><a class="red" href="#">花草茶</a></li>
                                        <li><a href="#">果味茶饮</a></li>
                                        <li><a href="#">冲饮</a></li>
                                        <li><a href="#">饮料</a></li>
                                        <li><a href="#">酒类</a></li>
                                        <li><a href="#">字母</a></li>
                                        <li><a href="#">蕾丝</a></li>
                                        <li><a href="#">波点</a></li>
                                        <li><a href="#">纯色</a></li>
                                        <li><a href="#">前短后长</a></li>
                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner12.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">零食</a></dt>
                        <dd class="dd"><a class="a" href="#">休闲食品</a><ins></ins><a class="a red" href="#">进口美食</a><ins></ins><a class="a red" href="#">肉食</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="ul my">
                <div class="left-tanchuang left-tanchuang13">
                            <dl>
                                <dt><a href="#">生活日用</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a class="red" href="#">保温杯</a></li>
                                        <li><a href="#">玻璃杯</a></li>
                                        <li><a href="#">马克杯</a></li>
                                        <li><a href="#">晴雨伞</a></li>
                                        <li><a class="red" href="#">热水袋</a></li>
                                        <li><a href="#">毛巾</a></li>
                                        <li><a href="#">洗漱杯</a></li>
                                        <li><a href="#">浴巾</a></li>
                                        <li><a href="#">暖身贴</a></li>                                                    <li><a class="red" href="#">纸品洗液</a></li>
                                        <li><a href="#">水笔</a></li>
                                        <li><a href="#">明信片</a></li>
                                        <li><a href="#">笔记本</a></li>
                                        <li><a href="#">相册</a></li>
                                    </ul>
                                </dd>

                                <dt><a href="#">收纳控</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a class="red" href="#">首饰盒</a></li>
                                        <li><a href="#">挂钩</a></li>
                                        <li><a href="#">收纳箱</a></li>
                                        <li><a href="#">鞋盒</a></li>
                                        <li><a href="#">收纳袋</a></li>
                                        <li><a class="red" href="#">桌面收纳</a></li>
                                        <li><a href="#">纸巾盒</a></li>
                                        <li><a href="#">衣帽架</a></li>
                                        <li><a href="#">简易衣柜</a></li>
                                        <li><a href="#">防尘袋</a></li>
                                        <li><a href="#">化妆品收纳</a></li>
                                        <li><a href="#">脏衣篓</a></li>
                                        <li><a class="red" href="#">内衣收纳</a></li>

                                    </ul>
                                </dd>

                                <dt><a href="#">变美丽</a></dt>
                                <dd>
                                    <ul class="clearfix">
                                        <li><a class="red" href="#">美发棒</a></li>
                                        <li><a href="#">体重秤</a></li>
                                        <li><a href="#">化妆镜</a></li>
                                        <li><a href="#">梳洗</a></li>
                                        <li><a href="#">吹风机</a></li>
                                        <li><a href="#">健身变瘦</a></li>
                                        <li><a class="red" href="#">情趣内衣</a></li>
                                        <li><a href="#">情趣用具</a></li>
                                        <li><a href="#">调情香剂</a></li>
                                        <li><a class="red" href="#">加湿器</a></li>

                                    </ul>
                                </dd>
                                <div class="xiao-banner"><a href="#"><img src="/home/sycss/image/xiao-banner13.jpg" /></a></div>

                            </dl>
                    </div>
                <li class="li">
                    <dl>
                        <dt class="dt"><a class="a" href="#">百货</a></dt>
                        <dd class="dd"><a class="a red" href="#">收纳盒</a><ins></ins><a class="a" href="#">保温杯</a><ins></ins><a class="a" href="#">美发棒</a></dd>
                    </dl>
                </li>
            </ul>
        </div>


        <!-- 右侧展示banner -->
        <div class="right">
            <!-- <img src="/home/sycss/image/banner.gif" /> -->


                <ul class="slide-show">
                     @foreach($show as $k=>$v)
                    <li><a href="{{$v->burl}}" target="_blank"><img src="{{$v->bsrc}}" alt="" style="width:875px;"/></a></li>

                @endforeach
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
            <a href="/home/goodkill" target="_blank"><img src="/home/抢购首页_files/2654_6d9ek464120he9ddc717e4jbek53g_640x960.jpg_280x999.webp" alt="" /></a>
        </div>
        <div class="two">
            <a href="#"><img src="/home/sycss/image/main1-two.png" /></a>
        </div>

        <div class="three">
            @foreach($addata as $k=>$v)
            <!-- <a href="" target="_blank"><img src="" /></a> -->
            <a href="{{$v->adurl}}"><img class="zs2" src="{{$v->adsrc}}" /></a>
            @endforeach
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

