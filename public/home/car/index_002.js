!function(e,t,n){t.MGTOOL={},e.extend(MGTOOL,{byteLength:function(e){var t=e.match(/[^\x00-\x80]/g);return e.length+(t?t.length:0)},jsMbSubstr:function(e,t){if(!e||!t)return"";var n=0,o=0,r="",i=e.length;for(o=0;i>o;o++){if(n=e.charCodeAt(o)>255?n+=2:++n,n>2*t)return r;r+=e.charAt(o)}return e},formatMoney:function(e,t,n){if(t=MGTOOL.empty(e)?"2":t,MGTOOL.empty(n))return e.toFixed(t);var o=0>e?"-":"",r=parseInt(e=Math.abs(+e||0).toFixed(t),10)+"",i=(i=r.length)>3?i%3:0;return o+(i?r.substr(0,i)+n:"")+r.substr(i).replace(/(\d{3})(?=\d)/g,"$1"+n)+(t?"."+Math.abs(e-r).toFixed(t).slice(2):"")}}),e.extend(MGTOOL,{emptyObj:function(e){for(var t in e)return!1;return!0},empty:function(e){return null==e||0===e.length},objToJson:function(e){return JSON.stringify(e)}}),e.extend(MGTOOL,{setCookie:function(e,t,n){n=n||{},null===t&&(t="",n.expires=-1);var o="";if(n.expires&&("number"==typeof n.expires||n.expires.toUTCString)){var r;"number"==typeof n.expires?(r=new Date,r.setTime(r.getTime()+864e5*n.expires)):r=n.expires,o="; expires="+r.toUTCString()}var i=n.path?"; path="+n.path:"",u=n.secure?"; secure":"",a="";n.domain?a="; domain="+n.domain:(a=document.domain.toString().split("."),a="; domain=."+a[1]+"."+a[2]),document.cookie=[e,"=",encodeURIComponent(t),o,i,a,u].join("")},getCookie:function(e){var t=document.cookie.match(new RegExp("(^| )"+e+"=([^;]*)(;|$)"));return null!==t?decodeURIComponent(t[2]):""},removeCookie:function(e){MGTOOL.setCookie(e,null,{expires:-1})},setCacheCookie:function(t,n,o,r){o=o||{},null===n&&(n="");var i="undefined"==typeof r?MGTOOL.getCookie("__mgjuuid"):r;e.ajax({url:"/collect/uedcookie",type:"POST",timeout:6e4,data:{cookiename:t,uuid:i,type:"set",value:n,lifetime:86400*o.expires},dataType:"json",success:function(e){""===e&&alert(MGLANG.msgTimeout)}})},getCacheCookie:function(t,n){var o="undefined"==typeof n?MGTOOL.getCookie("__mgjuuid"):n,r="";return e.ajax({url:"/collect/uedcookie",type:"POST",timeout:6e4,async:!1,data:{cookiename:t,uuid:o,type:"get"},dataType:"json",success:function(e){var t=e.status.code;e.status.msg;if(1001==t){var n=e.result.data.value;r=n}else alert(MGLANG.msgTimeout)}}),r}}),e.extend(MGTOOL,{getQueryString:function(e,t){t="undefined"!=typeof t?t:location.href;var n=new RegExp("(^|\\?|&)"+e+"=([^&]*)(\\s|&|$)","i");return n.test(t)?RegExp.$2.replace(/\+/g," "):""},getPicExtension:function(e){return/(.+)\.(.+)/.exec(e)?RegExp.$2:""},filterDomain:function(e){var t=/http:\/\/[^\/]+/;return e.replace(t,"")}}),e.extend(MGTOOL,{throttleM:{isLoading:!1,throttoleXhr:function(e,t){var n=this;if(!n.isLoading){t=t||500,n.isLoading=!0;var o=e();o.complete=function(){setTimeout(function(){n.isLoading=!1},t)}}}}}),e.extend(MGTOOL,{getMsgLength:function(e){var t=e.length;if(t>0){for(var n=41,o=140,r=24,i=e,u=e.match(/http[s]?:\/\/[a-zA-Z0-9-]+(\.[a-zA-Z0-9]+)+([-A-Z0-9a-z_\$\.\+\!\*\(\)\/\/,:;@&=\?\~\#\%]*)*/gi)||[],a=0,s=0,c=u.length;c>s;s++){var g=MGTOOL.byteLength(u[s]);/^(http:\/\/mogujie.cn)/.test(u[s])||(a+=/^(http:\/\/)+(mogujie.cn|mogujie.com)/.test(u[s])&&n>=g?g:o>=g?r:g-o+r,i=i.replace(u[s],""))}return Math.ceil((a+MGTOOL.byteLength(i))/2)}return 0},getAbsoluteLocation:function(n){if(1!==arguments.length||null===n)return null;var o=e(n),r=o.offset(),i=r.top,u=r.left,a=o.height(),s=e(t).height(),c=e(document).scrollTop(),g=i>=c&&c+s>=i,l=i+a+200>=c&&c+s>=i-400;return{absoluteTop:i,absoluteLeft:u,isInView:g,isLoad:l}},distance2Bottom:function(n){var o=e(document),r=e(t),i=o.scrollTop(),u=r.height(),a=o.height();return i+u+n>=a},isParent:function(e,t){for(;e!==n&&null!==e&&"BODY"!=e.tagName.toUpperCase();){if(e==t)return!0;e=e.parentNode}return!1},template:function(e,t){return doT.template(e)(t)},log:function(e){t.console!==n&&console.log(e)},dataFormat:function(e,t){var n={"M+":e.getMonth()+1,"d+":e.getDate(),"h+":e.getHours(),"m+":e.getMinutes(),"s+":e.getSeconds(),"q+":Math.floor((e.getMonth()+3)/3),S:e.getMilliseconds()};/(y+)/.test(t)&&(t=t.replace(RegExp.$1,(e.getFullYear()+"").substr(4-RegExp.$1.length)));for(var o in n)new RegExp("("+o+")").test(t)&&(t=t.replace(RegExp.$1,1==RegExp.$1.length?n[o]:("00"+n[o]).substr((""+n[o]).length)));return t}}),e.extend(MGTOOL,{trim:function(t){return e.trim(t)},getRequest:function(e,t){return this.getQueryString(e,t)}})}(jQuery,window);var MOGU=MOGU||{};!function(t){MOGU.Globe_Textarea_Auto_Height=function(e){var o=e.height(),i=function(){0>o&&(o=e.height()),(t.browser.mozilla||t.browser.safari)&&e.height(o);var i=e[0].scrollHeight,n=o>i?o:i;n=1.5*o>n?o:i,e.height(n)};e.bind("keyup",i).bind("input",i).bind("propertychange",i).bind("focus",i)},MOGU.Globe_Goods_URL_Support=function(t){var e=/item(.[\w]+)?.taobao.com\/(.?)[item.htm|item_num_id|item_detail|itemID|item_id|default_item_id]/i,o=/detail.tmall/i,i=/auction\d?.paipai.com/i,n=/buy.caomeipai.com\/goods/i,a=/www.360buy.com\/product/i,c=/product.dangdang.com\/Product.aspx\?product_id=/i,r=/book.360buy.com/i,s=/www.vancl.com\/StyleDetail/i,u=/www.vancl.com\/Product/i,l=/vt.vancl.com\/item/i,d=/item.vancl.com\/\d+/i,m=/item.vt.vancl.com\/\d+/i,w=/(mbaobao.com\/pshow)|(mbaobao.com\/item)/i,f=/item.buy.qq.com\/item/i,_=/[www|us].topshop.com\/webapp\/wcs\/stores\/servlet\/ProductDisplay/i,b=/quwan.com\/goods/i,h=/nala.com.cn\/product/i,p=/maymay.cn\/pitem/i,v=/asos.com/i,g=/www.100f1.com\/ProductInfo_/i,y=/www.gaojie.com\/product/i,G=/a.m.taobao.com\/i/i,O=/www.51yugou.com\//i,M=/www.1mall.com\//i,U=/www.yihaodian.com\//i,k=/www.xipin.me\//i,j=/www.nuandao.com\//i,x=/www.rosebeauty.com.cn\//i,L=/www.hmeili.com\//i,T=/www.yueji.com\//i,C=/www.yougou.com\//i,S=/cn.shopbop.com\//i,I=/item.jd.com\//i,P=/[www|shop].mogujie.com(.*)\/detail/i;return e.test(t)||o.test(t)||r.test(t)||a.test(t)||i.test(t)||n.test(t)||c.test(t)||s.test(t)||u.test(t)||l.test(t)||d.test(t)||m.test(t)||w.test(t)||_.test(t)||b.test(t)||h.test(t)||p.test(t)||v.test(t)||g.test(t)||y.test(t)||f.test(t)||G.test(t)||O.test(t)||U.test(t)||k.test(t)||j.test(t)||x.test(t)||L.test(t)||T.test(t)||C.test(t)||M.test(t)||S.test(t)||I.test(t)||P.test(t)},MOGU.Globe_Input_Text=function(e,o){o=o||e.val(),e.focus(function(){var e=t(this);t.trim(e.val())==o&&e.val(""),e.css("color","#000")}),e.blur(function(){var e=t(this);""==t.trim(e.val())&&(e.val(o),e.css("color","#ccc"))})},MOGU.Globe_Input_Text_Hide=function(e){e.focus(function(){var e=t(this);t.trim(e.val())==t.trim(e.attr("def-v"))&&e.val(""),e.css("color","#000")}),e.blur(function(){var e=t(this);""==t.trim(e.val())&&(e.val(e.attr("def-v")),e.css("color","#ccc"))})},MOGU.WB_Word_Count=function(e,o,i){var n=i?i:140;if(t("#"+e)[0]){var a=function(){var i=0;i=o?MGTOOL.getMsgLength(t("#"+o).val()):MGTOOL.getMsgLength(t("#"+e).find(".pub_txt").val());var a=n-i;0==i?t("#"+e).find(".word_count").html(n):i>n?(t("#"+e).find(".word_count_wrap").html('\u60a8\u5df2\u8d85\u8fc7<em class="word_count"></em>\u4e2a\u5b57').find(".word_count").html(Math.abs(a)),t("#"+e).find(".word_count_wrap").show(),t("#"+e).find(".word_count").addClass("out")):(t("#"+e).find(".word_count_wrap").html('\u8fd8\u53ef\u4ee5\u8f93\u5165<em class="word_count"></em>\u4e2a\u5b57').find(".word_count").html(a),t("#"+e).find(".word_count").removeClass("out"))};o?t("#"+o).bind("keyup",a).bind("input",a).bind("propertychange",a):t("#"+e).find(".pub_txt").bind("keyup",a).bind("input",a).bind("propertychange",a)}},MOGU.Globe_Range_Input=function(t){if(t[0].createTextRange){var e=t[0].createTextRange();e.moveEnd("character",t.val().length),e.moveStart("character",t.val().length),e.select()}else t[0].setSelectionRange(t.val().length,t.val().length),t.focus()},MOGU.Globe_Check_Login=function(){return""==MOGUPROFILE.userid?(MOGU.user_handsome_login_init(),MOGU.user_handsome_login(),!1):!0},MOGU.Globe_Short_Link_From=function(){t(".mg_slink").live("click",function(){var e=window.location.toString();if(!(e.indexOf("is_qzone=1")>=0)){var o=this,i=o.href,n=t(o).attr("s"),a=t(o).attr("c");""==a&&(a=MOGUPROFILE.userid);var c=i,r="";r=-1==i.indexOf("?")?"?c="+a+"&s="+n:"&c="+a+"&s="+n,c+=r,o.href=c,setTimeout(function(){o.href=i},500)}})},MOGU.Globe_Short_Link_From(),MOGU.Globe_Bind_Keybord_Submit=function(e,o,i){i=i||"need_focus","need_focus"==i&&(e.focus(function(){t("body").unbind("keydown"),t("body").bind("keydown",function(t){t.ctrlKey&&13==t.keyCode&&o.click()})}),e.blur(function(){t("body").unbind("keydown")})),"not_need_focus"==i&&t(document).bind("keydown",function(e){e.ctrlKey&&13==e.keyCode&&(o.click(),t("body").unbind("keydown"))})},MOGU.GLobe_GetObj_Length=function(t){var e,o=0;for(e in t)t.hasOwnProperty(e)&&o++;return o},MOGU.Empty_Message_Tip=function(t){var e=t?t:{},o=e.pub_obj,i=null,n=0;i=setInterval(function(){n++,6==n?(clearInterval(i),o.focus()):n%2==0?o.addClass("empty_tip"):o.removeClass("empty_tip")},120)},MOGU.Defult_Post_data=function(e){if(e instanceof jQuery||(e=t(e)),e.hasClass("disable"))return!1;e.addClass("disable");var o=e.data(),i=o.url||"";if(""!==i){var n=function(t){1001===t.status.code?window.location.reload():alert(t.status.msg)};jQuery.ajax({url:i,type:"POST",dataType:"json",data:o,complete:function(){e.removeClass("disable")},success:function(t){n(t)}})}},MOGU.Globe_Trace_Log=function(t){},t.fn.serializeObject=function(){var e={},o=this.serializeArray();return t.each(o,function(){void 0!==e[this.name]?(e[this.name].push||(e[this.name]=[e[this.name]]),e[this.name].push(this.value||"")):e[this.name]=this.value||""}),e},MOGU.SerializeFormObject=function(t){t.serializeObject()}}(jQuery),$(function(){$(document).off("click",".__trace__").on("click",".__trace__",function(t){var e=$(this).attr("data-trace");e&&MOGU.Globe_Trace_Log(e)})}),function(){for(var t,e=function(){},o=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"],i=o.length,n=window.console=window.console||{};i--;)t=o[i],n[t]||(n[t]=e)}();!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define("pc/common/im/index",[],e):"object"==typeof exports?exports["pc/common/im/index"]=e():t["pc/common/im/index"]=e()}(this,function(){return function(t){function e(o){if(n[o])return n[o].exports;var i=n[o]={exports:{},id:o,loaded:!1};return t[o].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var n={};return e.m=t,e.c=n,e.p="",e(0)}([function(t,e,n){"use strict";var o=n(1),i={},a=function(t,e){return $.ajax({url:"//webim.mogujie.com/jsonp/getshopowner/1",data:{shopId:t},type:"GET",dataType:"jsonp",jsonp:"callback",success:e})},r=function(t,e,n,i){o(t,e,n,i);var a=window.$?window.$("#J-imContainer"):document.getElementById("J-imContainer");a.show(),a.contents().focus()},d=function(t,e,n,o,d){var c=/com\/detail\/(1[a-z0-9]+)/,u=decodeURIComponent(location.href).match(c);return u&&u[1]&&(n=u[1]),!t&&e?i[e]?(t=i[e],void r(t,n,o,d)):void a(e,function(o){o.success&&o.data&&(t=o.data.userId,i[e]=t,r(t,n))}):void r(t,n,o,d)},c=function(t,e,n,o,i){var a=window.M||{},r=window.MoGu||{},c=window.MOGU||null;if(a.getUserInfo)a.getUserInfo().then(function(o){d(t,e,n)})["catch"](function(){location.href="https://portal.mogujie.com/user/login?redirect_url="+encodeURIComponent(location.href)});else if(!r.data||!r.data.userData||!r.data.userData.uid)return c&&c.user_handsome_login_init?(c.user_handsome_login_init(),void c.user_handsome_login(!1,{callback:function(){location.reload()}})):void(location.href="http://portal.mogujie.com/user/login?redirect_url="+encodeURIComponent(location.href));d(t,e,n,o,i)};$(document).ready(function(){$(".mogutalk_widget_btn").each(function(){var t=$(this).data("style")||"default";t&&$(this).addClass("mogutalk_"+t)})}),$(document).on("click",".mogutalk_widget_btn, .mogutalk_btn",function(t){t.preventDefault();var e=t.currentTarget,n=$(e).data("uid")||"",o=$(e).data("bid")||$(e).data("shopid")||"",i=$(e).data("tid")||$(e).data("gid")||"",a=$(e).data("frompage")||"",r=$(e).data("allocatetype")||"";o&&(o=o.replace(/#\d*$/,"")),c(n,o,i,a,r)}),window._openIm=c,t.exports=c},function(t,e,n){"use strict";n(2);var o=null,i={getPos:function(){var t=void 0;return o?o:window.localStorage&&(t=window.localStorage.getItem("IM_POSITION"))?JSON.parse(t):{x:$(window).width()-590,y:$(window).height()-440}},setPos:function(t,e){return o={x:t,y:e},window.localStorage&&window.localStorage.setItem("IM_POSITION",JSON.stringify(o)),!0}};t.exports=function(t,e,n,o){var a="http://webim.mogujie.com/pc";if(!$("#J-imContainer").length){var r="left:"+i.getPos().x+"px; top:"+i.getPos().y+"px",d='<div id="J-imContainer" class="im-frame-container" style="'+r+'">\n        <div id="J-closeImFrameBtn" class="im-frame-btn"></div>\n        <div id="J-dragImHandle" class="im-frame-drag"></div>\n        <iframe id="J-openImFrame" class="im-frame-box" frameborder="no" allowtransparency="true">\n        </iframe>\n      </div>';$("body").append(d),$("#J-closeImFrameBtn").on("click",function(){$("#J-imContainer").hide()}),$("#J-imContainer").drag({midX:40,midY:40,handler:"#J-dragImHandle",resize:function(t){i.setPos(t.x,t.y)},dragEnd:function(t){i.setPos(t.x,t.y)}})}var c=$.param({userId:t,goodsId:e,fromPage:n,allocatetype:o});$("#J-openImFrame").attr("src",a+"#"+c)}},function(t,e){"use strict";var n=!!("ontouchstart"in document.documentElement),o={start:"touchstart",move:"touchmove",end:"touchend"},i={start:"mousedown",move:"mousemove",end:"mouseup"},a=n?o:i;$.fn.drag=function(t){function e(){return h?(x.off(a.start,h),this):this}function o(){u=v.maxX>0?v.maxX:$(window).width(),s=v.maxY>0?v.maxY:$(window).height(),u=u-i("width")-v.midX,s=s-i("height")-v.midY,m=v.midX,l=v.midY}function i(t,e){return e?void p.css(t,e):parseFloat(p.css(t))}function r(){g.x=i("left"),g.y=i("top")}function d(t,e){u&&(m>t?t=m:t>=m&&t>u&&(t=u)),s&&(l>e?e=l:e>=l&&e>s&&(e=s)),"x"===v.axis?i("left",t+"px"):"y"===v.axis?i("top",e+"px"):(i("left",t+"px"),i("top",e+"px")),r()}function c(){function t(t){function e(e){var o,i,a,c;n?1===t.touches.length&&(o=e.touches[0].clientX-t.touches[0].clientX,i=e.touches[0].clientY-t.touches[0].clientY):(o=e.clientX-t.clientX,i=e.clientY-t.clientY),a=u+o,c=s+i,d(a,c),r(e)}function o(){"function"==typeof v.dragEnd&&v.dragEnd.call(this,g),c()}function r(t){t.preventDefault?(t.preventDefault(),t.stopPropagation()):(t.returnValue=!1,t.cancelBubble=!0)}function c(){$(document).off(a.move,e),$(document).off(a.end,o),$(document).off("selectstart",r),x.off("dragstart",r)}var u=i("left")||0,s=i("top")||0;document.body.focus(),$(document).on("selectstart",r),x.on("dragstart",r),$(document).on(a.move,e),$(document).on(a.end,o)}e(),o(),"function"==typeof v.dragStart&&v.dragStart.call(this,g),x.on(a.start,t)}var u,s,m,l,f,p=$(this),h=null,g={},w={midX:0,midY:0,axis:"both",handler:null},v=$.extend({},w,t),x=v.handler;"string"==typeof x?x=p.find(x):x||(x=p),$(window).resize(function(){var t=this;f&&window.clearTimeout(f),f=setTimeout(function(){o(),d(g.x,g.y),"function"==typeof v.resize&&v.resize.call(t,g)},300)}),c()}}])}),"function"==typeof define&&define.amd&&require(["pc/common/im/index"]);function Target(e,t,n){var s="";if(arguments.length<2?s="target error - target and name are both required":"object"!=typeof e?s="target error - target itself must be window object":"string"!=typeof t&&(s="target error - target name must be string type"),s)throw new Error(s);this.target=e,this.name=t,this.prefix=n}function Messenger(e,t){this.targets={},this.name=e,this.listenFunc=[],this.prefix=t||prefix,this.initListen()}var prefix="[PROJECT_NAME]",supportPostMessage="postMessage"in window;supportPostMessage?Target.prototype.send=function(e){this.target.postMessage(this.prefix+"|"+this.name+"__Messenger__"+e,"*")}:Target.prototype.send=function(e){var t=window.navigator[this.prefix+this.name];if("function"!=typeof t)throw new Error("target callback function is not defined");t(this.prefix+e,window)},Messenger.prototype.addTarget=function(e,t){var n=new Target(e,t,this.prefix);this.targets[t]=n},Messenger.prototype.initListen=function(){var e=this,t=function(t){if("object"==typeof t&&(t=t.data),!("string"!=typeof t||t.indexOf("Messenger")<0))for(var n=t.split("__Messenger__"),t=n[1],s=n[0].split("|"),r=s[0],i=s[1],a=0;a<e.listenFunc.length;a++)r+i===e.prefix+e.name&&e.listenFunc[a](t)};supportPostMessage?"addEventListener"in document?window.addEventListener("message",t,!1):"attachEvent"in document&&window.attachEvent("onmessage",t):window.navigator[this.prefix+this.name]=t},Messenger.prototype.listen=function(e){for(var t=0,n=this.listenFunc.length,s=!1;n>t;t++)if(this.listenFunc[t]==e){s=!0;break}s||this.listenFunc.push(e)},Messenger.prototype.clear=function(){this.listenFunc=[]},Messenger.prototype.send=function(e){var t,n=this.targets;for(t in n)n.hasOwnProperty(t)&&n[t].send(e)};var messenger;window.parent!==window.self?(messenger=new Messenger("im","ImFrame"),messenger.addTarget(window.parent,"Parent")):messenger=new Messenger("Parent","ImFrame");var newcinfo=function(e,t,n){if(n){var s=this;return this.url=window.location.protocol+"//webim.mogujie.com/jsonp/cinfo/1",this.IDLE=!0,this.trigger=function(e,s){n(t).trigger(e,s)},this.getData=function(e){if(s.IDLE){s.IDLE=!1;var t=0;n.ajax({url:s.url,data:e||{},dataType:"jsonp",timeout:9e3,success:function(e){e&&e.success&&e.data>0&&(t=e.data)},complete:function(){s.IDLE=!0,s.trigger("hasUnread",t)}})}},messenger.listen(function(e){try{switch(e=JSON.parse(e),e.code){case 1007:break;case 1008:s.getData()}}catch(t){}}),{refresh:function(e){var t=window.M||{},n=window.MoGu||{};t.getUserInfo?t.getUserInfo().then(function(){s.getData(e)})["catch"](function(){}):n.data&&n.data.userData&&n.data.userData.uid&&s.getData(e)}}}}(window,document,jQuery);!function(t){MOGU.imgCodeCheck=function(){var a=!1,i=t(".img_code_spin");if(0==i.length)return a=!0;for(var c=0;c<i.length;c++){var e=t(i[c]);if(0!=e.val()){a=!0;break}}return a},MOGU.imgCaptchaInit=function(){var a=t(".imgcheck_image_div"),i=t("#imgcheck_code_change"),c=function(t,a){var i=-75*((a+1)%4),c=t[0].style.backgroundPosition.split(" ");t[0].style.backgroundPosition=c[0]+" "+i+"px"};a.click(function(){var a=t(this).attr("f"),i=t("#img_code_spin_"+a),e=parseInt(i.val());c(t(this),e),i.val(e+1)}),i.click(function(){MOGU.imgCaptchaRecaptcha()})},MOGU.imgCaptchaRecaptcha=function(a){var i=function(a){for(var i=t(".imgcheck_image_div"),c=i.length,e=0;c>e;e++){var n=i[e],o=n.getAttribute("f"),r=t("#img_code_spin_"+o);r.val(0);var u=t(n);u.css("background-image","url(/captchaimg/"+a+")"),u.css({"background-position":-75*e+"px 0"})}};void 0===a?t.ajax({url:"/reimgcaptcha",type:"POST",timeout:6e4,data:{},dataType:"json",cache:!1,success:function(t){var a=t.status.code;t.status.msg;if(1001==a){var c=t.result.data.captchaId;i(c)}},error:function(t,a,i){"timeout"==a&&alert(MGLANG.msgTimeout)}}):setTimeout(function(){i(a)},1)},MOGU.imgCaptchaInit()}(jQuery);/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	__webpack_require__(1);

	var navTpl = __webpack_require__(3);
	var cart = __webpack_require__(4);
	var id2url = __webpack_require__(6);

	__webpack_require__(7);

	var M = window.M || {};
	var logger = window.logger;

	var Nav = {
	    $elem: $('.J_sitenav'),
	    init: function init() {
	        this.initCompatibleFunctions();
	        this.renderNav();
	        this.initIM();
	        cart.init();
	        return;
	    },
	    // 兼容旧的MoGu
	    initCompatibleFunctions: function initCompatibleFunctions() {
	        if (window.MoGu) {
	            var MoGu = window.MoGu || {};
	            MoGu.fn = MoGu.fn || {};

	            $.extend(MoGu.fn, {
	                getUserData: function getUserData(callback) {
	                    M.getUserInfo().then(function (data) {
	                        callback(null, data);
	                    }).catch(function (err) {
	                        callback(err);
	                    });
	                }
	                // ,
	                // id2url: id2url
	            });
	        }
	    },

	    renderNav: function renderNav() {
	        var that = this;
	        if (M && M.getUserInfo) {
	            M.getUserInfo().then(function (data) {
	                that.$elem.html(navTpl(data));

	                // 等导航栏渲染出来再取cinfo
	                window.newcinfo && window.newcinfo.refresh();

	                // 渲染购物车数量
	                cart.renderNavCartListNum();
	                that.handleLogin();
	            }).catch(function () {
	                that.$elem.html(navTpl({}));
	                that.handleLogin();
	            });
	        }
	        return;
	    },

	    handleLogin: function handleLogin() {
	        var protocol = location.protocol || 'http:';
	        this.$elem.find('.J_nav_btn_login').on('click', function () {
	            if (logger && logger.goTo) {
	                logger.goTo(protocol + '//portal.mogujie.com/user/newlogin?redirect_url=' + encodeURIComponent(window.location.href));
	            } else {
	                window.location.href = protocol + '//portal.mogujie.com/user/newlogin?redirect_url=' + encodeURIComponent(window.location.href);
	            }
	        });
	        return;
	    },

	    /**
	     * 提示im未读消息
	     **/
	    initIM: function initIM() {
	        // 2016/8 IM cinfo改造
	        var that = this;
	        $(document).on('hasUnread', function (event, unreadCnt) {
	            var $Msg = that.$elem.find('.mogutalk_btn');
	            if (!$Msg.length) return;
	            if (unreadCnt > 0) {
	                $Msg.find('.num').show();
	            } else {
	                $Msg.find('.num').hide();
	            }
	        });
	    }

	};

	module.exports = Nav.init();

/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

	// 获取购物车 & 优惠券数量模块
	__webpack_require__(2);

	var _isPromiseFetching = false;
	var _transitionalPromise = void 0;
	var _resData = void 0;
	var tokenDomain = 'cart.mogujie.com';

	function _getCartListNumFromServer(url) {
	    return _transitionalPromise = new Promise(function (resolve) {
	        var jsonp = M.http.jsonp;
	        var _url = url;

	        if (jsonp) {
	            jsonp(_url, {
	                jsonpCallback: 'jsonp_cartListNum_' + new Date().getTime(),
	                tokenDomain: tokenDomain
	            }).then(function (res) {
	                if (res && res.success) {
	                    if (res.data && res.data.count > 0) {
	                        if (window.localStorage) {
	                            window.localStorage.setItem('___cached_cart_list_num', res.data.count);
	                        }
	                    }
	                    _resData = res;
	                } else {
	                    _resData = {};
	                }

	                _isPromiseFetching = false;
	                resolve(_resData);
	            }).catch(function () {
	                // 如果请求出错了 默认降级
	                _isPromiseFetching = false;
	                _resData = {};
	                resolve(_resData);
	            });
	        } else {
	            // 如果没有jsonp方法 默认降级
	            _isPromiseFetching = false;
	            _resData = {};
	            resolve(_resData);
	        }
	    });
	}

	function getCartListNumFromLocalstorage() {
	    var cartListNum = 0;
	    var res = {};

	    if (window.localStorage) {
	        var cacheCartListNum = window.localStorage.getItem('___cached_cart_list_num');
	        if (cacheCartListNum && cacheCartListNum > 0) {
	            cartListNum = cacheCartListNum;
	        }
	    }

	    res = {
	        "result": {
	            "count": cartListNum
	        },
	        "status": {
	            "message": "",
	            "isLogin": true,
	            "code": 1001,
	            "msg": ""
	        }
	    };
	    return res;
	}

	function getCartListNum(url, sync) {

	    // 判断接口是否需要降级
	    return M.pc.common.checkDegradation().then(function (res) {
	        if (res.degradation) {
	            // 需要降级，则读取localstorage中的值
	            return Promise.resolve(getCartListNumFromLocalstorage());
	        } else {
	            // 不需要降级，则接口获取数据 || 读取缓存数据
	            if (_isPromiseFetching) {
	                return _transitionalPromise;
	            }

	            if (!_resData || sync) {
	                _isPromiseFetching = true;
	                return _getCartListNumFromServer(url);
	            } else {
	                _resData._sync = false;
	                return Promise.resolve(_resData);
	            }
	        }
	    });
	}

	var M = window.M || {};
	M.pc = M.pc || {};
	M.pc.common = M.pc.common || {};
	M.pc.common.getCartListNum = M.pc.common.getCartListNum || getCartListNum;

	module.exports = getCartListNum;

/***/ },
/* 2 */
/***/ function(module, exports) {

	/**
	 * 获取麦田接口来检测获取优惠券/购物车数量接口是否降级
	 **/
	var _isDegradationStatusFetching = false;
	var _getDegradationPromise = void 0;
	var _degradationStatus = void 0;
	var PID = 23784;

	function _getDegradationStatus() {
	    return _getDegradationPromise = new Promise(function (resolve) {
	        var protocol = location.protocol || 'http:';

	        var jsonp = M.http.jsonp;
	        var url = protocol + '//mce.mogucdn.com/jsonp/multiget/3';

	        if (jsonp) {
	            jsonp(url, {
	                data: {
	                    pids: PID
	                },
	                jsonpCallback: 'jsonp' + PID
	            }).then(function (res) {
	                if (res.returnCode === 'SUCCESS' && res.data[PID] && res.data[PID].list && res.data[PID].list.length && res.data[PID].list[0].degradation == 'true') {
	                    _degradationStatus = {
	                        degradation: true
	                    };
	                } else {
	                    _degradationStatus = {
	                        degradation: false
	                    };
	                }

	                _isDegradationStatusFetching = false;
	                resolve(_degradationStatus);
	            }).catch(function () {
	                // 如果开关出错了 默认降级
	                _isDegradationStatusFetching = false;
	                _degradationStatus = {
	                    degradation: true
	                };
	                resolve(_degradationStatus);
	            });
	        } else {
	            // 如果没有jsonp方法 默认降级
	            _isDegradationStatusFetching = false;
	            _degradationStatus = {
	                degradation: true
	            };
	            resolve(_degradationStatus);
	        }
	    });
	}

	function checkDegradation(sync) {
	    if (_isDegradationStatusFetching) {
	        return _getDegradationPromise;
	    }

	    if (!_degradationStatus || sync) {
	        _isDegradationStatusFetching = true;
	        return _getDegradationStatus();
	    } else {
	        _degradationStatus._sync = false;
	        return Promise.resolve(_degradationStatus);
	    }
	}

	var M = window.M || {};
	M.pc = M.pc || {};
	M.pc.common = M.pc.common || {};
	M.pc.common.checkDegradation = M.pc.common.checkDegradation || checkDegradation;

	module.exports = checkDegradation;

/***/ },
/* 3 */
/***/ function(module, exports) {

	module.exports = function anonymous(it
	/*``*/) {
	var out='<div class="wrap"> <a href="//www.mogujie.com" rel="nofollow" class="home fl">蘑菇街首页</a> <ul class="header-top"> ';if(it.name){out+=' <li class="s1 has-icon user-meta"> <a rel="nofollow" href="javascript:;"> '+(it.name)+' </a> <a rel="nofollow" href="//pc.mogujie.com/member/member.html" target="_blank"> ';if(it.userLevel){out+=' <span class="level level '+(it.userLevel - 1)+' ">&nbsp;</span> ';}out+=' </a> <i class="icon-delta"></i> <ol class="ext-mode" id="menu-personal"> <li class="s2"> <a target="_blank" rel="nofollow" href="//www.mogujie.com/settings/personal">个人设置</a> </li> <li class="s2"> <a rel="nofollow" href="//www.mogujie.com/logout">退出</a> </li> </ol> </li> <li class="s1 has-line message-center"> <a rel="nofollow" href="javascript:;" class="ext-module mogutalk_btn J_msg open_msg micon" data-from="shopwidget_message" data-trace="global,shopwidget_message,click">消息<span class="num m_num"></span> </a> </li> <li class="s1 has-icon has-line user-fav"> <a rel="nofollow" href="javascript:;">我的收藏</a> <i class="icon-delta"></i> <ul class="ext-mode"> <li class="s2"> <a target="_blank" rel="nofollow" href="//favorite.mogujie.com/active/goodsfavs">收藏的商品</a> </li> <li class="s2"> <a target="_blank" rel="nofollow" href="//favorite.mogujie.com/active/shopfavs">收藏的小店</a> </li> <li class="s2"> <a target="_blank" rel="nofollow" href="//track.mogujie.com">浏览足迹</a> </li> </ul> </li> ';}else{out+=' <li class="s1 show-nologin"> <a rel="nofollow" class="J_nav_btn_login" href="javascript:;">登录</a> </li> ';}out+=' <li class="s1 myorder has-line"> <a href="//order.mogujie.com/order/list4buyer" target="_blank" class="text display_u" rel="nofollow">我的订单</a> </li> <li class="s1 has-line shopping-cart-v2"> <a class="cart-info-wrap" href="//cart.mogujie.com/cart/mycart" target="_blank" rel="nofollow"> <span class="cart-info">购物车</span> </a> <i class="icon-delta"></i> <span class="shopping-cart-loading"></span> </li> <li class="s1 has-line has-icon custom-item"> <a rel="nofollow" href="//cs.mogujie.com/help/index.html" rel="nofollow" target="_blank">客户服务</a> <i class="icon-delta"></i> <ol class="ext-mode"> <li class="s2"><a target="_blank" rel="nofollow" href="//cs.mogujie.com/help/index.html">消费者服务</a></li> <li class="s2"><a target="_blank" rel="nofollow" href="http://seller.mogujie.com/service">商家服务</a></li> <li class="s2"><a target="_blank" rel="nofollow" href="//cs.mogujie.com/rule/index.html">规则中心</a></li> </ol> </li> <li class="s1 has-line has-icon myxiaodian"> <a href="http://xd.mogujie.com/work/home" rel="nofollow" target="_blank" class="text display_u">商家后台</a> <i class="icon-delta"></i> <ol class="ext-mode"> <li class="s2"><a target="_blank" rel="nofollow" href="http://xd.mogujie.com/work/home">管理后台</a></li> <li class="s2"><a target="_blank" rel="nofollow" href="http://bbs.mogujie.com">商家社区</a></li> <li class="s2"><a target="_blank" rel="nofollow" href="http://peixun.mogujie.com">商家培训</a></li> <li class="s2"><a target="_blank" rel="nofollow" href="http://cycle.mogujie.com/pc/zhaoshang">市场入驻</a></li> </ol> </li> </ul></div>';return out;
	}

/***/ },
/* 4 */
/***/ function(module, exports, __webpack_require__) {

	/**
	 * 顶部导航购物车模块
	 */
	var cartTpl = __webpack_require__(5);
	var id2url = __webpack_require__(6);

	var M = window.M || {};
	var ShopCart = {};
	var isLogin = false;

	var tokenDomain = 'cart.mogujie.com';

	ShopCart.Model = {
	    goodsList: '',
	    offlineCartCookies: '',
	    offlineCartCookiesOld: '',
	    goodsNum: 0,

	    /**
	     * [getGoodsList 获取购物车前5个商品]
	     * @param  {Function} callback [description]
	     * @return {[type]}            [description]
	     */
	    getGoodsList: function getGoodsList(callback) {
	        var _self = this;
	        if (_self.goodsList) {
	            $.isFunction(callback) && callback(this.goodsList);
	            return;
	        }

	        var offlineCartItems = [];

	        if (M && M.fn && M.fn.getCookie('trade_cart_mogujie')) {
	            _self.offlineCartCookies = M.fn.getCookie('trade_cart_mogujie');
	        } else if (M && M.fn && M.fn.getCookie('mogu_trade_cart')) {
	            _self.offlineCartCookiesOld = M.fn.getCookie('mogu_trade_cart');
	        }

	        if (_self.offlineCartCookies) {
	            var arr = JSON.parse(_self.offlineCartCookies);
	            for (var key in arr) {
	                var obj = {};
	                obj['stockId'] = key;
	                for (var i in arr[key]) {
	                    obj[i] = arr[key][i];
	                }
	                offlineCartItems.push(obj);
	            }
	        }

	        if (_self.offlineCartCookiesOld) {
	            var arr = _self.offlineCartCookiesOld.split(',');
	            var obj = {};

	            for (var i = 0; i < arr.length; i++) {
	                if (arr[i].indexOf('#') > -1) {
	                    var detail = arr[i].split('#');
	                    obj.number = detail[0];
	                    obj.lastAddCartTime = detail[1];
	                    offlineCartItems.push(obj);
	                    obj = {};
	                } else {
	                    obj.stockId = id2url(arr[i]);
	                }
	            }
	        }
	        var postData = {
	            "marketType": "market_mogujie",
	            "topNum": 5,
	            "offlineCartItems": JSON.stringify(offlineCartItems)
	        };

	        M.http.jsonp('//cart.mogujie.com/jsonp/costaMinicartList/1', {
	            data: postData,
	            tokenDomain: tokenDomain
	        }).then(function (data) {
	            if (data.success == true && data.data) {
	                _self.goodsList = data.data.cartItems ? data.data.cartItems : [];
	                _self.goodsNum = data.data.totalItemNum || 0;
	                $.isFunction(callback) && callback(_self.goodsList);
	            } else {
	                $.isFunction(callback) && callback([]);
	            }
	        }).catch(function () {
	            $.isFunction(callback) && callback([]);
	        });
	    },

	    delCookie: function delCookie(stockId) {
	        var newCookie = {};

	        if (this.offlineCartCookies) {
	            var obj = JSON.parse(this.offlineCartCookies);

	            for (var key in obj) {
	                if (key != stockId) {
	                    newCookie[key] = obj[key];
	                }
	            }

	            if (M && M.fn && M.fn.setCookie) {
	                M.fn.setCookie('trade_cart_mogujie', JSON.stringify(newCookie), {
	                    expires: 15,
	                    path: '/',
	                    'domain': '.mogujie.com'
	                });
	            }
	        }
	    },

	    /**
	     * [delGood 删除一个显示的商品]
	     * @param  {[type]}   stockId  [description]
	     * @param  {Function} callback [description]
	     * @return {[type]}            [description]
	     */
	    delGood: function delGood(stockId, callback) {
	        var that = this;
	        // 已登录 直接调用后端删除接口
	        M.http.jsonp('//cart.mogujie.com/jsonp/costaDeleteCart/1', {
	            data: {
	                marketType: "market_mogujie",
	                stockId: stockId
	            },
	            tokenDomain: tokenDomain
	        }).then(function (data) {
	            if (data.success == true) {
	                isLogin = data.success;

	                if (!isLogin) {
	                    that.delCookie(stockId);
	                }
	                $.isFunction(callback) && callback();
	            }
	        }).catch(function () {});
	    }
	};

	ShopCart.View = {
	    wrap: $('.J_sitenav'),
	    init: function init() {
	        if (!this.wrap.length) return;
	        this.extendInfo = null;
	        this.loading = this.wrap.find('.shopping-cart-loading');
	        this.maxShowNum = 5; // 显示商品最大的数目
	        this.addEvent();
	    },

	    renderNavCartListNum: function renderNavCartListNum() {
	        var _self = this;
	        var $navCart = _self.wrap.find('.shopping-cart-v2');
	        if (!$navCart.length) return;
	        var $cartInfo = $navCart.find('.cart-info-wrap');

	        M.pc.common.getCartListNum('//cart.mogujie.com/jsonp/costaCartItemCount/1?marketType=market_mogujie').then(function (data) {
	            if (data && data.data && data.data.count > 0) {
	                var num = data.data.count > 99 ? '99+' : data.data.count;
	                var tpl = '<span class="cart-info">购物车<b class="num">' + num + '</b>件</span>';
	                $cartInfo.html(tpl).show();
	            } else {
	                $cartInfo.html('<span class="cart_info">购物车</span>');
	            }
	        }).catch(function () {
	            $cartInfo.html('<span class="cart_info">购物车</span>');
	        });
	    },

	    addEvent: function addEvent() {
	        var _self = this;
	        // 显示购物车商品
	        _self.wrap.off('mouseenter').on('mouseenter', '.shopping-cart-v2', function () {
	            var _this = $(this);

	            _this.addClass('sc-on');
	            _self.loading.show();

	            if (_self.extendInfo && _self.extendInfo.length) {
	                _self.loading.hide();
	                _self.extendInfo.show();
	            } else {
	                ShopCart.Model.getGoodsList(function (data) {
	                    var reData = {
	                        list: data,
	                        topNum: _self.maxShowNum,
	                        total: ShopCart.Model.goodsNum
	                    };

	                    var html = '';

	                    if (data.length) {
	                        html = cartTpl(reData);
	                        _self.extendInfo = $(html);
	                    } else {
	                        html = '<div class="shop-cart-info"></div>';
	                        _self.extendInfo = $(html);
	                        _self.extendInfo.addClass('empty-cart').text('购物车里没有商品！');
	                    }

	                    _this.append(_self.extendInfo);
	                    _self.loading.hide();
	                    _self.extendInfo.show();
	                });
	            }
	        });

	        // 关闭购物车商品
	        _self.wrap.off('mouseleave').on('mouseleave', '.shopping-cart-v2', function () {
	            _self.extendInfo && _self.extendInfo.hide() && $(this).removeClass('sc-on');
	        });

	        // 删除一个商品
	        _self.wrap.off('click').on('click', '.shopping-cart-v2 .del', function () {
	            var _this = $(this),
	                stockId = _this.data('stockid'),
	                parent = _this.parent(),
	                currentNum = ShopCart.Model.goodsNum;

	            if (_this.hasClass('disabled')) return;

	            _this.addClass('disabled');

	            ShopCart.Model.delGood(stockId, function () {
	                currentNum--;
	                parent.fadeOut('slow', function () {

	                    _this.removeClass('disabled');

	                    if (!currentNum) {
	                        // 全部删了的时候显示没有商品

	                        _self.extendInfo = $('.shop-cart-info');
	                        _self.extendInfo.addClass('empty-cart').text('购物车里没有商品！');
	                    } else {
	                        parent.remove();
	                        ShopCart.Model.goodsNum = currentNum;
	                    }
	                });
	            });
	        });
	    }
	};

	module.exports = ShopCart.View;

/***/ },
/* 5 */
/***/ function(module, exports) {

	module.exports = function anonymous(it
	/*``*/) {
	var out='<div class="shop-cart-info" style="display: none;"> <ul class="max_height_ie6"> ';var arr1=it.list;if(arr1){var item,index=-1,l1=arr1.length-1;while(index<l1){item=arr1[index+=1];out+=' ';if(index < it.topNum){out+=' <li> <a rel="nofollow" href="//shop.mogujie.com/detail/'+(item.itemIdEsc)+'" target="_blank" class="imgbox"> ';if(item.imgUrl){out+=' <img src="'+(item.imgUrl)+'_48x48.jpg" alt="'+(item.title)+'" width="45"> ';}out+=' </a> <a rel="nofollow" href="//shop.mogujie.com/detail/'+(item.itemIdEsc)+'" target="_blank" class="title">'+(item.title)+'</a> ';if(item.skuAttributes){out+=' <span class="info">';var arr2=item.skuAttributes;if(arr2){var sku,key=-1,l2=arr2.length-1;while(key<l2){sku=arr2[key+=1];out+=''+(sku.key)+': '+(sku.value)+'  ';} } out+='</span> ';}out+=' <span class="price">¥'+((item.nowprice/100))+'</span> <span data-stockid="'+(item.stockIdEsc)+'" class="del">删除</span> </li> ';}out+=' ';} } out+=' </ul> <div class="subbox"> ';if(it.total-it.topNum>0){out+=' <p class="sub_info">购物车里还有<b class="num">'+(it.total - it.topNum)+'</b>件商品</p> ';}out+=' <div class="fr"> <a rel="nofollow" href="//cart.mogujie.com/cart/mycart" target="_blank" class="goel">查看购物车</a> </div> </div></div>';return out;
	}

/***/ },
/* 6 */
/***/ function(module, exports) {

	// 临时添加id2url的方法，购物车灰度结束下掉
	/**
	 * base_conver for js
	 * @param number
	 * @param frombase
	 * @param tobase
	 * @return {String}
	 */
	function base_convert(number, frombase, tobase) {
	    return parseInt(number + '', frombase | 0).toString(tobase | 0);
	}

	var id2url = function id2url(id, version) {
	    var url = '';
	    var v = version || 1;

	    id = '' + id;

	    if (id.length == 24) {
	        return id;
	    }

	    switch (v) {
	        case 1:
	            url = v + base_convert(id * 2 + 56, 10, 36);
	            break;

	        default:
	            url = false;
	            break;
	    }
	    return url;
	};

	module.exports = id2url;

/***/ },
/* 7 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ }
/******/ ]);!function(o){function t(e){if(n[e])return n[e].exports;var i=n[e]={exports:{},id:e,loaded:!1};return o[e].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var n={};return t.m=o,t.c=n,t.p="",t(0)}([function(o,t,n){n(1),n(3),n(4);var e=n(6),i=window.M||{},a=1260,r=$(".J_sidebar"),c={$elem:r,init:function(){var o=this;this.renderSidebar().then(function(){o.$goTop=r.find(".mgj-back2top"),o.$sidebarCart=r.find(".mgj-my-cart"),o.$goTop.length&&(o.offsetEl=$(".wrap").length?$(".wrap").eq(0):$("#body_wrap").length?$("#body_wrap"):$("body"),o.offsetEl.length&&(o.win=$(window),o.addEvent()))})},addEvent:function(){var o=this;o.setSidebarPos(),this.win.on("resize",function(){o.setSidebarPos()}),this.$sidebarCart.off().on("mouseenter",function(){o.win.width()>a||o.showSidebar()}),this.$elem.off().on("mouseleave",function(){o.win.width()>a||o.hideSidebar()}),this.win.on("scroll",function(){$(this).scrollTop()?o.$goTop.addClass("show"):o.$goTop.removeClass("show")}),this.$goTop.on("click",function(){return o.win.scrollTop(0),!1})},setSidebarPos:function(){var o=this.win.width();a>o?this.hideSidebar():this.showSidebar()},showSidebar:function(){this.$sidebarCart.stop().animate({left:"0"}),this.$goTop.stop().animate({left:"0"}),this.$elem.removeClass("mini").stop().animate({right:"0"})},hideSidebar:function(){this.$sidebarCart.stop().animate({left:"-30px"}),this.$goTop.stop().animate({left:"-30px"}),this.$elem.addClass("mini").stop().animate({right:"-30px"})},renderSidebar:function(){var o=this;return i&&i.getUserInfo?i.getUserInfo(!0,"//portal.mogujie.com/api/profile/baseinfo").then(function(t){o.$elem.html(e(t));var n=o.$elem.find(".mgj-my-cart");if(n.length){var a=n.find(".num");i.pc.common.getCartListNum("//cart.mogujie.com/jsonp/costaCartItemCount/1?marketType=market_mogujie").then(function(o){o&&o.data&&o.data.count>0?a.html(o.data.count>99?"99+":o.data.count).show():a.hide()})["catch"](function(){a.hide()});var r=o.$elem.find(".mgj-my-coupon");if(r.length){var c=r.find(".num");i.pc.common.getCouponNum("//promotion.mogujie.com/jsonp/getUnUsedCouponNumber/1?domain=8").then(function(o){if(o&&o.data&&o.data.number>0){var t=o.data.number,n=parseInt(t,10);n?c.html(n>99?"99+":n).show():c.hide()}else c.hide()})["catch"](function(){c.hide()})}}})["catch"](function(){o.$elem.html(e({}))}):Promise.resolve()}};o.exports=c.init()},function(o,t,n){function e(o){return c=new Promise(function(t){var n=m.http.jsonp,e=o;n?n(e,{jsonpCallback:"jsonp_cartListNum_"+(new Date).getTime(),tokenDomain:d}).then(function(o){o&&o.success?(o.data&&o.data.count>0&&window.localStorage&&window.localStorage.setItem("___cached_cart_list_num",o.data.count),s=o):s={},r=!1,t(s)})["catch"](function(){r=!1,s={},t(s)}):(r=!1,s={},t(s))})}function i(){var o=0,t={};if(window.localStorage){var n=window.localStorage.getItem("___cached_cart_list_num");n&&n>0&&(o=n)}return t={result:{count:o},status:{message:"",isLogin:!0,code:1001,msg:""}}}function a(o,t){return m.pc.common.checkDegradation().then(function(n){return n.degradation?Promise.resolve(i()):r?c:!s||t?(r=!0,e(o)):(s._sync=!1,Promise.resolve(s))})}n(2);var r=!1,c=void 0,s=void 0,d="cart.mogujie.com",m=window.M||{};m.pc=m.pc||{},m.pc.common=m.pc.common||{},m.pc.common.getCartListNum=m.pc.common.getCartListNum||a,o.exports=a},function(o,t){function n(){return a=new Promise(function(o){var t=location.protocol||"http:",n=s.http.jsonp,e=t+"//mce.mogucdn.com/jsonp/multiget/3";n?n(e,{data:{pids:c},jsonpCallback:"jsonp"+c}).then(function(t){r="SUCCESS"===t.returnCode&&t.data[c]&&t.data[c].list&&t.data[c].list.length&&"true"==t.data[c].list[0].degradation?{degradation:!0}:{degradation:!1},i=!1,o(r)})["catch"](function(){i=!1,r={degradation:!0},o(r)}):(i=!1,r={degradation:!0},o(r))})}function e(o){return i?a:!r||o?(i=!0,n()):(r._sync=!1,Promise.resolve(r))}var i=!1,a=void 0,r=void 0,c=23784,s=window.M||{};s.pc=s.pc||{},s.pc.common=s.pc.common||{},s.pc.common.checkDegradation=s.pc.common.checkDegradation||e,o.exports=e},function(o,t,n){function e(o){return c=new Promise(function(t){var n=d.http.jsonp,e=o;n?n(e,{jsonpCallback:"jsonp_couponNum_"+(new Date).getTime()}).then(function(o){o&&o.success&&"SUCCESS"==o.returnCode?(o.data&&o.data.number>0&&window.localStorage&&window.localStorage.setItem("___cached_coupon_num",o.data.number),s=o):s={},r=!1,t(s)})["catch"](function(){r=!1,s={},t(s)}):(r=!1,s={},t(s))})}function i(){var o=0,t={};if(window.localStorage){var n=window.localStorage.getItem("___cached_coupon_num");n&&n>0&&(o=n)}return t={data:{number:o},returnCode:"SUCCESS",success:!0}}function a(o,t){return d.pc.common.checkDegradation().then(function(n){return n.degradation?Promise.resolve(i()):r?c:!s||t?(r=!0,e(o)):(s._sync=!1,Promise.resolve(s))})}n(2);var r=!1,c=void 0,s=void 0,d=window.M||{};d.pc=d.pc||{},d.pc.common=d.pc.common||{},d.pc.common.getCouponNum=d.pc.common.getCouponNum||a,o.exports=a},function(o,t){},,function(o,t){o.exports=function(o){var t='<!--\u7a7a\u7684\u53f3\u4fa7\u8fb9\u680f--><div id="mgj_rightbar_top_blank" class="mgj_rightbar_960"></div><!--\u65b9\u4fbf\u5b9amargin\u7684\u7a7adediv--><div id="mgj_rightbar_blank_div"></div><!--\u7528\u6237\u5934\u50cf-->';return o.avatar&&(t+='<div class="sidebar-item mgj-my-avatar"> <a target="_blank" href="//pc.mogujie.com/member/member.html" rel="nofollow"> <div class="img"> <img width="20" height="20" src="'+o.avatar+'_48x48.jpg" alt=""> </div> </a></div>'),t+='<!--\u8d2d\u7269\u8f66--><div class="sidebar-item mgj-my-cart"> <a target="_blank" href="//cart.mogujie.com/cart/mycart" rel="nofollow"> <i class="s-icon"></i> <div class="s-txt">\u8d2d\u7269\u8f66</div> <div class="num"></div> </a></div><!--\u4f18\u60e0\u5238--><div class="sidebar-item mgj-my-coupon"> <a target="_blank" rel="nofollow" href="//promotion.mogujie.com/trade/promotion/user/shopcoupon"> <i class="s-icon"></i> <div class="s-txt">\u4f18\u60e0\u5238</div> <div class="num"></div> </a></div><!--\u94b1\u5305--><div class="sidebar-item mgj-my-wallet"> <a target="_blank" rel="nofollow" href="https://payuserp.mogujie.com/wallet/home"> <i class="s-icon"></i> <div class="s-txt">\u94b1\u5305</div> </a></div><!--\u8db3\u8ff9--><div class="sidebar-item mgj-my-browserlog"> <a target="_blank" rel="nofollow" href="//track.mogujie.com"> <i class="s-icon"></i> <div class="s-txt">\u8db3\u8ff9</div> </a></div><div class="sideBottom"> <!--\u56de\u5230\u9876\u90e8--> <div class="sidebar-item mgj-back2top"><a rel="nofollow" href="javascript:;"><i class="s-icon"></i></a></div></div>'}}]);!function(a){function e(t){if(i[t])return i[t].exports;var n=i[t]={exports:{},id:t,loaded:!1};return a[t].call(n.exports,n,n.exports,e),n.loaded=!0,n.exports}var i={};return e.m=a,e.c=i,e.p="",e(0)}([function(a,e,i){"use strict";function t(a){function e(a){if(I||q||M.pc.isTopSideNavOpen)o();else for(var e=0;e<S.length;e++){var i=S[e].topBarUrl,t=a.indexOf(i)>-1;if(t){o();break}}}function i(a){if(I||q||M.pc.isTopSideNavOpen)n();else for(var e=0;e<B.length;e++){var i=B[e].sideBarUrl,t=a.indexOf(i)>-1;if(t){n();break}}}var t=a.time.getTime()/1e3;M.http.jsonp({url:z.maitUrl,jsonpCallback:"jsonp6583_6584",data:{pids:"6583,6584,21943,21944"}}).then(function(a){a.success&&"SUCCESS"==a.returnCode&&a.data[6583].list.length>0&&a.data[6584].list.length>0&&a.data[21943].list.length>0&&a.data[21944].list.length>0&&(w=a.data[6583].list[0],C=a.data[6584].list[0],S=a.data[21943].list,B=a.data[21944].list,j="false"==w.openFlag,j&&(t=parseInt(P||0)),t>w.actOpenTime&&t<w.actCloseTime&&(y=!0,t>w.actSellTime&&(x=!0),e(L),i(L)))})}function n(){var a=r(C);$("#mgj_rightbar_blank_div").css("display","none"),f.prepend(a),f.css("z-index","10000"),function(a,e){function i(e,i,r,s){e[t](o+i,"wheel"==n?r:function(e){!e&&(e=a.event);var i={originalEvent:e,target:e.target||e.srcElement,type:"wheel",deltaMode:"MozMousePixelScroll"==e.type?0:1,deltaX:0,deltaY:0,preventDefault:function(){e.preventDefault?e.preventDefault():e.returnValue=!1}};return"mousewheel"==n?(i.deltaY=-.025*e.wheelDelta,e.wheelDeltaX&&(i.deltaX=-.025*e.wheelDeltaX)):i.deltaY=e.detail,r(i)},s||!1)}var t,n,o="";a.addEventListener?t="addEventListener":(t="attachEvent",o="on"),n="onwheel"in e.createElement("div")?"wheel":void 0!==e.onmousewheel?"mousewheel":"DOMMouseScroll",a.addWheelListener=function(a,e,t){i(a,n,e,t),"DOMMouseScroll"==n&&i(a,"MozMousePixelScroll",e,t)}}(window,document);var e={goTop:f.find(".mgj-back2top"),sidebar:f,sidebarCart:f.find(".mgj-my-cart"),eleBtn:$(".mgj_rightbar").find(".actnav_box"),eleBack:$(".mgj_actnav_box .ele_header_cont i"),eleBox:$(".mgj_actnav_box"),sidebarShow:!1,isLogin:!1,contentIds:"2603,2426,2421,2427,38726",redContentAdd:!1,fullReturnAdd:!1,shopCouponAdd:!1,redGoodsId:"",campaignId:"",goodShopId:"",mainUrl:"",redpayDetail:"",fullreturnDetail:"",userInfo:{uuid:"",avatar:""},init:function(){var a=this;a.goTop.length&&(a.offsetEl=$(".wrap").length?$(".wrap").eq(0):$("#body_wrap"),a.offsetEl.length&&(a.win=$(window),a.setSidebarPos(),a.redGoodsId=w.goodsLikeId,a.campaignId=w.redKey,a.redpayDetail=w.redpayDetail,a.fullreturnDetail=w.fullreturnDetail,a.goodShopId=w.goodShopId,a.rulePageUrl=w.link,M.getUUID().then(function(e){a.userInfo.uuid=e}),a.getActContentMait(),M.getUserInfo().then(function(e){M.log(e),a.isLogin=!0,a.userInfo.avatar=e.avatar,a.addEvent()})["catch"](function(){a.isLogin=!1,a.addEvent()})))},getActContentMait:function(){var a=this;M.http.jsonp({url:z.maitUrl,jsonpCallback:"jsonp2603_2426_2421_2427_38726",data:{pids:a.contentIds}}).then(function(e){e.success&&"SUCCESS"==e.returnCode?($("#enterArea").html(s({data:e.data})),$(".shop-top-enter-area").html(d({data:e.data})),a.mainUrl=e.data[2426].list[0].link,$(".J_act_main_link").attr("href",a.mainUrl),$(".J_act_rule_link").attr("href",a.rulePageUrl)):$("#enterArea .ele_loading_text").show()})["catch"](function(){$("#enterArea .ele_loading_text").show()})},guessLike:function(){var a=this,e={pid:a.redGoodsId,pageSize:60,plat:"pc",uuid:a.userInfo.uuid};a.isLogin&&a.userInfo.uid&&(e.uidE=a.userInfo.uid),M.http.jsonp({url:z.guessLikeUrl,data:e}).then(function(a){if(a.success&&"SUCCESS"==a.returnCode&&a.data.list.length>0){for(var e=a.data.list,i=[],t=[],n=[],o={isFormal:x,list:e},r=0;r<e.length;r++){var s=e[r].image;e[r].price=Math.ceil(e[r].price),s.indexOf(".jpg")>0&&s.indexOf(".jpg_")<0&&(e[r].image+="_160x999.jpg")}$("#act_goods_like_box").html(l(o));for(var r=0;r<e.length;r++)i.push(e[r].item_id),t.push(r),n.push(e[r].acm);u._pushLog({eventid:70500,iids:i,indexs:t,acms:n},70500)}else $("#act_goods_like_box .ele_loading_text").show()})["catch"](function(){$("#act_goods_like_box .ele_loading_text").show()})},getRedContent:function(){function a(){if(i.redContentAdd)return!1;i.redContentAdd=!0;var a={isLogin:i.isLogin,mainUrl:i.mainUrl,hasRedpay:!1,price:0,link:""};i.isLogin?M.http.jsonp({url:z.redpayUrl,data:{campaignId:i.campaignId}}).then(function(e){if("SUCCESS"==e.returnCode){var t=e.data.num;+t?(a.hasRedpay=!0,a.price=(t/100).toFixed(2),a.link=i.redpayDetail):(a.hasRedpay=!1,a.price=0)}else 1004!=e.returnCode&&4004!=e.returnCode||(a.hasRedpay=!1);$("#redpayArea").html(c(a))}):$("#redpayArea").html(c(a))}function e(){if(i.fullReturnAdd)return!1;i.fullReturnAdd=!0;var a={price:0,isLogin:!1,hasFullReturn:!1,mainUrl:i.mainUrl,link:i.fullreturnDetail};M.http.jsonp({url:z.fullReturnUrl}).then(function(e){if("SUCCESS"==e.returnCode){var i=e.data.totalAmout;i>0?(a.isLogin=!0,a.hasFullReturn=!0,a.price=(i/100).toFixed(2)):(a.isLogin=!0,a.hasFullReturn=!1)}else 16e4==e.returnCode?(a.isLogin=!0,a.hasFullReturn=!1):"1002"==e.returnCode&&(a.isLogin=!1,a.hasFullReturn=!1);$("#fullReturnArea").html(h(a))})}var i=this,t=$(".redpay_pre_header"),n=$(".redpay_header");a(),x&&k&&(t.removeClass("show").addClass("hide"),n.removeClass("hide").addClass("show"),e()),i.guessLike()},getShopContent:function(){function a(){return!i.shopCouponAdd&&(i.shopCouponAdd=!0,void M.http.jsonp({url:z.shopCouponUrl}).then(function(a){if(a&&1001==a.returnCode&&a.data&&a.data.couponList&&a.data.couponList.length>0){for(var e=a.data.couponList,i=[],t={isFormal:x,list:e,link:a.data.moreUrl},n=0;n<e.length;n++){var o=e[n].recommendItemCover,r=e[n].cutPrice,s=e[n].limitPrice;o.indexOf(".jpg")>0&&o.indexOf(".jpg_")<0&&(e[n].recommendItemCover+="_160x999.jpg"),e[n].cutPrice=r/100,e[n].limitPrice=s/100}$("#act-shop-coupon-box").html(v(t));for(var n=0;n<e.length;n++)i.push(n);u._pushLog({eventid:70500,indexs:i},70500)}else $("#act-shop-coupon-box .ele_body_loading").hide()})["catch"](function(){$("#act-shop-coupon-box .ele_body_loading").hide()}))}function e(){M.http.jsonp({url:z.goodShopUrl,data:{pid:i.goodShopId,uuid:i.userInfo.uuid}}).then(function(a){if(a.success&&"SUCCESS"==a.returnCode&&a.data.list.length>0){for(var e=a.data,i=e.list,t=[],n=[],o=[],r={isFormal:x,list:i},s=0;s<i.length;s++){var d=i[s].list[0].image;d.indexOf(".jpg")>0&&d.indexOf(".jpg_")<0&&(i[s].list[0].image+="_160x999.jpg")}$("#act-good-shop-box").html(g(r));for(var s=0;s<i.length;s++)t.push(i[s].shop_id),n.push(s),o.push(i[s].acm);u._pushLog({eventid:70500,iids:t,indexs:n,acms:o},70500)}else $("#act-good-shop-box .ele_loading_text").show()})["catch"](function(){$("#act-good-shop-box .ele_loading_text").show()})}var i=this;a(),e()},addEvent:function(){var a=this,e=$("#showRuleBtn"),i=$("#showRuleFullReturnBtn"),t=$("#ruleArea"),n=$("#ruleFullReturnArea");if(this.win.on("resize",function(e){a.setSidebarPos()}),this.sidebarCart.off().on("mouseenter",function(){a.win.width()>b||a.sidebarShow||a.showSidebar()}),this.sidebar.off().on("mouseleave",function(){a.win.width()>b||a.sidebarShow||a.hideSidebar()}),this.eleBtn.on("click",".actnav_mainin",function(){$(this).hasClass("act_nav_tab_on")||a.changeSiderbarContent(1)}),this.eleBtn.on("click",".actnav_favor",function(){$(this).hasClass("act_nav_tab_on")||(a.changeSiderbarContent(0),a.guessLike())}),$("body").on("click",function(e){var i=$(e.target);i[0]!=f[0]&&0==f.find(i).length&&a.sidebarShow&&(a.hideSidePanel(),a.hideSidebar())}),a.eleBox.on("click",".ele_header_cont i",function(){a.sidebarShow&&(a.hideSidePanel(),a.hideSidebar())}),e.add(t).on("mouseenter",function(){t.addClass("show")}),e.add(t).on("mouseleave",function(){t.removeClass("show")}),i.add(n).on("mouseenter",function(){n.addClass("show")}),i.add(n).on("mouseleave",function(){n.removeClass("show")}),x){var o=$(".redpay_item"),r=$(".fullreturn_item"),s=$(".redpay-user-box"),d=$(".fullreturn-user-box"),l=$(".hover_line");o.on("click",function(){s.removeClass("hide").addClass("show"),d.removeClass("show").addClass("hide"),l.animate({left:"24px"})}),r.on("click",function(){s.removeClass("show").addClass("hide"),d.removeClass("hide").addClass("show"),l.animate({left:"136px"})})}addWheelListener(a.eleBox[0],function(e){var i=60;navigator.appVersion.indexOf("Mac")!=-1&&(i=10),0!=e.deltaY&&(a.eleBox[0].scrollTop+=e.deltaY>0?i:-i),e.preventDefault()}),a.isLogin||f.on("click","#goLogin",function(a){var e="//portal.mogujie.com/user/login?refer="+U;a.preventDefault(),window.location=e})},setSidebarPos:function(){var a=(this.offsetEl.offset(),this.offsetEl.outerWidth(),this.win.width());a<b?this.hideSidebar():this.showSidebar(),this.hideSidePanel()},showSidePanel:function(){this.sidebar.stop().animate({right:"270px"}),this.eleBox.stop().animate({right:"0px"}),this.sidebarShow=!0},hideSidePanel:function(){this.eleBox.stop().animate({right:"-270px"}),this.sidebarShow=!1,this.eleBtn.find(".act_nav_tab").removeClass("act_nav_tab_on")},changeSiderbarContent:function(a){this.eleBtn.find(".act_nav_tab").removeClass("act_nav_tab_on"),1==a?($(".body_enter").show().siblings().hide(),this.eleBtn.find(".actnav_mainin").addClass("act_nav_tab_on")):0==a&&($(".body_favor").show().siblings().hide(),this.eleBtn.find(".actnav_favor").addClass("act_nav_tab_on")),this.showSidePanel()},showSidebar:function(){this.sidebarCart.stop().animate({left:"0px"}),this.goTop.stop().animate({left:"0px"}),this.sidebar.removeClass("mini").stop().animate({right:"0px"})},hideSidebar:function(){var a,e=-95,i=0;a=this.win.width()<b?e:i,this.sidebarCart.stop().animate({left:a}),this.goTop.stop().animate({left:a}),this.sidebar.addClass("mini").stop().animate({right:a})}};e.init()}function o(){var a=$('<div class="promotionTopBarContainer"></div>');$("#header").before(a),M.http.jsonp({url:z.maitUrl,jsonpCallback:"jsonp22149_22450",data:{pids:"22149,22450"}}).then(function(e){if("SUCCESS"==e.returnCode&&e.success){var i=e.data[22149].list,t=e.data[22450].list[0];if(!(e&&e.data&&i.length>0&&t))return;a.css("backgroundColor",t.bg_nav_color);var n=!!$("body").hasClass("media_screen_1200"),o=p(i);a.html(o);var r=a.find(".innerwrap"),s=new Image,d="";if(n?(d=t.image_big,s.src=d):(d=t.image_small,s.src=d),s.complete)return r.css("background-image","url("+s.src+")"),void a.animate({"margin-top":"0"});s.onload=function(){r.css("background-image","url("+s.src+")"),a.animate({"margin-top":"0"})}}})}i(1);var r=i(3),s=i(4),d=i(5),l=i(6),c=i(7),v=i(8),g=i(9),h=i(10),p=i(11),u={};u._pushLog=function(a,e){setTimeout(function(){if(window.logger&&logger.log)try{logger.log(e,a)}catch(i){M.log(i)}else if(window.detePtp&&detePtp.logFromtSend){var t=window.detePtp._collectParams||{};a.ptp_cnt=t.ptp_cnt||"",a.ptp_url=t.ptp_url||"",a.ptp_ref=t.ptp_ref||"";try{detePtp.logFromtSend("e",e,a)}catch(i){M.log(i)}}},1e3)};var _=M.ua,m=_.ie67,b=1260,f=$(".mgj_rightbar"),y=!1,x=!1,j=0,k=0,w={},C={},S="",B="",L=location.href.split("?")[0],U=location.href,P=M.fn.getQueryString("_act_set_time",U),I=!1,R=$("#shopBaseUrlSec");R.length>0&&(I=location.host==R.val().split("/")[2]||"shop.mogujie.com"==location.host);var q="//www.mogujie.com/"===L||"//www.mogujie.com"===L||"//www.mogujie.com/index"===L;M.pc.isTopSideNavOpen=!1;var z={maitUrl:"//mce.mogucdn.com/jsonp/multiget/3",redpayUrl:"//promotion.mogujie.com/jsonp/getRedPacket/1",fullReturnUrl:"//hongbao.mogujie.com/jsonp/hongbaoAmount/1",guessLikeUrl:"//mce.mogujie.com/jsonp/get/3",shopCouponUrl:"//www.mogujie.com/mbractivity/myshopcoupon.jsonp",goodShopUrl:"//mce.mogujie.com/jsonp/recommend/4"};P&&(z.maitUrl="//mce.mogujie.com/jsonp/multiget/3?time="+P),m||M.getServerTime().then(function(a){t(a)})},function(a,e){},,function(a,e){a.exports=function(a){var e='<!-- \u4ec5\u6709\u6837\u5f0f\u7684\u60c5\u51b5\uff0c\u901a\u8fc7\u5176\u4ed6tpl\u52a0\u5165\u6570\u636e --><!--\u7a7a\u7684\u53f3\u4fa7\u8fb9\u680f--><div id="mgj_rightbar_top_blank" class="mgj_rightbar_960"></div><!--\u65b9\u4fbf\u5b9amargin\u7684\u7a7adiv-->';return a||(e+='<div id="mgj_rightbar_blank_div"></div>'),e+="<!--1111\u5927\u4fc3\u4fa7\u8fb9\u5bfc\u822a-->",a&&(e+=" <!-- \u9ea6\u7530\u83b7\u53d6\u6837\u5f0f --> <style>  .mgj_rightbar .mgj-my-actnavin .actnav_box .main_link, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_mainin, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_my, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_shop, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_favor, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_rule, .mgj_rightbar .mgj-my-actnavin .actnav_box .bot_bg { background-image: url("+a.barHeadBg+"); background-repeat: no-repeat; }  .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_mainin:hover, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_mainin.act_nav_tab_on { background: url("+a.pageTabLight+") no-repeat; } .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_my:hover, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_my.act_nav_tab_on { background: url("+a.redTabLight+") no-repeat; } .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_shop:hover, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_shop.act_nav_tab_on { background: url("+a.shopTabLight+") no-repeat; } .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_favor:hover, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_favor.act_nav_tab_on { background: url("+a.favorTabLight+") no-repeat; } .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_rule:hover, .mgj_rightbar .mgj-my-actnavin .actnav_box .actnav_rule.act_nav_tab_on { background: url("+a.ruleTabLight+") no-repeat; } .mgj_rightbar .mgj-my-actnavin .actnav_box .act_nav_tab_on { width: 110px; }  .mgj_actnav_box .actnavBox_header  { background: url("+a.pageHead+") no-repeat; } .mgj_actnav_box .redpay_pre_header { background: url("+a.redHead+") no-repeat; } .mgj_actnav_box .redpay_header { background: url("+a.redFormalHead+") no-repeat; } .mgj_actnav_box .shop_header { background: url("+a.shopHead+") no-repeat; } .mgj_actnav_box .favor_header { background: url("+a.favorHead+") no-repeat; }   .mgj_actnav_box .actnavBox_body { background-color: "+a.sliderBarContentBg+"; background-image: url("+a.sliderBarContentBgImg+"); background-repeat: no-repeat; background-size: cover; } .actnavBox_body .shop-top-enter-area { margin-top: 0!important; padding-top: 12px; } .mgj_actnav_box .actnavBox_body .body_main .body_main_item { background: url("+a.oneM+") no-repeat; } .mgj_actnav_box .actnavBox_body .body_centre .body_centre_item { background: url("+a.twoM+") no-repeat; } .mgj_actnav_box .actnavBox_body .body_main .body_main_item:hover { background: url("+a.oneL+") no-repeat; } .mgj_actnav_box .actnavBox_body .body_centre .body_centre_item:hover { background: url("+a.twoL+") no-repeat; } .mgj_actnav_box .actnavBox_body .body_centre .body_centre_title { background: url("+a.twoTitle+") no-repeat; }  .mgj_rightbar .act-like-goods-area .gap{ background-color: "+a.sliderBarContentBg+"; } .mgj_rightbar .act-like-goods-area .gap .title { background: url("+a.gTitle+") no-repeat; } .mgj_rightbar .act-like-goods-area span.price-tag { background: url("+a.gp+") no-repeat; } .mgj_rightbar .act-like-goods-area .redpay-use .hb-img { background: url("+a.gr+') no-repeat 0 2px; } </style> <!-- \u5de6\u4fa7\u5bfc\u822a\u56fe\u7247 --> <div class="img_pre_hide" style="height: 0;width: 0;overflow: hidden;"> <img src="'+a.pageTabLight+'" alt=""> <img src="'+a.redTabLight+'" alt=""> <img src="'+a.shopTabLight+'" alt=""> </div> <!-- \u4fa7\u8fb9\u6761 --> <div class="mgj-my-actnavin"> <div class="actnav_box"> <!-- \u8fdb\u5165\u4e3b\u4f1a\u573a --> <a class="main_link J_act_main_link" target="_blank" href="javascript:;"></a> <!-- \u4f1a\u573a\u5bfc\u822a --> <a class="actnav_mainin act_nav_tab" href="javascript:void(0)" rel="nofollow"></a> <!-- \u6211\u7684\u7ea2\u5305 --> <!--<a class="actnav_my act_nav_tab" href="javascript:void(0)" rel="nofollow"></a>--> <!-- \u5e97\u94fa\u4f18\u60e0 --> <!--<a class="actnav_shop act_nav_tab" href="javascript:void(0)" rel="nofollow"></a>--> <!-- \u731c\u4f60\u559c\u6b22 --> <a class="actnav_favor act_nav_tab" href="javascript:void(0)" rel="nofollow"></a> <!-- 321\u89c4\u5219 --> <a class="actnav_rule act_nav_tab J_act_rule_link" target="_blank" href="javascript:;"></a> <!-- \u5e95\u90e8\u56fe\u7247 --> <div class="bot_bg"></div> </div> </div> <!-- \u4fa7\u8fb9\u4e3b\u4f53 --> <div class="mgj_actnav_box"> <!-- \u4f1a\u573a\u5bfc\u822a --> <div class="body_enter"> <!-- \u9876\u90e8\u56fe\u7247 --> <div class="actnavBox_header"> <div class="ele_header_cont"> <i></i> </div> </div> <!-- \u672a\u83b7\u53d6\u5230\u6570\u636e\u65f6\u5360\u4f4d --> <div class="actnavBox_body"> <div id="enterArea">  <div class="ele_body_loading"> <img src="https://s10.mogucdn.com/pic/140813/kuw9n_ieyggojrmi4dknlbmiytambqgiyde_26x26.gif"> <div class="ele_loading_text">\u670d\u52a1\u5668\u5f00\u5c0f\u5dee\u4e86\uff0c\u8bf7\u7a0d\u540e\u67e5\u770b</div> </div> </div> </div> </div> <!-- \u7ea2\u5305\u9875 --> <!--<div class="body_redpay" > &lt;!&ndash; \u53ea\u6709\u7ea2\u5305\u60c5\u51b5\u5934\u90e8 &ndash;&gt; <div class="actnavBox_header redpay_pre_header show"> <div class="ele_header_cont"> <i></i> </div> </div> &lt;!&ndash; \u6709\u7ea2\u5305\u548c\u6ee1\u8fd4\u60c5\u51b5\u5934\u90e8 &ndash;&gt; <div class="actnavBox_header redpay_header hide"> <div class="ele_header_cont"> <i></i> <div class="redpay_item"></div> <div class="fullreturn_item"></div>  <div class="hover_line"></div> </div> </div> <div class="actnavBox_body"> &lt;!&ndash; \u7ea2\u5305\u4fe1\u606f &ndash;&gt; <div class="redpay-user-box show"> <div class="redpay-desc"> <div class="go-rule" > <span class="show-rule-btn" id="showRuleBtn"> <img src="https://s10.mogucdn.com/p1/160301/upload_ie3weyjwgazgmnzqg4zdambqgayde_16x16.png"> \u4f7f\u7528\u89c4\u5219 </span> </div> <div id="redpayArea"></div> </div> <div class="redpay-rule-box" id="ruleArea"> <div class="popver-trangle"> <img src="https://s10.mogucdn.com/p1/160304/upload_ie3tan3ggiydknzrg4zdambqgayde_34x16.png"> </div> <div class="popver-body "> <div class="popver-title">XXXXXXXXX</div> <div class="popver-content" id="ruleContent"> </div>  </div> </div> </div> &lt;!&ndash; \u6ee1\u8fd4 &ndash;&gt; <div class="fullreturn-user-box hide"> <div class="fullreturn-desc"> <div class="go-full-return-rule" > <span class="show-full-return-rule-btn" id="showRuleFullReturnBtn"> <img src="https://s10.mogucdn.com/p1/160301/upload_ie3weyjwgazgmnzqg4zdambqgayde_16x16.png"> \u6ee1\u8fd4\u6d3b\u52a8\u89c4\u5219 </span> </div> <div id="fullReturnArea"></div> </div> <div class="fullreturn-rule-box" id="ruleFullReturnArea"> <div class="popver-trangle"> <img src="https://s10.mogucdn.com/p1/160304/upload_ie3tan3ggiydknzrg4zdambqgayde_34x16.png"> </div> <div class="popver-body "> <div class="popver-title">XXXXXXXXX</div> <div class="popver-content" id="ruleFullReturnContent"> </div>  </div> </div> </div> &lt;!&ndash; \u731c\u4f60\u559c\u6b22 &ndash;&gt; <div id="act_goods_like_box">  <div class="ele_body_loading"> <img src="https://s10.mogucdn.com/pic/140813/kuw9n_ieyggojrmi4dknlbmiytambqgiyde_26x26.gif"> <div class="ele_loading_text">\u670d\u52a1\u5668\u5f00\u5c0f\u5dee\u4e86\uff0c\u8bf7\u7a0d\u540e\u67e5\u770b</div> </div> </div>  </div>  </div>--> <!-- \u5e97\u94fa\u4f18\u60e0 --> <!--<div class="body_shop"> <div class="actnavBox_header shop_header"> <div class="ele_header_cont"> <i></i> </div> </div> <div class="actnavBox_body"> &lt;!&ndash; \u6211\u7684\u5e97\u94fa\u5238 &ndash;&gt; <div id="act-shop-coupon-box"> <div class="ele_body_loading"> <img src="https://s10.mogucdn.com/pic/140813/kuw9n_ieyggojrmi4dknlbmiytambqgiyde_26x26.gif"> <div class="ele_loading_text">\u670d\u52a1\u5668\u5f00\u5c0f\u5dee\u4e86\uff0c\u8bf7\u7a0d\u540e\u67e5\u770b</div> </div> </div> &lt;!&ndash; \u597d\u5e97\u63a8\u8350 &ndash;&gt; <div id="act-good-shop-box"> <div class="ele_body_loading"> <img src="https://s10.mogucdn.com/pic/140813/kuw9n_ieyggojrmi4dknlbmiytambqgiyde_26x26.gif"> <div class="ele_loading_text">\u670d\u52a1\u5668\u5f00\u5c0f\u5dee\u4e86\uff0c\u8bf7\u7a0d\u540e\u67e5\u770b</div> </div> </div> </div> </div>--> <!-- \u731c\u4f60\u559c\u6b22 --> <div class="body_favor" > <div class="actnavBox_header favor_header"> <div class="ele_header_cont"> <i></i> </div> </div> <div class="actnavBox_body"> <div class="shop-top-enter-area"> </div> <!-- \u731c\u4f60\u559c\u6b22 --> <div id="act_goods_like_box"> <div class="ele_body_loading"> <img src="https://s10.mogucdn.com/pic/140813/kuw9n_ieyggojrmi4dknlbmiytambqgiyde_26x26.gif"> <div class="ele_loading_text">\u670d\u52a1\u5668\u5f00\u5c0f\u5dee\u4e86\uff0c\u8bf7\u7a0d\u540e\u67e5\u770b</div> </div> </div> </div> </div> </div>'),e}},function(a,e){a.exports=function(a){var e="<!-- \u4f1a\u573a\u5bfc\u822a -->";if(a){e+='<!-- \u5168\u90e8\u4f1a\u573a --> <!-- \u6b63\u5f0fbody\u5f00\u59cb --> <div class="body_main clearfix"> <!-- \u4e3b\u4f1a\u573a --> ';var i=a.data[2426].list;if(i)for(var t,n=-1,o=i.length-1;n<o;)t=i[n+=1],e+=' <a class="body_main_header" href="'+t.link+'" target="_blank"> <img src="'+t.image+'"> </a> ';e+=" <!-- \u4e00\u7ea7\u4f1a\u573a --> ";var r=a.data[2421].list;if(r)for(var t,s=-1,d=r.length-1;s<d;)t=r[s+=1],e+=' <a class="body_main_item yahei fl" href="'+t.link+'" target="_blank">'+t.title+"</a> ";e+=' </div> <div class="body_centre clearfix"> <div class="body_centre_title"></div> <!-- \u4e8c\u7ea7\u4f1a\u573a --> ';var l=a.data[2427].list;if(l)for(var t,c=-1,v=l.length-1;c<v;)t=l[c+=1],e+=' <a class="body_centre_item yahei fl" href="'+t.link+'" target="_blank">'+t.title+"</a> ";e+=" </div>"}return e}},function(a,e){a.exports=function(a){var e="<!-- \u529b\u8350\u597d\u5e97\u5165\u53e3 -->";if(a){e+='<div class="body_top_shop clearfix"> ';var i=a.data[38726].list;if(i)for(var t,n=-1,o=i.length-1;n<o;)t=i[n+=1],e+=' <a class="top_shop_enter" href="'+t.link+'" target="_blank"> <img src="'+t.image+'"> </a> ';e+="</div>"}return e}},function(a,e){a.exports=function(a){var e="<!-- \u731c\u4f60\u559c\u6b22 -->";if(a&&(e+=" ",a.list)){e+=' <div class="act-like-goods-area"> <div class="gap"> <div class="title"></div> ';var i=a.list;if(i)for(var t,n=-1,o=i.length-1;n<o;)t=i[n+=1],e+=' <div class="like-goods-list" data-iid="'+t.item_id+'">  <div class="like-goods-item clearfix">  <div class="left-img"> <a href="'+t.item_url+'" data-ext-acm="'+t.acm+'" class="loading_bg_90 img-wrap"  target="_blank"> <img src="'+t.image+'" alt=""> </a> </div>  <div class="right-info fl"> <a href="'+t.item_url+'" data-ext-acm="'+t.acm+'" target="_blank"> <div class="name single-line yahei">'+t.title+'</div> <div class="price-area single-line"> <span class="price-tag fl"></span> <span class="price yahei fl">\xa5'+(t.discountPrice||t.price)+'</span> <span class="old-price yahei fl">\xa5'+t.price+'</span> </div> <div class="redpay-use single-line clearfix"> <!--<span class="hb-img fl"></span> <span class="hb-price fl">',e+=t.hbPrice?"\u7ea2\u5305\u6700\u9ad8\u518d\u62b5\uffe5"+t.hbPrice:"\u7528\u7ea2\u5305\u66f4\u5212\u7b97",e+="</span>--> </div> <div> ",e+=a.isFormal?' <div class="btn add-shopcar yahei">\u7acb\u5373\u8d2d\u4e70</div> ':' <div class="btn add-shopcar yahei">\u52a0\u5165\u8d2d\u7269\u8f66</div> ',e+=" </div> </a> </div>  </div> </div> ";e+="  </div> </div> "}return e}},function(a,e){a.exports=function(a){var e="<!-- \u7ea2\u5305\u4fe1\u606f -->";return a&&(e+=" ",e+=a.isLogin?a.hasRedpay?' <div class="sidebar_tip gray999">\u7ea2\u5305\u603b\u8ba1\uff08\u5143\uff09</div> <div class="redpay-num">'+a.price+'</div> <div class="sidebar_tip gray666">\uff08\u53ef\u4e0e\u5e97\u94fa\u5238\u3001\u5e73\u53f0\u5238\u53e0\u52a0\uff09</div> <a href="'+a.link+'" class="redpay-btn" style="background-image:none;" target="_blank">\u67e5\u770b\u7ea2\u5305\u660e\u7ec6</a> ':' <img class="main-img" src="https://s10.mogucdn.com/p1/160301/upload_ie4tomzqgq4wcnzqg4zdambqgqyde_31x39.jpg"> <div class="sidebar_tip gray666">\u4f60\u8fd8\u6ca1\u6709\u7ea2\u5305\u54e6<br/>\u5feb\u53bb\u4e3b\u4f1a\u573a\u8d62\u53d6\u7ea2\u5305\u5427</div> <a href="'+a.mainUrl+'" class="redpay-btn" target="_blank">\u53bb\u4e3b\u4f1a\u573a</a> ':' <img class="main-img" src="https://s10.mogucdn.com/p1/160301/upload_ie4tsnjwgjtdonzqg4zdambqgqyde_38x38.png"> <div class="sidebar_tip gray666">\u4f60\u8fd8\u6ca1\u6709\u767b\u5f55</div> <a href="javascript:void(0);" class="redpay-btn" id="goLogin">\u7acb\u5373\u767b\u5f55</a> '),e}},function(a,e){a.exports=function(a){var e="<!-- \u6211\u7684\u5e97\u94fa\u4f18\u60e0\u5238 -->";if(a&&(e+=" ",a.list)){e+=' <div class="act-shop-coupon-area"> <div class="gap"> <div class="title">\u6211\u7684\u5e97\u94fa\u5238</div> ';var i=a.list;if(i)for(var t,n=-1,o=i.length-1;n<o;)t=i[n+=1],e+=" ",n<3&&(e+=' <div class="shop-coupon-list">                 <div class="shop-coupon-item clearfix"> <!-- \u5de6\u4fa7\u56fe\u7247 --> <div class="left-img"> <a href="'+t.shopUrl+'" class="loading_bg_90 img-wrap"  target="_blank"> <img src="'+t.recommendItemCover+'" alt=""> </a> </div> <!-- \u53f3\u4fa7\u4fe1\u606f --> <div class="right-info fl"> <a href="'+t.shopUrl+'" target="_blank"> <div class="name yahei">'+t.shopName+'</div> <div class="line">----------------------</div> <div class="coupon-area"> <div class="cutPrice" ><b class="yahei">&yen;</b>'+(t.cutPrice||0)+'</div> <div class="limitPrice yahei">\u6ee1'+t.limitPrice+'\u5143\u4f7f\u7528</div> </div> <div> <div class="btn go-shopping yahei">\u53bb\u901b\u5e97</div> </div> </a> </div>  </div> </div> '),e+=" ";e+=' <!-- \u67e5\u770b\u66f4\u591a --> <a href="'+a.link+'" class="check-more yahei" target="_blank">\u67e5\u770b\u66f4\u591a<span class="logo"></span></a> </div> </div> '}return e}},function(a,e){a.exports=function(a){var e="<!-- \u597d\u5e97\u63a8\u8350 -->";if(a&&(e+=" ",a.list)){e+=' <div class="act-good-shop-area"> <div class="gap"> <div class="title">\u597d\u5e97\u63a8\u8350</div> ';var i=a.list;if(i)for(var t,n=-1,o=i.length-1;n<o;)t=i[n+=1],e+=" ",n<3&&(e+=' <div class="good-shop-list" >                 <div class="good-shop-item clearfix"> <!-- \u5de6\u4fa7\u56fe\u7247 --> <div class="left-img"> <a href="'+t.shop_url+'" data-ext-acm="'+t.acm+'" class="loading_bg_90 img-wrap"  target="_blank"> <img src="'+t.list[0].image+'" alt=""> </a> </div> <!-- \u53f3\u4fa7\u4fe1\u606f --> <div class="right-info fl"> <a href="'+t.shop_url+'" data-ext-acm="'+t.acm+'" target="_blank"> <div class="name yahei">'+t.shopName+'</div> <div class="line">----------------------</div> <div class="coupon-area"> <div class="cutPrice"><b class="yahei">&yen;</b>'+(t.cutPrice||0)+'</div> <div class="limitPrice yahei">\u6ee1'+t.limitPrice+'\u5143\u4f7f\u7528</div> </div> <div> <div class="btn go-shopping yahei">\u53bb\u901b\u5e97</div> </div> </a> </div> </div> </div> '),e+=" ";e+="  </div> </div> "}return e}},function(a,e){a.exports=function(a){var e="<!-- \u6ee1\u8fd4 -->";return a&&(e+=" ",e+=a.isLogin?a.hasFullReturn?' <div class="sidebar_tip gray999">\u91d1\u989d\u603b\u8ba1\uff08\u5143\uff09</div> <div class="fullreturn-num">'+a.price+'</div> <div class="sidebar_tip gray666">(\u53ef\u5728\u6536\u94f6\u53f0\u62b5\u6263\u4ed8\u6b3e\u91d1\u989d  )</div> <a href="'+a.link+'" class="fullreturn-btn" style="background-image:none;" target="_blank">\u67e5\u770b\u660e\u7ec6</a> ':' <img class="main-img" src="https://s10.mogucdn.com/p1/160301/upload_ie4tomzqgq4wcnzqg4zdambqgqyde_31x39.jpg"> <div class="sidebar_tip gray666">\u60a8\u7684\u6ee1\u8fd4\u4f59\u989d\u4e3a\u96f6\uff0c<br/>\u5355\u7b14\u5b9e\u4ed8\u6ee1\u767e\u5373\u8fd4\uff01</div> <a href="'+a.mainUrl+'" class="fullreturn-btn" target="_blank">\u53bb\u8d2d\u7269</a> ':' <img class="main-img" src="https://s10.mogucdn.com/p1/160301/upload_ie4tsnjwgjtdonzqg4zdambqgqyde_38x38.png"> <div class="sidebar_tip gray666">\u4f60\u8fd8\u6ca1\u6709\u767b\u5f55</div> <a href="javascript:void(0);" class="fullreturn-btn" id="goLogin">\u7acb\u5373\u767b\u5f55</a> '),e}},function(a,e){a.exports=function(a){var e='<!-- \u9876\u901a --><div class="wrap"> <div class="innerwrap clearfix"> ',i=a;if(i)for(var t,n=-1,o=i.length-1;n<o;)t=i[n+=1],e+=' <a class="fl ',0===n?e+="first reset":n===a.length-1&&(e+="last"),e+='" href="'+(t.link||"javascript:;")+'" target="_blank"></a> ';return e+=" </div></div>"}}]);!function(){"use strict";function e(){var e="1";return q.isMobile&&(e="m1"),q.isIos&&q.isNative?e="am0":q.isAndroid&&q.isNative&&(e="am1"),e}function t(){var e=R.getValue(T.ptp_cnt_b);if(e)return e;var t="",n=location.href.split("?")[0];return t=D.pageHash(n)}function n(){var e=R.getCookieOrFunc(T.cpsinfo);return e?e=e.replace("-",","):""}function r(e){if(e){var t=R.getValue(T.urlExtendFn,e);return R.hasKey(t)?t:void 0}}function i(e){if(e){e.length&&(e=e[0]);var t=R.getValue(T.ptp_cnt_c_d,e);if(t)return t;var n=e.getAttribute("data-ptp-customc");if(n)return{c:n,d:z.getIndex("data-ptp-customc",n,e)};if(e=z.getParents(e,"data-ptp-customc"))return n=e.getAttribute("data-ptp-customc"),n?{c:n,d:z.getIndex("data-ptp-customc",n,e)}:void 0}}function o(){return R.getCookieOrFunc(T.uuid)}function a(e,t){return e||(e=H.c),t||(t=H.d),[H.a,H.b,e,t,H.e].join(".")}function u(e){window.PTP_PARAMS&&R.extend(T,window.PTP_PARAMS);var t=document.referrer,r=R.getQuery("ptp",location.search),i=R.getQuery("ptp",document.referrer?document.referrer:""),o=navigator.userAgent.toLocaleLowerCase();q.isNative=T.isNativeRe.test(o);var u=location.href,c=u.split("#")[1];if(c=c?"?"+c:"",T.urlHash){for(var d in T.urlHash)T.urlHash.hasOwnProperty(d)&&(c=R.setQuery(c,d,encodeURIComponent(T.urlHash[d])));u=u.split("#")[0]+c.replace("?","#")}return e&&U&&U.url!=u&&(t=U.url,r=a(0,0),i=U.ptp_url),{time:R.getTime(),ver:"1.2.0",uid:R.getCookieOrFunc(T.uid),_channel:"","tid-token":"",launchTime:R.getTime(),active:0,deviceName:"",os_ver:"",root:0,network:0,provider:"",url:u,refer:t,ptp_url:r,ptp_ref:i,eid:"0",ext:{cpsparam:R.getCookie("__cps"),cpsinfo:n(),_notNative:!q.isNative}}}function c(n){H.a=e(),H.b=n||t(),H.c=0,H.d=0}function d(e,t){t=t||{};var n=[];for(var r in t){var i=t[r];i||(i=""),i=encodeURIComponent(i),n.push(r+"="+i)}n=n.join("&"),e=e.indexOf("?")>-1?e+"&"+n:e+"?"+n;var o=new Image;o.src=e}function f(e,t){e+="?web=1",t=t||{};var n,r=J++;try{n=document.createElement('<iframe name="'+r+'">')}catch(i){n=document.createElement("iframe"),n.setAttribute("name",r)}try{n.style.display="none",document.body.appendChild(n),n.contentWindow.name=r;var o=document.createElement("form");o.setAttribute("method","POST"),o.setAttribute("action",e),o.setAttribute("target",r);for(var a in t)if(t.hasOwnProperty(a)){var u=document.createElement("input");u.setAttribute("type","hidden"),u.setAttribute("name",a),u.setAttribute("value",t[a]),o.appendChild(u)}document.body.appendChild(o),o.submit(),R.registerEvent(n,"load",function(){try{document.body.removeChild(o),document.body.removeChild(n)}catch(e){}})}catch(i){window.M&&M.log(i)}}function s(){if(!Z){Z=!0;for(var e=0;e<X.length;e++)X[e].fn.call(window,X[e].ctx);X=[]}}function p(){"complete"===document.readyState&&s()}function l(e,t){return Z?void setTimeout(function(){e(t)},1):(X.push({fn:e,ctx:t}),void("complete"===document.readyState||!document.attachEvent&&"interactive"===document.readyState?setTimeout(s,1):G||(document.addEventListener?(document.addEventListener("DOMContentLoaded",s,!1),window.addEventListener("load",s,!1)):(document.attachEvent("onreadystatechange",p),window.attachEvent("onload",s)),G=!0)))}function g(){return Y}function m(e,t,n){"undefined"!=typeof e&&(t=t||{},n&&window.M&&M.web.AB&&(t.abinfo=M.web.AB.formatAB(n)),l(function(){var n=W.getPtpInfoAndExtra(t);n.eid=e+"",g()?K.logData("e",R.extend({},n)):R.listenTo("LoggerReady",function(){var e=W.getPtpInfoAndExtra(t);K.logData("e",R.extend({},e))}),window.MtaH5&&MtaH5.clickStat&&MtaH5.clickStat(e,t)}))}function v(){var e=W.getPtpInfoAndExtra(),t=R.getValue(T.pEventId);e.eid=t,K.logData("p",e)}function h(e,t,n){if(q.isNative){var r=W.getPtpCnt();t?K.logAppCustomPevent(r,e,n):window.M&&M.web.AB&&M.web.AB.isAB?M.web.AB.collectExps().then(function(e){e.length?K.logAppPevent(r,e):K.logAppPevent(r)}):K.logAppPevent(r)}else g()?v():R.listenTo("LoggerReady",function(){v()})}function w(e,t,n){R.isArray(t)&&(n=t,t=""),l(function(){W.refreshPtp(t,!0),W.refreshE(),h(e,!0,n)})}function y(e){var t=e.href;if(!(t.indexOf("mogujie.com/mtalk/")>-1)&&(T.hrefRe.test(t)||T.mgjRe.test(t))){var n=e.getAttribute("data-ptp-cache-id");t=e.getAttribute("href"),n&&T.ptpRe.test(n)||(n=W.createPtpCnt(e),e.setAttribute("data-ptp-cache-id",n)),e.href=W.makeUrl(t,n,e)}}function x(e){if(e.getAttribute){var t=e.getAttribute("href");if(null===t)return!1;if(0===t.indexOf("#")&&"_blank"!==e.getAttribute("target"))return!1}return!0}function A(e){var t=e||window.event,n=t.target||t.srcElement,r=z.getA(n),i="AREA"===n.nodeName?n:null;i&&(r=i),r&&(r.href&&r.href.indexOf("javascript:")>-1||x(r)&&y(r))}function P(e){var t=document.createElement("iframe");t.src=e,t.style.display="none",document.body&&document.body.appendChild(t)}function E(e,t){if("undefined"==typeof e)return"";var n="";return n=t?W.createPtpCnt(t):W.getPtpCnt(),W.makeUrl(e,n,t)}function b(){var e=E("");e=e.split("?")[1],e=e.split("&");for(var t,n="",r=0,i=e.length;r<i;r++)t=e[r].split("="),n+='<input type="hidden" name="'+t[0]+'" value="'+(t[1]?t[1]:"")+'"/>';return n}function C(e,t){e&&"string"==typeof e&&((T.hrefRe.test(e)||T.mgjRe.test(e))&&(e=E(e,t)),window.location.href=e)}function _(e,t){void 0===t&&(t="navigateTo"),e=E(e),e=R.setQuery(e,"_mgjuuid",R.getCookieOrFunc(T.uuid)),window.wx&&wx.miniProgram&&wx.miniProgram[t]&&wx.miniProgram[t]({url:e,fail:function(){"navigateTo"===t?wx.miniProgram.redirectTo({url:e,fail:function(){wx.miniProgram.switchTab({url:e})}}):"redirectTo"===t&&wx.miniProgram.switchTab({url:e})}})}"undefined"==typeof location.search&&(location.search=location.href.split("#")[0]);var j=1001,k={},L={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","`":"&#x60;"},I=/(&|<|>|"|`|')/g,R={escapeHtml:function(e){return e.replace(I,function(e){return L[e]})},isIE:function(e){var t=document.createElement("b");return t.innerHTML="<!--[if IE "+e+"]><i></i><![endif]-->",1===t.getElementsByTagName("i").length},stringify:function(e){var t=this;if("undefined"!=typeof JSON)return JSON.stringify(e);var n=typeof e;if("object"!=n||null===e)return"string"==n&&(e='"'+e+'"'),String(e);var r,i,o=[],a=e&&e.constructor==Array;for(r in e)i=e[r],n=typeof i,e.hasOwnProperty(r)&&("string"==n?i='"'+i+'"':"object"==n&&null!==i&&(i=t.stringify(i)),o.push((a?"":'"'+r+'":')+String(i)));return(a?"[":"{")+String(o)+(a?"]":"}")},isArray:function(e){return"[object Array]"==Object.prototype.toString.call(e)},getCookieInArray:function(e){for(var t=this,n=0,r=e.length;n<r;n++){var i=t.getCookie(e[n]);if(i)return i}return""},getCookieOrFunc:function(e){return"function"==typeof e?this.getValue(e):this.getCookie(e)},getCookie:function(e){if(this.isArray(e))return this.getCookieInArray(e);var t=document.cookie.match(new RegExp("(^| )"+e+"=([^;]*)(;|$)"));return null!==t?decodeURIComponent(t[2]):""},getQuery:function(e,t){"undefined"==typeof t&&(t=location.search);var n="(^|&|\\?)"+e+"=([^&]*)(&|$)",r=new RegExp(n,"i"),i=t.substr(1).match(r);return null!==i?this.escapeHtml(decodeURIComponent(i[2])):""},setQuery:function(e,t,n){var r=new RegExp("([?&])"+t+"=.*?(&|$)","i"),i=e.indexOf("?")!==-1?"&":"?";return e.match(r)?e.replace(r,"$1"+t+"="+n+"$2"):e+i+t+"="+n},getTime:function(){return(new Date).getTime()},registerEvent:function(e,t,n){window.attachEvent?e.attachEvent("on"+t,n):e.addEventListener(t,n,!1)},extend:function(){for(var e=arguments,t=arguments[0],n=1;n<e.length;n++){var r=e[n];for(var i in r)r.hasOwnProperty(i)&&(t[i]=r[i])}return t},getValue:function(e){if(e){if("function"==typeof e)try{var t=Array.prototype.slice.call(arguments,1);return e.apply(null,t)}catch(n){return window.M&&window.M.log("**logger.js---\u6253\u70b9\u51fa\u9519:"+n),""}return e}},loadScript:function(e,t,n){if(window["callback_"+j]=function(e){t&&t(e)},e=this.setQuery(e,"callback","callback_"+j),j+=1,n)window.loader.script(e,function(){},function(){});else{var r=document.createElement("script");r.src=e;var i=document.getElementsByTagName("head")[0];i&&i.appendChild(r)}},listenTo:function(e,t){k[e]||(k[e]=[]),k[e].push(t)},fire:function(e){var t=k[e];if(t&&t.length){for(var n=0,r=t.length;n<r;n++)t[n].call();k[e]=[]}},hasKey:function(e){if(!e)return!1;for(var t in e)if(e.hasOwnProperty(t))return!0;return!1}},N="https:"===location.protocol?"https:":"http:",O="mogujie";location.host.indexOf("meilishuo")!=-1&&(O="meilishuo");var T={LogUrl:N+"//log.mogujie.com/log",CookieUrl:N+"//portal."+O+".com/api/util/getUuid",shouldRequestCookie:function(){var e=R.getCookieOrFunc(this.uuid);return!e},uuid:["__mgjuuid","__xduuid"],uid:"__ud_",cpsinfo:"__cpsinfo",ptp_cnt_a:"",ptp_cnt_b:"",ptp_cnt_c_d:"",platform:function(){var e=navigator.userAgent.toLowerCase();if(/qq\/([\d\.]+)/.test(e)||/qzone\//.test(e))return 48},pEventId:"0",isMobileRe:/iphone|android|ipad/i,ptpRe:/[a-z0-9]+\.[a-z0-9]+\.[a-z0-9]+\.[a-z0-9]+\.[a-z0-9]+/i,hrefRe:/http[s]?:\/\/(\w+\.){1,2}(mogujie|meilishuo|xiaodian|uniny)\.com([\/]|\/.*|)$/,mgjRe:/(mgj|mls):\/\//,mtRe:/\?.*[&]?mt=([^\.]+)\.([^\.]+)\.([^\.&#]+)/,chasing:["f","f2","mlf","s","_fu","_wvx"],urlExtend:["acm","cparam"],urlExtendFn:function(){},urlHash:"",urlCustom:"",extra:{},isNativeRe:/(mogujie|meilishuo|mls|mgjtuangou|xiaodian|xcore)/i,nativeLog:{}},S=navigator.userAgent.toLocaleLowerCase(),B=!1,Q=S.indexOf("xcore")>-1;Q&&window.loader&&window.loader.script&&(B=!0);var U,H,q={isWX:S.indexOf("micromessenger")>-1,isApp:T.isNativeRe.test(S),isNative:T.isNativeRe.test(S),isMobile:T.isMobileRe.test(S),isIos:S.indexOf("iphone")>-1,isAndroid:S.indexOf("android")>-1,isLowIE:!B&&(R.isIE(6)||R.isIE(7)||R.isIE(8)),xcore:B},F=window.jQuery||window.Zepto,V=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]==t)return n+1;return-1},z={getA:function(e){var t=e;if("A"==t.tagName)return e;for(;t.parentNode;)if(t=t.parentNode,"A"==t.tagName)return t},getParentByClass:function(e,t){if(e){if(F)return $(e).parents("."+t);for(var n,r=e;r.parentNode;)if(r=r.parentNode,n=r.className&&r.className.indexOf(t)!=-1)return r}},getParents:function(e,t){if(e){if(t=t||"",F)return t="["+t+"]",$(e).parents(t)[0];for(var n,r=e;r.parentNode;)if(r=r.parentNode,n=r.getAttribute&&r.getAttribute(t))return r}},getIndex:function(e,t,n){if(!e||!t||!n)return 0;if(F)return $("["+e+'="'+t+'"]').index($(n))+1;if(document.querySelectorAll){var r=document.querySelectorAll("["+e+'="'+t+'"]');return V(r,n)}return 1},getElemIndex:function(e,t,n){if(!e||!t||!n)return 0;if(F)return $(e).find(t).index($(n))+1;if(e.querySelectorAll){var r=e.querySelectorAll(t);return V(r,n)}return 1},is:function(e,t){return!(!e||!t)&&(e.length&&(e=e[0]),e.nodeName.toLowerCase()===t.toLowerCase()||void 0)}},D={arr:"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",rand:function(e){var t,n,r=this,i="",o=0;for(t=0;t<e;t++)n=parseInt(Math.random()*r.arr.length,10),i+=r.arr.charAt(n),o+=r.arr.charCodeAt(n);return i+=this.arr.charAt(o%this.arr.length)},pageHash:function(e){var t=this,n=5381,r=e.length-1;if("string"==typeof e)for(;r>-1;r--)n+=(n<<5)+e.charCodeAt(r);else for(;r>-1;r--)n+=(n<<5)+e[r];var i=2147483647&n,o="";do o+=t.arr.charAt(61&i),i>>=6;while(i);return o}};U=u(),H={a:e(),b:t(),c:0,d:0,e:T.ptp_cnt_e?T.ptp_cnt_e:D.rand(7)};var W={getPlatform:function(){var e=R.getValue(T.platform);return e?e:q.isMobile?32:31},getPtpByType:function(e){var t=[0,o(),e];return t},getPtpCnt:function(e,t){return a(e,t)},getPtpInfo:function(e,t){var n={};return R.extend(n,U,{ptp_cnt:this.getPtpCnt(e,t)})},getPtpInfoAndExtra:function(e){e=e||{};var t=this.getPtpInfo(e.ptp_c,e.ptp_d),n={};if(T.extra)for(var r in T.extra)T.extra.hasOwnProperty(r)&&(n[r]=R.getValue(T.extra[r]));var i=R.extend({},t.ext,n,e);return R.extend({},t,{ext:i})},createPtpCnt:function(e){var t=i(e),n=0,r=0;if(t)return this.getPtpCnt(t.c,t.d);var o=z.getParents(e,"data-ptp"),a=z.getParentByClass(e,"data-ptp-item");return o&&(n=o.getAttribute("data-ptp"),r=a?z.getElemIndex(o,".data-ptp-item",a):z.getElemIndex(o,"a",e)),r||(r=0),this.getPtpCnt(n,r)},makeUrl:function(e,t,n){var r=e.match(/(#.+)$/);return e=e.replace(/(#.+)$/,""),e=R.setQuery(e,"ptp",t),e=this.getChasingParams(e),e=this.getExtendParams(n,e),r&&(e+=r[1]),e},getChasingParams:function(e){"undefined"==typeof e&&(e="");var t=e;if(!T.chasing)return t;T.chasing.length||(T.chasing=[T.chasing]);for(var n,r,i=0,o=T.chasing.length;i<o;i++)n=T.chasing[i],r=R.getQuery(n),r&&(t=R.setQuery(t,n,r));for(var a=location.search,u=/[\?&](_f_[^=]+)=([^&]+)/g,c=u.exec(a);c&&3==c.length;)t=R.setQuery(t,c[1],c[2]),c=u.exec(a);return t},getExtendParams:function(e,t){var n=t;if(!e||!z.is(e,"a"))return n;var i=r(e);if(i)for(var o in i)i.hasOwnProperty(o)&&(n=R.setQuery(n,o,i[o]));else{e.length&&(e=e[0]);for(var a=T.urlExtend||[],u=0,c=a.length;u<c;u++){var d=a[u],f=e.getAttribute("data-ext-"+d);f&&(n=R.setQuery(n,d,f))}}return n},refreshPtp:function(e,t){U=u(t),c(e)},refreshE:function(){H&&(H.e=D.rand(7))}},J=0,K={sendLog:function(e,t){q.isLowIE?f(e,t):d(e,t)},sendAppLog:function(e,t){return e+="",T.nativeLog&&T.nativeLog.logE?T.nativeLog.logE(e,t):void(window.hdp&&window.hdp.exec?hdp.exec("mgj.tracker.sendEvent",e,t):document.addEventListener("deviceready",function(){window.mgj&&mgj.tracker&&mgj.tracker.sendEvent&&mgj.tracker.sendEvent(e,t)},!1))},logAppPevent:function(e,t){return T.nativeLog&&T.nativeLog.logP?T.nativeLog.logP(e,t):void(window.hdp&&window.hdp.exec?hdp.exec("mgj.pevent",e,t).then(function(){},function(){}):document.addEventListener("deviceready",function(){window.mgj&&mgj.pevent&&mgj.pevent(function(){},null,e)},!1))},logAppCustomPevent:function(e,t,n){window.hdp&&window.hdp.exec?hdp.exec("mgj.tracker.sendPEvent",t,e,n,!0):document.addEventListener("deviceready",function(){window.mgj&&mgj.tracker&&mgj.tracker.sendPEvent(function(){},function(){},t,e,n,!0)},!1)},logData:function(e,t){var n=W.getPtpByType(e),r=t.eid;if(n.push(R.stringify(t)),q.isNative){var i=t.ext;i.ptp_cnt=t.ptp_cnt,i.ptp_url=t.ptp_url,i.ptp_ref=t.ptp_ref,i.uid=t.uid,i._11_url=location.href,i._11_refer=document.referrer||"",K.sendAppLog(r,i)}else K.sendLog(T.LogUrl,{v:2,pt:R.getTime(),pf:W.getPlatform(),data:n.join("\t")})}},X=[],Z=!1,G=!1,Y=q.isNative||!T.shouldRequestCookie();Y||R.loadScript(T.CookieUrl,function(){Y=!0,R.fire("LoggerReady")},q.xcore);var ee=navigator.userAgent.toLocaleLowerCase();if(ee.indexOf("meili-pevent=true")!==-1&&!q.xcore&&!q.isIos){var te=T.urlCustom,ne=W.getPtpCnt(),re="meili://pevent?param="+ne;te&&(re+="&url="+encodeURIComponent(te)),window.M&&M.web.AB&&M.web.AB.isAB?M.web.AB.collectExps().then(function(e){e.length&&(re+="&abtest="+encodeURIComponent(e.join(","))),P(re)})["catch"](function(){P(re)}):P(re)}var ie={version:"1.2.0",ptp:W,config:T,util:R,info:q,send:K,refreshPevent:w,log:m,generatePtpParams:E,generatePtpForm:b,goTo:C,goToWxa:_};if(window.logger=ie,!q.xcore){var oe="tap"in document.createElement("div")?"tap":"mousedown";R.registerEvent(document,oe,A),R.registerEvent(document,"touchstart",A)}return l(function(){W.refreshPtp(),h()}),ie}();
var trace=function(){"use strict";function extend(){var arguments$1=arguments;var target=arguments[0];var argsLen=arguments.length;for(var i=1;i<argsLen;i++){var source=arguments$1[i];for(var p in source){if(source.hasOwnProperty(p)){target[p]=source[p]}}}return target}function getValue(fn){if(typeof fn!=="function"){return fn}return fn()}var config={customUrl:function customUrl(){},getExtraTime:function getExtraTime(){return 0},blankTime:"__trace__headendt"};function getFormatUrl(url){url=url||location.href;var customUrl=getValue(config.customUrl);if(customUrl){customUrl=customUrl.split("https://").join("").split("http://").join("");return customUrl}if(typeof url==="string"){url=url.split("?")[0].split("#")[0].split("https://").join("").split("http://").join("");if(url.charAt(url.length-1)==="/"){url=url.substr(0,url.length-1)}}return url}var CHROME_IE_STACK_REGEXP=/^\s*at .*(\S+\:\d+|\(native\))/m;var SAFARI_NATIVE_CODE_REGEXP=/^(eval@)?(\[native code\])?$/;function _map(array,fn,thisArg){if(typeof Array.prototype.map==="function"){return array.map(fn,thisArg)}else{var output=new Array(array.length);for(var i=0;i<array.length;i++){output[i]=fn.call(thisArg,array[i])}return output}}function _filter(array,fn,thisArg){if(typeof Array.prototype.filter==="function"){return array.filter(fn,thisArg)}else{var output=[];for(var i=0;i<array.length;i++){if(fn.call(thisArg,array[i])){output.push(array[i])}}return output}}function _indexOf(array,target){if(typeof Array.prototype.indexOf==="function"){return array.indexOf(target)}else{for(var i=0;i<array.length;i++){if(array[i]===target){return i}}return-1}}var ErrorStackParser={parse:function ErrorStackParser$$parse(error){if(error.stack&&error.stack.match(CHROME_IE_STACK_REGEXP)){return this.parseV8OrIE(error)}else if(error.stack){return this.parseFFOrSafari(error)}else{return[]}},extractLocation:function ErrorStackParser$$extractLocation(urlLike){if(urlLike.indexOf(":")===-1){return[urlLike]}var regExp=/(.+?)(?:\:(\d+))?(?:\:(\d+))?$/;var parts=regExp.exec(urlLike.replace(/[\(\)]/g,""));return[parts[1],parts[2]||undefined,parts[3]||undefined]},parseV8OrIE:function ErrorStackParser$$parseV8OrIE(error){var filtered=_filter(error.stack.split("\n"),function(line){return!!line.match(CHROME_IE_STACK_REGEXP)},this);return _map(filtered,function(line){if(line.indexOf("(eval ")>-1){line=line.replace(/eval code/g,"eval").replace(/(\(eval at [^\()]*)|(\)\,.*$)/g,"")}var tokens=line.replace(/^\s+/,"").replace(/\(eval code/g,"(").split(/\s+/).slice(1);var locationParts=this.extractLocation(tokens.pop());var functionName=tokens.join(" ")||undefined;var fileName=_indexOf(["eval","<anonymous>"],locationParts[0])>-1?undefined:locationParts[0];return{functionName:functionName,filename:fileName,row:locationParts[1],column:locationParts[2],line:line}},this)},parseFFOrSafari:function ErrorStackParser$$parseFFOrSafari(error){var filtered=_filter(error.stack.split("\n"),function(line){return!line.match(SAFARI_NATIVE_CODE_REGEXP)},this);return _map(filtered,function(line){if(line.indexOf(" > eval")>-1){line=line.replace(/ line (\d+)(?: > eval line \d+)* > eval\:\d+\:\d+/g,":$1")}if(line.indexOf("@")===-1&&line.indexOf(":")===-1){return{functionName:line}}else{var tokens=line.split("@");var locationParts=this.extractLocation(tokens.pop());var functionName=tokens.join("@")||undefined;return{functionName:functionName,filename:locationParts[0],row:locationParts[1],column:locationParts[2],line:line}}},this)}};var parser={ErrorStackParser:ErrorStackParser,parse:function parse(error){var r=ErrorStackParser.parse(error);if(!r||r.length<=0){return error.message}var info=r[0];var strs=[];if(info.filename){var filename=info.filename;if(filename.lastIndexOf("/")>-1){filename=info.filename.slice(info.filename.lastIndexOf("/"))}strs.push(filename)}if(info.functionName){strs.push("@"+info.functionName)}if(info.row){strs.push(" "+info.row)}return error.message+" - "+strs.join("")},normalize:function normalize(error){var r=ErrorStackParser.parse(error);return r}};function getPlatform(){var ua=navigator.userAgent.toLowerCase();return/iphone|android|ipad/i.test(ua)?"h5":"pc"}function getBrowser(){var nAgt=navigator.userAgent;var unknown="其它";var browser=unknown;var version="";var majorVersion="";var verOffset;var ix;if((verOffset=nAgt.indexOf("Opera"))!==-1){browser="Opera";version=nAgt.substring(verOffset+6);if((verOffset=nAgt.indexOf("Version"))!==-1){version=nAgt.substring(verOffset+8)}}if((verOffset=nAgt.indexOf("OPR"))!==-1){browser="Opera";version=nAgt.substring(verOffset+4)}else if(nAgt.indexOf("MicroMessenger")!==-1){browser="Wechat"}else if(nAgt.indexOf("QQ")!==-1){browser="QQ"}else if((verOffset=nAgt.indexOf("MSIE"))!==-1){browser="IE";version=nAgt.substring(verOffset+5)}else if((verOffset=nAgt.indexOf("Chrome"))!==-1){browser="Chrome";version=nAgt.substring(verOffset+7)}else if((verOffset=nAgt.indexOf("Firefox"))!==-1){browser="Firefox";version=nAgt.substring(verOffset+8)}else if(nAgt.indexOf("Trident/")!==-1){browser="IE";version=nAgt.substring(nAgt.indexOf("rv:")+3)}else if((verOffset=nAgt.indexOf("Safari"))!==-1||nAgt.indexOf("iPhone")!==-1){browser="Safari";version=nAgt.substring(verOffset+7);if((verOffset=nAgt.indexOf("Version"))!==-1){version=nAgt.substring(verOffset+8)}}if((ix=version.indexOf(";"))!==-1){version=version.substring(0,ix)}if((ix=version.indexOf(" "))!==-1){version=version.substring(0,ix)}if((ix=version.indexOf(")"))!==-1){version=version.substring(0,ix)}if(version){majorVersion=parseInt(""+version,10);if(isNaN(majorVersion)){version=""+parseFloat(navigator.appVersion);majorVersion=parseInt(navigator.appVersion,10)}}return majorVersion?browser+"_"+majorVersion:browser+"_unknown"}function getOs(){var unknown="其它";var os=unknown;var nAgt=navigator.userAgent;var clientStrings=[{s:"Windows 10",r:/(Windows 10.0|Windows NT 10.0)/},{s:"Windows 8.1",r:/(Windows 8.1|Windows NT 6.3)/},{s:"Windows 8",r:/(Windows 8|Windows NT 6.2)/},{s:"Windows 7",r:/(Windows 7|Windows NT 6.1)/},{s:"Windows Vista",r:/Windows NT 6.0/},{s:"Windows Server 2003",r:/Windows NT 5.2/},{s:"Windows XP",r:/(Windows NT 5.1|Windows XP)/},{s:"Windows 2000",r:/(Windows NT 5.0|Windows 2000)/},{s:"Windows ME",r:/(Win 9x 4.90|Windows ME)/},{s:"Windows 98",r:/(Windows 98|Win98)/},{s:"Windows 95",r:/(Windows 95|Win95|Windows_95)/},{s:"Windows NT 4.0",r:/(Windows NT 4.0|WinNT4.0|WinNT|Windows NT)/},{s:"Windows CE",r:/Windows CE/},{s:"Windows 3.11",r:/Win16/},{s:"Android",r:/Android/},{s:"Open BSD",r:/OpenBSD/},{s:"Sun OS",r:/SunOS/},{s:"Linux",r:/(Linux|X11)/},{s:"iOS",r:/(iPhone|iPad|iPod)/},{s:"Mac OS X",r:/Mac OS X/},{s:"Mac OS",r:/(MacPPC|MacIntel|Mac_PowerPC|Macintosh)/},{s:"QNX",r:/QNX/},{s:"UNIX",r:/UNIX/},{s:"BeOS",r:/BeOS/},{s:"OS/2",r:/OS\/2/},{s:"Search Bot",r:/(nuhk|Googlebot|Yammybot|Openbot|Slurp|MSNBot|Ask Jeeves\/Teoma|ia_archiver)/}];for(var id in clientStrings){var cs=clientStrings[id];if(cs.r.test(nAgt)){os=cs.s;break}}var osVersion=unknown;if(/Windows/.test(os)){osVersion=/Windows (.*)/.exec(os)[1];os="Windows"}switch(os){case"Mac OS X":osVersion="";break;case"Android":var matched=/Android( |\/)([\.\_\d]+)/.exec(nAgt);if(matched&&matched.length>0){var arr=(matched[2]||"").split(".").slice(0,2);osVersion=arr.join(".")}break;case"iOS":osVersion=/OS (\d+)_(\d+)_?(\d+)?/.exec(nAgt);if(osVersion&&osVersion.length>0){osVersion=osVersion[1]+"."+osVersion[2]}break}return os===unknown?os:os+osVersion}function getScreen(){var _screen=window.screen;var width;var height;var screenSize="";if(_screen&&_screen.width){width=_screen.width?_screen.width:"";height=_screen.height?_screen.height:"";screenSize+=""+width+"x"+height}return screenSize}function getDevicePixelRatio(){var dpr=(window.devicePixelRatio?window.devicePixelRatio:1)-0;return dpr.toFixed(1)}function getDeviceInfo(){return{platform:getPlatform(),screen:getScreen(),os:getOs(),browser:getBrowser(),devicePixelRatio:getDevicePixelRatio()}}var Promise=window.Promise;function getPerformanceInfo(){var timing=window.performance&&window.performance.timing;if(!timing){return Promise.resolve({})}var blankTime=window[config.blankTime];if(!blankTime){blankTime=timing.domContentLoadedEventStart}var res={dns:timing.domainLookupEnd-timing.domainLookupStart,tcp:timing.connectEnd-timing.connectStart,request:timing.responseStart-timing.requestStart,response:timing.responseEnd-timing.responseStart,domContentLoad:timing.domContentLoadedEventEnd-timing.navigationStart,blankTime:blankTime-timing.navigationStart,readyTime:timing.domInteractive-timing.navigationStart,onloadTime:timing.loadEventEnd-timing.navigationStart,extraTime:getValue(config.getExtraTime)||0};return Promise.resolve(res)}function _log(){var logger=window.logger;if(!logger){return}var info=getDeviceInfo();getPerformanceInfo().then(function(performance){logger.log&&logger.log("016000001",extend({formatUrl:getFormatUrl()},info,performance))})}var queue=[];function isNewError(msg,file,line,col){var flag=true;for(var i=0;i<queue.length;i++){var item=queue[i]||{};if(item.msg===msg&&item.file===file&&item.line===line&&item.col===col){flag=false;break}}if(flag){queue.push({msg:msg,file:file,line:line,col:col})}return flag}function onErrorHandler(msg,file,line,col,err){if(!isNewError(msg,file,line,col)){return}var stack="";if(err){if(err.hasReported){return}stack=err.stack||""}queue.push({msg:msg,file:file,line:line,col:col});var logger=window.logger;if(!logger||!logger.log){return}if(typeof stack!=="string"){stack=""+stack}var data={type:0,msg:msg,stack:stack,ua:navigator.userAgent,formatUrl:getFormatUrl()};try{JSON.stringify(data);logger.log("016000011",data)}catch(_){}}var regParsePattern=/^\s*('?undefined'?|object|null) is not (a function|an object)\s*$/i;function shouldParse(msg){if(!msg){return false}if(regParsePattern.test(msg)){return true}if(msg.toLowerCase()==="cannot convert undefined or null to object"){return true}return false}function getErrorInfo(error,useParser){if(!error){return null}var data={};if(typeof error==="object"){data.msg=error.message||"";data.stack=error.stack||"";data.stack=data.stack;if(typeof data.stack!=="string"){data.stack=""+data.stack}}else{data.msg=error}data.ua=navigator.userAgent;data.type=1;if(shouldParse(data.msg)&&typeof error==="object"&&error.stack){try{data.msg=parser.parse(error)}catch(err){}}if(!isNewError(data.msg,data.stack)){return null}return data}var Logger={init:function init(){var interval=setInterval(function(){var timing=window.performance&&window.performance.timing;if(timing&&timing.loadEventEnd===0){return}clearInterval(interval);setTimeout(function(){_log()},10)},300);window.onerror=onErrorHandler},sendMsg:function sendMsg(error,extra,useParser){if(extra===void 0)extra=null;if(useParser===void 0)useParser=false;var data=getErrorInfo(error,useParser);var logger=window.logger;if(!data||!logger||!logger.log){return}var extraJSON="";if(extra){try{extraJSON=JSON.stringify(extra);if(extraJSON.length>1024){throw new Error("extra contains too much information")}}catch(e){extraJSON="";console&&console.warn&&console.warn(e)}}extend(data,{formatUrl:getFormatUrl(),extra:extraJSON});try{JSON.stringify(data);logger.log("016000011",data)}catch(err){}}};function isIE(){var myNav=navigator.userAgent.toLowerCase();return myNav.indexOf("msie")!==-1?parseInt(myNav.split("msie")[1],10):false}function _report(err){if(typeof err==="string"){err=new Error(err)}if(err.hasReported){return}err.hasReported=true;Logger.sendMsg(err,null,true)}function _inject(fn){if(typeof fn.apply!=="function"){return fn}return function(){try{return fn.apply(this,arguments)}catch(err){_report(err);console&&console.warn&&console.warn(err);throw err}}}function _transform(fn){if(!fn||typeof fn.apply!=="function"){return fn}return function(){var arguments$1=arguments;var args=[];var arg;for(var i=0,l=arguments.length;i<l;i++){arg=arguments$1[i];if(typeof arg==="function"){arg=_inject(arguments$1[i])}args.push(arg)}return fn.apply(this,args)}}function _mix(target,src){for(var key in src){target[key]=src[key]}}function injectjQuery(){var $=window.$;if(!$||$!==window.jQuery&&$!==window.Zepto){return}var _ready=$.fn.ready;$.fn.ready=_transform(_ready);var _ajax=$.ajax;if(typeof _ajax==="function"&&typeof _ajax.apply==="function"){$.ajax=function(url,options){var target=null;if(typeof options==="undefined"&&typeof url==="object"){target=url}else if(typeof options==="object"){target=options}if(target){if(typeof target.success==="function"){target.success=_inject(target.success)}if(typeof target.complete==="function"){target.complete=_inject(target.complete)}}return _ajax.apply($,arguments)}}}function injectRequireJS(){var _require=window.require;var _define=window.define;if(_define&&_define.amd&&_require){window.require=_transform(_require);_mix(window.require,_require);window.define=_transform(_define);_mix(window.define,_define)}}function injectSystem(){var _setTimeout=window.setTimeout;window.setTimeout=function(fn,ms){if(typeof fn==="function"){fn=_inject(fn)}switch(arguments.length){case 0:return _setTimeout();case 1:return _setTimeout(fn);default:return _setTimeout(fn,ms)}};var _setInterval=window.setInterval;window.setInterval=_transform(_setInterval);var _requestAnimationFrame=window.requestAnimationFrame;if(typeof _requestAnimationFrame==="function"){window.requestAnimationFrame=_transform(_requestAnimationFrame)}if(window.EventTarget&&window.EventTarget.prototype.addEventListener){var addEventListener=window.EventTarget.prototype.addEventListener;window.EventTarget.prototype.addEventListener=function(event,callback,bubble){if(callback&&typeof callback.handleEvent==="function"){callback.handleEvent=_inject(callback.handleEvent);return addEventListener.call(this,event,callback,bubble)}else{if(!callback.___wrapper){callback.___wrapper=_inject(callback)}return addEventListener.call(this,event,callback.___wrapper,bubble)}};var removeEventListener=window.EventTarget.prototype.removeEventListener;window.EventTarget.prototype.removeEventListener=function(event,callback,bubble){if(!callback){return removeEventListener.call(this,event,callback,bubble)}else{return removeEventListener.call(this,event,callback.___wrapper||callback,bubble)}}}}var Inject={init:function init(){if(isIE()&&isIE()<9){return}injectjQuery();injectRequireJS();injectSystem()}};var exit=false;if(window._trace){console&&console.warn&&console.warn("WARNING: you already import trace");exit=true}try{if(localStorage.__disable__trace__){console.warn("trace is disabled");exit=true}}catch(err){}if(!/^https?/.test(location.protocol)){console.warn("trace will work only under http or https protocol page");exit=true}if(!/(meilishuo|mogujie|xiaodian|uniny|meili-inc)\.com/.test(location.host)){console.warn("trace will work only under *.(meilishuo|mogujie|xiaodian|uniny|meili-inc).com");exit=true}var M=window.M;if(!M){console.warn("M is required before using trace");exit=true}else if(typeof M.isDev==="function"&&M.isDev()){console.warn("trace will work only under production mode");exit=true}if(typeof window.console==="undefined"){window.console={log:function(){},warn:function(){}}}if(!exit){Logger.init();Inject.init()}window._trace={send:function send(){},sendImmediately:function sendImmediately(){},version:"1.2.3",config:config,sendMsg:Logger.sendMsg};var index={};return index}();!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define("pc/common/header/index",[],e):"object"==typeof exports?exports["pc/common/header/index"]=e():t["pc/common/header/index"]=e()}(this,function(){return function(t){function e(o){if(n[o])return n[o].exports;var i=n[o]={exports:{},id:o,loaded:!1};return t[o].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var n={};return e.m=t,e.c=n,e.p="",e(0)}([function(t,e,n){"use strict";n(1)},function(t,e,n){var o,i;o=[],i=function(){function t(t,e){this.init(t,e)}function e(){function t(t){return $.trim(t).replace(/(<|>|'|"|window|alert|eval|$|jQuery)/gi,"")}r.on("keyup keydown",function(n){var o=$(this),i=$("#select_type");if(!i.length||"bao"===i.val()||"5"===i.val())switch(n.keyCode){case 40:if("keyup"==n.type||!a.data("isshow"))break;f.chooseIndex=f.chooseIndex+1>f.tipLength-1?0:++f.chooseIndex;var l=m.changeListTab(f.chooseIndex);r.val(l);break;case 38:if("keyup"==n.type||!a.data("isshow"))break;f.chooseIndex=f.chooseIndex-1<0?f.tipLength-1:--f.chooseIndex;var l=m.changeListTab(f.chooseIndex);r.val(l);break;case 13:if("keyup"==n.type)break;n.preventDefault(),e.submitBefore(f.chooseType,f.chooseIndex),c.submit();break;case 37:break;case 39:break;default:clearTimeout(s),s=setTimeout(function(){var e=t(o.val());m.resetFactory(e)},500)}}).on("focus",function(){var e=$(this),n=$("#select_type");if(s&&clearTimeout(s),!n.length||"bao"===n.val()||"5"===n.val()){var o=t(e.val());clearTimeout(s),s=setTimeout(function(){m.resetFactory(o)},300)}}).on("blur",function(){$("body").bind("click",function(t){$(t.target).parents(".seatch_type_msearch").length||(a.empty().data("isshow",!0).hide(),$("body").unbind("click"))})}),a.on("mouseenter",".search_tip li",function(t){var e=$(this),n=e.index();f.chooseIndex=n,m.changeListTab(n)}).on("click",".search_tip li",function(t){var n=$(this).find(".title").text();$(t.target).hasClass("prop")&&(n+=" "+$(t.target).text()),e.submitBefore(f.chooseType,f.chooseIndex),r.val(n),c.submit()}),a.on("click",".hot_list li",function(){var t=$(this);return e.submitBefore(m.hotTypeName,t.index()),r.val(t.find("span").html()),c.submit(),!1}),a.on("click",".local_del",function(t){var e=$(this),n=e.parent();d.del(n.find(".title").attr("title"));var o=d.getTenItem();return m.updateLocalContent(e,o),f.chooseIndex=-1,f.tipLength=o.length,!1}).on("click",".local_title .del_all",function(){var t=$(this);return d.set(),m.destoryLocalContent(t),t.remove(),f.chooseIndex=-1,f.tipLength=0,!1}),i.on("click",".selectbox a",function(t){t.preventDefault(),m.changeType($(this))}).on("mouseenter",".selectbox",function(){a.hide(),$(this).addClass("sele_hover")}).on("mouseleave",".selectbox",function(){$(this).removeClass("sele_hover")}),c.submit(function(){var n=$(this),o=t(r.val()),i=r.attr("def-v");if(""==o||o==i){if(""==o&&"shop"==$("#select_type").val())return!1;var s=r.data("def");r.val(s||"");var a='<input type="hidden" name="from" value="searchplacehold" id="TJ">';$("#top_nav_form").append(a),setTimeout(function(){$("#TJ").remove()},1e3)}else o==$.trim(r.val())&&"bao"==$("#select_type").val()&&d.addOne(o);if(c.find(".emptyvalue").remove(),n.data("index")>-1&&null!==n.data("type")){var l='<input type="hidden" class="emptyvalue" name="from" value="'+n.data("type")+"querytip"+n.data("index")+'">';c.append(l)}m.destoryContent(),e.submitAfter()}),m.showStickySearch()&&m.initStickySearch()}var n=MoGu.ui.getdoT(),o=MoGu.util.getStore();if(n&&o){$(".store_header").length;var i=$("#nav_search_form");if(i.length){var s,a=$(".top_search_hint"),r=i.find(".ts_txt"),c=$("#top_nav_form"),l=$("#select_type"),h=i.find(".selectbox"),p="/msearch/tips/item",u={nowHost:window.location.host,defultHost:"http://www.mogujie.com",template:'<div class="search_tip_box fl">{{=it.searchResult}}</div>',listItemTemp:['<div class="mr300 tip_wrap">','{{ if(it.titleName && it.titleName != ""){ }}','<h3 class="search_tip_title">{{=it.titleName}}</h3>',"{{ }else{ }}","{{ } }}",'<ul class="search_tip">',"{{~it.items :item:index}}","{{ if(index < 10){ }}","<li>",'<a href="javascript:;" class="title" title="{{= item.title }}" >{{= item.title }}</a>',"{{~item.props :prop: i}}",'<span class="prop">{{= prop }}</span>',"{{~}}","</li>","{{ } }}","{{~}}","</ul>","</div>"].join(""),localItemTemp:['<div class="mr300 tip_wrap">','<h3 class="search_tip_title local_title clearfix">',"{{ if(it.items.length){ }}",'<span class="del_all">\u5220\u9664</span>',"{{ } }}","\u5386\u53f2\u8bb0\u5f55","</h3>",'<ul class="search_tip">',"{{~it.items :item:index}}","{{ if(index < 10){ }}",'<li class="local_item">','<a href="javascript:;" class="title" title="{{=item}}" >{{=item}}</a>',"{{~item.props :prop: i}}",'<span class="prop">{{= prop }}</span>',"{{~}}",'<span class="nums local_del">x</span>',"</li>","{{ } }}","{{~}}","</ul>","</div>"].join(""),hotKeyTpl:['<div class="search_hot_wrap">','<h3 class="search_tip_title hot_title">\u70ed\u95e8\u5173\u952e\u8bcd</h3>','<ul class="hot_list clearfix">',"{{~it.items :item:index}}","{{ if(index < 10){ }}","<li><span>{{= item.title }}</span></li>","{{ } }}","{{~}}","</ul>","</div>"].join(""),emptyTpl:['<div class="mr300 tip_wrap">','<p class="tip_none">\u6682\u65e0\u76f8\u5173\u70ed\u95e8\u5173\u952e\u8bcd</p>',"</div>"].join("")},d={keyName:"_search_local_history",keyShowName:"_search_local_history_show",maxLength:20,showLength:10,isshow:function(){return!0},abtest:function(t){o.set(this.keyShowName,1)},get:function(){return o.get(this.keyName)||[]},getTenItem:function(){var t=this.get();return t.slice(0,this.showLength)},set:function(t){o.set(this.keyName,t||[])},addOne:function(t){if(t=$.trim(t),""!=t){var e=this.get(),n=$.inArray(t,e);-1==n?(e.unshift(t),e.length>this.maxLength&&e.pop()):(e.splice(n,1),e.unshift(t)),this.set(e)}},del:function(t){t=$.trim(t);var e=this.get(),n=$.inArray(t,e);n>-1&&(e.splice(n,1),this.set(e))}};t.prototype.init=function(t,e){this.chooseIndex=-1,this.chooseType=t,this.tipLength=e||0};var f=new t("undefined"),m={ajaxRequest:null,hotKeyArr:[],isShopHost:function(){return!1},showStickySearch:function(){var t=location.pathname,e=$(".mgj_primary"),n=e.length>0?e.offset().top+e.height():10;return"www.mogujie.com"===location.host&&("/"===t||"/more"===t)||t.indexOf("/book/search/")>-1||/webdemo || localhost/.test(location.host)&&/sticky/.test(location.search)?(t.indexOf("/book/search/")>-1&&(e=$(".search_filter_wrap"),n=e.length?e.offset().top:150),this.stickyTargetTop=n,!0):!1},resetFactory:function(t){this.isShopHost()?this.resetShopContent(t):d.isshow()?this.resetListContent(t):this.resetOldContent(t)},resetListContent:function(e){function o(t){i(function(){s()})}function i(n){r.ajaxRequest&&r.ajaxRequest.abort();var o=d.getTenItem();return""==$.trim(e)?(c.push(r.renderLocalContent(o)),void($.isFunction(n)&&n())):void(r.ajaxRequest=$.post(p,{input:e},function(e){if(e&&1001==e.status.code){var o=e.result.tipCount;0==o?c.push(r.renderEmptyContent()):(c.push(r.renderSearchContent(e.result.tips,e.result.nums,e.result.props)),f=new t(r.searchTypeName,o))}$.isFunction(n)&&n()},"json"))}function s(){var t=n.template(u.template)({searchResult:c.join("")});a.html(t),r.showContentBox()}var r=this,c=[];r.hotKeyArr.length?o(r.hotKeyArr):$.post(p,{},function(t){r.hotKeyArr=t.result.tips,o(r.hotKeyArr)},"json")},resetShopContent:function(e){function o(n){s.ajaxRequest&&s.ajaxRequest.abort(),s.ajaxRequest=$.post(p,{input:e},function(e){if(e&&1001==e.status.code){var o=e.result.tipCount;0==o?r.push(s.renderEmptyContent()):(r.push(s.renderSearchContent(e.result.tips,e.result.nums,e.result.props,c)),f=new t(l,o))}$.isFunction(n)&&n()},"json")}function i(){var t=n.template(u.template)({searchResult:r.join("")});a.html(t),s.showContentBox()}var s=this,r=[],c="",l=""!=e?s.searchTypeName:s.hotTypeName;o(function(){i()})},resetOldContent:function(e){function o(n){s.ajaxRequest&&s.ajaxRequest.abort(),s.ajaxRequest=$.post(p,{input:e},function(e){if(e&&1001==e.status.code){var o=e.result.tipCount;0==o?r.push(s.renderEmptyContent()):(r.push(s.renderSearchContent(e.result.tips,e.result.nums,c)),f=new t(l,o))}$.isFunction(n)&&n()},"json")}function i(){var t=n.template(u.template)({searchResult:r.join("")});a.html(t),a.find(".tip_wrap").removeClass("mr300").addClass("mr300_fix"),s.showContentBox()}var s=this,r=[],c=""!=e?"\u641c\u7d22\u7ed3\u679c":"\u70ed\u95e8\u5173\u952e\u8bcd",l=""!=e?s.searchTypeName:s.hotTypeName;o(function(){i()})},searchTypeName:"",renderSearchContent:function(t,e,o,i){for(var s=[],a=0;a<t.length;a++)s.push({title:t[a],props:o[a],num:e[a]});return n.template(u.listItemTemp)({titleName:i||null,items:s})},localTypeName:"local",renderLocalContent:function(t){return n.template(u.localItemTemp)({items:t})},updateLocalContent:function(t,e){var n=t.parent(),o=t.parents(".search_tip");if(n.length&&o.length)if(e.length<d.showLength)n.remove();else{var i=e[d.showLength-1];n.find(".title").attr("title",i).html(i),n.appendTo(o)}},destoryLocalContent:function(t){var e=t.parents(".tip_wrap").find(".search_tip");e.length&&e.empty()},hotTypeName:"default",renderHotContent:function(t){for(var e=[],o=0;o<t.length;o++)e.push({title:t[o]});return n.template(u.hotKeyTpl)({items:e})},renderEmptyContent:function(){return u.emptyTpl},destoryContent:function(){a.empty().hide()},getContentPosition:function(t,e){var n=e.offset(),o=t.data("fixleft"),i=t.data("fixtop");o&&(n.left+=parseInt(o)),i&&(n.top-=parseInt(i));var s=e.width()-34;t.css({left:n.left,top:n.top+e.height()+2,width:s}).addClass("hasposition")},showContentBox:function(){a.show().data("isshow",!0)},changeListTab:function(t){var e=a.find(".search_tip li"),n=e.eq(t);return e.removeClass("checked"),n.addClass("checked"),n.find(".title").text()},changeType:function(t){var e=t.parent(),n=e.attr("data-index"),o=t.text();if(l.val(n),h.find(".selected").text("\u641c"+o),e.siblings("li").removeClass("current"),e.addClass("current"),"shop"==n)r.val()==r.attr("def-v")&&r.val("");else if(""==r.val()){var i=r.attr("def-v");r.val(i)}4==n?"shop.mogujie.com"===u.nowHost?c.attr("action",u.defultHost+"/group/search/"):c.attr("action","/group/search/"):"shop.mogujie.com"===u.nowHost?c.attr("action",u.defultHost+"/search"):c.attr("action","/search/"),h.removeClass("sele_hover")},initStickySearch:function(){var t=$("#nav_search_form"),e=['<div id="J_sticky_container" class="sticky-search-container">','<div class="wrap">','<a rel="nofollow" href="http://www.mogujie.com" class="logo" title="\u8611\u83c7\u8857|\u6211\u7684\u4e70\u624b\u8857">\u8611\u83c7\u8857|\u6211\u7684\u4e70\u624b\u8857</a>','<div class="sticky-search-content"></div>',"</div>","</div>"].join("");$("body").append(e);var n=$(".sticky-search-container");$(window).off("scroll.sticky").on("scroll.sticky",function(){$(document).scrollTop()>m.stickyTargetTop?n.hasClass("lets-rock")||n.find(".sticky-search-content").append(t).end().addClass("lets-rock"):n.hasClass("lets-rock")&&($(".normal-search-content").append($("#nav_search_form")),n.find(".sticky-search-content").empty().end().removeClass("lets-rock"))})}};e.submitBefore=function(t,e){c.data({type:t,index:e})},e.submitAfter=function(){c.removeData("type index"),f.chooseType="undefined",f.chooseIndex=-1};var v=function(){MoGu.util.inputTextHide(r,"ts_high"),"www.mogujie.com"===u.nowHost||h.parents(".store_header").length||c.attr("action",u.defultHost+c.attr("action")),e()};v()}}}.apply(e,o),!(void 0!==i&&(t.exports=i))}])}),"function"==typeof define&&define.amd&&require(["pc/common/header/index"]);