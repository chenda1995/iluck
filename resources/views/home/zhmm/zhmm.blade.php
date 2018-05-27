<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>密码找回</title>
        <link href="/home/zhmm_files/index.css-6f9e6f5a.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/home/zhmm_files/bottom.css" media="all">
        <link href="/home/zhmm_files/index.css-ccfac185.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/home/zhmm_files/ie67upgrade.css">
    </head>

    <body class="media_screen_1200">
        <div id="body_wrap">
            <div class="registerbox">
                <div class="reg_hd">
                    <a href="/home/login" title="蘑菇街首页" class="mainlogo logo_img">
                    </a>
                </div>
                <div class="reg_bd find_pwd_wrap ui-validation-content">
                    <!-- <p class="findpwdTip">*找回密码</p> -->
                    <h3 class="findpwd-title">
                        安全设置-找回密码
                    </h3>
                    <div class="step_box step1_box">

                    </div>
                    <div id="modelform" class="formbox info_verify_box">
                        <form action="/home/zhaohui" class="formelem" method="post">
                            <ul>
                                <li>
                                    {{csrf_field()}}
                                    <div class="ui-item inputbox validateitem ui-name" style="margin-left:55px">
                                        <span class="accountLabel">
                                            邮箱:
                                        </span>
                                        <input type="text" name="email" value="" data-type="username" class="ui-input normalText display_u js_text_input js_uname"
                                        placeholder="请输入邮箱 ">
                                    </div>
                                </li>
                                <li class="lg_chk_wrap">
                                    <p class="error" id="v2error">
                                    </p>
                                    <div id="_content">
                                    </div>
                                </li>
                            </ul>
                            <div class="subbox">
                                <button  class="btn_check btn_sub_form" id="nextConfirm">
                                    下一步
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




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
                                    <a rel="nofollow" target="_blank" class="color_999" href="#">
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
                                    <img class="mgj_footer_helper_quoer_code" src="/home/zhmm_files/171023_3ef94c11e31g34lghgbac75k2e4fb_1000x1000.png">
                                </li>
                                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                                    <div class="color_999">
                                        美丽说
                                    </div>
                                    <img class="mgj_footer_helper_quoer_code" src="/home/zhmm_files/upload_5ii9f90fdide17hj3jkj3bfd121e3_280x280.png">
                                </li>
                                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                                    <div class="color_999">
                                        uni引力
                                    </div>
                                    <img class="mgj_footer_helper_quoer_code" src="/home/zhmm_files/upload_892b80cj47j51h95f44cai2e0b002_280x280.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mgj_footer_mgjinfo">
                    <ul>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href=">
                                关于我们
                            </a>
                        </li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_blank" class="color_666" href="">
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
                        <span class="mgj_footer_copyright_span color_999">
                        </span>
                        <a rel="nofollow" target="_blank" class="mgj_footer_a color_999" href="">
                            互联网药品信息服务资格证书编号：（浙)-经营性-2018-0002
                        </a>
                        <b class="mgj_footer_b color_999">
                            |
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </body>

</html>