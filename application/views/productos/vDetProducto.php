<style>
   .break-word {
 -ms-word-break: break-all;
     word-break: break-all;

     // Non standard for webkit
     word-break: break-word;

-webkit-hyphens: auto;
   -moz-hyphens: auto;
    -ms-hyphens: auto;
        hyphens: auto;
} 
</style>


<div>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12"> 
            <div class="box box-solid">
            <div class="box-header with-border">
              

              <p class="box-title" style="font-size:90%;">Código del Producto : <?=$cod_prod;?></p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                <div class="col-sm-6 col-md-4">   
            
                <?php 
                 if($imgs == false){ ?>
                   <img class="img-thumbnail"  src="<?= base_url(); ?>uploads/imagenes/imgCatalogo/sinimagen.jpg" />  
                <?php }
                else{ ?>
                   
                       	<!-- #region Jssor Slider Begin -->
                    <!-- Generator: Jssor Slider Maker -->
                    <!-- Source: https://www.jssor.com -->
                    <!-- This is deep minimized code which works independently. -->
                    <script type="text/javascript">
                    !function(g,j,c,f,d,k,h){new(function(){});var e={xb:function(a){return a},Ve:function(a){return-a*(a-2)}};var b=new function(){var i=this,Ab=/\S+/g,I=1,bb=2,eb=3,db=4,hb=5,J,s=0,l=0,t=0,X=0,A=0,L=navigator,mb=L.appName,o=L.userAgent,p=parseFloat;function Ib(){if(!J){J={ff:"ontouchstart"in g||"createTouch"in j};var a;if(L.pointerEnabled||(a=L.msPointerEnabled))J.Jd=a?"msTouchAction":"touchAction"}return J}function w(h){if(!s){s=-1;if(mb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var e=o.indexOf("MSIE");s=I;t=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on X=@_jscript_version@*/;l=j.documentMode||t}else if(mb=="Netscape"&&!!g.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){s=bb;l=p(o.substring(d+8))}else if(b>=0){var i=o.substring(0,b).lastIndexOf("/");s=f>=0?db:eb;l=p(o.substring(i+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){s=I;l=t=p(a[1])}}if(c>=0)A=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){s=hb;l=p(a[2])}}}return h==s}function q(){return w(I)}function yb(){return q()&&(l<6||j.compatMode=="BackCompat")}function Bb(){return w(bb)}function cb(){return w(eb)}function gb(){return w(hb)}function ub(){return cb()&&A>534&&A<535}function M(){w();return A>537||l>42||s==I&&l>=11}function wb(){return q()&&l<9}function vb(a){var b,c;return function(f){if(!b){b=d;var e=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,d){var b=a;if(d)b=g+e;if(f.style[b]!=h)return c=b})}return c}}function tb(b){var a;return function(c){a=a||vb(b)(c)||b;return a}}var N=tb("transform");function lb(a){return{}.toString.call(a)}var ib={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){ib["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(lb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function E(a){return a==f?String(a):ib[lb(a)]||"object"}function jb(a){for(var b in a)return d}function B(a){try{return E(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function v(a,b){return{x:a,y:b}}function qb(b,a){setTimeout(b,a||0)}function K(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a&&(c+=(!a.indexOf(" ")?"":" ")+a);return c}function sb(b,a){if(l<9)b.style.filter=a}function nb(a,b){if(a===h)a=b;return a}i.pf=Ib;i.md=q;i.hf=yb;i.Cf=Bb;i.Jf=cb;i.If=M;vb("transform");i.gd=function(){return l};i.Fd=function(){return t||l};i.Gf=function(){w();return A};i.Pb=qb;i.P=nb;i.Ff=function(a,b){b.call(a);return D({},a)};function W(a){a.constructor===W.caller&&a.Jb&&a.Jb.apply(a,W.caller.arguments)}i.Jb=W;i.wb=function(a){if(i.Ef(a))a=j.getElementById(a);return a};function u(a){return a||g.event}i.hc=function(b){b=u(b);var a=b.target||b.srcElement||j;if(a.nodeType==3)a=i.Zb(a);return a};i.pd=function(a){a=u(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function x(c,d,a){if(a!==h)c.style[d]=a==h?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function Z(b,c,a,d){if(a===h){a=p(x(b,c));isNaN(a)&&(a=f);return a}if(a==f)a="";else d&&(a+="px");x(b,c,a)}function m(c,a){var d=a?Z:x,b;if(a&4)b=tb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Db(b){if(q()&&t<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Fb(b,a,f){if(q()&&t<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=K(h,[i],d);sb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var O={D:["rotate"],W:["rotateX"],X:["rotateY"],Lb:["skewX"],Mb:["skewY"]};if(!M())O=D(O,{E:["scaleX",2],A:["scaleY",2],T:["translateZ",1]});function P(d,a){var c="";if(a){if(q()&&l&&l<10){delete a.W;delete a.X;delete a.T}b.f(a,function(d,b){var a=O[b];if(a){var e=a[1]||0;if(Q[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(M()){if(a.kb||a.lb||a.T!=h)c+=" translate3d("+(a.kb||0)+"px,"+(a.lb||0)+"px,"+(a.T||0)+"px)";if(a.E==h)a.E=1;if(a.A==h)a.A=1;if(a.E!=1||a.A!=1)c+=" scale3d("+a.E+", "+a.A+", 1)"}}d.style[N(d)]=c}i.Af=m("transformOrigin",4);i.zf=m("backfaceVisibility",4);i.jf=m("transformStyle",4);i.kf=m("perspective",6);i.lf=m("perspectiveOrigin",4);i.mf=function(b,a){if(q()&&t<9||t<10&&yb())b.style.zoom=a==1?"":a;else{var c=N(b),f=a==1?"":"scale("+a+")",e=b.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=K(e,[g],f);b.style[c]=d}};i.c=function(a,d,b,c){a=i.wb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};i.J=function(a,c,d,b){a=i.wb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};i.Kb=function(a){a=u(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};i.nf=function(a){a=u(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};i.I=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};i.of=function(a,b){if(b==h)return a.textContent||a.innerText;var c=j.createTextNode(b);i.nc(a);a.appendChild(c)};i.Hb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function kb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(H(a,b)==c)return a;if(!e){var d=kb(a,c,e,b);if(d)return d}}}i.oc=kb;function U(a,d,g,b){b=b||"u";var c=[];for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){H(a,b)==d&&c.push(a);if(!g){var e=U(a,d,g,b);if(e.length)c=c.concat(e)}}return c}function fb(a,c,d){for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=fb(a,c,d);if(b)return b}}}i.rf=fb;i.sf=function(b,a){return b.getElementsByTagName(a)};i.yb=function(a,f,d){d=d||"u";var e;do{if(a.nodeType==1){var c=b.m(a,d);if(c&&c==nb(f,c)){e=a;break}}a=b.Zb(a)}while(a&&a!=j.body);return e};function D(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==h){a=c[b];var i=d[b];d[b]=g&&(B(i)||B(a))?D(g,{},i,a):a}}return d}i.G=D;function Y(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(B(a)&&B(b)){a=Y(a,b);e=!jb(a)}!e&&(d[c]=a)}}return d}i.Oc=function(a){return E(a)=="function"};i.Ef=function(a){return E(a)=="string"};i.cd=function(a){return!isNaN(p(a))&&isFinite(a)};i.f=n;i.Se=B;function S(a){return j.createElement(a)}i.rc=function(){return S("DIV")};i.tf=function(){return S("SPAN")};i.Vc=function(){};function C(b,c,a){if(a==h)return b.getAttribute(c);b.setAttribute(c,a)}function H(a,b){return C(a,b)||C(a,"data-"+b)}i.v=C;i.m=H;i.Ab=function(d,b,c){var a=i.uf(H(d,b));if(isNaN(a))a=c;return a};function y(b,a){return C(b,"class",a)||""}function pb(b){var a={};n(b,function(b){if(b!=h)a[b]=b});return a}function rb(b,a){return b.match(a||Ab)}function R(b,a){return pb(rb(b||"",a))}i.Xc=pb;i.vf=rb;function ab(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function F(a,c,b){y(a,ab(" ",D(Y(R(y(a)),R(c)),R(b))))}i.Zb=function(a){return a.parentNode};i.R=function(a){i.Cb(a,"none")};i.z=function(a,b){i.Cb(a,b?"none":"")};i.wf=function(b,a){b.removeAttribute(a)};i.xf=function(d,a){if(a)d.style.clip="rect("+c.round(a.g||a.q||0)+"px "+c.round(a.k)+"px "+c.round(a.l)+"px "+c.round(a.i||a.u||0)+"px)";else if(a!==h){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=K(g,f,"");b.Rc(d,e)}};i.Z=function(){return+new Date};i.Q=function(b,a){b.appendChild(a)};i.sb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};i.Dc=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};i.re=function(a,b){n(a,function(a){i.Dc(a,b)})};i.nc=function(a){i.re(i.Hb(a,d),a)};i.Nc=function(a,b){var c=i.Zb(a);b&1&&i.O(a,(i.p(c)-i.p(a))/2);b&2&&i.K(a,(i.s(c)-i.s(a))/2)};var T={g:f,k:f,l:f,i:f,n:f,o:f};i.De=function(a){var b=i.rc();r(b,{Qb:"block",bb:i.jb(a),g:0,i:0,n:0,o:0});var d=i.Yc(a,T);i.sb(b,a);i.Q(b,a);var e=i.Yc(a,T),c={};n(d,function(b,a){if(b==e[a])c[a]=b});r(b,T);r(b,c);r(a,{g:0,i:0});return c};i.uf=p;function V(d,c,b){var a=d.cloneNode(!c);!b&&i.wf(a,"id");return a}i.fb=V;i.zb=function(e,f){var a=new Image;function b(e,d){i.J(a,"load",b);i.J(a,"abort",c);i.J(a,"error",c);f&&f(a,d)}function c(a){b(a,d)}if(gb()&&l<11.6||!e)b(!e);else{i.c(a,"load",b);i.c(a,"abort",c);i.c(a,"error",c);a.src=e}};i.ne=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){i.zb(a.src,b)});b()};i.ie=function(a,g,i,h){if(h)a=V(a);var c=U(a,g);if(!c.length)c=b.sf(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=V(i);y(e,y(d));b.Rc(e,d.style.cssText);b.sb(e,d);b.Dc(d)}return a};function Gb(a){var d=this,p="",r=["av","pv","ds","dn"],e=[],q,m=0,k=0,f=0;function l(){F(a,q,(e[f||k&2||k]||"")+" "+(e[m]||""));b.qb(a,"pointer-events",f?"none":"")}function c(){m=0;l();i.J(j,"mouseup",c);i.J(j,"touchend",c);i.J(j,"touchcancel",c)}function g(a){if(f)i.Kb(a);else{m=4;l();i.c(j,"mouseup",c);i.c(j,"touchend",c);i.c(j,"touchcancel",c)}}d.ge=function(a){if(a===h)return k;k=a&2||a&1;l()};d.Nb=function(a){if(a===h)return!f;f=a?0:3;l()};d.Y=a=i.wb(a);C(a,"data-jssor-button","1");var o=b.vf(y(a));if(o)p=o.shift();n(r,function(a){e.push(p+a)});q=ab(" ",e);e.unshift("");i.c(a,"mousedown",g);i.c(a,"touchstart",g)}i.mc=function(a){return new Gb(a)};i.qb=x;i.Ob=m("overflow");i.K=m("top",2);i.ke=m("right",2);i.pe=m("bottom",2);i.O=m("left",2);i.p=m("width",2);i.s=m("height",2);i.Wd=m("marginLeft",2);i.Xd=m("marginTop",2);i.jb=m("position");i.Cb=m("display");i.B=m("zIndex",1);i.lc=function(b,a,c){if(a!=h)Fb(b,a,c);else return Db(b)};i.Rc=function(a,b){if(b!=h)a.style.cssText=b;else return a.style.cssText};i.ae=function(b,a){if(a===h){a=x(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}x(b,"backgroundImage",a?"url('"+a+"')":"")};var G;i.be=G={L:i.lc,g:i.K,k:i.ke,l:i.pe,i:i.O,n:i.p,o:i.s,bb:i.jb,Qb:i.Cb,M:i.B};i.Yc=function(c,b){var a={};n(b,function(d,b){if(G[b])a[b]=G[b](c)});return a};function r(g,l){var e=wb(),b=M(),d=ub(),j=N(g);function k(b,d,a){var e=b.mb(v(-d/2,-a/2)),f=b.mb(v(d/2,-a/2)),g=b.mb(v(d/2,a/2)),h=b.mb(v(-d/2,a/2));b.mb(v(300,300));return v(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.T||0,p=(a.W||0)%360,q=(a.X||0)%360,u=(a.D||0)%360,l=a.E,m=a.A,f=a.Rf;if(l==h)l=1;if(m==h)m=1;if(f==h)f=1;if(e){n=0;p=0;q=0;f=0}var c=new Cb(a.kb,a.lb,n);c.W(p);c.X(q);c.ce(u);c.qe(a.Lb,a.Mb);c.tb(l,m,f);if(b){c.ib(a.u,a.q);d.style[j]=c.de()}else if(!X||X<9){var o="",g={x:0,y:0};if(a.U)g=k(c,a.U,a.gb);i.Xd(d,g.y);i.Wd(d,g.x);o=c.Md();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=K(s,[t],o);sb(d,r)}}r=function(e,c){c=c||{};var j=c.u,k=c.q,g;n(G,function(a,b){g=c[b];g!==h&&a(e,g)});i.xf(e,c.a);if(!b){j!=h&&i.O(e,(c.id||0)+j);k!=h&&i.K(e,(c.hd||0)+k)}if(c.Sd)if(d)qb(i.I(f,P,e,c));else a(e,c)};i.Gb=P;if(d)i.Gb=r;if(e)i.Gb=a;else if(!b)a=P;i.C=r;r(g,l)}i.Gb=r;i.C=r;function Cb(j,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,o||0,1],i=c.sin,h=c.cos,l=c.tan;function g(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(f,(a||b).concat(c))}d.tb=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.ib=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.W=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([1,0,0,0,0,d,f,0,0,-f,d,0,0,0,0,1])}};d.X=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,0,-f,0,0,1,0,0,f,0,d,0,0,0,0,1])}};d.ce=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,f,0,0,-f,d,0,0,0,0,1,0,0,0,0,1])}};d.qe=function(a,c){if(a||c){j=g(a);k=g(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.mb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.de=function(){return"matrix3d("+b.join(",")+")"};d.Md=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.E=function(b,c){return a.Ld(b,c,0)};a.A=function(b,c){return a.Ld(b,0,c)};a.Ld=function(a,c,d){return b(a,[[c,0],[0,d]])};a.mb=function(d,c){var a=b(d,[[c.x],[c.y]]);return v(a[0][0],a[1][0])}};var Q={id:0,hd:0,u:0,q:0,S:1,E:1,A:1,D:0,W:0,X:0,kb:0,lb:0,T:0,Lb:0,Mb:0};i.Hd=function(c,d){var a=c||{};if(c)if(b.Oc(c))a={P:a};else if(b.Oc(c.a))a.a={P:c.a};a.P=a.P||d;if(a.a)a.a.P=a.a.P||d;return a};i.jd=function(n,j,s,t,B,C,o){var a=j;if(n){a={};for(var i in j){var D=C[i]||1,z=B[i]||[0,1],g=(s-z[0])/z[1];g=c.min(c.max(g,0),1);g=g*D;var x=c.floor(g);if(g!=x)g-=x;var k=t.P||e.xb,m,E=n[i],p=j[i];if(b.cd(p)){k=t[i]||k;var A=k(g);m=E+p*A}else{m=b.G({Xb:{}},n[i]);var y=t[i]||{};b.f(p.Xb||p,function(d,a){k=y[a]||y.P||k;var c=k(g),b=d*c;m.Xb[a]=b;m[a]+=b})}a[i]=m}var w=b.f(j,function(b,a){return Q[a]!=h});w&&b.f(Q,function(c,b){if(a[b]==h&&n[b]!==h)a[b]=n[b]});if(w){if(a.S)a.E=a.A=a.S;a.U=o.U;a.gb=o.gb;if(q()&&l>=11&&(j.u||j.q)&&s!=0&&s!=1)a.D=a.D||1e-8;a.Sd=d}}if(j.a&&o.ib){var r=a.a.Xb,v=(r.g||0)+(r.l||0),u=(r.i||0)+(r.k||0);a.i=(a.i||0)+u;a.g=(a.g||0)+v;a.a.i-=u;a.a.k-=u;a.a.g-=v;a.a.l-=v}if(a.a&&!a.a.g&&!a.a.i&&!a.a.q&&!a.a.u&&a.a.k==o.U&&a.a.l==o.gb)a.a=f;return a}};function o(){var a=this,d=[];function i(a,b){d.push({wc:a,vc:b})}function h(a,c){b.f(d,function(b,e){b.wc==a&&b.vc===c&&d.splice(e,1)})}a.ub=a.addEventListener=i;a.removeEventListener=h;a.j=function(a){var c=[].slice.call(arguments,1);b.f(d,function(b){b.wc==a&&b.vc.apply(g,c)})}}var l=function(A,E,h,J,M,L){A=A||0;var a=this,p,m,n,s,C=0,G,H,F,D,z=0,i=0,l=0,y,j,e,f,o,x,u=[],w;function O(a){e+=a;f+=a;j+=a;i+=a;l+=a;z+=a}function r(p){var g=p;if(o)if(!x&&(g>=f||g<e)||x&&g>=e)g=((g-e)%o+o)%o+e;if(!y||s||i!=g){var k=c.min(g,f);k=c.max(k,e);if(!y||s||k!=l){if(L){var m=(k-j)/(E||1);if(h.wd)m=1-m;var n=b.jd(M,L,m,G,F,H,h);if(w)b.f(n,function(b,a){w[a]&&w[a](J,b)});else b.C(J,n)}a.gc(l-j,k-j);var r=l,q=l=k;b.f(u,function(b,c){var a=!y&&x||g<=i?u[u.length-c-1]:b;a.N(l-z)});i=g;y=d;a.Wb(r,q)}}}function B(a,b,d){b&&a.Vb(f);if(!d){e=c.min(e,a.Id()+z);f=c.max(f,a.ic()+z)}u.push(a)}var v=g.requestAnimationFrame||g.webkitRequestAnimationFrame||g.mozRequestAnimationFrame||g.msRequestAnimationFrame;if(b.Jf()&&b.gd()<7||!v)v=function(a){b.Pb(a,h.V)};function I(){if(p){var d=b.Z(),e=c.min(d-C,h.xd),a=i+e*n;C=d;if(a*n>=m*n)a=m;r(a);if(!s&&a*n>=m*n)K(D);else v(I)}}function q(g,h,j){if(!p){p=d;s=j;D=h;g=c.max(g,e);g=c.min(g,f);m=g;n=m<i?-1:1;a.Bd();C=b.Z();v(I)}}function K(b){if(p){s=p=D=k;a.Ad();b&&b()}}a.Mc=function(a,b,c){q(a?i+a:f,b,c)};a.Jc=q;a.nb=K;a.Zd=function(a){q(a)};a.cb=function(){return i};a.Gc=function(){return m};a.pb=function(){return l};a.N=r;a.ib=function(a){r(i+a)};a.Zc=function(){return p};a.le=function(a){o=a};a.Vb=O;a.Ic=function(a,b){B(a,0,b)};a.tc=function(a){B(a,1)};a.Id=function(){return e};a.ic=function(){return f};a.Wb=a.Bd=a.Ad=a.gc=b.Vc;a.zc=b.Z();h=b.G({V:16,xd:50},h);o=h.sc;x=h.Pd;w=h.Od;e=j=A;f=A+E;H=h.Tc||{};F=h.Pc||{};G=b.Hd(h.eb)};var m={Sb:"data-scale",Cc:"data-scale-ratio",Eb:"data-autocenter"},n=new function(){var a=this;a.hb=function(c,a,e,d){(d||!b.v(c,a))&&b.v(c,a,e)};a.yc=function(a){var c=b.Ab(a,m.Eb);b.Nc(a,c)}},q=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.Qd=function(d){for(var e=[],a,b=0;b<d.ab;b++)for(a=0;a<d.F;a++)g(e,c.ceil(1e5*c.random())%13,[b,a]);return e}},t=function(m,s,p,u,z,A){var a=this,v,h,g,y=0,x=u.Rd,r,i=8;function t(a){if(a.g)a.q=a.g;if(a.i)a.u=a.i;b.f(a,function(a){b.Se(a)&&t(a)})}function j(h,f,g){var a={V:f,uc:1,Pb:0,F:1,ab:1,L:0,S:0,a:0,ib:k,qc:k,wd:k,he:q.Qd,Wc:{oe:0,ee:0},eb:e.xb,Tc:{},Ub:[],Pc:{}};b.G(a,h);if(a.ab==0)a.ab=c.round(a.F*g);t(a);a.eb=b.Hd(a.eb,e.xb);a.Yd=c.ceil(a.uc/a.V);a.fe=function(c,b){c/=a.F;b/=a.ab;var f=c+"x"+b;if(!a.Ub[f]){a.Ub[f]={n:c,o:b};for(var d=0;d<a.F;d++)for(var e=0;e<a.ab;e++)a.Ub[f][e+","+d]={g:e*b,k:d*c+c,l:e*b+b,i:d*c}}return a.Ub[f]};if(a.ec){a.ec=j(a.ec,f,g);a.qc=d}return a}function n(z,i,a,v,n,l){var y=this,t,u={},h={},m=[],f,e,r,p=a.Wc.oe||0,q=a.Wc.ee||0,g=a.fe(n,l),o=B(a),C=o.length-1,s=a.uc+a.Pb*C,w=v+s,j=a.qc,x;w+=50;function B(a){var b=a.he(a);return a.wd?b.reverse():b}y.kd=w;y.Rb=function(d){d-=v;var e=d<s;if(e||x){x=e;if(!j)d=s-d;var f=c.ceil(d/a.V);b.f(h,function(a,e){var d=c.max(f,a.me);d=c.min(d,a.length-1);if(a.td!=d){if(!a.td&&!j)b.z(m[e]);else d==a.Ud&&j&&b.R(m[e]);a.td=d;b.C(m[e],a[d])}})}};i=b.fb(i);A(i,0,0);b.f(o,function(i,m){b.f(i,function(G){var I=G[0],H=G[1],v=I+","+H,o=k,s=k,x=k;if(p&&H%2){if(p&3)o=!o;if(p&12)s=!s;if(p&16)x=!x}if(q&&I%2){if(q&3)o=!o;if(q&12)s=!s;if(q&16)x=!x}a.g=a.g||a.a&4;a.l=a.l||a.a&8;a.i=a.i||a.a&1;a.k=a.k||a.a&2;var E=s?a.l:a.g,B=s?a.g:a.l,D=o?a.k:a.i,C=o?a.i:a.k;a.a=E||B||D||C;r={};e={q:0,u:0,L:1,n:n,o:l};f=b.G({},e);t=b.G({},g[v]);if(a.L)e.L=2-a.L;if(a.M){e.M=a.M;f.M=0}var K=a.F*a.ab>1||a.a;if(a.S||a.D){var J=d;if(J){e.S=a.S?a.S-1:1;f.S=1;var N=a.D||0;e.D=N*360*(x?-1:1);f.D=0}}if(K){var i=t.Xb={};if(a.a){var w=a.Kf||1;if(E&&B){i.g=g.o/2*w;i.l=-i.g}else if(E)i.l=-g.o*w;else if(B)i.g=g.o*w;if(D&&C){i.i=g.n/2*w;i.k=-i.i}else if(D)i.k=-g.n*w;else if(C)i.i=g.n*w}r.a=t;f.a=g[v]}var L=o?1:-1,M=s?1:-1;if(a.x)e.u+=n*a.x*L;if(a.y)e.q+=l*a.y*M;b.f(e,function(a,c){if(b.cd(a))if(a!=f[c])r[c]=a-f[c]});u[v]=j?f:e;var F=a.Yd,A=c.round(m*a.Pb/a.V);h[v]=new Array(A);h[v].me=A;h[v].Ud=A+F-1;for(var z=0;z<=F;z++){var y=b.jd(f,r,z/F,a.eb,a.Pc,a.Tc,{ib:a.ib,U:n,gb:l});y.M=y.M||1;h[v].push(y)}})});o.reverse();b.f(o,function(a){b.f(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=i;if(e||f)a=b.fb(i);b.C(a,u[d]);b.Ob(a,"hidden");b.jb(a,"absolute");z.Td(a);m[d]=a;b.z(a,!j)})})}function w(){var a=this,b=0;l.call(a,0,v);a.Wb=function(c,a){if(a-b>i){b=a;g&&g.Rb(a);h&&h.Rb(a)}};a.dd=r}a.je=function(){var a=0,b=u.fc,d=b.length;if(x)a=y++%d;else a=c.floor(c.random()*d);b[a]&&(b[a].ob=a);return b[a]};a.Vd=function(x,y,k,l,b,t){a.rb();r=b;b=j(b,i,t);var f=l.ad,e=k.ad;f["no-image"]=!l.Ec;e["no-image"]=!k.Ec;var o=f,q=e,w=b,d=b.ec||j({},i,t);if(!b.qc){o=e;q=f}var u=d.Vb||0;h=new n(m,q,d,c.max(u-d.V,0),s,p);g=new n(m,o,w,c.max(d.V-u,0),s,p);h.Rb(0);g.Rb(0);v=c.max(h.kd,g.kd);a.ob=x};a.rb=function(){m.rb();h=f;g=f};a.yf=function(){var a=f;if(g)a=new w;return a};if(z&&b.Gf()<537)i=16;o.call(a);l.call(a,-1e7,1e7)},p={Bc:1},s=function(a,E){var g=this;o.call(g);a=b.wb(a);var u,C,B,t,l=0,e,q,j,y,z,i,h,s,r,D=[],A=[];function x(a){a!=-1&&A[a].ge(a==l)}function v(a){g.j(p.Bc,a*q)}g.Y=a;g.ac=function(a){if(a!=t){var d=l,b=c.floor(a/q);l=b;t=a;x(d);x(b)}};g.Yb=function(c){b.z(a,c)};var w;g.bc=function(x){if(!w){u=c.ceil(x/q);l=0;var n=s+y,o=r+z,m=c.ceil(u/j)-1;C=s+n*(!i?m:j-1);B=r+o*(i?m:j-1);b.p(a,C);b.s(a,B);for(var g=0;g<u;g++){var t=b.tf();b.of(t,g+1);var k=b.ie(h,"numbertemplate",t,d);b.jb(k,"absolute");var p=g%(m+1);b.O(k,!i?n*p:g%j*n);b.K(k,i?o*p:c.floor(g/(m+1))*o);b.Q(a,k);D[g]=k;e.cc&1&&b.c(k,"click",b.I(f,v,g));e.cc&2&&b.c(k,"mouseenter",b.I(f,v,g));A[g]=b.mc(k)}w=d}};g.Ib=e=b.G({Uc:10,Sc:10,Qc:1,cc:1},E);h=b.oc(a,"prototype");s=b.p(h);r=b.s(h);b.Dc(h,a);q=e.ed||1;j=e.ab||1;y=e.Uc;z=e.Sc;i=e.Qc-1;e.tb==k&&n.hb(a,m.Sb,1);e.db&&n.hb(a,m.Eb,e.db);n.yc(a)},u=function(a,e,i,y,x,w){var c=this;o.call(c);var j,h,g,l;b.p(a);b.s(a);var s,r;function q(a){c.j(p.Bc,a,d)}function v(c){b.z(a,c);b.z(e,c)}function u(){s.Nb(i.Fb||!j.qf(h));r.Nb(i.Fb||!j.Bf(h))}c.ac=function(c,a,b){h=a;!b&&u()};c.Yb=v;var t;c.bc=function(){h=0;if(!t){b.c(a,"click",b.I(f,q,-l));b.c(e,"click",b.I(f,q,l));s=b.mc(a);r=b.mc(e);t=d}};c.Ib=g=b.G({ed:1},i);l=g.ed;j=w;if(g.tb==k){n.hb(a,m.Sb,1);n.hb(e,m.Sb,1)}if(g.db){n.hb(a,m.Eb,g.db);n.hb(e,m.Eb,g.db)}n.yc(a);n.yc(e)};function r(e,d,c){var a=this;l.call(a,0,c);a.Dd=b.Vc;a.zd=0;a.yd=c}var i=(g.module||{}).exports=function(){var a=this;b.Ff(a,o);var Ob="data-jssor-slider",bc="data-jssor-thumb",v,n,ab,ob,eb,yb,db,W,K,R,Db,Vb=1,nc=1,dc=1,ec={},y,X,Gb,Jb,Ib,pb,Ab,zb,kb,s=-1,Rb,q,O,M,G,vb,wb,w,S,L,bb,z,Y,ub,gb=[],jc,lc,fc,Wb,Hc,u,lb,J,hc,tb,Pb,ic,Q,Lb=0,E=0,P=Number.MAX_VALUE,H=Number.MIN_VALUE,kc,D,mb,U,N=1,cb,B,fb,Sb=0,Tb=0,T,qb,rb,nb,x,ib,A,Hb,hb=[],Fb=b.pf(),sb=Fb.ff,C=[],F,V,I,Nb,ac,Z;function wc(e,k,o){var l=this,h={g:2,k:1,l:2,i:1},n={g:"top",k:"right",l:"bottom",i:"left"},g,a,f,i,j={};l.Y=e;l.Tb=function(q,p,t){var l,s=q,r=p;if(!f){f=b.De(e);g=e.parentNode;i={tb:b.Ab(e,m.Sb,1),db:b.Ab(e,m.Eb)};b.f(n,function(c,a){j[a]=b.Ab(e,"data-scale-"+c,1)});a=e;if(k){a=b.fb(g,d);b.C(a,{g:0,i:0});b.Q(a,e);b.Q(g,a)}}if(o){l=c.max(q,p);if(k)if(t>0&&t<1){var v=c.min(q,p);l=c.min(l/v,1/(1-t))*v}}else s=r=l=c.pow(K<R?p:q,i.tb);b.mf(a,l);b.v(a,m.Cc,l);b.p(g,f.n*s);b.s(g,f.o*r);var u=b.md()&&b.Fd()<9||b.Fd()<10&&b.hf()?l:1,w=(s-u)*f.n/2,x=(r-u)*f.o/2;b.O(a,w);b.K(a,x);b.f(f,function(d,a){if(h[a]&&d){var e=(h[a]&1)*c.pow(q,j[a])*d+(h[a]&2)*c.pow(p,j[a])*d/2;b.be[a](g,e)}});b.Nc(g,i.db)}}function Gc(){var b=this;l.call(b,-1e8,2e8);b.Ke=function(){var a=b.pb();a=t(a);var d=c.round(a),g=d,f=a-c.floor(a),e=cc(a);return{ob:g,Ie:d,bb:f,Qb:a,He:e}};b.Wb=function(e,b){var g=t(b);if(c.abs(b-e)>1e-5){var f=c.floor(b);if(f!=b&&b>e&&(D&1||b>E))f++;mc(f,g,d)}a.j(i.Ge,g,t(e),b,e)}}function Fc(){var a=this;l.call(a,0,0,{sc:q});b.f(C,function(b){D&1&&b.le(q);a.tc(b);b.Vb(Q/w)})}function Ec(){var a=this,b=Hb.Y;l.call(a,-1,2,{eb:e.xb,Od:{bb:Ub},sc:q},b,{bb:1},{bb:-2});a.kc=b}function xc(o,m){var b=this,e,g,h,j,c;l.call(b,-1e8,2e8,{xd:100});b.Bd=function(){cb=d;fb=f;a.j(i.Fe,t(x.cb()),x.cb())};b.Ad=function(){cb=k;j=k;var b=x.Ke();a.j(i.Ee,t(x.cb()),x.cb());if(!B){Ic(b.Ie,s);(!b.bb||b.He)&&mc(s,b.Qb)}};b.Wb=function(f,d){var a;if(j)a=c;else{a=g;if(h){var b=d/h;a=n.ld(b)*(g-e)+e}}x.N(a)};b.dc=function(a,d,c,f){e=a;g=d;h=c;x.N(a);b.N(0);b.Jc(c,f)};b.gf=function(a){j=d;c=a;b.Mc(a,f,d)};b.Ce=function(a){c=a};x=new Gc;x.Ic(o);x.Ic(m)}function yc(){var c=this,a=pc();b.B(a,0);b.qb(a,"pointerEvents","none");c.Y=a;c.Td=function(c){b.Q(a,c);b.z(a)};c.rb=function(){b.R(a);b.nc(a)}}function Dc(m,g){var e=this,r,E,v,j,x=[],J,y,Q,z,N,H,B,h,w,p;l.call(e,-S,S+1,{});function G(a){r&&r.Dd();P(m,a,0);H=d;r=new eb.H(m,eb,b.Ab(m,"idle",hc),!u);r.N(0)}function V(){r.zc<eb.zc&&G()}function K(p,r,o){if(!z){z=d;if(j&&o){var f=o.width,c=o.height,m=f,l=c;if(f&&c&&n.Db){if(n.Db&3&&(!(n.Db&4)||f>O||c>M)){var h=k,q=O/M*c/f;if(n.Db&1)h=q>1;else if(n.Db&2)h=q<1;m=h?f*M/c:O;l=h?M:c*O/f}b.p(j,m);b.s(j,l);b.K(j,(M-l)/2);b.O(j,(O-m)/2)}b.jb(j,"absolute");a.j(i.Be,g)}}b.R(r);p&&p(e)}function T(f,b,c,d){if(d==fb&&s==g&&u)if(!Hc){var a=t(f);F.Vd(a,g,b,e,c,M/O);b.Ae();ib.Vb(a-ib.Id()-1);ib.N(a);A.dc(a,a,0)}}function Y(b){if(b==fb&&s==g){if(!h){var a=f;if(F)if(F.ob==g)a=F.yf();else F.rb();V();h=new Cc(m,g,a,r);h.vd(p)}!h.Zc()&&h.pc()}}function I(a,d,k){if(a==g){if(a!=d)C[d]&&C[d].Cd();else!k&&h&&h.ze();p&&p.Nb();var l=fb=b.Z();e.zb(b.I(f,Y,l))}else{var j=c.min(g,a),i=c.max(g,a),o=c.min(i-j,j+q-i),m=S+n.ye-1;(!N||o<=m)&&e.zb()}}function Z(){if(s==g&&h){h.nb();p&&p.xe();p&&p.we();h.Kd()}}function ab(){s==g&&h&&h.nb()}function W(b){!U&&a.j(i.ve,g,b)}function L(){p=w.pInstance;h&&h.vd(p)}e.zb=function(e,c){c=c||v;if(x.length&&!z){b.z(c);if(!Q){Q=d;a.j(i.ue,g);b.f(x,function(a){if(!b.v(a,"src")){a.src=b.m(a,"src2")||"";b.Cb(a,a["display-origin"])}})}b.ne(x,j,b.I(f,K,e,c))}else K(e,c)};e.te=function(){if(q==1){e.Cd();I(g,g)}else{var a;if(F)a=F.je(q);if(a){var h=fb=b.Z(),c=g+lb,d=C[t(c)];return d.zb(b.I(f,T,c,d,a,h),v)}else Cb(lb)}};e.jc=function(){I(g,g,d)};e.Cd=function(){p&&p.xe();p&&p.we();e.Ed();h&&h.se();h=f;G()};e.Ae=function(){b.R(m)};e.Ed=function(){b.z(m)};e.Je=function(){p&&p.Nb()};function P(a,f,c,h){if(b.v(a,Ob))return;if(!H){if(a.tagName=="IMG"){x.push(a);if(!b.v(a,"src")){N=d;a["display-origin"]=b.Cb(a);b.R(a)}}var e=b.ae(a);if(e){var g=new Image;b.m(g,"src2",e);x.push(g)}c&&b.B(a,(b.B(a)||0)+1)}var i=b.Hb(a);b.f(i,function(a){var e=a.tagName,g=b.m(a,"u");if(g=="player"&&!w){w=a;if(w.pInstance)L();else b.c(w,"dataavailable",L)}if(g=="caption"){if(f){b.Af(a,b.m(a,"to"));b.zf(a,b.m(a,"bf"));B&&b.m(a,"3d")&&b.jf(a,"preserve-3d")}}else if(!H&&!c&&!j){if(e=="A"){if(b.m(a,"u")=="image")j=b.rf(a,"IMG");else j=b.oc(a,"image",d);if(j){J=a;b.C(J,kb);y=b.fb(J,d);b.lc(y,0);b.qb(y,"backgroundColor","#000")}}else if(e=="IMG"&&b.m(a,"u")=="image")j=a;if(j){j.border=0;b.C(j,kb)}}P(a,f,c+1,h)})}e.gc=function(c,b){var a=S-b;Ub(E,a)};e.ob=g;o.call(e);B=b.m(m,"p");b.kf(m,B);b.lf(m,b.m(m,"po"));var D=b.oc(m,"thumb",d);if(D){b.fb(D);b.R(D)}b.z(m);v=b.fb(X);b.B(v,1e3);b.c(m,"click",W);G(d);e.Ec=j;e.bd=y;e.ad=m;e.kc=E=m;b.Q(E,v);a.ub(203,I);a.ub(28,ab);a.ub(24,Z)}function Cc(z,g,p,q){var c=this,n=0,v=0,h,j,f,e,m,t,r,o=C[g];l.call(c,0,0);function w(){b.nc(V);Wb&&m&&o.bd&&b.Q(V,o.bd);b.z(V,!m&&o.Ec)}function x(){c.pc()}function y(a){r=a;c.nb();c.pc()}c.pc=function(){var b=c.pb();if(!B&&!cb&&!r&&s==g){if(!b){if(h&&!m){m=d;c.Kd(d);a.j(i.Le,g,n,v,h,e)}w()}var k,p=i.Lc;if(b!=e)if(b==f)k=e;else if(b==j)k=f;else if(!b)k=j;else k=c.Gc();a.j(p,g,b,n,j,f,e);var l=u&&(!J||N);if(b==e)(f!=e&&!(J&12)||l)&&o.te();else(l||b!=f)&&c.Jc(k,x)}};c.ze=function(){f==e&&f==c.pb()&&c.N(j)};c.se=function(){F&&F.ob==g&&F.rb();var b=c.pb();b<e&&a.j(i.Lc,g,-b-1,n,j,f,e)};c.Kd=function(a){p&&b.Ob(bb,a&&p.dd.Of?"":"hidden")};c.gc=function(c,b){if(m&&b>=h){m=k;w();o.Ed();F.rb();a.j(i.ef,g,n,v,h,e)}a.j(i.Me,g,b,n,j,f,e)};c.vd=function(a){if(a&&!t){t=a;a.ub($JssorPlayer$.Nd,y)}};p&&c.tc(p);h=c.ic();c.tc(q);j=h+q.zd;e=c.ic();f=u?h+q.yd:e}function Qb(a,c,d){b.O(a,c);b.K(a,d)}function Ub(c,b){var a=z>0?z:ab,d=(vb*b+Lb)*(a&1),e=(wb*b+Lb)*(a>>1&1);Qb(c,d,e)}function Mb(a){if(!(D&1))a=c.min(P,c.max(a,H));return a}function cc(a){return!(D&1)&&(a-H<.0001||P-a<.0001)}function gc(){Nb=cb;ac=A.Gc();I=x.cb()}function Yb(){gc();if(B||!N&&J&12){A.nb();a.j(i.df)}}function Xb(g){if(!B&&(N||!(J&12))&&!A.Zc()){var b=x.cb(),a=I,f=0;if(g&&c.abs(T)>=n.fd){a=b;f=rb}if(cc(b)){if(!g||U)a=c.round(a)}else a=c.ceil(a);a=Mb(a+f);if(!(D&1)){if(P-a<.5)a=P;if(a-H<.5)a=H}var d=c.abs(a-b);if(d<1&&n.ld!=e.xb)d=1-c.pow(1-d,5);if(!U&&Nb)A.Zd(ac);else if(b==a){Rb.Je();Rb.jc()}else A.dc(b,a,d*tb)}}function Zb(a){!b.yb(b.hc(a),"nodrag")&&b.Kb(a)}function Ac(a){qc(a,1)}function qc(c,g){var e=b.hc(c);ub=k;var l=b.yb(e,"1",bc);if((!l||l===v)&&!Y&&(!g||c.touches.length==1)){ub=b.yb(e,"nodrag")||!mb||!Bc();var n=b.yb(e,h,m.Cc);if(n)dc=b.v(n,m.Cc);if(g){var p=c.touches[0];Sb=p.clientX;Tb=p.clientY}else{var o=b.pd(c);Sb=o.x;Tb=o.y}B=d;fb=f;b.c(j,g?"touchmove":"mousemove",Eb);b.Z();U=0;Yb();if(!Nb)z=0;T=0;qb=0;rb=0;a.j(i.cf,t(I),I,c)}}function Eb(g){if(B){var a;if(g.type!="mousemove")if(g.touches.length==1){var o=g.touches[0];a={x:o.clientX,y:o.clientY}}else jb();else a=b.pd(g);if(a){var e=a.x-Sb,f=a.y-Tb;if(z||c.abs(e)>1.5||c.abs(f)>1.5){if(c.floor(I)!=I)z=z||ab&Y;if((e||f)&&!z){if(Y==3)if(c.abs(f)>c.abs(e))z=2;else z=1;else z=Y;if(sb&&z==1&&c.abs(f)>c.abs(e)*2.4)ub=d}var n=f,i=wb;if(z==1){n=e;i=vb}if(T-qb<-1.5)rb=0;else if(T-qb>1.5)rb=-1;qb=T;T=n;Z=I-T/i/dc;if(!(D&1)){var l=0,j=[-I+E,0,I-q+L-G/w-E];b.f(j,function(b,d){if(b>0){var a=c.pow(b,1/1.6);a=c.tan(a*c.PI/2);l=(a-b)*(d-1)}});var h=l+Z,m=k;j=[-h+E,0,h-q+L+G/w-E];b.f(j,function(a,b){if(a>0){a=c.min(a,i);a=c.atan(a)*2/c.PI;a=c.pow(a,1.6);Z=a*(b-1)+E;if(b)Z+=q-L-G/w;m=d}});if(!m)Z=h}if(T&&z&&!ub){b.Kb(g);if(!cb)A.gf(Z);else A.Ce(Z)}}}}}function jb(){zc();if(B){U=T;b.Z();b.J(j,"mousemove",Eb);b.J(j,"touchmove",Eb);U&&u&8&&(u=0);A.nb();B=k;var c=x.cb();a.j(i.bf,t(c),c,t(I),I);J&12&&gc();Xb(d)}}function vc(c){var a=b.hc(c),d=b.yb(a,"1",Ob);if(v===d)if(U){b.nf(c);while(a&&v!==a){(a.tagName=="A"||b.v(a,"data-jssor-button"))&&b.Kb(c);a=a.parentNode}}else u&4&&(u=0)}function rc(d){if(d!=s){var b=nb.pb(),a=Mb(d),e=c.round(t(a));if(b-a<.5)a=b;C[s];s=e;Rb=C[s];x.N(a)}}function Ic(b,c){z=0;rc(b);if(u&2&&(lb>0&&s==q-1||lb<0&&!s))u=0;a.j(i.af,s,c)}function mc(a,d,e){if(!(D&1)){a=c.max(0,a);a=c.min(a,q-L+E);a=c.round(a)}a=t(a);b.f(gb,function(b){b.ac(a,d,e)})}function Bc(){var b=i.Fc||0,a=mb;i.Fc|=a;return Y=a&~b}function zc(){if(Y){i.Fc&=~mb;Y=0}}function pc(){var a=b.rc();b.C(a,kb);return a}function t(b,a){a=a||q||1;return(b%a+a)%a}function Kb(c,a,b){u&8&&(u=0);xb(c,tb,a,b)}function Bb(){b.f(gb,function(a){a.Yb(a.Ib.Pf<=N)})}function tc(){if(!N){N=1;Bb();if(!B){J&12&&Xb();J&3&&C[s]&&C[s].jc()}}a.j(i.Ze)}function sc(){if(N){N=0;Bb();B||!(J&12)||Yb()}a.j(i.Ye)}function uc(){b.f(hb,function(a){b.C(a,kb);b.Ob(a,"hidden");b.R(a)});b.C(X,kb)}function Cb(b,a){xb(b,a,d)}function xb(l,f,m,o){if(!B&&(N||!(J&12))||n.nd){cb=d;B=k;A.nb();if(f==h)f=tb;var b=t(nb.pb()),e=l;if(m){e=b+l;e=c.round(e)}var a=e;if(!(D&1)){if(o)a=t(a);else if(D&2&&(a<0&&c.abs(b-H)<.0001||a>q-L&&c.abs(b-P)<.0001))a=a<0?P:H;a=Mb(a);if(P-a<.5)a=P;if(a-H<.5)a=H}var j=(a-b)%q;a=b+j;var g=b==a?0:f*c.abs(j),i=1;if(S>1)i=(ab&1?Ab:zb)/w;g=c.min(g,f*i*1.5);A.dc(b,a,g||1)}}a.Bb=function(a){if(a==h)return u;if(a!=u){u=a;u&&C[s]&&C[s].jc()}};a.U=function(){return K};a.gb=function(){return R};a.Xe=function(b){if(b==h)return Db||K;a.Tb(b,b/K*R)};a.Tb=function(c,a,d){b.p(v,c);b.s(v,a);Vb=c/K;nc=a/R;b.f(ec,function(a){a.Tb(Vb,nc,d)});if(!Db){b.sb(bb,y);b.K(bb,0);b.O(bb,0)}Db=c};a.qf=function(a){return c.abs(a-H)<.0001};a.Bf=function(a){return c.abs(a-P)<.0001};a.Mc=function(){a.Bb(u||1)};a.Jb=function(B,m){a.Y=v=b.wb(B);K=b.p(v);R=b.s(v);n=b.G({Db:0,ye:1,vb:1,xc:0,Bb:0,Fb:1,Ac:d,nd:d,Ue:1,Hc:3e3,rd:1,sd:500,ld:e.Ve,fd:20,qd:0,Te:1,od:1,ud:1},m);n.Ac=n.Ac&&b.If();if(n.Re!=h)n.Hc=n.Re;if(n.Qe!=h)n.F=n.Qe;if(n.Pe!=h)n.Kc=n.Pe;ab=n.od&3;ob=n.We;eb=b.G({H:r},n.Lf);yb=n.Oe;db=n.Ne;W=n.Mf;!n.Te;var o=b.Hb(v);b.f(o,function(a,d){var c=b.m(a,"u");if(c=="loading")X=a;else{if(c=="slides")y=a;if(c=="navigator")Gb=a;if(c=="arrowleft")Jb=a;if(c=="arrowright")Ib=a;if(c=="thumbnavigator")pb=a;if(a.tagName!="STYLE"&&a.tagName!="SCRIPT")ec[c||d]=new wc(a,c=="slides",b.Xc(["slides","thumbnavigator"])[c])}});X=X||b.rc(j);Ab=b.p(y);zb=b.s(y);O=n.Hf||Ab;M=n.Df||zb;kb={n:O,o:M,g:0,i:0,Qb:"block",bb:"absolute"};G=n.qd;vb=O+G;wb=M+G;w=ab&1?vb:wb;var i=ab&1?Ab:zb;lb=n.Ue;J=n.rd;hc=n.Hc;tb=n.sd;Hb=new yc;if(n.Ac&&(!b.Cf()||sb))Qb=function(a,c,d){b.Gb(a,{kb:c,lb:d})};u=n.Bb&63;a.Ib=m;b.v(v,Ob,"1");b.B(y,b.B(y)||0);b.jb(y,"absolute");bb=b.fb(y,d);b.sb(bb,y);ib=new Ec;b.Q(bb,ib.kc);b.Ob(y,"hidden");J&=sb?10:5;var s=b.Hb(y),I=b.Xc(["DIV","A","LI"]);b.f(s,function(a){I[a.tagName.toUpperCase()]&&!b.m(a,"u")&&hb.push(a);b.B(a,(b.B(a)||0)+1)});V=pc();b.qb(V,"backgroundColor","#000");b.lc(V,0);b.B(V,0);b.sb(V,y.firstChild,y);q=hb.length;if(q){uc();Q=n.Kc;if(Q==h)Q=(i-w+G)/2;L=i/w;S=c.min(q,n.F||q,c.ceil(L));kc=S<q;D=kc?n.Fb:0;if(q*w-G<=i){L=q-G/w;Q=(i-w+G)/2;Lb=(i-w*q+G)/2}if(ob){Wb=ob.Qf;Pb=ob.H;ic=!Q&&S==1&&q>1&&Pb&&(!b.md()||b.gd()>=9)}if(!(D&1)){E=Q/w;if(E>q-1){E=q-1;Q=E*w}H=E;P=H+q-L-G/w}mb=(S>1||Q?ab:-1)&n.ud;Fb.Jd&&b.qb(y,Fb.Jd,([f,"pan-y","pan-x","none"])[mb]||"");if(ic)F=new Pb(Hb,O,M,ob,sb,Qb);for(var k=0;k<hb.length;k++){var x=hb[k],z=new Dc(x,k);C.push(z)}b.R(X);nb=new Fc;A=new xc(nb,ib);b.c(v,"click",vc,d);b.c(v,"mouseleave",tc);b.c(v,"mouseenter",sc);b.c(v,"mousedown",qc);b.c(v,"touchstart",Ac);b.c(v,"dragstart",Zb);b.c(v,"selectstart",Zb);b.c(g,"mouseup",jb);b.c(j,"mouseup",jb);b.c(j,"touchend",jb);b.c(j,"touchcancel",jb);b.c(g,"blur",jb);if(Gb&&yb){jc=new yb.H(Gb,yb,K,R);gb.push(jc)}if(db&&Jb&&Ib){db.Fb=D;lc=new db.H(Jb,Ib,db,K,R,a);gb.push(lc)}if(pb&&W){W.xc=n.xc;W.vb=W.vb||0;fc=new W.H(pb,W);!W.Nf&&b.v(pb,bc,"1");gb.push(fc)}b.f(gb,function(a){a.bc(q,C,X);a.ub(p.Bc,Kb)});b.qb(v,"visibility","visible");a.Tb(K,R);Bb();n.vb&&b.c(j,"keydown",function(a){if(a.keyCode==37)Kb(-n.vb,d);else a.keyCode==39&&Kb(n.vb,d)});var l=n.xc;l=t(l);xb(l,0)}};b.Jb(a)};i.ve=21;i.cf=22;i.bf=23;i.Fe=24;i.Ee=25;i.ue=26;i.Be=27;i.df=28;i.Ye=31;i.Ze=32;i.Ge=202;i.af=203;i.Le=206;i.ef=207;i.Me=208;i.Lc=209;jssor_1_slider_init=function(){var e=[{uc:800,L:2}],f={Bb:1,F:1,Kc:0,We:{H:t,fc:e,Rd:1},Ne:{H:u},Oe:{H:s}},d=new i("jssor_1",f),h=980;function a(){var e=d.Y.parentNode,b=e.clientWidth;if(b){var f=c.min(h||b,b);d.Xe(f)}else g.setTimeout(a,30)}a();b.c(g,"load",a);b.c(g,"resize",a);b.c(g,"orientationchange",a)}}(window,document,Math,null,true,false)
                    </script>
                    <style>
                    .jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssorb051 .i{position:absolute;cursor:pointer}.jssorb051 .i .b{fill:#fff;fill-opacity:.5}.jssorb051 .i:hover .b{fill-opacity:.7}.jssorb051 .iav .b{fill-opacity:1}.jssorb051 .i.idn{opacity:.3}.jssora051{display:block;position:absolute;cursor:pointer}.jssora051 .a{fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10}.jssora051:hover{opacity:.8}.jssora051.jssora051dn{opacity:.5}.jssora051.jssora051ds{opacity:.3;pointer-events:none}
                    </style>
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:-10px;width:400px;height:280px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:380px;height:280px;overflow:hidden;">
                        
                     
                    <?php
                          foreach($imgs as $i){ ?>
                                 <div>
                                <img data-toggle="modal" data-target="#myModal" data-u="image" src="<?= base_url(); ?>uploads/imagenes/thumbs/<?=$i['file_name'];?>" />
                                </div>
                        <?php }  
                    
                      ?>
                   
                    
                    
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:10px;height:10px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:-10;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                    </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:25px;height:25px;top:0px;left:-5px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:25px;height:25px;top:0px;right:15px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                    </div>
                    </div>
                    <script type="text/javascript">jssor_1_slider_init();</script>
                    <!-- #endregion Jssor Slider End -->
                     
               <?php     
                } ?> <!-- else imgs false -->
        	
        	 </div>
        	 <div class="col-md-6 break-word">
        	     <h3><?=$nombre;?></h3>
        	    <h4> Precio <b>$<?=$precio?></b></h4> 
        	 </div>
              
            </div>
            
        </div>	
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
                
                <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Descripcion</a></li>
              <li><a href="#tab_2" data-toggle="tab">Tecnico</a></li>
              <li><a href="#tab_3" data-toggle="tab">Despacho</a></li>
              
              
            </ul>
            <div class="tab-content break-word">
              <div class="tab-pane active" id="tab_1">
                

                <?=$descripcion;?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <?=$desc_tecnica;?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <?=$desc_despacho;?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
            
        </div>
    </div>

	
	<!--
	
    <div class="row">
        <div class="col-md-6">
             <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Headlines</h3>
            </div>
           
            <div class="box-body">
              
              <h6>h6. Bootstrap heading</h6>
              <button type="button" class="btn btn-primary btn-mg" data-toggle="modal" data-target="#myModal">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva
                            </button>
            </div>
          
          </div>
            
        </div>
    </div>      
        
-->
        
      
      
<!-- Modal -->
<!--
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Categoria</h4>
      </div>
      <div class="modal-body">
		<div id="resultado">
		</div>
        
        <?php
                          foreach($imgs as $i){ ?>
                                 <div>
                                <img data-toggle="modal" data-target="#myModal" data-u="image" src="<?= base_url(); ?>uploads/imagenes/thumbs/<?=$i['file_name'];?>" />
                                </div>
                        <?php }  
                    
                      ?>
        
      </div>
      <div class="modal-footer">
        <button type="button" id="btncerrarmodal" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnGuardarModal" class="btn btn-primary" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>
-->
 <!-- FIN MODAL -->	
   	
			
			
</div>
		

	

	

    
    
	
	<script type="text/javascript">
	var baseurl = "<?= base_url(); ?>";
	</script>

	
</div>


	