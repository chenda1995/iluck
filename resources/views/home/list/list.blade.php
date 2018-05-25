
@extends('layout.home')

@section('title',$title)


@section('content')

        <!--## PC公用Logo & 搜索-->
        <!-- 中间区域 -->
        <div class="header_mid clearfix">
            <div class="wrap">
                <a rel="nofollow" href="http://www.mogujie.com/" class="logo" title="蘑菇街首页"
                style="background-image: none;">
                    <img src="/home/images/170904_1fj9406416501i4lkabcc0hjb8341_480x180.png"
                    alt="蘑菇街，我的买手街">
                </a>
                <div class="normal-search-content">
                </div>
                <div class="mid_fr">
                    <img src="/home/images/180510_0hk5cb4l87bjlc65k0253jfclk2b3_440x180.png"
                    alt="蘑菇街，我的买手街">
                </div>
            </div>
        </div>
        <input type="hidden" id="J_searchbar_flag" value="show">
        <!--页面内容-->
        <div id="body_wrapp">
            <div class="wrap">
                <!--隐藏域不要了,用来拼接_b_key的前一位.的-->
                <!--<input type="hidden" id="pagani_log_partc" value="jiadian_0" />
                -->
                <div id="condition_box">
                    <div id="search_condition_box">
                        <div class="sp_topbanner clearfix" id="sp_topbanner">
                            <div class="sp_top_nav">
                                <ul class="nav_list">
                                    <li class="on">
                                        <a href="http://list.mogujie.com/book/clothing">
                                            上衣
                                        </a>
                                    </li>


                                    <li>
                                        <a href="http://list.mogujie.com/book/skirt">
                                            裙子
                                        </a>
                                    </li>

                                    <li>
                                        <a href="http://list.mogujie.com/book/trousers">
                                            裤子
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/neiyi">
                                            内衣
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/shoes">
                                            鞋子
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/bags">
                                            包包
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/accessories">
                                            配饰
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/boyfriend">
                                            男友
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/magic">
                                            美妆
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/baby">
                                            母婴
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/home">
                                            家居
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/commodity">
                                            百货
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/food">
                                            食品
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/jiadian">
                                            家电
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://list.mogujie.com/book/sports">
                                            运动
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sp_type_nav" data-ptp="_cate">
                                <a class="right_img" target="_blank" href="http://list.mogujie.com/book/clothing/10054926?acm=3.mce.1_10_1h11s.874..2EfNHqRE3KJTT.pos_0-m_397228-sd_119">
                                    <img src="/home/images/180306_7dk8a09l7b577e3icc724194ah1k0_200x240.jpg">
                                </a>
                                <div class="type_sections">
                                    <div class="type_section first">
                                        <dt>
                                            <a href="http://list.mogujie.com/book/clothing/51831?mt=12.848.r82919.3253#sp_topbanner">
                                                当季热卖
                                            </a>
                                        </dt>
                                        <dd>
                                            <a class="cat_img" href="http://list.mogujie.com/book/clothing/51831?mt=12.848.r82919.3253#sp_topbanner">
                                                <img src="/home/images/170822_2i5g2ge52lc9ld5ckb7e6jkd60f1d_160x160.jpg">
                                            </a>
                                            <ul class="kk">
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50273?mt=12.848.r82960.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        卫衣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50249?mt=12.848.r82959.3253#sp_topbanner"
                                                    class="pagani_log_link on" data-log-bkey="">
                                                        衬衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50244?mt=12.848.r82960.3253#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        T恤
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50253?mt=12.848.r82960.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        毛衣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50243?mt=10.848.r29125#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        时尚套装
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10061115?mt=12.848.r82959.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        打底衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/51826?mt=12.848.r82921.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        新款外套
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50255?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        西装
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/20002784?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        轻薄防晒
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50258?mt=12.848.r123118.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        针织衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50248?mt=12.848.r123167.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        背心吊带
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10055560?mt=12.848.r123124.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        字母T恤
                                                    </a>
                                                </li>
                                            </ul>
                                        </dd>
                                    </div>
                                    <div class="type_section first">
                                        <dt>
                                            <a href="http://list.mogujie.com/book/clothing/52172?mt=12.848.r82917.3253#sp_topbanner">
                                                潮流时尚
                                            </a>
                                        </dt>
                                        <dd>
                                            <a class="cat_img" href="http://list.mogujie.com/book/clothing/52172?mt=12.848.r82917.3253#sp_topbanner">
                                                <img src="/home/images/170822_5bkei2f91ck7a9hkl977465g39l4i_160x160.jpg">
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10062604?mt=12.848.r82932.3253#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        韩版卫衣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10055532?mt=12.848.r82932.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        性感V领
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/20000345?mt=12.848.r196713.3253#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        韩版毛衣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10055545?mt=12.848.r82955.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        绑带衬衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10057951?mt=12.848.r196713.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        印花T恤
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10055521?mt=12.848.r82932.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        针织短袖
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10058827?mt=12.848.r196713.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        时尚刺绣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10056918?mt=12.848.r196713.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        俏皮露肩
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50267?mt=12.848.r196713.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        牛仔衬衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10056629?mt=12.848.r196713.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        一字领
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10056523?mt=12.848.r123122.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        喇叭袖
                                                    </a>
                                                </li>
                                            </ul>
                                        </dd>
                                    </div>
                                    <div class="type_section first">
                                        <dt>
                                            <a href="http://list.mogujie.com/book/clothing/10054926?mt=12.848.r82912.3253#sp_topbanner">
                                                上新推荐
                                            </a>
                                        </dt>
                                        <dd>
                                            <a class="cat_img" href="http://list.mogujie.com/book/clothing/10054926?mt=12.848.r82912.3253#sp_topbanner">
                                                <img src="/home/images/170822_7j0gjd28hb350gc3lhi88gdfejecj_160x160.jpg">
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10054926?mt=12.848.r196715.3253#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        春季新品
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10059083?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        长袖衬衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10059854?mt=12.848.r196713.3253#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        毛衣外套
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50261?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        风衣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/52412?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        长款毛衣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50259?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        棒球外套
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50270?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        牛仔外套
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50255?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        人气西装
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10055559?mt=12.848.r123121.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        条纹T恤
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/51172?mt=12.848.r82953.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        短款外套
                                                    </a>
                                                </li>
                                            </ul>
                                        </dd>
                                    </div>
                                    <div class="type_section first">
                                        <dt>
                                            <a href="http://list.mogujie.com/book/clothing/10060148?mt=12.848.r82927.3253#sp_topbanner">
                                                经典必备
                                            </a>
                                        </dt>
                                        <dd>
                                            <a class="cat_img" href="http://list.mogujie.com/book/clothing/10060148?mt=12.848.r82927.3253#sp_topbanner">
                                                <img src="/home/images/170822_2c9596g851ei6lhb5ke460k8k5gf7_160x160.jpg">
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10059867?mt=12.848.r82932.3253#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        连帽卫衣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10062251?mt=12.848.r82952.3253#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        马甲
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/51404?mt=12.848.r123123.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        针织开衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10055077?mt=12.848.r82950.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        格子衬衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/52174?mt=12.848.r82931.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        条纹衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/52171?mt=12.848.r82952.3253#sp_topbanner"
                                                    class="pagani_log_link hot" data-log-bkey="">
                                                        时髦皮衣
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50587?mt=12.848.r82938.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        白衬衫
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10062745?mt=12.848.r82952.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        纯色T恤
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/50265?mt=12.848.r82940.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        情侣装
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://list.mogujie.com/book/clothing/10055561?mt=12.848.r153989.3253#sp_topbanner"
                                                    class="pagani_log_link" data-log-bkey="">
                                                        宽松T恤
                                                    </a>
                                                </li>
                                            </ul>
                                        </dd>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="sub_title" id="category_all">
                        衬衫
                    </h3>
                </div>
                <!--图墙导航: 排序和价格筛选等-->
      
                <!-- 图墙list部分 -->
                <div class="wall_goods_box" id="wall_goods_box">
                    <div class="param_container">
                        <!--acm 业务后缀-->
                        <input type="hidden" class="acm_gmvtype" value="-dm1_5002">
                        <input type="hidden" class="ajax_url" value="//list.mogujie.com/search">
                        <input type="hidden" class="ajax_param" param-name="_version" value="8193">
                        <input type="hidden" class="ajax_param" param-name="ratio" value="3:4">
                        <input type="hidden" class="ajax_param" param-name="cKey" value="15" autocomplete="off">
                        <input type="hidden" class="ajax_param" param-name="page" value="2" autocomplete="off">
                        <input type="hidden" class="ajax_param" param-name="sort" value="pop"
                        autocomplete="off">
                        <input type="hidden" class="ajax_param" param-name="ad" value="0" autocomplete="off">
                        <!--如果cookie里有__cps,就是2-->
                        <input type="hidden" class="ajax_param" param-name="fcid" value="50249"
                        autocomplete="off">
                        <input type="hidden" class="ajax_param" param-name="action" value="clothing"
                        autocomplete="off">
                        <!-- other param -->
                        <input type="hidden" class="ajax_param" param-name="mt" value="12.18785.r154041.24234">
                        <input type="hidden" class="ajax_param" param-name="acm" value="3.mce.1_10_18848.18785..ccy5aqRCyY60Q.pos_2-m_191856-sd_119-mf_15261_944839-idx_0-mfs_16-dm1_5000">
                        <input type="hidden" class="ajax_param" param-name="ptp" value="1._mf1_1239_15261.0.0.8rWZahsR">
                    </div>
                    <div class="J_scroll_wallbox clearfix" id="J_scroll_wallbox" style="height: auto;">
                        <div class="goods_list_mod clearfix J_mod_hidebox J_mod_show">
                            <div class="iwf goods_item ratio3x4" data-tradeitemid="1lxe82g	" goods-index="0"
                           		 is-exposed="true">
                                <a class="likeLink yahei" href="http://list.mogujie.com/relative?pid=8872&amp;iid=1lxe82g&amp;acm=3.ms.1_4_1lxe82g.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_361422889_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15&amp;itemType=6"
                                target="_blank">
                                    找相似
                                </a>
                                <a rel="nofollow" href="/home/spxq"
                                class="img pagani_log_link J_dynamic_imagebox loading_bg_120 J_loading_success"
                                target="_blank" suffix-model="goods_dpr" suffix-ratio="3:4" img-src="http://s3.mogucdn.com/mlcdn/c45406/180414_7efke8aee07jfd02j3cae4ba5kl13_640x960.jpg"
                                need-remove="no" data-log-bkey="..0" data-ext-acm="3.ms.1_4_1lxe82g.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_361422889_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_0-dm1_5002"
                                data-ptp-customc="">
                                    <img class="J_dynamic_img fill_img" src="/home/images/180306_7dk8a09l7b577e3icc724194ah1k0_200x240.jpg"
                                    alt="">
                                </a>
                                <a rel="nofollow" target="_blank" href="#"
                                class="pagani_log_link goods_info_container" data-ext-acm="3.ms.1_4_1lxe82g.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_361422889_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_0-dm1_5002"
                                data-log-bkey="..0" data-ptp-customc="">
                                    <p class="title yahei fl" style="height:40px;margin-bottom:3px">
                                        2018夏装新款韩版宽松显瘦中长款竖条纹衬衫系带外套防晒衫衬衣上衣潮
                                    </p>
                                    <div class="goods_info fl">
                                        <b class="price_info yahei">
                                            ¥39
                                        </b>
                                        <p class="org_price fl yahei">
                                            ¥&nbsp;
                                            <span>
                                                70
                                            </span>
                                        </p>
                                        <span class="fav_num fr">
                                            <img src="./商品列表_files/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png"
                                            alt="">
                                            1187
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="iwf goods_item ratio3x4" data-tradeitemid="1lucmci" goods-index="1"
                            is-exposed="true">
                                <a class="likeLink yahei" href="http://list.mogujie.com/relative?pid=8872&amp;iid=1lucmci&amp;acm=3.ms.1_4_1lucmci.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_352438690_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15&amp;itemType=6"
                                target="_blank">
                                    找相似
                                </a>
                                <a rel="nofollow" href="http://shop.mogujie.com/detail/1lucmci?acm=3.ms.1_4_1lucmci.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_352438690_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_1-dm1_5002&amp;cparam=MTUyNTk1MzExNF8xMWtfNDA2ZjBiY2ExYTA4N2E2Y2Y2NGQ2YWYzYmVhNmEwMWJfM18wXzM1MjQzODY5MF80Y18wXzBfMF85OV8xXzNfbG9jLTA%3D"
                                class="img pagani_log_link J_dynamic_imagebox loading_bg_120 J_loading_success"
                                target="_blank" suffix-model="goods_dpr" suffix-ratio="3:4" img-src="http://s3.mogucdn.com/mlcdn/c45406/180323_8588cig8jk1gkcalhk5k26hcj4b5h_640x960.jpg"
                                need-remove="no" data-log-bkey="..1" data-ext-acm="3.ms.1_4_1lucmci.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_352438690_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_1-dm1_5002"
                                data-ptp-customc="">
                                    <img class="J_dynamic_img fill_img" src="./商品列表_files/180323_8588cig8jk1gkcalhk5k26hcj4b5h_640x960.jpg_240x320.v1cAC.70.webp"
                                    alt="">
                                </a>
                                <a rel="nofollow" target="_blank" href="http://shop.mogujie.com/detail/1lucmci?acm=3.ms.1_4_1lucmci.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_352438690_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_1-dm1_5002&amp;cparam=MTUyNTk1MzExNF8xMWtfNDA2ZjBiY2ExYTA4N2E2Y2Y2NGQ2YWYzYmVhNmEwMWJfM18wXzM1MjQzODY5MF80Y18wXzBfMF85OV8xXzNfbG9jLTA%3D"
                                class="pagani_log_link goods_info_container" data-ext-acm="3.ms.1_4_1lucmci.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_352438690_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_1-dm1_5002"
                                data-log-bkey="..1" data-ptp-customc="">
                                    <p class="title yahei fl" style="height:40px;margin-bottom:3px">
                                        韩版新款甜美小清新荷叶边双层喇叭袖收腰显瘦单排扣纯色衬衫上衣
                                    </p>
                                    <div class="goods_info fl">
                                        <b class="price_info yahei">
                                            ¥85
                                        </b>
                                        <p class="org_price fl yahei">
                                            ¥&nbsp;
                                            <span>
                                                140
                                            </span>
                                        </p>
                                        <span class="fav_num fr">
                                            <img src="./商品列表_files/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png"
                                            alt="">
                                            2489
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="iwf goods_item ratio3x4" data-tradeitemid="1lu4vni" goods-index="2"
                            is-exposed="true">
                                <a class="likeLink yahei" href="http://list.mogujie.com/relative?pid=8872&amp;iid=1lu4vni&amp;acm=3.ms.1_4_1lu4vni.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_351322269_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15&amp;itemType=6"
                                target="_blank">
                                    找相似
                                </a>
                                <a rel="nofollow" href="http://shop.mogujie.com/detail/1lu4vni?acm=3.ms.1_4_1lu4vni.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_351322269_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_2-dm1_5002&amp;cparam=MTUyNTk1MzExNF8xMWtfNDA2ZjBiY2ExYTA4N2E2Y2Y2NGQ2YWYzYmVhNmEwMWJfM18wXzM1MTMyMjI2OV80ZjhmXzBfMF8wXzIxNl8xXzNfbG9jLTA%3D"
                                class="img pagani_log_link J_dynamic_imagebox loading_bg_120 J_loading_success"
                                target="_blank" suffix-model="goods_dpr" suffix-ratio="3:4" img-src="http://s3.mogucdn.com/mlcdn/c45406/180321_58d637k9bd09bch1clib2ljbb22h1_640x960.jpg"
                                need-remove="no" data-log-bkey="..2" data-ext-acm="3.ms.1_4_1lu4vni.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_351322269_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_2-dm1_5002"
                                data-ptp-customc="">
                                    <img class="J_dynamic_img fill_img" src="./商品列表_files/180321_58d637k9bd09bch1clib2ljbb22h1_640x960.jpg_240x320.v1cAC.70.webp"
                                    alt="">
                                </a>
                                <a rel="nofollow" target="_blank" href="http://shop.mogujie.com/detail/1lu4vni?acm=3.ms.1_4_1lu4vni.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_351322269_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_2-dm1_5002&amp;cparam=MTUyNTk1MzExNF8xMWtfNDA2ZjBiY2ExYTA4N2E2Y2Y2NGQ2YWYzYmVhNmEwMWJfM18wXzM1MTMyMjI2OV80ZjhmXzBfMF8wXzIxNl8xXzNfbG9jLTA%3D"
                                class="pagani_log_link goods_info_container" data-ext-acm="3.ms.1_4_1lu4vni.15.1343-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_6-c_1_3_351322269_0_0_3-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_1-bid_15-idx_2-dm1_5002"
                                data-log-bkey="..2" data-ptp-customc="">
                                    <p class="title yahei fl" style="height:40px;margin-bottom:3px">
                                        小清新polo领格子衬衫女2018春装韩版宽松长袖学生棉麻衬衣开衫薄外套潮
                                    </p>
                                    <div class="goods_info fl">
                                        <b class="price_info yahei">
                                            ¥49.9
                                        </b>
                                        <p class="org_price fl yahei">
                                            ¥&nbsp;
                                            <span>
                                                84.29
                                            </span>
                                        </p>
                                        <span class="fav_num fr">
                                            <img src="./商品列表_files/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png"
                                            alt="">
                                            893
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="iwf goods_item ratio3x4" data-tradeitemid="1lx0og8" goods-index="3"
                            is-exposed="true">
                                <a class="likeLink yahei" href="http://list.mogujie.com/relative?pid=8872&amp;iid=1lx0og8&amp;acm=3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15&amp;itemType=11"
                                target="_blank">
                                    找相似
                                </a>
                                <a rel="nofollow" href="http://shop.mogujie.com/detail/1lx0og8?acm=3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15-idx_3-dm1_5002"
                                class="img pagani_log_link J_dynamic_imagebox loading_bg_120 J_loading_success"
                                target="_blank" suffix-model="goods_dpr" suffix-ratio="3:4" img-src="http://s3.mogucdn.com/mlcdn/c45406/180411_776b8e5g7dbccgkh15g119gkj3h6f_640x960.jpg"
                                need-remove="no" data-log-bkey="..3" data-ext-acm="3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15-idx_3-dm1_5002"
                                data-ptp-customc="">
                                    <img class="J_dynamic_img fill_img" src="./商品列表_files/180411_776b8e5g7dbccgkh15g119gkj3h6f_640x960.jpg_240x320.v1cAC.70.webp"
                                    alt="">
                                </a>
                                <a rel="nofollow" target="_blank" href="http://shop.mogujie.com/detail/1lx0og8?acm=3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15-idx_3-dm1_5002"
                                class="pagani_log_link goods_info_container" data-ext-acm="3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15-idx_3-dm1_5002"
                                data-log-bkey="..3" data-ptp-customc="">
                                    <p class="title yahei fl" style="height:40px;margin-bottom:3px">
                                        2018春夏新款韩版宽松百搭条纹薄款防紫外线防晒衣外套衬衫
                                    </p>
                                    <div class="goods_info fl">
                                        <b class="price_info yahei">
                                            ¥69
                                        </b>
                                        <p class="org_price fl yahei">
                                            ¥&nbsp;
                                            <span>
                                                98.58
                                            </span>
                                        </p>
                                        <span class="fav_num fr">
                                            <img src="./商品列表_files/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png"
                                            alt="">
                                            2310
                                        </span>
                                    </div>
                                </a>
                            </div>
                             <div class="iwf goods_item ratio3x4" data-tradeitemid="1lx0og8" goods-index="3"
                            is-exposed="true">
                                <a class="likeLink yahei" href="http://list.mogujie.com/relative?pid=8872&amp;iid=1lx0og8&amp;acm=3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15&amp;itemType=11"
                                target="_blank">
                                    找相似
                                </a>
                                <a rel="nofollow" href="http://shop.mogujie.com/detail/1lx0og8?acm=3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15-idx_3-dm1_5002"
                                class="img pagani_log_link J_dynamic_imagebox loading_bg_120 J_loading_success"
                                target="_blank" suffix-model="goods_dpr" suffix-ratio="3:4" img-src="http://s3.mogucdn.com/mlcdn/c45406/180411_776b8e5g7dbccgkh15g119gkj3h6f_640x960.jpg"
                                need-remove="no" data-log-bkey="..3" data-ext-acm="3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15-idx_3-dm1_5002"
                                data-ptp-customc="">
                                    <img class="J_dynamic_img fill_img" src="./商品列表_files/180411_776b8e5g7dbccgkh15g119gkj3h6f_640x960.jpg_240x320.v1cAC.70.webp"
                                    alt="">
                                </a>
                                <a rel="nofollow" target="_blank" href="http://shop.mogujie.com/detail/1lx0og8?acm=3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15-idx_3-dm1_5002"
                                class="pagani_log_link goods_info_container" data-ext-acm="3.ms.1_4_1lx0og8.15.73701-76374-69000.0Q42TqRE3L6pK.sd_117_116_116-swt_15-imt_11-t_0Q42TqRE3L6pK-lc_3-fcid_50249-pid_180-pit_5-bid_15-idx_3-dm1_5002"
                                data-log-bkey="..3" data-ptp-customc="">
                                    <p class="title yahei fl" style="height:40px;margin-bottom:3px">
                                        2018春夏新款韩版宽松百搭条纹薄款防紫外线防晒衣外套衬衫
                                    </p>
                                    <div class="goods_info fl">
                                        <b class="price_info yahei">
                                            ¥69
                                        </b>
                                        <p class="org_price fl yahei">
                                            ¥&nbsp;
                                            <span>
                                                98.58
                                            </span>
                                        </p>
                                        <span class="fav_num fr">
                                            <img src="./商品列表_files/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png"
                                            alt="">
                                            2310
                                        </span>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--图墙相关输出完成-->
        </div>
        <div class="foot J_siteFooter" data-ptp="_foot">
        </div>

        </script>

            </script>

        <script type="text/javascript">
            (function() {
                var wWidth = $(window).width();
                if (wWidth < 1212) {
                    $('body').addClass('media_screen_960');
                } else {
                    $('body').addClass('media_screen_1200');
                }
                window.MoGu && $.isFunction(MoGu.set) && MoGu.set('initTime', (new Date()).getTime());
                var ua = navigator.userAgent;
                var is_plat_ipad = ua.match(/(iPad).*OS\s([\d_]+)/);
                if (is_plat_ipad) {
                    $('body').addClass('media_ipad');
                }
                var is_plat_ipadApp = ua.indexOf('MogujieHD') >= 0 || ua.indexOf('Mogujie4iPad') >= 0 || location.href.indexOf('_atype=ipad') >= 0;
                if (is_plat_ipadApp) {
                    $('body').addClass('media_ipad_app');
                    $('body').append('<style type="text/css">.header_2015,.header_nav,.foot .foot_wrap{display: none;}.foot{height: 0;background: none;}.back2top_wrap{height:0;width:0;overflow:hidden;opacity:0;}</style>');
                    setTimeout(function() {
                        $('.back2top_wrap').remove();
                    },
                    1000)
                }
            })();
        </script>

        
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] ||
                function() { (i[r].q = i[r].q || []).push(arguments)
                },
                i[r].l = 1 * new Date();
                a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-25590490-1', 'auto');
            ga('send', 'pageview');
        </script>
       



@endsection