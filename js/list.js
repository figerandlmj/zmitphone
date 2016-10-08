Zepto(function($){
	//左侧导航栏与内容来回切换
    $(".navBtn").tap(function(){
        // $(".leftNav").stop();
        // $(".main").stop();
        var left = $(".leftNav").css("left");
        left = parseInt(left);
        if(left<0){
            // $(".leftNav").animate({left:"0"});
            // $(".main").animate({marginLeft:"403"});

            $(".leftNav").animate({ left : 0},100);
            $(".main").animate({ marginLeft : 403},100);
            $(this).addClass("leftShow");
            if($(".floatNav").css("top")=="0px"){
                $(".floatNav").animate({left:406},100);
            }
            if($(".header").css("top") == "0px"){
                $(".header").animate({left:403},100);
            }
            
        }else{
            $(".leftNav").animate({left:-403},100);
            $(".main").animate({marginLeft:0},100);  
            $(this).removeClass("leftShow");
            $(".floatNav").animate({left:0},100);
             $(".header").animate({left:0},100);
        }
        
    })
    $(".mainCon").tap(function(){
        var  leftShow = $(".navBtn").hasClass("leftShow");
        if(leftShow){
            $(".leftNav").animate({left:-403},100);
            $(".main").animate({marginLeft:0},100); 
            $(".floatNav").animate({left:0},100);
            $(".header").animate({left:0},100)
        }
       
    })

    $(".con").find("img").css({
        "width": "100%"
    }).parent().css({
        "textIndent": 0
    });

    /*成功案例子页面字体*/
    $(".details p.con span").css({
        "fontSize": "30px",
        "lineHeight": "50px"
    })

    /*子页面浮动菜单*/
    function headerFix(){
        var  windowScrollTop = $(window).scrollTop();
        var headerHeight = $(".header").height();
        var left = $(".leftNav").css("left");
        left = parseInt(left);
        if(windowScrollTop > headerHeight){
            $(".header").css({
                "position":"fixed",
                "top":0+"px",
                "background": "#fff",
                "zIndex": 99
            });
        }else {
            $(".header").css({"position":"static"});
        }
    }
    $(window).scroll(function(){
        headerFix();
    });

    //左侧浮动导航位置
    function leftNav(){
        $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();
            $(".leftNav").animate({top:scrollTop});
        })
        
    }
    leftNav();

    //页面中间浮动导航
    // function topNavScroll(){
    //     var  headerHeight = $(".header").height();
    //     var  heightAnd = headerHeight+363;
    //     var  windowScrollTop = $(window).scrollTop();
       
    //     var left = $(".leftNav").css("left");
    //     left = parseInt(left);
    //     if(windowScrollTop>heightAnd){
    //         if(left==0){
    //             $(".floatNav").css("left","406px");
    //         }
    //         $(".floatNav").css({"position":"fixed","top":0+"px"});
    //         $(".navBtn").removeClass("anchorLeftNav");
    //         $(".anchorEmpty").addClass("anchorLeftNav");
    //     }else if(windowScrollTop<=heightAnd+85){
    //         if(left<0){
    //             $(".floatNav").css("left","0px");
    //         }
    //         $(".floatNav").css({"position":"absolute","top":"460px"});
    //         $(".navBtn").removeClass("anchorLeftNav");
    //         $(".anchorEmpty").addClass("anchorLeftNav");
    //     }
       
    // }
    // $(window).scroll(function(){
    //     topNavScroll();
    // });
    
    //页面中间浮动导航选中样式
    // $(".anchorBtn").tap(function(){
    //     $(this).addClass("anchorBtnSel");
    //     $(this).siblings(".anchorBtn").removeClass("anchorBtnSel");
    // })    

    //页面中间浮动导航

    //原生JS 判断屏幕滚动距离函数
    // function getScrollTop() {  
    //         var scrollPos;  
    //         if (window.pageYOffset) {  
    //         scrollPos = window.pageYOffset; }  
    //         else if (document.compatMode && document.compatMode != 'BackCompat')  
    //         { scrollPos = document.documentElement.scrollTop; }  
    //         else if (document.body) { scrollPos = document.body.scrollTop; }   
    //         return scrollPos;   
    // }

    // var appBox = document.getElementById("appBox");
    // var weChatBox = document.getElementById("weChatBox");
    // var webBox = document.getElementById("webBox");
    // var softwareBox = document.getElementById("softwareBox");
    // var seoBox = document.getElementById("seoBox");
    // var contactHead = document.getElementById("contactHead");

    // var top1 = appBox.offsetTop-87;
    // var top2 = weChatBox.offsetTop-87;
    // var top3 = webBox.offsetTop-87;
    // var top4 = softwareBox.offsetTop-87;
    // var top5 = seoBox.offsetTop-87;
    
    // var top6 =contactHead.offsetTop-87;

    // $(window).scroll(function(){
    //     var scrollTop =getScrollTop();
    //     if(scrollTop<top1){ 
    //         $(".anchorBtn").removeClass("anchorBtnSel");
    //     }
    //     if(top2>scrollTop && scrollTop>=top1){
    //         $(".anchorBtn").eq(0).addClass("anchorBtnSel");
    //         $(".anchorBtn").eq(0).siblings(".anchorBtn").removeClass("anchorBtnSel");
    //     }
    //     if(top3>scrollTop && scrollTop>=top2){
    //         $(".anchorBtn").eq(1).addClass("anchorBtnSel");
    //         $(".anchorBtn").eq(1).siblings(".anchorBtn").removeClass("anchorBtnSel");
    //     }
    //     if(top4>scrollTop && scrollTop>=top3){
    //         $(".anchorBtn").eq(2).addClass("anchorBtnSel");
    //         $(".anchorBtn").eq(2).siblings(".anchorBtn").removeClass("anchorBtnSel");
    //     }
    //     if(top5>scrollTop && scrollTop>=top4){
    //         $(".anchorBtn").eq(3).addClass("anchorBtnSel");
    //         $(".anchorBtn").eq(3).siblings(".anchorBtn").removeClass("anchorBtnSel");
    //     }
    //     if(top6>scrollTop && scrollTop>=top5){
    //         $(".anchorBtn").eq(4).addClass("anchorBtnSel");
    //         $(".anchorBtn").eq(4).siblings(".anchorBtn").removeClass("anchorBtnSel");
    //     }
    //     if(scrollTop>=top6){ 
    //         $(".anchorBtn").removeClass("anchorBtnSel");
    //     }
    // });
})