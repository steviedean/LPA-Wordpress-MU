/**
 * Vimeo Player - Froogaloop
 *
 * @link https://github.com/vimeo/froogaloop
 */
var Froogaloop=function(){function g(a){return new g.fn.init(a)}function h(a,b,c){if(!c.contentWindow.postMessage)return!1;var f=c.getAttribute("src").split("?")[0];a=JSON.stringify({method:a,value:b});c.contentWindow.postMessage(a,f)}function i(a){if(a.origin!=playerDomain)return!1;var b=JSON.parse(a.data);a=b.value;var c=b.data,f=f==""?null:b.player_id;b=f?d[f][b.event||b.method]:d[b.event||b.method];var e=[];if(!b)return!1;a!==void 0&&e.push(a);c&&e.push(c);f&&e.push(f);return e.length>0?b.apply(null,
e):b.call()}function j(a,b,c){c?(d[c]||(d[c]={}),d[c][a]=b):d[a]=b}var d={},k=!1;g.fn=g.prototype={playerDomain:"",element:null,init:function(a){typeof a==="string"&&(a=document.getElementById(a));this.element=a;return this},api:function(a,b){if(!this.element||!a)return!1;var c=this.element,f=c.id!=""?c.id:null,e=!b||!b.constructor||!b.call||!b.apply?b:null,d=b&&b.constructor&&b.call&&b.apply?b:null;d&&j(a,d,f);h(a,e,c);return this},addEvent:function(a,b){if(!this.element)return!1;var c=this.element;
j(a,b,c.id!=""?c.id:null);a!="ready"&&h("addEventListener",a,c);if(k)return this;c=c.getAttribute("src").split("/");for(var d="",e=0,g=c.length;e<g;e++){if(e<3)d+=c[e];else break;e<2&&(d+="/")}playerDomain=d;window.addEventListener?window.addEventListener("message",i,!1):window.attachEvent("onmessage",i,!1);k=!0;return this},removeEvent:function(a){if(!this.element)return!1;var b=this.element,c;a:{if((c=b.id!=""?b.id:null)&&d[c]){if(!d[c][a]){c=!1;break a}d[c][a]=null}else{if(!d[a]){c=!1;break a}d[a]=
null}c=!0}a!="ready"&&c&&h("removeEventListener",a,b)}};g.fn.init.prototype=g.fn;return window.Froogaloop=window.$f=g}();




/**
 * YouTube Player
 *
 * @link http://www.youtube.com/player_api
 */
if (!window['YT']) {var YT = {};}if (!YT.Player) {(function(){var p = document.location.protocol == 'https:' ? 'https:' : 'http:';var s = p + '//s.ytimg.com/yt/jsbin/www-playerapi-vflcxWWId.js';var a = document.createElement('script');a.src = s;a.async = true;var b = document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a, b);YT.embed_template = "\u003ciframe width=\"425\" height=\"344\" src=\"\" frameborder=\"0\" allowfullscreen\u003e\u003c\/iframe\u003e";})();}