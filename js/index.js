Zepto(function($){
	//左侧导航栏与内容来回切换
    $(".navBtn").tap(function(){
        var left = $(".leftNav").css("left");
        left = parseInt(left);
        if(left<0){
            $(".main").animate({ marginLeft : 403},100);
            $(".leftNav").animate({ left : 0},100);
            $(this).addClass("leftShow");
            if($(".floatNav").css("top")=="0px"){
                $(".floatNav").animate({left:406},100);
            }
            setTimeout(function () {
                //alert("0.6s");
                $('.leftNav').css({"z-index":"999"});
                $('.floatNav').css({"pointer-events":"none"});

            }, 600);

        }else{
            $(".main").animate({marginLeft:0},100);
            $(".leftNav").animate({left:-403},100);
            $(this).removeClass("leftShow");
            $(".floatNav").animate({left:0},100);
            setTimeout(function () {
                $('.leftNav').css({"z-index":"-999"});
                $('.floatNav').css({"pointer-events":"auto"});
            }, 600);
        }
    })
    $(".mainCon").tap(function(){
        var  leftShow = $(".navBtn").hasClass("leftShow");
        if(leftShow){
            $(".leftNav").animate({left:-403},100);
            $(".main").animate({marginLeft:0},100);
            $(".floatNav").animate({left:0},100);
            setTimeout(function () {
                $('.leftNav').css({"z-index":"-999"});
                $('.floatNav').css({"pointer-events":"auto"});
            }, 600);
        }

    })

    //左侧浮动导航位置
    function leftNav(){
        $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();
            $(".leftNav").animate({top:scrollTop},50);
        })
        
    }
    leftNav();

    //页面中间浮动导航
    function topNavScroll(){
        var  headerHeight = $(".header").height();
        var  heightAnd = headerHeight+363;
        var  windowScrollTop = $(window).scrollTop();
       
        var left = $(".leftNav").css("left");
        left = parseInt(left);
        if(windowScrollTop>heightAnd){
            if(left==0){
                $(".floatNav").css("left","406px");
            }
            $(".floatNav").css({"position":"fixed","top":0+"px"});
            $(".navBtn").removeClass("anchorLeftNav");
            $(".anchorEmpty").addClass("anchorLeftNav");
        }else if(windowScrollTop<=heightAnd+85){
            if(left<0){
                $(".floatNav").css("left","0px");
            }
            $(".floatNav").css({"position":"absolute","top":"460px"});
            $(".navBtn").removeClass("anchorLeftNav");
            $(".anchorEmpty").addClass("anchorLeftNav");
        }
       
    }
    $(window).scroll(function(){
        topNavScroll();
    });
    


    //页面中间浮动导航

    //原生JS 判断屏幕滚动距离函数
    function getScrollTop() {  
            var scrollPos;  
            if (window.pageYOffset) {  
            scrollPos = window.pageYOffset; }  
            else if (document.compatMode && document.compatMode != 'BackCompat')  
            { scrollPos = document.documentElement.scrollTop; }  
            else if (document.body) { scrollPos = document.body.scrollTop; }   
            return scrollPos;   
    }
})