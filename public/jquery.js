/* SVN.committedRevision=7a4edd7 */
jQuery.cookie=function(w,p,i){if(typeof p!="undefined"){i=i||{};if(p===null){p="";i.expires=-1}var t="";if(i.expires&&(typeof i.expires=="number"||i.expires.toUTCString)){var s;if(typeof i.expires=="number"){s=new Date();s.setTime(s.getTime()+(i.expires*24*60*60*1000))}else{s=i.expires}t="; expires="+s.toUTCString()}var n=i.path?"; path="+(i.path):"";var r=i.domain?"; domain="+(i.domain):"";var x=i.secure?"; secure":"";document.cookie=[w,"=",encodeURIComponent(p),t,n,r,x].join("")}else{var u=null;if(document.cookie&&document.cookie!=""){var o=document.cookie.split(";");for(var q=0;q<o.length;q++){var v=jQuery.trim(o[q]);if(v.substring(0,w.length+1)==(w+"=")){u=decodeURIComponent(v.substring(w.length+1));break}}}return u}};