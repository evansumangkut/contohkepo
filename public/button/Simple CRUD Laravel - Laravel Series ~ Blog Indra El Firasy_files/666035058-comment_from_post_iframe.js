(function (){ var f="",g=" ",l='"',n="#",aa="%",p="%$1",ba="%s",ca="&",da="(\\d*)(\\D*)",ea="*",fa=",",ga="-src",q=".",r="/",ha="//",ia="0",ja="00",ka="000",t=":",la=": ",ma="=",na="?",oa="@",pa="Assertion failed",qa="Edge",ra="Node cannot be null or undefined.",sa="[",ta="[object Array]",ua="[object Function]",va="[object Window]",wa="\\u",xa="]",u="array",ya="backgroundColor",za="blogger-comment-from-post",Aa="blogger-iframe-colorize",Ba="blogspotRpcToken",Ca="boolean",Da="call",Ea="color",Fa="comment-editor",
Ga="fontFamily",v="function",Ha="g",Ia="http://www.blogger.com/unvisited-link-",Ja="iframe",Ka="inherit",La="message",w="null",Ma="number",z="object",Na="onmessage",Oa="rgb(0, 0, 0)",Pa="rgba(0, 0, 0, 0)",Qa="serif",Ra="set-comment-editor-height",Sa="splice",Ta="string",Ua="transparent",Va="{",Wa="}",A,B=this,C=function(a){var b=typeof a;if(b==z)if(a){if(a instanceof Array)return u;if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if(c==va)return z;if(c==ta||typeof a.length==
Ma&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable(Sa))return u;if(c==ua||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable(Da))return v}else return w;else if(b==v&&"undefined"==typeof a.call)return z;return b},D=function(a){return typeof a==Ta},Xa=function(a,b){function c(){}c.prototype=b.prototype;a.T=b.prototype;a.prototype=new c;a.S=function(a,c,h){for(var k=Array(arguments.length-2),m=2;m<arguments.length;m++)k[m-
2]=arguments[m];return b.prototype[c].apply(a,k)}};var E=function(a){if(Error.captureStackTrace)Error.captureStackTrace(this,E);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))};Xa(E,Error);var Ya=function(a,b){for(var c=a.split(ba),d=f,e=Array.prototype.slice.call(arguments,1);e.length&&1<c.length;)d+=c.shift()+e.shift();return d+c.join(ba)},Za=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,f)},F=function(a,b){return a<b?-1:a>b?1:0};var $a=function(a,b){b.unshift(a);E.call(this,Ya.apply(null,b));b.shift()};Xa($a,E);var ab=function(a,b,c){if(!a){var d=Array.prototype.slice.call(arguments,2),e=pa;if(b)var e=e+(la+b),h=d;throw new $a(f+e,h||[]);}return a};var G=Array.prototype,bb=G.indexOf?function(a,b,c){ab(null!=a.length);return G.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;if(D(a))return D(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},cb=function(a){return G.concat.apply(G,arguments)},db=function(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]};var eb=function(a){var b=arguments.length;if(1==b&&C(arguments[0])==u)return eb.apply(null,arguments[0]);for(var c={},d=0;d<b;d++)c[arguments[d]]=!0;return c};eb("area base br col command embed hr img input keygen link meta param source track wbr".split(" "));var H;a:{var fb=B.navigator;if(fb){var gb=fb.userAgent;if(gb){H=gb;break a}}H=f};var I=function(){return-1!=H.indexOf(qa)};var hb=-1!=H.indexOf("Opera")||-1!=H.indexOf("OPR"),J=-1!=H.indexOf(qa)||-1!=H.indexOf("Trident")||-1!=H.indexOf("MSIE"),K=-1!=H.indexOf("Gecko")&&!(-1!=H.toLowerCase().indexOf("webkit")&&!I())&&!(-1!=H.indexOf("Trident")||-1!=H.indexOf("MSIE"))&&!I(),ib=-1!=H.toLowerCase().indexOf("webkit")&&!I(),jb=function(){var a=H;if(K)return/rv\:([^\);]+)(\)|;)/.exec(a);if(J&&I())return/Edge\/([\d\.]+)/.exec(a);if(J)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(ib)return/WebKit\/(\S+)/.exec(a)},kb=function(){var a=
B.document;return a?a.documentMode:void 0},lb=function(){if(hb&&B.opera){var a=B.opera.version;return C(a)==v?a():a}var a=f,b=jb();b&&(a=b?b[1]:f);return J&&!I()&&(b=kb(),b>parseFloat(a))?String(b):a}(),mb={},nb=function(a){var b;if(!(b=mb[a])){b=0;for(var c=Za(String(lb)).split(q),d=Za(String(a)).split(q),e=Math.max(c.length,d.length),h=0;0==b&&h<e;h++){var k=c[h]||f,m=d[h]||f,S=RegExp(da,Ha),zb=RegExp(da,Ha);do{var x=S.exec(k)||[f,f,f],y=zb.exec(m)||[f,f,f];if(0==x[0].length&&0==y[0].length)break;
b=F(0==x[1].length?0:parseInt(x[1],10),0==y[1].length?0:parseInt(y[1],10))||F(0==x[2].length,0==y[2].length)||F(x[2],y[2])}while(0==b)}b=mb[a]=0<=b}return b},ob=B.document,pb=kb(),qb=!ob||!J||!pb&&I()?void 0:pb||("CSS1Compat"==ob.compatMode?parseInt(lb,10):5);!K&&!J||J&&J&&(I()||9<=qb)||K&&nb("1.9.1");J&&nb("9");var rb=function(a,b){return D(b)?a.getElementById(b):b},sb=function(a,b,c,d){a=d||a;var e=b&&b!=ea?b.toUpperCase():f;if(a.querySelectorAll&&a.querySelector&&(e||c))return a.querySelectorAll(e+(c?q+c:f));if(c&&a.getElementsByClassName){b=a.getElementsByClassName(c);if(e){a={};for(var h=d=0,k;k=b[h];h++)e==k.nodeName&&(a[d++]=k);a.length=d;return a}return b}b=a.getElementsByTagName(e||ea);if(c){a={};for(h=d=0;k=b[h];h++){var e=k.className,m;if(m=typeof e.split==v)m=0<=bb(e.split(/\s+/),c);m&&(a[d++]=
k)}a.length=d;return a}return b},tb=function(a){ab(a,ra);return 9==a.nodeType?a:a.ownerDocument||a.document};var L=function(a){this.s=a};L.prototype.serialize=function(a){var b=[];this.v(a,b);return b.join(f)};L.prototype.v=function(a,b){switch(typeof a){case Ta:this.C(a,b);break;case Ma:this.P(a,b);break;case Ca:b.push(a);break;case "undefined":b.push(w);break;case z:if(null==a){b.push(w);break}if(C(a)==u){this.serializeArray(a,b);break}this.Q(a,b);break;case v:break;default:throw Error("Unknown type: "+typeof a);}};
var M={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},ub=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g;L.prototype.C=function(a,b){b.push(l,a.replace(ub,function(a){if(a in M)return M[a];var b=a.charCodeAt(0),e=wa;16>b?e+=ka:256>b?e+=ja:4096>b&&(e+=ia);return M[a]=e+b.toString(16)}),l)};L.prototype.P=function(a,b){b.push(isFinite(a)&&!isNaN(a)?a:w)};
L.prototype.serializeArray=function(a,b){var c=a.length;b.push(sa);for(var d=f,e=0;e<c;e++)b.push(d),d=a[e],this.v(this.s?this.s.call(a,String(e),d):d,b),d=fa;b.push(xa)};L.prototype.Q=function(a,b){b.push(Va);var c=f,d;for(d in a)if(Object.prototype.hasOwnProperty.call(a,d)){var e=a[d];typeof e!=v&&(b.push(c),this.C(d,b),b.push(t),this.v(this.s?this.s.call(a,d,e):e,b),c=fa)}b.push(Wa)};var vb="StopIteration"in B?B.StopIteration:Error("StopIteration"),N=function(){};N.prototype.next=function(){throw vb;};N.prototype.K=function(){return this};var O=function(a,b){this.e={};this.c=[];this.t=this.b=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else a&&this.L(a)};A=O.prototype;A.k=function(){this.p();for(var a=[],b=0;b<this.c.length;b++)a.push(this.e[this.c[b]]);return a};A.n=function(){this.p();return this.c.concat()};A.m=function(a){return P(this.e,a)};
A.remove=function(a){return P(this.e,a)?(delete this.e[a],this.b--,this.t++,this.c.length>2*this.b&&this.p(),!0):!1};A.p=function(){if(this.b!=this.c.length){for(var a=0,b=0;a<this.c.length;){var c=this.c[a];P(this.e,c)&&(this.c[b++]=c);a++}this.c.length=b}if(this.b!=this.c.length){for(var d={},b=a=0;a<this.c.length;)c=this.c[a],P(d,c)||(this.c[b++]=c,d[c]=1),a++;this.c.length=b}};A.get=function(a,b){return P(this.e,a)?this.e[a]:b};
A.set=function(a,b){P(this.e,a)||(this.b++,this.c.push(a),this.t++);this.e[a]=b};A.L=function(a){var b;if(a instanceof O)b=a.n(),a=a.k();else{b=[];var c=0,d;for(d in a)b[c++]=d;c=[];d=0;for(var e in a)c[d++]=a[e];a=c}for(e=0;e<b.length;e++)this.set(b[e],a[e])};A.forEach=function(a,b){for(var c=this.n(),d=0;d<c.length;d++){var e=c[d],h=this.get(e);a.call(b,h,e,this)}};A.clone=function(){return new O(this)};
A.K=function(a){this.p();var b=0,c=this.c,d=this.e,e=this.t,h=this,k=new N;k.next=function(){for(;;){if(e!=h.t)throw Error("The map has changed since the iterator was created");if(b>=c.length)throw vb;var k=c[b++];return a?k:d[k]}};return k};var P=function(a,b){return Object.prototype.hasOwnProperty.call(a,b)};var wb=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/,xb=function(a){if(Q){Q=!1;var b=B.location;if(b){var c=b.href;if(c&&(c=(c=xb(c)[3]||null)?decodeURI(c):c)&&c!=b.hostname)throw Q=!0,Error();}}return a.match(wb)},Q=ib,yb=function(a,b){for(var c=a.split(ca),d=0;d<c.length;d++){var e=c[d].indexOf(ma),h=null,k=null;0<=e?(h=c[d].substring(0,e),k=c[d].substring(e+1)):h=c[d];b(h,k?decodeURIComponent(k.replace(/\+/g,g)):f)}};var R=function(a,b){var c;a instanceof R?(this.d=void 0!==b?b:a.d,this.I(a.l),this.J(a.A),this.D(a.q),this.G(a.r),this.setPath(a.getPath()),this.H(a.h.clone()),this.F(a.u)):a&&(c=xb(String(a)))?(this.d=!!b,this.I(c[1]||f,!0),this.J(c[2]||f,!0),this.D(c[3]||f,!0),this.G(c[4]),this.setPath(c[5]||f,!0),this.H(c[6]||f,!0),this.F(c[7]||f,!0)):(this.d=!!b,this.h=new T(null,null,this.d))};A=R.prototype;A.l=f;A.A=f;A.q=f;A.r=null;A.B=f;A.u=f;A.O=!1;A.d=!1;
A.toString=function(){var a=[],b=this.l;b&&a.push(U(b,Ab,!0),t);if(b=this.q){a.push(ha);var c=this.A;c&&a.push(U(c,Ab,!0),oa);a.push(encodeURIComponent(String(b)).replace(/%25([0-9a-fA-F]{2})/g,p));b=this.r;null!=b&&a.push(t,String(b))}if(b=this.getPath())this.N()&&b.charAt(0)!=r&&a.push(r),a.push(U(b,b.charAt(0)==r?Bb:Cb,!0));(b=this.M())&&a.push(na,b);(b=this.u)&&a.push(n,U(b,Db));return a.join(f)};A.clone=function(){return new R(this)};
A.I=function(a,b){this.g();if(this.l=b?V(a,!0):a)this.l=this.l.replace(/:$/,f);return this};A.J=function(a,b){this.g();this.A=b?V(a):a;return this};A.D=function(a,b){this.g();this.q=b?V(a,!0):a;return this};A.N=function(){return!!this.q};A.G=function(a){this.g();if(a){a=Number(a);if(isNaN(a)||0>a)throw Error("Bad port number "+a);this.r=a}else this.r=null;return this};A.getPath=function(){return this.B};A.setPath=function(a,b){this.g();this.B=b?V(a,!0):a;return this};
A.H=function(a,b){this.g();a instanceof T?(this.h=a,this.h.w(this.d)):(b||(a=U(a,Eb)),this.h=new T(a,null,this.d));return this};A.M=function(){return this.h.toString()};A.R=function(a,b){this.g();this.h.set(a,b);return this};A.F=function(a,b){this.g();this.u=b?V(a):a;return this};A.g=function(){if(this.O)throw Error("Tried to modify a read-only Uri");};A.w=function(a){this.d=a;this.h&&this.h.w(a);return this};
var V=function(a,b){return a?b?decodeURI(a):decodeURIComponent(a):f},U=function(a,b,c){return D(a)?(a=encodeURI(a).replace(b,Fb),c&&(a=a.replace(/%25([0-9a-fA-F]{2})/g,p)),a):null},Fb=function(a){a=a.charCodeAt(0);return aa+(a>>4&15).toString(16)+(a&15).toString(16)},Ab=/[#\/\?@]/g,Cb=/[\#\?:]/g,Bb=/[\#\?]/g,Eb=/[\#\?@]/g,Db=/#/g,T=function(a,b,c){this.f=a||null;this.d=!!c};A=T.prototype;
A.i=function(){if(!this.a&&(this.a=new O,this.b=0,this.f)){var a=this;yb(this.f,function(b,c){a.add(decodeURIComponent(b.replace(/\+/g,g)),c)})}};A.a=null;A.b=null;A.add=function(a,b){this.i();this.o();a=this.j(a);var c=this.a.get(a);c||this.a.set(a,c=[]);c.push(b);this.b++;return this};A.remove=function(a){this.i();a=this.j(a);return this.a.m(a)?(this.o(),this.b-=this.a.get(a).length,this.a.remove(a)):!1};A.m=function(a){this.i();a=this.j(a);return this.a.m(a)};
A.n=function(){this.i();for(var a=this.a.k(),b=this.a.n(),c=[],d=0;d<b.length;d++)for(var e=a[d],h=0;h<e.length;h++)c.push(b[d]);return c};A.k=function(a){this.i();var b=[];if(D(a))this.m(a)&&(b=cb(b,this.a.get(this.j(a))));else{a=this.a.k();for(var c=0;c<a.length;c++)b=cb(b,a[c])}return b};A.set=function(a,b){this.i();this.o();a=this.j(a);this.m(a)&&(this.b-=this.a.get(a).length);this.a.set(a,[b]);this.b++;return this};A.get=function(a,b){var c=a?this.k(a):[];return 0<c.length?String(c[0]):b};
A.setValues=function(a,b){this.remove(a);0<b.length&&(this.o(),this.a.set(this.j(a),db(b)),this.b+=b.length)};A.toString=function(){if(this.f)return this.f;if(!this.a)return f;for(var a=[],b=this.a.n(),c=0;c<b.length;c++)for(var d=b[c],e=encodeURIComponent(String(d)),d=this.k(d),h=0;h<d.length;h++){var k=e;d[h]!==f&&(k+=ma+encodeURIComponent(String(d[h])));a.push(k)}return this.f=a.join(ca)};A.o=function(){this.f=null};
A.clone=function(){var a=new T;a.f=this.f;this.a&&(a.a=this.a.clone(),a.b=this.b);return a};A.j=function(a){a=String(a);this.d&&(a=a.toLowerCase());return a};A.w=function(a){a&&!this.d&&(this.i(),this.o(),this.a.forEach(function(a,c){var d=c.toLowerCase();c!=d&&(this.remove(c),this.setValues(d,a))},this));this.d=a};var Gb=function(a,b,c){var d;a:{d=tb(b);if(d.defaultView&&d.defaultView.getComputedStyle&&(d=d.defaultView.getComputedStyle(b,null))){d=d[a]||d.getPropertyValue(a)||f;break a}d=f}d=d||(b.currentStyle?b.currentStyle[a]:null)||b.style&&b.style[a];return null==d||d==Ka||d==Ua||d==Pa?(d=tb(b),b!=d.body&&b.parentNode?W(a,b.parentNode):c):d},W=function(a,b){return Gb(a,b,Oa)},Hb=function(){for(var a=sb(document,Ja,Aa,void 0),b=0;b<a.length;b++){var c=a[b],d=rb(document,c.id+ga),e=d.href,h=W(Ea,c),k=W(ya,
c),m=Gb(Ga,c,Qa);d.href=Ia+(new Date).valueOf();var S=W(Ea,d),d=d.href=e,e=encodeURIComponent,h=(new L(void 0)).serialize({color:h,backgroundColor:k,unvisitedLinkColor:S,fontFamily:m}),e=d+(n+e(h));c.src=e}};var Ib=-1;var Jb=function(){Ib=Math.floor(1E7*Math.random());for(var a=sb(document,Ja,za,void 0),b=0;b<a.length;b++){var c=rb(document,a[b].id+ga),d=new R(c.href);d.R(Ba,Ib);c.href=d.toString()}Hb();a=function(a){0==a.data.indexOf(Ra)&&(document.getElementById(Fa).height=a.data.substring(26))};window.addEventListener?window.addEventListener(La,a,!1):window.attachEvent&&window.attachEvent(Na,a)},X=["BLOG_CMT_createIframe"],Y=B;X[0]in Y||!Y.execScript||Y.execScript("var "+X[0]);
for(var Z;X.length&&(Z=X.shift());)X.length||void 0===Jb?Y=Y[Z]?Y[Z]:Y[Z]={}:Y[Z]=Jb; })()