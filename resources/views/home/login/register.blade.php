<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="tp_page" content="3.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            注册_iluck
        </title>
        <link href="%E6%B3%A8%E5%86%8C1%E5%8F%B7%E5%BA%97_files/register_3.css"
        rel="stylesheet" type="text/css">
        <link href="/css/zzsc.css" type="text/css" rel="stylesheet" />
        <script src="%E6%B3%A8%E5%86%8C1%E5%8F%B7%E5%BA%97_files/register_new.js">
        </script>
        <script type="text/javascript" async="" src="%E6%B3%A8%E5%86%8C1%E5%8F%B7%E5%BA%97_files/captcha.js">
        </script>
        <script src="/js/jquery-1.8.3.min.js"></script>
        <style>
            .login_btn { 
                width: 330px; height: 52px; border: 0 none; border-radius:
                3px; background: #ff3c3c; font-size: 16px; color: #FFF; cursor: pointer;
                text-shadow: 1px 1px 1px #ff7373; font-family: "Microsoft YaHei"; line-height:
                52px; 
                } 
            .y_regist_model{ 
                width: 1000px; height: 600px; 
                background-color:#ffeceb; 
                opacity: .9; 
                } 

            .y_same_item { 
                margin-left: 350px; 
            } 

            .y_regtip_rel{
                margin-left: 350px; 
            } 

            .login_btn{ margin-left: 350px; } 

            .y_agreement_word{
            margin-left: 350px; } 

            .jt{ margin-left: 350px; }

            #yzmbtn{
                border: 1px solid #dedede;
                background-color: #f3f3f3;
                cursor: pointer;
                color: #666;
            }
        </style>
    </head>
    
    <body>
        <link rel="shortcut icon" href="https://passport.yhd.com/front-passport/passport/images/yhd_favicon.ico">

        <div class="regist_header clearfix">
            <div class="wrap">
                <a href="/home/index" class="logo">
                    <img src="%E6%B3%A8%E5%86%8C1%E5%8F%B7%E5%BA%97_files/login.png" alt="1号店"
                    height="55">
                </a>
                <div class="regist_header_right clearfix">
                    <!--<a href="#" class="english_edition" id="edition" style="display:none">English</a>-->
                    <div class="help_wrap">
                        <a class="hd_menu" href="">
                            <s class="help_ico">
                            </s>
                            帮助中心
                        </a>
                        <div class="hd_menu_list">
                            <ul>
                                <li>
                                    <a href="/home/login">
                                        包裹跟踪
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/login">
                                        常见问题
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/login">
                                        在线退换货
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/login">
                                        在线投诉
                                    </a>
                                </li>
                                <li><a href="">配送范围</a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <span class="fr">
                        您好，欢迎光临！
                        <a href="/home/login" class="blue_link">
                            请登录
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="%E6%B3%A8%E5%86%8C1%E5%8F%B7%E5%BA%97_files/jquery.js">
        </script>
        <input id="validateSig" type="hidden">
        <input name="returnUrl" value="" id="returnUrl" type="hidden">
        <input id="p" value="" type="hidden">
        <input style="display:none" type="password">
        <div class="y_regist_wrap" style="background: url(/home/img/background.png)">
            <!--背景小图标 -->
            <div class="r_icon1">
            </div>
            <div class="r_icon2">
            </div>
            <div class="r_icon3">
            </div>
            <div class="r_icon4">
            </div>
            <div class="r_icon5">
            </div>
            <div class="y_regist_model">
                <h4 class="y_regist_tit">
                    新用户注册
                </h4>
                <div class="y_regist_form">
                    <form id="register-form" name="register-form" class="nobottommargin" action="/home/zhuce"
                    method="post">
                        <ul class="clearfix">
                            <li>
                                <div class="y_same_item">
                                    <input class="ysame_input" id="userName" type="text" name="uname">
                                    <span class="y_same_label">
                                        用户名
                                    </span>
                                </div>
                                <div class="y_regist_tips y_regist_tips_black" style="top: 16px;">
                                    <div class="y_regtip_rel">
                                        <i class="jt">
                                        </i>
                                        <div class="y_tips_words">
                                        </div>
                                    </div>
                                </div>
                                <div class="y_regist_right">
                                </div>
                                <!--提示信息end -->
                            </li>
                            <li>
                                <div class="y_same_item">
                                    <input class="ysame_input" id="Email" type="text" name="email">
                                    <span class="y_same_label">
                                        邮箱
                                    </span>
                                </div>
                                <div class="y_regist_tips y_regist_tips_black" style="top: 16px;">
                                    <div class="y_regtip_rel">
                                        <i class="jt">
                                        </i>
                                        <div class="y_tips_words">
                                        </div>
                                    </div>
                                </div>
                                <div class="y_regist_right">
                                </div>
                                <!--提示信息end -->
                            </li>
                            <li>
                                <div class="y_same_item">
                                    <input class="ysame_input" id="phone" type="text" name="tel">
                                    <span class="y_same_label">
                                        手机号
                                    </span>
                                </div>
                                <div class="y_regist_tips y_regist_tips_black" style="top: -4px;">
                                    <div class="y_regtip_rel">
                                        <i class="jt">
                                        </i>
                                        <div class="y_tips_words">
                                            请填写正确的手机号码，以便 接收订单通知，找回密码等
                                        </div>
                                    </div>
                                </div>
                                <div class="y_regist_right">
                                </div>
                            </li>
                            <li class="ishort_li clearfix" style="display: none;" id="validCodeDiv">
                            </li>
                            <!-- 手机验证码 -->
                            <li class="ishort_li clearfix " id="validPhoneCodeDiv">
                                <div class="fl y_same_item">
                                    <input class="ysame_input" id="validPhoneCode" type="text" name="yzm">
                                    <span class="y_same_label">
                                        短信验证码
                                    </span>
                                </div>
                                <a class="receive_code fl same_code_btn r_disable_code" id="yzmbtn" href="#">
                                    获取验证码
                                </a>
                                <div class="y_regist_tips y_regist_tips_red" style="top: -14px;">
                                    <div class="y_regtip_rel">
                                        <i class="jt">
                                        </i>
                                        <div class="y_tips_words">
                                            如无法接受验证码，请重启手机并确认短信未被拦截！4G用户请关闭4G网络进行接收
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- 手机验证码end -->

                            <li>
                                <div class="y_same_item">
                                    <input class="ysame_input y_set_password" oncopy="return false;" oncut="return false;"
                                    onpaste="return false;" autocomplete="off" id="password" type="password"
                                    name="password">
                                    <span class="y_same_label">
                                        设置密码
                                    </span>
                                </div>
                                <div class="y_regist_tips y_regist_tips_red" style="top: 6px;">
                                    <div class="y_regtip_rel">
                                        <i>
                                        </i>
                                        <div class="y_tips_words">
                                            6-20个大小
                                        </div>
                                    </div>
                                </div>
                                <div class="y_regist_tips_keywords strength_l">
                                    <div class="y_regtip_rel">
                                        <i class="jt">
                                        </i>
                                        <div class="y_tips_words y_tips_words_key">
                                            <em class="em_redA">
                                            </em>
                                            <em>
                                            </em>
                                            <em>
                                            </em>
                                            <b class="em_words">
                                                低
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="y_regist_tips_keywords strength_m">
                                    <div class="y_regtip_rel">
                                        <i>
                                        </i>
                                        <div class="y_tips_words y_tips_words_key">
                                            <em class="em_yellowA1">
                                            </em>
                                            <em class="em_yellowA1">
                                            </em>
                                            <em>
                                            </em>
                                            <b class="em_words">
                                                中
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="y_regist_tips_keywords strength_h">
                                    <div class="y_regtip_rel">
                                        <i>
                                        </i>
                                        <div class="y_tips_words y_tips_words_key">
                                            <em class="em_greenA1">
                                            </em>
                                            <em class="em_greenA1">
                                            </em>
                                            <em class="em_greenA1">
                                            </em>
                                            <b class="em_words">
                                                高
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="y_same_item">
                                    <input class="ysame_input" oncopy="return false;" oncut="return false;"
                                    onpaste="return false;" id="password2" type="password" name="repass">
                                    <span class="y_same_label">
                                        确认密码
                                    </span>
                                </div>
                                <div class="y_regist_tips y_regist_tips_red" style="top: 6px;">
                                    <div class="y_regtip_rel">
                                        <i class="jt">
                                        </i>
                                        <div class="y_tips_words">
                                            请再次输入密码
                                        </div>
                                    </div>
                                </div>
                                <div class="y_regist_right">
                                </div>
                            </li>
                            <li>
                                <div class="y_agreement_word">
                                    点击注册，表示您同意
                                    <a href="http://cms.yhd.com/cms/view.do?topicId=10" target="_blank">
                                        《服务协议及隐私声明》
                                    </a>
                                </div>
                                {{csrf_field()}}
                                <button id="login_button" class="login_btn" value="register">
                                    同意协议并注册
                                </button>
                            </li>
                        </ul>
                    </form>
                </div>
                <!-- // y_regist_form ending -->
            </div>
        </div>
        <!--// y_regist_wrap ending -->
        <script type="text/javascript" src="%E6%B3%A8%E5%86%8C1%E5%8F%B7%E5%BA%97_files/api.js">
        </script>
        <script type="text/javascript">
            var showValidCodeWhenRegistByMobile = false;
            var registerValidateUserBehaviorSwitcher = true;
            jRegist.init();
        </script>
        <!-- 手机发送验证码 -->
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#yzmbtn').click(function() {
                //获取手机号
                var phone = $('#phone').val();
                // console.log(phone);

                // 发送ajax
                $.post('/home/ycode', {number: phone},function(data) {

                    console.log(data);

                })

                return false;
            })

        </script>
    </body>

</html>