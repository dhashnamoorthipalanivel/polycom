!function(t){t.fn.barfiller=function(i){var n,e,o=t.extend({barColor:"#16b597",tooltip:!0,duration:1e3,animateOnResize:!0,symbol:"%"},i),r=t(this),a=t.extend(o,i),s=r.width(),l=r.find(".fill"),u=r.find(".tip"),d=l.attr("data-percentage"),c=!1,f={init:function(){return this.each(function(){f.getTransitionSupport()&&(c=!0,e=f.getTransitionPrefix()),f.appendHTML(),f.setEventHandlers(),f.initializeItems()})},appendHTML:function(){l.css("background",a.barColor),a.tooltip||u.css("display","none"),u.text(d+a.symbol)},setEventHandlers:function(){a.animateOnResize&&t(window).on("resize",function(t){clearTimeout(n),n=setTimeout(function(){f.refill()},300)})},initializeItems:function(){var t=f.calculateFill(d);r.find(".tipWrap").css({display:"inline"}),c?f.transitionFill(t):f.animateFill(t)},getTransitionSupport:function(){var t=(document.body||document.documentElement).style;return void 0!==t.transition||void 0!==t.WebkitTransition||void 0!==t.MozTransition||void 0!==t.MsTransition||void 0!==t.OTransition},getTransitionPrefix:function(){return/mozilla/.test(navigator.userAgent.toLowerCase())&&!/webkit/.test(navigator.userAgent.toLowerCase())?"-moz-transition":/webkit/.test(navigator.userAgent.toLowerCase())?"-webkit-transition":/opera/.test(navigator.userAgent.toLowerCase())?"-o-transition":/msie/.test(navigator.userAgent.toLowerCase())?"-ms-transition":"transition"},getTransition:function(t,i,n){var o;return"width"===n?o={width:t}:"left"===n&&(o={left:t}),i/=1e3,o[e]=n+" "+i+"s ease-in-out",o},refill:function(){l.css("width",0),u.css("left",0),s=r.width(),f.initializeItems()},calculateFill:function(t){return s*(t*=.01)},transitionFill:function(t){var i=t-u.width();l.css(f.getTransition(t,a.duration,"width")),u.css(f.getTransition(i,a.duration,"left"))},animateFill:function(t){var i=t-u.width();l.stop().animate({width:"+="+t},a.duration),u.stop().animate({left:"+="+i},a.duration)}};return f[i]?f[i].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof i&&i?void t.error('Method "'+method+'" does not exist in barfiller plugin!'):f.init.apply(this)}}(jQuery);