<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta name="viewport" content="width=720,user-scalable=0" charset="utf-8">
    <meta name="layoutmode" content="standard" />
    <?php
    require 'config.php';
    $data = $db -> query("SELECT * FROM `zmit_site` WHERE siteid = 1")->fetch();
    ?>
    <meta name="keywords" content="<?php echo $data['keywords']; ?>" />
    <meta name="description" content="<?php echo $data['description']; ?>" />
    <title><?php echo $data['site_title']; ?></title>
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
<div class="allBox">
    <div class="leftNav">
        <div class="empty"></div>
        <a class="leftNavList" href="index.php">
            <span class="navIcon leftNavIcon1"></span>
            中梦首页
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="app.php">
            <span class="navIcon leftNavIcon2"></span>
            手机APP
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="weChat.php">
            <span class="navIcon leftNavIcon3"></span>
            微信开发
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="web.php">
            <span class="navIcon leftNavIcon4"></span>
            网站建设
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="software.php">
            <span class="navIcon leftNavIcon5"></span>
            软件开发
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="seo.php">
            <span class="navIcon leftNavIcon6"></span>
            网络推广
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="about.html">
            <span class="navIcon leftNavIcon7"></span>
            关于中梦
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="success_list.php">
            <span class="navIcon leftNavIcon8"></span>
            成功案例
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="new.php">
            <span class="navIcon leftNavIcon9"></span>
            新闻动态
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="contact.php">
            <span class="navIcon leftNavIcon10"></span>
            联系我们
        </a>
        <div class="leftNavLine"></div>
    </div>
    <div class="main" >
        <div class="header">
            <div class="navBtn"></div>
            <img class="logo" src="images/logo.png">
            <a class="phoneBtn" href="tel:0553-4925555"></a>
            <!--浮动导航-->
            <div class="floatNav">
                <div class="navBtn anchorLeftNav"></div>
                <div class="anchorEmpty" ></div>
                <div class="anchorBtn" >APP</div>
                <div class="anchorBtn" >微信</div>
                <div class="anchorBtn"  >网站</div>
                <div class="anchorBtn"  >软件</div>
                <div class="anchorBtn"  >推广</div>
            </div>
        </div>
        <div class="mainCon" id="mainCon" >
            <!-- banner -->
            <div class="addWrap">
                <div class="swipe" id="mySwipe">
                    <div class="swipe-wrap">
                        <div><a href="javascript:;"><img class="img-responsive" src="images/banner.png"/></a></div>
                        <div><a href="javascript:;"><img class="img-responsive" src="images/banner.png" /></a></div>
                        <div><a href="javascript:;"><img class="img-responsive" src="images/banner.png"/></a></div>
                    </div>
                </div>

                <ul id="position">
                    <li class="cur"></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <!--订位置用-->
            <div class="floatEmpty"></div>

            <!--手机APP-->
            <div class="appBox" id="appBox">
                <div class="appBoxTop">
                    <div class="boxHead">
                        手机APP优势
                        <div class="line"></div>
                    </div>
                    <div class="appBoxTopListLeft">
                        <div class="iconRound color72b97f">
                            <div class="icon1"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">1.直面客户</p>
                            <p class="word">APP用户即是目标客户，服务直接面向目标消费群体 </p>
                        </div>
                    </div>
                    <div class="appBoxTopListRight">
                        <div class="iconRound colord5ae4f">
                            <div class="icon2"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">2.消息推送</p>
                            <p class="word">信息更新一步到位，让用户第一时间享受最新服务，了解最新资讯</p>
                        </div>
                    </div>
                    <div class="appBoxTopListLeft">
                        <div class="iconRound colordc7878">
                            <div class="icon3"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">3.对网络依赖降低</p>
                            <p class="word">APP的离线模式，适应了用户在路上或者无网络连接时的情况 </p>
                        </div>
                    </div>
                    <div class="appBoxTopListRight">
                        <div class="iconRound color6fb3c8">
                            <div class="icon4"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">4.速度更快</p>
                            <p class="word">APP的运行模式决定了比网站浏览更快速，轻轻一摁，轻松浏览 </p>
                        </div>
                    </div>
                    <div class="appBoxTopListLeft">
                        <div class="iconRound colore58549">
                            <div class="icon5"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">5.客户粘度高</p>
                            <p class="word">APP安装植入手机，加强了客户与服务商的黏度</p>
                        </div>
                    </div>
                    <div class="appBoxTopListRight">
                        <div class="iconRound colord27ac8">
                            <div class="icon6"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">6.创意无限</p>
                            <p class="word">有限的空间，让创意成为APP的最大亮点</p>
                        </div>
                    </div>
                    <div class="appBoxTopListLeft">
                        <div class="iconRound color67abda">
                            <div class="icon7"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">7.随时随地 互联互通</p>
                            <p class="word">无论身处何地，小小的APP让您享受所有的服务</p>
                        </div>
                    </div>
                    <div class="appBoxTopListRight">
                        <div class="iconRound color6ac1b0">
                            <div class="icon8"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">8.依赖性低</p>
                            <p class="word">无需依赖其他媒体和应用，完美实现自我的移动营销</p>
                        </div>
                    </div>
                    <div class="appBoxTopListLeft">
                        <div class="iconRound color7c94d2">
                            <div class="icon9"></div>
                        </div>
                        <div class="wordShow">
                            <p class="title">9.抢占移动市场</p>
                            <p class="word">在移动互联的时代，抢占先机，让您赢在起跑线</p>
                        </div>
                    </div>
                </div>
                <div class="appBoxDown">
                    <div class="boxHead">
                        我们的开发优势
                        <div class="line"></div>
                    </div>
                    <div class="appBoxDownList">
                        <div class="wordHead">
                            <div class="icon1"></div>
                            <span>需求对接</span>
                        </div>
                        <p class="wordCon">
                            我们将以专业、全面的知识和经验与您一起展开思维碰撞，帮您分析、发现、表现需求，打造专属于您的手机APP
                        </p>
                    </div>
                    <div class="appBoxDownList">
                        <div class="wordHead">
                            <div class="icon2"></div>
                            <span>UI设计</span>
                        </div>
                        <p class="wordCon">
                            我们为您提供精美的UI设计、生动的UI展现，将您的要求精致到每1个像素，唯美和谐的视觉效果，将为您提供精细化用户体验
                        </p>
                    </div>
                    <div class="appBoxDownList">
                        <div class="wordHead">
                            <div class="icon3"></div>
                            <span>流程管理</span>
                        </div>
                        <p class="wordCon">
                            基于丰富的开发经验，我们总结出一套高质量、高效率、高互动的开发流程，让您不仅如期获得完美产品，还能享受体验式开发的愉悦
                        </p>
                    </div>
                    <div class="appBoxDownList">
                        <div class="wordHead">
                            <div class="icon4"></div>
                            <span>推广营销</span>
                        </div>
                        <p class="wordCon">
                            我们将基于ASO优化规则为您的APP制定出专业、有效的营销推广方案，迅速获取大量精准“粉丝群”
                        </p>
                    </div>
                    <div class="appBoxDownList">
                        <div class="wordHead">
                            <div class="icon5"></div>
                            <span>后期维护</span>
                        </div>
                        <p class="wordCon">
                            我们将以完善的售后服务体系和专业的技术人员为您提供即时售后咨询和服务，同时提供定期系统升级，保障您APP持续正常运行
                        </p>
                    </div>
                    <div class="appBoxDownList">
                        <div class="wordHead">
                            <div class="icon6"></div>
                            <span>保护隐私</span>
                        </div>
                        <p class="wordCon">
                            我们持续优化保密制度并安排专人对相关资料进行封存和保管，保证客户资料和隐私的绝对安全
                        </p>
                    </div>
                </div>
            </div>
            <a class="moreBtn" href="app.php">
                点击了解更多APP开发业务
                <span class="icon"></span>
            </a>

            <!--微信-->
            <div id="weChatBox" style="width:100%;height:85px;"></div>
            <div class="weChatBox" >
                <div class="loadingwechat">
                    正在加载中，请稍后...
                </div>
            </div>
            <a class="moreBtn " href="weChat.php">
                点击了解更多微信开发业务
                <span class="icon"></span>
            </a>

            <!-- 网站 -->
            <div id="webBox" style="width:100%;height:85px;"></div>
            <div class="webBox"  >
                <div class="loadingweb">
                    正在加载中，请稍后...
                </div>
            </div>
            <a class="moreBtn " href="web.php">
                点击了解更多网站建设业务
                <span class="icon"></span>
            </a>

            <!-- 软件 -->
            <div id="softwareBox" style="width:100%;height:85px;"></div>
            <div class="softwareBox"  >

                <div class="loadingsoft">
                    正在加载中，请稍后...
                </div>
            </div>
            <a class="moreBtn " href="software.php">
                点击了解更多软件开发业务
                <span class="icon"></span>
            </a>

            <!-- seo -->
            <div id="seoBox" style="width:100%;height:85px;"></div>
            <div class="seoBox" >

                <div class="loadingseo">
                    正在加载中，请稍后...
                </div>
            </div>
            <a class="moreBtn " href="seo.php">
                点击了解更多网络推广业务
                <span class="icon"></span>
            </a>

            <!-- contact -->
            <div class="contactHead" id="contactHead">
                <p class="bigWord">联系我们</p>
                <p class="smallWord">请拨打我们的联系电话，让我们为您提供最真诚的服务</p>
                <div class="line"></div>
            </div>
            <div class="contactList">
                <span>0553-3901828</span>
                <div class="contactTelIcon"></div>
            </div>
            <div class="contactList">
                <span>181 3030 1234</span>
                <div class="contactPhoneIcon"></div>
            </div>
            <div class="contactList">
                <span>123456789</span>
                <div class="contactQQIcon"></div>
            </div>
            <div class="contactList " style="width:605px; font-size:34px;">
                <span>芜湖市高新区青年创业园4号楼20层</span>
                <div class="contactadressIcon"></div>
            </div>
            <div class="foot">
                <p style="padding-top:30px; margin-top:0px;">Copyright © 2014-2015 中梦科技   All Right Reserved</p>
                <p>皖ICP备14003592号</p>
            </div>
        </div>
    </div>
</div>


</body>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script> -->
<script type="text/javascript" src="js/zepto.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src='js/hhSwipe.js' type="text/javascript"></script>
<script type="text/javascript">
    Zepto(function($){
        //banner
        var bullets = document.getElementById('position').getElementsByTagName('li');
        var banner = Swipe(document.getElementById('mySwipe'), {
            auto: 3000,
            continuous: true,
            disableScroll:false,
            callback: function(pos) {
                var i = bullets.length;
                while (i--) {
                    bullets[i].className = ' ';
                }
                bullets[pos].className = 'cur';
            }
        })
    });

    //load 事件
    var flag=0;
    $(function(){
        ////页面中间浮动导航选中样式
        $(".anchorBtn").click(function(){
            var index= $(this).index();
            if(index==2){
                scrollTo(0,465);
            }
            if(index==3){
                if(flag==0){
                    flag=1;
                    $.get('<?php echo $host_name; ?>zmitphone/AjaxweChatBox.php', function (response) {
                        $(".loadingwechat").hide();
                        $(".weChatBox").append(response)
                    })
                    scrollTo(0,$("#weChatBox").offset().top - 50);
                }
                else{
                    scrollTo(0,$("#weChatBox").offset().top - 50);
                }
            }
            if(index==4){
//                if(flag==0&&flag){
//                    setTimeout(function () {
//                        flag=1;
//                        $.get('<?php //echo $host_name; ?>//zmitphone/AjaxweChatBox.php', function (response) {
//                            $(".loadingwechat").hide();
//                            $(".weChatBox").append(response)
//                        })
//                        flag=2;
//                        $.get('<?php //echo $host_name; ?>//zmitphone/ajaxWebBox.php', function (response) {
//                            $(".loadingweb").hide();
//                            $(".webBox").append(response)
//                        })
//                        scrollTo(0,6620);
//                    },2000);
//                }
                if(flag==1){
                    flag=2;
                    $.get('<?php echo $host_name; ?>zmitphone/ajaxWebBox.php', function (response) {
                        $(".loadingweb").hide();
                        $(".webBox").append(response)
                    })
                    scrollTo(0,$("#webBox").offset().top);
                }else{
                    scrollTo(0,$("#webBox").offset().top);
                }
            }
            if(index==5){
//                if(flag==0){
//                    setTimeout(function () {
//                        flag=1;
//                        $.get('<?php //echo $host_name; ?>//zmitphone/AjaxweChatBox.php', function (response) {
//                            $(".loadingwechat").hide();
//                            $(".weChatBox").append(response)
//                        })
//                        flag=2;
//                        $.get('<?php //echo $host_name; ?>//zmitphone/ajaxWebBox.php', function (response) {
//                            $(".loadingweb").hide();
//                            $(".webBox").append(response)
//                        })
//
//                        flag = 3;
//                        $.get('<?php //echo $host_name; ?>//zmitphone/ajaxSoftwareBox.php', function (response) {
//                            $(".loadingsoft").hide();
//                            $(".softwareBox").append(response)
//                        })
//                        scrollTo(0,9300);
//                    },3000);
//
//
//                }
                if(flag==2) {
                    flag = 3;
                    $.get('<?php echo $host_name; ?>zmitphone/ajaxSoftwareBox.php', function (response) {
                        $(".loadingsoft").hide();
                        $(".softwareBox").append(response)
                    })
                    scrollTo(0,$("#softwareBox").offset().top);
                }else{
                    scrollTo(0,$("#softwareBox").offset().top);
                }
            }
            if(index==6){
                if(flag==3){
                    flag=4;
                    $.get('<?php echo $host_name; ?>zmitphone/ajaxSeoBox.php', function (response) {
                        $(".loadingseo").hide();
                        $(".seoBox").append(response)
                    })
                    scrollTo(0,$("#seoBox").offset().top);
                }
                else{
                    scrollTo(0,$("#seoBox").offset().top);
                }
            }

        })
        $(window).scroll(function() {

            var h=$(window).scrollTop() ;//获取滚动条距离顶部的长度
            var h1=$('.appBox').height();
            var h2=2486;
            var h3=2449;
            var h4=1728;
            var h5=1865;
            var head_height=$('.header').height();
            var banner_height=$('.addWrap').height();
            var h6=head_height+banner_height;
console.log(h);
            //浮动导航
            if(h<h6){
                $(".anchorBtn").removeClass("anchorBtnSel");
            }
            if(h>h6&&h<h1+h6){
                $(".anchorBtn").eq(0).addClass("anchorBtnSel");
                $(".anchorBtn").eq(0).siblings(".anchorBtn").removeClass("anchorBtnSel");
            }
            if(h>h6+h1&&h<h6+h1+h2){
                $(".anchorBtn").eq(1).addClass("anchorBtnSel");
                $(".anchorBtn").eq(1).siblings(".anchorBtn").removeClass("anchorBtnSel");

            }
            if(h>h6+h1+h2&&h<h6+h1+h2+h3){
                $(".anchorBtn").eq(2).addClass("anchorBtnSel");
                $(".anchorBtn").eq(2).siblings(".anchorBtn").removeClass("anchorBtnSel");

            }
            if(h>h6+h1+h2+h3&&h<h6+h1+h2+h3+h4){
                $(".anchorBtn").eq(3).addClass("anchorBtnSel");
                $(".anchorBtn").eq(3).siblings(".anchorBtn").removeClass("anchorBtnSel");

            }
            if(h>h6+h1+h2+h3+h4&&h<h6+h1+h2+h3+h4+h5){
                $(".anchorBtn").eq(4).addClass("anchorBtnSel");
                $(".anchorBtn").eq(4).siblings(".anchorBtn").removeClass("anchorBtnSel");

            }


//加载weixin页面(在当前页面四分之一时开始加载)
            if(h>=h1*(1/4)+h6&&h<h1+h6+h2){
                if(flag==0){
                    flag=1;
                    $.get('<?php echo $host_name; ?>zmitphone/AjaxweChatBox.php', function (response) {
                        $(".loadingwechat").hide();
                        $(".weChatBox").append(response)
                    })
//                    alert(flag);
                }
            }
//加载web页面
            if(h>=h1+h6+h2*(1/4)&&h1+h6+h2+h3){
                if(flag==1){
                    flag=2;
                    $.get('<?php echo $host_name; ?>zmitphone/ajaxWebBox.php', function (response) {
                        $(".loadingweb").hide();
                        $(".webBox").append(response)
                    })
//                    alert(flag);


                }
            }
            //加载软件页面
            if(h>=h1+h6+h2+h3*(1/4)&&h<h1+h6+h2+h3+h4){
                if(flag==2){
                    flag=3;
                    $.get('<?php echo $host_name; ?>zmitphone/ajaxSoftwareBox.php', function (response) {
                        $(".loadingsoft").hide();
                        $(".softwareBox").append(response)
                    })
//                    alert(flag);

                }
            }
            //加载SEO页面
            if(h>=h1+h6+h2+h3+h4*(1/4)&&h<h1+h6+h2+h3+h4+h5){
                if(flag==3){
                    flag=4;
                    $.get('<?php echo $host_name; ?>zmitphone/ajaxSeoBox.php', function (response) {
                        $(".loadingseo").hide();
                        $(".seoBox").append(response)
                    })
//                    alert(flag);

                }
            }
        });

    })

</script>