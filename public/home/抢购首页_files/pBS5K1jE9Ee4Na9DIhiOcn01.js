//# sourceMappingURL=h5_test_globalmod/index.js.map
window.globalSchema = window.globalSchema || {
    "background": [{
        "color": "#fff",
        "src": "",
        "showHead": "hide",
        "repeat": "repeat-x",
        "showTopBanner": "hide"
    }],
    "xcxConfig": [{
        "backgroundColor": "#efefef",
        "navigationBarBackgroundColor": "#ffffff",
        "navigationBarTitleText": "",
        "navigationBarTextStyle": "black",
        "backgroundTextStyle": "dark"
    }]
};
var _tmpCubeConfig = {
    "MCUBE_MOD_ID_341326": [{
        "pluginData": {},
        "staticData": null,
        "formData": {
            "mait": {
                "models": [{
                    "data": "请在右侧导入数据-_->",
                    "sourceType": "mce",
                    "sourceKey": "43532",
                    "maitTemplateIDs": "62",
                    "maitTemplateID": "62"
                }]
            },
            "type": {
                "models": [{
                    "pageWidth": "auto"
                }]
            },
            "baseConfig": {
                "models": [{
                    "logo": "https://s10.mogucdn.com/p1/170307/idid_ifrteyrygmztqzrxmuzdambqhayde_304x96.png",
                    "__key": 45886,
                    "bg": "#FF0077",
                    "homeLink": "http://act.mogujie.com/tuancube/index",
                    "hoverBg": "#D80065"
                }]
            }
        }
    }],
    "MCUBE_MOD_ID_434742": [{
        "pluginData": {},
        "staticData": {
            "js": ["/__/mfp/meili-cube-common-slider/assets/0.1.2/CubeCommonSlider/index.js"],
            "css": ["/__/mfp/meili-cube-common-slider/assets/0.1.2/CubeCommonSlider/index.css"]
        },
        "formData": {
            "sliderMce": {
                "models": [{
                    "data": "请在右侧导入数据-_->",
                    "sourceType": "mce",
                    "sourceKey": "47165",
                    "maitTemplateIDs": "117",
                    "maitTemplateID": "117",
                    "size": "",
                    "coolData": false
                }]
            },
            "entryMce": {
                "models": [{
                    "data": "请在右侧导入数据-_->",
                    "sourceType": "mce",
                    "sourceKey": "47150",
                    "maitTemplateIDs": "109",
                    "maitTemplateID": "109",
                    "size": "",
                    "coolData": false
                }]
            },
            "rightMce": {
                "models": [{
                    "data": "请在右侧导入数据-_->",
                    "sourceType": "mce",
                    "sourceKey": "47156",
                    "maitTemplateIDs": "109",
                    "maitTemplateID": "109",
                    "size": "",
                    "coolData": false
                }]
            },
            "hotSearchMce": {
                "models": [{
                    "data": "请在右侧导入数据-_->",
                    "sourceType": "mce",
                    "sourceKey": "47255",
                    "maitTemplateIDs": "62",
                    "maitTemplateID": "62",
                    "size": "",
                    "coolData": false
                }]
            }
        }
    }],
    "MCUBE_MOD_ID_19873": [{
        "pluginData": [],
        "staticData": {
            "css": ["/static/cube/freemarker/base/base-pc.css"],
            "js": ["/static/cube/freemarker/base/base-pc.js", "/newtown/pagani/assets/widgets/all/wall-exposure-log.js", "/static/cube/freemarker/module/dynamic-dom.js", "/static/cube/freemarker/module/scroll-ajax-jsonp.js"]
        },
        "formData": {
            "tabNav": {
                "models": [
                // {
                    // "objId": "J_cate_tab_all",
                    // "navId": "20002675",
                    // "navName": "精选"
                // },
                // {
                    // "objId": "J_cate_tab_clothing",
                    // "navId": "20002676",
                    // "navName": "女装"
                // },
                // {
                    // "objId": "J_cate_tab_shoes",
                    // "navId": "20002677",
                    // "navName": "女鞋"
                // },
                // {
                    // "objId": "J_cate_tab_bags",
                    // "navId": "20002678",
                    // "navName": "包包"
                // },
                // {
                    // "objId": "J_cate_tab_beauty",
                    // "navId": "20002679",
                    // "navName": "美妆"
                // },
                // {
                    // "objId": "J_cate_tab_boyfriend",
                    // "navId": "20002680",
                    // "navName": "男友"
                // },
                // {
                    // "navId": "20002681",
                    // "navName": "内衣",
                    // "objId": ""
                // },
                // {
                    // "objId": "J_cate_tab_home",
                    // "navId": "20002682",
                    // "navName": "生活"
                // },
                {
                    "sourceType": 1,
                    "navId": "20002683",
                    "contentType": 1,
                    "navName": "配饰"
                }]
            },
            "titlePic": {
                "models": [{
                    "leftTlPic": "https://s10.mogucdn.com/p1/151008/upload_ieywkzdemy3giyzrgqzdambqmeyde_600x40.png",
                    "leftTlText": "商品",
                    "leftTlInfo": "每日0点开抢",
                    "navTop": 95
                }]
            }
        }
    }]
},
_tmpModuleIdToSystemId = {
    "22069": {
        "originId": 19873,
        "index": 0
    },
    "342019": {
        "originId": 341326,
        "index": 0
    },
    "450450": {
        "originId": 434742,
        "index": 0
    }
},
_cubeKey,
__addModuleIdIndex = function(len, key) {
    key = key.replace('MCUBE_MOD_ID_', '');
    for (var _tmpModKey in _tmpModuleIdToSystemId) {
        if (_tmpModuleIdToSystemId[_tmpModKey].originId == key) {
            _tmpModuleIdToSystemId[_tmpModKey].index += len;
        }
    }
};
window._cubeConfig = window._cubeConfig || {};
for (_cubeKey in _tmpCubeConfig) {
    if (window._cubeConfig[_cubeKey]) {
        var _tmpLen = window._cubeConfig[_cubeKey].length;
        window._cubeConfig[_cubeKey] = window._cubeConfig[_cubeKey].concat(_tmpCubeConfig[_cubeKey]);
        __addModuleIdIndex(_tmpLen, _cubeKey);
    } else {
        window._cubeConfig[_cubeKey] = _tmpCubeConfig[_cubeKey];
    }
}
window.__moduleIdToSystemId = window.__moduleIdToSystemId || {};
for (_cubeKey in _tmpModuleIdToSystemId) {
    window.__moduleIdToSystemId[_cubeKey] = _tmpModuleIdToSystemId[_cubeKey];
}
window.__define = window.define;
window.__require = window.require;
window.MOGU_DEV = 0; !
function(t) {
    function a(i) {
        if (e[i]) return e[i].exports;
        var n = e[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return t[i].call(n.exports, n, n.exports, a),
        n.l = !0,
        n.exports;
    }
    var e = {};
    a.m = t,
    a.c = e,
    a.i = function(t) {
        return t;
    },
    a.d = function(t, e, i) {
        a.o(t, e) || Object.defineProperty(t, e, {
            configurable: !1,
            enumerable: !0,
            get: i
        });
    },
    a.n = function(t) {
        var e = t && t.__esModule ?
        function() {
            return t["default"];
        }: function() {
            return t;
        };
        return a.d(e, "a", e),
        e;
    },
    a.o = function(t, a) {
        return Object.prototype.hasOwnProperty.call(t, a);
    },
    a.p = "",
    a(a.s = 3);
} ([function(t, a) {
    /*!! 19873 */
    require(["base/MoGu"],
    function(t) {
        function a(t) {
            var a = t,
            e = "";
            a.lefttop_taglist.length > 0 && (e = '<img class="top_icon" src="' + a.lefttop_taglist[0] + '">');
            var i = "end" == a.status ? a.leftTimeOrg: a.leftTime;
            return ['<div class="utuan_goods_v2 fl">', '<a href="' + a.link + '" class="goods_img_link loading_bg_80 J_dynamic_imagebox" need-remove="no" target="_blank" data-ptp-customc="' + l + '_wall_docs" img-src="' + a.img + '">' + e + "</a>", '<a href="' + a.link + '" class="utw_goods_info clearfix" target="_blank" data-ptp-customc="' + l + '_wall_">', '<div class="pricebox clearfix">', '<span class="save_num yahei fr">原价' + a.savePrice + "</span>", '<span class="now_price fl"><em class="yahei">¥</em>' + a.price + "</span>", "</div>", '<p class="goods_name_link text_hide" >' + a.title + "</p>", "</a>", '<div class="utw_bottom_bar">', '<p class="cut_time yahei fr">' + i + "</p>",  "</div>", "</div>"].join("");
        }
        function e(t) {
            if (null != t.wallobj) {
                if (t.wall && t.wall.docs) for (var a = t.wall.docs,
                e = 0; e < a.length; e++) {
                    var i = a[e];
                    if (i && i.acm) if (window.acmGmvType) i.acm += "-dm1_" + window.acmGmvType,
                    i.link = M.fn.setQueryString(i.link, "acm", i.acm);
                    else {
                        var n = self.options.wallobj.find(".acm_gmvtype").val();
                        i.acm += n,
                        i.link = M.fn.setQueryString(i.link, "acm", i.acm);
                    }
                }
                var o = t.wallobj;
                if (o.find(".sort_name").val() == t.param.fcid && o.find(".scroll_no").val() == t.param.page) {
                    l = t.param ? t.param.ptpPartC: "",
                    r && r.scrollAjaxPushLog(t);
                    var d = t.wall.docs;
                    s.packageItems(d),
                    t.wall.isEnd && s.scrollEnd(),
                    o.find(".scroll_no").val(parseInt(t.param.page, 10) + 1),
                    o.find(".key_book").val(t.book);
                }
            }
        }
        var i = $.browser.msie && "6.0" == $.browser.version && !$.support.style,
        n = $("#tuan_main"),
        o = $(window).width(),
        s = {},
        l = "",
        r = !1;
        if (n.length > 0 && ($(".ajax_uid").val(t.util.getCookie("__mgjuuid")), $(".ajax_userid").val(t.util.getCookie("__ud_")), window.MoGu && t.AjaxWallLoader)) {
            var d = {
                wallobj: n,
                bottomHeight: 2e3,
                ajaxSuccBack: e,
                getItemHtmlFun: a
            };
            s = new t.AjaxWallLoader(d),
            s.init(),
            function() {
                function t(t) {
                    s.reLoadAjax(),
                    t.parent().hasClass("goods_state_tab") ? $(window).scrollTop($(".utuan_con_body").offset().top + 2) : $(window).scrollTop($("#nb_static").offset().top + 2),
                    r && r.resetBaseParams();
                }
                function a(t) {
                    var a = d.find(".hover_bt"),
                    e = t.width() * t.index();
                    a.css("left", e);
                }
                var e = $("#nb_static"),
                l = $("#nb_moved"),
                d = $(".utuan_navi_box"),
                c = d.find(".navi_bar");
                o >= 1335 && e.find(".goods_fixed_tab").show(),
                d.length > 0 && !i && l.html(e.html()),
                a($("#nb_static").find(".tab_show")),
                c.hover(function() {},
                function() {
                    a($("#nb_static").find(".tab_show"));
                }),
                c.find(".tab").hover(function() {
                    a($(this));
                }),
                d.on("click", ".goods_fixed_tab .tab_item",
                function() {
                    var t = $(this);
                    $("#tab_" + t.attr("tab-id")).trigger("click").trigger("mouseenter"),
                    t.addClass("tab_active").siblings().removeClass("tab_active");
                }),
                d.on("click", ".goods_sort_tab .tab",
                function(a) {
                    a.preventDefault();
                    var i = $(this),
                    o = i.index();
                    e.find("#tab_item_" + i.attr("tab-id")).addClass("tab_active").siblings().removeClass("tab_active"),
                    e.find(".goods_sort_tab .tab").eq(o).addClass("tab_show").siblings().removeClass("tab_show"),
                    l.find(".goods_sort_tab .tab").eq(o).addClass("tab_show").siblings().removeClass("tab_show"),
                    s.isAjaxEnd = !0,
                    n.find(".sort_name").val(i.attr("tab-id")),
                    n.find(".scroll_no").val("1"),
                    n.find(".key_book").val(""),
                    t(i);
                }),
                d.on("click", ".state_tab",
                function(a) {
                    a.preventDefault();
                    var e = $(this);
                    e.hasClass("tab_show") || (e.addClass("tab_show").siblings().removeClass("tab_show"), d.find(".arrow_tab").attr("sort-type", "desc"), d.find(".arrow_tab .tab_text").removeClass("up_arrow").addClass("down_arrow"), s.isAjaxEnd = !0, n.find(".key_sort").val(e.attr("sort-id")), n.find(".scroll_no").val("1"), n.find(".key_book").val(""), t(e));
                }),
                d.on("click", ".arrow_tab",
                function(a) {
                    a.preventDefault();
                    var e = $(this);
                    e.hasClass("tab_show") ? "desc" == e.attr("sort-type") ? (e.attr("sort-type", "asc"), e.find(".tab_text").removeClass("down_arrow").addClass("up_arrow")) : (e.attr("sort-type", "desc"), e.find(".tab_text").removeClass("up_arrow").addClass("down_arrow")) : (d.find(".arrow_tab").attr("sort-type", "desc"), d.find(".arrow_tab .tab_text").removeClass("up_arrow").addClass("down_arrow"), e.addClass("tab_show").siblings().removeClass("tab_show")),
                    s.isAjaxEnd = !0,
                    n.find(".key_sort").val(e.attr("sort-id") + e.attr("sort-type")),
                    n.find(".scroll_no").val("1"),
                    n.find(".key_book").val(""),
                    t(e);
                });
            } (),
            t.WallExposeLog && (r = new t.WallExposeLog());
        }
    });
},
function(t, a) {
    require(["base/MoGu"],
    function(t) {
        var a = $(".MCUBE_MOD_ID_341326"),
        e = window.location.pathname,
        i = new RegExp(e),
        n = function() {
            this.init();
        };
        n.prototype = {
            constructor: n,
            init: function() {
                var t = this;
                t.request(),
                t.checkImage(a);
            },
            bind: function() {},
            request: function() {
                this.request_mce();
            },
            request_mce: function() {
                var t = this;
                a.find(".lazyData").each(function() {
                    var a = $(this);
                    a.listenToLazyData(function(e, i, n, o, s) {
                        if (s && s.length > 0) {
                            var l = "";
                            $.each(s,
                            function(t, a) {
                                l += a.link && a.title ? '<a href="' + a.link + '" target="_blank" class="index_nav_main_item fl">' + a.title + "</a>": "";
                            }),
                            a.html(l),
                            setTimeout(function() {
                                t.fn_callback();
                            },
                            50);
                        }
                    });
                });
            },
            fn_callback: function() {
                a.find(".index_nav_main_item").each(function() {
                    var t = $(this),
                    a = t.attr("href");
                    i.test(a) && (t.attr("target", ""), t.addClass("item_hover"));
                });
            },
            checkImage: function(a) {
                t.dynamicImage && t.dynamicImage.checkImages && (a ? t.dynamicImage.checkImages(a) : t.dynamicImage.checkImages());
            }
        },
        new n();
    });
},
function(t, a) {
    /*!! 434742 */
    define("MCUBE_MOD_ID_434742:entry.tpl", [],
    function() {
        return '{{~ it:item:index }}\n  {{? index != 1 }}\n    <a target="_blank" class="tuanSlider_entry_item J_dynamic_imagebox cube-acm-node" img-src="{{= item.image }}" href="{{= item.link || \'javascript:void(0);\' }}" data-log-content="{{= item.acm }}" data-ext-acm="{{= item.acm }}" data-log-index="{{= index }}" data-log-iid="">\n      <div class="tuanSlider_entry_item_title" style="color: {{= item.titleColor ? item.titleColor : \'#fff\' }};">{{= item.title ? item.title : \'\' }}</div>\n      <div class="tuanSlider_entry_item_discr">{{= item.description ? item.description : \'\' }}</div>\n    </a>\n  {{??}}\n    <a target="_blank" style="height: 120px; border-top: 1px solid #fff; border-bottom: 1px solid #fff;" class="tuanSlider_entry_item J_dynamic_imagebox cube-acm-node" img-src="{{= item.image }}" href="{{= item.link || \'javascript:void(0);\' }}" data-log-content="{{= item.acm }}" data-ext-acm="{{= item.acm }}" data-log-index="{{= index }}" data-log-iid="">\n      <div class="tuanSlider_entry_item_title" style="color: {{= item.titleColor ? item.titleColor : \'#fff\' }};">{{= item.title ? item.title : \'\' }}</div>\n      <div class="tuanSlider_entry_item_discr">{{= item.description ? item.description : \'\' }}</div>\n    </a>\n  {{?}}\n{{~}}\n';
    }),
    define("MCUBE_MOD_ID_434742:slider.tpl", [],
    function() {
        return '<div class="mslide_content_box" id="pc_banner_default">\n  <div class="mslide_banners">\n    {{?it}}\n      {{~it:slide:index}}\n        <a rel="nofollow" class="preload_box_{{=index}} J_dynamic_imagebox mslide_banner cube-acm-node" href="{{= slide.link || \'javascript:void(0);\' }}" img-src="{{=slide.image}}" target="_blank" data-log-content="{{= slide.acm }}" data-ext-acm="{{= slide.acm }}" data-log-index="{{= index }}" data-log-iid="">\n          {{? slide.iconText  }}\n            {{? slide.isShowIcon === \'1\' }}\n            <img class="mSliderIcon-{{= index }} mslide_ad_icon mslide_ad_common"\n              id="mslide_ad_common"\n              src="https://s10.mogucdn.com/mlcdn/c45406/180206_24b40hd2f53hd4e5d174lc5f900e3_28x15.png"\n              />\n            {{?}}\n            <span class="mSliderIcon-{{= index }} mslide_ad_text mslide_ad_common">{{= slide.iconText }}</span>\n          {{?? slide.isShowIcon === \'1\' }}\n          <img class="mSliderIcon-{{= index }} mslide_ad_icon mslide_ad_common withoutText"\n            id="mslide_ad_common"\n            src="https://s10.mogucdn.com/mlcdn/c45406/180206_24b40hd2f53hd4e5d174lc5f900e3_28x15.png"\n            />\n          {{?}}\n        </a>\n      {{~}}\n    {{?}}\n  </div>\n</div>\n';
    }),
    require(["base/MoGu", "MSlider", "MCUBE_MOD_ID_434742:entry.tpl", "MCUBE_MOD_ID_434742:slider.tpl"],
    function(t, a, e, i) {
        var n = $(".MCUBE_MOD_ID_434742"),
        o = (n.find(".tuanSlider_entry_box"), n.find(".tuanSlider_slider_box"), n.find(".tuanSlider_right_box"),
        function() {
            this.init();
        });
        o.prototype = {
            constructor: o,
            init: function() {
                var t = this;
                t.request(),
                t.checkImage(n);
            },
            bind: function() {},
            request: function() {
                this.request_mce();
            },
            request_mce: function() {
                var o = this;
                n.find(".lazyData").each(function() {
                    var s = $(this);
                    s.listenToLazyData(function(l, r, d, c, _) {
                        if (_ && _.length > 0) {
                            if (s.is(".tuanSlider_entry_box")) {
                                var m = t.ui.getTemplate(e, _);
                                s.html(m);
                            } else if (s.is(".tuanSlider_slider_box")) {
                                var m = t.ui.getTemplate(i, _);
                                s.html(m);
                                var f = $("#pc_banner_default");
                                new a({
                                    bannerBox: f,
                                    isLazyImage: !0,
                                    autoTime: 4e3,
                                    turnMode: "slideFade",
                                    addTurnDot: "animDot"
                                });
                            } else if (s.is(".tuanSlider_right_box")) {
                                _ = _.slice(0, 1);
                                var m = t.ui.getTemplate(e, _);
                                s.html(m);
                            } else if (s.is(".tuanHotSearch")) {
                                var m = "<span>热门搜索：</span>";
                                _.length <= 0 && s.hide(),
                                $.each(_,
                                function(t, a) {
                                    m += '<a class="tuanHotSearch_item cube-acm-node" href="' + (a.link || "javascript:void(0);") + '" target="_blank" data-log-content="' + a.acm + '" data-ext-acm="' + a.acm + '" data-log-index="' + t + '" data-log-iid="">' + a.title + "</a>";
                                }),
                                s.html(m);
                            }
                            o.checkImage(n);
                        }
                    });
                });
            },
            checkImage: function(a) {
                t.dynamicImage && t.dynamicImage.checkImages && (a ? t.dynamicImage.checkImages(a) : t.dynamicImage.checkImages());
            }
        },
        new o();
    });
},
function(t, a, e) {
    e(1),
    e(2),
    t.exports = e(0);
}]);