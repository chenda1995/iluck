var trace=function(){"use strict";function extend(){var arguments$1=arguments;var target=arguments[0];var argsLen=arguments.length;for(var i=1;i<argsLen;i++){var source=arguments$1[i];for(var p in source){if(source.hasOwnProperty(p)){target[p]=source[p]}}}return target}function getValue(fn){if(typeof fn!=="function"){return fn}return fn()}var config={customUrl:function customUrl(){},getExtraTime:function getExtraTime(){return 0},blankTime:"__trace__headendt"};function getFormatUrl(url){url=url||location.href;var customUrl=getValue(config.customUrl);if(customUrl){customUrl=customUrl.split("https://").join("").split("http://").join("");return customUrl}if(typeof url==="string"){url=url.split("?")[0].split("#")[0].split("https://").join("").split("http://").join("");if(url.charAt(url.length-1)==="/"){url=url.substr(0,url.length-1)}}return url}var CHROME_IE_STACK_REGEXP=/^\s*at .*(\S+\:\d+|\(native\))/m;var SAFARI_NATIVE_CODE_REGEXP=/^(eval@)?(\[native code\])?$/;function _map(array,fn,thisArg){if(typeof Array.prototype.map==="function"){return array.map(fn,thisArg)}else{var output=new Array(array.length);for(var i=0;i<array.length;i++){output[i]=fn.call(thisArg,array[i])}return output}}function _filter(array,fn,thisArg){if(typeof Array.prototype.filter==="function"){return array.filter(fn,thisArg)}else{var output=[];for(var i=0;i<array.length;i++){if(fn.call(thisArg,array[i])){output.push(array[i])}}return output}}function _indexOf(array,target){if(typeof Array.prototype.indexOf==="function"){return array.indexOf(target)}else{for(var i=0;i<array.length;i++){if(array[i]===target){return i}}return-1}}var ErrorStackParser={parse:function ErrorStackParser$$parse(error){if(error.stack&&error.stack.match(CHROME_IE_STACK_REGEXP)){return this.parseV8OrIE(error)}else if(error.stack){return this.parseFFOrSafari(error)}else{return[]}},extractLocation:function ErrorStackParser$$extractLocation(urlLike){if(urlLike.indexOf(":")===-1){return[urlLike]}var regExp=/(.+?)(?:\:(\d+))?(?:\:(\d+))?$/;var parts=regExp.exec(urlLike.replace(/[\(\)]/g,""));return[parts[1],parts[2]||undefined,parts[3]||undefined]},parseV8OrIE:function ErrorStackParser$$parseV8OrIE(error){var filtered=_filter(error.stack.split("\n"),function(line){return!!line.match(CHROME_IE_STACK_REGEXP)},this);return _map(filtered,function(line){if(line.indexOf("(eval ")>-1){line=line.replace(/eval code/g,"eval").replace(/(\(eval at [^\()]*)|(\)\,.*$)/g,"")}var tokens=line.replace(/^\s+/,"").replace(/\(eval code/g,"(").split(/\s+/).slice(1);var locationParts=this.extractLocation(tokens.pop());var functionName=tokens.join(" ")||undefined;var fileName=_indexOf(["eval","<anonymous>"],locationParts[0])>-1?undefined:locationParts[0];return{functionName:functionName,filename:fileName,row:locationParts[1],column:locationParts[2],line:line}},this)},parseFFOrSafari:function ErrorStackParser$$parseFFOrSafari(error){var filtered=_filter(error.stack.split("\n"),function(line){return!line.match(SAFARI_NATIVE_CODE_REGEXP)},this);return _map(filtered,function(line){if(line.indexOf(" > eval")>-1){line=line.replace(/ line (\d+)(?: > eval line \d+)* > eval\:\d+\:\d+/g,":$1")}if(line.indexOf("@")===-1&&line.indexOf(":")===-1){return{functionName:line}}else{var tokens=line.split("@");var locationParts=this.extractLocation(tokens.pop());var functionName=tokens.join("@")||undefined;return{functionName:functionName,filename:locationParts[0],row:locationParts[1],column:locationParts[2],line:line}}},this)}};var parser={ErrorStackParser:ErrorStackParser,parse:function parse(error){var r=ErrorStackParser.parse(error);if(!r||r.length<=0){return error.message}var info=r[0];var strs=[];if(info.filename){var filename=info.filename;if(filename.lastIndexOf("/")>-1){filename=info.filename.slice(info.filename.lastIndexOf("/"))}strs.push(filename)}if(info.functionName){strs.push("@"+info.functionName)}if(info.row){strs.push(" "+info.row)}return error.message+" - "+strs.join("")},normalize:function normalize(error){var r=ErrorStackParser.parse(error);return r}};function getPlatform(){var ua=navigator.userAgent.toLowerCase();return/iphone|android|ipad/i.test(ua)?"h5":"pc"}function getBrowser(){var nAgt=navigator.userAgent;var unknown="其它";var browser=unknown;var version="";var majorVersion="";var verOffset;var ix;if((verOffset=nAgt.indexOf("Opera"))!==-1){browser="Opera";version=nAgt.substring(verOffset+6);if((verOffset=nAgt.indexOf("Version"))!==-1){version=nAgt.substring(verOffset+8)}}if((verOffset=nAgt.indexOf("OPR"))!==-1){browser="Opera";version=nAgt.substring(verOffset+4)}else if(nAgt.indexOf("MicroMessenger")!==-1){browser="Wechat"}else if(nAgt.indexOf("QQ")!==-1){browser="QQ"}else if((verOffset=nAgt.indexOf("MSIE"))!==-1){browser="IE";version=nAgt.substring(verOffset+5)}else if((verOffset=nAgt.indexOf("Chrome"))!==-1){browser="Chrome";version=nAgt.substring(verOffset+7)}else if((verOffset=nAgt.indexOf("Firefox"))!==-1){browser="Firefox";version=nAgt.substring(verOffset+8)}else if(nAgt.indexOf("Trident/")!==-1){browser="IE";version=nAgt.substring(nAgt.indexOf("rv:")+3)}else if((verOffset=nAgt.indexOf("Safari"))!==-1||nAgt.indexOf("iPhone")!==-1){browser="Safari";version=nAgt.substring(verOffset+7);if((verOffset=nAgt.indexOf("Version"))!==-1){version=nAgt.substring(verOffset+8)}}if((ix=version.indexOf(";"))!==-1){version=version.substring(0,ix)}if((ix=version.indexOf(" "))!==-1){version=version.substring(0,ix)}if((ix=version.indexOf(")"))!==-1){version=version.substring(0,ix)}if(version){majorVersion=parseInt(""+version,10);if(isNaN(majorVersion)){version=""+parseFloat(navigator.appVersion);majorVersion=parseInt(navigator.appVersion,10)}}return majorVersion?browser+"_"+majorVersion:browser+"_unknown"}function getOs(){var unknown="其它";var os=unknown;var nAgt=navigator.userAgent;var clientStrings=[{s:"Windows 10",r:/(Windows 10.0|Windows NT 10.0)/},{s:"Windows 8.1",r:/(Windows 8.1|Windows NT 6.3)/},{s:"Windows 8",r:/(Windows 8|Windows NT 6.2)/},{s:"Windows 7",r:/(Windows 7|Windows NT 6.1)/},{s:"Windows Vista",r:/Windows NT 6.0/},{s:"Windows Server 2003",r:/Windows NT 5.2/},{s:"Windows XP",r:/(Windows NT 5.1|Windows XP)/},{s:"Windows 2000",r:/(Windows NT 5.0|Windows 2000)/},{s:"Windows ME",r:/(Win 9x 4.90|Windows ME)/},{s:"Windows 98",r:/(Windows 98|Win98)/},{s:"Windows 95",r:/(Windows 95|Win95|Windows_95)/},{s:"Windows NT 4.0",r:/(Windows NT 4.0|WinNT4.0|WinNT|Windows NT)/},{s:"Windows CE",r:/Windows CE/},{s:"Windows 3.11",r:/Win16/},{s:"Android",r:/Android/},{s:"Open BSD",r:/OpenBSD/},{s:"Sun OS",r:/SunOS/},{s:"Linux",r:/(Linux|X11)/},{s:"iOS",r:/(iPhone|iPad|iPod)/},{s:"Mac OS X",r:/Mac OS X/},{s:"Mac OS",r:/(MacPPC|MacIntel|Mac_PowerPC|Macintosh)/},{s:"QNX",r:/QNX/},{s:"UNIX",r:/UNIX/},{s:"BeOS",r:/BeOS/},{s:"OS/2",r:/OS\/2/},{s:"Search Bot",r:/(nuhk|Googlebot|Yammybot|Openbot|Slurp|MSNBot|Ask Jeeves\/Teoma|ia_archiver)/}];for(var id in clientStrings){var cs=clientStrings[id];if(cs.r.test(nAgt)){os=cs.s;break}}var osVersion=unknown;if(/Windows/.test(os)){osVersion=/Windows (.*)/.exec(os)[1];os="Windows"}switch(os){case"Mac OS X":osVersion="";break;case"Android":var matched=/Android( |\/)([\.\_\d]+)/.exec(nAgt);if(matched&&matched.length>0){var arr=(matched[2]||"").split(".").slice(0,2);osVersion=arr.join(".")}break;case"iOS":osVersion=/OS (\d+)_(\d+)_?(\d+)?/.exec(nAgt);if(osVersion&&osVersion.length>0){osVersion=osVersion[1]+"."+osVersion[2]}break}return os===unknown?os:os+osVersion}function getScreen(){var _screen=window.screen;var width;var height;var screenSize="";if(_screen&&_screen.width){width=_screen.width?_screen.width:"";height=_screen.height?_screen.height:"";screenSize+=""+width+"x"+height}return screenSize}function getDevicePixelRatio(){var dpr=(window.devicePixelRatio?window.devicePixelRatio:1)-0;return dpr.toFixed(1)}function getDeviceInfo(){return{platform:getPlatform(),screen:getScreen(),os:getOs(),browser:getBrowser(),devicePixelRatio:getDevicePixelRatio()}}var Promise=window.Promise;function getPerformanceInfo(){var timing=window.performance&&window.performance.timing;if(!timing){return Promise.resolve({})}var blankTime=window[config.blankTime];if(!blankTime){blankTime=timing.domContentLoadedEventStart}var res={dns:timing.domainLookupEnd-timing.domainLookupStart,tcp:timing.connectEnd-timing.connectStart,request:timing.responseStart-timing.requestStart,response:timing.responseEnd-timing.responseStart,domContentLoad:timing.domContentLoadedEventEnd-timing.navigationStart,blankTime:blankTime-timing.navigationStart,readyTime:timing.domInteractive-timing.navigationStart,onloadTime:timing.loadEventEnd-timing.navigationStart,extraTime:getValue(config.getExtraTime)||0};return Promise.resolve(res)}function _log(){var logger=window.logger;if(!logger){return}var info=getDeviceInfo();getPerformanceInfo().then(function(performance){logger.log&&logger.log("016000001",extend({formatUrl:getFormatUrl()},info,performance))})}var queue=[];function isNewError(msg,file,line,col){var flag=true;for(var i=0;i<queue.length;i++){var item=queue[i]||{};if(item.msg===msg&&item.file===file&&item.line===line&&item.col===col){flag=false;break}}if(flag){queue.push({msg:msg,file:file,line:line,col:col})}return flag}function onErrorHandler(msg,file,line,col,err){if(!isNewError(msg,file,line,col)){return}var stack="";if(err){if(err.hasReported){return}stack=err.stack||""}queue.push({msg:msg,file:file,line:line,col:col});var logger=window.logger;if(!logger||!logger.log){return}if(typeof stack!=="string"){stack=""+stack}var data={type:0,msg:msg,stack:stack,ua:navigator.userAgent,formatUrl:getFormatUrl()};try{JSON.stringify(data);logger.log("016000011",data)}catch(_){}}var regParsePattern=/^\s*('?undefined'?|object|null) is not (a function|an object)\s*$/i;function shouldParse(msg){if(!msg){return false}if(regParsePattern.test(msg)){return true}if(msg.toLowerCase()==="cannot convert undefined or null to object"){return true}return false}function getErrorInfo(error,useParser){if(!error){return null}var data={};if(typeof error==="object"){data.msg=error.message||"";data.stack=error.stack||"";data.stack=data.stack;if(typeof data.stack!=="string"){data.stack=""+data.stack}}else{data.msg=error}data.ua=navigator.userAgent;data.type=1;if(shouldParse(data.msg)&&typeof error==="object"&&error.stack){try{data.msg=parser.parse(error)}catch(err){}}if(!isNewError(data.msg,data.stack)){return null}return data}var Logger={init:function init(){var interval=setInterval(function(){var timing=window.performance&&window.performance.timing;if(timing&&timing.loadEventEnd===0){return}clearInterval(interval);setTimeout(function(){_log()},10)},300);window.onerror=onErrorHandler},sendMsg:function sendMsg(error,extra,useParser){if(extra===void 0)extra=null;if(useParser===void 0)useParser=false;var data=getErrorInfo(error,useParser);var logger=window.logger;if(!data||!logger||!logger.log){return}var extraJSON="";if(extra){try{extraJSON=JSON.stringify(extra);if(extraJSON.length>1024){throw new Error("extra contains too much information")}}catch(e){extraJSON="";console&&console.warn&&console.warn(e)}}extend(data,{formatUrl:getFormatUrl(),extra:extraJSON});try{JSON.stringify(data);logger.log("016000011",data)}catch(err){}}};function isIE(){var myNav=navigator.userAgent.toLowerCase();return myNav.indexOf("msie")!==-1?parseInt(myNav.split("msie")[1],10):false}function _report(err){if(typeof err==="string"){err=new Error(err)}if(err.hasReported){return}err.hasReported=true;Logger.sendMsg(err,null,true)}function _inject(fn){if(typeof fn.apply!=="function"){return fn}return function(){try{return fn.apply(this,arguments)}catch(err){_report(err);console&&console.warn&&console.warn(err);throw err}}}function _transform(fn){if(!fn||typeof fn.apply!=="function"){return fn}return function(){var arguments$1=arguments;var args=[];var arg;for(var i=0,l=arguments.length;i<l;i++){arg=arguments$1[i];if(typeof arg==="function"){arg=_inject(arguments$1[i])}args.push(arg)}return fn.apply(this,args)}}function _mix(target,src){for(var key in src){target[key]=src[key]}}function injectjQuery(){var $=window.$;if(!$||$!==window.jQuery&&$!==window.Zepto){return}var _ready=$.fn.ready;$.fn.ready=_transform(_ready);var _ajax=$.ajax;if(typeof _ajax==="function"&&typeof _ajax.apply==="function"){$.ajax=function(url,options){var target=null;if(typeof options==="undefined"&&typeof url==="object"){target=url}else if(typeof options==="object"){target=options}if(target){if(typeof target.success==="function"){target.success=_inject(target.success)}if(typeof target.complete==="function"){target.complete=_inject(target.complete)}}return _ajax.apply($,arguments)}}}function injectRequireJS(){var _require=window.require;var _define=window.define;if(_define&&_define.amd&&_require){window.require=_transform(_require);_mix(window.require,_require);window.define=_transform(_define);_mix(window.define,_define)}}function injectSystem(){var _setTimeout=window.setTimeout;window.setTimeout=function(fn,ms){if(typeof fn==="function"){fn=_inject(fn)}switch(arguments.length){case 0:return _setTimeout();case 1:return _setTimeout(fn);default:return _setTimeout(fn,ms)}};var _setInterval=window.setInterval;window.setInterval=_transform(_setInterval);var _requestAnimationFrame=window.requestAnimationFrame;if(typeof _requestAnimationFrame==="function"){window.requestAnimationFrame=_transform(_requestAnimationFrame)}if(window.EventTarget&&window.EventTarget.prototype.addEventListener){var addEventListener=window.EventTarget.prototype.addEventListener;window.EventTarget.prototype.addEventListener=function(event,callback,bubble){if(callback&&typeof callback.handleEvent==="function"){callback.handleEvent=_inject(callback.handleEvent);return addEventListener.call(this,event,callback,bubble)}else{if(!callback.___wrapper){callback.___wrapper=_inject(callback)}return addEventListener.call(this,event,callback.___wrapper,bubble)}};var removeEventListener=window.EventTarget.prototype.removeEventListener;window.EventTarget.prototype.removeEventListener=function(event,callback,bubble){if(!callback){return removeEventListener.call(this,event,callback,bubble)}else{return removeEventListener.call(this,event,callback.___wrapper||callback,bubble)}}}}var Inject={init:function init(){if(isIE()&&isIE()<9){return}injectjQuery();injectRequireJS();injectSystem()}};var exit=false;if(window._trace){console&&console.warn&&console.warn("WARNING: you already import trace");exit=true}try{if(localStorage.__disable__trace__){console.warn("trace is disabled");exit=true}}catch(err){}if(!/^https?/.test(location.protocol)){console.warn("trace will work only under http or https protocol page");exit=true}if(!/(meilishuo|mogujie|xiaodian|uniny|meili-inc)\.com/.test(location.host)){console.warn("trace will work only under *.(meilishuo|mogujie|xiaodian|uniny|meili-inc).com");exit=true}var M=window.M;if(!M){console.warn("M is required before using trace");exit=true}else if(typeof M.isDev==="function"&&M.isDev()){console.warn("trace will work only under production mode");exit=true}if(typeof window.console==="undefined"){window.console={log:function(){},warn:function(){}}}if(!exit){Logger.init();Inject.init()}window._trace={send:function send(){},sendImmediately:function sendImmediately(){},version:"1.2.3",config:config,sendMsg:Logger.sendMsg};var index={};return index}();!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define("pc/common/im/index",[],e):"object"==typeof exports?exports["pc/common/im/index"]=e():t["pc/common/im/index"]=e()}(this,function(){return function(t){function e(o){if(n[o])return n[o].exports;var i=n[o]={exports:{},id:o,loaded:!1};return t[o].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var n={};return e.m=t,e.c=n,e.p="",e(0)}([function(t,e,n){"use strict";var o=n(1),i={},a=function(t,e){return $.ajax({url:"//webim.mogujie.com/jsonp/getshopowner/1",data:{shopId:t},type:"GET",dataType:"jsonp",jsonp:"callback",success:e})},r=function(t,e,n,i){o(t,e,n,i);var a=window.$?window.$("#J-imContainer"):document.getElementById("J-imContainer");a.show(),a.contents().focus()},d=function(t,e,n,o,d){var c=/com\/detail\/(1[a-z0-9]+)/,u=decodeURIComponent(location.href).match(c);return u&&u[1]&&(n=u[1]),!t&&e?i[e]?(t=i[e],void r(t,n,o,d)):void a(e,function(o){o.success&&o.data&&(t=o.data.userId,i[e]=t,r(t,n))}):void r(t,n,o,d)},c=function(t,e,n,o,i){var a=window.M||{},r=window.MoGu||{},c=window.MOGU||null;if(a.getUserInfo)a.getUserInfo().then(function(o){d(t,e,n)})["catch"](function(){location.href="https://portal.mogujie.com/user/login?redirect_url="+encodeURIComponent(location.href)});else if(!r.data||!r.data.userData||!r.data.userData.uid)return c&&c.user_handsome_login_init?(c.user_handsome_login_init(),void c.user_handsome_login(!1,{callback:function(){location.reload()}})):void(location.href="http://portal.mogujie.com/user/login?redirect_url="+encodeURIComponent(location.href));d(t,e,n,o,i)};$(document).ready(function(){$(".mogutalk_widget_btn").each(function(){var t=$(this).data("style")||"default";t&&$(this).addClass("mogutalk_"+t)})}),$(document).on("click",".mogutalk_widget_btn, .mogutalk_btn",function(t){t.preventDefault();var e=t.currentTarget,n=$(e).data("uid")||"",o=$(e).data("bid")||$(e).data("shopid")||"",i=$(e).data("tid")||$(e).data("gid")||"",a=$(e).data("frompage")||"",r=$(e).data("allocatetype")||"";o&&(o=o.replace(/#\d*$/,"")),c(n,o,i,a,r)}),window._openIm=c,t.exports=c},function(t,e,n){"use strict";n(2);var o=null,i={getPos:function(){var t=void 0;return o?o:window.localStorage&&(t=window.localStorage.getItem("IM_POSITION"))?JSON.parse(t):{x:$(window).width()-590,y:$(window).height()-440}},setPos:function(t,e){return o={x:t,y:e},window.localStorage&&window.localStorage.setItem("IM_POSITION",JSON.stringify(o)),!0}};t.exports=function(t,e,n,o){var a="http://webim.mogujie.com/pc";if(!$("#J-imContainer").length){var r="left:"+i.getPos().x+"px; top:"+i.getPos().y+"px",d='<div id="J-imContainer" class="im-frame-container" style="'+r+'">\n        <div id="J-closeImFrameBtn" class="im-frame-btn"></div>\n        <div id="J-dragImHandle" class="im-frame-drag"></div>\n        <iframe id="J-openImFrame" class="im-frame-box" frameborder="no" allowtransparency="true">\n        </iframe>\n      </div>';$("body").append(d),$("#J-closeImFrameBtn").on("click",function(){$("#J-imContainer").hide()}),$("#J-imContainer").drag({midX:40,midY:40,handler:"#J-dragImHandle",resize:function(t){i.setPos(t.x,t.y)},dragEnd:function(t){i.setPos(t.x,t.y)}})}var c=$.param({userId:t,goodsId:e,fromPage:n,allocatetype:o});$("#J-openImFrame").attr("src",a+"#"+c)}},function(t,e){"use strict";var n=!!("ontouchstart"in document.documentElement),o={start:"touchstart",move:"touchmove",end:"touchend"},i={start:"mousedown",move:"mousemove",end:"mouseup"},a=n?o:i;$.fn.drag=function(t){function e(){return h?(x.off(a.start,h),this):this}function o(){u=v.maxX>0?v.maxX:$(window).width(),s=v.maxY>0?v.maxY:$(window).height(),u=u-i("width")-v.midX,s=s-i("height")-v.midY,m=v.midX,l=v.midY}function i(t,e){return e?void p.css(t,e):parseFloat(p.css(t))}function r(){g.x=i("left"),g.y=i("top")}function d(t,e){u&&(m>t?t=m:t>=m&&t>u&&(t=u)),s&&(l>e?e=l:e>=l&&e>s&&(e=s)),"x"===v.axis?i("left",t+"px"):"y"===v.axis?i("top",e+"px"):(i("left",t+"px"),i("top",e+"px")),r()}function c(){function t(t){function e(e){var o,i,a,c;n?1===t.touches.length&&(o=e.touches[0].clientX-t.touches[0].clientX,i=e.touches[0].clientY-t.touches[0].clientY):(o=e.clientX-t.clientX,i=e.clientY-t.clientY),a=u+o,c=s+i,d(a,c),r(e)}function o(){"function"==typeof v.dragEnd&&v.dragEnd.call(this,g),c()}function r(t){t.preventDefault?(t.preventDefault(),t.stopPropagation()):(t.returnValue=!1,t.cancelBubble=!0)}function c(){$(document).off(a.move,e),$(document).off(a.end,o),$(document).off("selectstart",r),x.off("dragstart",r)}var u=i("left")||0,s=i("top")||0;document.body.focus(),$(document).on("selectstart",r),x.on("dragstart",r),$(document).on(a.move,e),$(document).on(a.end,o)}e(),o(),"function"==typeof v.dragStart&&v.dragStart.call(this,g),x.on(a.start,t)}var u,s,m,l,f,p=$(this),h=null,g={},w={midX:0,midY:0,axis:"both",handler:null},v=$.extend({},w,t),x=v.handler;"string"==typeof x?x=p.find(x):x||(x=p),$(window).resize(function(){var t=this;f&&window.clearTimeout(f),f=setTimeout(function(){o(),d(g.x,g.y),"function"==typeof v.resize&&v.resize.call(t,g)},300)}),c()}}])}),"function"==typeof define&&define.amd&&require(["pc/common/im/index"]);function Target(e,t,n){var s="";if(arguments.length<2?s="target error - target and name are both required":"object"!=typeof e?s="target error - target itself must be window object":"string"!=typeof t&&(s="target error - target name must be string type"),s)throw new Error(s);this.target=e,this.name=t,this.prefix=n}function Messenger(e,t){this.targets={},this.name=e,this.listenFunc=[],this.prefix=t||prefix,this.initListen()}var prefix="[PROJECT_NAME]",supportPostMessage="postMessage"in window;supportPostMessage?Target.prototype.send=function(e){this.target.postMessage(this.prefix+"|"+this.name+"__Messenger__"+e,"*")}:Target.prototype.send=function(e){var t=window.navigator[this.prefix+this.name];if("function"!=typeof t)throw new Error("target callback function is not defined");t(this.prefix+e,window)},Messenger.prototype.addTarget=function(e,t){var n=new Target(e,t,this.prefix);this.targets[t]=n},Messenger.prototype.initListen=function(){var e=this,t=function(t){if("object"==typeof t&&(t=t.data),!("string"!=typeof t||t.indexOf("Messenger")<0))for(var n=t.split("__Messenger__"),t=n[1],s=n[0].split("|"),r=s[0],i=s[1],a=0;a<e.listenFunc.length;a++)r+i===e.prefix+e.name&&e.listenFunc[a](t)};supportPostMessage?"addEventListener"in document?window.addEventListener("message",t,!1):"attachEvent"in document&&window.attachEvent("onmessage",t):window.navigator[this.prefix+this.name]=t},Messenger.prototype.listen=function(e){for(var t=0,n=this.listenFunc.length,s=!1;n>t;t++)if(this.listenFunc[t]==e){s=!0;break}s||this.listenFunc.push(e)},Messenger.prototype.clear=function(){this.listenFunc=[]},Messenger.prototype.send=function(e){var t,n=this.targets;for(t in n)n.hasOwnProperty(t)&&n[t].send(e)};var messenger;window.parent!==window.self?(messenger=new Messenger("im","ImFrame"),messenger.addTarget(window.parent,"Parent")):messenger=new Messenger("Parent","ImFrame");var newcinfo=function(e,t,n){if(n){var s=this;return this.url=window.location.protocol+"//webim.mogujie.com/jsonp/cinfo/1",this.IDLE=!0,this.trigger=function(e,s){n(t).trigger(e,s)},this.getData=function(e){if(s.IDLE){s.IDLE=!1;var t=0;n.ajax({url:s.url,data:e||{},dataType:"jsonp",timeout:9e3,success:function(e){e&&e.success&&e.data>0&&(t=e.data)},complete:function(){s.IDLE=!0,s.trigger("hasUnread",t)}})}},messenger.listen(function(e){try{switch(e=JSON.parse(e),e.code){case 1007:break;case 1008:s.getData()}}catch(t){}}),{refresh:function(e){var t=window.M||{},n=window.MoGu||{};t.getUserInfo?t.getUserInfo().then(function(){s.getData(e)})["catch"](function(){}):n.data&&n.data.userData&&n.data.userData.uid&&s.getData(e)}}}}(window,document,jQuery);/******/ (function(modules) { // webpackBootstrap
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
/******/ ]);!function(o){function t(e){if(n[e])return n[e].exports;var i=n[e]={exports:{},id:e,loaded:!1};return o[e].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var n={};return t.m=o,t.c=n,t.p="",t(0)}([function(o,t,n){n(1),n(3),n(4);var e=n(6),i=window.M||{},a=1260,r=$(".J_sidebar"),c={$elem:r,init:function(){var o=this;this.renderSidebar().then(function(){o.$goTop=r.find(".mgj-back2top"),o.$sidebarCart=r.find(".mgj-my-cart"),o.$goTop.length&&(o.offsetEl=$(".wrap").length?$(".wrap").eq(0):$("#body_wrap").length?$("#body_wrap"):$("body"),o.offsetEl.length&&(o.win=$(window),o.addEvent()))})},addEvent:function(){var o=this;o.setSidebarPos(),this.win.on("resize",function(){o.setSidebarPos()}),this.$sidebarCart.off().on("mouseenter",function(){o.win.width()>a||o.showSidebar()}),this.$elem.off().on("mouseleave",function(){o.win.width()>a||o.hideSidebar()}),this.win.on("scroll",function(){$(this).scrollTop()?o.$goTop.addClass("show"):o.$goTop.removeClass("show")}),this.$goTop.on("click",function(){return o.win.scrollTop(0),!1})},setSidebarPos:function(){var o=this.win.width();a>o?this.hideSidebar():this.showSidebar()},showSidebar:function(){this.$sidebarCart.stop().animate({left:"0"}),this.$goTop.stop().animate({left:"0"}),this.$elem.removeClass("mini").stop().animate({right:"0"})},hideSidebar:function(){this.$sidebarCart.stop().animate({left:"-30px"}),this.$goTop.stop().animate({left:"-30px"}),this.$elem.addClass("mini").stop().animate({right:"-30px"})},renderSidebar:function(){var o=this;return i&&i.getUserInfo?i.getUserInfo(!0,"//portal.mogujie.com/api/profile/baseinfo").then(function(t){o.$elem.html(e(t));var n=o.$elem.find(".mgj-my-cart");if(n.length){var a=n.find(".num");i.pc.common.getCartListNum("//cart.mogujie.com/jsonp/costaCartItemCount/1?marketType=market_mogujie").then(function(o){o&&o.data&&o.data.count>0?a.html(o.data.count>99?"99+":o.data.count).show():a.hide()})["catch"](function(){a.hide()});var r=o.$elem.find(".mgj-my-coupon");if(r.length){var c=r.find(".num");i.pc.common.getCouponNum("//promotion.mogujie.com/jsonp/getUnUsedCouponNumber/1?domain=8").then(function(o){if(o&&o.data&&o.data.number>0){var t=o.data.number,n=parseInt(t,10);n?c.html(n>99?"99+":n).show():c.hide()}else c.hide()})["catch"](function(){c.hide()})}}})["catch"](function(){o.$elem.html(e({}))}):Promise.resolve()}};o.exports=c.init()},function(o,t,n){function e(o){return c=new Promise(function(t){var n=m.http.jsonp,e=o;n?n(e,{jsonpCallback:"jsonp_cartListNum_"+(new Date).getTime(),tokenDomain:d}).then(function(o){o&&o.success?(o.data&&o.data.count>0&&window.localStorage&&window.localStorage.setItem("___cached_cart_list_num",o.data.count),s=o):s={},r=!1,t(s)})["catch"](function(){r=!1,s={},t(s)}):(r=!1,s={},t(s))})}function i(){var o=0,t={};if(window.localStorage){var n=window.localStorage.getItem("___cached_cart_list_num");n&&n>0&&(o=n)}return t={result:{count:o},status:{message:"",isLogin:!0,code:1001,msg:""}}}function a(o,t){return m.pc.common.checkDegradation().then(function(n){return n.degradation?Promise.resolve(i()):r?c:!s||t?(r=!0,e(o)):(s._sync=!1,Promise.resolve(s))})}n(2);var r=!1,c=void 0,s=void 0,d="cart.mogujie.com",m=window.M||{};m.pc=m.pc||{},m.pc.common=m.pc.common||{},m.pc.common.getCartListNum=m.pc.common.getCartListNum||a,o.exports=a},function(o,t){function n(){return a=new Promise(function(o){var t=location.protocol||"http:",n=s.http.jsonp,e=t+"//mce.mogucdn.com/jsonp/multiget/3";n?n(e,{data:{pids:c},jsonpCallback:"jsonp"+c}).then(function(t){r="SUCCESS"===t.returnCode&&t.data[c]&&t.data[c].list&&t.data[c].list.length&&"true"==t.data[c].list[0].degradation?{degradation:!0}:{degradation:!1},i=!1,o(r)})["catch"](function(){i=!1,r={degradation:!0},o(r)}):(i=!1,r={degradation:!0},o(r))})}function e(o){return i?a:!r||o?(i=!0,n()):(r._sync=!1,Promise.resolve(r))}var i=!1,a=void 0,r=void 0,c=23784,s=window.M||{};s.pc=s.pc||{},s.pc.common=s.pc.common||{},s.pc.common.checkDegradation=s.pc.common.checkDegradation||e,o.exports=e},function(o,t,n){function e(o){return c=new Promise(function(t){var n=d.http.jsonp,e=o;n?n(e,{jsonpCallback:"jsonp_couponNum_"+(new Date).getTime()}).then(function(o){o&&o.success&&"SUCCESS"==o.returnCode?(o.data&&o.data.number>0&&window.localStorage&&window.localStorage.setItem("___cached_coupon_num",o.data.number),s=o):s={},r=!1,t(s)})["catch"](function(){r=!1,s={},t(s)}):(r=!1,s={},t(s))})}function i(){var o=0,t={};if(window.localStorage){var n=window.localStorage.getItem("___cached_coupon_num");n&&n>0&&(o=n)}return t={data:{number:o},returnCode:"SUCCESS",success:!0}}function a(o,t){return d.pc.common.checkDegradation().then(function(n){return n.degradation?Promise.resolve(i()):r?c:!s||t?(r=!0,e(o)):(s._sync=!1,Promise.resolve(s))})}n(2);var r=!1,c=void 0,s=void 0,d=window.M||{};d.pc=d.pc||{},d.pc.common=d.pc.common||{},d.pc.common.getCouponNum=d.pc.common.getCouponNum||a,o.exports=a},function(o,t){},,function(o,t){o.exports=function(o){var t='<!--\u7a7a\u7684\u53f3\u4fa7\u8fb9\u680f--><div id="mgj_rightbar_top_blank" class="mgj_rightbar_960"></div><!--\u65b9\u4fbf\u5b9amargin\u7684\u7a7adediv--><div id="mgj_rightbar_blank_div"></div><!--\u7528\u6237\u5934\u50cf-->';return o.avatar&&(t+='<div class="sidebar-item mgj-my-avatar"> <a target="_blank" href="//pc.mogujie.com/member/member.html" rel="nofollow"> <div class="img"> <img width="20" height="20" src="'+o.avatar+'_48x48.jpg" alt=""> </div> </a></div>'),t+='<!--\u8d2d\u7269\u8f66--><div class="sidebar-item mgj-my-cart"> <a target="_blank" href="//cart.mogujie.com/cart/mycart" rel="nofollow"> <i class="s-icon"></i> <div class="s-txt">\u8d2d\u7269\u8f66</div> <div class="num"></div> </a></div><!--\u4f18\u60e0\u5238--><div class="sidebar-item mgj-my-coupon"> <a target="_blank" rel="nofollow" href="//promotion.mogujie.com/trade/promotion/user/shopcoupon"> <i class="s-icon"></i> <div class="s-txt">\u4f18\u60e0\u5238</div> <div class="num"></div> </a></div><!--\u94b1\u5305--><div class="sidebar-item mgj-my-wallet"> <a target="_blank" rel="nofollow" href="https://payuserp.mogujie.com/wallet/home"> <i class="s-icon"></i> <div class="s-txt">\u94b1\u5305</div> </a></div><!--\u8db3\u8ff9--><div class="sidebar-item mgj-my-browserlog"> <a target="_blank" rel="nofollow" href="//track.mogujie.com"> <i class="s-icon"></i> <div class="s-txt">\u8db3\u8ff9</div> </a></div><div class="sideBottom"> <!--\u56de\u5230\u9876\u90e8--> <div class="sidebar-item mgj-back2top"><a rel="nofollow" href="javascript:;"><i class="s-icon"></i></a></div></div>'}}]);!function(t){function e(t,e){this.init(t,e)}function a(){function e(e){return t.trim(e).replace(/(<|>|'|"|window|alert|eval|$|jQuery)/gi,"")}h.on("keyup keydown",function(o){var n=t(this),i=t("#select_type");if(!i.length||"bao"===i.val()||"5"===i.val())switch(o.keyCode){case 40:if("keyup"==o.type||!l.data("isshow"))break;g.chooseIndex=g.chooseIndex+1>g.tipLength-1?0:++g.chooseIndex;var s=v.changeListTab(g.chooseIndex);h.val(s);break;case 38:if("keyup"==o.type||!l.data("isshow"))break;g.chooseIndex=g.chooseIndex-1<0?g.tipLength-1:--g.chooseIndex;var s=v.changeListTab(g.chooseIndex);h.val(s);break;case 13:if("keyup"==o.type)break;o.preventDefault(),a.submitBefore(g.chooseType,g.chooseIndex),d.submit();break;case 37:break;case 39:break;default:clearTimeout(r),r=setTimeout(function(){var t=e(n.val());v.resetFactory(t)},500)}}).on("focus",function(){var a=t(this),o=t("#select_type");if(r&&clearTimeout(r),!o.length||"bao"===o.val()||"5"===o.val()){var n=e(a.val());clearTimeout(r),r=setTimeout(function(){v.resetFactory(n)},300)}}).on("blur",function(){t("body").bind("click",function(e){t(e.target).parents(".seatch_type_msearch").length||(l.empty().data("isshow",!0).hide(),t("body").unbind("click"))})}),l.on("mouseenter",".search_tip li",function(e){var a=t(this),o=a.index();g.chooseIndex=o,v.changeListTab(o)}).on("click",".search_tip li",function(e){var o=t(this).find(".title").text();t(e.target).hasClass("prop")&&(o+=" "+t(e.target).text()),a.submitBefore(g.chooseType,g.chooseIndex),h.val(o),d.submit()}),l.on("click",".hot_list li",function(){var e=t(this);return a.submitBefore(v.hotTypeName,e.index()),h.val(e.find("span").html()),d.submit(),!1}),l.on("click",".local_del",function(e){var a=t(this),o=a.parent();m.del(o.find(".title").attr("title"));var n=m.getTenItem();return v.updateLocalContent(a,n),g.chooseIndex=-1,g.tipLength=n.length,!1}).on("click",".local_title .del_all",function(){var e=t(this);return m.set(),v.destoryLocalContent(e),e.remove(),g.chooseIndex=-1,g.tipLength=0,!1}),o.on("click",".selectbox a",function(e){e.preventDefault(),v.changeType(t(this))}).on("mouseenter",".selectbox",function(){l.hide(),t(this).addClass("sele_hover")}).on("mouseleave",".selectbox",function(){t(this).removeClass("sele_hover")}),d.submit(function(){var o=t(this),n=e(h.val()),i=h.attr("def-v");if(""==n||n==i){if(""==n&&"shop"==t("#select_type").val())return!1;var s=h.data("def");h.val(s||"");var r='<input type="hidden" name="from" value="searchplacehold" id="TJ">';t("#top_nav_form").append(r),setTimeout(function(){t("#TJ").remove()},1e3)}else n==t.trim(h.val())&&"bao"==t("#select_type").val()&&m.addOne(n);if(d.find(".emptyvalue").remove(),o.data("index")>-1&&null!==o.data("type")){var c='<input type="hidden" class="emptyvalue" name="from" value="'+o.data("type")+"querytip"+o.data("index")+'">';d.append(c)}return v.destoryContent(),a.submitAfter(),!1}),v.showStickySearch()&&v.initStickySearch()}var o=t("#nav_search_form")||[];if(o.length>0&&!(window.M&&M.pc&&M.pc.__SEARCHBAR_JS_HAS_LOAD__)){M.pc.__SEARCHBAR_JS_HAS_LOAD__=!0;var n="//list.mogujie.com/module/mget?code=sketch,hotWord",i="//list.mogujie.com/module/mget?code=tips";t&&t.fn&&!t.fn.serializeObject&&(t.fn.serializeObject=function(){var e={},a=this.serializeArray();return t.each(a,function(){void 0!==e[this.name]?(e[this.name].push||(e[this.name]=[e[this.name]]),e[this.name].push(this.value||"")):e[this.name]=this.value||""}),e});var s=function(){var t=this;t.init()};s.prototype={constructor:s,init:function(){var t=this;t.requestLogo(),t.fixIe()},requestLogo:function(){var e=this,a="//mce.mogucdn.com/jsonp/multiget/3?pids=14360",o="https://s10.mogucdn.com/p1/170301/idid_ifrwimrvmqygkzrvmuzdambqhayde_440x180.png",n=t(".header_mid .wrap .mid_fr"),i=t(".header_mid .wrap .logo");M.http.jsonp({url:a,timeout:2e4,jsonpCallback:"__GET_SEARCHBAR_IMG__"}).then(function(a){if(a&&a.success&&a.data&&a.data[14360]&&a.data[14360].list&&a.data[14360].list[0]){var s=a.data[14360].list[0];if(s.link&&""!=s.link&&(i.attr("href",s.link),t(".sticky-search-container .wrap .logo").attr("href",s.link)),s.logoImg&&""!=s.logoImg){var r=new Image;r.src=s.logoImg,i.css({"background-image":"none"}),i.html('<img src="'+s.logoImg+'" alt="\u8611\u83c7\u8857\uff0c\u6211\u7684\u4e70\u624b\u8857">')}if(s.sLogoImg&&""!=s.sLogoImg&&t(".sticky-search-container .logo-wrap .logo img").attr("src",s.sLogoImg),s.codeImg&&""!=s.codeImg){var c=new Image;c.src=s.codeImg,e.insertImg(n,s.codeImg,s.codeLink)}else e.insertImg(n,o,"");s.codeBg&&""!=s.codeBg&&n.css({"background-image":'url("'+s.codeBg+'")'})}else e.insertImg(n,o,"")})["catch"](function(){e.insertImg(n,o,"")})},insertImg:function(t,e,a){a?t.html('<a href="'+a+'" target="_blank" class="code_wrap"><img src="'+e+'" alt="\u8611\u83c7\u8857\uff0c\u6211\u7684\u4e70\u624b\u8857"></a>'):t.html('<img src="'+e+'" alt="\u8611\u83c7\u8857\uff0c\u6211\u7684\u4e70\u624b\u8857">')},fixIe:function(){var e=M.ua.ie67||M.ua.ie8;e||t(".top_nav_search .top_search_hint").addClass("is-not-ie8-hack")},inputTextHide:function(e,a){e.focus(function(){var e=t(this);t.trim(e.val())==t.trim(e.attr("def-v"))&&e.val(""),a&&e.addClass(a)}),e.blur(function(){var e=t(this);""==t.trim(e.val())&&(e.val(e.attr("def-v")),a&&e.removeClass(a))})},getStore:function(t){if(!window.localStorage)return!1;var e=window.localStorage.getItem(t),a=JSON.parse(e);return a},setStore:function(t,e){if(!window.localStorage)return!1;var a=JSON.stringify(e);window.localStorage.setItem(t,a)}};var r,c=new s,l=t(".top_search_hint"),h=o.find(".ts_txt"),d=t("#top_nav_form"),u=t("#select_type"),p=o.find(".selectbox"),f={nowHost:window.location.host,defultHost:"http://search.mogujie.com",listHost:"http://list.mogujie.com/s",template:function(t){return'<div class="search_tip_box fl">'+t+"</div>"},addUrlParam:function(t,e){var a=/\?/.test(t),o="";for(var n in e)o+="&"+n+"="+e[n];if(!a&&o){var i=o.split("");i.shift(),o=i.join(""),t+="?"}return t+=o},listItemTemp:function(t){var e='<div class="mr300 tip_wrap"> ';e+=t.titleName&&""!=t.titleName?' <h3 class="search_tip_title">'+t.titleName+"</h3> ":" ",e+=' <ul class="search_tip"> ';var a=t.items;if(a)for(var o,n=-1,i=a.length-1;i>n;){o=a[n+=1],e+=" ";var s=o.acm,r=o.query,c=o.color||"#333",l=o.highcolor,h=o.bold,d=o.italic,u=o.link||"http://list.mogujie.com/s";u=f.addUrlParam(u,{q:r,acm:s}),c=c&&"#"===c.slice(0,1)?c:"#"+c,l=l?"#"===l.slice(0,1)?l:"#"+l:"";var p=c?"color: "+c+";":"",m=l?"background-color: "+l+";":"",g=h?"font-weight: bold;":"",v=d?"font-style: italic;":"";if(10>n){e+=' <li> <a href="'+u+'" style="'+p+g+v+m+'" class="title" title="'+o.query+'" >'+o.query+"</a> ";var _=o.tags;if(_)for(var y,w=-1,k=_.length-1;k>w;)y=_[w+=1],e+=" ",y.tag&&""!=y.tag&&(e+=' <a href="http://list.mogujie.com/s?q='+o.query+" "+y.tag+"&acm="+o.acm+'" class="prop" title="'+y.tag+'"><span>'+y.tag+"</sapn></a> "),e+=" ";e+=" </li> "}e+=" "}return e+=" </ul></div>"},localItemTemp:function(t){var e='<div class="mr300 tip_wrap"> <h3 class="search_tip_title local_title clearfix"> ';t.items.length&&(e+=' <span class="del_all">\u5220\u9664</span> '),e+='\u5386\u53f2\u8bb0\u5f55</h3> <ul class="search_tip"> ';var a=t.items;if(a)for(var o,n=-1,i=a.length-1;i>n;){if(o=a[n+=1],e+=" ",10>n){e+=' <li class="local_item"> <a href="javascript:;" class="title" title="'+o+'" >'+o+"</a> ";var s=o.props;if(s)for(var r,c=-1,l=s.length-1;l>c;)r=s[c+=1],e+=' <span class="prop">'+r+"</span> ";e+=' <span class="nums local_del">x</span> </li> '}e+=" "}return e+=" </ul></div>"},hotKeyTpl:function(t){var e='<div class="search_hot_wrap"> <h3 class="search_tip_title hot_title">\u70ed\u95e8\u5173\u952e\u8bcd</h3> <ul class="hot_list clearfix"> ',a=t.items;if(a)for(var o,n=-1,i=a.length-1;i>n;)o=a[n+=1],e+=" ",10>n&&(e+=" <li><span>"+o.title+"</span></li> "),e+=" ";return e+=" </ul></div>"},emptyTpl:function(){return'<div class="mr300 tip_wrap"><p class="tip_none">\u6682\u65e0\u76f8\u5173\u70ed\u95e8\u5173\u952e\u8bcd</p></div>'}},m={keyName:"_search_local_history",keyShowName:"_search_local_history_show",maxLength:20,showLength:10,isshow:function(){return!0},abtest:function(t){c.setStore(this.keyShowName,1)},get:function(){return c.getStore(this.keyName)||[]},getTenItem:function(){var t=this.get();return t.slice(0,this.showLength)},set:function(t){c.setStore(this.keyName,t||[])},addOne:function(e){if(e=t.trim(e),""!=e){var a=this.get(),o=t.inArray(e,a);-1==o?(a.unshift(e),a.length>this.maxLength&&a.pop()):(a.splice(o,1),a.unshift(e)),this.set(a)}},del:function(e){e=t.trim(e);var a=this.get(),o=t.inArray(e,a);o>-1&&(a.splice(o,1),this.set(a))}};GetQueryString=function(t){var e=new RegExp("(^|&)"+t+"=([^&]*)(&|$)","i"),a=window.location.search.substr(1).match(e);return null!=a?decodeURIComponent(a[2]):""},e.prototype.init=function(t,e){this.chooseIndex=-1,this.chooseType=t,this.tipLength=e||0};var g=new e("undefined"),v={ajaxKey:0,hotKeyArr:[],isShopHost:function(){var e=t("#M_searchbar_flag_isshop")||[],a=e.val();return!!(e&&e.length>0&&a&&"shop"===a)},showStickySearch:function(){var e=(location.pathname,t("#body_wrap")),a=e.length>0?e.offset().top:150;return 150>a&&(a=150),"show"==t("#J_searchbar_flag").val()?(this.stickyTargetTop=a,!0):!1},initSearchForm:function(e){var a=d.find(".ts_txt"),o=GetQueryString("q");o&&a.attr("def-v","").val(o),M.http.jsonp({url:n,jsonpCallback:"__GET_HOTWORD_BASEWORD__"}).then(function(n){if(n&&n.success&&"SUCCESS"==n.returnCode&&n.data){var i=n.data.sketch&&n.data.sketch.data||{},s=n.data.hotWord&&n.data.hotWord.data||[],r=i&&i.frontword||"",c=i&&i.query||"",l=i&&i.acm||"",h=l?[l]:[];o||a.attr("def-v",r).val(r),a.attr("data-def",c),a.attr("data-acm",l);var d="";if(t(s).each(function(t,e){var a=e.acm,o=e.query,n=e.frontword,i=e.color||"#666",s=e.highcolor,r=(e.tag,e.bold),c=e.italic,l=e.link||"http://list.mogujie.com/s";l=f.addUrlParam(l,{q:o,from:"hotword",acm:a}),i=i&&"#"===i.slice(0,1)?i:"#"+i,s=s?"#"===s.slice(0,1)?s:"#"+s:"";var u=i?"color: "+i+";":"",p=s?"background-color: "+s+";":"",m=r?"font-weight: bold;":"",g=c?"font-style: italic;":"",v=['<a rel="nofollow" class="ts_hotword" href="',l,'" style="'+u+m+g+p+'">',n,"</a>"].join("");d+=v,a&&h.push(a)}),t(".ts_hotwords").html(d),window.logger&&window.logger.log){var u=window.logger.log;try{u("0x00000000",{acms:h})}catch(p){}}}t.isFunction(e)&&e(n)})["catch"](function(){})},resetFactory:function(t){this.isShopHost()?this.resetShopContent(t):m.isshow()?this.resetListContent(t):this.resetOldContent(t)},searchReaultLogger:function(t){if(t&&t.data&&t.data.tips&&t.data.tips.data){for(var e=t.data.tips.data||{},a=Math.min(e.length,10),o={acm:[],index:[],tags:[],query:[]},n=0;a>n;n++){var i=e[n];o.acm.push(i.acm),o.index.push(n),o.query.push(i.query);for(var s=i.tags||[],r=[],c=0;c<s.length;c++)r.push(s[c].tag);o.tags.push(r)}if(window.logger&&window.logger.log){var l=window.logger.log;try{l("000000120",o)}catch(h){}}}},resetListContent:function(a){function o(t){n(function(){s()})}function n(o){var n=m.getTenItem();return""==t.trim(a)?(c.push(r.renderLocalContent(n)),void(t.isFunction(o)&&o())):void M.http.jsonp({url:i,data:{keyWord:a},jsonpCallback:"__GET_SEARCH_RESULT_1__"}).then(function(a){if(h>=r.ajaxKey&&a&&a.success&&a.data&&a.data.tips&&a.data.tips.data){var n=a.data.tips.data||[],i=n.length,s=n.slice(0,10);0==i?c.push(r.renderEmptyContent()):(c.push(r.renderSearchContent(s)),g=new e(r.searchTypeName,i)),r.searchReaultLogger(a)}t.isFunction(o)&&o()})["catch"](function(){})}function s(){var t=f.template(c.join(""))||"";l.html(t),r.showContentBox()}var r=this,c=[],h=++r.ajaxKey;o(r.hotKeyArr)},resetShopContent:function(a){function o(o){M.http.jsonp({url:i,data:{keyWord:a},jsonpCallback:"__GET_SEARCH_RESULT_2__"}).then(function(a){if(d>=s.ajaxKey&&a&&a.success&&a.data&&a.data.tips&&a.data.tips.data){var n=a.data.tips.data||[],i=n.length,l=n.slice(0,10);0==i?r.push(s.renderEmptyContent()):(r.push(s.renderSearchContent(l,c)),g=new e(h,i)),s.searchReaultLogger(a)}t.isFunction(o)&&o()})["catch"](function(){})}function n(){var t=f.template(r.join(""))||"";l.html(t),s.showContentBox()}var s=this,r=[],c="",h=""!=a?s.searchTypeName:s.hotTypeName,d=++s.ajaxKey;o(function(){n()})},resetOldContent:function(a){function o(o){M.http.jsonp({url:i,data:{keyWord:a},jsonpCallback:"__GET_SEARCH_RESULT_3__"}).then(function(a){if(d>=s.ajaxKey&&a&&a.success&&a.data&&a.data.tips&&a.data.tips.data){var n=a.data.tips.data||[],i=n.length,l=n.slice(0,10);0==i?r.push(s.renderEmptyContent()):(r.push(s.renderSearchContent(l,c)),g=new e(h,i)),s.searchReaultLogger(a)}t.isFunction(o)&&o()})["catch"](function(){})}function n(){var t=f.template(r.join(""))||"";l.html(t),l.find(".tip_wrap").removeClass("mr300").addClass("mr300_fix"),s.showContentBox()}var s=this,r=[],c=""!=a?"\u641c\u7d22\u7ed3\u679c":"\u70ed\u95e8\u5173\u952e\u8bcd",h=""!=a?s.searchTypeName:s.hotTypeName,d=++s.ajaxKey;o(function(){n()})},searchTypeName:"",renderSearchContent:function(t,e){return f.listItemTemp({titleName:e||null,items:t})},localTypeName:"local",renderLocalContent:function(t){return f.localItemTemp({items:t})},updateLocalContent:function(t,e){var a=t.parent(),o=t.parents(".search_tip");if(a.length&&o.length)if(e.length<m.showLength)a.remove();else{var n=e[m.showLength-1];a.find(".title").attr("title",n).html(n),a.appendTo(o)}},destoryLocalContent:function(t){var e=t.parents(".tip_wrap").find(".search_tip");e.length&&e.empty()},hotTypeName:"default",renderHotContent:function(t){for(var e=[],a=0;a<t.length;a++)e.push({title:t[a]});return f.hotKeyTpl({items:e})},renderEmptyContent:function(){return f.emptyTpl()},destoryContent:function(){l.empty().hide()},getContentPosition:function(t,e){var a=e.offset(),o=t.data("fixleft"),n=t.data("fixtop");o&&(a.left+=parseInt(o)),n&&(a.top-=parseInt(n));var i=e.width()-34;t.css({left:a.left,top:a.top+e.height()+2,width:i}).addClass("hasposition")},showContentBox:function(){l.show().data("isshow",!0)},changeListTab:function(t){var e=l.find(".search_tip li"),a=e.eq(t);return e.removeClass("checked"),a.addClass("checked"),a.find(".title").text()},changeType:function(t){var e=t.parent(),a=e.attr("data-index"),o=t.text();if(u.val(a),p.find(".selected").text("\u641c"+o),e.siblings("li").removeClass("current"),e.addClass("current"),"shop"==a)h.val()==h.attr("def-v")&&h.val("");else if(""==h.val()){var n=h.attr("def-v");h.val(n)}4==a?"shop.mogujie.com"===f.nowHost?d.attr("action",f.defultHost+"/group/search/"):d.attr("action","/group/search/"):"shop.mogujie.com"===f.nowHost?d.attr("action",f.listHost):"shop"==a?d.attr("action","http://list.mogujie.com/book/search/shop"):d.attr("action",f.listHost),p.removeClass("sele_hover")},initStickySearch:function(){var e=t("#nav_search_form"),a=['<div id="J_sticky_container" class="sticky-search-container">','<div class="wrap clearfix">','<div class="logo-wrap clearfix">','<a rel="nofollow" href="http://www.mogujie.com" class="logo" title="\u8611\u83c7\u8857|\u6211\u7684\u4e70\u624b\u8857"><img src="https://s10.mogucdn.com/mlcdn/c45406/180109_0afd7gig4fbdcag30dg7j054jicd0_224x82.png" alt="\u8611\u83c7\u8857\uff0c\u6211\u7684\u4e70\u624b\u8857"></a>',"</div>",'<div class="sticky-search-content"></div>',"</div>","</div>"].join("");t("body").append(a);var o=t(".sticky-search-container");t(window).off("scroll.sticky").on("scroll.sticky",function(){t(document).scrollTop()>v.stickyTargetTop?o.hasClass("lets-rock")||o.find(".sticky-search-content").append(e).end().addClass("lets-rock"):o.hasClass("lets-rock")&&(t(".normal-search-content").append(t("#nav_search_form")),o.find(".sticky-search-content").empty().end().removeClass("lets-rock"))})}};a.submitBefore=function(t,e){d.data({type:t,index:e})},a.submitAfter=function(){d.removeData("type index");var e=t.trim(d.find("input[name=t]").val());d.find("input[name=t]").remove(),g.chooseType="undefined",g.chooseIndex=-1;var a=t.map(d.serializeObject(),function(t,e){return[e,encodeURIComponent(t)].join("=")}).join("&"),o="";if("shop"==e)o="http://list.mogujie.com/book/search/shop?"+a;else{var n=h.attr("data-acm")||"",i=h.val()||"",s=h.attr("data-def")||"";o=n&&i&&s&&s==i?"http://list.mogujie.com/s?acm="+n+"&"+a:"http://list.mogujie.com/s?"+a}logger&&logger.generatePtpParams&&(o=logger.generatePtpParams(o)),window.location.href=o};var _=function(){c.inputTextHide(h,"ts_high"),"www.mogujie.com"===f.nowHost||p.parents(".store_header").length||d.attr("action",f.listHost),d.find(".ts_btn").attr("disabled",!1),a()};v.initSearchForm(_)}}(jQuery);!function(t){function o(i){if(e[i])return e[i].exports;var l=e[i]={exports:{},id:i,loaded:!1};return t[i].call(l.exports,l,l.exports,o),l.loaded=!0,l.exports}var e={};return o.m=t,o.c=e,o.p="",o(0)}([function(t,o,e){e(1);var i="32260",l="32261",r="32262",s="32263",n="32159",a="32163",c="32170",_=[i,l,r,s,a,c].join(","),m=[i,l,r,s,a,c].join("_"),g=location.href.split("?")[0],h=["http://www.mogujie.com/","http://www.mogujie.com","http://www.mogujie.com/index","https://www.mogujie.com/","https://www.mogujie.com","https://www.mogujie.com/index"].indexOf(g)>-1;h&&(_=[_,n].join(","),m=[m,n].join("_"),$(".foot").css("background","#f5f5f5"));var f=function(){this.isInit=!1,this._elem=$(".J_siteFooter"),this.init=function(){var t=this;t.checkElementInViewport(t._elem[0]),setTimeout(function(){t.checkElementInViewport(t._elem[0])},500),$(window).scroll(function(){t.checkElementInViewport(t._elem[0])})},this.checkElementInViewport=function(t){var o=this;if(!o.isInit){var e=t.getBoundingClientRect(),i=e.bottom,l=e.top,r=window.innerHeight||document.documentElement.clientHeight;r>=l&&i>0&&(o.getRender(o._elem),o.isInit=!0)}},this.getRender=function(t){var o=this;M.http.jsonp({url:"//mce.mogucdn.com/jsonp/multiget/3",data:{pids:_},jsonpCallback:"jsonp"+m}).then(function(e){if("SUCCESS"==e.returnCode&&e.success){var n=e.data[i].list,_=e.data[l].list,m=e.data[r].list,g=e.data[s].list,h=[],f=e.data[a].list,p=e.data[c].list,d=o.getHelperNewHtml(n,_,m,g),u=o.getOtherlinkHtml(h,e),j=o.getInfoHtml(f),v=o.getCopyrightHtml(p),w=[];w=['<div class="mgj_copyright">',d,u,j,v,"</div>"].join(""),t.html(w)}})["catch"](function(t){console.log(t)})},this.getHelperNewHtml=function(t,o,e,i){var l=[],r=this.getModHtml(t,!1),s=this.getModHtml(o,!1),n=this.getModHtml(e,!1),a=this.getModHtml(i,!0);return l=['<div class="mgj_footer_helper">',r,s,n,a,"</div>"].join("")},this.getModHtml=function(t,o){for(var e=[],i=[],l=[],r=0,s=t.length;s>r;r++){var n=t[r],a=n.link;"true"===n.isHeader?i.push('<h4 class="mgj_footer_helper_title color_666">'+n.title+"</h4>"):"false"===n.isHeader&&(o?l.push('<li class="mgj_footer_helper_item mgj_footer_helper_item_last"><div class="color_999">'+n.title+'</div><img class="mgj_footer_helper_quoer_code" src="'+n.image+'"></li>'):a?l.push('<li class="mgj_footer_helper_item"><a rel="nofollow" target="_blank" class="color_999" href="'+n.link+'">'+n.title+"</a></li>"):l.push('<li class="mgj_footer_helper_item"><div class="color_999" >'+n.title+"</div></li>"))}return i=i.join(""),l=l.join(""),e=['<div class="mgj_footer_helper_mod">','<div class="mgj_footer_helper_mod_container">',i,"<ul>",l,"</ul>","</div>","</div>"].join("")},this.getOtherlinkHtml=function(t,o){var e=[];if(h){t=o.data[n].list;for(var i=[],l=0,r=t.length;r>l;l++){var s=t[l],a=s.link;a?i.push('<a rel="nofollow" target="_blank" class="mgj_footer_a color_666" href="'+a+'">'+s.title+'</a><b class="mgj_footer_b color_666"> | </b>'):i.push('<div class="mgj_footer_a color_666">'+s.title+'</div><b class="mgj_footer_b color_666"> | </b>')}i=i.join(""),e=['<div class="mgj_footer_otherlink">','<p class="mgj_footer_otherlink_container">'+i+"</p>","</div>"].join("")}return e},this.getInfoHtml=function(t){for(var o=[],e=[],i=[],l=0,r=t.length;r>l;l++){var s=t[l],n=s.link;l==r-1?i.push('<p class="mgjhostname color_999">'+s.title+"</p>"):n?e.push('<li class="mgj_footer_mgjinfo_item"><a rel="nofollow" target="_blank" class="color_666" href="'+n+'">'+s.title+"</a></li>"):e.push('<li class="mgj_footer_mgjinfo_item"><div class="color_666" >'+s.title+"</div></li>")}return e=e.join(""),i=i.join(""),o=['<div class="mgj_footer_mgjinfo"><ul>',e,"</ul>"+i+"</div>"].join("")},this.getCopyrightHtml=function(t){for(var o=[],e=[],i=0,l=t.length;l>i;i++){var r=t[i],s=r.link;s?e.push('<span class="mgj_footer_copyright_span color_999">'+r.title+'</span><a rel="nofollow" target="_blank" class="mgj_footer_a color_999" href="'+r.link+'">'+r.subTitle+'</a><b class="mgj_footer_b color_999"> | </b>'):e.push('<span class="mgj_footer_copyright_span color_999">'+r.title+'</span><div class="mgj_footer_a color_999" >'+r.subTitle+'</div><b class="mgj_footer_b color_999"> | </b>')}return e=e.join(""),o=['<div class="mgj_footer_copyright"><p class="mgj_footer_copyright_container">',e,"</p></div>"].join("")}};t.exports=(new f).init()},function(t,o){}]);!function(e){function t(o){if(i[o])return i[o].exports;var r=i[o]={exports:{},id:o,loaded:!1};return e[o].call(r.exports,r,r.exports,t),r.loaded=!0,r.exports}var i={};return t.m=e,t.c=i,t.p="",t(0)}([function(e,t,i){function o(){M&&M.ua.ie67?this.init=function(){$("head").append(["<style>",".mask-ie67 {","position: fixed;","top: 0;","left: 0;","z-index: 998;","background: #000;","filter: alpha(opacity=50);","width: 100%;","height: 100%;","}",".ie67-wrap {","position: absolute;","width: 100%;","height: 469px;","top: 10%;","z-index: 999;","}",".ie67-upgrade {","width: 750px;","height: 469px;","margin: 0 auto;","background: url(http://s17.mogucdn.com/p1/161227/idid_ifqwcmtggyydknzrmqzdambqgyyde_750x469.png);","position: relative;","}",".ie67-upgrade .btn-browser {","display: block;","width: 240px;","height: 50px;","line-height: 50px;","text-align: center;","background-color: #FF5777;","color: #fff;","border-radius: 6px;","float: left;","text-decoration: none;","font-size: 20px;","}",".ie67-upgrade .chrome-browser {","position: absolute;","top: 136px;","left: 125px;","}",".ie67-upgrade .browser-360 {","position: absolute;","top: 136px;","left: 384px;","}","</style>"].join("")),$("body").append(r({})),$("body").height($(window).height()).css({"overflow-y":"hidden"})}:this.init=function(){}}var r=i(1);e.exports=(new o).init()},function(e,t){e.exports=function(e){var t='<div class="mask-ie67"></div><div class="ie67-wrap"> <div class="ie67-upgrade"> <a class="btn-browser chrome-browser" href="https://www.google.cn/intl/zh-CN/chrome/browser/desktop/" target="_blank">\u8c37\u6b4cChrome</a> <a class="btn-browser browser-360" href="http://se.360.cn" target="_blank">360\u5b89\u5168\u6d4f\u89c8\u5668</a> </div></div>';return t}}]);;typeof console !== 'undefined' && typeof console.warn === 'function' && console.warn('[MWP] "mwp.pc.js" is deprecated, use "mwp.all.js" instead.');!function(t){t.MWP=function(){"use strict";function t(t,e){function n(){this.constructor=t}S(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}function e(t,e){void 0===e&&(e=!0);var n=t.split(O),r=e?decodeURIComponent:E;return n.reduce(function(t,e){e=e.replace(T,"%20");var n,o,i=e.indexOf("=");return 0>i?(n=e,o=""):(n=e.slice(0,i),o=e.slice(i+1)),n=r(n),o=r(o),j.call(t,n)?Array.isArray(t[n])?t[n].push(o):t[n]=[t[n],o]:t[n]=o,t},{})}function n(t,e){if(void 0===e&&(e=!0),!t)return"";var n=e?encodeURIComponent:E;return Object.keys(t).map(function(e){var r=t[e];return e=n(e),Array.isArray(r)?r.map(function(t,r){return e+"["+r+"]="+n(t)}).join("&"):e+"="+n(r)}).join("&")}function r(t){return"undefined"!=typeof FormData&&t instanceof FormData}function o(t){var e=document.head||document.getElementsByTagName("head")[0];e.appendChild(t)}function i(t,e,n){function r(){i.parentNode&&i.parentNode.removeChild(i);try{delete window[s]}catch(t){window[s]=void 0}}var i,s=e.jsonpCallback||"httpCb"+h();window[s]=function(t){r(),n(null,t),n=null},t=c(t,Object.assign({},e.data,{callback:s,_:Date.now()})),i=document.createElement("script"),i.src=t,i.type="text/javascript",i.async=!0;var a=function(t){(t&&"error"===t.type||null!==n)&&(r(),n(new Error(M)))};D&&"onreadystatechange"in i?i.onreadystatechange=function(){"complete"===i.readyState&&(i.onreadystatechange=null,o(i),a({type:"load "}));var t=i.readyState;try{i.children}catch(e){}"loaded"===t&&"loading"===i.readyState&&(i.onreadystatechange=null,a({type:"error"}))}:(i.onload=i.onerror=a,o(i))}function s(t,e,o){var i=e.data,s=new XMLHttpRequest;"GET"===e.method&&(t=c(t,i),i=null),s.open(e.method,t),s.withCredentials="omit"!==e.credentials,s.onreadystatechange=function(){if(s.readyState===XMLHttpRequest.DONE)if(s.onreadystatechange=function(){},200===s.status)try{var t;t="json"===e.dataType?""===s.responseText?null:JSON.parse(s.responseText):s.responseText,o(null,t)}catch(n){o(n)}else o(new Error(M))};try{var a=e.headers;r(i)&&delete a["content-type"],Object.keys(a).forEach(function(t){s.setRequestHeader(t,a[t])}),i?r(i)?s.send(i):a["content-type"].indexOf(R.json)>=0?s.send(JSON.stringify(i)):s.send(n(i)):s.send(null)}catch(u){o(u)}}function a(t,e,o){var i=e.data,s={method:e.method,headers:e.headers,credentials:e.credentials};"GET"===e.method?t=c(t,i):i&&(r(i)?(s.body=i,delete s.headers["content-type"]):e.headers["content-type"].indexOf(R.json)>=0?s.body=JSON.stringify(i):s.body=n(i)),u(t)||(s.mode="cors"),k(t,s).then(function(t){switch(e.dataType){case"json":return t.json();case"text":default:return t.text()}}).then(function(t){o(null,t)})["catch"](function(){o(new Error(M))})}function u(t){try{var e=document.createElement("a");return e.href=t,e.href=e.href,e.protocol===x.protocol&&e.hostname===x.hostname&&e.port===x.port}catch(n){return!0}}function c(t,r){if(r){var o=t.split("?"),i=o[0],s=o[1];s&&(r=Object.assign(e(s),r));var a=n(r);a&&(t=i+"?"+a)}return t}function h(){return String(Date.now())+String((90*Math.random()|0)+10)}function p(t,e,n){n=n||{},null===e&&(e="",n.expires=-1);var r="";if(n.expires&&("number"==typeof n.expires||n.expires.toUTCString)){var o;"number"==typeof n.expires?(o=new Date,o.setTime(o.getTime()+864e5*n.expires)):o=n.expires,r="; expires="+o.toUTCString()}var i=n.path?"; path="+n.path:"",s=n.secure?"; secure":"",a="";n.domain?a="; domain="+n.domain:(a=document.domain.toString().split("."),a="; domain=."+a[1]+"."+a[2]),document.cookie=[t,"=",encodeURIComponent(e),r,i,a,s].join("")}function f(t){var e=document.cookie.match(new RegExp("(^| )"+t+"=([^;]*)(;|$)"));return null!==e?decodeURIComponent(e[2]):""}function d(){return++window._mwpJsonpID||(window._mwpJsonpID=1)}function l(t){if(t.ret===H.Success)return t.data;throw Object.assign(Object.create(new Error(t.msg||C)),{code:t.ret,payload:t})}function m(){var t=window.M;if(t){if(t.isDev("test"))return I.Develop;if(t.isDev("local")||t.isDev("pre"))return I.PreRelease}}function y(t){if(!t)return Promise.resolve(!1);var e=window.hdp;try{if(e&&e.isApp())return e.getObj("mgj").then(function(t){return t.mwpEnable},function(){return Promise.resolve(!1)});var n=navigator.userAgent.toLowerCase();return t.test(n)?window.mgj?Promise.resolve(window.mgj.mwpEnable===!0):new Promise(function(t){document.addEventListener("deviceready",function(){try{t(window.mgj.mwpEnable===!0)}catch(e){t(!1)}},!1)}):Promise.resolve(!1)}catch(r){return Promise.resolve(!1)}}function g(t){return t&&"function"==typeof t.then}function v(t,e){return e={exports:{}},t(e,e.exports),e.exports}function w(t){return!!t.constructor&&"function"==typeof t.constructor.isBuffer&&t.constructor.isBuffer(t)}function b(t){return"function"==typeof t.readFloatLE&&"function"==typeof t.slice&&w(t.slice(0,0))}function _(t){return t?"string"==typeof t?t:JSON.stringify(t):""}var P,S=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])},O=/&/,T=/\+/g,j=Object.prototype.hasOwnProperty,E=function(t){return t},k=window.fetch,x=window.location,R={text:"text/plain",form:"application/x-www-form-urlencoded",json:"application/json"},D=window.navigator.userAgent.indexOf("MSIE 8.0")>=0,M="\u7f51\u7edc\u9519\u8bef\uff0c\u8bf7\u7a0d\u5019\u518d\u8bd5",C="\u670d\u52a1\u5668\u5f00\u5c0f\u5dee\u4e86\uff0c\u8bf7\u7a0d\u5019\u518d\u8bd5";!function(t){t.MGJ="mgj",t.MLS="mls",t.XD="xd"}(P||(P={}));var A,I={Develop:"DEVELOP",PreRelease:"PRE_RELEASE",Release:"RELEASE"},H={Success:"SUCCESS",NeedHttps:"FAIL_SYS_NEED_HTTPS",TokenNeedRenew:"FAIL_SYS_TOKEN_NEED_RENEW",SessionInvalid:"FAIL_BIZ_SESSION_INVALID"},N=function(){try{var t=location.hostname;if(/(mogujie\.org|meili-inc\.com)$/.test(t))return"nsh5"}catch(e){}return"h5"}(),L=(A={},A[P.MGJ]={Develop:"devapi.mogujie.com",PreRelease:"newpreapi.mogujie.com",Release:"api.mogujie.com"},A[P.MLS]={Develop:"devapi.meilishuo.com",PreRelease:"preapi.meilishuo.com",Release:"api.meilishuo.com"},A[P.XD]={Develop:"devapi.xiaodian.com",PreRelease:"preapi.xiaodian.com",Release:"api.xiaodian.com"},A),W="_mwp_h5_token",B="__mgjuuid",J=function(){function t(){this.data={}}return t.prototype.add=function(t,e,n){return void 0===n&&(n=null),this.data[t+"."+e]=n,this},t.prototype.toObject=function(){return this.data},t}(),U=function(){function t(t){this.callbacks={},this.Request=t}return t.prototype.addParameter=function(t,e,n){return this.parameter||(this.parameter=new J),this.parameter.add(t,e,n),this},t.prototype.request=function(t,e,n,r){var o,i=this;return n instanceof J?o=n.toObject():(o=this.parameter?this.parameter.toObject():null,r||(r=n||{})),this.promise=this.Request.request(t,e,o,r).then(function(t){return i.result=t,i.Request.filterResult(t)}).then(function(t){var e=Object.keys(t).filter(function(t){return t in i.callbacks}).map(function(e){return i.callbacks[e](t[e])}).filter(g);return e.length>0?i.Request.Promise.all(e).then(function(){return i.result}):i.result}),this},t.prototype.on=function(t,e){return this.callbacks[t]||(this.callbacks[t]=e),this},t.prototype.then=function(t,e){return this.promise=this.promise.then(t,e),this},t.prototype["catch"]=function(t){return this.promise=this.promise["catch"](t),this},t.Parameter=J,t}(),q=v(function(t){!function(){var e="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",n={rotl:function(t,e){return t<<e|t>>>32-e},rotr:function(t,e){return t<<32-e|t>>>e},endian:function(t){if(t.constructor==Number)return 16711935&n.rotl(t,8)|4278255360&n.rotl(t,24);for(var e=0;e<t.length;e++)t[e]=n.endian(t[e]);return t},randomBytes:function(t){for(var e=[];t>0;t--)e.push(Math.floor(256*Math.random()));return e},bytesToWords:function(t){for(var e=[],n=0,r=0;n<t.length;n++,r+=8)e[r>>>5]|=t[n]<<24-r%32;return e},wordsToBytes:function(t){for(var e=[],n=0;n<32*t.length;n+=8)e.push(t[n>>>5]>>>24-n%32&255);return e},bytesToHex:function(t){for(var e=[],n=0;n<t.length;n++)e.push((t[n]>>>4).toString(16)),e.push((15&t[n]).toString(16));return e.join("")},hexToBytes:function(t){for(var e=[],n=0;n<t.length;n+=2)e.push(parseInt(t.substr(n,2),16));return e},bytesToBase64:function(t){for(var n=[],r=0;r<t.length;r+=3)for(var o=t[r]<<16|t[r+1]<<8|t[r+2],i=0;4>i;i++)8*r+6*i<=8*t.length?n.push(e.charAt(o>>>6*(3-i)&63)):n.push("=");return n.join("")},base64ToBytes:function(t){t=t.replace(/[^A-Z0-9+\/]/gi,"");for(var n=[],r=0,o=0;r<t.length;o=++r%4)0!=o&&n.push((e.indexOf(t.charAt(r-1))&Math.pow(2,-2*o+8)-1)<<2*o|e.indexOf(t.charAt(r))>>>6-2*o);return n}};t.exports=n}()}),G={utf8:{stringToBytes:function(t){return G.bin.stringToBytes(unescape(encodeURIComponent(t)))},bytesToString:function(t){return decodeURIComponent(escape(G.bin.bytesToString(t)))}},bin:{stringToBytes:function(t){for(var e=[],n=0;n<t.length;n++)e.push(255&t.charCodeAt(n));return e},bytesToString:function(t){for(var e=[],n=0;n<t.length;n++)e.push(String.fromCharCode(t[n]));return e.join("")}}},X=G,K=function(t){return null!=t&&(w(t)||b(t)||!!t._isBuffer)},F=v(function(t){!function(){var e=q,n=X.utf8,r=K,o=X.bin,i=function(t,s){t.constructor==String?t=s&&"binary"===s.encoding?o.stringToBytes(t):n.stringToBytes(t):r(t)?t=Array.prototype.slice.call(t,0):Array.isArray(t)||(t=t.toString());for(var a=e.bytesToWords(t),u=8*t.length,c=1732584193,h=-271733879,p=-1732584194,f=271733878,d=0;d<a.length;d++)a[d]=16711935&(a[d]<<8|a[d]>>>24)|4278255360&(a[d]<<24|a[d]>>>8);a[u>>>5]|=128<<u%32,a[(u+64>>>9<<4)+14]=u;for(var l=i._ff,m=i._gg,y=i._hh,g=i._ii,d=0;d<a.length;d+=16){var v=c,w=h,b=p,_=f;c=l(c,h,p,f,a[d+0],7,-680876936),f=l(f,c,h,p,a[d+1],12,-389564586),p=l(p,f,c,h,a[d+2],17,606105819),h=l(h,p,f,c,a[d+3],22,-1044525330),c=l(c,h,p,f,a[d+4],7,-176418897),f=l(f,c,h,p,a[d+5],12,1200080426),p=l(p,f,c,h,a[d+6],17,-1473231341),h=l(h,p,f,c,a[d+7],22,-45705983),c=l(c,h,p,f,a[d+8],7,1770035416),f=l(f,c,h,p,a[d+9],12,-1958414417),p=l(p,f,c,h,a[d+10],17,-42063),h=l(h,p,f,c,a[d+11],22,-1990404162),c=l(c,h,p,f,a[d+12],7,1804603682),f=l(f,c,h,p,a[d+13],12,-40341101),p=l(p,f,c,h,a[d+14],17,-1502002290),h=l(h,p,f,c,a[d+15],22,1236535329),c=m(c,h,p,f,a[d+1],5,-165796510),f=m(f,c,h,p,a[d+6],9,-1069501632),p=m(p,f,c,h,a[d+11],14,643717713),h=m(h,p,f,c,a[d+0],20,-373897302),c=m(c,h,p,f,a[d+5],5,-701558691),f=m(f,c,h,p,a[d+10],9,38016083),p=m(p,f,c,h,a[d+15],14,-660478335),h=m(h,p,f,c,a[d+4],20,-405537848),c=m(c,h,p,f,a[d+9],5,568446438),f=m(f,c,h,p,a[d+14],9,-1019803690),p=m(p,f,c,h,a[d+3],14,-187363961),h=m(h,p,f,c,a[d+8],20,1163531501),c=m(c,h,p,f,a[d+13],5,-1444681467),f=m(f,c,h,p,a[d+2],9,-51403784),p=m(p,f,c,h,a[d+7],14,1735328473),h=m(h,p,f,c,a[d+12],20,-1926607734),c=y(c,h,p,f,a[d+5],4,-378558),f=y(f,c,h,p,a[d+8],11,-2022574463),p=y(p,f,c,h,a[d+11],16,1839030562),h=y(h,p,f,c,a[d+14],23,-35309556),c=y(c,h,p,f,a[d+1],4,-1530992060),f=y(f,c,h,p,a[d+4],11,1272893353),p=y(p,f,c,h,a[d+7],16,-155497632),h=y(h,p,f,c,a[d+10],23,-1094730640),c=y(c,h,p,f,a[d+13],4,681279174),f=y(f,c,h,p,a[d+0],11,-358537222),p=y(p,f,c,h,a[d+3],16,-722521979),h=y(h,p,f,c,a[d+6],23,76029189),c=y(c,h,p,f,a[d+9],4,-640364487),f=y(f,c,h,p,a[d+12],11,-421815835),p=y(p,f,c,h,a[d+15],16,530742520),h=y(h,p,f,c,a[d+2],23,-995338651),c=g(c,h,p,f,a[d+0],6,-198630844),f=g(f,c,h,p,a[d+7],10,1126891415),p=g(p,f,c,h,a[d+14],15,-1416354905),h=g(h,p,f,c,a[d+5],21,-57434055),c=g(c,h,p,f,a[d+12],6,1700485571),f=g(f,c,h,p,a[d+3],10,-1894986606),p=g(p,f,c,h,a[d+10],15,-1051523),h=g(h,p,f,c,a[d+1],21,-2054922799),c=g(c,h,p,f,a[d+8],6,1873313359),f=g(f,c,h,p,a[d+15],10,-30611744),p=g(p,f,c,h,a[d+6],15,-1560198380),h=g(h,p,f,c,a[d+13],21,1309151649),c=g(c,h,p,f,a[d+4],6,-145523070),f=g(f,c,h,p,a[d+11],10,-1120210379),p=g(p,f,c,h,a[d+2],15,718787259),h=g(h,p,f,c,a[d+9],21,-343485551),c=c+v>>>0,h=h+w>>>0,p=p+b>>>0,f=f+_>>>0}return e.endian([c,h,p,f])};i._ff=function(t,e,n,r,o,i,s){var a=t+(e&n|~e&r)+(o>>>0)+s;return(a<<i|a>>>32-i)+e},i._gg=function(t,e,n,r,o,i,s){var a=t+(e&r|n&~r)+(o>>>0)+s;return(a<<i|a>>>32-i)+e},i._hh=function(t,e,n,r,o,i,s){var a=t+(e^n^r)+(o>>>0)+s;return(a<<i|a>>>32-i)+e},i._ii=function(t,e,n,r,o,i,s){var a=t+(n^(e|~r))+(o>>>0)+s;return(a<<i|a>>>32-i)+e},i._blocksize=16,i._digestsize=16,t.exports=function(t,n){if(void 0===t||null===t)throw new Error("Illegal argument "+t);var r=e.wordsToBytes(i(t,n));return n&&n.asBytes?r:n&&n.asString?o.bytesToString(r):e.bytesToHex(r)}}()}),Y="mw-ttid",Q="mw-t",V="data",$="mw-appkey",z="mw-sign",Z="mw-did",tt="mw-uid",et="mw-cmd-v",nt="mw-uuid",rt=["mw-pv","mw-sid",Z];"function"!=typeof Date.now&&(Date.now=function(){return(new Date).getTime()});var ot=function(){function t(){this._params={},this._omitted={}}return t.prototype.add=function(t,e){return rt.indexOf(t)>=0?(this._omitted[t]=e,this):((e||"data"===t)&&(this._params[t]=e),this)},t.prototype.sign=function(t,e,n,r){var o=this._params,i=Object.keys(o);return i.sort(),F(i.map(function(t){return o[t]}).concat([t,e,F(n),r]).join("&"))},t.prototype.getSignedParams=function(t){var e=this,n=t.constructor;this.add($,n.AppKey).add(Q,String(Date.now())).add(nt,t.getUUID()).add(Y,n.TTID);var r=t.getMWPCookieHeader();Object.keys(r).forEach(function(t){t.startsWith("mw-cookie-")&&e.add(t,r[t])});var o=_(t.data);return this.add(z,this.sign(t.api,t.version,o,t.getToken())).add(V,o),Object.assign({},this._omitted,this._params)},t.getSignedParams=function(e){return(new t).getSignedParams(e)},t}();!function(t){t.Key={KEY_DEVICE_ID:Z,KEY_UID:tt,KEY_CMD_V:et}}(ot||(ot={}));var it,st=ot,at=function(){function t(t){var e=this;this.callback=t,this.promise=new Promise(function(t,n){e.resolve=t,e.reject=n})}return t.prototype.exec=function(){return this.callback().then(this.resolve,this.reject)},t.prototype.then=function(t,e){return this.promise=this.promise.then(t,e)},t.prototype["catch"]=function(t){return this.promise=this.promise["catch"](t)},t}(),ut=function(){function t(){this.tasks=[]}return t.createQueue=function(){var t=new this;return this.instances.push(t),t},t.getQueue=function(){return this.instances[0]},t.prototype.add=function(t){try{var e=new at(t);return this.tasks.push(e),e}catch(n){return null}},t.prototype.exec=function(){var e=this;if(t.instances=t.instances.filter(function(t){return e!==t}),null===this.tasks||0===this.tasks.length)return Promise.resolve();var n=function(){return e.tasks=null};return Promise.all(this.tasks.map(function(t){return t.exec()})).then(n,n)},t.instances=[],t}(),ct=function(){function t(t,e,n){void 0===n&&(n={}),this.retries=1,this.api=t,this.version=e;var r=this.constructor.defaultOptions;this.options=Object.assign({},r,n),this.options.headers=Object.assign({},r.headers,n.headers)}return t.getContext=function(t,e,n){return new this(t,e,n)},t.request=function(t,e,n,r){return this.getContext(t,e,r).request(n)},t.setHeader=function(t,e){var n=this.defaultOptions;n.headers||(n.headers={}),n.headers[t]=e},t.getDSL=function(){return new U(this)},t.getDSLParameter=function(){return new U.Parameter},t.setGlobalEnv=function(t){t&&(this.defaultOptions.env=t)},t.getGlobalEnv=function(){return this.defaultOptions.env},t.getMWPCookies=function(t,e){return this.MWPCookieJar.getCookies(this.getContext(t,e))},t.prototype.shouldRetry=function(){return this.retries<5},t.prototype.getToken=function(){throw new Error("Method not implemented.")},t.prototype.getUUID=function(){return""},t.prototype.getParams=function(){return st.getSignedParams(this)},t.prototype.getHostname=function(){var t=this.constructor.Hostname;switch(this.options.env){case I.Develop:return t.Develop;case I.PreRelease:return t.PreRelease;default:return t.Release}},t.prototype.getOrigin=function(){var t=this.options,e=t.useHTTPS?"https:":"http:";return e+"//"+this.getHostname()},t.prototype.getURL=function(){return this.getOrigin()+"/"+N+"/"+this.api+"/"+this.version+"/"},t.prototype.getHeaders=function(){return Object.assign({},this.options.headers)},t.prototype.getMWPCookies=function(){return this.constructor.MWPCookieJar.getCookies(this)},t.prototype.getMWPCookieHeader=function(){var t={},e=this.getMWPCookies();return Object.keys(e).length>0&&(t["mw-cookie-"+this.api.replace(/\./g,"")+this.version]=Object.keys(e).map(function(t){return t+"="+e[t]}).join("; ")+";"),t},t.prototype.request=function(t){return this.data=t,this.getToken()?this._fetch():this.enqueue()},t.prototype.fetch=function(t,e){e(new Error("Please implement `fetch` method in your own subclass"))},t.prototype.handleResponse=function(t){switch(t.ret){case H.TokenNeedRenew:return this._fetch();case H.NeedHttps:return this.options.useHTTPS=!0,this._fetch();default:return this.constructor.Promise.resolve(t)}},t.prototype._fetch=function(){var t=this;return new this.constructor.Promise(function(e,n){return t.shouldRetry()?(t.retries++,void t.fetch(e,n)):(console.warn("Have retried too much times"),n(new Error(C)))}).then(function(e){return t.handleResponse(e)})},t.prototype.enqueue=function(){var t=ut.getQueue();if(t){var e=t.add(this._fetch.bind(this));return null===e?this._fetch():e}t=ut.createQueue();var n=this._fetch(),r=t.exec.bind(t);return n.then(r,r),n},t.Promise=Promise,t.Env=I,t.Hostname=L[P.MGJ],t.Code=H,t.defaultOptions={useHTTPS:!1,env:I.Release},t.v="3.1.3",t.filterResult=l,t}(),ht=/iPhone|iPad|iPod|Android|BlackBerry|IEMobile|Opera Mini/i;!function(t){t.PC="pc",t.H5="h5"}(it||(it={}));var pt,ft,dt,lt=(pt={},pt[P.MGJ]=/\.mogujie\.com$/,pt[P.MLS]=/\.meilishuo\.com$/,pt[P.XD]=/\.xiaodian\.com$/,pt),mt=(ft={},ft[P.MGJ]=/mogujie4/,ft[P.XD]=/xiaodian4/,ft),yt=(dt={},dt[P.MGJ]="100028",dt[P.MLS]="100066",dt[P.XD]="100028",dt),gt=function(){function t(e){void 0===e&&(e=location.hostname),this.userAgent=navigator.userAgent.toLowerCase(),this.version="1.0",this.type=t.getType(e),this.platform=t.getPlatform(this.userAgent)}return t.getType=function(t){var e=P.MGJ;return Object.keys(lt).some(function(n){return lt[n].test(t)?(e=n,!0):!1}),e},t.getPlatform=function(e){return t.isMobile(e)?it.H5:it.PC},t.isMobile=function(t){return ht.test(t)},t.prototype.getHostname=function(){return L[this.type]},t.prototype.getUserAgentTester=function(){return mt[this.type]},t.prototype.getTTID=function(){return"NMMain@"+[this.type,this.platform,this.version].join("_")},t.prototype.getAppKey=function(){return yt[this.type]},t}(),vt=function(){},wt=function(e){function r(){var t=null!==e&&e.apply(this,arguments)||this;return t.retriesOnSignError=!1,t}return t(r,e),r.config=function(t){void 0===t&&(t={});var e=this.adaptor;["type","platform","version"].forEach(function(n){t[n]&&(e[n]=t[n])}),this.AppKey=e.getAppKey(),this.TTID=e.getTTID(),this.Hostname=e.getHostname(),this.useNativeMWP=y(e.getUserAgentTester()),this.setGlobalEnv(t.env)},r.prototype.request=function(t){var n=this;return r.useNativeMWP.then(function(r){return r?(n.data=t,n._fetch()):e.prototype.request.call(n,t)})},r.prototype.getToken=function(){return f(W)},r.prototype.getUUID=function(){return f(B)},r.prototype.getParams=function(){var t=new st,e=this.options.headers;return e&&Object.keys(e).forEach(function(n){n.startsWith("mw-")&&t.add(n,e[n])}),t.getSignedParams(this)},r.prototype.fetch=function(t,e){var n=this;return this.options.forceJSONP?void this._fetchByWeb(t,e):void r.useNativeMWP.then(function(r){r?n._fetchByNative(t,e):n._fetchByWeb(t,e)})},r.prototype.getMWPCookieHeader=function(){return{}},r.prototype.getMWPCookies=function(){return{}},r.prototype._fetchByNative=function(t,e){"number"==typeof this.version&&(this.version=String(this.version)),window.mgj.ajax.mwp(t,e,this.api,this.version,this.data,"get",!this.options.useHTTPS)},r.prototype._fetchByWeb=function(t,e){var n=function(n,r){return n?void e(n):void t(r)};this.options.cors===!0?this._fetchWithCORS(n):this._fetchWithJSONP(n)},r.prototype._fetchWithJSONP=function(t){var e=this.getURL(),r=this.getParams(),o="mwpCb"+d();this.constructor.adaptor.userAgent.indexOf("xcore")>-1?(window[o]=function(e){t(null,e)},r.callback=o,r._=Date.now(),loader.script(e+(~e.indexOf("?")?"&":"?")+n(r),vt,t)):i(e,{data:r,jsonpCallback:o},t)},r.prototype._fetchWithCORS=function(t){var e=this.getURL(),n=this.getParams(),r={method:this.options.method,data:n,dataType:"json",credentials:"include",headers:{"content-type":R.form}};"function"==typeof fetch?a(e,r,t):XMLHttpRequest?s(e,r,t):this._fetchWithJSONP(t)},r.prototype.handleResponse=function(t){return"FAIL_SYS_SIGN_ERROR"!==t.ret||this.retriesOnSignError?e.prototype.handleResponse.call(this,t):(this.retriesOnSignError=!0,ut.getQueue()||p("_mwp_h5_token",null,{domain:".meilishuo.com",path:"/"}),this.enqueue())},r.adaptor=new gt,r.Platform={PC:it.PC,H5:it.H5},r.Type={MGJ:P.MGJ,MLS:P.MLS,XD:P.XD},r.defaultOptions=Object.assign({},ct.defaultOptions,{useHTTPS:"https:"===location.protocol,method:"GET"}),r}(ct);return wt.config(),wt.setGlobalEnv(m()),wt}()}(this.M||this.MoGu||this);
