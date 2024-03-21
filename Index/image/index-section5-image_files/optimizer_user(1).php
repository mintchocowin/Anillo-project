$(document).ready(function(){
    headerChanger();
    asideToggle();
    newsBanner();
    hideAsideSlogan();
    
});

function newsBanner(){
	$(".newsban_wrap .swiper_newsbanner .news-cls").click(function(){
    	$(".newsban_wrap").css({"height":"0px"});
        
        //#contents margin change
        $("#contents").css({"margin":"90px auto 100px auto"});
    });
    
    var swiper_newsbanner = new Swiper('.swiper_newsbanner', {
        // Optional parameters
        spaceBetween: 0,
        roundLengths: true,
        observer: true,
        observeParents: true,
        direction: 'vertical',
        slidesPerView: 1,
        loop: true,
        freeMode: false,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        }
    });
}

function headerChanger(){
    var href = window.location.href;
    console.log('location' + href);
    
    //header change when on mainpage
    if(href === "https://anillo.co.kr/" || href === "https://anillo.co.kr/#" || href === "https://anillo.co.kr/#none" || href === "https://anillo.co.kr/index.html" || href === "https://anillo.co.kr/index.html#" ||  
       href === "https://www.anillo.co.kr/" || href === "https://www.anillo.co.kr/#" || href === "https://www.anillo.co.kr/#none" || href === "https://www.anillo.co.kr/index.html" || href === "https://www.anillo.co.kr/index.html#" ||  
       href === "http://anillo.co.kr/" || href === "http://anillo.co.kr/#" || href === "http://anillo.co.kr/index.html" || href === "http://anillo.co.kr/index.html#" || 
       href === "http://skin-skin9.anillo1.cafe24.com/index.html" || href === "http://skin-skin9.anillo1.cafe24.com/index.html#" || href === "http://skin-skin9.anillo1.cafe24.com/" || href === "http://skin-skin9.anillo1.cafe24.com/#"){
        //메인 페이지일 경우
        $("#header .gnb-wrap-black").css({"display":"none"});
        $("#header .gnb-wrap-white").css({"display":"block"});
        $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,0)"});
        //m_contents 마진 없애기
        $("#m_contents").css({"margin":"0px auto 0px"});
        
        $(window).scroll(function(){
            var topl = $(window).scrollTop();
            if(topl === 0){
                $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,0)"});
            }else{
                $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,1)"});
            }
        });
    }else if(href.indexOf("anillo.co.kr/?&utm_source=naverbs") >= 0){//네이버 통해서 들어올떄
        console.log("네이버 통해서 접속");
        //메인 페이지일 경우
        $("#header .gnb-wrap-black").css({"display":"none"});
        $("#header .gnb-wrap-white").css({"display":"block"});
        $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,0)"});
        //m_contents 마진 없애기
        $("#m_contents").css({"margin":"0px auto 0px"});
        
        $(window).scroll(function(){
            var topl = $(window).scrollTop();
            if(topl === 0){
                $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,0)"});
            }else{
                $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,1)"});
            }
        });
    }else{
        //메인 페이지가 아닐 경우
        $("#header .gnb-wrap-black").css({"display":"block"});
        $("#header .gnb-wrap-white").css({"display":"none"});
        $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,1)"});
        //m_contents 마진 넣기
        $("#m_contents").css({"margin":"90px auto 100px"});
        
        $(window).scroll(function(){
            var topl = $(window).scrollTop();
            if(topl === 0){
                $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,1)"});
            }else{
                $("#header #top_wrap").css({"border-bottom":"1px solid rgba(224,222,217,1)"});
            }
        });
    }
    
	$(window).scroll(function() {
        var topl = $(window).scrollTop();
        //header backgroud
        $("#top_wrap").addClass("scroll_up");
        if(topl === 0){
            $("#top_wrap").removeClass("scroll_up");
            $("#top_wrap").addClass("scroll_down");
        }
        //main page header
            $("#header .gnb-wrap-white #logo a img").attr("src", "/anilo_renewal/logo01.png");
            $("#header .gnb-wrap-white #top_right li:nth-child(1) a img").attr("src", "/anilo_renewal/ico-search01.png");
            $("#header .gnb-wrap-white #top_right li:nth-child(2) a img").attr("src", "/anilo_renewal/ico-mypg01.png");
            $("#header .gnb-wrap-white #top_right li:nth-child(3) a img").attr("src", "/anilo_renewal/ico-bsk01.png");
            $("#header .gnb-wrap-white #top_right ul li.xans-layout-orderbasketcount a span").css({"color":"#1e1e1e"});
            $(".gnb-wrap-white #nav #menu li.anilo-hamburg img").attr("src", "/anilo_renewal/ico-ham01.png");
        	
        if(topl === 0){
            $("#header .gnb-wrap-white #logo a img").attr("src", "/anilo_renewal/logo02.png");
            $("#header .gnb-wrap-white #top_right li:nth-child(1) a img").attr("src", "/anilo_renewal/ico-search02.png");
            $("#header .gnb-wrap-white #top_right li:nth-child(2) a img").attr("src", "/anilo_renewal/ico-mypg02.png");
            $("#header .gnb-wrap-white #top_right li:nth-child(3) a img").attr("src", "/anilo_renewal/ico-bsk02.png");
            $("#header .gnb-wrap-white #top_right ul li.xans-layout-orderbasketcount a span").css({"color":"#fafaf6"});
            $(".gnb-wrap-white #nav #menu li.anilo-hamburg img").attr("src", "/anilo_renewal/ico-ham02.png");
        }
	});
}

function asideToggle(){
	$(".anilo-aside .aside-menu li").click(function(){
        
        $(".anilo-aside .aside-menu li ul.sub_m").css({"display":"none"});
        $(".anilo-aside .aside-menu li > a.addplus").removeClass("dropdown");
        $(".anilo-aside .aside-menu li a").removeClass("colorChange");
        
        const target = $(this).children(".sub_m");
        const plusbtn = $(this).children("a.addplus");
        const fontColor = $(this).find('a');
        target.slideToggle();
        //plusbtn.toggleClass("dropdown");
        //fontColor.toggleClass("colorChange"); 
        plusbtn.addClass("dropdown");
        fontColor.addClass("colorChange"); 
    });
    
    //open & close
    $(".anilo-aside .aside-cls").click(function(){
    	$(".anilo-aside").css({"left":"-400px"});
    });
    $("#nav #menu li.anilo-hamburg img").click(function(){
    	$(".anilo-aside").css({"left":"0px"});
    });
}

function hideAsideSlogan(){
	const val = $(window).height();
    if(val < 920){
    	$(".anilo-aside img.aside-slogan").css({"display":"none"});
    }else{
    	$(".anilo-aside img.aside-slogan").css({"display":"block"});
    }
    
    $(window).resize(function(){
        const val = $(window).height();
        console.log(val);
        if(val < 920){
            $(".anilo-aside img.aside-slogan").css({"display":"none"});
        }else{
        	$(".anilo-aside img.aside-slogan").css({"display":"block"});
        }
    });
}













/*
 * Superfish v1.4.8 - jQuery menu widget
 * Copyright (c) 2008 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 * CHANGELOG: http://users.tpg.com.au/j_birch/plugins/superfish/changelog.txt
 */
(function($){
	$.fn.superfish = function(op){

		var sf = $.fn.superfish,
			c = sf.c,
			$arrow = $(['<span class="',c.arrowClass,'"> &#187;</span>'].join('')),
			over = function(){
				var $$ = $(this), menu = getMenu($$);
				clearTimeout(menu.sfTimer);
				$$.showSuperfishUl().siblings().hideSuperfishUl();
			},
			out = function(){
				var $$ = $(this), menu = getMenu($$), o = sf.op;
				clearTimeout(menu.sfTimer);
				menu.sfTimer=setTimeout(function(){
					o.retainPath=($.inArray($$[0],o.$path)>-1);
					$$.hideSuperfishUl();
					if (o.$path.length && $$.parents(['li.',o.hoverClass].join('')).length<1){over.call(o.$path);}
				},o.delay);	
			},
			getMenu = function($menu){
				var menu = $menu.parents(['ul.',c.menuClass,':first'].join(''))[0];
				sf.op = sf.o[menu.serial];
				return menu;
			},
			addArrow = function($a){ $a.addClass(c.anchorClass).append($arrow.clone()); };
			
		return this.each(function() {
			var s = this.serial = sf.o.length;
			var o = $.extend({},sf.defaults,op);
			o.$path = $('li.'+o.pathClass,this).slice(0,o.pathLevels).each(function(){
				$(this).addClass([o.hoverClass,c.bcClass].join(' '))
					.filter('li:has(ul)').removeClass(o.pathClass);
			});
			sf.o[s] = sf.op = o;
			
			$('li:has(ul)',this)[($.fn.hoverIntent && !o.disableHI) ? 'hoverIntent' : 'hover'](over,out).each(function() {
				if (o.autoArrows) addArrow( $('>a:first-child',this) );
			})
			.not('.'+c.bcClass)
				.hideSuperfishUl();
			
			var $a = $('a',this);
			$a.each(function(i){
				var $li = $a.eq(i).parents('li');
				$a.eq(i).focus(function(){over.call($li);}).blur(function(){out.call($li);});
			});
			o.onInit.call(this);
			
		}).each(function() {
			var menuClasses = [c.menuClass];
			if (sf.op.dropShadows  && !($.browser.msie && $.browser.version < 7)) menuClasses.push(c.shadowClass);
			$(this).addClass(menuClasses.join(' '));
		});
	};

	var sf = $.fn.superfish;
	sf.o = [];
	sf.op = {};
	sf.IE7fix = function(){
		var o = sf.op;
		if ($.browser.msie && $.browser.version > 6 && o.dropShadows && o.animation.opacity!=undefined)
			this.toggleClass(sf.c.shadowClass+'-off');
		};
	sf.c = {
		bcClass     : 'sf-breadcrumb',
		menuClass   : 'sf-js-enabled',
		anchorClass : 'sf-with-ul',
		arrowClass  : 'sf-sub-indicator',
		shadowClass : 'sf-shadow'
	};
	sf.defaults = {
		hoverClass	: 'sfHover',
		pathClass	: 'overideThisToUse',
		pathLevels	: 1,
		delay		: 800,
		animation	: {opacity:'show'},
		speed		: 'normal',
		autoArrows	: true,
		dropShadows : true,
		disableHI	: false,		// true disables hoverIntent detection
		onInit		: function(){}, // callback functions
		onBeforeShow: function(){},
		onShow		: function(){},
		onHide		: function(){}
	};
	$.fn.extend({
		hideSuperfishUl : function(){
			var o = sf.op,
				not = (o.retainPath===true) ? o.$path : '';
			o.retainPath = false;
			var $ul = $(['li.',o.hoverClass].join(''),this).add(this).not(not).removeClass(o.hoverClass)
					.find('>ul').hide().css('visibility','hidden');
			o.onHide.call($ul);
			return this;
		},
		showSuperfishUl : function(){
			var o = sf.op,
				sh = sf.c.shadowClass+'-off',
				$ul = this.addClass(o.hoverClass)
					.find('>ul:hidden').css('visibility','visible');
			sf.IE7fix.call($ul);
			o.onBeforeShow.call($ul);
			$ul.animate(o.animation,o.speed,function(){ sf.IE7fix.call($ul); o.onShow.call($ul); });
			return this;
		}
	});

})(jQuery);
jQuery(document).ready(function($){
						    
if (jQuery().superfish) {
		jQuery('ul.menu').superfish({
			delay: 230,
			animation: {opacity:'show', height:'show'},
			speed: 'fast',
			autoArrows: false,
			dropShadows: false
		}); 

	}	

    
	});
var TINY={};

function T$(i){return document.getElementById(i)}
function T$$(e,p){return p.getElementsByTagName(e)}

TINY.dropdown=function(){
	var p={fade:1,slide:1,active:0,timeout:200}, init=function(n,o){
		for(s in o){p[s]=o[s]} p.n=n; this.build()
	};
	init.prototype.build=function(){
		this.h=[]; this.c=[]; this.z=1000;
		var s=T$$('ul',T$(p.id)), l=s.length, i=0; p.speed=p.speed?p.speed*.1:.5;
		for(i;i<l;i++){
			var h=s[i].parentNode; this.h[i]=h; this.c[i]=s[i];
			h.onmouseover=new Function(p.n+'.show('+i+',1)');
			h.onmouseout=new Function(p.n+'.show('+i+')')
		}
	};
	init.prototype.show=function(x,d){
		var c=this.c[x], h=this.h[x];
		clearInterval(c.t); clearInterval(c.i); c.style.overflow='hidden';
		if(d){
			if(p.active&&h.className.indexOf(p.active)==-1){h.className+=' '+p.active}
			if(p.fade||p.slide){
				c.style.display='block';
				if(!c.m){
					if(p.slide){
						c.style.visibility='hidden'; c.m=c.offsetHeight; c.style.height='0'; c.style.visibility=''
					}else{
						c.m=100; c.style.opacity=0; c.style.filter='alpha(opacity=0)'
					}
					c.v=0
				}
				if(p.slide){
					if(c.m==c.v){
						c.style.overflow='visible'
					}else{
						c.style.zIndex=this.z; this.z++; c.i=setInterval(function(){slide(c,c.m,1)},20)
					}
				}else{
					c.style.zIndex=this.z; this.z++; c.i=setInterval(function(){slide(c,c.m,1)},20)
				}
			}else{
				c.style.zIndex=this.z; c.style.display='block'
			}
		}else{
			c.t=setTimeout(function(){hide(c,p.fade||p.slide?1:0,h,p.active)},p.timeout)
		}
	};
	function hide(c,t,h,s){
		if(s){h.className=h.className.replace(s,'')}
		if(t){c.i=setInterval(function(){slide(c,0,-1)},20)}else{c.style.display='none'}
	}
	function slide(c,t,d){
		if(c.v==t){
			clearInterval(c.i); c.i=0;
			if(d==1){
				if(p.fade){c.style.filter=''; c.style.opacity=1}
				c.style.overflow='visible'
			}
		}else{
			c.v=(t-Math.floor(Math.abs(t-c.v)*p.speed)*d);
			if(p.slide){c.style.height=c.v+'px'}
			if(p.fade){var o=c.v/c.m; c.style.opacity=o; c.style.filter='alpha(opacity='+(o*100)+')'}
		}
	}
	return{init:init}
}();
/**
 * 움직이는 배너 Jquery Plug-in
 * @author  cafe24
 */

(function($){

    $.fn.floatBanner = function(options) {
        options = $.extend({}, $.fn.floatBanner.defaults , options);

        return this.each(function() {
            var aPosition = $(this).position();
            var jbOffset = $(this).offset();
            var node = this;

            $(window).scroll(function() {
                var _top = $(document).scrollTop();
                _top = (aPosition.top < _top) ? _top : aPosition.top;

                setTimeout(function () {
                    var newinit = $(document).scrollTop();

                    if ( newinit > jbOffset.top ) {
                        _top -= jbOffset.top;
                        var container_height = $("#wrap").height();
                        var quick_height = $(node).height();
                        var cul = container_height - quick_height;
                        if(_top > cul){
                            _top = cul;
                        }
                    }else {
                        _top = 0;
                    }

                    $(node).stop().animate({top: _top}, options.animate);
                }, options.delay);
            });
        });
    };

    $.fn.floatBanner.defaults = {
        'animate'  : 500,
        'delay'    : 500
    };

})(jQuery);

/**
 * 문서 구동후 시작
 */
$(document).ready(function(){
    $('#banner:visible, #quick:visible').floatBanner();

    //placeholder
    $(".ePlaceholder input, .ePlaceholder textarea").each(function(i){
        var placeholderName = $(this).parents().attr('title');
        $(this).attr("placeholder", placeholderName);
    });
    /* placeholder ie8, ie9 */
    $.fn.extend({
        placeholder : function() {
            //IE 8 버전에는 hasPlaceholderSupport() 값이 false를 리턴
           if (hasPlaceholderSupport() === true) {
                return this;
            }
            //hasPlaceholderSupport() 값이 false 일 경우 아래 코드를 실행
            return this.each(function(){
                var findThis = $(this);
                var sPlaceholder = findThis.attr('placeholder');
                if ( ! sPlaceholder) {
                   return;
                }
                findThis.wrap('<label class="ePlaceholder" />');
                var sDisplayPlaceHolder = $(this).val() ? ' style="display:none;"' : '';
                findThis.before('<span' + sDisplayPlaceHolder + '>' + sPlaceholder + '</span>');
                this.onpropertychange = function(e){
                    e = event || e;
                    if (e.propertyName == 'value') {
                        $(this).trigger('focusout');
                    }
                };
                //공통 class
                var agent = navigator.userAgent.toLowerCase();
                if (agent.indexOf("msie") != -1) {
                    $(".ePlaceholder").css({"position":"relative"});
                    $(".ePlaceholder span").css({"position":"absolute", "padding":"0 4px", "color":"#878787"});
                    $(".ePlaceholder label").css({"padding":"0"});
                }
            });
        }
    });

    $(':input[placeholder]').placeholder(); //placeholder() 함수를 호출

    //클릭하면 placeholder 숨김
    $('body').delegate('.ePlaceholder span', 'click', function(){
        $(this).hide();
    });

    //input창 포커스 인 일때 placeholder 숨김
    $('body').delegate('.ePlaceholder :input', 'focusin', function(){
        $(this).prev('span').hide();
    });

    //input창 포커스 아웃 일때 value 가 true 이면 숨김, false 이면 보여짐
    $('body').delegate('.ePlaceholder :input', 'focusout', function(){
        if (this.value) {
            $(this).prev('span').hide();
        } else {
            $(this).prev('span').show();
        }
    });

    //input에 placeholder가 지원이 되면 true를 안되면 false를 리턴값으로 던져줌
    function hasPlaceholderSupport() {
        if ('placeholder' in document.createElement('input')) {
            return true;
        } else {
            return false;
        }
    }
});

/**
 *  썸네일 이미지 엑박일경우 기본값 설정
 */
$(window).load(function() {
    $("img.thumb,img.ThumbImage,img.BigImage").each(function($i,$item){
        var $img = new Image();
        $img.onerror = function () {
                $item.src="//img.echosting.cafe24.com/thumb/img_product_big.gif";
        }
        $img.src = this.src;
    });
});


/**
 *  이미지오버효과
 */

  $(function(){     
       $('.rollover').each(function(){
           var img = $(this).find('img'); 
           var img_off = img.attr('src');   
           var img_on = img_off.replace('_off','_on');
           $(this).hover(
                function(){
                  img.attr('src',img_on).css('opacity','0.5').animate({'opacity':'1'},400);         
                },
               function(){
                 img.attr('src',img_off).css('opacity','0.5').animate({'opacity':'1'},400);      
              }  
          );
       });  
      }); 



//window popup script
function winPop(url) {
    window.open(url, "popup", "width=300,height=300,left=10,top=10,resizable=no,scrollbars=no");
}
/**
 * document.location.href split
 * return array Param
 */
function getQueryString(sKey)
{
    var sQueryString = document.location.search.substring(1);
    var aParam       = {};

    if (sQueryString) {
        var aFields = sQueryString.split("&");
        var aField  = [];
        for (var i=0; i<aFields.length; i++) {
            aField = aFields[i].split('=');
            aParam[aField[0]] = aField[1];
        }
    }

    aParam.page = aParam.page ? aParam.page : 1;
    return sKey ? aParam[sKey] : aParam;
};

$(document).ready(function(){
    // tab
    $.eTab = function(ul){
        $(ul).find('a').click(function(){
            var _li = $(this).parent('li').addClass('selected').siblings().removeClass('selected'),
                _target = $(this).attr('href'),
                _siblings = '.' + $(_target).attr('class');
            $(_target).show().siblings(_siblings).hide();
            return false
        });
    }
    if ( window.call_eTab ) {
        call_eTab();
    };
});
(function($){
$.fn.extend({
    center: function() {
        this.each(function() {
            var
                $this = $(this),
                $w = $(window);
            $this.css({
                position: "absolute",
                top: ~~(($w.height() - $this.outerHeight()) / 2) + $w.scrollTop() + "px",
                left: ~~(($w.width() - $this.outerWidth()) / 2) + $w.scrollLeft() + "px"
            });
        });
        return this;
    }
});
$(function() {
    var $container = function(){/*
<div id="modalContainer">
    <iframe id="modalContent" scroll="0" scrolling="no" frameBorder="0"></iframe>
</div>');
*/}.toString().slice(14,-3);
    $('body')
    .append($('<div id="modalBackpanel"></div>'))
    .append($($container));
    function closeModal () {
        $('#modalContainer').hide();
        $('#modalBackpanel').hide();
    }
    $('#modalBackpanel').click(closeModal);
    zoom = function ($piProductNo, $piCategoryNo, $piDisplayGroup) {
        var $url = '/product/image_zoom.html?product_no=' + $piProductNo + '&cate_no=' + $piCategoryNo + '&display_group=' + $piDisplayGroup;
        $('#modalContent').attr('src', $url);
        $('#modalContent').bind("load",function(){
            $(".header .close",this.contentWindow.document.body).bind("click", closeModal);
        });
        $('#modalBackpanel').css({width:$("body").width(),height:$("body").height(),opacity:.4}).show();
        $('#modalContainer').center().show();
    }
});
})(jQuery);
(function($) {
	$(document).ready(function() {		
		//특정레이어 따라 다니기
		function leftMove() {
			var docHeight = $(document).innerHeight();
			var container = $('div.wrap_default');
			var init_top = container.offset().top;
			var containerTop = container.innerHeight() + init_top;
			var scrollTop;
			$(window).scroll(function() {
				scrollTop = $(window).scrollTop();
				if(docHeight <= containerTop + scrollTop) scrollTop = docHeight - containerTop;
				container.css({marginTop: scrollTop});
			});
		}
		//$(window).load(leftMove);
		
	//맨 위로 이동	
		$('#scroll_top').click(function(e) {
			$('body, html').stop().animate({scrollTop:0}, 500);
			e.preventDefault();
		});
		var scrollTimer = null;		
		$(window).scroll(function(e) {
			clearTimeout(scrollTimer);
			scrollTimer = setTimeout(function() {
				var scrollTop = $(window).scrollTop();
				if(scrollTop > 100) $('#scroll_top').fadeIn(600);
				else $('#scroll_top').fadeOut(200);
			}, 100);
		});
	});
}(jQuery));



(function($) {
	$(document).ready(function() {	
		
		
		//맨 아래로 이동	
		$('#scroll_bottom').click(function(e) {
			$('body, html').stop().animate({scrollTop:$(document).height()},500);
			e.preventDefault();
		});
		

	});
}(jQuery));


   
    
$(document).ready(function(){
    //review 임시로 숨기기
    reviewHide();
    
    searchPopup();
    anilloMainslider();
    anilloBestslider();
    newPrdWidth();
    bestPrdHeight();
    prdPercentage2();
    stocklistPg();
    boardListToggle();
    boardTabs();
    eventEnd();
});

function reviewHide(){
    //review 임시로 숨기기
    var href = window.location.href;
    if(href.indexOf("board_no=4") >= 0 || href.indexOf("/board/review/4/") >= 0){//REVIEW
        $(".xans-board-listpackage .ec-base-table").css({"display":"none"});
        $(".xans-board-buttonlist.ec-base-button.typeBG").css({"display":"none"});
        $(".ec-base-paginate").css({"display":"none"});
    }else{
    	$(".xans-board-listpackage .ec-base-table").css({"display":"block"});
        $(".xans-board-buttonlist.ec-base-button.typeBG").css({"display":"block"});
        $(".ec-base-paginate").css({"display":"block"});
    }
}

function searchPopup(){
    //open popup
	$("#header #top_right ul li a.poplight").click(function(){
    	$("#searchBarForm .anillo-popup").fadeIn(300, 'linear', function(){
            $(this).css({"top":"0"});
        });
    });
    //close popup
    $("#searchBarForm .anillo-popup a.pop-close img").click(function(){
        console.log("hey");
        $("#searchBarForm .anillo-popup").fadeOut(100, 'linear', function(){
            $(this).css({"top":"-50px"});
        });
    });
}

function anilloMainslider(){
    const swiper = new Swiper('.anillo-mainslide.swiper', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
     /*   scrollbar: {
            el: '.swiper-scrollbar',
        },*/
    });
}

function anilloBestslider(){
    const swiper = new Swiper('.anillo-bestprd.swiper', {
        // Optional parameters
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
           delay: 5000,
         },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
     /*   scrollbar: {
            el: '.swiper-scrollbar',
        }, */
    });
}

function newPrdWidth(){
	const getL = $(".xans-product-listmain-6 .prdList > li").length;
    //console.log(getL);
    if(getL === 3){
    	$(".xans-product-listmain-6 .prdList > li").css({"width":"33.3333%"});
    }else if(getL === 4){
        $(".xans-product-listmain-6 .prdList > li").css({"width":"25%"});
    }else{
        $(".xans-product-listmain-6 .prdList > li").css({"width":"25%"});
    }
}

function bestPrdHeight(){
	const getHthumb = $(".xans-product-listmain-5 .prdList li .box .thumbnail").height();
    const getHInfo = $(".xans-product-listmain-5 .prdList li .box .prd_infos").height();
    const val = (getHthumb - getHInfo)/2;
    
    $(".xans-product-listmain-5 .prdList li .box .prd_infos").css({"margin-top":val+"px"});
}

function prdPercentage(){ //할인율 노출 및 판매가 스타일 변경
    $('.xans-product-normalpackage .xans-product-listnormal ul.prdList > li').each(function() {

        /*할인율 관련 variable*/
        const havePer = $(this).find('.box ul.spec2 > li').length;
        const valPer = $(this).find('.box ul.spec2 > li:nth-child(3) > span > span').text();
        const PerTxt = $(this).find('.box .sale-percentage');
        PerTxt.append(valPer);
        
        /*판매가 관련 variable*/
        const saleYN = $(this).find('.box ul.spec2 > li:nth-child(2) > span');

        if(havePer === 2 || havePer === 1){
        	//할인 진행 X
            PerTxt.css({"display":"none"});
        }else{
            //할인 진행 O
            PerTxt.css({"display":"block"});
            saleYN.css({"color":"#a0a0a0","font-size":"11px"});
        }
    });
}

function prdPercentage2(){ //할인율 노출 및 판매가 스타일 변경
    $('.xans-product ul.prdList > li').each(function() {

        /*할인율 관련 variable*/
        const havePer = $(this).find('.box .prd_infos ul.spec2 > li').length;
        const valPer = $(this).find('.box .prd_infos ul.spec2 > li:nth-child(3) > span > span').text();
        const PerTxt = $(this).find('.box .sale-percentage');
        PerTxt.append(valPer);
        
        /*판매가 관련 variable*/
        const saleYN = $(this).find('.box .prd_infos ul.spec2 > li:nth-child(2) > span');

        if(havePer === 2 || havePer === 1){
        	//할인 진행 X
            PerTxt.css({"display":"none"});
        }else{
            //할인 진행 O
            PerTxt.css({"display":"block"});
            saleYN.css({"color":"#a0a0a0","font-size":"11px"});
        }
    });
}

function stocklistPg(){
    
    //stocklist open && close
	$(".stock-wrap .stockin .stock-list .more-btn").click(function(){
        const target = $(this).next(".more-list");
        target.slideToggle();
        target.toggleClass('sopen');
        
        if(target.hasClass("sopen") === true){ 
            // class가 존재함
            $(this).empty().append('CLOSE');
        }else{
            // class가 존재하지않음
            $(this).empty().append('MORE');
        }
    });
    
    //count map no.
    $(".stock-wrap .stockin .stock-list").each(function(){
    	var mapCount = $(this).find('.more-list li').length;
        var mapFin = $(this).find('.house h6');
        if(mapCount === 0){
            //map 이 하나일 경우
            mapFin.css({"display":"none"});
        }else{
            mapFin.css({"display":"inline-block"});
            $(mapFin).append("("+mapCount+")");
        }
    });
    
    //stocklist tab
    $(".stock-tabs li").click(function(){
    	const getIndex = $(this).index()+1;
        //console.log(getIndex);
        $(".stock-tabs li").removeClass('now');
        $(this).addClass('now');
        $(".stock-wrap").css({"display":"none"});
        $(".stock-wrap"+getIndex).css({"display":"block"});
    });
}

function boardListToggle(){
	$(".anillo-board .boardlist p.bdin").click(function(){
        const target = $(this).parent().find(".bdcnt");
        target.slideToggle();
        $(this).toggleClass("dropdown");
    });
}

function boardTabs(){
	var href = window.location.href;
    //reset tab
    $(".bbs_tit li a").removeClass("info-this");
    
    if(href.indexOf("board_no=4") >= 0 || href.indexOf("/board/review/4/") >= 0){//REVIEW
        $(".bbs_tit li:nth-child(1) a").addClass("info-this");
    }else if(href.indexOf("board_no=1") >= 0 || href.indexOf("/board/notice/1/") >= 0){//NOTICE
        $(".bbs_tit li:nth-child(2) a").addClass("info-this");
    }else if(href.indexOf("board_no=6") >= 0 || href.indexOf("/board/qa/6/") >= 0){//Q&A
        $(".bbs_tit li:nth-child(3) a").addClass("info-this");
    }else if(href.indexOf("board_no=3") >= 0 || href.indexOf("/board/faq/3/") >= 0){//FAQ
        $(".bbs_tit li:nth-child(4) a").addClass("info-this");
    }
}

function eventEnd(){
	$(".xans-board-listpackage-8 .xans-board-list-8 ul > li").each(function(){
        	const target = $(this).find("a .event-end");
        	target.find(".event-outer span").empty().append("이벤트 종료").css({"color":"#a0a0a0"});
    });
}


$(document).ready(function(){
    if (typeof(EC_SHOP_MULTISHOP_SHIPPING) != "undefined") {
        var sShippingCountryCode4Cookie = 'shippingCountryCode';
        var bShippingCountryProc = false;

        // 배송국가 선택 설정이 사용안함이면 숨김
        if (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShippingCountrySelection === false) {
            $('.xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist').hide();
            $('.xans-layout-multishoplist .xans-layout-multishoplistmultioption .xans-layout-multishoplistmultioptioncountry').hide();
        } else {
            $('.thumb .xans-layout-multishoplistitem').hide();
            var aShippingCountryCode = document.cookie.match('(^|;) ?'+sShippingCountryCode4Cookie+'=([^;]*)(;|$)');
            if (typeof(aShippingCountryCode) != 'undefined' && aShippingCountryCode != null && aShippingCountryCode.length > 2) {
                var sShippingCountryValue = aShippingCountryCode[2];
            }

            // query string으로 넘어 온 배송국가 값이 있다면, 그 값을 적용함
            var aHrefCountryValue = decodeURIComponent(location.href).split("/?country=");

            if (aHrefCountryValue.length == 2) {
                var sShippingCountryValue = aHrefCountryValue[1];
            }

            // 메인 페이지에서 국가선택을 안한 경우, 그 외의 페이지에서 셋팅된 값이 안 나오는 현상 처리
            if (location.href.split("/").length != 4 && $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val()) {
                $(".xans-layout-multishoplist .xans-layout-multishoplistmultioption a .ship span").text(" : "+$(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist option:selected").text().split("SHIPPING TO : ").join(""));

                if ($("#f_country").length > 0 && location.href.indexOf("orderform.html") > -1) {
                    $("#f_country").val($(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val());
                }
            }
            if (typeof(sShippingCountryValue) != "undefined" && sShippingCountryValue != "" && sShippingCountryValue != null) {
                sShippingCountryValue = sShippingCountryValue.split("#")[0];
                var bShippingCountryProc = true;

                $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val(sShippingCountryValue);
                $(".xans-layout-multishoplist .xans-layout-multishoplistmultioption a .ship span").text(" : "+$(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist option:selected").text().split("SHIPPING TO : ").join(""));
                var expires = new Date();
                expires.setTime(expires.getTime() + (30 * 24 * 60 * 60 * 1000)); // 30일간 쿠키 유지
                document.cookie = sShippingCountryCode4Cookie+'=' + $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val() +';path=/'+ ';expires=' + expires.toUTCString();
                if ($("#f_country").length > 0 && location.href.indexOf("orderform.html") > -1) {
                    $("#f_country").val(sShippingCountryValue).change();;
                }
            }
        }
        // 언어선택 설정이 사용안함이면 숨김
        if (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShippingLanguageSelection === false) {
            $('.xans-layout-multishopshipping .xans-layout-multishopshippinglanguagelist').hide();
            $('.xans-layout-multishoplist .xans-layout-multishoplistmultioption .xans-layout-multishoplistmultioptionlanguage').hide();
        } else {
            $('.thumb .xans-layout-multishoplistitem').hide();
        }

        // 배송국가 및 언어 설정이 둘 다 사용안함이면 숨김
        if (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShipping === false) {
            $(".xans-layout-multishopshipping").hide();
            $('.xans-layout-multishoplist .xans-layout-multishoplistmultioption').hide();
        } else if (bShippingCountryProc === false && location.href.split("/").length == 4) { // 배송국가 값을 처리한 적이 없고, 메인화면일 때만 선택 레이어를 띄움
            var sShippingCountryValue = $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val();
            $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val(sShippingCountryValue);
            $(".xans-layout-multishoplist .xans-layout-multishoplistmultioption a .ship span").text(" : "+$(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist option:selected").text().split("SHIPPING TO : ").join(""));
            // 배송국가 선택을 사용해야 레이어를 보이게 함
            if (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShippingCountrySelection === true) {
                $(".xans-layout-multishopshipping").show();
            }
        }

        $(".xans-layout-multishopshipping .close").bind("click", function() {
            $(".xans-layout-multishopshipping").hide();
        });

        $(".xans-layout-multishopshipping .ec-base-button a").bind("click", function() {
            var expires = new Date();
            expires.setTime(expires.getTime() + (30 * 24 * 60 * 60 * 1000)); // 30일간 쿠키 유지
            document.cookie = sShippingCountryCode4Cookie+'=' + $(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val() +';path=/'+ ';expires=' + expires.toUTCString();

            // 도메인 문제로 쿠키로 배송국가 설정이 안 되는 경우를 위해 query string으로 배송국가 값을 넘김
            var sQuerySting = (EC_SHOP_MULTISHOP_SHIPPING.bMultishopShippingCountrySelection === false) ? "" : "/?country="+encodeURIComponent($(".xans-layout-multishopshipping .xans-layout-multishopshippingcountrylist").val());

            location.href = '//'+$(".xans-layout-multishopshipping .xans-layout-multishopshippinglanguagelist").val()+sQuerySting;
        });
        $(".xans-layout-multishoplist .xans-layout-multishoplistmultioption a").bind("click", function() {
            $(".xans-layout-multishopshipping").show();
        });
    }
});
