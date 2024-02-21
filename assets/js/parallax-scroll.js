$((function(){ParallaxScroll.init()}));var ParallaxScroll={showLogs:!1,round:1e3,init:function(){if(this._log("init"),this._inited)return this._log("Already Inited"),void(this._inited=!0);this._requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a,t){window.setTimeout(a,1e3/60)},this._onScroll(!0)},_inited:!1,_properties:["x","y","z","rotateX","rotateY","rotateZ","scaleX","scaleY","scaleZ","scale"],_requestAnimationFrame:null,_log:function(a){this.showLogs&&console.log("Parallax Scroll / "+a)},_onScroll:function(a){var t=$(document).scrollTop(),e=$(window).height();this._log("onScroll "+t),$("[data-parallax]").each($.proxy((function(l,n){var s=$(n),r=[],i=!1,o=s.data("style");null==o&&(o=s.attr("style")||"",s.data("style",o));var c,u=[s.data("parallax")];for(c=2;s.data("parallax"+c);c++)u.push(s.data("parallax-"+c));var d=u.length;for(c=0;c<d;c++){var m=u[c],h=m["from-scroll"];null==h&&(h=Math.max(0,$(n).offset().top-e)),h|=0;var p=m.distance,v=m["to-scroll"];null==p&&null==v&&(p=e),p=Math.max(0|p,1);var w=m.easing,x=m["easing-return"];if(null!=w&&$.easing&&$.easing[w]||(w=null),null!=x&&$.easing&&$.easing[x]||(x=w),w){var g=m.duration;null==g&&(g=p),g=Math.max(0|g,1);var f=m["duration-return"];null==f&&(f=g),p=1;var _=s.data("current-time");null==_&&(_=0)}null==v&&(v=h+p),v|=0;var y=m.smoothness;null==y&&(y=30),y|=0,(a||0==y)&&(y=1),y|=0;var A=t;A=Math.max(A,h),A=Math.min(A,v),w&&(null==s.data("sens")&&s.data("sens","back"),A>h&&("back"==s.data("sens")?(_=1,s.data("sens","go")):_++),A<v&&("go"==s.data("sens")?(_=1,s.data("sens","back")):_++),a&&(_=g),s.data("current-time",_)),this._properties.map($.proxy((function(a){var t=0,e=m[a];if(null!=e){"scale"==a||"scaleX"==a||"scaleY"==a||"scaleZ"==a?t=1:e|=0;var l=s.data("_"+a);null==l&&(l=t);var n=(A-h)/(v-h)*(e-t)+t,o=l+(n-l)/y;if(w&&_>0&&_<=g){var c=t;"back"==s.data("sens")&&(c=e,e=-e,w=x,g=f),o=$.easing[w](null,_,c,e,g)}(o=Math.ceil(o*this.round)/this.round)==l&&n==e&&(o=e),r[a]||(r[a]=0),r[a]+=o,l!=r[a]&&(s.data("_"+a,r[a]),i=!0)}}),this))}if(i){if(null!=r.z){var X=m.perspective;null==X&&(X=800);var Y=s.parent();Y.data("style")||Y.data("style",Y.attr("style")||""),Y.attr("style","perspective:"+X+"px; -webkit-perspective:"+X+"px; "+Y.data("style"))}null==r.scaleX&&(r.scaleX=1),null==r.scaleY&&(r.scaleY=1),null==r.scaleZ&&(r.scaleZ=1),null!=r.scale&&(r.scaleX*=r.scale,r.scaleY*=r.scale,r.scaleZ*=r.scale);var Z="translate3d("+(r.x?r.x:0)+"px, "+(r.y?r.y:0)+"px, "+(r.z?r.z:0)+"px)"+" "+("rotateX("+(r.rotateX?r.rotateX:0)+"deg) rotateY("+(r.rotateY?r.rotateY:0)+"deg) rotateZ("+(r.rotateZ?r.rotateZ:0)+"deg)")+" "+("scaleX("+r.scaleX+") scaleY("+r.scaleY+") scaleZ("+r.scaleZ+")")+";";this._log(Z),s.attr("style","transform:"+Z+" -webkit-transform:"+Z+" "+o)}}),this)),window.requestAnimationFrame?window.requestAnimationFrame($.proxy(this._onScroll,this,!1)):this._requestAnimationFrame($.proxy(this._onScroll,this,!1))}};