(function(root,factory){if(typeof define==='function'&&define.amd){define(function(){return factory(root)})}else if(typeof exports==='object'){module.exports=factory}else{root.echo=factory(root)}})(this,function(root){'use strict';var echo={};var callback=function(){};var offset,poll,delay,useDebounce,unload;var inView=function(element,view){var box=element.getBoundingClientRect();return(box.right>=view.l&&box.bottom>=view.t&&box.left<=view.r&&box.top<=view.b)};var debounceOrThrottle=function(){if(!useDebounce&&!!poll){return}clearTimeout(poll);poll=setTimeout(function(){echo.render();poll=null},delay)};echo.init=function(opts){opts=opts||{};var offsetAll=opts.offset||0;var offsetVertical=opts.offsetVertical||offsetAll;var offsetHorizontal=opts.offsetHorizontal||offsetAll;var optionToInt=function(opt,fallback){return parseInt(opt||fallback,10)};offset={t:optionToInt(opts.offsetTop,offsetVertical),b:optionToInt(opts.offsetBottom,offsetVertical),l:optionToInt(opts.offsetLeft,offsetHorizontal),r:optionToInt(opts.offsetRight,offsetHorizontal)};delay=optionToInt(opts.throttle,250);useDebounce=opts.debounce!==false;unload=!!opts.unload;callback=opts.callback||callback;echo.render();if(document.addEventListener){root.addEventListener('scroll',debounceOrThrottle,false);root.addEventListener('load',debounceOrThrottle,false)}else{root.attachEvent('onscroll',debounceOrThrottle);root.attachEvent('onload',debounceOrThrottle)}};echo.render=function(){var nodes=document.querySelectorAll('img[data-echo], [data-echo-background]');var length=nodes.length;var src,elem;var view={l:0-offset.l,t:0-offset.t,b:(root.innerHeight||document.documentElement.clientHeight)+offset.b,r:(root.innerWidth||document.documentElement.clientWidth)+offset.r};for(var i=0;i<length;i++){elem=nodes[i];if(inView(elem,view)){if(unload){elem.setAttribute('data-echo-placeholder',elem.src)}if(elem.getAttribute('data-echo-background')!==null){elem.style.backgroundImage="url("+elem.getAttribute('data-echo-background')+")"}else{elem.src=elem.getAttribute('data-echo')}if(!unload){elem.removeAttribute('data-echo');elem.removeAttribute('data-echo-background')}callback(elem,'load')}else if(unload&&!!(src=elem.getAttribute('data-echo-placeholder'))){if(elem.getAttribute('data-echo-background')!==null){elem.style.backgroundImage="url("+src+")"}else{elem.src=src}elem.removeAttribute('data-echo-placeholder');callback(elem,'unload')}}if(!length){echo.detach()}};echo.detach=function(){if(document.removeEventListener){root.removeEventListener('scroll',debounceOrThrottle)}else{root.detachEvent('onscroll',debounceOrThrottle)}clearTimeout(poll)};return echo});

jQuery(function($) {	
	$.fn.slide = function(options) {
		var settings = {
            'display' : '._slidepic',
            'pointer' : '._slidetit',
            'onclass' : 'current',
            'position' : '',
            'speed' : 7000
        };
		if (options) {
			$.extend(settings, options)
		}
		var _this = this;

        var displayobj, pointerobj, i=0, num=0, timer;
        var timesc = function(){
        	if (settings.speed == 0) {
        		return;
        	};
			var _this = this;
			clearTimeout(timer);
			timer = setTimeout(function() {
				next();
			}, settings.speed);
		}
		var next = function(p){
			if(p===undefined){
				var ni = (i+1>=num)?0:i+1;
			}else{
				var ni = (p>=num)?0:p;
			}
			pointerobj.removeClass(settings.onclass).eq(ni).addClass(settings.onclass);
			displayobj.eq(ni).fadeIn(0).siblings().fadeOut(0);
			i = ni;
			timesc();
		}
		var init = function(){
			displayobj	= $(_this).find(settings.display).children();
			pointerobj	= $(_this).find(settings.pointer).children();
			num = pointerobj.length;
			if (settings.position) {
				displayobj.css('position',settings.position);
			};
			
			displayobj.hide().eq(i).show();
			pointerobj.removeClass(settings.onclass).eq(i).addClass(settings.onclass);
			pointerobj.mouseover(function(){
				next(pointerobj.index($(this)));
			});
			timesc();
		}
        init();
    }

	$('._slide').slide();
	$('._helplide').slide({display:'._helplidelist',pointer:'._helplidetit',speed:0});
	$('._flslide').slide({display:'._flslidelist',pointer:'._flslidetit'});

//返回顶部
jQuery("#h2o-scrollTop").hide();
	jQuery(function () {
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop()>200){
				jQuery("#h2o-scrollTop").show();
			}else{
				jQuery("#h2o-scrollTop").hide();
			}
		});
		jQuery("#h2o-scrollTop").click(function(){
			jQuery('body,html').animate({scrollTop:0},1000);
			return false;
		});
	});


});
   
   jQuery(document).ready(function() {
       var h2o_item_list = function($children, n) {
	    //显示某jquery元素下的前n个隐藏的子元素
        var $hiddenChildren = $children.filter(":hidden");
        var cnt = $hiddenChildren.length;
        for (var i = 0; i < n && i < cnt; i++) {
            $hiddenChildren.eq(i).fadeIn();
        }
        return cnt - n; //返回还剩余的隐藏子元素的数量
    }

  //对页中现有的class=showMorehandle的元素，在之后添加显示更多条，并绑定点击行为
    jQuery(".h2o_item_list").each(function() {
        var pagenum = jQuery(this).attr("pagenum") || 10;
        var $children = jQuery(this).children();
        if ($children.length > pagenum) {
            for (var i = pagenum; i < $children.length; i++) {
                 $children.eq(i).hide();
            }
           jQuery(".load-more_htn").click(function() {
                if (h2o_item_list($children, pagenum) <= 0) {
				    //如果目标元素已经没有隐藏的子元素了，显示指定跳转链接
				    jQuery(".load-more_htn").hide();jQuery(".load-morelink").show();
				 };
              });
            }
        });

  jQuery('.tab-link').mouseover(function () {
      var tab = jQuery(this).data('tab');
      var type = jQuery(this).parent().data('type');
      if (type == 'hover') {
         jQuery(this).addClass('active').siblings().removeClass('active');
         jQuery('#tab-' + tab + '').addClass('active').siblings().removeClass('active');
       }
    });
});