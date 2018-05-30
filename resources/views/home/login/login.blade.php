<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <script src="%E7%99%BB%E5%BD%95_files/analytics.js" async="">
        </script>
        <script type="text/javascript">
            window.__trace__headstart = +new Date;
            window.__server__startTime = 1525950866094;
            window.__token = "Jy2DddYXN9q%2BU7cQl7%2Fg%2Frm%2Bf5MN8DZAKLp11YskWij3pKazwgy%2FYgSromaTT3e%2FO%2FsrLZuUhRe5MT2SZ8NNpQ%3D%3D";
        </script>
        <meta charset="UTF-8">
        <meta http-equiv="Cache-Control" content="no-transform ">
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            登录_ilick
        </title>
        <meta name="keywords" content="蘑菇街账号登录,蘑菇街登陆">
        <meta name="description" content="蘑菇街登陆页面，欢迎回家">
        <meta name="copyright" content="mogujie.com">
        <link rel="search" type="application/opensearchdescription+xml" href="">
        <link rel="icon" href="https://s10.mogucdn.com/mlcdn/c45406/170401_16fj5k6k4174bfd21d03a4gf6a7hg_48x48.png"
        type="image/x-icon">
        <script type="text/javascript">
            var curl = {
                apiName: 'require'
            };
            var MOGU = {};
            var MoGu = {};
            var MOGU_DEV = 0 || "online" == "pre";
            var M_ENV = "online";
        </script>
        <link href="%E7%99%BB%E5%BD%95_files/index_002.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="%E7%99%BB%E5%BD%95_files/bottom.css"
        media="all">
        <link href="%E7%99%BB%E5%BD%95_files/index.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="%E7%99%BB%E5%BD%95_files/pkg-pc-base.js">
        </script>
        <script type="text/javascript">
            if (window.require) {
                require.config({
                    domain: 0
                });
            }

            MOGUPROFILE = {};
        </script>
         <script type="text/javascript" src="holder.min.js">
        </script>
        <link rel="stylesheet" type="text/css" href="%E7%99%BB%E5%BD%95_files/ie67upgrade.css">
        <style>
            .sub{
                width: 315px; height: 52px; border: 0 none; border-radius:
            3px; background: #FF5671; font-size: 16px; color: #FFF; cursor: pointer;
            text-shadow: 1px 1px 1px #ff7373; font-family: "Microsoft YaHei"; line-height:
            52px;
            }
            .lg_getcode .width_180 {
                border-color: #cfcfcf;
                width: 180px;
            }
            .img{
                margin-bottom: 10px;
                margin-right: 40px;
                float: right;
            }
        </style>

    </head>
    
    <body class="media_screen_1200">
        <div id="body_wrap">
            <div class="login_wrap">
                <div class="logo_wrap">
                    <div class="logo">
                        <a title="蘑菇街" href="/home/index" class="mainlogo logo_mgj_img">
                        </a>
                        <!-- 新增登录页绑定手机提示 -->
                        <span class="login-logo-tip">
                            依《网络安全法》相关要求，即日起蘑菇街会员登陆需绑定手机。为保障您的账户安全及正常使用，如您尚未绑定，请尽快完成绑定，感谢您的理解和支持!
                        </span>
                    </div>
                </div>
                <div class="content clearfix" style="background:url(http://s17.mogucdn.com/p2/170105/upload_541i9di2b3icf9j13f24e0bg7b1i6_1920x600.png) no-repeat center center;">
                    <div class="lg_banner">
                        <a href="" target="_blank" class="banner1">
                        </a>
                    </div>
                    <div class="lg_left ui-option-main-box" id="lg_content">
                        <!-- 登录方式tab -->
                        <!--  -->
                        <div class="login_mod_tab">
                            <div class="fl mod">
                                <a class="lo_mod tab_on" lo-mod="normal" href="javascript:;" title="普通登入">
                                    普通登录
                                </a>
                            </div>
                            <div class="fl mod nopassword">
                                <a class="eb_mod" lo-mod="ebmod" href="javascript:;" title="手机免密码登入">
                                    手机无密码登录
                                </a>
                            </div>
                        </div>
                        <div id="signform" class="formbox">
                            <p class="error_tip">
                                登录名或密码错误
                            </p>
                            <div class="lg_form">
                                {{session('msg')}}
                                @if(session('err'))

                                    <li style="color:white;font-size: 15px;list-style: none">{{session('err')}}</li>

                                @endif
                                <form action="/home/logindo" method="post">
                                    <!-- 正常登录 start -->
                                    <div class="mod_box lo_mod_box" data-isshow="0">
                                        <div class="ui-sign-item ui-name-item lg_item lg_name">
                                            <input maxlength="32" class="ui-input pwd_text"  
                                            placeholder="用户名/邮箱/手机号" style="border-color:#CFCFCF;" type="text" name="uname">
                                        </div>
                                        <div class="ui-sign-item ui-sign-common-item lg_item lg_pass">
                                            <input maxlength="32" class="ui-input pwd_text" 
                                             value="" placeholder="密码" style="border-color:#CFCFCF;" type="password" name="password">
                                        </div>

                                        <div class="lg_item lg_getcode">
                                            <input maxlength="32" class="ui-input pwd_text width_180" name="code" data-type="phonecode" placeholder="验证码" style="border-color:#CFCFCF;" type="text">
                                            <div class="img">
                                                <img src="/home/code" alt="" onclick='this.src=this.src+="?1"' >
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <!-- 正常登录 end -->
                                   

                                    <div  clearfix">
                                        {{csrf_field()}}
                                        <button class="sub" value="">
                                            登录      
                                        </button>
                                        
                                    </div>
                                    <div class="ot_login">
                                        <div class="ot_btn clearfix">
                                            <a class="ui-ot-btn mr-42 ot_btn_qq" href="javascript:;" data-type="qq">
                                                <img src="%E7%99%BB%E5%BD%95_files/upload_5763lkilh8f7abid345gbhh167d79_19x19.png">
                                                QQ登录
                                            </a>
                                            <a class="ui-ot-btn mr-42" href="javascript:;" data-type="weixin">
                                                <img src="%E7%99%BB%E5%BD%95_files/upload_8d4dd486c18961b55lf0hbe5ebf7l_18x19.png">
                                                微信登录
                                            </a>
                                        </div>
                                    </div>
                                    <div class="lg_reg">
                                        <a class="findpwd" href="/home/register">
                                            注册新账号
                                        </a>
                                        <a class="findpwd" href="/home/zhaohui">
                                            忘记密码
                                        </a>
                                         
                                    </div>
                                    <input value="" id="imgcheckvalue" type="hidden">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script id="_script">
            </script>
        </div>
        <script>
            window.isDev = !!0;
        </script>
        <div class="token" data-token="">
        </div>
        <div class="foot J_siteFooter" data-ptp="_foot">
            <div class="mgj_copyright">
                <div class="mgj_footer_helper">
                    <div class="mgj_footer_helper_mod">
                        <div class="mgj_footer_helper_mod_container">
                            <h4 class="mgj_footer_helper_title color_666">
                                - 新手帮助 -
                            </h4>
                            <ul>
                                <li class="mgj_footer_helper_item">
                                    <a rel="nofollow" target="_blank" class="color_999" href="">
                                        常见问题
                                    </a>
                                </li>
                                <li class="mgj_footer_helper_item">
                                    <a rel="nofollow" target="_blank" class="color_999" href="">
                                        自助服务
                                    </a>
                                </li>
                                <li class="mgj_footer_helper_item">
                                    <a rel="nofollow" target="_blank" class="color_999" href="">
                                        联系客服
                                    </a>
                                </li>
                                <li class="mgj_footer_helper_item">
                                    <a rel="nofollow" target="_blank" class="color_999" href="">
                                        意见反馈
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mgj_footer_helper_mod">
                        <div class="mgj_footer_helper_mod_container">
                            <h4 class="mgj_footer_helper_title color_666">
                                - 权益保障 -
                            </h4>
                            <ul>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">
                                        全国包邮
                                    </div>
                                </li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">
                                        7天无理由退货
                                    </div>
                                </li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">
                                        退货运费补贴
                                    </div>
                                </li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">
                                        限时发货
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mgj_footer_helper_mod">
                        <div class="mgj_footer_helper_mod_container">
                            <h4 class="mgj_footer_helper_title color_666">
                                - 支付方式 -
                            </h4>
                            <ul>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">
                                        微信支付
                                    </div>
                                </li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">
                                        支付宝
                                    </div>
                                </li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">
                                        白付美支付
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mgj_footer_helper_mod">
                        <div class="mgj_footer_helper_mod_container">
                            <h4 class="mgj_footer_helper_title color_666">
                                - 移动客户端下载 -
                            </h4>
                            <ul>
                                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                                    <div class="color_999">
                                        蘑菇街
                                    </div>
                                    <img class="mgj_footer_helper_quoer_code" src="%E7%99%BB%E5%BD%95_files/171023_3ef94c11e31g34lghgbac75k2e4fb_1000x1000.png">
                                </li>
                                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                                    <div class="color_999">
                                        美丽说
                                    </div>
                                    <img class="mgj_footer_helper_quoer_code" src="%E7%99%BB%E5%BD%95_files/upload_5ii9f90fdide17hj3jkj3bfd121e3_280x280.png">
                                </li>
                                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                                    <div class="color_999">
                                        uni引力
                                    </div>
                                    <img class="mgj_footer_helper_quoer_code" src="%E7%99%BB%E5%BD%95_files/upload_892b80cj47j51h95f44cai2e0b002_280x280.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mgj_footer_mgjinfo">
                    <ul>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
                                关于我们
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="http://job.mogujie.com/?acm=3.mce.1_10_19kz8.32163..yNS4yqRDUlbI1.pos_1-m_223518-sd_119">
                                招聘信息
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
                                联系我们
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
                                商家入驻
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
                                商家后台
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
                                蘑菇商学院
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
                                商家社区
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
                                规则中心
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
                                有害信息举报
                            </a>
                        </li>
                    </ul>
                    <p class="mgjhostname color_999">
                        ©2017 Mogujie.com 杭州卷瓜网络有限公司
                    </p>
                </div>
                <div class="mgj_footer_copyright">
                    <p class="mgj_footer_copyright_container">
                        <span class="mgj_footer_copyright_span color_999">
                            营业执照：
                        </span>
                        <a rel="nofollow" target="_blank" class="mgj_footer_a color_999" href="">
                            913301065526808764
                        </a>
                        <b class="mgj_footer_b color_999">
                            |
                        </b>
                        <span class="mgj_footer_copyright_span color_999">
                            网络文化经营许可证：
                        </span>
                        <a rel="nofollow" target="_blank" class="mgj_footer_a color_999" href="">
                            浙网文（2016）0349-219号
                        </a>
                        <b class="mgj_footer_b color_999">
                            |
                        </b>
                        <span class="mgj_footer_copyright_span color_999">
                            增值电信业务经营许可证：
                        </span>
                        <a rel="nofollow" target="_blank" class="mgj_footer_a color_999" href="">
                            浙B2-20110349
                        </a>
                        <b class="mgj_footer_b color_999">
                            |
                        </b>
                        <span class="mgj_footer_copyright_span color_999">
                        </span>
                        <a rel="nofollow" target="_blank" class="mgj_footer_a color_999" href="">
                            安全责任书
                        </a>
                        <b class="mgj_footer_b color_999">
                            |
                        </b>
                        <span class="mgj_footer_copyright_span color_999">
                        </span>
                        <a rel="nofollow" target="_blank" class="mgj_footer_a color_999" href="">
                            浙公网安备 33010602002329号
                        </a>
                        <b class="mgj_footer_b color_999">
                            |
                        </b>
                    </p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="%E7%99%BB%E5%BD%95_files/index_003.js"></script>
        <script type="text/javascript" src="%E7%99%BB%E5%BD%95_files/bottom.js"></script>
        <script type="text/javascript" src="%E7%99%BB%E5%BD%95_files/index.js"></script>
        <script type="text/javascript" src="%E7%99%BB%E5%BD%95_files/juqery.min.js"></script>

    </body>
</html>    
        