!function(n,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(require("pc_selection_wall")):"function"==typeof define&&define.amd?define("pages/pc/category/index",["pc_selection_wall"],e):"object"==typeof exports?exports["pages/pc/category/index"]=e(require("pc_selection_wall")):n["pages/pc/category/index"]=e(n.pc_selection_wall)}(this,function(n){return function(n){function e(i){if(t[i])return t[i].exports;var a=t[i]={exports:{},id:i,loaded:!1};return n[i].call(a.exports,a,a.exports,e),a.loaded=!0,a.exports}var t={};return e.m=n,e.c=t,e.p="",e(0)}([function(n,e,t){"use strict";t(1);var i=t(5),a=t(6),c=function(n){var e=window._getCookie("__cps"),t=e?2:0,i=window._getQueryString();i.ad=i.ad?i.ad:t;var a=location.href.indexOf("mgj-pagani-wall");if(0>a){var c=location.pathname.split("/");!i.hasOwnProperty("action")&&c[2]&&(i.action=c[2]),!i.hasOwnProperty("fcid")&&c[3]&&(i.fcid=c[3])}window._setWallAllParams(i),n&&n(i)};c(function(n){a.render(n),i.init()})},function(n,e){},,,,function(e,t){e.exports=n},function(n,e,t){"use strict";var i=t(7),a={render:function(n){var e=window._getQueryString()||{};n&&n.action&&(e.action=n.action),n&&n.fcid&&(e.fcid=n.fcid),$.ajax({url:"//list.mogujie.com/sync/menu",data:{action:e.action,fcid:e.fcid},type:"get",dataType:"jsonp",timeout:12e3,crossDomain:!0,success:function(n){if(n.success&&"1001"==n.returnCode){var e=location.href.indexOf("mogujie.com");n.data.myPrefix="",e>-1&&(n.data.myPrefix="//list.mogujie.com");var t=M.lib.doT.template(i)(n.data);$("#condition_box").html(t)}}})}};n.exports=a},function(n,e){n.exports='\n\n<div id="search_condition_box">\n    {{? it.menus || it.cateTree}}\n    <div class="sp_topbanner clearfix" id="sp_topbanner">\n\n        {{? it.menus}}\n        <div class="sp_top_nav">\n            <ul class="nav_list">\n                {{~it.menus:menu:index}}\n                    {{?menu.checked}}\n                         <li class="on"><a href="{{=it.myPrefix + menu.link}}">{{=menu.name}}</a></li>\n                    {{??}}\n                        <li><a href="{{=it.myPrefix + menu.link}}">{{=menu.name}}</a></li>\n                    {{?}}\n                {{~}}\n            </ul>\n        </div>\n        {{?}}\n\n        <div class="sp_type_nav" data-ptp="_cate">\n            {{?it.banner && it.banner.length > 0}}\n                <a class="right_img" target="_blank" href="{{=it.banner[0].link}}">\n                    <img src="{{=it.banner[0].image}}">\n                </a>\n            {{?}}\n            <div class="type_sections">\n\n                {{ for(var prop in it.cateTree) { }}\n                <div class="type_section first">\n                    {{? it.cateTree[prop].p }}\n                    <dt><a href="{{=it.myPrefix + it.cateTree[prop].p.link}}#sp_topbanner">{{=it.cateTree[prop].p.title}}</a></dt>\n                    {{?}}\n                    <dd>\n                      {{? it.cateTree[prop].p }}\n                        <a class="cat_img" href="{{=it.myPrefix + it.cateTree[prop].p.link}}#sp_topbanner"><img src="{{=it.cateTree[prop].p.image}}"></a>\n                      {{?}}\n                        <ul>\n                            {{~it.cateTree[prop].c:cateC:cateCIndex}}\n                            {{\n                                {\n                                    cateC.style="pagani_log_link";\n                                    if(cateC.tag=="hot"){\n                                        cateC.style += " hot";\n                                    }\n                                    if(cateC.checked){\n                                        cateC.style += " on";\n                                    }\n\n                                 }\n                            }}\n                            <li>\n                                <a href="{{=it.myPrefix + cateC.link}}#sp_topbanner" class="{{=cateC.style}}" data-log-bkey="">\n                                    {{=cateC.title}}\n                                </a>\n                            </li>\n                            {{~}}\n                        </ul>\n                    </dd>\n                </div>\n                {{ } }}\n\n            </div>\n        </div>\n\n    </div>\n    {{?}}\n</div>\n\n{{?it.title}}\n<h3 class="sub_title" id="category_all">{{=it.title}}</h3>\n{{?}}'}])}),"function"==typeof define&&define.amd&&require(["pages/pc/category/index"]);