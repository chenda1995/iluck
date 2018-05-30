@extends('layout.home1')

@section('title',$title)


@section('content')

       
        
        <input type="hidden" id="J_searchbar_flag" value="show">
        <!--页面内容-->
      
        <div id="body_wrapp" style="margin-top: 115px;">
            <div class="wrap">
                <!--隐藏域不要了,用来拼接_b_key的前一位.的-->
                <!--<input type="hidden" id="pagani_log_partc" value="jiadian_0" />
                -->
                <div id="condition_box">
                    <div id="search_condition_box">
                        
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
                    @foreach($goods as $k=>$v)
                            <div class="iwf goods_item ratio3x4" data-tradeitemid="1lxe82g  " goods-index="0"
                                 is-exposed="true">
                                <a class="likeLink yahei" href="/home/spxq/{{$v->gid}}"
                                target="_blank">
                                    
                                </a>

                                <a  gid="{{$v->gid}}"  href="/home/spxq/{{$v->gid}}" target="_blank"

                                class="qwe img pagani_log_link J_dynamic_imagebox loading_bg_120 J_loading_success"
                                 >
                                    <img class="J_dynamic_img fill_img" src="{{ URL::asset($v->gpic[0]) }}"
                                    alt="">
                                </a> 
                                <a rel="nofollow" target="_blank" href="/home/spxq/{{$v->gid}}"
                                class="pagani_log_link goods_info_container" >
                                    <p class="title yahei fl" style="height:40px;margin-bottom:3px">
                                        {{$v->gname}}
                                    </p>
                                    <div class="goods_info fl">
                                        <b class="price_info yahei">
                                           {{$v->price}}
                                        </b>
                                        <p class="org_price fl yahei">
                                            ¥&nbsp;
                                            <span>
                                                {{$v->price/0.8}}
                                            </span>
                                        </p>
                                        <span class="fav_num fr">
                                            <img src="/home/商品列表_files/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png"
                                            alt="">
                                            1187
                                        </span>
                                    </div>
                                </a>
                                
                            </div>
                    @endforeach

                   <!--  <script>
                        
                            $('.qwe').click(function(){
                                $(this).each(function(){
                                   var gid = $(this).attr('gid');
                                   
                                   $.get('/home/cardo1',{gid:gid},function(data){
                            
                                   });
                                })
                            })

                    </script> -->
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